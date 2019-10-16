<?php 
	session_start();
	require_once("../models/COITHI_model.php");
	require_once("../models/LOPHP_model.php");
	require_once("../models/DOANLV_model.php");
	require_once("../models/Thuc_hanh_model.php");
	$xoalhp = new LopHP();
	$xoacoithi = new CoiThi();
	$xoaDA = new DoAnLV();
	$xoaTH = new ThucHanh();
	$xoalhp->deleteLopHP($_POST["MaLopHP"]);
	$xoacoithi->deletecoithi($_POST["id"]);
	$xoaDA->deleteDA($_POST["MaDLV"]);
	$xoaTH->deleteThucHanh($_POST["id"]);
	header("Location: http://localhost/luan_van/views/qly_cap_khoa/phan_cong_day.php");
?>