
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php 
		require("../../controllers/HOCPHAN_controller.php");
		require("../../controllers/GIANGVIEN_controller.php");
		require("../../controllers_ad/CTKHGiangDay_controller.php");
		require("../../controllers/LOP_controller.php");
		require("../../controllers/KHGDAY_controller.php");
	?>
	<header class="header-section">
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;">
			<div class="row">
				<div class="section-title dark">
					<h2> <span>ĐĂNG KÍ LỊCH GIẢNG DẠY</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/THEMKHDAY_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Tên giảng viên</b>
									<select name="MaGV">
										<?php 
											foreach ($allgv as $value) {
												echo "<option type='text' value=".$value["MaGV"]." class='form-control'> ".$value["MaGV"]." - ".$value["HoTen"]."</option>";	
											}
										?>
									</select>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Mã lớp học phần</b>
									<div class='col-sm-12' >
										<input type='text' name="MaLHP" placeholder="Nhập mã lớp học phần"></input>
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
	