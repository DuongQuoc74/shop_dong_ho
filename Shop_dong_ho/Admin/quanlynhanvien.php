<?php
require('../chucnang/condb.php'); 
?>
<div class="tude"><h2>Quản lý nhân viên</h2></div>
<div class="chucnang"><a href="index.php?menuadmin=themnhanvien">Thêm nhân viên</a></div>
<!-- <div class="chucnang"><a href="chucnangadmin/themdanhmuc.php">Thêm danh mục</a></div> -->
<table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
	<!-- // nhân viên chọn khách để tạo tài khoản -->
	<tr>
				<th>Thứ tự</th>
				<th>Mã nhân viên</th>
				<th>Tên tên nhân viên</th>
				<th>Số điện thoại</th>
				<th>Giới tính</th>
				<th>Địa chỉ</th>
				<th>Ngày đi làm</th>
				<th>Ngày sinh</th>
				<th>Quyền</th>
				<th>Tài khoản</th>
				<th>Mã tài khoản</th>
				<th>Chọn tạo tài khoản</th>
				<th>Sửa</th>
				<th>Xóa</th>
				

	</tr>


	<?php
		// while ($row = mysqli_fetch_array($qr)) {
		$i = 0; 
		$sql = "SELECT * FROM nhanvien";
		$qr = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($qr)) {
			$i++;
		
		  
	?>

	<tr>
		
				<td><?php echo $i ?></td>
				<td><?php echo $row['manv'] ?></td>	
				<td><?php echo $row['tennhanvien'] ?></td>
				<td><?php echo $row['sdtnv'] ?></td>
				<td><?php echo $row['gioitinh'] ?></td>
				<td><?php echo $row['diachi'] ?></td>
				<td><?php echo $row['ngaydilam'] ?></td>
				<td><?php echo $row['ngaysinh'] ?></td>
				<td><?php echo $row['quyen'] ?></td>
				<td>Tài khoản</td>
				<td>Mã tài khoản</td>
				<td><a href="index.php?menuadmin=themtaikhoan&manv=<?php echo $row['manv'] ?>">Chọn tạo tài khoản</a></td>
				<td><a href="index.php?menuadmin=suanhanvien&sua=<?php echo $row['manv']?>">Sửa</a></td>
				<td><a href="Xuly/Xulythemnhanvien.php?xoa=<?php echo $row['manv']?>">xóa</a></td>

	</tr>
	<?php } ?>
</table>