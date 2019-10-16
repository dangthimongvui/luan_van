<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class ThucHanh{
		private $id;
		private $MaLHP;
		private $Tiet;
		private $Nhom;
		private $SiSo;
		private $ThoiGian;
		private $ThucHien;
		function __construct(){
		}

		function setid($id){
			$this->id = $id;
		}
		function getid(){
			return $this->id;
		}

		function setMaLHP($MaLHP){
			$this->MaLHP = $MaLHP;
		}
		function getMaLHP(){
			return $this->MaLHP;
		}

		function setTiet($Tiet){
			$this->Tiet = $Tiet;
		}
		function getTiet(){
			return $this->Tiet;
		}
		function setNhom($Nhom){
			$this->Nhom = $Nhom;
		}
		function getNhom(){
			return $this->Nhom;
		}
		function setSiSo($SiSo){
			$this->SiSo = $SiSo;
		}
		function getSiSo(){
			return $this->SiSo;
		}
		function setThoiGian($ThoiGian){
			$this->ThoiGian = $ThoiGian;
		}
		function getThoiGian(){
			return $this->ThoiGian;
		}
		function setThucHien($ThucHien){
			$this->ThucHien = $ThucHien;
		}
		function getThucHien(){
			return $this->ThucHien;
		}

		function getThucHanh(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM ctlophpth,lophp WHERE ctlophpth.MaLopHP = lophp.MaLHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	
		function insertThucHanh($MaLopHP,$Nhom,$ThucHien){
			$stmt = DB::getConnect()->prepare("INSERT INTO ctlophpth(MaLopHP,Nhom,ThucHien) VALUES (:MaLopHP,:Nhom,:ThucHien)");
			$stmt->bindParam(':MaLopHP',$MaLopHP,PDO::PARAM_STR);
			$stmt->bindParam(':Nhom',$Nhom,PDO::PARAM_INT);
			$stmt->bindParam(':ThucHien',$ThucHien,PDO::PARAM_STR);
			$stmt->execute();
		}

		function updateThucHanh($MaLopHP,$Nhom,$ThucHien,$MaLop){
			$stmt = DB::getConnect()->prepare("UPDATE ctlophpth SET MaLopHP = :MaLopHP,Nhom = :Nhom,ThucHien = :ThucHien  WHERE MaLop = :MaLop");
			$stmt->bindParam(':MaLopHP',$MaLopHP,PDO::PARAM_STR);
			$stmt->bindParam(':Nhom',$Nhom,PDO::PARAM_INT);
			$stmt->bindParam(':ThucHien',$ThucHien,PDO::PARAM_STR);
			$stmt->bindParam(':MaLop', $MaLop,PDO::PARAM_INT);
			$stmt->execute();
		}
		
		function deleteThucHanh($MaLop){
			$stmt = DB::getConnect()->prepare("DELETE FROM ctlophpth WHERE  MaLop= :MaLop");
			$stmt->bindParam(":MaLop",$MaLop,PDO::PARAM_INT);
			$stmt->execute();
		}

		function deleteByLHP($lopHP){
			$stmt = DB::getConnect()->prepare("DELETE FROM ctlophpth WHERE MaLopHP = :MaLopHP");
			$stmt->bindParam(":MaLopHP",$lopHP,PDO::PARAM_INT);
			$stmt->execute();
		}
	} 
	// $a = new ThucHanh();
	// $an = $a->getThucHanh();
	// var_dump($an);
?>