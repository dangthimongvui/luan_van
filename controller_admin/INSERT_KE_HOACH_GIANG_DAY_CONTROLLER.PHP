<?php 
	require_once("../models/LOPHP_model.php");
	require_once("../models/HOCPHAN_model.php");
	$lopHP = new LopHP();
	$hocPhan = new HocPhan();

	if(isset($_POST["submit"])){
		$lopHP->insertKHGDay($_POST["MaHP"],$_POST["TenLopHP"],$_POST["SiSo"],$_POST["HocKy"],$_POST["NamHoc"]);
		$hocPhan->insertHocPhan($_POST["TenHP"],$_POST["SoTCLT"],$_POST["SoTCTH"]);
	}
	header("Location: http://localhost/luan_van/views/giang_vien/day.php");
?>