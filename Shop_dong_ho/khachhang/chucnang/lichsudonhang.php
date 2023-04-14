
<?php 
 $taikhoan = $_SESSION['login'];
 ?>

		<table border="1px" align="center" style="width:100%">
			<tr>
				<th>Số thứ tự</th>
				<th>Mã đơn hàng</th>
				<th> Ngày đặt</th>
				<th>Tên khách hàng</th>
				<!-- <th>Địa chỉ</th>
				<th>Số điện thoại</th> -->
				<th>Trạng thái đơn hàng </th>
				<th>Xem đơn hàng</th>
				<th>In đơn hàng</th>
				<th>Hủy đơn hàng</th>
			</tr>
			<?php 

				$sql = "SELECT * FROM donhang dh, taikhoan tk WHERE dh.taikhoan = tk.taikhoan and tk.taikhoan = '$taikhoan'";
				$qr = mysqli_query($conn,$sql);
				$i = 0;
				while ($row = mysqli_fetch_array($qr)){
				$i++;
			 ?>
			 	<tr>
			 	<td><?php echo $i ?></td>
				 <td><?php echo $row["codecart"]?></td>
				 <td><?php echo $row["ngaydat"]?></td>
				<td><?php echo $row["taikhoan"]; ?></td>
				<!-- <td><?php echo $row["diachi"]; ?></td>
				<td><?php echo $row["sodienthoai"]; ?></td> -->
				<td><?php echo $row["tinhtrang"]==1?"Đã hoàn thành":"Chưa hoàn thành"; ?></td>
				<td><a href="./index.php?menupage=xemdonhang&codecart=<?php echo $row['codecart']; ?>">Xem đơn hàng</a></td>
				<td><a href="chucnang/indonhang.php?codecart=<?php echo $row['codecart']; ?>">In đơn hàng</td>
				<td>Hủy đơn hàng</td>
			 	</tr>

			 <?php 
				}
			  ?>
			</table>
<style>
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
	font-size:20px;
}
table{
    border-collapse:collapse;
}
tr:hover{
    background-color:#ddd;
    cursor:pointer;
}
</style>