<?php  
	require_once("C:/xampp/htdocs/luan_van_ver2/models/KHGIANGDAY_model.php");
	$khgd = new KHGiangDay();
	$khgiangday = $khgd->getKHGDay();
	// var_dump($khgiangday);
	// echo "<script>alert('da luu du lieu');</script>";
	// header("Location: http://localhost/luan_van/views/giang_vien/day.php");
?>