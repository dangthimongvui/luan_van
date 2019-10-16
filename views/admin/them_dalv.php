
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
		<div class="container">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>THÊM KẾ HOẠCH HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/insert_dalv.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Tên đề tài</b>
									<div class='col-sm-12' >
										<input type='text' name="TenDLV" placeholder="Nhập tên đề tài"></input>
									</div>
									 
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Sinh viên thực hiện</b>
									<div class='col-sm-12' >
										<input type='text' name="SVThucHien" placeholder="Tên sinh viên - MSSV"></input>
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
								<div class="col-md-12" >
									<b class="col-sm-12">Thời gian thực hiện</b>
									<div class='col-sm-12' >
										<input type='text' name="TGianTH" placeholder="Từ yyyy/mm/dd đến yyyy/mm/dd"></input>
									</div>
									 
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<button class="site-btn" values="luu" type="submit">Lưu</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	