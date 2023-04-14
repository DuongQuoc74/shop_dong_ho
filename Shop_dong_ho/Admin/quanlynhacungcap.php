<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý nhà cung cấp</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themnhacungcap">Thêm nhà cung cấp</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	
	<tr>
				<th>Thứ tự</th>
				<th>Mã nhà cung cấp</th>
				<th>Tên nhà cung cấp</th>
				<th>Mặt hàng nhà cung cấp</th>
				<th>Số điện thoại</th>
				<th>Gmail</th>
				<th>Địa chỉ</th>
				<th>Chọn</th>
				<th>Sửa</th>
				<th>Xóa</th>
				

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM nhacungcap";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		
				<td><?php echo $i ?></td>
				<td><?php echo $row['mancc'] ?></td>	
				<td><?php echo $row['tenncc'] ?></td>
				<td><?php echo $row['mathang'] ?></td>
				<td><?php echo $row['sdtncc'] ?></td>
				<td><?php echo $row['emailncc'] ?></td>
				<td><?php echo $row['diachincc'] ?></td>
				<td><a href="index.php?menuadmin=chonnhacungcap&chon=<?php echo $row['mancc']?>">Chọn</a></td>
				<td><a href="index.php?menuadmin=suanhacungcap&sua=<?php echo $row['mancc']?>">Sửa</a></td>
				<td><a href="Xuly/Xulythemnhacungcap.php?xoa=<?php echo $row['mancc']?>">xóa</a></td>

	</tr>
	<?php } ?>
</table>