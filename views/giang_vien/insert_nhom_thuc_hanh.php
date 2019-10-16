<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php 
	session_start();
	require_once("../../controllers/GETALL.controller.php");
?>
<div class="registration spad fix">
	<div class="container">
		<div class="row" style="border-style:outset;">
			<div class="section-title dark">
				<h2> <span>ĐĂNG KÍ NHÓM THỰC HÀNH</span></h2>
			</div>
			<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/them_thuc_hanh.php" method="POST">
							<div class="row">
								<div class="col-md-12" style="text-align:center;">
									<?php 
									echo 
									"<div  class='row'>
										<div class='col-sm-12'>
										</div>
									</div>
									<div class='row'>
										<div class='col-sm-12'>
											<p>Chào:".$_SESSION["HoTen"]." (".$_SESSION["MaGV"].")</a></p>
										</div>
									</div>"
									?>
								</div>
								<div class="col-md-12">
									<b class="col-sm-12">Lớp học phần</b>
									<div class="col-sm-12">
										<select name="MaLHP">
											<?php
										foreach ($alllophp as $value) {
											echo "<option type='text' value=".$value["MaLHP"]." class='form-control'>".$value["TenLopHP"]."</option>";
										     }
										?>	
										</select>
									</div>
								</div>
							
								<div class="col-md-12">
									<b class="col-sm-12">Nhóm</b>
									<div class="col-sm-12">
										<select name="Nhom">
											<option>1</option>
											<option>2</option>
											<option>3</option>

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
		
	

	
	

	
