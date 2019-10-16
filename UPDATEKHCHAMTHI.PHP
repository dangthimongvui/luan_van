<?php
	// session_start();
	require_once("C:/xampp/htdocs/luan_van/models/CHAMTHI_model.php");
	$updatechamthi = new ChamThi();
	$updatechamthi->updateChamThi($_POST["MaGV"],$_POST["MaLopHP"],$_POST["SoBai"],$_POST["id"]); 
	// echo "<script>alert('da luu du lieu');</script>";
	header("Location:http://localhost/luan_van/views/giang_vien/duyet_gday.php");	
?>