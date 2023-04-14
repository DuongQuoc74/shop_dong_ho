<?php 

	require('../../chucnang/condb.php');
	$taikhoan = $_POST['tentk'];
	$matkhau = md5($_POST['matkhau']);
	$quyen = $_POST['quyen'];

	if (isset($_POST['themtaikhoan'])) {
		$sqlmasp = "SELECT COUNT(*) + 1 as `count` FROM taikhoan";
		$qrmasp = mysqli_query($conn,$sqlmasp);
		$row = mysqli_fetch_assoc($qrmasp);
		$count = $row['count'];
		$matk = "TK$count";
		$sql = "INSERT INTO taikhoan(matk,taikhoan,matkhau,quyen) VALUE('$matk','$taikhoan','$matkhau','$quyen')";
		$qr = mysqli_query($conn,$sql);

	}
	if (isset($_POST['suataikhoan'])) {
		$matk = $_GET['sua'];
		$sql = "UPDATE taikhoan SET taikhoan = '$taikhoan', matkhau = '$matkhau', quyen = '$quyen' WHERE matk = '$matk'";
		$qr = mysqli_query($conn,$sql);
	}
	if ($_GET['xoa']) {
		$matk = $_GET['xoa'];
		$sql = "DELETE FROM taikhoan WHERE matk = '$matk'";
		$qr = mysqli_query($conn,$sql);
	}
	header('Location: ../index.php?menuadmin=taikhoan');

 ?>