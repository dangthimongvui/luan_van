<?php 
	include("../../views/layout/header_admin.php");
?>

<?php
	require("../../controllers_ad/LOPHP_controller.php");
	require("../../controllers_ad/COITHI_controller.php");
	require("../../controllers_ad/DOANLV_controller.php");
	require("../../controllers_ad/DETAI_controller.php");
	require("../../controllers_ad/HOCPHAN_controller.php");
	require("../../controllers_ad/thuchanh_controller.php");
	require("../../controllers_ad/GIANGVIEN_controller.php");

?>	<!-- Page Preloder -->
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
				<h2>KIỂM DUYỆT NHIỆM VỤ</h2>
				<div class="page-links">
					<a href="home.html">TRANG CHỦ</a>
					<span>KIỂM DUYỆT NHIỆM VỤ</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>KIỂM DUYỆT NHIỆM VỤ NĂM HỌC</span></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
					<div class="col-sm-4">
						<select>
							<?php
								foreach ($lopHP as $value) {
								 	echo "<option type='text'>".$value["HocKy"]." - ".$value["NamHoc"]."</option>";
								 } 
							?>
						</select>
					</div>	
					<div class="col-sm-4">
						<select>
							<?php
								foreach ($giangvien as $value) {
								 	echo "<option type='text'>".$value["TenDV"]."</option>";
								 } 
							?>
						</select>
					</div>
					<div class="col-sm-4">
						<button href="">XÁC NHẬN TẤT CẢ</button>
					</div>
					<?php include("../../views/layout/xacnhan.php"); ?>
			</div>	
		</div>
	</div>
	
	<?php include("../../views/layout/footer.php"); ?>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>
