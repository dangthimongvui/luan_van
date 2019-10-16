<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/GIANGVIEN_model.php");
	$gv = new GiangVien();
	$giangvien = $gv->getGVien($_GET["MaGV"],$_GET["Username"]);
	// var_dump($giangvien);
?>