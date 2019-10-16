<?php
require("C:/xampp/htdocs/luan_van/models/LOPHP_model.php"); 
$lhp = new LopHP();
$lophp = $lhp->getAllLOPHP();
foreach ($lophp as $value) {
	echo $value["MaLHP"];
}
?>