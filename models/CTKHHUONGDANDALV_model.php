<?php
	class CTKHHuongDanDALV{
		private $MaGV;
		private $MaDLV;
		private $Nam;
		private $ThucHien; 
	function __construct(){
	}
	function getchitietDA(){
		$stmt = DB::getConnect()->prepare("SELECT * FROM ctkhhuongdanDALV,doanlvan,giangvien WHERE ctkhhuongdanDALV.MaGV = giangvien.MaGV AND ctkhhuongdanDALV.MaDLV = doanlvan.MaDLV");
	}
}
?>