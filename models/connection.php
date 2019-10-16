<?php
	class DB {
		function getConnect() {
			try{
				$dbh = new PDO('mysql:host=localhost;dbname=luanvan;charset=utf8',  'root', '');
				if ($dbh){
			// echo "Connected successfully!";
			return $dbh;
				}
			}catch (PDOException $e){
				print "Error!: " .$e->getMessage();
				die();
			}
		}
	}	
		// $test = new DB;
		// $test->getConnect();	
?>
