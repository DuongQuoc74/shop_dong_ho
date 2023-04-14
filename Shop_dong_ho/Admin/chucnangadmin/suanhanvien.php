<?php 

require('../chucnang/condb.php');
$manv = $_GET['sua'];

 ?>
<h2>Thêm nhân viên</h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemnhanvien.php" enctype="multipart/form-data">
					
					<?php 


					$sql = "SELECT * FROM nhanvien WHERE manv = '$manv'";
					$qr = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($qr)){
						
						$ten = $row['tennhanvien'];
						$sdt = $row['sdtnv'];
						$gioitinh = $row['gioitinh'];
						$ngaydilam = $row['ngaydilam'];
						$ngaysinh = $row['ngaysinh'];
						$quyen = $row['quyen'];
						$diachi = $row['diachi'];
					}

					 ?>
						<div class="nhomdanhmuc">
							<label>Tên nhân viên</label>
							<input id="tennv" type="text" name="tennv" value="<?php echo $ten ?>" placeholder="Hãy nhập tên nhân viên">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Số điện thoại nhân viên</label>
							<input id="sdt" type="text" name="sdt" value="<?php echo $sdt ?>" placeholder="Hãy nhập số điện thoại nhân viên">
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
							<label>Địa chỉ</label>
							<input id="diachi" type="text" name="diachi" value="<?php echo $diachi ?>" placeholder="Hãy nhập địa chỉ nhân viên">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày đi làm</label>
							<input id="ngaydilam" type="date" name="ngaydilam" value="<?php echo $ngaydilam ?>">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày sinh</label>
							<input id="ngaysinh" type="date" name="ngaysinh" value="<?php echo $ngaysinh ?>" >
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Quyền</label>
							<select id="quyen" name="quyen">
									<?php 

									$querydanhmuc = "SELECT * FROM chucvu";
									$qrdanhmuc = mysqli_query($conn,$querydanhmuc);
									while($rowdanhmuc = mysqli_fetch_assoc($qrdanhmuc)){

										$quyen = $rowdanhmuc['quyen'];
										$tenchucvu = $rowdanhmuc['tenchucvu'];
										echo "<option value='$quyen'>$tenchucvu </option>";

									}
									 ?>
							</select>
						</div>
						<br>
						<div class="nhomdanhmuc">
							<input id="themsanpham" type="submit" name="suanhanvien" value="Xác nhận">
						</div>
				</form>
			</div>