<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/dangky.css">

	<title>Đăng nhập</title>
</head>
<body>

		<div class="bao">
				<div class="khungdangky">
					<form id="formdangky" name="formdangky" method="POST" action="Xuly/Xulydangky.php">
					<label class="dangky">Tạo tài khoản</label>
					<div class="taikhoandy">
						<label class="ten">Tài khoản:</label><br>
						<div class="chucnangtkdy">
							<input type="text"  name="taikhoandy" placeholder="Tài khoản">

						</div>
					</div>
					<div class="matkhaudy">
						<label class="ten">Mật khẩu:</label><br>
						<div class="chucnangmkdy">
							<input type="password" id="passworddy" name="passworddy"  placeholder="Mật khẩu"><span><i class="fa fa-eye-slash" onclick="myfunction()" aria-hidden="true"></i></span>

						</div>
					</div>
					<div class="matkhaunl">
						<label class="ten">Nhập lại mật khẩu:</label><br>
						<div class="chucnangmknl">
							<input type="password" id="passwordnl" name="passwordnl"  placeholder="Nhập lại mật khẩu"><span><i class="fa fa-eye-slash" onclick="myfunction2()" aria-hidden="true"></i></span>

						</div>
					</div>
					<div class="dangky">
						<input type="submit" name="dangky" id="dangky" value="Đăng ký">
					</div>
					</form>
					
				</div>
			
		</div>


</body>
</html>
<script type="text/javascript">
	var x = true;
	function myfunction() {
		
		if (x==true) {
			document.getElementById('passworddy').type = 'text';
			x = false;
		}else{
			document.getElementById('passworddy').type = 'password';
			 x = true;
		}
	}
	var c = true;
	function myfunction2() {
		
		if (c==true) {
			document.getElementById('passwordnl').type = 'text';
			c = false;
		}else{
			document.getElementById('passwordnl').type = 'password';
			c = true;
		}
	}

</script>