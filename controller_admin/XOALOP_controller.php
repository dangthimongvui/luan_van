<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/LOP_model.php");
	$deleteLop = new Lop();
	// echo $_POST["malop"];
	$deleteLop->deleteLop($_POST["malop"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.phpp")
?>