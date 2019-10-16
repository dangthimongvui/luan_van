<?php
	include("../layout/header_admin.php");  
?>
<?php 
	require_once("../../controllers_ad/LOPHP_controller.php");
	require_once("../../controllers_ad/COITHI_controller.php");
	require_once("../../controllers_ad/DOANLV_controller.php");
	require_once("../../controllers_ad/thuchanh_controller.php");
	require_once("../../controllers_ad/DETAI_controller.php");
?>
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>TÁC VỤ KHOA</h2>
				<div class="page-links">
					<a href="../qly_cap_khoa/home.php">TRANG CHỦ</a>
					<span>TÁC VỤ KHOA</span>
				</div>
			</div>
		</div>
	</div>
	<?php
		include("../../views/layout/tacvuAD.php"); 
	?>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    <div class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12" style="text-align: center;">
								<img src="../../public/img/ctuet_bgr.jpg" alt="">
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


