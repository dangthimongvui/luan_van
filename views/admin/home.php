<?php
	include("../layout/header_admin.php"); 
?>
<link rel="stylesheet" href="../../public/css/style.css"/>
<?php
	include("../layout/banner.php"); 
?>
<?php
	// require("../../controllers/LOPHP_controller.php");
	// require("../../controllers/COITHI_controller.php");
	// require("../../controllers/CHAMTHI_controller.php");
	require("../../controllers/GIANGVIEN_controller.php");
?>
<div class="registration spad fix">
	<div class="container">
		<div class="row">
			<div class="section-title dark">
				<h2><span>THÔNG TIN ADMIN</span></h2>
			</div>
			<div class="col-md-6"  style="border:2px solid white;text-align: center;">
				<div class="col-md-6" class="img"style="border:2px solid white,margin: 50px;width: 200px;height: 200px;border: solid 2px #33FF66;background-image: url(../../public/img/meo.jpg);background-size: 200px;background-repeat: none; border-radius: 50%;-moz-border-radius: 50%;-webkit-border-radius: 50%"></div>

				<div class="col-md-6">
					<?php
					foreach ($giangvien as $value) {
						echo "<div class='row'>
							<div class='col-sm-12'>
								<p><b>Họ Tên GV:</b> ".$value["HoTen"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>EMAIL:</b>".$value["Email"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>Điện thoại:</b>".$value["DThoai"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>GIỚI TÍNH:</b>".$value["Gtinh"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>ĐƠN VỊ: </b>".$value["TenKhoa"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>CHỨC VỤ:</b>".$value["TenCV"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>NGẠCH GIẢNG VIÊN:</b>".$value["TenNgach"]."</a></p>
							</div>
						</div>"; 
					}
					?>
					<!-- <img src="../../public/img/40 Icons mạng xã hội miễn phí/56/appstore-icon.png" alt=""> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<!-- single card -->
					<div class="col-md-3 col-sm-3">
						<div class="lab-card" style="background-color: #DDDDDD">
								<div class="icon">
									<i class="fa fa-address-book" aria-hidden="true"></i>
								</div>
								<a href="../admin/giangvien.php">Cập nhật hồ sơ giảng viên</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="lab-card" style="background-color: #DDDDDD">
								<div class="icon">
									<i class="fa fa-pencil-square" aria-hidden="true"></i>
								</div>
								<a href="../admin/phan_cong_day.php">PHÂN CÔNG KẾ HOẠCH</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-newspaper-o" aria-hidden="true"></i>	
							</div>
							<a href="../admin/bao_cao_thong_ke.php">THỐNG KÊ GIỜ GIẢNG</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-check-circle" aria-hidden="true"></i>
							</div>
							<a href="../admin/tacvu.php">TÁC VỤ KHOA DHKTCN</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php
		include("../layout/footer.php");  
	?>

	<!--====== Javascripts & Jquery ======-->
