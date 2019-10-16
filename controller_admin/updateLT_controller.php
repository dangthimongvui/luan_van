<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/ctlophptl_models.php");
	$a = new CTLOPHPLT();
	$an = $a->updateLopLT($_POST["MaLHP"],$_POST["day"],$_POST["kiemtra"],$_POST["rade"],$_POST["thi"],$_POST["chamthi"],$_POST["MaLop"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/ctlophplt.php")
?>