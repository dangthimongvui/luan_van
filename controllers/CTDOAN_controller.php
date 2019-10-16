<?php
	require("../models/CTKHHUONGDANDALV_model.php");
	$chitietDA = new CTKHHuongDanDALV();
	$chitietKHDA = $chitietDA->getchitietDA();
?>