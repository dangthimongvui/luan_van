<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DETAI_model.php");
	$detai = new DeTai();
	// echo $_POST["MaDT"];
	$detai->deteteDeTai($_POST["MaDT"]);
	header("Location:http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
?>