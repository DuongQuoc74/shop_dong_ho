<?php 

if (isset($_GET['dangxuat'])) {
unset($_SESSION['login']);
session_destroy();
header('Location: ../index.php');
}

 ?>
<div class="menu">
					<ul class="list-menu">
					
						<li><a href="index.php?menupage=trangchu&id">Trang chủ</a></li>
						<li><a href="index.php?menupage=giohang&id">Giỏ hàng</a></li>
						<li><a href="index.php?menupage=lichsudonhang&id">Lịch sử đơn hàng</a></li>
						<li><a href="index.php?menupage=nguoidung&id">Thông tin người dùng</a></li>
						<li><a href="index.php?dangxuat">Đăng xuất: <?php echo $_SESSION['login'] ?></a></li>

					</ul>
</div>
<div class="clear"></div>