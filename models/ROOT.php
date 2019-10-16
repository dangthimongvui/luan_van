<?php  
	require("C:/xampp/htdocs/luan_van/connection.php");
	class GETCOLUMN{
		private $ID;
		function getID(){
		}

	function getColumn($id, $table, $column){
			$stmt = DB::getConnect()->prepare("SELECT $column FROM $table WHERE ID=$ID");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

	}
?>	