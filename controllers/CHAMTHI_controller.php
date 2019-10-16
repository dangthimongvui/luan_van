<?php 
	require_once("C:/xampp/htdocs/luan_van/models/CHAMTHI_model.php");
	$ct = new ChamThi();
	session_start();
	$chamthi = $ct->getChamThi($_SESSION["MaGV"]);
	$chamthinotsession = $ct->getchamthinotsession();
?>