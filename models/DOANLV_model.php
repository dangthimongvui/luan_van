<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class DoAnLV{
		private $MaDLV;
		private $TenDLV;
		private $SVThucHien;
		private $Loai;
		private $TGianTH;
		private $QDTiet;
	 
	function __construct(){
	}

	function setMaDLV($MaDLV){
		$this->MaDLV = $MaDLV;
	}
	function getMaDLV(){
		return $this->MaDLV;
	}


	function setTenDLV($TenDLV){
		$this->TenDLV = $TenDLV;
	}
	function getTenDLV(){
		return $this->TenDLV;
	}


	function setSVThucHien($SVThucHien){
		$this->SVThucHien = $SVThucHien;
	}
	function getSVThucHien(){
		return $this->SVThucHien;
	}


	function setLoai($Loai){
		$this->Loai = $Loai;
	}
	function getLoai(){
		return $this->Loai;
	}

	function setTGianTH($TGianTH){
		$this->TGianTH = $TGianTH;
	}
	function getTGianTH(){
		return $this->TGianTH;
	}

	function setQDTiet($QDTiet){
		$this->QDTiet = $QDTiet;
	}
	function getQDTiet(){
		return $this->QDTiet;
	}

	function getDoAnLV(){
		$stmt = DB::getConnect()->prepare("SELECT * FROM doanlv" );
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	function insertDALV($MaDLV,$TenDLV,$MSSV,$Loai,$TGianTH,$QDTiet)
	{
		$stmt = DB::getConnect()->prepare("INSERT INTO doanlv(MaDLV,TenDLV,MSSV,Loai,TGianTH,QDTiet) VALUES (:MaDLV,:TenDLV,:MSSV,:Loai,:TGianTH,:QDTiet)");
		$stmt->bindParam(":MaDLV",$MaDLV,PDO::PARAM_STR);
		$stmt->bindParam(":TenDLV",$TenDLV,PDO::PARAM_STR);
		$stmt->bindParam(":MSSV",$MSSV,PDO::PARAM_STR);
		$stmt->bindParam(":Loai",$Loai,PDO::PARAM_STR);
		$stmt->bindParam(":TGianTH",$TGianTH,PDO::PARAM_STR);
		$stmt->bindParam(":QDTiet",$QDTiet,PDO::PARAM_INT);
		$stmt->execute();
	}
	function updateDALV($TenDLV,$MSSV,$Loai,$TGianTH,$QDTiet,$MaDLV){
		$stmt = DB::getConnect()->prepare("UPDATE doanlv SET TenDLV = :TenDLV, MSSV= :MSSV, Loai = :Loai,TGianTH = :TGianTH, QDTiet = :QDTiet WHERE MaDLV = :MaDLV");
		$stmt->bindParam(":TenDLV",$TenDLV,PDO::PARAM_STR);
		$stmt->bindParam(":MSSV",$MSSV,PDO::PARAM_STR);
		$stmt->bindParam(":Loai",$Loai,PDO::PARAM_STR);
		$stmt->bindParam(":TGianTH",$TGianTH,PDO::PARAM_STR);
		$stmt->bindParam(":QDTiet",$QDTiet,PDO::PARAM_INT);
		$stmt->bindParam(":MaDLV",$MaDLV,PDO::PARAM_STR);
		$stmt->execute();
	}
	function deleteDA($MaDLV){
		$stmt = DB::getConnect()->prepare("DELETE FROM doanlv WHERE MaDLV = :MaDLV");
		$stmt->bindParam(":MaDLV",$MaDLV,PDO::PARAM_STR);
		$stmt->execute();
	}
}
// $a = new DoAnLV();
// $an = $a->getDoAnLV();
// var_dump($an);
// foreach ($an as $value) {
// 	echo $value["MaDLV"];
	


?>
<!-- INSERT INTO doanlv(MaDT,TenDLV,SVThucHien,Loai,TGianTH,QDTiet,ThucHien) VALUES (1,'met ghe',SVThucHien='nguye thi a',Loai = 'do an 1',TGianTH = 'từ 2019-04-05 đến 2019-05-05','3h','no') -->