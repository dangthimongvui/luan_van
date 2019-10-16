
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
<?php  
	require("../../controllers/DOANLV_controller.php");
	require("../../controllers/COVANHT_controller.php");
?>
<body>
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
				<li><a href="../../views/giang_vien/loggin.html">ĐĂNG XUẤT</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Đăng kí nhiệm vụ khác</h2>
				<div class="page-links">
					<a href="home.html">TRANG CHỦ</a>
					<span>Nhiệm vụ khác</span>
				</div>
			</div>
		</div>
	</div>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>ĐĂNG KÝ HƯỚNG DẪN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12">
								<input type="text" name="name" placeholder="Nhập tên giảng viên">
							</div>

							<div class="col-sm-12">
								<input type="text" name="email" placeholder="Nhập địa chỉ mail">
							</div>

							<div class="col-sm-12">
								<input type="text" name="phone" placeholder="Nhập số điện thoại">
							</div>

							<div class="col-sm-6">
								<select>
									<option type="text">Nam</option>
									<option  type="text">Nữ</option>
								</select>
							</div>

							<div class="col-sm-6">
								<select>
									<option type="text">Đơn vị</option>
									<option  type="text"></option>
									<option  type="text">Danh sách 03</option>
									<option  type="text">Danh sách 03</option>
								</select>
							</div>

							<div class="col-sm-6">
								<select>
									<option type="text">Chức vụ</option>
									<option  type="text">Danh sách 03</option>
									<option  type="text">Danh sách 03</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select>
									<option type="text">Ngạch giảng viên</option>
									<option  type="text">Giảng viên chính</option>
									<option  type="text">Trợ giảng</option>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<form class="form-class" id="con_form">
					<div class="col-md-9">
						<h2>ĐĂNG KÍ HƯỚNG DẪN LUẬN VĂN, TIỂU LUẬN, ĐỒ ÁN</h2>
					</div>
					<div class="col-sm-3">
						<button class="site-btn"><a href="../giang_vien/them_hd_luan-van.php">THÊM KẾ HOẠCH</a></button>
					</div>
					<table class="col-md-12">
						<tr>
							<th>Mã đề tài</th>
							<th>Tên đề tài</th>
							<th>Mã số sinh viên</th>
							<th>Loại</th>
							<th>Thời gian thực hiện</th>
							<th></th>
							<th></th>
						</tr>
						<?php
						foreach ($doan as $row) {
						echo "
						<tbody>
							<tr>
								<td name='malv'>".$row["MaDLV"]."</td>
								<td name='ten_de_tai'>".$row["TenDLV"]."</td>
								<td name='mss'>".$row["MSSV"]."</td>
								<td name='loai'>".$row["Loai"]."</td>
								<td name='thoi_gian'>".$row["TGianTH"]."</td>
								<td name='sua'>Sửa</td>
								<td name='xoa'>Xóa</td>
							</tr>
							</tbody>";
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
					<div class="col-sm-4">
						<h2>CỐ VẤN HỌC TẬP</h2>
					</div>
					<table class="col-md-12">
						<tr>
							<th>Lớp</th>
						</tr>
						<tr>
							<td>
								<select name="ten_lop">
									<?php  
									foreach ($covan as $value) {
									echo 
									"<option type='text' class='form-control'>".$value["TenLop"]."</option>";
										}
									?>
								</select>
							</td>
						</tr>
					</table>	
				</form>
			</div>
		</div>
	</div>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12">
								<button class="site-btn">ĐĂNG KÍ</button>
							</div>
						</div>
					</form>
				</div>
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
