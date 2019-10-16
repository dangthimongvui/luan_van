<?php 
	session_start();
	require("../models/Thuc_hanh_model.php");
	$insertTH = new ThucHanh();
	$thuchien = 'N';
	// echo $_POST["MaLHP"]."=";
	// echo $_POST["Nhom"]."=";
	// echo $thuchien;
	$insertTH->insertThucHanh($_POST["MaLHP"],$_POST["Nhom"],$thuchien);
	header("Location:http://localhost/luan_van_ver2/views/giang_vien/duyet_gday.php?MaGV=".$SESSION["MaGV"]."");	
?>
