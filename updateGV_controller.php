<?php
	session_start();
	require_once("C:/xampp/htdocs/luan_van_ver2/models/GIANGVIEN_model.php"); 
	$gv = new GiangVien();
	// echo $_POST["MaKhoa"]."=";
	// echo $_POST["MaCV"]."=";
	// echo $_POST["MaNG"]."=";
	// echo $_POST["HoTen"]."=";
	// echo $_POST["Gioitinh"]."=";
	// echo $_POST["Email"]."=";
	// echo $_POST["sdt"]."=";
	// echo $_POST["MaGV"]."=";
	// echo $_SESSION["username"];
	// $gv->updateGiangVien()
	// $MaKhoa,$MaCV,$MaNG,$HoTen,$GTinh,$Email,$DThoai,$MaGV,$Username
	$gv->updateGiangVien($_POST["MaKhoa"],$_POST["MaCV"],$_POST["MaNG"],$_POST["HoTen"],$_POST["Gioitinh"], $_POST["Email"],$_POST["sdt"],$_POST["MaGV"],$_SESSION["username"]); 
	header("Location: http://localhost/luan_van_ver2/views/giang_vien/home.php");
?>