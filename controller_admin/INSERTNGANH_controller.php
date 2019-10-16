<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/NGANH_model.php");
	$insertNganh = new Nganh();
	// echo $_POST["MaNganh"]."=";
	// echo $_POST["MaKhoa"]."=";
	// echo $_POST["TenNganh"];
	$insertNganh->insertNganh($_POST["MaNganh"],$_POST["MaKhoa"],$_POST["TenNganh"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/tacvu.php")
?>