<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý khách hàng</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themkhachhang">Thêm khách hàng</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	<!-- // nhân viên chọn khách để tạo tài khoản -->
	<tr>
				<th>Thứ tự</th>
				<th>Mã khách hàng</th>
				<th>Tên khách hàng</th>
				<th>Tài khoản khách hàng</th>
				<th>Gmail</th>
				<th>Số điện thoại</th>
				<th>Giới tính</th>
				<th>Ngày sinh</th>
				<th>Địa chỉ</th>
				<th>Quyền</th>
				<th>Trạng thái</th>
				<th>Mã tài khoản</th>
				<th>Chọn tạo tài khoản</th>
				<th>Sửa</th>
				<th>Xóa</th>
				

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM khachhang";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		
				<td><?php echo $i ?></td>
				<td><?php echo $row['makh'] ?></td>	
				<td><?php echo $row['tenkh'] ?></td>
				<td><?php echo $row['ten'] ?></td>
				<td><?php echo $row['gmail'] ?></td>
				<td><?php echo $row['sdt'] ?></td>
				<td><?php echo $row['gioitinh'] ?></td>
				<td><?php echo $row['ngaysinh'] ?></td>
				<td><?php echo $row['diachi'] ?></td>
				<td><?php echo $row['quyen']==2?"Khách hàng":"Hổng biết" ?></td>
				<td><?php echo $row['trangthai']==1?"Hoạt động":"Bị khóa" ?></td>
				<td>Mã tài khoản</td>
				<td>Chọn tạo tài khoản</td>
				<td><a href="index.php?menuadmin=suakhachhang&sua=<?php echo $row['makh']?>">Sửa</a></td>
				<td><a href="Xuly/Xulythemkhachhang.php?xoa=<?php echo $row['makh']?>">xóa</a></td>

	</tr>
	<?php } ?>
</table>