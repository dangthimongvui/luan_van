<?php 
	session_start();
	session_destroy();
	header("Location: http://localhost/luan_van_ver2/login.php");
?>