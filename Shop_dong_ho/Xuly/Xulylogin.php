<?php 
session_start();
require('../chucnang/condb.php');
if(isset ($_POST['login'])){
	$taikhoan = $_POST['taikhoan'];
	$matkhau = md5($_POST['password']);

	$sqlkiemtra = "SELECT * FROM taikhoan WHERE taikhoan = '$taikhoan' and matkhau ='$matkhau' LIMIT 1";
	$qrkiemtra = mysqli_query($conn,$sqlkiemtra);
	$count = mysqli_num_rows($qrkiemtra);
	if ($count > 0) {
		$sql = "SELECT * FROM taikhoan tk WHERE taikhoan = '$taikhoan' and matkhau ='$matkhau' LIMIT 1";
		$qr = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($qr);
		if ($row['quyen'] == 1) {
			
			header("location: ../Admin/index.php");
			$_SESSION['login'] = $taikhoan;
		}
		if ($row['quyen'] == 2) {
			
			header("location: ../khachhang/index.php");
			$_SESSION['login'] = $taikhoan;
		}
		if ($row['quyen'] == 3) {
			
			header("location: ../nhanvienkho/index.php");
			$_SESSION['login'] = $taikhoan;
		}
		
	}else{

		echo' <script >alert("Tài khoản hoặc mật khẩu không đúng vui lòng nhập lại.")</script>';
		header("location: ../index.php");
	}



}

 ?>
