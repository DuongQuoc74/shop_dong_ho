<div class="clear"></div>
<div class="main">
	<?php 


	if (isset($_GET['menukho'])) {
		$menuadmin = $_GET['menukho'];
	}
	if ($menuadmin=='sanpham') {
		include("quanlysanpham.php");
	}
	
	if ($menuadmin=='donhang') {
		include("quanlydonhang.php");
	}
	if ($menuadmin=='hoadon') {
		include("quanlyhoadon.php");
	}

	// chức năng danh mụ

	 ?>
</div>