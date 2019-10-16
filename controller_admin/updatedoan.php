\<?php
	session_start();
	require_once("../models/DOANLV_model.php");
	$doanlv = new DoAnLV();
	$ThucHien = 'N';
	$time = "Từ ".$_POST["ThoiGianS"]." Đến ".$_POST["ThoiGianE"];

	if(('DA1' == $_POST["Loai"]) ||('DA2' == $_POST["Loai"]) ||('DA3'== $_POST["Loai"]))
	{
		$QDTiet = '3 giờ';
		// echo $_POST["TenDLV"]."=";
		// echo $_POST["MSSV"]."=";
		// echo $_POST["Loai"]."=";
		// echo $time."=";
		// echo $QDTiet."=";
		// echo $_POST["MaDLV"];
		$doanlv->updateDALV($_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet,$_POST["MaDLV"]); 
		header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");

	}
	elseif (('TL' == $_POST["Loai"])) 
	{
		$QDTiet = '6 giờ';
		// echo $_POST["TenDLV"]."=";
		// echo $_POST["MSSV"]."=";
		// echo $_POST["Loai"]."=";
		// echo $time."=";
		// echo $QDTiet."=";
		// echo $_POST["MaDLV"];
	$doanlv->updateDALV($_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet,$_POST["MaDLV"]); 
		header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
		
	}
	else 
	{
		$QDTiet = '17 giờ';
		// echo $_POST["TenDLV"]."=";
		// echo $_POST["MSSV"]."=";
		// echo $_POST["Loai"]."=";
		// echo $time."=";
		// echo $QDTiet."=";
		// echo $_POST["MaDLV"];
	$doanlv->updateDALV($_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet,$_POST["MaDLV"]); 
		header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
		
	}
	// $an = $a->updateDALV()
?>