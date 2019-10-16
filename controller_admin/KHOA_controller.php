<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/KHOA_model.php");
	$khoa = new Khoa();
	// echo $_POST["TenKhoa"];
	$khoa->insertKhoa($_POST["TenKhoa"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/tacvu.php")
?>