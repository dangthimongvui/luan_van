<?php  
	// session_start();
	require_once("C:/xampp/htdocs/luan_van/models/LOPHP_model.php");
	$them = new LopHP();
	$mahp = $_POST["MaHP"];
	$tenlhp = $_POST["TenLopHP"];
	$siso = $_POST["SiSo"];
	$hocki = $_POST["HocKy"];
	$namhoc = $_POST["NamHoc"];
	$them->insertKHGDay($mahp,$tenlhp,$siso,$hocki,$namhoc);
	echo "<script>alert('da luu du lieu');</script>";
	// header("Location: http://localhost/luan_van/views/giang_vien/day.php");
?>