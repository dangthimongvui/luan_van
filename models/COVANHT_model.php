<?php
	require_once("C:/xampp/htdocs/luan_van/connection.php");
	class CoVanHocTap{
		private $MaLop;
		private $MaGV;
		function __construct(){
		}

		function setMaLop($MaLop){
			$this->MaLop = $MaLop;
		}		
		function getMaLop(){
			return $this->MaLop;
		}

		function setMaGV($MaGV){
			$this->MaGV = $MaGV;
		}
		function getMaGV(){
			return $this->MaGV;
		}

		function getCoVanHocTap(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM covanht,lop,giangvien WHERE lop.MaLop = covanht.MaLop AND giangvien.MaGV = covanht.MaGV");
			$stmt->execute();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $rows;
		}
	}
	
?>