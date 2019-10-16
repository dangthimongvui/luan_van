<?php	
	require_once("C:/xampp/htdocs/luan_van_ver2/models/COITHI_model.php");
	$ct = new CoiThi();
	// $coithi = $ct->getCoiThi($_GET["MaGV"]);
	$coithinotsession = $ct->getcoithinotsession();
?>