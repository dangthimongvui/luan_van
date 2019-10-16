<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class Khoa{
		private $MaKH;
		private $TenKH;
		function __construct(){
		}
		function getKhoa(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM khoa");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function insertKhoa($TenKhoa){
			$stmt = DB::getConnect()->prepare("INSERT INTO khoa(TenKhoa) values (:TenKhoa)");
			$stmt->bindParam(":TenKhoa",$TenKhoa,PDO::PARAM_STR);
			$stmt->execute();
		}
		function updateKhoa($TenKhoa,$MaKhoa){
			$stmt = DB::getConnect()->prepare("UPDATE khoa SET TenKhoa = :TenKhoa WHERE MaKhoa = :MaKhoa");
			$stmt->bindParam(":TenKhoa",$TenKhoa,PDO::PARAM_STR);
			$stmt->bindParam(":MaKhoa",$MaKhoa,PDO::PARAM_INT);
			$stmt->execute();
		}
		function deleteKhoa($MaKhoa){
			$stmt = DB::getConnect()->prepare("DELETE FROM khoa WHERE MaKhoa = :MaKhoa");
			$stmt->bindParam(":MaKhoa",$MaKhoa,PDO::PARAM_INT);
			$stmt->execute();
			
		}
	}

?>