<?php
	session_start();
	require_once("C:/xampp/htdocs/luan_van_ver2/models/COITHI_model.php");
	$updatecoithi = new CoiThi();
	if(("Ca 1 (7h30 - 9h)" != $_POST["CaThi"]) || ("Ca 2 (9h30 - 11h)" != $_POST["CaThi"]) || ("Ca 3 (1h30 - 3h)" != $_POST["CaThi"]) || ("Ca 4 ( 3h20 - 5h)" != $_POST["CaThi"]))
	{
		$heso = '1.2';
		// echo $_SESSION["MaGV"]."=";
		// echo $_POST["MaLopHP"]."=";
		// echo $_POST["ThoiGian"]."=";
		// echo $_POST["CaThi"]."=";
		// echo $heso."=";
		// echo $_POST["ID"];
		// CNTT0001=2019001=2025-01-01=Ca 4(3h30-5h)=1.2=3
		// $MaGV,$MaLopHP,$ThoiGian, $CaThi, $HeSo,$ID
		$updatecoithi->updateCoiThi($_SESSION["MaGV"],$_POST["MaLopHP"],$_POST["ThoiGian"],$_POST["CaThi"],$heso,$_POST["ID"]);
		header("Location: http://localhost/luan_van_ver2/views/giang_vien/duyet_gday.php?MaGV=".$_SESSION["MaGV"]."");
	}	
	else
	{
		$heso = '1';
		// echo $_SESSION["MaGV"];
		// echo $_POST["MaLopHP"];
		// echo $_POST["ThoiGian"];
		// echo $_POST["CaThi"];
		// echo $heso;
		// echo $_POST["ID"];
		$updatecoithi->updateCoiThi($_SESSION["MaGV"],$_POST["MaLopHP"],$_POST["ThoiGian"],$_POST["CaThi"],$heso,$_POST["ID"]); 
		header("Location: http://localhost/luan_van_ver2/views/giang_vien/duyet_gday.php?MaGV=".$_SESSION["MaGV"]."");
	}
	// echo "<script>alert('da luu du lieu');</script>";
	// header("Location:http://localhost/luan_van/views/giang_vien/duyet_gday.php");
?>