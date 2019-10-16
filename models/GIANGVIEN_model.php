<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/connection.php");
	class GiangVien{
		private $MaGV;
		private $MaDV;
		private $MaCV;
		private $MaNgach;
		private $UserName;
		private $MaLHP;
		private $HoTen;
		private $GTinh;
		private $Email;
		private $DThoai;
		private $GioChuan;
		function __construct(){
		}
		function setMaGV($MaGV){
			$this->MaGV = $MaGV;
		}
		function getMaGV(){
			return $this->MaGV;
		}

		function setMaDV($MaDV){
			$this->MaDV = $MaDV;
		}
		function getMaDV(){
			return $this->MaDV;
		}

		function setMaCV($MaCV){
			$this->MaCV = $MaCV;
		}
		function getMaCV(){
			return $this->MaCV;
		}

		function setMaNgach($MaNgach){
			$this->MaNgach = $MaNgach;
		}
		function getMaNgach(){
			return $this->MaNgach;
		}

		function setUserName($UserName){
			$this->UserName = $UserName;
		}
		function getUserName(){
			return $this->UserName;
		}

			
		function setMaLHP($MaLHP){
			$this->MaLHP = $MaLHP;
		}
		function getMaLHP(){
			return $this->MaLHP;
		} 

		function setHoTen($HoTen){
			$this->HoTen = $HoTen;
		}
		function getHoTen(){
			return $this->HoTen;
		}
		function setGTinh($GTinh){
			$this->GTinh = $GTinh;
		}
		function getGTinh(){
			return $this->GTinh;
		}
		function setEmail($Email){
			$this->Email = $Email;
		}
		function getEmail(){
			return $this->Email;
		}
		function setDThoai($DThoai){
			$this->DThoai = $DThoai;
		}
		function getDThoai(){
			return $this->DThoai;
		}
		function setGioChuan($GioChuan){
			$this->GioChuan = $GioChuan;
		}
		function getGioChuan(){
			return $this->GioChuan;
		}

		// function test($Username){
		// 	$stmt = DB::getConnect()->prepare("SELECT MaGV, dangnhap.Username FROM giangvien, dangnhap WHERE giangvien.UserName = dangnhap.Username AND dangnhap.Username = :Username");
		// 	$stmt->bindParam(":Username",$Username, PDO::PARAM_STR);
		// 	$stmt->execute();
		// 	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// 	return $result;
		// }
		function getGV(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM giangvien,khoa,ngach,chucvu WHERE giangvien.MaCV = chucvu.MaCV AND giangvien.MaNG = ngach.MaNgach AND giangvien.MaKH = khoa.MaKhoa");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function getGiangVien($Username){
			$stmt = DB::getConnect()->prepare(
				"SELECT * FROM giangvien,khoa,ngach,chucvu WHERE giangvien.MaCV = chucvu.MaCV AND giangvien.MaNG = ngach.MaNgach AND giangvien.MaKH = khoa.MaKhoa AND Username = :Username");
			$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function getGVien($MaGV,$Username){
			$stmt = DB::getConnect()->prepare(
				"SELECT * FROM giangvien,khoa,ngach,chucvu,dangnhap WHERE giangvien.MaCV = chucvu.MaCV AND giangvien.MaNG = ngach.MaNgach AND giangvien.MaKH = khoa.MaKhoa AND dangnhap.Username = giangvien.Username AND giangvien.MaGV = :MaGV AND dangnhap.Username = :Username");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function insertGiangVien($MaGV,$MaKH,$MaCV,$MaNG,$Username,$HoTen,$GTinh,$Email,$DThoai,$GioChuan,$BacLuong){
			$stmt = DB::getConnect()->prepare("INSERT INTO giangvien(MaGV,MaKH,MaCV,MaNG,Username,HoTen,GTinh,Email,DThoai,GioChuan,BacLuong) VALUES (:MaGV,:MaKH,:MaCV,:MaNG,:Username,:HoTen,:GTinh,:Email,:DThoai,:GioChuan,:BacLuong)");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->bindParam(":MaKH",$MaKH,PDO::PARAM_INT);
			$stmt->bindParam(":MaCV",$MaCV,PDO::PARAM_INT);
			$stmt->bindParam(":MaNG",$MaNG,PDO::PARAM_STR);
			$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
			$stmt->bindParam(":HoTen",$HoTen,PDO::PARAM_STR);
			$stmt->bindParam(":GTinh",$GTinh,PDO::PARAM_STR);
			$stmt->bindParam(":Email",$Email,PDO::PARAM_STR);
			$stmt->bindParam(":DThoai",$DThoai,PDO::PARAM_STR);
			$stmt->bindParam(":GioChuan",$GioChuan,PDO::PARAM_INT);
			$stmt->bindParam(":BacLuong",$BacLuong,PDO::PARAM_STR);
			
			if ($stmt->execute()) {
				echo "insert successful";
			}
			else{
				echo "chua insert vao duoc";
			}
		}

		function updateGiangVien($MaKhoa,$MaCV,$MaNG,$HoTen,$GTinh,$Email,$DThoai,$MaGV,$Username){
			$stmt = DB::getConnect()->prepare("UPDATE giangvien SET MaKH = :MaKhoa,MaCV = :MaCV, MaNG = :MaNG,HoTen = :HoTen,Gtinh = :GTinh,Email = :Email,DThoai = :DThoai WHERE MaGV = :MaGV AND Username = :Username");
			$stmt->bindParam(":MaKhoa",$MaKhoa,PDO::PARAM_INT);
			$stmt->bindParam(":MaCV",$MaCV,PDO::PARAM_INT);
			$stmt->bindParam(":MaNG",$MaNG,PDO::PARAM_STR);
			$stmt->bindParam(":HoTen",$HoTen,PDO::PARAM_STR);
			$stmt->bindParam(":GTinh",$GTinh,PDO::PARAM_STR);
			$stmt->bindParam(":Email",$Email,PDO::PARAM_STR);
			$stmt->bindParam(":DThoai",$DThoai,PDO::PARAM_STR);
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->bindParam(":Username",$Username,PDO::PARAM_STR);
			$stmt->execute();
		}

		function allGV(){
			$stmt = DB::getConnect()->prepare("SELECT * FROM giangvien,donvi");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		function deleteGiangVien($MaGV){
			$stmt = DB::getConnect()->prepare("DELETE FROM giangvien WHERE MaGV = :MaGV");
			$stmt->bindParam(":MaGV",$MaGV,PDO::PARAM_STR);
			$stmt->execute();
		}
    }

 // $a = new GiangVien;
 // $a->deleteGiangVien("CNTT2703");
// $a->updateGiangVien(2,9,'15.109','James Morrison Trieu','Nam','jmorrison@gmail.com','0353234050','CNTT2703','01012006');
//  // // foreach ($giangvien as $value) {
 // // 	echo $value["MaGV"];
 // // }
 // var_dump($giangvien);
//ECHO "111";
?>