<?php
	include("../layout/header.php"); 
?>
<link rel="stylesheet" href="../../public/css/style.css"/>

<?php
	// session_start();
	require("../../controllers/LOPHP_controller.php");
	require("../../controllers/COITHI_controller.php");
	require("../../controllers/DOANLV_controller.php");
	require("../../controllers/DETAI_controller.php");
	require("../../controllers/HOCPHAN_controller.php");
	require("../../controllers/thuchanh_controller.php")
	// require("../../controllers/CHAMTHI_controller.php");
	// require("../../controllers/GIANGVIEN_controller.php");
		// require("../../controllers/INSERT_KE_HOACH_GIANG_DAY_CONTROLLER.PHP")
?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<h1 class="name">CTUET</h1>
			<h2>Loading.....</h2>
		</div>
	</div>
	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>THEO DÕI KẾ HOẠCH</h2>
				<div class="page-links">
					<a href="../giang_vien/home.php">TRANG CHỦ</a>
					<span>THEO DÕI KẾ HOẠCH</span>
				</div>
			</div>
		</div>
	</div>
	<?php
		include("../layout/kh_thuc_hien.php"); 
	?>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    <div class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12" style="text-align: center;">
								<img src="../../public/img/ctuet_bgr.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php
	include("../layout/footer.php"); 
?>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>
	<script src="../../public/js/updateday.js"></script>
