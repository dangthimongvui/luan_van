<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/DANGNHAP_model.php");
	$a = new DangNhap();
	$pass = hash("sha256",$_POST["password"]);
	$username = $_POST["username"];
	$password = $a->getPasswordByUsername($username);
	$loaitk = $a->getLoaiTKByUsername($username);
	
 	if($loaitk == 1){
		if(isset($_POST["loginSubmit"])){
			if ($password == $pass){
				session_start();
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["password"] = $_POST["password"];
				$_SESSION["LoaiTK"] = $loaitk;
				header("Location: http://localhost/luan_van_ver2/views/giang_vien/home.php");
			}
			else
			{
				echo "<script>alert('Đăng nhập thất bại!')</script>";
				// header('Location: http://localhost/luan_van/views/giang_vien/vui.php');
			// header('Location: http://localhost/luan_van/login.php');
				
			} 
		}
		else 
		{
			header('Location: http://localhost/luan_van_ver2/login.php');
		}
	}
	elseif($loaitk == 2){
		if(isset($_POST["loginSubmit"])){
			if ($password == $pass){
				session_start();
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["password"] = $_POST["password"];
				$_SESSION["LoaiTK"] = $loaitk;
				header("Location: http://localhost/luan_van_ver2/views/admin/home.php");
			}
			else
			{
				echo "<script>alert('Đăng nhập thất bại!')</script>";
				// header('Location: http://localhost/luan_van/views/giang_vien/vui.php');
			// header('Location: http://localhost/luan_van/login.php');
				
			} 
		}
		else 
		{
			header('Location: http://localhost/luan_van_ver2/login.php');
		}
	}

	else {
		if($loaitk == 0){
			if(isset($_POST["loginSubmit"])){
				if ($password == $pass){
					session_start();
					$_SESSION["username"] = $_POST["username"];
					$_SESSION["password"] = $_POST["password"];
					$_SESSION["LoaiTK"] = $loaitk;
					header("Location: http://localhost/luan_van_ver2/views/qly_cap_khoa/home.php");
				}
				else
				{
				echo "<script>alert('Đăng nhập thất bại!')</script>";
				} 
			}
			else 
			{
				header('Location: http://localhost/luan_van_ver2/login.php');
			}
		}
		else {
			
		}
		echo "<script>alert('Đăng nhập thất bại!');</script>";
	}
?>
















































