<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/GIANGVIEN_model.php");
	$xoaGiangVien = new GiangVien();
    // echo $_POST["MaGV"];
	$xoaGiangVien->deleteGiangVien($_POST["MaGV"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/giangvien.php");
?>