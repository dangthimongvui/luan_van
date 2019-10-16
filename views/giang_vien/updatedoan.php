	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<?php 
		session_start();
		require("../../controllers/DETAI_controller.php");
	?>
	<!-- Header section -->
	<header class="header-section">
		<div class="responsive"><i class="fa fa-bars"></i></div>
	</header>

	<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>UPDATE KẾ HOẠCH HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/updatedoan.php" method="POST">
							<div class="row">
								<div class="col-md-12" style="text-align:center">
									<div class="row">
										<div class="col-sm-12" name='MaGV' >
											<?php
											echo "<p><center>Chào:".$_SESSION["HoTen"]." - ".$_SESSION["MaGV"]."</center></p>";
											 ?>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Tên đề tài</b>
									<div class="col-sm-12">
										<select name="TenDLV">
											<?php 
											foreach ($detai as $value) {
											echo "<option type='text' class='form-control'>".$value["TenDT"]."</option>";
										}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">MSSV</b>
									<div class='col-sm-12' >
										<input type='text' name="MSSV" placeholder="Nhập MSSV..."></input>
									</div>
									 
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Loại</b>
									<div class="col-sm-12">
										<select name="Loai">
											<option>DA1</option>
											<option>DA2</option>
											<option>DA3</option>
											<option>TL</option>
											<option>LV</option>
										</select>
									</div>
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
							
							<input type='hidden' name='MaDLV' value='<?php echo $_GET["MaDLV"]; ?>'></input>
							<div class="col-sm-12" style="text-align: center;">
								<button class="site-btn" values="luu" type="submit"><b>Lưu</b></button>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
	
	