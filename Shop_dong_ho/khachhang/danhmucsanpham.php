<?php 
	require('../chucnang/condb.php');
	if ($_GET['id']) {
		$matl = $_GET['id'];
		
	}
	else{
		$matl = '';
	}
	$sql = "SELECT * FROM theloai WHERE matlsp = '$matl'";
	$qr = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($qr);

 ?>
<h3 style="text-align: center;"><?php echo $row['tentl'] ?></h3>
<div class="khungsanpham">
</div>