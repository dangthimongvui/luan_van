<?php
// session_start();
require_once("C:/xampp/htdocs/luan_van_ver2/models/HOCPHAN_model.php"); 
$hp = new HocPhan();
$hocphan = $hp->getAllDataByMaHP();
// var_dump($hocphan);
// foreach ($hocPhan as $value) {
	// $_SESSION["MaHP"] = $value["MaHP"];

?>