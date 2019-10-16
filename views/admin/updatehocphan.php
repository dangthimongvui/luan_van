
	
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php
		require_once("../../controllers/HOCPHAN_controller.php"); 	
	?>
	<div class="registration spad fix">
		<div class="container" style="border-style: outset;>
			<div class="row">
				<div class="section-title dark">
					<h2> <span>UPDATE HỌC PHẦN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/INSERT_HOCPHAN_controller.php" method="POST">
							<div class="row">
								<!-- <div class="col-md-12" >
									<b class="col-sm-12">Mã học phần</b>
									<div class='col-sm-12' >
										<input type='text' name="MaHP" placeholder="KTLT"></input>
									</div>
								</div> -->
								<div class="col-md-12" >
									<b class="col-sm-12">Tên học phần</b>
									<div class='col-sm-12' >
										<input type='text' name="TenHP" placeholder="Lập trình an toàn"></input>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Số tính chỉ lí thuyết</b>
									<div class='col-sm-12'>
										<select name="SoTCLT">
											<option>2</option>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Số tính chỉ thực hành</b>
									<div class='col-sm-12'>
										<select name="SoTCTH">
											<option>2</option>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Môn tiên quyết</b>
									<div class='col-sm-12' >
										<select name="MonTQ">
											<?php
											foreach ($hocphan as $value) {
											echo "<option type='text' value=".$value["MaHP"]." class='form-control'>".KTLT."</option>";
										}
											?>
										</select>
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
	