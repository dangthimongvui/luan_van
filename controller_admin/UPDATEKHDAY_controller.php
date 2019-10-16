<?php 
require_once("C:/xampp/htdocs/luan_van_ver2/models/LOPHP_model.php");;
$updateday = new LopHP();
$TenLopHP = $_POST["MaHP"]."-".$_POST["MaLop"];
// echo $_POST["MaHP"]."=";
// echo $TenLopHP."=";
// echo $_POST["SiSo"]."=";
// echo $_POST["HocKy"]."=";
// echo $_POST["NamHoc"]."=";
// echo $_POST["ThucHienLT"]."=";
// echo $_POST["ThucHienTH"]."=";
// echo $_POST["MaGV"]."=";
// echo $_POST["MaLHP"];

$updateday->updateKHDay($_POST["MaHP"],$TenLopHP,$_POST["SiSo"],$_POST["HocKy"],$_POST["NamHoc"],$_POST["ThucHienLT"],$_POST["ThucHienTH"],$_POST["MaGV"],$_POST["MaLHP"]);
header("Location: http://localhost/luan_van_ver2/views/admin/phan_cong_day.php");
?>
