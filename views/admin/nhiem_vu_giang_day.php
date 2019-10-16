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
		require("../../controllers/LOPHP_controller.php");
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
				<li><a href="../../views/qly_cap_khoa/home.html">TRANG CHỦ</a></li>
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
				<h2>NHIỆM VỤ KHOA</h2>
				<div class="page-links">
					<a href="home.html">TRANG CHỦ</a>
					<span>NHIỆM VỤ KHOA</span>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
						<h2>GIẢNG DẠY</h2>
					</div>
				<div class="col-sm-3">
					<select>
						<option type="text">Năm học</option>
						<option  type="text">2018-2019</option>
						<option  type="text">Danh sách 03</option>
						<option  type="text">Danh sách 03</option>
					</select>
				</div>	
				<div class="col-sm-3">
					<select>
						<option type="text">Khoa</option>
						<option  type="text"></option>
						<option  type="text">Danh sách 03</option>
						<option  type="text">Danh sách 03</option>
					</select>
				</div>

				<div class="col-sm-3">
					<button><a href="../qly_cap_khoa/them_kh_day.php">THÊM KẾ HOẠCH</button>
				</div>
				
				<table class="col-md-12">
						<tr>
							<th>Mã lớp học phần</th>
							<th>Tên giảng viên dạy</th>
							<th>Tên học phần</th>
							<th>Tên lớp học phần</th>
							<th>Số TC Lý thuyết</th>
							<th>Số TC Thực hành</th>
							<!-- <th>Tên giảng viên</th>
							<th>Dạy cho khoa</th> -->
						<!-- 	<th></th>
							<th></th> -->
						</tr>
						<?php 
						foreach ($lophp as $value) {
						echo "<tr>
							<td>".$value["MaLHP"]."</td>
							<td>".$value["TenLopHP"]."</td>
							<td name='ten_nhiem_vu'>".$value["TenHP"]."</td>
							<td name='ten_lop'>".$value["TenLopHP"]."</td>
							<td name='TCLT'>".$value["SoTCLT"]."</td>
							<td name='TCTH'>".$value["SoTCTH"]."</td>
							
						
						</tr>";
							}
						 ?>						
					
				</table>
			
			</div>	
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<form class="form-class" id="con_form">
					<div class="col-md-3">
						<h2>COI THI</h2>
					</div>
					<div class="col-sm-3">
						<select>
							<option type="text">Năm học</option>
							<option  type="text">2018-2019</option>
							<option  type="text">Danh sách 03</option>
							<option  type="text">Danh sách 03</option>
						</select>
					</div>	
					<div class="col-sm-3">
						<select>
							<option type="text">Khoa</option>
							<option  type="text"></option>
							<option  type="text">Danh sách 03</option>
							<option  type="text">Danh sách 03</option>
						</select>
					</div>
					<div class="col-sm-3">
						<button class="site-btn"><a href="../qly_cap_khoa/them_kh_coi_thi.php">THÊM KẾ HOẠCH</a></button>
					</div>
					<table class="col-md-12">
						<tr>
							<th>STT</th>
							<th>Môn</th>
							<th>Lớp</th>
							<th>Buổi</th>
							<th>Thời gian</th>
							<th>Hệ số</th>
							<th>Giảng viên</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>1</td>
							<td name="ten_mon">CSDL</td>
							<td name="ten_lop">KTPM0115</td>
							<td name="buoi">Sáng</td>
							<td name="thoi_gian"></td>
							<td name="he_so">Hệ số</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xoa">Xóa</td>
						</tr>
						<tr>
							<td>2</td>
							<td name="ten_mon">CSDL</td>
							<td name="ten_lop">KTPM0115</td>
							<td name="buoi">Sáng</td>
							<td name="thoi_gian"></td>
							<td name="he_so">Hệ số</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xoa">Xóa</td>
						</tr>
						<tr>
							<td>3</td>
							<td name="ten_mon">CSDL</td>
							<td name="ten_lop">KTPM0115</td>
							<td name="buoi">Sáng</td>
							<td name="thoi_gian"></td>
							<td name="he_so">Hệ số</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xoa">Xóa</td>
						</tr>
					</table>	
				</form>
			</div>
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<form class="form-class" id="con_form">
					<div class="col-md-3">
						<h2>CHẤM THI</h2>
					</div>
					<div class="col-sm-3">
					<select>
						<option type="text">Năm học</option>
						<option  type="text">2018-2019</option>
						<option  type="text">Danh sách 03</option>
						<option  type="text">Danh sách 03</option>
					</select>
				</div>	
				<div class="col-sm-3">
					<select>
						<option type="text">Khoa</option>
						<option  type="text"></option>
						<option  type="text">Danh sách 03</option>
						<option  type="text">Danh sách 03</option>
					</select>
				</div>
					<div class="col-sm-3">
						<button class="site-btn"><a href="../qly_cap_khoa/them_kh_cham_thi.php">THÊM KẾ HOẠCH</a></button>
					</div>
					<table class="col-md-12">
						<tr>
							<th>STT</th>
							<th>Môn</th>
							<th>Lớp</th>
							<th>Số bài</th>
							<th>Giảng viên</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>1</td>
							<td name="ten_mom">csdl</td>
							<td name="ten_lop">ktmp</td>
							<td name="so_bai">50</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xao">Xóa</td>
						</tr>		
						<tr>
							<td>2</td>
							<td name="ten_mom">csdl</td>
							<td name="ten_lop">ktmp</td>
							<td name="so_bai">50</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xao">Xóa</td>
						</tr>		
						<tr>
							<td>3</td>
							<td name="ten_mom">csdl</td>
							<td name="ten_lop">ktmp</td>
							<td name="so_bai">50</td>
							<td name="giang_vien">bi </td>
							<td name="sua">Sửa</td>
							<td name="xao">Xóa</td>
						</tr>						
						
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
