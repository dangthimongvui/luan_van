<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class ChucVu{
		private $MaCV;
		private $TenCV;
		private $TiLeMien;
		function __construct(){
		}
		function setMaCV($MaCV){
			$this->MaCV = $MaCV;
		}
		function getMaCV(){
			return $this->MaCV;
		}
		function setTenCV($TenCV){
			$this->TenCV = $TenCV;
		}
		function getTenCV(){
			return $this->TenCV;
		}
		function setTiLeMien($TiLeMien){
			$this->TiLeMien = $TiLeMien;
		}
		function getTiLeMien(){
			return $this->TiLeMien;
		}
		function getChucVu(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM chucvu");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	} 
?>