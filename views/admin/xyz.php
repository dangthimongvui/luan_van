<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php
	// session_start();
	require_once("../../controllers/GIANGVIEN_controller.php");  
	require_once("../../controllers/LOPHP_controller.php"); 
	require_once("../../controllers/HOCPHAN_controller.php");  

?>
<div id="preloder">
		<div class="loader">
			<h1 class="name">CTUET</h1>
			<h2>Loading.....</h2>
		</div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>
	<!-- Header section end -->

	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>THÊM KẾ HOẠCH</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form">
						<form>
							<div class="row">
								

								<div class="col-md-12">
									<b class="col-sm-12">Tên lớp học phần</b>
									<div class="col-sm-12">
										<select>
											<?php foreach ($alllophp as $value){
												echo "<option type='text' class='form-control'>".$value["TenLopHP"]."</option>";
											} 
											?>	
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<b class="col-sm-12">Tên học phần</b>
									<div class="col-sm-12">
										<select>
											<?php foreach ($hocphan as $value){
												echo "<option type='text' class='form-control'>".$value["MaHP"]." - ".$value["TenHP"]." - TC Lý thuyết ".$value["SoTCLT"]." - TC Thực hành: ".$value["SoTCTH"]."</option>";
											}	
											?>
										</select>
									</div>	
								</div>	
								<div class="col-sm-12">
									<b class="col-sm-12">Thời gian</b>
									<div class="col-sm-12">
										<select>
											<?php foreach ($alllophp as $value){
												echo "<option type='text' class='form-control'> HK ".$value["HocKy"]." - ".$value["NamHoc"]."</option>";
											} ?>
											<option  type="text" class="form-control">cntp</option>
										</select>
									</div>	
								</div>	
								<div class="col-sm-12">
									<button class="site-btn" type="submit">Lưu</button>
								</div>
							</div>
						</form>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--====== Javascripts & Jquery ======-->
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>

