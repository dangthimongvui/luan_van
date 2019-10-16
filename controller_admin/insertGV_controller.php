<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/GIANGVIEN_model.php");
	
	$insertGV = new GiangVien();

	switch ($_POST["MaNG"]) {
		case "TRGV":
			$gio_chuan = 60;
			break;
		case "15.111":
			if ($_POST["BacLuong"] <= 3.0) {
				$gio_chuan = 280;
			}
			elseif ((3.0 < $_POST["BacLuong"]) && (3.99 >= $_POST["BacLuong"])) {
				$gio_chuan  = 330;
			}
			else {
				$gio_chuan = 380;
			}
			break;
		case "15.110":
			if (5.42 >= $_POST["BacLuong"]) {
				$gio_chuan = 420;
			}
			else{
				$gio_chuan = 440;
			}
			break;
		case "15.109":
			$gio_chuan = 100;
	}
	// echo $_POST["MaGV"]."=";
	// echo $_POST["MaKH"]."=";
	// echo $_POST["MaCV"]."=";
	// echo $_POST["MaNG"]."=";
	// echo $_POST["Username"]."=";
	// echo $_POST["HoTen"]."=";
	// echo $_POST["Gtinh"]."=";
	// echo $_POST["Email"]."=";
	// echo $_POST["DThoai"]."=";
	// echo $gio_chuan."=";
	// echo $_POST["BacLuong"];
	
	$insertGV->insertGiangVien($_POST["MaGV"],$_POST["MaKH"],$_POST["MaCV"],$_POST["MaNG"],$_POST["Username"],$_POST["HoTen"],$_POST["Gtinh"],$_POST["Email"],$_POST["DThoai"],$gio_chuan,$_POST["BacLuong"]);
	header("Location: http://localhost/luan_van_ver2/views/admin/giangvien.php");

?>