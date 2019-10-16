<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class DeTai{
		private $MaDT;
		private $TenDT;
		private $Cap;
		private $QDTiet;
		private $TGianTH;
	
	function __construct(){
	}

	function setMaDT($MaDT){
		$this->MaDT = $MaDT;
	}
	function getMaDT(){
		return $this->MaDT;
	}

	function setTenDT($TenDT){
		$this->TenDT= $TeDT;
	}
	function getTenDT(){
		return $this->TenDT;
	}

	function setCap($Cap){
		$this->Cap = $Cap;
	}
	function getCap(){
		return $this->Cap;
	}

	function setQDTiet($QDTiet){
		$this->QDTiet = $QDTiet;
	}
	function getQDTiet(){
		return $this->QDTiet;
	}

	function setTGianTH($TGianTH){
		$this->TGianTH = $TGianTH;
	}
	function getTGianTH(){
		return $this->TGianTH;
	}

	function getDeTai(){
		$dt = DB::getConnect()->prepare("SELECT * FROM detai");
		$dt->execute();
		$rows = $dt->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	function insertDeTai($TenDT,$Cap,$QDTiet,$TGianTH){
		$dt = DB::getConnect()->prepare("INSERT INTO detai(TenDT,Cap,QDTiet,TGianTH) values (:TenDT,:Cap,:QDTiet,:TGianTH)");
		$dt->bindParam(":TenDT",$TenDT,PDO::PARAM_STR);
		$dt->bindParam(":Cap",$Cap,PDO::PARAM_STR);
		$dt->bindParam(":QDTiet",$QDTiet,PDO::PARAM_INT);
		$dt->bindParam(":TGianTH",$TGianTH,PDO::PARAM_STR);
		$dt->execute();
	}
	function updateDeTai($TenDT,$Cap,$QDTiet,$TGianTH,$MaDT){
		$dt = DB::getConnect()->prepare("UPDATE detai SET TenDT = :TenDT,Cap = :Cap,QDTiet = :QDTiet,TGianTH = :TGianTH WHERE MaDT = :MaDT");
		$dt->bindParam(":TenDT",$TenDT,PDO::PARAM_STR);
		$dt->bindParam(":Cap",$Cap,PDO::PARAM_STR);
		$dt->bindParam(":QDTiet",$QDTiet,PDO::PARAM_INT);
		$dt->bindParam(":TGianTH",$TGianTH,PDO::PARAM_STR);
		$dt->bindParam(":MaDT",$MaDT,PDO::PARAM_STR);
		$dt->execute();
	}
	function deteteDeTai($MaDT){
		$stmt = DB::getConnect()->prepare("DELETE FROM detai WHERE MaDT = :MaDT");
		$stmt->bindParam(":MaDT",$MaDT,PDO::PARAM_INT);
		$stmt->execute();
	}
}
	// $themDT = new DeTai();
	// $themDT->insertDeTai("aaaaaa","_",3,"Từ 2020-01-01 đến 2020-05-01");
?>