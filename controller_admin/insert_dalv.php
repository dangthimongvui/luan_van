<?php
	session_start();
	require_once("../models/DOANLV_model.php");
	// $a = new DoAnLV();
	// $a->insertDALV(5,1,'nguye thi anh','do an 1','từ 2019-04-05 đến 2019-05-05',3,'no')
	$doanlv = new DoAnLV();
	$ThucHien = 'No';
	$time = "Từ ".$_POST["ThoiGianS"]." Đến ".$_POST["ThoiGianE"];
	if(('Đồ án 1' == $_POST["Loai"]) ||('Đồ án 2' == $_POST["Loai"]) ||('Đồ án 3'== $_POST["Loai"]))
	{
		$QDTiet = '3 giờ';
		// echo $_POST["MaDLV"]."=";
		// echo $_POST["TenDLV"]."=";
		// echo $_POST["MSSV"]."=";
		// echo $_POST["Loai"]."=";
		// echo $time."=";
		// echo $QDTiet;
		// $MaDLV,$TenDLV,$MSSV,$Loai,$TGianTH,$QDTiet
		$doanlv->insertDALV($_POST["MaDLV"],$_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet); 
		header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
	}
	
	elseif (('Tiểu luận' == $_POST["Loai"])) 
	{
		$QDTiet = '6 giờ';
		// echo $_POST["MaDLV"];
		// echo $_POST["TenDLT"];
		// echo $_POST["MSSV"];
		// echo $_POST["Loai"];
		// echo $time;
		// echo $QDTiet;
		$doanlv->insertDALV($_POST["MaDLV"],$_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet); 
		header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
	}
	else 
	{
		$QDTiet = '17 giờ';
		// echo $_POST["MaDLV"];
		// echo $_POST["TenDLT"];
		// echo $_POST["MSSV"];
		// echo $_POST["Loai"];
		// echo $time;
		// echo $QDTiet;
		$doanlv->insertDALV($_POST["MaDLV"],$_POST["TenDLV"],$_POST["MSSV"],$_POST["Loai"],$time,$QDTiet); 
		header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
	}
?>
