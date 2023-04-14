<?php 
session_start();
require('../chucnang/condb.php');
if(isset ($_POST['dangky'])){
	$taikhoan = $_POST['taikhoandy'];
	$matkhau = md5($_POST['passworddy']);

	$sqldem = "SELECT COUNT(*) + 1  as`count` FROM taikhoan";
	$qrdem = mysqli_query($conn,$sqldem);
	$rowdem = mysqli_fetch_assoc($qrdem);
	$count = $rowdem['count'];
	echo $matk = "TK$count";


	$sql = "INSERT INTO taikhoan(matk,taikhoan,matkhau,quyen) VALUE('$matk','$taikhoan','$matkhau',2)";
	$qr = mysqli_query($conn,$sql);

	header('Location: ../index.php');
}

?>