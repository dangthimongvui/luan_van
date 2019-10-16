<?php
	session_start();
	require_once("C:/xampp/htdocs/luan_van/models/CHAMTHI_model.php");
	$themchamthi = new ChamThi();
	$themchamthi->insertChamThi($_SESSION["MaGV"],$_POST["MaLopHP"],$_POST["SoBai"]);
	header("Location: http://localhost/luan_van/views/giang_vien/duyet_gday.php");
?>