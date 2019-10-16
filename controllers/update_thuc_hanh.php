<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/Thuc_hanh_model.php");
	$updatethuchanh = new ThucHanh(); 
	// echo $_POST["MaLHP"]."=";
	// echo $_POST["Nhom"]."=";
	// echo $_POST["ThucHien"]."=";
	// echo $_POST["MaLop"];
	$updatethuchanh->updateThucHanh($_POST["MaLHP"],$_POST["Nhom"],$_POST["ThucHien"],$_POST["MaLop"]);
	header("Location:http://localhost/luan_van_ver2/views/giang_vien/duyet_gday.php?MaGV=".$_SESSION["MaGV"]."");	
?>