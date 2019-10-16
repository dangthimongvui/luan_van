<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>




	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<?php
		session_start();
		require("../../controllers/LOPHP_controller.php");
		require("../../controllers/COITHI_controller.php");
		require("../../controllers/CHAMTHI_controller.php");
		require("../../controllers/GIANGVIEN_controller.php");
	?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<h1 class="name">CTUET</h1>
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<h1 class="name">CTUET</h1>
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="../giang_vien/home.html">TRANG CHỦ</a></li>
				<li class="active"><a href="../giang_vien/services.html">GIỚI THIỆU</a></li>
				<li><a href="../giang_vien/contact.html">LIÊN HỆ</a></li>
				<li><a href="../giang_vien/index.html">ĐĂNG XUẤT</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>ĐĂNG KÍ LỊCH COI THI</h2>
				<div class="page-links">
					<a href="../giang_vien/home.html">TRANG CHỦ</a>
					<span>ĐĂNG KÍ LỊCH COITHI</span>
				</div>
			</div>
		</div>
	</div>
	
<form action="../../" method="POST">	
	
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
					<div class="col-md-3">
						<h2>COI THI</h2>
					</div>
					<div class="col-sm-9">
						<button class="site-btn"><a href="../giang_vien/them_kh_coi_thi.php">THÊM KẾ HOẠCH</a></button>
					</div>
					<table class="col-md-12">
						<tr>
							<th>Tên lớp học phần</th>
							<th>Thời gian</th>
							<th>Buổi</th>
							<th>Hệ số</th>
							<th></th>
							<th></th>
						</tr>
						<?php
							foreach ($coithi as $row) {
							echo 
								"<tr>
									<form action='../../controllers/XOACOITHI_controller.php' method='POST'>
									<input name='id' value=".$row['id']." style='display:none;'></input>
									<td>".$row["TenLopHP"]."</td>
									<td>".$row["ThoiGian"]."</td>
									<td>".$row["Buoi"]."</td>
									<td>".$row["HeSo"]."</td>
									<td><a href='../../views/giang_vien/UPDATEKHDay.php'><button>Sửa</button</a></td>
									<td type='submit'><button>Xóa</button></td>
									</form>
								</tr>";
							}
						?>
					</table>	
			</div>
		</div>
	</div>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    <div class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12">
								<button class="site-btn">ĐĂNG KÍ</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</form>	
	

	
	
	<footer class="footer-section">
		<h2>Copyright</h2>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>
	<script src="../../public/js/updateday.js"></script>
</body>
</html>
