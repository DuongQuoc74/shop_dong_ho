<?php 

	require('../chucnang/condb.php');
	$manv = $_GET['manv'];



	$sql = "SELECT * FROM nhanvien nv, taikhoan tk WHERE nv.matk = tk.matk and nv.manv = '$manv' LIMIT 1";
	$qr = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($qr);

	if ($count > 0) {
		$sqltk = "SELECT * FROM taikhoan tk, nhanvien nv WHERE nv.matk = tk.matk and nv.manv = '$manv'";
					$qrtk = mysqli_query($conn,$sqltk);
					while($rowtk = mysqli_fetch_array($qrtk)){
						//$masp = $row['masp'];
						$taikhoan= $rowtk['taikhoan'];
						$matkhau = $rowtk['matkhau'];
						$quyen= $rowtk['quyen'];
					}
 					?>				
 					<h2>Đã có tài khoản</h2>
						<div class="themdanhmuc">
						<form id="fthemdanhmuc" name="fthemdanhmuc" method="POST" action="./Xuly/Xulythemtaikhoan.php">
							<div class="nhomdanhmuc">
							<label>Tài khoản</label>
							<input id="tentk" type="text" name="tentk" value="<?php echo $taikhoan ?>" placeholder="Hãy nhập tên tài khoản">
							<div class="thongbao"></div>
						</div>
						<div class="nhomdanhmuc">
							<label>Mật khẩu</label>
							<input id="matkhau" type="password" name="matkhau" value="<?php echo $matkhau; ?>" placeholder="Hãy nhập mật khẩu">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Quyền</label>
							<select id="quyen" name="quyen">
									<?php 

									$querydanhmuc = "SELECT * FROM chucvu WHERE quyen = '$quyen'";
									$qrdanhmuc = mysqli_query($conn,$querydanhmuc);
									while($rowdanhmuc = mysqli_fetch_assoc($qrdanhmuc)){

										$quyen1 = $rowdanhmuc['quyen'];
										$tenchucvu = $rowdanhmuc['tenchucvu'];
										echo "<option value='$quyen1'>$tenchucvu </option>";

									}
									 ?>
							</select>

						<br>
						<div class="nhomdanhmuc">
							<input id="themdanhmuc" type="submit" name="suataikhoan" value="Xác nhận">
						</div>
				</form>
			</div>	
					<?php
				}else{
				?>
				<h2>Thêm tài khoản</h2>
					<div class="themdanhmuc">
					<form id="fthemdanhmuc" name="fthemdanhmuc" method="POST" action="./Xuly/Xulythemtaikhoan.php">
						<div class="nhomdanhmuc">
							<label>Tài khoản</label>
							<input id="tentk" type="text" name="tentk" value="" placeholder="Hãy nhập tên tài khoản">
							<div class="thongbao"></div>
						</div>
						<div class="nhomdanhmuc">
							<label>Mật khẩu</label>
							<input id="matkhau" type="password" name="matkhau" value="" placeholder="Hãy nhập mật khẩu">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Nhập lại mật khẩu</label>
							<input id="matkhau1" type="password" name="matkhau1" value="" placeholder="Hãy nhập mật khẩu">
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

						<br>
						<div class="nhomdanhmuc">
							<input id="themdanhmuc" type="submit" name="themtaikhoan" value="Xác nhận">
						</div>
				</form>
			</div>

		<?php } ?>

		


					
	