<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/Thuc_hanh_model.php");
	$DKThucHanh = new ThucHanh();
	$thuchanh = $DKThucHanh->getThucHanh();  
	// var_dump($thuchanh);
?>