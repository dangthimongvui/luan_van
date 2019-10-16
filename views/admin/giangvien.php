<?php
	require("../layout/header.php") 
?>
<?php  
	require_once("../../controllers/GIANGVIEN_controller.php");
?>
	<!-- Page Preloder -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>ĐĂNG KÍ KẾ HOẠCH</h2>
				<div class="page-links">
					<a href="../qly_cap_khoa/home.php">TRANG CHỦ</a>
					<span>ĐĂNG KÍ KẾ HOẠCH</span>
				</div>
			</div>
		</div>
	</div>
	 <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/admin/insertgv.php">THÊM MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
            <table class="col-md-12">
            <tr>
              <th>Tên giảng viên</th>
              <th>Username</th>
              <th>Email</th>
              <th>Điện thoại</th>
              <th>Giới tính</th>
              <th>Khoa</th>
              <th>Chức vụ</th>
              <th>Ngạch</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($allgv as $row){
                echo "
                <tr>
                <form action='../../controllers_admin/XOAGIANGVIEN.php' method='POST'>
                  <input type='text' name='MaGV' value=".$row['MaGV']." style='display:none'></input>
                  <td>".$row["HoTen"]."</td>
                  <td>".$row["Username"]."</td>
                  <td>".$row["Email"]."</td>
                  <td>".$row["DThoai"]."</td>
                  <td>".$row["Gtinh"]."</td>
                  <td>".$row["TenKhoa"]."</td>
                  <td>".$row["TenCV"]."</td>
                  <td>".$row["TenNgach"]."</td>
                  <td><a href='../../views/admin/updategv.php?MaGV=".$row['MaGV']."&Username=".$row["Username"]."'>Update</a></td>
                  <td><button type='submit'>Xóa</button></td>
                </form>
                </tr>";
              }
            ?>
          </table>  
        </form>
      </div>  
    </div>
  </div>
  </div>
	<div class="registration spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    <div class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-12" style="text-align: center;">
								<img src="../../public/img/ctuet_bgr.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<?php
		include("../layout/footer.php"); 
	?>