<?php
	session_start();
	require('../../chucnang/condb.php');
	if(isset($_POST['themvaogiohang'])){
		
		$idgiohang = $_GET['idgiohang'];
		$soluong = $_POST['soluongsanpham'];
		$sql =" SELECT * FROM sanpham WHERE masp ='".$idgiohang."' LIMIT 1";
		$qr = mysqli_query($conn,$sql); 
		$row = mysqli_fetch_array($qr);
		if ($row) {
			$sanpham_moi = array(array('tensanpham' => $row['tensanpham'],'idgiohang'=>$idgiohang,'soluong'=>$soluong,'giatien'=>$row['giatien']*$soluong,'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp'])); // tao san pham moi
			// kiểm tra session
			if (isset($_SESSION['cart1'])){
				$found = false;
				foreach ($_SESSION['cart1'] as $cart_item) {
					if ($cart_item['idgiohang']==$idgiohang) {
						$sanpham[] = array('tensanpham' => $cart_item['tensanpham'],'idgiohang'=>$cart_item['idgiohang'],'soluong'=>$soluong + $cart_item['soluong'],'giatien'=>$cart_item['giatien'] + ($row['giatien']*$soluong),'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
						$found = true; // neu san pham trung nhau thi cong them so luong
					}else{
						$sanpham[] = array('tensanpham' => $cart_item['tensanpham'],'idgiohang'=>$cart_item['idgiohang'],'soluong'=>$cart_item['soluong'],'giatien'=>$cart_item['giatien'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']); // them mot san pham khac
					}
				}
				if ($found == false) {
					$_SESSION['cart1']= array_merge($sanpham,$sanpham_moi);// tron mang
				}else{
					$_SESSION['cart1'] =$sanpham; // cong them vo san pham
				}
			}else{
				$_SESSION['cart1'] = $sanpham_moi; // mot san pham moi
			}
		}
		  header("location: ../index.php?menupage=giohang");

			
		//print_r($_SESSION['cart']);
	}
	 
 ?>