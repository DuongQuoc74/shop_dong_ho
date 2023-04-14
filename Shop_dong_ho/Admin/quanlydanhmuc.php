<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý danh mục</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themdanhmuc">Thêm danh mục</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	
	<tr>
		<th>STT</th>
		<th>Mã thể loại sản phẩm</th>
		<th>Tên thể loại sản phẩm</th>
		<th>Sửa</th>
		<th>Xóa</th>

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM theloai";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['matlsp']; ?></td>
		<td><?php echo $row['tentl']; ?></td>
		<td><a href="index.php?menuadmin=suadanhmuc&sua=<?php echo $row['matlsp']?>">Sửa</a></td>
		<td><a href="Xuly/Xulythemdanhmuc.php?xoa=<?php echo $row['matlsp']?>">Xóa</a></td>
	</tr>
	<?php } ?>
</table>