<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Đăng nhập</title>
</head>
<body>

		<div class="bao">
			
				<div class="khungdangnhap">
					<form id="formdangnhap" name="formdangnhap" method="POST" action="Xuly/Xulylogin.php">
					<label class="dangnhap">Đăng nhập</label>
					<div class="taikhoan">
						<label class="ten">Tài khoản:</label><br>
						<div class="chucnangtk">
							<input type="text"  name="taikhoan" placeholder="Tài khoản">

						</div>
					</div>
					<div class="matkhau">
						<label class="ten">Mật khẩu:</label><br>
						<div class="chucnangmk">
							<input type="password" id="password" name="password"  placeholder="Mật khẩu"><span><i class="fa fa-eye-slash" onclick="myfunction()" aria-hidden="true"></i></span>

						</div>
					</div>
					<div class="login">
						<input type="submit" name="login" id="login" value="Đăng nhập">
					</div>
					</form>
					<div class="taotaikhoan">
						<a href="dangky.php">Tạo tài khoản</a>
					</div>
				</div>
			
		</div>


</body>
</html>
<script type="text/javascript">
	var x = true;
	function myfunction() {
		if (x==true) {
			document.getElementById('password').type = 'text';
			x = false;
		}else{
			document.getElementById('password').type = 'password';
			x = true;
		}
	}

</script>