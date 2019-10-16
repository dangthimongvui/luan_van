<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class Nganh{
		private $MaNganh;
		private $MaKH;
		private $TenNganh;
		function __construct(){	
		}
		function getNganh(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM nganh,khoa WHERE khoa.MaKhoa = nganh.MaKH");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function insertNganh($MaNganh,$MaKhoa,$TenNganh){
			$stmt = DB::getConnect()->prepare("INSERT INTO nganh(MaNganh,MaKH,TenNganh) values (:MaNganh,:MaKhoa,:TenNganh)");
			$stmt->bindParam(":MaNganh",$MaNganh,PDO::PARAM_STR);
			$stmt->bindParam(":MaKhoa",$MaKhoa,PDO::PARAM_STR);
			$stmt->bindParam(":TenNganh",$TenNganh,PDO::PARAM_STR);
			$stmt->execute();
		}
		function updateNganh($MaKhoa,$TenNganh,$MaNganh){
			$stmt = DB::getConnect()->prepare("UPDATE nganh SET TenNganh = :TenNganh,MaNganh = :MaNganh WHERE MaKH = :MaKhoa");
			$stmt->bindParam(":MaKhoa",$MaKhoa,PDO::PARAM_STR);
			$stmt->bindParam(":TenNganh",$TenNganh,PDO::PARAM_STR);
			$stmt->bindParam(":MaNganh",$MaNganh,PDO::PARAM_STR);
			$stmt->execute();
		}
		function deteleNganh($MaNganh){
			$stmt = DB::getConnect()->prepare("DELETE FROM nganh WHERE MaNganh = :MaNganh");
			$stmt->bindParam(":MaNganh",$MaNganh,PDO::PARAM_STR);
			$stmt->execute();
		}
	}
	// $ng = new Nganh();
	// $nganh = $ng->getNganh();
	// var_dump($nganh);
?>