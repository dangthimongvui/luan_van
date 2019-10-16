
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
		
		// require("../../controllers/HOCPHAN_controller.php");
		// require("../../controllers/LOPHP_controller.php");
		// require("../../controllers/CTKHGiangDay_controller.php");
		// require("../../controllers/GIANGVIEN_controller.php");
		// require("../../controllers/UPDATEKHDay_controller.php");
		// require("../../controllers/TEST.php");
		require("../../controllers/DETAI_controller.php");
	?>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;>
			<div class="row">
				<div class="section-title dark">
					<h2> <span>ĐĂNG KÍ ĐỀ TÀI</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/insertDeTai.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Tên đề tài</b>
									<div class='col-sm-12' >
										<input type='text' name="TenDT" placeholder="Nhập tên đề tài..."></input>
									</div>
									 
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Cấp</b>
									<div class='col-sm-12' >
										<select name="Cap">
											<option>Đồ án 1</option>
											<option>Đồ án 2</option>
											<option>Đồ án 3</option>
											<option>Tiểu luận</option>
											<option>Luận văn</option>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Qui đổi tiết</b>
									<div class='col-sm-12' >
										<select name="QDTiet">
											<option>3 (Đồ án)</option>
											<option>6 (Tiểu luận)</option>
											<option>17 (Luận văn)</option>
										</select>
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
							<input type="hidden" name="MaDT" value='.$_GET["MaDT"].'/>
							<div class="row">
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn" values="luu" type="submit"><b>Lưu</b></button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	