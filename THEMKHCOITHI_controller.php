<?php
	session_start();
	require_once("C:/xampp/htdocs/luan_van_ver2/models/COITHI_model.php");
	$themcoithi = new CoiThi();
	if(("Ca 1 (7h30 - 9h)" != $_POST["CaThi"]) || ("Ca 2 (9h30 - 11h)" != $_POST["CaThi"]) || ("Ca 3 (1h30 - 3h)" != $_POST["CaThi"]) || ("Ca 4 ( 3h20 - 5h)" != $_POST["CaThi"]))
	{
		$HeSo = '1.2';
		$themcoithi->insertCoiThi($_SESSION["MaGV"],$_POST["MaLHP"],$_POST["ThoiGian"],$_POST["CaThi"],$HeSo);
		header("Location: http://localhost/luan_van_ver2/views/giang_vien/duyet_gday.php?MaGV=".$value["MaGV"]."");
	}
	else
	{
		$HeSo = '1';
		$themcoithi->insertCoiThi($_SESSION["MaGV"],$_POST["MaLHP"],$_POST["ThoiGian"],$_POST["CaThi"],$HeSo);
		header("Location: http://localhost/luan_van/views_ver2/giang_vien/duyet_gday.php?MaGV=".$value["MaGV"]."");
	}
	// echo $_SESSION["MaGV"];
	// echo $_POST["MaLHP"];
	// echo $_POST["ThoiGian"];
	// echo $_POST["CaThi"];
	// echo $HeSo;;
	// echo $ThucHien;
?>