<?php 

 require('../../chucnang/condb.php');
	$tenncc = $_POST['tenncc'];
	$mathang = $_POST['mathang'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$diachi = $_POST['diachi'];

if (isset($_POST['themnhacungcap'])) {
		$sqlmasp = "SELECT COUNT(*) + 1 as `count` FROM nhacungcap";
		$qrmasp = mysqli_query($conn,$sqlmasp);
		$row = mysqli_fetch_assoc($qrmasp);
		$count = $row['count'];
		$mancc = "NC$count";

		$sql = "INSERT INTO nhacungcap(mancc,tenncc,mathang,sdtncc,emailncc,diachincc) VALUE('$mancc', '$tenncc','$mathang','$sdt','$email','$diachi')";
		$qr = mysqli_query($conn,$sql);

}
if (isset($_POST['suanhacungcap'])) {
	$mancc = $_GET['sua'];
	$sql = "UPDATE nhacungcap SET tenncc = '$tenncc', mathang = '$mathang', sdtncc = '$sdt', emailncc = '$email' , diachincc = '$diachi' WHERE mancc = '$mancc'";
	$qr = mysqli_query($conn,$sql);
}
if ($_GET['xoa']) {
	$mancc = $_GET['xoa'];
	$sql = "DELETE FROM nhacungcap WHERE mancc = '$mancc'";
	$qr = mysqli_query($conn,$sql);
}
header('Location: ../index.php?menuadmin=nhacungcap');


 ?>