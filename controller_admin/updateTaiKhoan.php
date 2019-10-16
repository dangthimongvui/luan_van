<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DANGNHAP_model.php");
	$a = new DangNhap();
	// echo $_POST["password"];
	// echo $_POST["loaitk"];
	// echo $_POST["username"];
	$a->updateTaiKhoan($_POST["password"],$_POST["loaitk"],$_POST["username"]);
	// echo "<script>alert('Hello world!');</script>";
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.php");
?>