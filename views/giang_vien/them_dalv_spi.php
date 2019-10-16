
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
		session_start();
		require("../../controllers/DOANLV_controller.php");
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
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>
	<!-- Header section end -->

	<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>ĐĂNG KÍ KẾ HOẠCH HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/insert_dalv.php" method="POST">
							<div class="row">
								<div class="col-md-12" style="text-align:center">
									<div class="row">
										<div class="col-sm-12" name='MaGV' >
											<?php
											echo "<p><center>Chào:".$_SESSION["HoTen"]." - ".$_SESSION["MaGV"]."</center></p>";
											 ?>
										</div>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Mã DALV</b>
									<div class='col-sm-12' >
										<input type='text' name="MaDLV" placeholder="Nhập mã..."></input>
									</div>
									 
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Tên đề tài</b>
									<div class="col-sm-12">
										<select name="TenDLV">
											<?php 
											foreach ($detai as $value) {
											echo "<option type='text' class='form-control'>".$value["TenDT"]."</option>";
										}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">MSSV</b>
									<div class='col-sm-12' >
										<input type='text' name="MSSV" placeholder="Nhập MSSV..."></input>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Loại</b>
									<div class="col-sm-12">
										<select name="Loai">
											<option>Đồ án 1</option>
											<option>Đồ án 2</option>
											<option>Đồ án 3</option>
											<option>Tiểu luận</option>
											<option>Luận văn</option>
										</select>
									</div>
								</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Thời gian</b>
									<div class="col-sm-6">
										Từ: <input type="date" name="ThoiGianS"></input>
									</div>
									<div class="col-sm-6">
										Đến: <input type="date" name="ThoiGianE"></input>
									</div>
								</div>
							</div>
							<div class="row" style="text-align: center;">
								<div class="col-sm-12">
									<button class="site-btn" values="luu" type="submit"><b>Lưu</b></button>
								</div>
							</div>
						</br>
					</br>
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
