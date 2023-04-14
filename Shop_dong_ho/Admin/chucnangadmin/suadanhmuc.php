<?php
require('../chucnang/condb.php'); 

if (isset($_GET['sua'])) {
	$matlsp = $_GET['sua'];
}

?>

<h2>Sửa danh mục</h2>
			<div class="themdanhmuc">
				<form id="fthemdanhmuc" name="fthemdanhmuc" method="POST" action="./Xuly/Xulythemdanhmuc.php">
					<?php 

					$sql = "SELECT * FROM theloai WHERE matlsp = '$matlsp'";
					$qr = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_array($qr)) {
					// code...
					 ?>
						<div class="nhomdanhmuc">
							<label>Mã danh mục</label>
							<input disabled id="matl" type="text" name="matl" value="<?php echo $row['matlsp'] ?>" placeholder="Hãy nhập mã thể loại">
							<div class="thongbao"></div>
						</div>
						<div class="nhomdanhmuc">
							<label>Tên danh mục</label>
							<input id="tentl" type="text" name="tentl" value="<?php echo $row['tentl'] ?>" placeholder="Hãy nhập tên thể loại">
							<div class="thongbao"></div>
						</div>
					<?php } ?>
						<br>
						<div class="nhomdanhmuc">
							<input id="themdanhmuc" type="submit" name="suadanhmuc" value="Xác nhận">
						</div>
				</form>
			</div>
