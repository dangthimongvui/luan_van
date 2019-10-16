<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class Lop{
		private $MaLop;
		private $MaNganh;
		private $TenLop;
		private $SiSo;
		private $NienKhoa;
		function __construct(){
		}
		function getLop(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM lop");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function insertLop($MaLop,$MaNganh,$TenLop,$SiSo,$NienKhoa){
			$stmt = DB::getConnect()->prepare("INSERT INTO lop(MaLop,MaNganh,TenLop,SiSo,NienKhoa) values (:MaLop,:MaNganh,:TenLop,:SiSo,:NienKhoa)");
			$stmt->bindParam(":MaLop",$MaLop,PDO::PARAM_STR);
			$stmt->bindParam(":MaNganh",$MaNganh,PDO::PARAM_STR);
			$stmt->bindParam(":TenLop",$TenLop,PDO::PARAM_STR);
			$stmt->bindParam(":SiSo",$SiSo,PDO::PARAM_INT);
			$stmt->bindParam(":NienKhoa",$NienKhoa,PDO::PARAM_STR);
			$stmt->execute();
		}
		function updateLop($MaNganh,$TenLop,$SiSo,$NienKhoa,$MaLop)	{
			$stmt = DB::getConnect()->prepare("UPDATE lop SET MaNganh = :MaNganh, TenLop = :TenLop,SiSo = SiSo,NienKhoa = :NienKhoa WHERE MaLop = :MaLop");
			$stmt->bindParam(":MaNganh",$MaNganh,PDO::PARAM_STR);
			$stmt->bindParam(":TenLop",$TenLop,PDO::PARAM_STR);
			$stmt->bindParam(":SiSo",$SiSo,PDO::PARAM_INT);
			$stmt->bindParam(":NienKhoa",$NienKhoa,PDO::PARAM_STR);
			$stmt->bindParam(":MaLop",$MaLop,PDO::PARAM_STR);
			$stmt->execute();
		}
		function deleteLop($MaLop){
			$stmt = DB::getConnect()->prepare("DELETE FROM lop WHERE MaLop = :MaLop");
			$stmt->bindParam(":MaLop",$MaLop,PDO::PARAM_STR);
			$stmt->execute();
		}
	}  
?>