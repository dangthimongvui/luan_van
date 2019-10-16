<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class DangNhap{
		private $LoaiTK; 
		private $Username;
		private $Password;
	
	function __construct(){
	}

	function setUserName($Username){
		$this->Username = $Username;
	}
	function getUserName(){
		return $this->Username;
	}
	function setPassWord($Password){
		$this->Password = $Password;
	}
	function getPassWord(){
		return $this->Password;
	}
	function getDN(){
		$stmt = DB::getConnect()->prepare("SELECT * FROM dangnhap");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function insertuser($Username,$Password,$LoaiTK){
		$stmt = DB::getConnect()->prepare("INSERT INTO dangnhap(Username,Password,LoaiTK) VALUES (:Username,:Password,:LoaiTK)");
		$Pass = hash("sha256",$Password);
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->bindParam(":Password",$Pass,PDO::PARAM_STR);
		$stmt->bindParam(":LoaiTK",$LoaiTK,PDO::PARAM_STR);
		$stmt->execute();
	}

	function updateTaiKhoan($Password,$LoaiTK,$Username){
		$stmt = DB::getConnect()->prepare("UPDATE dangnhap SET Password = :Password,LoaiTK = :LoaiTK WHERE Username = :Username");
		$Pass = hash("sha256",$Password);
		$stmt->bindParam(":Password",$Pass,PDO::PARAM_STR);
		$stmt->bindParam(":LoaiTK",$LoaiTK,PDO::PARAM_STR);
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->execute();
	}
	function getPasswordByUsername($Username){
		$stmt = DB::getConnect()->prepare("SELECT Password FROM dangnhap WHERE Username = :Username");
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->execute();
		foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $value) {
			$Password = $value["Password"];
		}
		return $Password;
	}

	function getLoaiTKByUsername($Username){
		$stmt = DB::getConnect()->prepare("SELECT LoaiTK FROM dangnhap WHERE Username = :Username");
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->execute();
		foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $value) {
			$LoaiTK = $value["LoaiTK"];
		}
		return $LoaiTK;
	}

	function getMaGVbydangnhap($Username){
		$stmt = DB::getConnect()->prepare("SELECT * FROM giangvien WHERE Username = :Username");
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->execute();
	}
	function deleteDangNhap($Username){
		$stmt = DB::getConnect()->prepare("DELETE FROM dangnhap WHERE Username = :Username");
		$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
		$stmt->execute();

	}
}	
// $a = new DangNhap();
// $a->updateTaiKhoan("12345",0,"01012000");
?>

