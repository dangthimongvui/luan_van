
</br>
<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../public/css/flaticon.css"/>
<link rel="stylesheet" href="../../public/css/magnific-popup.css"/>
<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
<?php
	// session_start();
	// require("../../controllers/LOPHP_controller.php");
	// require("../../controllers/COITHI_controller.php");
	// require("../../controllers/CHAMTHI_controller.php");
	require("../../controllers/GIANGVIEN_controller.php");
	// require("../../controllers/INSERT_KE_HOACH_GIANG_DAY_CONTROLLER.PHP")
?>
<!-- <header class="header-section">
		<div class="responsive"><i class="fa fa-bars"></i></div>
</header> -->
<div class="page-top-section">
	<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2><b>XEM GIỜ CHUẨN NĂM CÔNG TÁC</b></h2>
				<div class="page-links">
					<a href="../../views/giang_vien/home.php"><b>TRANG CHỦ | </b></a>
					<span>XEM GIỜ CHUẨN NĂM CÔNG TÁC</span>
				</div>
			</div>
		</div>
	</div>
</div>
</br>
<div class="registration spad fix">
	<div class="container" style="text-align: center;border-style: outset;">
		<div class="row" style="text-align: center;border-style: outset;">
			<div class="section-title dark">
				<h2><span style="color: blue">THÔNG TIN CHI TIẾT</span></h2>
			</div>
			<div class="col-md-12" style="border-style: outset;">
				<?php 
					// echo $_SESSION["MaLHP"];
					foreach ($giangvien as $value) {
						echo "<div class='row'>
							<div class='col-sm-12'>
								<p><b>TÊN GIẢNG VIÊN:</b> <a name='ten_gv'>".$value["HoTen"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>EMAIL:</b> <a name='mail'>".$value["Email"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>Số điện thoại:</b><a name='sdt'>".$value["DThoai"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>GIỚI TÍNH:</b> <a name='gioi_tinh'>".$value["Gtinh"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>ĐƠN VỊ: </b><a name='don_vi'>".$value["TenDV"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>CHỨC VỤ:</b> <a name='chuc_vu'>".$value["TenCV"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>NGẠCH GIẢNG VIÊN:</b> <a name='don_vi'> ".$value["TenNgach"]."</a></p>
							</div>
							<div class='col-sm-12'>
								<p><b>GIỜ CHUẨN:</b> <a name='don_vi'> ".$value["GioChuan"]."</a> Giờ</p>
							</div>

						</div>"; 
					 }
				?>
			</div>
		</div>
	</div>
</div>

