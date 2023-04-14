<h3 style="text-align: center;">Sản phẩm mới nhất</h3>
<div class="khungsanpham">
<?php 
require('../chucnang/condb.php');

		if (isset($_GET['trang'])) {
			$page = $_GET['trang'];
		}else{
			$page = 1;
		}
		if($page ==''|| $page =='1'){
			$begin = 0;
		}else{
			$begin =($page*4)-4;
		}
	$sql = "SELECT * FROM sanpham LIMIT $begin,4";
	$qr = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($qr)){
 ?>
 

<div class="hienthisanpham">
	
		<div class="sanpham">

			<div class="hinhanh"><a href="index.php?menupage=chitietsanpham&code=<?php echo $row['masp'] ?>"><img src="../images/sanpham1/<?php echo $row['hinhanh']; ?>"></a></div>
			<!-- <div class="xemsanpham">XEM NGAY</div> -->
			
		</div>
		<div class="tensp"><a href="index.php?menupage=chitietsanpham&code=<?php echo $row['masp'] ?>"><?php echo $row['tensanpham']; ?></a></div>
		<div class="giasp">Giá :<?php echo number_format($row["giatien"],3,".",",") ?>VND</div>
		<div class="soluong">Số lượng: <?php echo $row["soluong"]==0?"hết hàng":$row["soluong"]; ?></div>
		<div class="chucnangmua">
			<div class="muangay"><a href="index.php?menupage=chitietsanpham&code=<?php echo $row['masp'] ?>"><i class='fa fa-shopping-bag fa-5x' style='color:#000000'></i></a></div>
			<div class="themvaogiohang"><a href="#"><i class='fa fa-cart-plus fa-5x' style='color:#000000'></i></a></div>
</div>
</div>
	

<?php } ?>
<?php 
		$sql12 = "SELECT * FROM sanpham";
		$qr12 = mysqli_query($conn,$sql12);
		$count12 = mysqli_num_rows($qr12);
		$trang = ceil($count12/4);	
	 ?>
</div>
	  <div class="divphantrang">
	 	<ul class="phantrang">
	 		<?php 
	 		if ($trang==1) {
	 			return;
	 		}
	 		for ($i=1; $i <= $trang ; $i++) { 
	 		?>
	 		<li <?php if($i==$page){echo 'style="background:red"';}else{ echo '';} ?> ><a href="http://localhost:81/Shop_dong_ho/khachhang/index.php?menupage=trangchu&id&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
	 		<?php 
	 			}
	 		 ?>

	 </div>
