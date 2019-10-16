<?php
	require_once("C:/xampp/htdocs/luan_van/connection.php");
	class ChamThi{
		private $id;
		private $MaGV;
		private $MaLHP;
		private $SoBai;
		function __construct(){
		}

		function setMaGV($MaGV){
			$this->MaGV = $MaGV;
		}
		function getMaGV(){
			return $this->MaGV;
		}

		function setMaLHP($MaLHP){
			$this->MaLHP = $MaLHP;
		}
		function getMaLHP(){
			return $this->MaLHP;
		}

		function setSoBai($SoBai){
			$this->SoBai = $SoBai;
		}
		function getSoBai(){
			return $this->SoBai;
		}

		function getChamThi($MaGV){
			$stmt = DB::getConnect()->prepare("SELECT * FROM chamthi, giangvien, lophp WHERE chamthi.MaGV = giangvien.MaGV AND chamthi.MaLopHP = lophp.MaLHP AND giangvien.MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function getchamthinotsession(){
			$stmt =  DB::getConnect()->prepare("SELECT * FROM chamthi,giangvien,lophp WHERE giangvien.MaGV = chamthi.MaGV AND chamthi.MaLopHP = lophp.MaLHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function insertChamThi($MaGV, $MaLopHP, $SoBai){
			$stmt = DB::getConnect()->prepare("INSERT INTO chamthi(MaGV,MaLopHP,SoBai) VALUES (:magv,:malhp,:sobai)");
			$stmt->bindParam(':magv', $MaGV,PDO::PARAM_STR);
			$stmt->bindParam(':malhp', $MaLopHP,PDO::PARAM_STR);
			$stmt->bindParam(':sobai', $SoBai,PDO::PARAM_STR);
			$stmt->execute();
		}
		function updateChamThi($MaGV, $MaLopHP, $SoBai,$id){
			$stmt = DB::getConnect()->prepare("UPDATE chamthi SET MaGV = :MaGV,MaLopHP = :MaLopHP,SoBai = :SoBai  WHERE id = :id");
			$stmt->bindParam(':MaGV', $MaGV,PDO::PARAM_INT);
			$stmt->bindParam(':MaLopHP', $MaLopHP,PDO::PARAM_INT);
			$stmt->bindParam(':SoBai', $SoBai,PDO::PARAM_INT);
			$stmt->bindParam(':id', $id,PDO::PARAM_INT);
			$stmt->execute();
		}
		function deleteChamThi($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM chamthi WHERE id = :id");
			$stmt->bindParam(":id",$id,PDO::PARAM_INT);
			$stmt->execute();
		}
	} 
?>