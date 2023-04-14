<?php 
	if (isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
	unset($_SESSION['login']);
	session_destroy();
	header('Location: ../index.php');
	}
 ?>
 <p><a href="index.php?dangxuat=1">Đăng xuất: <?php echo $_SESSION['login'] ?></a></p>