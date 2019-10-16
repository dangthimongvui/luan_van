<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/NGANH_model.php");
	$deleteNganh =  new Nganh();
	echo $_POST["manganh"];
	$deleteNganh->deteleNganh($_POST["manganh"]);
	header("Location:http://localhost/luan_van_ver2/views/admin/tacvu.php")
?>