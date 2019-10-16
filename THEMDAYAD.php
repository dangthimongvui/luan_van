<?php
	// session_start();
	require_once("C:/xampp/htdocs/luan_van/models/LOPHP_model.php");
	require_once("C:/xampp/htdocs/luan_van/models/CTKHGIANGDAY_model.php");
	$themday = new LopHP();
	$themctday = new CTKHGiangDay();
	// echo $_POST["MaLHP"];
	// echo $_POST["TenLopHP"]."-";
	// echo $_POST["MaHP"]."-";
	// echo $_POST["SiSo"]."-";
	// echo $_POST["HocKy"]."-";
	// echo $_POST["NamHoc"];
	// echo $themday->insertLopHP($echo,$echo1,$echo2,$echo3,$echo4);
	$themday->insertLopHP($_POST["TenLopHP"],$_POST["MaHP"],$_POST["SiSo"],$_POST["HocKy"],$_POST["NamHoc"]);
	$themctday->insertctkhGV($_POST["MaGV"],$_POST["MaLHP"],$_POST["HocKy"],$_POST["NamHoc"]);
	header("Location: http://localhost/luan_van/views/qly_cap_khoa/them_kh_gday.php");
	// echo "<script>alert('da luu du lieu');</script>";
?>
