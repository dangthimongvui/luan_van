<?php
	require_once("C:/xampp/htdocs/luan_van/models/CHAMTHI_model.php");
	$themchamthi = new ChamThi();
	$themchamthi->insertChamThi($_POST["MaGV"],$_POST["MaLopHP"],$_POST["SoBai"]);
	header("Location: http://localhost/luan_van/views/qly_cap_khoa/phan_cong_day.php");
	
?>