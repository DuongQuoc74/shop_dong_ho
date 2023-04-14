<?php 


 	require('../../chucnang/condb.php');

 	$tennv = $_POST['tennv'];
 	$sdt = $_POST['sdt'];
 	$diachi = $_POST['diachi'];
 	$gioitinh = $_POST['gioitinh'];
 	$ngaydilam = $_POST['ngaydilam'];
 	$ngaysinh = $_POST['ngaysinh'];
 	$quyen = $_POST['quyen'];
 	// thêm tài khoản nhân viên
 		$sqltk = "SELECT COUNT(*) + 1 as `count` FROM taikhoan";
		$qrtk = mysqli_query($conn,$sqltk);
		$rowtk = mysqli_fetch_assoc($qrtk);
		$counttk = $rowtk['count'];
		$matk = "TK$counttk";
 		
 	
 	if (isset($_POST['themnhanvien'])) {
 		$sqlmasp = "SELECT COUNT(*) + 1 as `count` FROM nhanvien";
		$qrmasp = mysqli_query($conn,$sqlmasp);
		$row = mysqli_fetch_assoc($qrmasp);
		$count = $row['count'];
		$manv = "NV$count";

		$sql = "INSERT INTO nhanvien(manv,tennhanvien,sdtnv,gioitinh,diachi,ngaydilam,ngaysinh,quyen,matk) VALUE('$manv','$tennv','$sdt','$gioitinh','$diachi','$ngaydilam','$ngaysinh','$quyen','$matk')";
		$qr = mysqli_query($conn,$sql);


 	}
 	if (isset($_POST['suanhanvien'])) {
 		$manv = $_GET['sua'];
 		$sql = "UPDATE nhanvien SET tennhanvien = '$tennv', sdtnv = '$sdt', gioitinh ='$gioitinh',diachi = '$diachi' ,ngaydilam ='$ngaydilam', ngaysinh ='$ngaysinh', quyen = '$quyen' WHERE manv = '$manv'";
 		$qr = mysqli_query($conn,$sql);
 	}
 	if ($_GET['xoa']) {
 		$manv = $_GET['xoa'];
 		$sql = "DELETE FROM nhanvien WHERE manv = '$manv'";
 		$qr = mysqli_query($conn,$sql);
 	}
 	header('Location: ../index.php?menuadmin=nhanvien');

 ?>