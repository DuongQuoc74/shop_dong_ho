<?php 


	require('../../chucnang/condb.php');

		$tensp = $_POST['tensp'];
		$soluongsp = $_POST['soluongsp'];
		
		$hinhanhsp = $_FILES['hinhanhsp']['name'];
 		$hinhanh_tmp = $_FILES['hinhanhsp']['tmp_name'];

		$danhmucsp = $_POST['danhmucsp'];
		$giatiensp= $_POST['giatiensp'];
		$ngaynhapsp = $_POST['ngaynhapsp'];
		$nhacungcap = $_POST['nhacungcap'];

		



	if (isset($_POST['themsanpham'])) {
		$sqlmasp = "SELECT COUNT(*) + 1 as `count` FROM sanpham";
		$qrmasp = mysqli_query($conn,$sqlmasp);
		$row = mysqli_fetch_assoc($qrmasp);
		$count = $row['count'];
		$masp = "SP$count";




		// echo $tensp = $_POST['tensp'];
		// echo $soluongsp = $_POST['soluongsp'];
		
		// //  $hinhanhsp = $_FILES['hinhanhsp']['name'];
 		// // $hinhanh_tmp = $_FILES['hinhanhsp']['tmp_name'];

		// echo $danhmucsp = $_POST['danhmucsp'];
		// echo $giatiensp= $_POST['giatiensp'];
		// echo $ngaynhapsp = $_POST['ngaynhapsp'];
		// echo $nhacungcap = $_POST['nhacungcap'];

		$sql = "INSERT INTO sanpham(masp,tensanpham,soluong,hinhanh,danhmuc,giatien,ngaynhapsp,nhacungcap,tinhtrang) VALUE('$masp','$tensp','$soluongsp','$hinhanhsp','$danhmucsp','$giatensp','$ngaynhapsp','$nhacungcap',1)";
		$qr = mysqli_query($conn,$sql);
		move_uploaded_file($hinhanh_tmp,'../../images/sanpham1/'.$hinhanhsp);
		
	}
	if (isset($_POST['suasanpham'])) {
		$masp = $_GET['sua'];
				 if (empty($hinhanhsp)) {

		        $query = "SELECT * FROM sanpham WHERE masp = '$masp'";
		      	$qrhinhanh = mysqli_query($conn,$query);

		        while ($row = mysqli_fetch_assoc($qrhinhanh)) {
		           $hinhanhsp = $row['hinhanhsp'];
		        }
		    }
		
		$sql = "UPDATE sanpham SET tensanpham = '$tensp' , soluong = '$soluongsp', hinhanh = '$hinhanhsp', danhmuc = '$danhmucsp', giatien = '$giatensp' , ngaynhapsp = '$ngaynhapsp', nhacungcap = '$nhacungcap' WHERE masp = '$masp' ";
		$qr = mysqli_query($conn,$sql);
		move_uploaded_file($hinhanh_tmp,'../../images/sanpham1/'.$hinhanhsp);
	}
	if ($_GET['xoa']) {
		$masp = $_GET['xoa'];
		$sql = "DELETE FROM sanpham WHERE masp = '$masp'";
		$qr = mysqli_query($conn,$sql);

	}

	header('Location: ../index.php?menuadmin=quanlysanpham');




		
		


 ?>

