<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/HOCPHAN_model.php");
	$insertHocPhan = new HocPhan();
	// echo $_POST["MaHP"]."=";
	// echo $_POST["TenHP"]."=";
	// echo $_POST["SoTCLT"]."=";
	// echo $_POST["SoTCTH"]."=";
	// echo $_POST["MonTQ"];
	$insertHocPhan->insertHocPhan($_POST["MaHP"],$_POST["TenHP"],$_POST["SoTCLT"],$_POST["SoTCTH"],$_POST["MonTQ"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/tacvu.php")
?>