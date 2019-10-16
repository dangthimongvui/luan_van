
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../public/css/flaticon.css"/>
	<link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../public/css/style.css"/>

	<div class="registration spad fix">
		<div class="container" style="border-style: outset;>
			<div class="row">
				<div class="section-title dark">
					<h2> <span>THÊM TÀI KHOẢN</span></h2>
				</div>
				<div class="col-md-12">
					<form class="form-class" id="con_form" action="../../controllers_admin/THEMTAIKHOAN_controller.php" method="POST">
							<div class="row">
								<div class="col-md-12" >
									<b class="col-sm-12">Username</b>
									<div class='col-sm-12' >
										<input type='text' name="username" placeholder="Nhập username..."></input>
									</div>
									 
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Password</b>
									<div class='col-sm-12' >
										<input type='text' name="password" placeholder="Nhập password..."></input>
									</div>
									 
								</div>
								<div class="col-md-12" >
									<b class="col-sm-12">Loại tài khoản</b>
									<div class='col-sm-12' >
										<select name="loaitk">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
									</div>
								</div>
								<b><u>Loại tài khoản</u></b><br/>
								<b>0</b> Tài khoản quản lý</br>
								<b>1</b> Tài khoản giảng viên<br/>
								<b>2</b> Tài khoản admin<br/>
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
	