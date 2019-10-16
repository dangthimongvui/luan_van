<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class CTLOPHPLT{
		private $MaLop;
		private $MaLHP;
		private $Muc;
		private $ThucHien;
		function __construct(){
		}
		function getLopLT(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM ctlophplt2,lophp WHERE lophp.MaLHP = ctlophplt2.MaLopHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}	

		function updateLopLT($MaLopHP,$Day,$KTra_GKy,$Ra_de,$Thi,$ChamThi,$MaLop){
			$stmt = DB::getConnect()->prepare("UPDATE ctlophplt2 SET MaLopHP=:MaLopHP, Day=:Day, KTra_GKy=:KTra_GKy, Ra_de=:Ra_de, Thi= :Thi, ChamThi=:ChamThi WHERE MaLop=:MaLop");
			$stmt->bindParam(":MaLopHP",$MaLopHP,PDO::PARAM_STR);
			$stmt->bindParam(":Day",$Day,PDO::PARAM_STR);
			$stmt->bindParam(":KTra_GKy",$KTra_GKy,PDO::PARAM_STR);
			$stmt->bindParam(":Ra_de",$Ra_de,PDO::PARAM_STR);
			$stmt->bindParam(":Thi",$Thi,PDO::PARAM_STR);
			$stmt->bindParam(":ChamThi",$ChamThi,PDO::PARAM_STR);
			$stmt->bindParam(":MaLop",$MaLop,PDO::PARAM_STR);
			$stmt->execute();
		}

		function deleteByMaGV($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM khgiangday WHERE MaGV=:id");
			$stmt->bindParam(":id",$id,PDO::PARAM_STR);
			$stmt->execute();
		}
	} 
	// $a = new CTLOPHPLT();
	// $an = $a->updateLopLT();
?>