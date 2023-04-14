<?php 

$taikhoan = $_SESSION['login'];

 ?>
 <h2 class="tude">Giỏ Hàng</h2>
 <table style="border-collapse: collapse; text-align: center;" border="1"  width="100%">
 	<tr>
	 	<th>STT</th>
	 	<th>Mã sản phẩm</th>
	 	<th>Tên sản phẩm</th>
	 	<th>Hình ảnh sản phẩm</th>
	 	<th>Số lượng sản phẩm</th>
	 	<th>Giá sản phẩm</th>
	 	<th>Thành tiền</th>
	 	<th>Xóa</th>
 	</tr>
 	<?php 

 	if (isset($_SESSION['cart1'])) {
 		$i = 0;
 		$tongtien = 0;
 	foreach($_SESSION['cart1'] as $cart_item){
 	$i++;
 	$thanhtien=$cart_item['soluong']*$cart_item['giatien'];
 	$tongtien+=$thanhtien;

	

 	 ?>
 	<tr>
 		<td><?php echo $i ?></td>
 		<td><?php echo $cart_item['masp'] ?></td>
 		<td><?php echo $cart_item['tensanpham'] ?></td>
 		<td><img src="../images/sanpham1/<?php echo $cart_item['hinhanh']; ?>"></td>
 		<td>
 			
 			<a href="chucnang/themvaogiohang.php?cong=<?php echo $cart_item['idgiohang'] ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
  			<?php echo $cart_item['soluong'] ?>
  			<a href="chucnang/themvaogiohang.php?tru=<?php echo $cart_item['idgiohang'] ?>"><i class="fa fa-minus" aria-hidden="true"></i></a>

 		</td>
 		<td><?php echo number_format($cart_item['giatien'],3,'.',',').'đ'; ?></td>
 		<td><?php echo number_format($thanhtien,3,'.',',').'đ'; ?></td>
 		<td><a href="chucnang/themvaogiohang.php?xoa=<?php echo $cart_item['idgiohang'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>	
 		
 	</tr>
 	<?php } ?>
 	<tr>
 		<td colspan="9"><p style="font-size:30px;color:red;">Tổng tiền : <?php echo number_format($tongtien,3,'.',',').'đ'; ?></p><br>
	 	<!-- <p style="font-size:20px;float:right;"><a href="chucnang/themvaogiohang.php?xoatatca=1" style="text-decoration:none"><i class="fa fa-trash" aria-hidden="true"></i>Xóa tất cả</a></p> -->

	 	<?php 

	 	$sqlkiemtrand = "SELECT * FROM khachhang WHERE ten = '$taikhoan' LIMIT 1";
					$qrkiemtrand = mysqli_query($conn,$sqlkiemtrand);
					$count = mysqli_num_rows($qrkiemtrand);
					if($count > 0) {

	 	 ?>
	 	  <p style="font-size:20px;margin-left:900px;"><a href="chucnang/thanhtoan.php"style="text-decoration:none">Thanh toán</a></p>
			</td>
			</tr>
     	<?php }else{
     	 ?>
     	 <p style="font-size:20px;margin-left:900px;"><a href="../index.php?menupage=nguoidung&id"style="text-decoration:none">Thêm thông tin người dùng</a></p>
     	<?php } ?>
	<?php
   }else{
   ?>
   <tr><td colspan="9" style="color: red; font-size: 16px;"><p>Hiện tại giỏ hàng trống</p></td></tr>
   <?php 
	}
    ?>
 </table>

