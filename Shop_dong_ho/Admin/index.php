<?php 
session_start();
require('../chucnang/condb.php');
if (!isset($_SESSION['login'])) {
	unset($_SESSION['login']);
 	header('Location: ../index.php');
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/khungadmin.css">
	<link rel="stylesheet" type="text/css" href="css/quanlydanhmuc.css">
	<link rel="stylesheet" type="text/css" href="css/quanlysanpham.css">
	<link rel="stylesheet" type="text/css" href="css/quanlykhachhang.css">
	<link rel="stylesheet" type="text/css" href="css/hienthisanphamnhacungcap.css">
	<link rel="stylesheet" type="text/css" href="css/chitietsanpham.css">
	<title>Trang Admin</title>
</head>
<body>
		<h2>Đây là trang admin</h2>
			<div class="warpper">
			<?php 


			include('header.php');
			include('menuadmin.php');
			include('main.php');
			include('footer.php');


			 ?>
			</div>
			<script src="../Js/thongbaoloi.js"></script>
			<script src="js/themdanhmuc.js"></script>
<script>

				
</script>
</body>
</html>