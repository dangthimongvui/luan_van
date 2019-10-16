<!DOCTYPE html>
<html>
<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../public/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../../public/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../../public/css/flaticon.css"/>
  <link rel="stylesheet" href="../../public/css/owl.carousel.css"/>
  <link rel="stylesheet" href="../../public/css/style.css"/>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<body>
<?php
    // require("../../controllers/LOPHP_controller.php");
    // require("../../controllers/COITHI_controller.php");
    // require("../../controllers/CHAMTHI_controller.php");
  ?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'day')">Đăng kí dạy</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Đăng kí coi thi</button>
  <button class="tablinks" onclick="openCity(event, 'chamthi')">Đăng kí đồ án,tiểu luận,luận văn</button>
</div>

<div id="day" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="form-class" id="con_form">
          
          <div class="col-md-2">
            <h2>DẠY</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../../views/giang_vien/them_kh_gday.php">ĐĂNG KÍ</a></button>
          </div>
          <table class="col-md-12">
            <tr>
              <th>Tên lớp học phần</th>
              <th>Tên học phần</th>
              <th>Tính chỉ Lý thuyết</th>
              <th>Tính chỉ thực hành</th>
              <th></th>
            </tr>
            <?php
              // echo $_SESSION["MaGV"];
              foreach ($lophp as $row){
                echo "
                <tr>
                <form>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["TenHP"]."</td>
                  <td>".$row["SoTCLT"]."</td>
                  <td>".$row["SoTCTH"]."</td>
                  <td><a href='../../views/giang_vien/updateday.php?MaLHP=".$row['MaLHP']."'>Sửa</a></td>
                </form>
                </tr>";
              }
            ?>
          </table>
           <!-- // <input type='text' name='MaLHP' value=".$row['MaDLV']." style='display:none'></input>   -->
        </div>
      </div>
    </div>
  </div>
</div>

<div id="coithi" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
          <div class="col-md-3">
            <h2>COI THI</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../../views/giang_vien/them_kh_coi_thi.php">ĐĂNG KÍ</a></button>
          </div>
          <table class="col-md-12">
            <tr>
              <th>Tên lớp học phần</th>
              <th>Thời gian</th>
              <th>Ca thi</th>
              <th>Hệ số</th>
              <th></th>
            </tr>
            <?php
              foreach ($coithi as $row) {
              echo 
                "<tr>
                  <form>
                  <input name='id' value=".$row['id']." style='display:none;'></input>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["ThoiGian"]."</td>
                  <td>".$row["CaThi"]."</td>
                  <td>".$row["HeSo"]."</td>
                  <td><a href='../../views/giang_vien/updatecoithi.php?MaLHP=".$row['MaLHP']."'>Sửa</a></td>
                  </form>
                </tr>";
              }
            ?>
          </table>  
      </div>
    </div>
  </div>
</div>

<div id="chamthi" class="tabcontent">
    <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <form class="form-class" id="con_form">
          <div class="col-md-6">
            <h2>ĐĂNG KÍ HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../giang_vien/them_dalv.php">ĐĂNG KÍ MỚI</a></button>
          </div>
          <div class="col-sm-3">
           <button class="site-btn"><a href="../giang_vien/them_dalv_spi.php">ĐĂNG KÍ ĐỀ TÀI CÓ SẲN</a></button>
         </div>
          <table class="col-md-12">
            <tr>
              <th style="text-align: center">Tên đề tài</th>
              <th>Loại đề tài</th>
              <th>Thời gian thực hiện</th>
              <th>Sinh viên thực hiện</th>
              <th>Qui đổi tiết (giờ)</th>
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($doan as $row) {
              echo 
                "<tr>
                  <form>
                  <input name='id' value=".$row['MaDLV']." style='display:none;'></input>
                  <td>".$row["TenDT"]."</td>
                  <td>".$row["Loai"]."</td>
                  <td>".$row["TGianTH"]."</td>
                  <td>".$row["SVThucHien"]."</td>
                  <td>".$row["QDTiet"]."</td>
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
<script src="../../public/js/test.js"></script>
   
</body>
</html> 
