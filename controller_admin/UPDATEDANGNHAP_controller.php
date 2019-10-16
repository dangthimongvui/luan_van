<?php 
   require_once("C:/xampp/htdocs/luan_van_ver2/models/DANGNHAP_model.php");
   $updateTaiKhoan = new DangNhap();
   $updateTaiKhoan->updateTaiKhoan($_POST["Password"],$_POST["LoaiTK"],$_POST["Username"]);
	header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/tacvu.php")
?>