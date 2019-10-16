<?php
	require_once("C:/xampp/htdocs/luan_van_ver2/models/KHCONGTACGV_model.php");
	$congtac = new KHCongTacGV();
	$khcongtac = $congtac->getkhcongtacGV();
	foreach ($khcongtac as $value) {
		if(($value["ThucHienLT"] == "Y") && ($value["ThucHienTH"] == "Y")){
			$r = "Y";
		}
		else{
			$r = "N";
		}
		echo "<tr>
			<td>".$value["HoTen"]."</td>
			<td>".$value["Nam"]."</td>
			<td>".$value["GioChuan"]."</td>
			<td>".$value["ThucHienLT"]."</td>
			<td>".$value["ThucHienTH"]."</td>
			<td>".$r."</td>
		</tr>";
	}
	// var_dump($khcongtac);

?>