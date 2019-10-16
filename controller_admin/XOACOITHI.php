<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/COITHI_model.php");
	$xoacoithi = new CoiThi();
	// echo $_POST["ID"];
	$xoacoithi->deletecoithi($_POST["ID"]);
	header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
?>