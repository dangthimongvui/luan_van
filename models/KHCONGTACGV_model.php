<?php 
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class KHCongTacGV{
		private $MaGV;
		private $Nam;
		private $QDTiet;
		private $ThucHien;
		function __construct(){
		}
		function getkhcongtacGV(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM khcongtacgv,giangvien,lophp WHERE giangvien.MaGV = khcongtacgv.MaGV AND khcongtacgv.MaLHP = lophp.MaLHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		// function getThucHien($MaGV){
		// 	$stmt = DB::getConnect()->prepare("SELECT ThucHienLT,ThucHienTH FROM lophp WHERE MaGV=:MaGV");
		// 	$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
		// 	$stmt->execute();
		// 	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// 	return $result;
		// }

	} 
	// $a = new KHCongTacGV();
	// $an = $a->getThucHien("CNTT0001");
	// var_dump($an);

?>