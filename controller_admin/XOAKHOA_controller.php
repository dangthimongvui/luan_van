<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/KHOA_model.php");
	$deleteKhoa = new Khoa();
	// echo $_POST["makhoa"];
	$deleteKhoa->deleteKhoa($_POST["makhoa"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.php")
?>