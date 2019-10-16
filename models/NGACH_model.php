<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class Ngach{
		private $MaNgach;
		private $TenNgach;
		private $GioGD;
		private $GioKH;
		function __construct(){
		}
		function getNgach(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM ngach");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	} 
?>