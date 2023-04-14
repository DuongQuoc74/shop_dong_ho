<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý tài khoản</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themtaikhoan">Thêm tài khoản</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	
	<tr>
		<th>STT</th>
		<th>Mã tài khoản</th>
		<th>Tài khoản</th>
		<th>Quyền</th>
		<th>Sửa</th>
		<th>Xóa</th>

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM taikhoan";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['matk']; ?></td>
		<td><?php echo $row['taikhoan']; ?></td>
		<td><?php echo $row['quyen']; ?></td>
		<td><a href="index.php?menuadmin=suataikhoan&sua=<?php echo $row['matk']?>">Sửa</a></td>
		<td><a href="Xuly/Xulythemtaikhoan.php?xoa=<?php echo $row['matk']?>">Xóa</a></td>
	</tr>
	<?php } ?>
</table>