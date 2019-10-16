<?php
// if(isset($_SESSION["MaGV"]));
session_start();
require_once("C:/xampp/htdocs/luan_van_ver2/models/CTKHGIANGDAY_model.php");
$chitietKH = new CTKHGiangDay();
// $chitietKHGD = $chitietKH->getCTKH($_SESSION["MaGV"]);
// $allctkh = $chitietKH->getCTKH();
$day = $chitietKH->getctkhgiangday($_SESSION["MaGV"]);
// echo $_SESSION["MaGV"];
// var_dump($GDnotsession);
// foreach ($day as $value) {
// echo $value["MaGV"];
// echo $value["MaLHP"];
// }
?>