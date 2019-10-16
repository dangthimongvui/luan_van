<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php 
	require("../../controllers/LOPHP_controller.php");
	// require("../../controllers/CHAMTHI_controller.php");
?>
<div class="registration spad fix">
		<div class="container">
			<div class="row" style="border-style: outset;">
				<div class="section-title dark">
					<h2> <span>THÊM KẾ HOẠCH</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/THEMKHCHAMTHI_controller.php" method="POST">
							<div class="row">
								<?php
								echo "
									<div class='col-md-12' style='text-align:center;>
										<div class='row'>
											<div class='col-sm-12'>
												<p>Chào:".$_SESSION["HoTen"]." (".$_SESSION["MaGV"].")</a></p>
										</div>
									</div>"; 
									?>
								<div class="col-md-12">
									<b class="col-sm-12">Tên lớp học phần</b>
									<div class="col-sm-12">
										<select name="MaLopHP">
											<?php
										foreach ($alllophp as $value) {
											echo "<option type='text' class='form-control' name='MaGV'>".$value["MaLHP"]." - ".$value["TenLopHP"]."</option>";
										     }
										?>	
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<b class="col-md-12">Số bài</b>
									<div class="col-sm-12">
										<input type="text" name="SoBai"></input>
									</div>
								</div>
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn">Lưu</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	