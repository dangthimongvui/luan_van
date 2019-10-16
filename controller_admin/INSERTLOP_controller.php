<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/LOP_model.php");
	$lop = new Lop();
	// echo $_POST["MaLop"]."=";
	// echo $_POST["MaNganh"]."=";
	// echo $_POST["TenLop"]."=";
	// echo $_POST["SiSo"]."=";
	// echo $_POST["NienKhoa"];
	$lop->insertLop($_POST["MaLop"],$_POST["MaNganh"],$_POST["TenLop"],$_POST["SiSo"],$_POST["NienKhoa"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/tacvu.php")

?>
