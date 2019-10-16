<?php 
	session_start();
	unset($_SESSION['MaLHP']);
	header("Location: http://localhost/luan_van/views/giang_vien/day.php");
?>