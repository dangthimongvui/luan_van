<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php 
	require("../../controllers/GIANGVIEN_controller.php");
	require("../../controllers/KHOA_controller.php");
	require("../../controllers/NGACH_controller.php");
	require("../../controllers/CHUCVU_controller.php");
	require("../../controllers_ad/getDN.controller.php");
?>
<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>THÊM MỚI GIẢNG VIÊN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/insertGV_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12">
									<b class="col-sm-12">Mã giảng viên</b>
									<div class="col-sm-12">
										<input type="text" name="MaGV" placeholder="Nhập mã giảng viên..."></input>
									</div>
								</div>
								<div class="col-sm-12">
									<b class="col-sm-12">Khoa</b>
									<div class="col-sm-12">
										<select name="MaKH">
										<?php
											foreach ($khoa as $values) {
											echo "
											<option type='text' class='form-control' value=".$values["MaKhoa"].">".$values["MaKhoa"]." - ".$values["TenKhoa"]."</option>";
											}
										?>
										</select>
									</div>
								</div>	
								
								<div class="col-sm-12">
									<b class="col-sm-12">Chức vụ</b>
									<div class="col-sm-12">
										<select name="MaCV">
										<?php
											foreach ($chucvu as $values) {
											echo "
											<option type='text' value=".$values["MaCV"]." class='form-control' >".$values["MaCV"]." - ".$values["TenCV"]."</option>";	
											}
										?>
										</select>
									</div>
								</div>	
								

								<div class="col-md-12">
									<b class="col-sm-12">Mã ngạch</b>
									<div class="col-sm-12">
										<select name="MaNG">
										<?php
											foreach ($ngach as $values) {
											echo "
											<option type='text' class='form-control'>".$values["MaNgach"]."</option>";	
											}
										?>
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Username</b>
									<div class="col-sm-12">
										<select name="Username">
											<?php
										foreach ($dangnhap as $value) {
										 	echo "<option>".$value["Username"]."</option>";
										 } 
										?>	
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<b class="col-sm-12">Tên giảng viên</b>
									<div class="col-sm-12">
										<input type="text" name="HoTen" placeholder="Nhập tên giảng viên..."></input>
									</div>
								</div>
								
								<div class="col-md-12">
									<b class="col-sm-12">Giới tính</b>
									<div class="col-sm-12">
										<select name="Gtinh">
											<option>Nam</option>
											<option>Nữ</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-12">
									<b class="col-sm-12">Email</b>
									<div class="col-sm-12">
										<input type="text" name="Email" placeholder="Nhập địa chỉ mail..."></input>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Điện thoại</b>
									<div class="col-sm-12">
										<input type="text" name="DThoai" placeholder="Nhập số điện thoại..."></input>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Bậc lương giảng viên</b>
									<div class="col-sm-12">
										<input type="text" name="BacLuong" placeholder="Nhập bậc lương..."></input>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Bậc lương</b>
									<div class="col-sm-12">

										1.	Trợ giảng:  85% của Giảng viên bậc 1: 0.85*2.34 = <b>1.989</b><br/>
										2.	Giảng viên (Mã ngạch: 15.111): 9 bậc:<br/>
											Bật 1 <b>2.34</b>|
											Bật 2 <b>2.67</b>|
											Bật 3 <b>3.00</b>|
											Bật 4 <b>3.33</b>|
											Bật 5 <b>3.66</b>|
											Bật 6 <b>3.99</b>|
											Bật 7 <b>4.32</b>|
											Bật 8 <b>4.65</b>|
											Bật 9 <b>4.98</b><br/>
										3.	Giảng viên chính (mã ngạch: 15.110): 8 bậc<br/>
											Bậc	Hệ số
											Bậc 1 <b>4.4</b>|
											Bậc 3 <b>5.08</b>|
											Bậc 4 <b>5.42</b>|
											Bậc 5 <b>5.76</b>|
											Bậc 6 <b>6.10</b>|
											Bậc 7 <b>6.44</b>|
											Bậc 8 <b>6.78</b><br/>
											4.	Giảng viên cao cấp (Mã ngạch: 15.109): 6 bậc<br/>
											Bậc	Hệ số
											Bậc 1 <b>6.2</b>|
											Bậc 2 <b>6.56</b>|
											Bậc 3 <b>6.92</b>|
											Bậc 4 <b>7.28</b>|
											Bậc 5 <b>7.64</b>|
											Bậc 6 <b>8.00</b>
									</div>
								</div>
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn" type="submit"><b>Lưu</b></button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	