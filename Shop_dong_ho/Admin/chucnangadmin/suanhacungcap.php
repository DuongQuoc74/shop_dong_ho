<?php 
require('../chucnang/condb.php');
$mancc = $_GET['sua'];
 ?>

<h2>Sửa nhà cung cấp</h2>
			<div class="themdanhmuc">
				<form id="fthemsanpham" name="fthemsanpham" method="POST" action="./Xuly/Xulythemnhacungcap.php" enctype="multipart/form-data">
					
					<?php 


					$sql = "SELECT * FROM nhacungcap WHERE mancc = '$mancc'";
					$qr = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($qr)){
						
						$tenncc= $row['tenncc'];
						$sdt = $row['sdtncc'];
						$email = $row['emailncc'];
						$mathang = $row['mathang'];
						$diachi = $row['diachincc'];
					}

					 ?>

						<div class="nhomdanhmuc">
							<label>Tên nhà cung cấp</label>
							<input id="tenncc" type="text" name="tenncc" value="<?php echo $tenncc ?>" placeholder="Hãy nhập tên nhà cung cấp">
							<div class="thongbao"></div>
						</div>


						<div class="nhomdanhmuc">
							<label>Mặt hàng nhà cung cấp</label>
							<input id="mathang" type="text" name="mathang" value="<?php echo $mathang ?>" placeholder="Hãy nhập mặt hàng">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Số điện thoại</label>
							<input id="sdt" type="text" name="sdt" value="<?php echo $sdt ?>" placeholder="Hãy nhập số điện thoại">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label class="email">Email</label>
							<input id="email" type="text" name="email" value="<?php echo $email ?>" placeholder="Hãy nhập thông tin email">
							<div class="thongbao"></div>
						</div>

						<div class="nhomdanhmuc">
							<label>Địa chỉ</label>
							<input id="diachi" type="text" name="diachi" value="<?php echo $diachi ?>" placeholder="Hãy nhập địa chỉ">
							<div class="thongbao"></div>
						</div>


						<br>
						<div class="nhomdanhmuc">
							<input id="themsanpham" type="submit" name="suanhacungcap" value="Xác nhận">
						</div>
				</form>
			</div>