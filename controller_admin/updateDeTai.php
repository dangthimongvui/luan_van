<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DETAI_model.php");
	$updateDT = new DeTai();
	$ThoiGian = "Từ ". $_POST["ThoiGianS"]." đến ".$_POST["ThoiGianE"];
	// echo $_POST["TenDT"]."=";
	// echo $_POST["Cap"]."=";
	// echo $_POST["QDTiet"]."=";
	// echo $ThoiGian."=";
	// echo $_POST["MaDT"];
	$updateDT->updateDeTai($_POST["TenDT"],$_POST["Cap"],$_POST["QDTiet"],$ThoiGian,$_POST["MaDT"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
?>