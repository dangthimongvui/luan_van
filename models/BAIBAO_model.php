<?php
	require_once("C:/xampp/htdocs/luan_van/connection.php");
	class BaiBao{
		private $MaBB;
		private $TenBB;
		private $TenTChi;
		private $TGianTH;
		private $QDTiet;
		function __construct(){
		}
 		
		function setMaBB($MaBB){
			$this->MaBB = $MaBB;
		}
		function getMaBB(){
			return $this->MaBB;
		}
		function setTenBB($TenBB){
			$this->TenBB = $TenBB;
		}
		function getTenBB(){
			return $this->TenBB;
		}
		function setTenTChi($TenTChi){
			$this->TenTChi = $TenTChi;
		}
		function getTenTChi(){
			return $this->TenTChi;
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
		function getBaiBao(){
			$bb = DB::getConnect()->prepare("SELECT MaBB, TenBB, TenTChi, TGianTH FROM baibao");
			$bb->execute();
			$rows = $bb->fetchAll(PDO::FETCH_ASSOC);
			return $rows;
		}
	}
?>