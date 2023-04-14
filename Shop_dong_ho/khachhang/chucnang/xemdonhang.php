<link rel="stylesheet" type="text/css" href="file.css">
		<table border="1px" align="center" width="100%">
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Hình ảnh</th>
				<th>Đơn giá</th>
				<th>Thành tiền</th>
			</tr>
			<?php 
				$codecart = $_GET['codecart'];
				$sql = "SELECT * FROM donhangchitiet dhct, sanpham sp WHERE dhct.idsanpham = sp.masp and dhct.codecart = $codecart";
				$qr = mysqli_query($conn,$sql);
				$i = 0;
				$tongtien = 0;
				while ($row = mysqli_fetch_array($qr)){
				$thanhtien = $row["giatien"]*$row["soluongdh"];
				$tongtien += $thanhtien;
				$i++;
			 ?>
			 	<tr>
			 	<td><?php echo $i ?></td>
				<td><?php echo $row["tensanpham"]; ?></td>
				<td><?php echo $row["soluongdh"]; ?></td>
				<td><img src="../images/sanpham1/<?php echo $row['hinhanh']; ?>"></td>
				<td><?php echo  number_format( $row["giatien"],3,'.',',').'vnd'; ?></td>
				<td><?php echo number_format( $thanhtien,3,'.',',').'vnd'; ?></td>
			 	</tr>

			 <?php 
				}
			  ?>
			  <tr>
			  	<td>Tổng tiền :   <?php echo number_format( $tongtien,3,'.',',').'vnd'; ?></td>
			  </tr>
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