<?php 
	session_start();
	require('../../chucnang/condb.php');	
    $now = date("d/m/y");
    //echo $today;
     $taikhoan = $_SESSION['login'];


    $codecart = rand(0,999);
   	$sqldonhang ="INSERT INTO donhang(taikhoan,codecart,tinhtrang,huydonhang,ngaydat) VALUES('$taikhoan','$codecart',0,0,'$now')";
    $qrdonhang = mysqli_query($conn,$sqldonhang);
     if ($qrdonhang){
    foreach($_SESSION['cart1'] as $key => $value){
        $idsanpham = $value['idgiohang'];
        $soluong = $value['soluong'];
        $sql1 = "UPDATE sanpham SET sanpham.soluong = sanpham.soluong - $soluong where sanpham.masp = '$idsanpham' ";
         mysqli_query($conn,$sql1);
        $sql ="INSERT INTO donhangchitiet(codecart,idsanpham,soluongdh) VALUES('$codecart','$idsanpham','$soluong')";
        $qr = mysqli_query($conn,$sql);
        header('Location: camon.php');
         }
    }
 unset($_SESSION['cart1']);
 header("location: ../index.php?menupage=giohang");
 ?>