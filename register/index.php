<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ثبت نام</title>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="css/util.css" rel="stylesheet" />
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>
<body class="rtl">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(pics/bg-01.jpg);">
					<span class="login100-form-title-1">ثبت نام</span>
				</div>
				<form class="login100-form validate-form" method="post" action="add.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="لطفا نام کاربری خود را وارد کنید!">
						<span class="label-input100">نام کاربری</span>
						<input class="input100" type="text" name="username" placeholder="نام کاربری خود را وارد کنید">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "لطفا رمز عبور خود را وارد کنید!">
						<span class="label-input100">رمز عبور</span>
						<input class="input100" type="password" name="password" placeholder="رمز عبور خود را وارد کنید">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn d-flex justify-content-center">
						<button class="login100-form-btn w-100 mt-2">ثبت نام</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script  src="js/scripts.js"></script>
</body>
</html>
