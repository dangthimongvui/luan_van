<?php
	include("../layout/header.php");
?>
<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/magnific-popup.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<?php
	include("../layout/banner.php"); 
?>
<?php
	// session_start();
	// require("../../controllers/LOPHP_controller.php");
	// require("../../controllers/COITHI_controller.php");
	// require("../../controllers/CHAMTHI_controller.php");
	require("../../controllers/GIANGVIEN_controller.php");
	// require("../../controllers/INSERT_KE_HOACH_GIANG_DAY_CONTROLLER.PHP")
?>
<div class="registration spad fix">
	<div class="container">
		<div class="row">
			<div class="section-title dark">
				<h2><span>THÔNG TIN GIẢNG VIÊN</span></h2>
			</div>
			<div class="col-md-6"  style="border:2px solid white;text-align: center;">
				<div class="col-md-6" class="img"style="border:2px solid white,margin: 50px;width: 200px;height: 200px;border: solid 2px #33FF66;background-image: url(../../public/img/avatar/01.jpg);background-size: 200px;background-repeat: none; border-radius: 50%;-moz-border-radius: 50%;-webkit-border-radius: 50%"></div>

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
							<div class='col-sm-12'>
								<p><b>BẬT LƯƠNG:</b>".$value["BacLuong"]."</a></p>
							</div>
							<div><a href='../../views/giang_vien/updategv.php?MaGV=".$value['MaGV']."'><button style='background-color:#00CC99; color:white'>Cập nhật thông tin cá nhân</button></a></div>
						</div>"; 
					}
					?>
					<!-- <img src="../../public/img/40 Icons mạng xã hội miễn phí/56/appstore-icon.png" alt=""> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</div>
							<a href="../giang_vien/xemgiochuan.php?MaGV=<?php echo $_SESSION["MaGV"]; ?>"><h2>XEM GIỜ CHUẨN</h2></a>	
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
							<a href="../giang_vien/bao_cao_thong_ke.php"><h2>XEM BÁO CÁO THỰC HIỆN</h2></a>	
						</div>
					</div>
					<!-- <div class="col-md-3 col-sm-3">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							</div>
							<a href="../../views/giang_vien/kh_thuc_hien.php"><h2>XEM KẾ HOẠCH TH</h2></a>	
						</div>
					</div> -->
						<!-- single card -->
					<div class="col-md-4 col-sm-4">
						<div class="lab-card" style="background-color: #DDDDDD">
							<div class="icon">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
							</div>
							<a href="../giang_vien/duyet_gday.php?MaGV=<?php echo $_SESSION["MaGV"]?>"><h2>ĐĂNG KÍ KẾ HOẠCH</h2></a>								
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
	<script src="../../public/js/jquery-2.1.4.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/magnific-popup.min.js"></script>
	<script src="../../public/js/owl.carousel.min.js"></script>
	<script src="../../public/js/circle-progress.min.js"></script>
	<script src="../../public/js/main.js"></script>
</body>
</html>
