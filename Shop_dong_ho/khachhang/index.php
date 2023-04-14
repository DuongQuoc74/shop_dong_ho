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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/khachhang.css">
	<link rel="stylesheet" type="text/css" href="css/hienthisanpham.css">
	<link rel="stylesheet" type="text/css" href="css/khungsanpham.css">
	<link rel="stylesheet" type="text/css" href="../css/slides.css">
	<link rel="stylesheet" type="text/css" href="css/chitietsanpham.css">
	<link rel="stylesheet" type="text/css" href="css/giohang.css">
	<link rel="stylesheet" type="text/css" href="css/themthongtinnguoidung.css">
	<link rel="stylesheet" type="text/css" href="css/khungtimkiem.css">
	<link rel="stylesheet" type="text/css" href="css/sapxep.css">

	<title>Trang khách hàng</title>
</head>
<body>
			<div class="warpper">
				<div class="header">logo</div>
				<!-- né trang index? ra nha nó bị tính năng rồi (đã cứu chữa như không thành)-->
				<?php 
					// if ($_GET['menupage']) {
					// 	$menupage =$_GET['menupage'];
					// 	if ($menupage == 'trangchu'){
					// 		include('sliders.php');
					// 	}
					// 	else{
					// 		echo '';
					// 	}
					// }
					// else{
					// 	include('sliders.php');
					// }
					
					
					include('menu.php');
					include('main.php');


				 ?>
				<div class="clear"></div>
				<div class="footer">đáy</div>


			</div>
		<script src="../Js/slides.js"></script>
		<script src="js/dieukhiensoluong.js"></script>
</body>
</html>