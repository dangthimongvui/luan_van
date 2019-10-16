<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DETAI_model.php");
	$themDT = new DeTai();
	$time = " Từ ". $_POST["ThoiGianS"]." đến ".$_POST["ThoiGianE"];
	// echo $_POST["TenDT"]."=";
	// echo $_POST["Cap"]."=";
	// echo $_POST["QDTiet"]."=";
	// echo $time;
	$themDT->insertDeTai($_POST["TenDT"],$_POST["Cap"],$_POST["QDTiet"],$time);
	header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
?>