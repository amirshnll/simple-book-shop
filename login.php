<?php @session_start(); if(isset($_SESSION['login'])) header("location:index.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>سایت خانه کتاب</title>
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
	<link rel="icon" href="assets/image/favicon.png" sizes="32x32" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body dir="rtl">

	<div class="container header">
		<div class="row">
			<div class="col-md-6 float-right">
				<a href="index.php"><img src="assets/image/logo.png" width="300" class="img-fluid" /></a>
			</div>
			<div class="col-md-6 float-left" dir="ltr">
				<nav class="navbar">
					<ul class="nav">
						<?php
						if(!isset($_SESSION['login'])) {
							?>
							<li class="nav-item"><a class="nav-link text-dark" href="register.php">عضویت  <span class="fas fa-1x fa-user"></span></a></li>
							<li class="nav-item"><a class="nav-link text-dark" href="login.php">ورود <span class="fas fa-1x fa-sign-in-alt"></span></a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link text-dark" href="out.php">خروج <span class="fas fa-1x fa-sign-out-alt"></span></a></li>
							<li class="nav-item"><p class="text-success nav-link" dir="rtl">به سایت خانه کتاب خوش آمدید.</p></li>
						<?php } ?>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar">
						<ul class="nav">
							<li class="nav-item"><a class="nav-link text-light" href="index.php"><span class="fas fa-1x fa-home"></span> خانه</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="about.php"><span class="fas fa-1x fa-id-card"></span>  درباره ما</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="contact.php"><span class="fas fa-1x fa-phone"></span>  تماس با ما</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container home">
		<div class="row">
			<div class="col-md-12">
				<h1 class="display-1">ورود به سایت</h1>
				<form method="post" action="">
					<div class="form-group d-block">
						<p><label for="exampleInputEmail1">ایمیل / موبایل</label></p>
						<p><input required="required" name="emailmobile" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل / موبایل"></p>
					</div>
					<div class="form-group d-block">
						<p><label for="exampleInputPassword1">رمزعبور</label></p>
						<p><input required="required" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمزعبور"></p>
					</div>
					<p><input type="submit" class="btn btn-success" value="ورود"></p>
				</form>

				<?php

				if( isset($_POST['emailmobile']) && isset($_POST['password']) ) {
					if( empty($_POST['emailmobile']) || empty($_POST['password']) )
						echo '<p class="alert alert-danger">لطفا فیلدها را کامل پر کنید.</p>';
					else {
						if(!file_exists("data/users.json")) {
							echo '<p class="alert alert-danger">مشکلی در عملیات ورود  رخ داده است.</p>';
						}
						else {
							$json = file_get_contents("data/users.json");
							$data = json_decode($json, true);

							foreach ($data as $key => $value) {
								if($value['username'] == $_POST['emailmobile'] && $value['password'] == $_POST['password']) {
									$_SESSION['login'] = 1;
									header("location:index.php");
								}
							}

							echo '<p class="alert alert-danger">کاربری با اطلاعات وارد شده موجود نیست.</p>';
						}
					}
				}

				?>

			</div>
		</div>
	</div>

	<div class="footer bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-2 float-right text-center">
					<img src="assets/image/logo-white.png" width="150" class="img-fluid" />
					<p>&nbsp;</p><p>&nbsp;</p>
				</div>
				<div class="col-md-5 float-right">
					<h6 class="display-4">دسترسی سریع</h6>
					<nav class="navbar">
						<ul class="nav">
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="index.php"><span class="fas fa-1x fa-home"></span>  خانه</a></li>
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="login.php"><span class="fas fa-1x fa-sign-in-alt"></span> ورود </a></li>
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="register.php"><span class="fas fa-1x fa-user"></span> عضویت  </a></li>
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="about.php"><span class="fas fa-1x fa-id-card"></span>  درباره ما</a></li>
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="contact.php"><span class="fas fa-1x fa-phone"></span>  تماس با ما</a></li>
						</ul>
					</nav>
					<p>&nbsp;</p><p>&nbsp;</p>
				</div>
				<div class="col-md-5 float-right">
					<h6 class="display-4">پشتیبانی سایت</h6>
					<p>پشتیبانان سایت به صورت 24 ساعته در خدمت شما هستند:</p>
					<nav class="navbar">
						<ul class="nav">
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="mailto:ketab@test.com"><span class="fas fa-1x fa-envelope"></span> ketab@test.com</a></li>
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="tel:+98912000000"><span class="fas fa-1x fa-phone"></span> 0912000000</a></li>
						</ul>
					</nav>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>&nbsp;</p><p>&nbsp;</p>
					<p>&copy; 1400 - تمامی حقوق این وبسایت محفوظ می باشد.</p>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>