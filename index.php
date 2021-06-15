<?php @session_start(); ?>
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
				<h3><span class="fas fa-1x fa-book"></span> &nbsp;پرفروش ترین ها  </h3>
				<p>&nbsp;</p>
				<div class="col-md-12 text-center">
					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (3).jpg" />
							<div class="card-body">
								<h5 class="card-title">جز از کل</h5>
								<a href="book.php?id=1" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (4).jpg" />
							<div class="card-body">
								<h5 class="card-title">معجزه  شکرگذاری</h5>
								<a href="book.php?id=2" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (2).jpg" />
							<div class="card-body">
								<h5 class="card-title">انسان در جستجوی معنا</h5>
								<a href="book.php?id=3" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<p>&nbsp;</p><p>&nbsp;</p>

				<h3><span class="fas fa-1x fa-book"></span> &nbsp;برترین رمان ها</h3>
				<p>&nbsp;</p>
				<div class="col-md-12 text-center">
					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (9).jpg" />
							<div class="card-body">
								<h5 class="card-title"> گتسبی بزرگ</h5>
								<a href="book.php?id=4" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (6).jpg" />
							<div class="card-body">
								<h5 class="card-title"> بوف کور</h5>
								<a href="book.php?id=5" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (8).jpg" />
							<div class="card-body">
								<h5 class="card-title"> سمفونی مردگان</h5>
								<a href="book.php?id=6" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp; اطلاعات بیشتر</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<p>&nbsp;</p><p>&nbsp;</p>

				<h3><span class="fas fa-1x fa-book"></span> &nbsp;کتاب های روانشناسی</h3>
				<p>&nbsp;</p>
				<div class="col-md-12 text-center">
					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (10).jpg" />
							<div class="card-body">
								<h5 class="card-title"> تئوری انتخاب</h5>
								<a href="book.php?id=7" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (1).jpg" />
							<div class="card-body">
								<h5 class="card-title"> نیمه تاریک وجود</h5>
								<a href="book.php?id=8" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 float-right d-inline-block">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top img-fluid" src="assets/image/book (11).jpg" />
							<div class="card-body">
								<h5 class="card-title"> وضعیت آخر</h5>
								<a href="book.php?id=9" class="btn btn-primary"><span class="fas fa-1x fa-shopping-bag"></span> &nbsp;اطلاعات بیشتر</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<p>&nbsp;</p>

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
							<li class="nav-item d-block w-100"><a class="nav-link text-white" href="tel:+98912000000"><span class="fas fa-1x fa-phone"></span> 0912000000</a></li>						</ul>
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