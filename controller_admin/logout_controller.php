<?php 
	session_start();
	session_destroy();
	header("Location: http://localhost/luan_van/login.php");
?>