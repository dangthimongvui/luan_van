<?php
	// session_start();
	require_once("C:/xampp/htdocs/luan_van_ver2/models/LOPHP_model.php");
	$themday = new LopHP();
	$ThucHienLT = 'N';
	$ThucHienTH = 'N';
	$TenLopHP = $_POST["MaHP"]."-".$_POST["MaLop"];
	// echo $_POST["MaLHP"]."-";
	// echo $_POST["MaHP"]."-";
	// echo $TenLopHP."-";
	// echo $_POST["SiSo"]."-";
	// echo $_POST["HocKy"]."-";
	// echo $_POST["NamHoc"]."-";
	// echo $_SESSION["MaGV"]."-";
	// echo $ThucHienLT."-";
	// echo $ThucHienTH;
	// echo $themday->insertLopHP($echo,$echo1,$echo2,$echo3,$echo4);
	$themday->insertLopHP($_POST["MaLHP"],$_POST["MaHP"],$TenLopHP,$_POST["SiSo"],$_POST["HocKy"],$_POST["NamHoc"],$_POST["MaGV"],$ThucHienLT,$ThucHienTH);
	header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
	// echo "<script>alert('da luu du lieu');</script>";
?>
