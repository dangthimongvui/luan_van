<?php
	session_start();
	require_once("C:/xampp/htdocs/luan_van_ver2/models/GIANGVIEN_model.php");
	$gv = new GiangVien();
	$allgv = $gv->getGV();
	$giangvien = $gv->getGiangVien($_SESSION["username"]); 
	foreach ($giangvien as $value) {
		$_SESSION["MaGV"] = $value["MaGV"];
	 	$_SESSION["HoTen"]  = $value["HoTen"];
	 } 
?>	