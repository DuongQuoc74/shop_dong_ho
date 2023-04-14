<?php 

require('../chucnang/condb.php');

$masp = $_GET['sua'];

 ?>
<h2>Sửa sản phẩm</h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemsanpham.php" enctype="multipart/form-data">
					
					<?php 


					$sql = "SELECT * FROM sanpham WHERE masp = '$masp'";
					$qr = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($qr)){
						//$masp = $row['masp'];
						$tensp= $row['tensanpham'];
						$soluong = $row['soluong'];
						$danhmuc = $row['danhmuc'];
						$giatien = $row['giatien'];
						$ngaynhapsp = $row['ngaynhapsp'];
						$nhacungacap = $row['nhacungcap'];
					}

					 ?>
					 	<!-- <div class="nhomdanhmuc">
							<label>Mã sản phẩm</label>
							<input  id="tensp" type="text" name="tensp" value="<?php echo $masp ?>" placeholder="Hãy nhập tên sản phẩm">
							<div class="thongbao"></div>
						</div> -->

						<div class="nhomdanhmuc">
							<label>Tên sản phẩm</label>
							<input id="tensp" type="text" name="tensp" value="<?php echo $tensp ?>" placeholder="Hãy nhập tên sản phẩm">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Số lượng</label>
							<input id="soluongsp" type="number" name="soluongsp" value="<?php echo $soluong ?>" placeholder="Hãy nhập số lượng sản phẩm">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Hình ảnh</label>
							<input id="hinhanhsp" type="file" name="hinhanhsp" value="">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Danh mục</label>
							<!-- <input id="danhmucsp" type="text" name="danhmucsp" value="<?php echo $danhmuc ?>" placeholder="Hãy nhập danh mục sản phẩm"> -->
							<select>
									<?php 

									$querydanhmuc = "SELECT * FROM theloai";
									$qrdanhmuc = mysqli_query($conn,$querydanhmuc);
									while($rowdanhmuc = mysqli_fetch_assoc($qrdanhmuc)){

										$matl = $rowdanhmuc['matlsp'];
										$tentl = $rowdanhmuc['tentl'];
										echo "<option value='$matl'>$tentl</option>";

									}
									 ?>
							</select>
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Giá tiền</label>
							<input id="giaitensp" type="number" name="giatiensp" value="<?php echo $giatien ?>" placeholder="Hãy nhập giá tiền sản phẩm">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Ngày nhập sản phẩm</label>
							<input id="ngaynhapsp" type="date" name="ngaynhapsp" value="<?php echo $ngaynhapsp ?>">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Nhà cung cấp</label>
							<!-- <input id="nhacungcap" type="text" name="nhacungcap" value="<?php echo $nhacungacap ?>" placeholder="Hãy nhập nhà cung cấp sản phẩm"> -->
							<select>
									<?php 

									$querydanhmuc = "SELECT * FROM nhacungcap";
									$qrdanhmuc = mysqli_query($conn,$querydanhmuc);
									while($rowdanhmuc = mysqli_fetch_assoc($qrdanhmuc)){

										$matl = $rowdanhmuc['mancc'];
										$tentl = $rowdanhmuc['tenncc'];
										echo "<option value='$matl'>$tentl</option>";

									}
									 ?>
							</select>
							<div class="thongbao"></div>
						</div>

						

						<br>
						<div class="nhomdanhmuc">
							<input id="themsanpham" type="submit" name="suasanpham" value="Xác nhận">
						</div>
				</form>
			</div>