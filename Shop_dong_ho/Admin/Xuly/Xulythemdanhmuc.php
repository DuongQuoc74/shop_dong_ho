<?php
require('../../chucnang/condb.php'); 
?>
<?php 

	if (isset($_POST['themdanhmuc'])) {
		
			$matl = $_POST['matl'];
			$tentl = $_POST['tentl'];


	}
	if (isset($_POST['themdanhmuc'])) {
		
		$sql = "INSERT INTO theloai(tentl,matlsp) VALUE('$tentl','$matl')";
		$qr = mysqli_query($conn,$sql);

	}

	if (isset($_POST['suadanhmuc'])) {

		$sua = $_GET['sua'];
		
		$sql = "UPDATE theloai SET tentl = '$tentl' WHERE matlsp = '$sua'";
		$qr = mysqli_query($conn,$sql);

	}

	if ($_GET['xoa']) {

	 	$xoa = $_GET['xoa'];
	 	$sql = "DELETE FROM theloai WHERE matlsp = '$xoa'";
	 	$qr = mysqli_query($conn,$sql);
	}


	header('Location: ../index.php?menuadmin=danhmucsanpham');

 ?>