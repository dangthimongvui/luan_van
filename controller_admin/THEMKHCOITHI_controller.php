<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/COITHI_model.php");
	$themcoithi = new CoiThi();
	if(("Ca 1 (7h30-9h)" == $_POST["CaThi"]) || ("Ca 2(9h30-11h)" == $_POST["CaThi"]) || ("Ca 3(1h30-3h)" == $_POST["CaThi"]) || ("Ca 4(3h20-5h)" == $_POST["CaThi"]))
	{
		$HeSo = '1';
		// echo $HeSo;
		// echo $_POST["CaThi"];
		$themcoithi->insertCoiThi($_POST["MaGV"],$_POST["MaLHP"],$_POST["ThoiGian"],$_POST["CaThi"],$HeSo);
		header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/phan_cong_day.php");
	}
	else
	{
		$HeSo = '1.2';
		// echo $HeSo;
		// echo $_POST["CaThi"];
		$themcoithi->insertCoiThi($_POST["MaGV"],$_POST["MaLHP"],$_POST["ThoiGian"],$_POST["CaThi"],$HeSo);
		header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/phan_cong_day.php");
	}
	// echo $_SESSION["MaGV"];
	// echo $_POST["MaLHP"];
	// echo $_POST["ThoiGian"];
	// echo $_POST["CaThi"];
	// echo $HeSo;;
	// echo $ThucHien;
?>