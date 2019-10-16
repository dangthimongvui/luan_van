<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php 
	require("../../controllers_ad/getGiangVien.php");
	// require("../../controllers/KHOA_controller.php");
	// require("../../controllers/NGACH_controller.php");
	// require("../../controllers/CHUCVU_controller.php");
?>
<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>CẬP NHẬT HỒ SƠ</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/updateGV_controller.php" method="POST">
							<div class="row">
								<input type='hidden' name='MaGV' value='<?php echo $_GET["MaGV"]; ?>'>
								<input type='hidden' name='Username' value='<?php echo $_GET["Username"]; ?>'>
								<div class="col-md-12">
									<b class="col-sm-12">Mã đơn vị</b>
									<div class="col-sm-12">
										<?php 
											foreach ($giangvien as $value) {
												echo "<input type='text' name='MaKhoa' value=".$value["MaKH"].">";
											} 
										?>    	
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Mã chức vụ</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type='text' name='MaCV' value=".$value["MaCV"].">";
										     }
										?>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Mã ngạch</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type='text' name='MaNG' value=".$value["MaNG"].">";
										    }
										?>
									</div>
								</div>
								
								<div class="col-md-12">
									<b class="col-sm-12">Tên giảng viên</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type=\"text\" name=\"HoTen\" value=\"".$value['HoTen']."\">";
										     }
										?>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Giới tính</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type='text' name='Gioitinh' value=".$value["Gtinh"].">";
										     }
										?>
									</div>
								</div>
								
								<div class="col-md-12">
									<b class="col-sm-12">Email</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type='text' name='Email' value=".$value["Email"].">";
										     }
										?>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Điện thoại</b>
									<div class="col-sm-12">
										<?php
										foreach ($giangvien as $value) {
											echo "<input type='text' name='sdt' value=".$value["DThoai"].">";
										     }
										?>
									</div>
								</div>
								
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn" type="submit"><b>Cập nhật</b></button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	