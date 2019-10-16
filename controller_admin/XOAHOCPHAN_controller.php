<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/models/HOCPHAN_model.php");
	$deleteHocPhan = new HocPhan();
	// echo $_POST["mahp"];
	$deleteHocPhan->deleteHocPhan($_POST["mahp"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/tacvu.php")
?>
