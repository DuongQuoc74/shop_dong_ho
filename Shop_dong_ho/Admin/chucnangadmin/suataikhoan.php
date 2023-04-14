<?php 

	require('../chucnang/condb.php');
	$matk = $_GET['sua'];
 ?>
<h2>Sửa tài khoản</h2>
			<div class="themdanhmuc">
				<form id="fthemdanhmuc" name="fthemdanhmuc" method="POST" action="./Xuly/Xulythemtaikhoan.php">
					<?php 


					$sql = "SELECT * FROM taikhoan WHERE matk = '$matk'";
					$qr = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($qr)){
						//$masp = $row['masp'];
						$taikhoan= $row['taikhoan'];
						$matkhau = $row['matkhau'];
						$quyen= $row['quyen'];
					}

					 ?>
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
							<input id="themdanhmuc" type="submit" name="suataikhoan" value="Xác nhận">
						</div>
				</form>
			</div>



