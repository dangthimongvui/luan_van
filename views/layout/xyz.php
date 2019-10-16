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




  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
    require("../../controllers/LOPHP_controller.php");
    require("../../controllers/COITHI_controller.php");
    require("../../controllers/CHAMTHI_controller.php");
  ?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'day')">Xem lịch dạy</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Xem lịch coi thi</button>
  <button class="tablinks" onclick="openCity(event, 'chamthi')">Xem lịch chấm thi</button>
</div>

<div id="day" class="tabcontent">
 <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div>
          <table class="col-md-12">
            <tr>
              <th>Mã lớp học phần</th>
              <th>Tên học phần</th>
              <th>Tên lớp học phần </th>
              <th>Sỉ số </th>
              <th>Giờ lý thuyết </th>
              <th>Giớ thực hành</th>
            </tr>
            <?php
            foreach ($lophp as $value) {
            echo "<tr>
              <td>".$value["MaLHP"]."</td>
              <td name='ten_mon'>".$value["TenHP"]."</td>
              <td name='ten_lop'>".$value["TenLopHP"]."</td>
              <td name='si_so_lop'>".$value["SiSo"]."</td>
              <td name='so_LT'>".$value["SoTCLT"]."</td>
              <td name='so_gio_TH'>".$value["SoTCTH"]."</td>
            </tr>";
                }
            ?>
          </table>
        </div>
      </div>  
    </div>
</div>

<div id="coithi" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div>
          <table class="col-md-12">
            <tr>
              <th>Mã lớp học phần </th>
              <th>Tên học phần</th>
              <th>Thời gian</th>
              <th>Buổi</th>
              <th>Hệ số</th>
            </tr>
            <?php
            foreach ($coithi as $row) {
            echo 
              "<tr>
                <td>".$row["MaLHP"]."</td>
                <td name='tenlophp'>".$row["TenLopHP"]."</td>
                <td name='thoi_gian'>".$row["ThoiGian"]."</td>
                <td name='buoi'>".$row["Buoi"]."</td>
                <td name='he_so'>".$row["HeSo"]."</td>
            
                </tr>";
              }
            ?>
          </table>
        </div>
      </div>   
    </div>
  </div>
</div>

<div id="chamthi" class="tabcontent">
    <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div>
          <table class="col-md-12">
            <tr>
              <th>Mã lớp học phần</th>
              <th>Tên học phần</th>
              <th>Số bài</th>
            </tr>
            <?php
            foreach ($chamthi as $row) {
            echo 
              "<tr>
                <td>".$row["MaLHP"]."</td>
                <td name='tenlophp'>".$row["TenLopHP"]."</td>
                <td name='sobai'>".$row["SoBai"]."</td>
            
                </tr>";
              }
            ?>
          </table>
        </div>
      </div>  
    </div>
  </div>
</div>
<script src="../../public/js/test.js"></script>
   
</body>
</html> 
