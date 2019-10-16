<?php
// session_start();
require_once("C:/xampp/htdocs/luan_van_ver2/models/LOPHP_model.php"); 
$lhp = new LopHP();
// $lophp = $lhp->getTableGDay($_GET["MaGV"]);
// $alllophp = $lhp->getAll();
$getday = $lhp->getDay();
// var_dump($getday);
?>