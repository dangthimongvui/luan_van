<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/LOP_model.php");
	$lop = new Lop();
	// echo $_POST["MaNganh"];
	// echo $_POST["TenLop"];
	// echo $_POST["SiSo"];
	// echo $_POST["NienKhoa"];
	// echo $_POST["MaLop"];
	$lop->updateLop($_POST["MaNganh"],$_POST["TenLop"],$_POST["SiSo"],$_POST["NienKhoa"],$_POST["MaLop"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.php");
?>