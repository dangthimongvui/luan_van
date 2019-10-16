
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
		require("../../controllers/GIANGVIEN_controller.php");	
		require("../../controllers/BAIBAO_controller.php");
		require("../../controllers/DETAI_controller.php");
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
				<li><a href="../../views/giang_vien/home.html">TRANG CHỦ</a></li>
				<li class="active"><a href="../../views/giang_vien/services.html">GIỚI THIỆU</a></li>
				<li><a href="../../views/giang_vien/contact.html">LIÊN HỆ</a></li>
				<li><a href="../../views/giang_vien/index.html">ĐĂNG XUẤT</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>LỊCH NGHIÊN CỨU KHOA HỌC</h2>
				<div class="page-links">
					<a href="home.html">TRANG CHỦ</a>
					<span>LỊCH NGHIÊN CỨU KHOA HỌC</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>NGHIÊN CỨU KHOA HỌC</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form">
						<?php 
						foreach ($giangvien as $value) {
						echo "<div class='row'>
							<div class='col-sm-6'>
								<p>TÊN GIẢNG VIÊN: <a name='ten_gv'>".$value["HoTen"]."</a></p>
							</div>
							<div class='col-sm-6'>
								<p>EMAIL: <a name='mail'>".$value["Email"]."</a></p>
							</div>
							<div class='col-sm-6'>
								<p>Số điện thoại:<a name='sdt'>".$value["DThoai"]."</a></p>
							</div>

							<div class='col-sm-6'>
								<p>GIỚI TÍNH: <a name='gioi_tinh'>".$value["GTinh"]."</a></p>
							</div>

							<div class='col-sm-6'>
								<p>ĐƠN VỊ: <a name='don_vi'>".$value["TenDV"]."</a></p>
							</div>

							<div class='col-sm-6'>
								<p>CHỨC VỤ: <a name='chuc_vu'>".$value["TenCV"]."</a></p>
							</div>
							<div class='col-sm-6'>
								<p>NGẠCH GIẢNG VIÊN: <a name='don_vi'> ".$value["TenNgach"]."</a></p>
							</div>
						</div>";
					    }
					?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<form class="form-class" id="con_form">
					<div class="col-md-4">
						<h2>BÀI BÁO</h2>
					</div>
					<table class="col-md-12">
						<tr>
							<th>MaBB</th>
							<th>Tên bài báo</th>
							<th>Tên tạp chí</th>
							<th>Thời gian nghiên cứu</th>
							
						</tr>
						<?php 
						foreach ($baibao as $value) {
						echo
						"<tr>
							<td name='ma_bb'>".$value["MaBB"]."</td>
							<td name='ten_bai_bao'>".$value["TenBB"]."</td>
							<td name='ten_tap_chi'>".$value["TenTChi"]."</td>
							<td name='thoi_gian'>".$value["TGianTH"]."</td>
						</tr>";
							}
						?>
					</table>	
				</form>
			</div>
		</div>
		
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<form class="form-class" id="con_form">
					<div class="col-md-4">
						<h2>NGHIÊN CỨU KHOA HỌC</h2>
					</div>
					<div class="col-sm-8">
						<button class="site-btn"><a href="../giang_vien/them_kh_nghien_cuu_kh.php">THÊM KẾ HOẠCH</a></button>
					</div>
					<table class="col-md-12">
						<tr>
							<th>Mã đề tài</th>
							<th>Tên đề tài</th>
							<th>Cấp</th>
							<th>Thời gian nghiên cứu</th>
													
						</tr>
						<?php 
						foreach ($detai as $value) {
						echo	
						"<tr>
							<td name='madt'>".$value["MaDT"]."</td>
							<td name='ten_de_tai'>".$value["TenDT"]."</td>
							<td name='cap'>".$value["Cap"]."</td>
							<td name='thoi_gian'>".$value["TGianTH"]."</td>					
						</tr>";
						 }
						?>
						 
					</table>	
				</form>
			</div>
		</div>
	</div>
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
</body>
</html>
