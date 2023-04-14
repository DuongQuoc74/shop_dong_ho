<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý sản phẩm</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themsanpham">Thêm sản phẩm</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	
	<tr>
				<th>Thứ tự</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Hình ảnh</th>
				<th>Danh mục</th>
				<th>Giá tiền</th>
				<th>Ngày nhập sản phẩm</th>
				<th>Nhà cung cấp</th>
				<th>Trạng thái</th>
				<th>Sửa</th>
				<th>Xóa</th>
				

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM sanpham";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		
				<td><?php echo $i ?></td>
				<td><?php echo $row['masp'] ?></td>	
				<td><?php echo $row['tensanpham'] ?></td>
				<td><?php echo $row['soluong']==0?"Hết hàng":$row['soluong'] ?></td>
				<td><img src="../Images/sanpham1/<?php echo $row['hinhanh']; ?>"></td>
				<td><?php echo $row['danhmuc'] ?></td>
				<td><?php echo number_format($row['giatien'],3,".",",") ?>VNĐ</td>
				<td><?php echo $row['ngaynhapsp'] ?></td>
				<td><?php echo $row['nhacungcap'] ?></td>
				<td><?php echo $row['tinhtrang'] ?></td>
				<td><a href="index.php?menuadmin=suasanpham&sua=<?php echo $row['masp']?>">Sửa</a></td>
				<td><a href="Xuly/Xulythemsanpham.php?xoa=<?php echo $row['masp']?>">xóa</a></td>

	</tr>
	<?php } ?>
</table>