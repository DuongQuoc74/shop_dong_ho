<div class="clear"></div>
<div class="main">
	<?php 


	if (isset($_GET['menuadmin'])) {
		$menuadmin = $_GET['menuadmin'];
	}
	else{
		$menuadmin ='';
		include("thongke.php");
	}
	if ($menuadmin=='danhmucsanpham') {
		include("quanlydanhmuc.php");
	}
	if ($menuadmin=='quanlysanpham') {
		include("quanlysanpham.php");
	}
	if ($menuadmin=='khachhang') {
		include("quanlykhachhang.php");
	}
	if ($menuadmin=='nhanvien') {
		include("quanlynhanvien.php");
	}
	if ($menuadmin=='taikhoan') {
		include("quanlytaikhoan.php");
	}
	if ($menuadmin=='nhacungcap') {
		include("quanlynhacungcap.php");
	}

	// chức năng danh mục

	if($menuadmin == 'themdanhmuc'){
		include('chucnangadmin/themdanhmuc.php');
	}
	if($menuadmin == 'suadanhmuc'){
		include('chucnangadmin/suadanhmuc.php');
	}

	// chức năng quản lý sản phẩm

	if($menuadmin =='themsanpham'){
		include('chucnangadmin/themsanpham.php');

	}
	if($menuadmin =='suasanpham'){
		include('chucnangadmin/suasanpham.php');

	}

	// chức năng khách hàng

	if ($menuadmin =='themkhachhang') {
		include('chucnangadmin/themkhachhang.php');
	}

	if ($menuadmin =='suakhachhang') {
		include('chucnangadmin/suakhachhang.php');
	}

	// chức năng nhà cung cấp

	if ($menuadmin =='themnhacungcap') {
		include('chucnangadmin/themnhacungcap.php');
	}
	
	if ($menuadmin =='suanhacungcap') {
		include('chucnangadmin/suanhacungcap.php');
	}

	if ($menuadmin =='chonnhacungcap') {
		include('chucnangadmin/hienthisanpham.php');
	}

	
	if ($menuadmin =='chitietsanpham') {
		include('chucnangadmin/xemchitietsanphamm.php');
	}

	// thêm vào giỏ hàng

	if ($menuadmin =='themvaogiohang') {
		include('chucnangadmin/themvaogiohang.php');
	}

	if ($menuadmin =='giohang') {
		include('chucnangadmin/tranggiohang.php');
	}



	// chức năng nhân viên

	if ($menuadmin =='themnhanvien') {
		include('chucnangadmin/themnhanvien.php');
	}
	if ($menuadmin =='suanhanvien'){
		include('chucnangadmin/suanhanvien.php');
	}

	// chức năng tài khoản
	if ($menuadmin =='themtaikhoan') {
		include('chucnangadmin/themtaikhoan.php');
	}
	if ($menuadmin =='suataikhoan'){
		include('chucnangadmin/suataikhoan.php');
	}






	 ?>
</div>