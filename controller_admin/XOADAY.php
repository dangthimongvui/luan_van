<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/LOPHP_model.php");
	$xoaday = new LopHP();
	// echo $_POST["MaLopHP"];
	$xoaday->deleteLopHP($_POST["MaLopHP"])
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/phan_cong_day.php");
?>