<?php 
	require('../../chucnang/condb.php');
	
		$taikhoan = $_GET['taikhoan'];
		$tenkh = $_POST['tenkh'];
		$sdt = $_POST['sdt'];
		$gioitinh = $_POST['gioitinh'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		$ngaysinh = $_POST['ngaysinh'];

		$sqlthemkh = "SELECT COUNT(*) + 1 as `count` FROM khachhang";
		$qrthemkh = mysqli_query($conn,$sqlthemkh);
		$rowthemkh = mysqli_fetch_array($qrthemkh);
		$count = $rowthemkh['count'];
		$makh = "KH$count";
	if ($_POST['themthongtin']) {
		
		$sql = "INSERT INTO khachhang(makh,ten,tenkh,gmail,sdt,gioitinh,ngaysinh,diachi,quyen,trangthai) VALUE('$makh','$taikhoan','$tenkh','$email','$sdt','$gioitinh','$ngaysinh','$diachi',2,1)";
		$qr = mysqli_query($conn,$sql);


	}
	if ($_POST['suathongtin']) {
		
		// $sql = "INSERT INTO khachhang(makh,ten,tenkh,gmail,sdt,gioitinh,ngaysinh,diachi,quyen,trangthai) VALUE('$makh','$taikhoan','$tenkh','$email','$sdt','$gioitinh','$ngaysinh','$diachi',2,1)";
		$sql = "UPDATE khachhang SET tenkh = '$tenkh', gmail = '$email', sdt = '$sdt', gioitinh = '$gioitinh', diachi = '$diachi' WHERE ten = '$taikhoan'";
		$qr = mysqli_query($conn,$sql);


	}

	header('Location: ../index.php?menupage=nguoidung&id');

 ?>