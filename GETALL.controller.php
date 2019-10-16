<?php
require_once("C:/xampp/htdocs/luan_van_ver2/models/LOPHP_model.php"); 
$lhp = new LopHP();
$alllophp = $lhp->getAll();
$daynotsession = $lhp->getDaynoSession();
?>