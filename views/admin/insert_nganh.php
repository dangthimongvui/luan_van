
	
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php
		require_once("../../controllers/KHOA_controller.php"); 	
	?>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;>
			<div class="row">
				<div class="section-title dark">
					<h2> <span>THÊM NGÀNH MỚI</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/INSERTNGANH_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Mã ngành</b>
									<div class='col-sm-12' >
										<input type='text' name="MaNganh" placeholder="Nhập mã ngành..."></input>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Khoa</b>
									<div class='col-sm-12' >
										<select name="MaKhoa">
											<?php
											foreach ($khoa as $value) {
											echo "<option type='text' value=".$value["MaKhoa"]." class='form-control'>".$value["MaKhoa"]." - ".$value["TenKhoa"]."</option>";
										}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Tên ngành</b>
									<div class='col-sm-12' >
										<input type='text' name="TenNganh" placeholder="Nhập tên ngành..."></input>
									</div>
								</div>
							</div>
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
	