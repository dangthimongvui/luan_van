<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class KHGiangDay{
		private $MaGV;
		private $Nam;
		private $SoTietTH;
		function __construct(){
		}
		function getKHGDay(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM khgiangday");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}	

		function deleteByMaGV($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM khgiangday WHERE MaGV=:id");
			$stmt->bindParam(":id",$id,PDO::PARAM_STR);
			$stmt->execute();
		}
	} 
?>