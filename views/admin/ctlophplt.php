<?php 
  include("../layout/header_admin.php");
?>
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
      <div class="page-info">
        <h2>CẬP NHẬT THỰC HIỆN LÝ THUYẾT</h2>
        <div class="page-links">
          <a href="../qly_cap_khoa/home.php">TRANG CHỦ</a>
          <span>CẬP NHẬT THỰC HIỆN LÝ THUYẾT</span>
        </div>
      </div>
    </div>
  </div>
<?php
  require_once("../../controllers/CTLOPHPLT_controller.php"); 
?>
 <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
          <table class="col-md-12">
            <tr>
              <th>Mã lớp</th>
              <th>Dạy</th>
              <th>Kiễm tra giữa kì</th>
              <th>Ra đề</th>
              <th>Thi</th>
              <th>Chấm thi</th>
              <th></th>
            </tr>
             <?php 
                    foreach ($lophplt  as $value) {
          echo 
           "<tr>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["Day"]."</td>
              <td>".$value["KTra_GKy"]."</td>
              <td>".$value["Ra_de"]."</td>
              <td>".$value["Thi"]."</td>
              <td>".$value["ChamThi"]."</td>
              <td><a href='../../views/qly_cap_khoa/updateLT.php?MaLop=".$value["MaLop"]."&MaLHP=".$value["MaLopHP"]."'>Update</a></td>
            </tr>";
            }
            ?>
        </form>
        <u>Ghi chú:</u> <b>Y</b> là trạng thái đã thực hiện<br/>
        <b>N</b> là trạng thái chưa thực hiện
      </div>  
    </div>
  </div>
  