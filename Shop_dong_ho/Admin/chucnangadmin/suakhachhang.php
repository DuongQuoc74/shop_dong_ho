<?php 

require('../chucnang/condb.php');
$makh = $_GET['sua'];

 ?>
<h2>Sửa khách hàng </h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemkhachhang.php" enctype="multipart/form-data">
					<?php 


					$sql = "SELECT * FROM khachhang WHERE makh = '$makh'";
					$qr = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($qr)){
						
						$ten= $row['ten'];
						$tenkh = $row['tenkh'];
						$email = $row['gmail'];
						$sdt = $row['sdt'];
						$gioitinh = $row['gioitinh'];
						$ngaysinh = $row['ngaysinh'];
						$diachi = $row['diachi'];
					}

					 ?>
						<!-- <div class="nhomdanhmuc">
							<label>Mã sản phẩm</label>
							<input id="masp" type="text" name="masp" value="" placeholder="Hãy nhập mã thể loại">
							<div class="thongbao"></div>
						</div> -->

						<div class="nhomdanhmuc">
							<label>Tên khách hàng</label>
							<input id="tenkh" type="text" name="tenkh" value="<?php echo $tenkh ?>" placeholder="Hãy nhập tên khách hàng">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Tên tài khoản</label>
							<input id="tentk" type="text" name="tentk" value="<?php echo $ten ?>" placeholder="Hãy nhập tài khoản">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label class="email">Email</label>
							<input id="email" type="text" name="email" value="<?php echo $email ?>" placeholder="Hãy nhập thông tin email">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Số điện thoại</label>
							<input id="sdt" type="text" name="sdt" value="<?php echo $sdt ?>" placeholder="Hãy nhập số điện thoại">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Giới tính</label>
							<!-- <input id="gioitinh" type="text" name="gioitinh" value="" placeholder="Hãy nhập giá tiền sản phẩm"> -->
							<select id="gioitinh" name="gioitinh">
								<option value="<?php echo $gioitinh ?>"><?php echo $gioitinh ?></option>
								
							</select>
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày sinh</label>
							<input id="ngaysinh" type="date" name="ngaysinh" value="<?php echo $ngaysinh ?>">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Địa chỉ</label>
							<input id="diachi" type="text" name="diachi" value="<?php echo $diachi ?>" placeholder="Hãy nhập địa chỉ">
							<div class="thongbao"></div>
						</div>



						<br>
						<div class="nhomdanhmuc">
							<input id="themsanpham" type="submit" name="suakhachhang" value="Xác nhận">
						</div>
				</form>
			</div>