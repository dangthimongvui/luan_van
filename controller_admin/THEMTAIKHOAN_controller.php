<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DANGNHAP_model.php");
	$dangnhap = new DangNhap();
	// echo $_POST["username"];
	// echo $_POST["password"];
	// echo $_POST["loaitk"];
	$dangnhap->insertuser($_POST["username"],$_POST["password"],$_POST["loaitk"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.php");
	
?>