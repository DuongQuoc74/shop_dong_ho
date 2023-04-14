<div class="main">
	<?php include('slidebar.php') ?>
					<div class="main-content">
						<?php 

						if (isset($_GET['menupage'])){

							$menupage = $_GET['menupage'];
							}
							else{
							$menupage='';
							include('sliders.php');
							include("spmoi.php");
							}
							if ($menupage =='trangchu'){
								include('sliders.php');
								include('khungtimkiem.php');
								include('sapxep.php');
								include("chucnang/hienthisanpham.php");

							}
							if ($menupage == 'danhmucsanpham') {
								 include('khungtimkiem.php');
								 include("danhmucsanpham.php");
								 include("chucnang/hienthisanphamtheotheloai.php");

							}
							if ($menupage =='giohang'){
								include("giohang.php");
							}
							if ($menupage =='chitietsanpham') {
								 include("chucnang/xemchitietsanpham.php");

							}
							if ($menupage =='themvaogiohang') {
								 include("chucnang/themvaogiohang.php");

							}
							if($menupage =='lichsudonhang'){
								include("chucnang/lichsudonhang.php");
							}
							if($menupage =='xemdonhang'){
								include("chucnang/xemdonhang.php");
							}
							if($menupage =='indonhang'){
								include("chucnang/indonhang.php");
							}
							if($menupage =='nguoidung'){
								include("chucnang/themthongtinnguoidung.php");
							}
							// tìm kiếm

							if ($menupage =='timkiem') {
								include('khungtimkiem.php');
								include('trangtimkiem.php');
							}

							// sắp xếp
							// if ($menupage =='sapxep') {
							// 	include('trangsapxep.php');
							// }

							if (isset($_GET['id'])) {
								// code...
							}

							
						 ?>
					</div>
				</div>