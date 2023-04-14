<?php 

require('../chucnang/condb.php');

 ?>
<h2>Thêm nhân viên</h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemnhanvien.php" enctype="multipart/form-data">
					

						<div class="nhomdanhmuc">
							<label>Tên nhân viên</label>
							<input id="tennv" type="text" name="tennv" value="" placeholder="Hãy nhập tên nhân viên">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Số điện thoại nhân viên</label>
							<input id="sdt" type="text" name="sdt" value="" placeholder="Hãy nhập số điện thoại nhân viên">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Giới tính</label>
							<!-- <input id="gioitinh" type="text" name="gioitinh" value="" placeholder="Hãy nhập giá tiền sản phẩm"> -->
							<select id="gioitinh" name="gioitinh">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Địa chỉ</label>
							<input id="diachi" type="text" name="diachi" value="" placeholder="Hãy nhập địa chỉ nhân viên">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày đi làm</label>
							<input id="ngaydilam" type="date" name="ngaydilam" value="">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày sinh</label>
							<input id="ngaysinh" type="date" name="ngaysinh" value="" >
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
							<input id="themsanpham" type="submit" name="themnhanvien" value="Xác nhận">
						</div>
				</form>
			</div>