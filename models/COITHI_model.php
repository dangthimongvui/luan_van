<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class CoiThi{
		private $id;
		private $MaGV;
		private $MaLopHP;
		private $ThoiGian;
		private $Buoi;
		private $HeSo;
		function __construct(){
		}

		function setMaGV($MaGV){
			$this->MaGV = $MaGV;
		}
		
		function getMaGV(){
			return $this->MaGV;
		}

		function setMaLopHP($MaLopHP){
			$this->MaLopHP = $MaLopHP;
		}
		function getMaLopHP(){
			return $this->MaLopLHP;
		}

		function setThoiGian($ThoiGian){
			$this->ThoiGian = $ThoiGian;
		}
		function getThoiGian(){
			return $this->ThoiGian;
		}

		function setBuoi($Buoi){
			$this->Buoi = $Buoi;
		}
		function getBuoi(){
			return $this->Buoi;
		}

		function setHeSo($HeSo){
			$this->HeSo = $HeSo;
		}
		function getHeSo(){
			return $this->HeSo;
		}

		function getCoiThi($MaGV){
			$stmt = DB::getConnect()->prepare("SELECT * FROM coithi,lophp WHERE coithi.MaLopHP = lophp.MaLHP AND coithi.MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function getcoithinotsession(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM coithi,giangvien,lophp WHERE coithi.MaGV = giangvien.MaGV AND coithi.MaLopHP = lophp.MaLHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function insertCoiThi($MaGV, $MaLopHP, $ThoiGian, $CaThi, $HeSo){
			$stmt = DB::getConnect()->prepare("INSERT INTO coithi(MaGV,MaLopHP,ThoiGian,CaThi,Heso) VALUES (:magv,:malhp,:thoigian,:cathi,:heso)");
			$stmt->bindParam(':magv', $MaGV,PDO::PARAM_STR);
			$stmt->bindParam(':malhp', $MaLopHP,PDO::PARAM_STR);
			$stmt->bindParam(':thoigian',$ThoiGian,PDO::PARAM_STR);
			$stmt->bindParam(':cathi', $CaThi,PDO::PARAM_STR);
			$stmt->bindParam(':heso', $HeSo,PDO::PARAM_STR);
			$stmt->execute();
		}
		
		function updateCoiThi($MaGV,$MaLopHP,$ThoiGian, $CaThi, $HeSo,$ID){
			$stmt = DB::getConnect()->prepare("UPDATE coithi SET MaGV = :MaGV,MaLopHP = :MaLopHP,ThoiGian = :ThoiGian,CaThi = :CaThi, HeSo = :HeSo WHERE ID = :ID");
			$stmt->bindParam(':MaGV', $MaGV,PDO::PARAM_STR);
			$stmt->bindParam(':MaLopHP', $MaLopHP,PDO::PARAM_STR); 
			$stmt->bindParam(':ThoiGian',$ThoiGian,PDO::PARAM_STR);
			$stmt->bindParam(':CaThi', $CaThi,PDO::PARAM_STR);
			$stmt->bindParam(':HeSo', $HeSo,PDO::PARAM_STR);
			$stmt->bindParam(':ID', $ID,PDO::PARAM_INT); 
			$stmt->execute();
		}
		function deletecoithi($ID){
			$stmt = DB::getConnect()->prepare("DELETE FROM coithi WHERE ID = :ID");
			$stmt->bindParam(":ID",$ID,PDO::PARAM_INT);
			$stmt->execute();
		}

		function deletecoithiByMaGV($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM coithi WHERE MaGV=:id");
			$stmt->bindParam(":id",$id,PDO::PARAM_STR);
			$stmt->execute();
		}
	}	
	// $a = new CoiThi();
	// $an = $a->getCoiThi("1");
	// var_dump($an);
?>