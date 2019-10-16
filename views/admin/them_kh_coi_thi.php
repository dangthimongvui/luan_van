<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php 
	require_once("../../controllers/GETALL.controller.php");
	require_once("../../controllers/GIANGVIEN_controller.php");
?>
<div class="registration spad fix">
	<div class="container">
		<div class="row" style="border-style: outset;">
			<div class="section-title dark">
				<h2> <span>ĐĂNG KÍ COI THI</span></h2>
			</div>
			<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/THEMKHCOITHI_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12">
									<b class="col-sm-12">Tên giảng viên</b>
									<div class="col-sm-12">
										<select name="MaGV">
											<?php
										foreach ($alllophp as $value) {
											echo "<option type='text' class='form-control' value=".$value["MaGV"].">".$value["MaGV"]." - ".$value["HoTen"]."</option>";
										     }
										?>	
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Lớp học phần</b>
									<div class="col-sm-12">
										<select name="MaLHP">
											<?php
										foreach ($alllophp as $value) {
											echo "<option type='text' value=".$value["MaLHP"]." class='form-control'>".$value["MaLHP"]." - ".$value["TenLopHP"]."</option>";
										     }
										?>	
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Thời gian</b>
									<div class="col-sm-12">
											<input type="date" name="ThoiGian"> </input>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Ca Thi</b>
									<div class="col-sm-12">
										<select name="CaThi">
											<option>Ca 1 (7h30-9h)</option>
											<option>Ca 2(9h30-11h)</option>
											<option>Ca 3(1h30-3h)</option>
											<option>Ca 4(3h30-5h)</option>
											<option>Ca 5(6h30-8h)</option>
											<option>Ca 1(7h30-9h) (Ngày off)</option>
											<option>Ca 2(9h30-11h) (Ngày off)</option>
											<option>Ca 3(1h30-3h) (Ngày off)</option>
											<option>Ca 4(3h30-5h) (Ngày off)</option>
											<!-- <option>Ca 5(6h30-8h) (Ngày off)</option> -->
										</select>
									</div>
								</div>
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn"><b>Lưu</b></button>
								</div>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		
	

	
	

	
