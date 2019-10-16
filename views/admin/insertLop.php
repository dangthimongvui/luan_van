
	
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php
		require_once("../../controllers_ad/nganh_controller.php"); 

	?>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;>
			<div class="row">
				<div class="section-title dark">
					<h2> <span>THÊM LỚP MỚI</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/INSERTLOP_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Mã lớp</b>
									<div class='col-sm-12' >
										<input type='text' name="MaLop" placeholder="Nhập mã đề tài..."></input>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Ngành</b>
									<div class='col-sm-12' >
										<select name="MaNganh">
											<?php
											foreach ($nganh as $value) {
											echo "<option type='text' value=".$value["MaNganh"]." class='form-control'>".$value["MaNganh"]." - ".$value["TenNganh"]."</option>";
										}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Tên lớp</b>
									<div class='col-sm-12' >
										<input type='text' name="TenLop" placeholder="Nhập tên đề tài..."></input>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Sỉ số</b>
									<div class='col-sm-12' >
										<input type='text' name="SiSo" placeholder="Nhập sỉ số..."></input>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Niên khóa</b>
									<div class='col-sm-12' >
										<input type='text' name="NienKhoa" placeholder="Nhập niên khóa..."></input>
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
	