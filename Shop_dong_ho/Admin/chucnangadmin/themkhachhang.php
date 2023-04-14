<h2>Thêm khách hàng</h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemkhachhang.php" enctype="multipart/form-data">
						<!-- <div class="nhomdanhmuc">
							<label>Mã sản phẩm</label>
							<input id="masp" type="text" name="masp" value="" placeholder="Hãy nhập mã thể loại">
							<div class="thongbao"></div>
						</div> -->

						<div class="nhomdanhmuc">
							<label>Tên khách hàng</label>
							<input id="tenkh" type="text" name="tenkh" value="" placeholder="Hãy nhập tên khách hàng">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Tên tài khoản</label>
							<input id="tentk" type="text" name="tentk" value="" placeholder="Hãy nhập tài khoản">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label class="email">Email</label>
							<input id="email" type="text" name="email" value="" placeholder="Hãy nhập thông tin email">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Số điện thoại</label>
							<input id="sdt" type="text" name="sdt" value="" placeholder="Hãy nhập số điện thoại">
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
							<label>Ngày sinh</label>
							<input id="ngaysinh" type="date" name="ngaysinh" value="">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Địa chỉ</label>
							<input id="diachi" type="text" name="diachi" value="" placeholder="Hãy nhập địa chỉ">
							<div class="thongbao"></div>
						</div>



						<br>
						<div class="nhomdanhmuc">
							<input id="themsanpham" type="submit" name="themkhachhang" value="Xác nhận">
						</div>
				</form>
			</div>