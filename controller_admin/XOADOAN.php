<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DOANLV_model.php");
	$xoaDA = new DoAnLV();
	// echo $_POST["MaDLV"];
	$xoaDA->deleteDA($_POST["MaDLV"]);
	header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
	
?>