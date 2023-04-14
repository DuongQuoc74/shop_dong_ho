<?php 

require('../chucnang/condb.php');
$taikhoan = $_SESSION['login'];

 ?>
<h2>Thông tin khách hàng</h2>
			<div class="fthemthongtinnguoidung">
				<div class="formthongtinnguoidung">
					<?php 

					$sqlkiemtrand = "SELECT * FROM khachhang WHERE ten = '$taikhoan'";
					$qrkiemtrand = mysqli_query($conn,$sqlkiemtrand);
					$count = mysqli_num_rows($qr);
					if ($count > 0) {
						$sql = "SELECT * FROM khachhang WHERE ten = '$taikhoan'";
						$qr = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($qr)){
					 	?>

					 	<form id="fthemthongtinnguoidung" name="fthemthongtinnguoidung" method="POST" action="./Xuly/Xulythongtinnguoidung.php?taikhoan=<?php echo $_SESSION['login'] ?>" enctype="multipart/form-data">
					

						<div class="themthongtinnguoidung">
							<label>Tên khách hàng:</label><br>
							<input id="tenkh" type="text" name="tenkh" value="<?php echo $row['tenkh'] ?>" placeholder="Hãy nhập tên khách hàng">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Số điện thoại khách hàng:</label><br>
							<input id="sdt" type="text" name="sdt" value="<?php echo $row['sdt'] ?>" placeholder="Hãy nhập số điện thoại nhân viên">
							<div class="thongbao"></div>
						</div>

						<div class="themthongtinnguoidung">
							<label>Giới tính:</label><br>
							<!-- <input id="gioitinh" type="text" name="gioitinh" value="" placeholder="Hãy nhập giá tiền sản phẩm"> -->
							<select id="gioitinh" name="gioitinh">
								<option value="<?php echo $row['gioitinh'] ?>"><?php echo $row['gioitinh'] ?></option>
							</select>
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Địa chỉ:</label><br>
							<input id="diachi" type="text" name="diachi" value="<?php echo $row['diachi'] ?>" placeholder="Hãy nhập địa chỉ nhân viên">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Email:</label><br>
							<input id="email" type="text" name="email" value="<?php echo $row['gmail'] ?>" placeholder="Hãy nhập thông tin Email">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Ngày sinh:</label><br>
							<input id="ngaysinh" type="date" name="ngaysinh" value="<?php echo $row['ngaysinh'] ?>" >
							<div class="thongbao"></div>
						</div>
						<br>
						<div class="themthongtinnguoidung">
							<input id="themthongtinnguoidung" type="submit" name="suathongtin" value="Xác nhận">
						</div>
						</form>

						<?php } ?>
					
					 <?php 

					 }else{

					 ?>
					 <form id="fthemthongtinnguoidung" name="fthemthongtinnguoidung" method="POST" action="./Xuly/Xulythongtinnguoidung.php?taikhoan=<?php echo $_SESSION['login'] ?>" enctype="multipart/form-data">
					

						<div class="themthongtinnguoidung">
							<label>Tên khách hàng:</label><br>
							<input id="tenkh" type="text" name="tenkh" value="" placeholder="Hãy nhập tên khách hàng">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Số điện thoại khách hàng:</label><br>
							<input id="sdt" type="text" name="sdt" value="" placeholder="Hãy nhập số điện thoại ">
							<div class="thongbao"></div>
						</div>

						<div class="themthongtinnguoidung">
							<label>Giới tính:</label><br>
							<!-- <input id="gioitinh" type="text" name="gioitinh" value="" placeholder="Hãy nhập giá tiền sản phẩm"> -->
							<select id="gioitinh" name="gioitinh">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Địa chỉ:</label><br>
							<input id="diachi" type="text" name="diachi" value="" placeholder="Hãy nhập địa chỉ ">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Email:</label><br>
							<input id="email" type="text" name="email" value="" placeholder="Hãy nhập thông tin Email">
							<div class="thongbao"></div>
						</div>


						<div class="themthongtinnguoidung">
							<label>Ngày sinh:</label><br>
							<input id="ngaysinh" type="date" name="ngaysinh" value="" >
							<div class="thongbao"></div>
						</div>

						<br>
						<div class="themthongtinnguoidung">
							<input id="themthongtinnguoidung" type="submit" name="themthongtin" value="Xác nhận">
						</div>
						</form>

						<?php } ?>
						


			
						
						