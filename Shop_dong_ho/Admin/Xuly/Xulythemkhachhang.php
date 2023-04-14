<?php 

	require('../../chucnang/condb.php');



		$tenkh = $_POST['tenkh'];
		$tentk = $_POST['tentk'];
		$email = $_POST['email'];
		$sdt = $_POST['sdt'];
		$gioitinh = $_POST['gioitinh'];
		$ngaysinh = $_POST['ngaysinh'];
		$diachi = $_POST['diachi'];
		$quyen = 2;
		$trangthai = 1;

	if (isset($_POST['themkhachhang'])) {
		$sqlmasp = "SELECT COUNT(*) + 1 as `count` FROM khachhang";
		$qrmasp = mysqli_query($conn,$sqlmasp);
		$row = mysqli_fetch_assoc($qrmasp);
		$count = $row['count'];
		$makh = "KH$count";
		

		$sql = "INSERT INTO khachhang(makh,ten,tenkh,gmail,sdt,gioitinh,ngaysinh,diachi,quyen,trangthai) VALUE('$makh','$tentk','$tenkh','$email','$sdt','$gioitinh','$ngaysinh','$diachi','$quyen','$trangthai')";
		$qr = mysqli_query($conn,$sql);

	}
	if (isset($_POST['suataikhoan'])) {
		$makh = $_GET['sua'];
		$sql = "UPDATE khachhang SET ten = '$tentk', tenkh = '$tenkh', gmail = '$email', sdt ='$sdt', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', diachi = '$diachi' WHERE makh = '$makh'";
		$qr = mysqli_query($conn,$sql);

	}
	if ($_GET['xoa']) {
		$makh = $_GET['xoa'];
		$sql = "DELETE FROM khachhang WHERE makh = '$makh'";
		$qr = mysqli_query($conn,$sql);

	}


	header('Location: ../index.php?menuadmin=khachhang');

 ?>