
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


	<?php 
		// session_start();
		require("../../controllers/HOCPHAN_controller.php");
		require("../../controllers/GIANGVIEN_controller.php");
		require("../../controllers/LOP_controller.php");
		require("../../controllers/KHGDAY_controller.php");
		// require("../../controllers/UPDATEKHDay_controller.php");
		// require("../../controllers/TEST.php");
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
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>
	<!-- Header section end -->
	<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>UPDATE KẾ HOẠCH ĐĂNG KÍ GIẢNG DẠY</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_ad/UPDATEKHDAY_controller.php" method="POST">
							<div class="row">
								<div class="col-sm-12">
									<b class="col-sm-12">Tên giảng viên</b>
									<div class="col-sm-12">
										<select name="MaGV">
										<?php
											foreach ($allgv as $values) {
											echo "
											<option type='text' class='form-control' value=".$values["MaGV"]."> ".$values["MaGV"]." - ".$values["HoTen"]."</option>";
											}
										?>
										</select>
									</div>
								</div>		
								<div class="col-sm-12">
									<b class="col-sm-12">Tên lớp</b>
									<div class="col-sm-12">
										<select name="MaLop">
										<?php
											foreach ($lop as $values) {
											echo "
											<option type='text' value=".$values["MaLop"]." class='form-control'> ".$values["MaLop"]." - ".$values["TenLop"]."</option>";
											}
										?>
										</select>
									</div>
								</div>			

								<div class="col-sm-12">
									<b class="col-sm-12">Tên học phần</b>
									<div class="col-sm-12">
										<select name="MaHP">
										<?php
											foreach ($hocphan as $values) {
											echo "
											<option type='text' value=".$values["MaHP"]." class='form-control'>".$values["MaHP"]." - ".$values["TenHP"]."</option>";	
										}
										?>
										</select>
									</div>
								</div>
						
								<div class="col-md-4" >
									<b class="col-sm-12">Sỉ số</b>
									<div class='col-sm-12' >
										<input type='text' name="SiSo" placeholder="Nhập sỉ số"></input>
									</div>
								</div>
								<div class="col-md-4">
									<b class="col-sm-12">Học kỳ</b>
									<div class="col-sm-12">
										<select name="HocKy">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<b class="col-sm-12">Năm học</b>
									<div class="col-sm-12">
										<select name = "NamHoc">
										<?php
										foreach ($khgiangday as $value) {
											echo "<option type='text' class='form-control'>".$value["Nam"]."</option>";
											}
										?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12" >
								<b class="col-sm-12">Thực hiện lý thuyết </b>
								<div class='col-sm-2' >
									<a class="col-sm-2">Yes</a>
									<input class="col-sm-2" type='radio' name="ThucHienLT" value="Y"></input>
								</div>
								<div class='col-sm-2'>
									<a class="col-sm-2">No</a>
									<input class="col-sm-2" type='radio' name="ThucHienLT" value="N"></input>
								</div>
							</div>
							<div class="col-md-12" >
								<b class="col-sm-12">Thực hiện thực hành </b>
								<div class='col-sm-2' >
									<a class="col-sm-2">Yes</a>
									<input class="col-sm-2" type='radio' name="ThucHienTH" value="Y"></input>
								</div>
								<div class='col-sm-2'>
									<a class="col-sm-2">No</a>
									<input class="col-sm-2" type='radio' name="ThucHienTH" value="N"></input>
								</div>
							</div>
							<input type='hidden' name='MaLHP' value='<?php echo $_GET["MaLHP"]; ?>'></input>
							<div class="row" style="text-align: center;">
								<div class="col-sm-12">
									<button class="site-btn" values="luu" type="submit"><b>Lưu</b></button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>
