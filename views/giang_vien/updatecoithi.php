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
		<div class="row" style="border-style: outset;">
			<div class="section-title dark">
				<h2> <span>UPDATE KẾ HOẠCH ĐĂNG KÍ COI THI</span></h2>
			</div>
			<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers/UPDATEKHCOITHI.PHP" method="POST">
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
											<p>Chào: <a name='ten_gv'>".$_SESSION["HoTen"]." (".$_SESSION["MaGV"].")</a></p>
										</div>
									</div>"
									?>
								</div>
								<input type='hidden' name='ID' value='<?php echo $_GET["ID"]; ?>'></input>
								<div class="col-md-12">
									<b class="col-sm-12">Lớp học phần</b>
									<div class="col-sm-12">
										<select name='MaLopHP'>
											<?php
										foreach ($alllophp as $value) {
											echo "<option type='text' value=".$value["MaLHP"]." class='form-control' value=".$value["MaLHP"].">".$value["MaLHP"]." - ".$value["TenLopHP"]."</option>";
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
										</select>
									</div>
								</div>

							<!-- 	<div class="col-md-12">
									<b class="col-sm-12">Hệ số</b>
									<div class="col-sm-12">
											<input type="text" name="HeSo"> </input>
									</div>
								</div> -->
								<div class="col-sm-12" style="text-align: center;">
									<button class="site-btn" type="submit"><b>Lưu</b></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		
	

	
	

	
