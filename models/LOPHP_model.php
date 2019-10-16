<?php
require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class LopHP{
		private $MaLHP;
		private $MaHP;
		private $TenLopHP;
		private $SiSo;
		private $HocKy;
		private $NamHoc;

		function __construct(){
		}

		function getAll(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM lophp,hocphan,giangvien WHERE lophp.MaHP = hocphan.MaHP AND giangvien.MaGV = lophp.MaGV");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function getGDay(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM lophp,hocphan,giangvien WHERE lophp.MaHP = hocphan.MaHP AND giangvien.MaGV = lophp.MaGV");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function getTableGDay($MaGV){
			$stmt = DB::getConnect()->prepare("SELECT * FROM lophp,hocphan,giangvien WHERE lophp.MaHP = hocphan.MaHP AND giangvien.MaGV = lophp.MaGV AND giangvien.MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		
		function getDaynoSession(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM lophp,hocphan,giangvien WHERE lophp.MaHP = hocphan.MaHP AND giangvien.MaGV = lophp.MaLHP");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

			function getDay(){
			$stmt = DB::getConnect()->prepare("SELECT MaLHP FROM lophp");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		
		
		function getMaLHPByMaGV($id){
			$stmt = DB::getConnect()->prepare("SELECT MaLHP FROM lophp WHERE MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$id,PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		/**
		 * insert to table lophp 
		 * @param {maHP, tenlopHP, siso, hocky, namhoc}
		 * @return none
		 */
		function insertLopHP($MaLHP,$MaHP,$TenLopHP,$SiSo,$HocKy,$NamHoc,$MaGV,$ThucHienLT,$ThucHienTH){
			$stmt = DB::getConnect()->prepare("INSERT INTO lophp(MaLHP,MaHP,TenLopHP,SiSo,HocKy,NamHoc,MaGV,ThucHienLT,ThucHienTH) VALUES (:MaLHP,:MaHP,:TenLopHP,:SiSo,:HocKy,:NamHoc,:MaGV,:ThucHienLT,:ThucHienTH)");
			$stmt->bindParam(":MaLHP",$MaLHP,PDO::PARAM_STR);
			$stmt->bindParam(":MaHP",$MaHP,PDO::PARAM_STR);
			$stmt->bindParam(":TenLopHP",$TenLopHP,PDO::PARAM_STR);
			$stmt->bindParam(":SiSo",$SiSo,PDO::PARAM_INT);
			$stmt->bindParam(":HocKy",$HocKy,PDO::PARAM_INT);
			$stmt->bindParam(":NamHoc",$NamHoc,PDO::PARAM_STR);
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->bindParam(":ThucHienLT",$ThucHienLT,PDO::PARAM_STR);
			$stmt->bindParam(":ThucHienTH",$ThucHienTH,PDO::PARAM_STR);
			$stmt->execute();
		}
		// function getID(){
		// 	$stmt = DB::getConnect()->query("SELECT LAST_INSERT_ID()");
		// 	$lastId = $stmt->fetchColumn();
		// 	return $lastId;
		// }

		function updateKHDay($MaHP,$TenLopHP,$SiSo,$HocKy,$NamHoc,$ThucHienLT,$ThucHienTH,$MaGV,$MaLHP){
			$stmt = DB::getConnect()->prepare("UPDATE lophp SET MaHP = :MaHP,TenLopHP = :TenLopHP, SiSo = :SiSo, HocKy = :HocKy, NamHoc = :NamHoc,ThucHienLT = :ThucHienLT,ThucHienTH = :ThucHienTH WHERE MaGV = :MaGV AND MaLHP = :MaLHP");
			$stmt->bindParam(':MaHP',$MaHP, PDO::PARAM_STR);
			$stmt->bindParam(':TenLopHP',$TenLopHP, PDO::PARAM_STR);
			$stmt->bindParam(':SiSo',$SiSo, PDO::PARAM_INT);
			$stmt->bindParam(':HocKy',$HocKy, PDO::PARAM_INT);
			$stmt->bindParam(':NamHoc',$NamHoc, PDO::PARAM_STR);
			$stmt->bindParam(':ThucHienLT',$ThucHienLT,PDO::PARAM_STR);
			$stmt->bindParam(':ThucHienTH',$ThucHienTH,PDO::PARAM_STR);
			$stmt->bindParam(':MaGV', $MaGV, PDO::PARAM_STR);
			$stmt->bindParam(':MaLHP',$MaLHP,PDO::PARAM_STR);
			$stmt->execute();
		}
		
		// function deleteLopHP($MaLHP){
		// 	$stmt = DB::getConnect()->prepare("DELETE FROM ctkhgiangday WHERE EXISTS (SELECT * FROM lophp WHERE lophp.MaLHP = ctkhgiangday.MaLHP AND lophp.MaLHP = :MaLHP)");
		// 	$stmt->bindParam(":MaLHP",$MaLHP, PDO::PARAM_INT);
		// 	$stmt->execute();
		// }
		
		function deleteLopHP($MaLHP){
			$stmt = DB::getConnect()->prepare("DELETE FROM lophp WHERE MaLHP = :MaLHP");
			$stmt->bindParam(":MaLHP",$MaLHP, PDO::PARAM_STR);
			$stmt->execute();
		}

		function deleteByMaGV($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM lophp WHERE MaGV = :id");
			$stmt->bindParam(":id",$id, PDO::PARAM_STR);
			$stmt->execute();
		}
		// function deleteLopHP($MaLHP){
		// 	$stmt = DB::getConnect()->prepare("DELETE FROM lophp WHERE MaLHP = :MaLHP)");
		// 	$stmt->bindParam(":MaLHP",$MaLHP, PDO::PARAM_INT);
		// 	$stmt->execute();
		// }
// $MaLHP,$MaHP,$TenLopHP,$SiSo,$HocKy,$NamHoc,$MaGV,$ThucHienLT,$ThucHienTH
	}	
	// $a = new LopHP();
	// $a->updateKHDay('LTWEB','LTWEB-HTTT-2021',222,1,'2019-2020','N','N','CNTT0006','2019002');
?>