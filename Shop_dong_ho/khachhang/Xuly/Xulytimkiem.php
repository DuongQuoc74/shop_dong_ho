<?php 
require('../../chucnang/condb.php');
if ($_POST['timkiem']) {
	$timkiem = $_POST['noidungtimkiem'];
	$sql = "SELECT * FROM  sanpham WHERE tensanpham like '$timkiem%' ";
	$qr = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($qr)){
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
		<div class="clear"></div>
	
</div>

	<?php 
	}
}
header('Location: ../index.php?menupage=timkiem);

 ?>