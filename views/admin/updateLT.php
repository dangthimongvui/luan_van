
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php 
		// require("../../controllers/HOCPHAN_controller.php");
		// require("../../controllers/lophp.php");
		// require("../../controllers/KHGDAY_controller.php");
		// require("../../controllers_ad/CTKHGiangDay_controller.php");
		// require("../../controllers/LOP_controller.php");
	?>
	<header class="header-section">
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>UPDATE KẾ HOẠCH</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_ad/updateLT_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Mã lớp học phần</b>
									<div class='col-sm-12' >
									<input type='hidden' name='MaLop' value='<?php echo $_GET["MaLop"]; ?>'></input>
									<input type='text' name="MaLHP" value="<?php echo $_GET["MaLHP"]?>"></input>
									</div> 
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Dạy</b>
									<div class='col-sm-2' >
										<a class="col-sm-2">Yes</a>
										<input class="col-sm-2" type='radio' name="day" value="Y"></input>
									</div>
									<div class='col-sm-2'>
										<a class="col-sm-2">No</a>
										<input class="col-sm-2" type='radio' name="day" value="N"></input>
									</div>
								</div>	
								<div class="col-md-12" >
									<b class="col-sm-12">Kiễm tra giữa ký</b>
									<div class='col-sm-2' >
										<a class="col-sm-2">Yes</a>
										<input class="col-sm-2" type='radio' name="kiemtra" value="Y"></input>
									</div>
									<div class='col-sm-2'>
										<a class="col-sm-2">No</a>
										<input class="col-sm-2" type='radio' name="kiemtra" value="N"></input>
									</div>
								</div>	
								<div class="col-md-12" >
									<b class="col-sm-12">Ra đề</b>
									<div class='col-sm-2' >
										<a class="col-sm-2">Yes</a>
										<input class="col-sm-2" type='radio' name="rade" value="Y"></input>
									</div>
									<div class='col-sm-2'>
										<a class="col-sm-2">No</a>
										<input class="col-sm-2" type='radio' name="rade" value="N"></input>
									</div>
								</div>	
								<div class="col-md-12" >
									<b class="col-sm-12">Thi</b>
									<div class='col-sm-2' >
										<a class="col-sm-2">Yes</a>
										<input class="col-sm-2" type='radio' name="thi" value="Y"></input>
									</div>
									<div class='col-sm-2'>
										<a class="col-sm-2">No</a>
										<input class="col-sm-2" type='radio' name="thi" value="N"></input>
									</div>
								</div>	
								<div class="col-md-12" >
									<b class="col-sm-12">Chấm thi</b>
									<div class='col-sm-2' >
										<a class="col-sm-2">Yes</a>
										<input class="col-sm-2" type='radio' name="chamthi" value="Y"></input>
									</div>
									<div class='col-sm-2'>
										<a class="col-sm-2">No</a>
										<input class="col-sm-2" type='radio' name="chamthi" value="N"></input>
									</div>
								</div>	

							<div class="col-sm-12" style="text-align: center;">
								<button class="site-btn" type="submit"><b>Lưu</b></button>
							</div>															
					</form>
					<br/>
					</br>
					<br/>
				</div>
			</div>
		</div>
	</div>
	