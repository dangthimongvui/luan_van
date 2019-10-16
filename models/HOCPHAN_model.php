<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class HocPhan{
		private $MaHP;
		private $TenHP;
		private $SoTCLT;
		private $SoTCTH;

		function __construct(){
		}

		function setMaHP($MaHP){
			$this->MaHP = $MaHP;
		}
		function getMaHP(){
			return $this->MaHP;
		}

		function setTenHP($TenHP){
			$this->TenHP = $TenHP;
		}
		function getTenHP(){
			return $this->TenHP;
		}

		function setSoTCLT($SoTCLT){
			$this->SoTCLT= $SoTCLT;
		}
		function getSoTCLT(){
			return $this->SoTCLT;
		}

		function setSoTCTH($SoTCTH){
			$this->SoTCTH = $SoTCTH;
		}
		function getSoTCTH(){
			return $this->SoTCTH;
		}

		function getAllDataByMaHP(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM hocphan");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		function deleteKHGDay($MaHP){
			$deleteGD = DB::getConnect()->prepare("DELETE FROM hocphan WHERE MaHP = :mahp");
			$deleteGD->bindParam(':mahp',$MaHP,PDO::PARAM_INT);
			$deleteGD->execute();
		}
		/**
		 * insert into hocphan table
		 * @param {}
		 * @return none
		 */
		function insertHocPhan($MaHP,$TenHP,$SoTCLT,$SoTCTH,$MonTQ){
			$stmt = DB::getConnect()->prepare("INSERT INTO hocphan(MaHP,TenHP,SoTCLT,SoTCTH,MonTQ) VALUES(:MaHP,:TenHP,:SoTCLT,:SoTCTH,:MonTQ)");
			$stmt->bindParam(":MaHP",$MaHP,PDO::PARAM_STR);
			$stmt->bindParam(":TenHP",$TenHP,PDO::PARAM_STR);
			$stmt->bindParam(":SoTCLT",$SoTCLT,PDO::PARAM_INT);
			$stmt->bindParam(":SoTCTH",$SoTCTH,PDO::PARAM_INT);
			$stmt->bindParam(":MonTQ",$MonTQ,PDO::PARAM_STR);
			$stmt->execute();
		}
		function updateHocPhan($TenHP,$SoTCLT,$SoTCTH,$MonTQ,$MaHP){
			$stmt = DB::getConnect()->prepare("UPDATE hocphan SET TenHP = :TenHP,SoTCLT = :SoTCLT,SoTCTH = :SoTCTH,MonTQ = :MonTQ WHERE MaHP = :MaHP");
			$stmt->bindParam(":TenHP",$TenHP,PDO::PARAM_STR);
			$stmt->bindParam(":SoTCLT",$SoTCLT,PDO::PARAM_INT);
			$stmt->bindParam(":SoTCTH",$SoTCTH,PDO::PARAM_INT);
			$stmt->bindParam(":MonTQ",$MonTQ,PDO::PARAM_STR);
			$stmt->bindParam(":MaHP",$MaHP,PDO::PARAM_STR);
			$stmt->execute();
		}
		function deleteHocPhan($MaHP){
			$stmt = DB::getConnect()->prepare("DELETE FROM hocphan WHERE MaHP = :MaHP");
			$stmt->bindParam(":MaHP",$MaHP,PDO::PARAM_STR);
			$stmt->execute();
		}
	}

	// $w = new HocPhan();
	// $anh = $w->getAllDataByMaHP();
	// var_dump($anh);
?>