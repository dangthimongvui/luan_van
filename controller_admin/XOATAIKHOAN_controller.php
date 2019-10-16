<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DANGNHAP_model.php");
	$deleteTK = new DangNhap();
	// echo $_POST["username"];
	$deleteTK->deleteDangNhap($_POST["username"]);
	header("Location:http://localhost/luan_van_ver2/views/admin/tacvu.php")
?>