<?php 
	session_start();
	require("../models/Thuc_hanh_model.php");
	$insertTH = new ThucHanh();
	$thuchien = 'N';
	// echo $_POST["MaLHP"]."=";
	// echo $_POST["Nhom"]."=";
	// echo $thuchien;
	$insertTH->insertThucHanh($_POST["MaLHP"],$_POST["Nhom"],$thuchien);
	header("Location:http://localhost/luan_van_ver2/views/qly_cap_khoa/phan_cong_day.php");	
?>
