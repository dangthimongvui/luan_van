<?php

	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class CTKHGiangDay{
		private $id;
		private $MaGV;
		private $MaLHP;
		private $Nam;
		private $HocKy;
		private $ThucHien;
		private $SoTiet;

		function __construct(){
		}
		
		// function getCTKH($MaGV){
		// 	$stmt = DB::getConnect()->prepare("SELECT * FROM ctkhgiangday,lophp,giangvien WHERE ctkhgiangday.MaLHP = lophp.MaLHP AND ctkhgiangday.MaGV = giangvien.MaGV AND giangvien.MaGV = :MaGV");
		// 	$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
		// 	$stmt->execute();
		// 	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// 	return $row;
		// }
		function deleteChiTietKHDay($id){
			$stmt = DB::getConnect()->prepare("DELETE FROM ctkhgiangday WHERE id = :id");
			$stmt->bindParam(":id",$id,PDO::PARAM_INT);
			$stmt->execute();
		}

		function getctkhgiangday($MaGV){
			$stmt=  DB::getConnect()->prepare("SELECT * FROM ctkhgiangday,lophp,giangvien WHERE ctkhgiangday.MaLopHP = lophp.MaLHP AND giangvien.MaGV = ctkhgiangday.MaGV AND giangvien.MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
			function getday(){
			$stmt=  DB::getConnect()->prepare("SELECT * FROM ctkhgiangday");
			
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function insertctkhGV($MaGV,$MaLHP,$NamHoc,$HocKy,$ThucHien){
			$stmt = DB::getConnect()->prepare("INSERT INTO ctkhgiangday(MaGV,MaLHP,NamHoc,HocKy,ThucHien) VALUES (:MaGV,:MaLHP,:NamHoc,:HocKy,:ThucHien)");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
			$stmt->bindParam(":MaLHP",$MaLHP,PDO::PARAM_INT);
			$stmt->bindParam(":NamHoc",$NamHoc,PDO::PARAM_STR);
			$stmt->bindParam(":HocKy",$HocKy,PDO::PARAM_INT);
			$stmt->bindParam(":ThucHien",$ThucHien,PDO::PARAM_STR);
			$stmt->execute();
		}

		function updateCTKH($MaGV,$MaLHP,$NamHoc,$HocKy,$id){
			$stmt = DB::getConnect()->prepare("UPDATE ctkhgiangday SET MaGV = :MaGV, MaLHP = :MaLHP, NamHoc = :NamHoc, HocKy = :HocKy WHERE id = :id");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_INT);
			$stmt->bindParam(":MaLHP",$MaLHP,PDO::PARAM_INT);
			$stmt->bindParam(":NamHoc",$NamHoc,PDO::PARAM_STR);
			$stmt->bindParam(":HocKy",$HocKy,PDO::PARAM_INT);
			$stmt->bindParam(":id",$id,PDO::PARAM_INT);
			$stmt->execute();
		}
		// function getID(){
		// 	$stmt = DB::
		// }
		// hocphan(tenhp,sotclt,sotcth)
		// lophp(tenlhp)
		// SELECT TenLHP,TenHP,SoTCLT,SoTCTH FROM lophp,hocphan,ctkhgiangday WHERE lophp.MaHP = hocphan.MaHP AND lophp.MaLHP = ctkhgiangday.MaLHP AND MaGV = :MaGV (nhưng nó lại cos session giảng viên từ bàng ct)

		// function insertKHGDay($MaGV,$MaLopHP, $Nam, $HocKy, $ThucHien,$SoTiet){
		// 	$insertGD = DB::getConnect()->prepare("INSERT INTO ctkhgiangday(MaGV,MaLopHP,Nam,HocKy,ThucHien,SoTiet) VALUES (:MaGV,:MaLopHP,:Nam,:HocKy,:ThucHien,:SoTiet)");
		// 	$insertGD->bindParam(':MaGV', $MaGV, PDO::PARAM_INT);
		// 	$insertGD->bindParam(':MaLopHP', $MaLopHP, PDO::PARAM_STR);
		// 	$insertGD->bindParam(':Nam', $Nam, PDO::PARAM_INT);
		// 	$insertGD->bindParam(':HocKy', $HocKy, PDO::PARAM_INT);
		// 	$insertGD->bindParam(':ThucHien', $ThucHien, PDO::PARAM_STR);
		// 	$insertGD->bindParam(':SoTiet', $SoTiet, PDO::PARAM_INT);
		// 	$insertGD->execute();
		// }
		
	}
	// $anh = new CTKHGiangDay();
	// $chitiet = $anh->deleteChiTietKHDay("2");
	
	

?>