<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/Thuc_hanh_model.php");
	$xoaTH = new ThucHanh();
	// echo $_POST["id"];
	$xoaTH->deleteThucHanh($_POST["id"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/phan_cong_day.php");
?>