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
<div class="tab" style="color: blue">
  <button class="tablinks" onclick="openCity(event, 'day')">Phân công dạy</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Phân công coi thi</button>
  <button class="tablinks" onclick="openCity(event, 'chamthi')">Phân công chấm thi</button>
</div>

<div id="day" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="form-class" id="con_form">
          
          <!-- <div class="col-md-2">
            <h2>DẠY</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../../views/qly_cap_khoa/them_kh_gday.php">THÊM KẾ HOẠCH</a></button>
          </div> -->
          <div class="col-sm-3">
          <a class="site-btn"><a href="../../views/giang_vien/them_kh_gday.php">ĐĂNG KÍ MỚI</a></a>
        </div>
          <table class="col-md-12">
            <tr>
              <th>Tên giảng viên</th>
              <th>Tên lớp học phần</th>
              <th>Mã học phần</th>
              <th>Năm học</th>
              <th>Học Kì</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($ctnotsession as $row){
                echo "
                <tr>
                <form action='../../controllers/XOAKH_controller.php?' method='POST'>
                  <input type='text' name='id' value=".$row['id']." style='display:none'></input>
                  <input type='text' name='MaGV' value=".$row['MaGV']." style='display:none'></input>
                  <input type='text' name='MaLopHP' value=".$row['MaLHP']." style='display:none'></input>
                  <td>".$row["HoTen"]."</td>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["MaHP"]."</td>
                  <td name='NamHoc'>".$row["NamHoc"]."</td>
                  <td name='HocKy'>HK".$row["HocKy"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updateday.php?id=".$row['id']."'>Sửa</a></td>
                  <td><button type='submit'>Xóa</button></td>
                </form>
                </tr>";
              }
            ?>
          </table>  
        </div>
      </div>
    </div>
  </div>
</div>
       <!-- // <td>".$row["HoTen"]."</td> -->
<!-- // <td>".$row["SoTCTH"]."</td> -->
<div id="coithi" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
          <div class="col-md-3">
            <h2>COI THI</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../../views/qly_cap_khoa/them_kh_coi_thi.php">THÊM KH COI THI</a></button>
          </div>
          <table class="col-md-12">
            <tr>
              <th>Tên giảng viên</th>
              <th>Tên lớp học phần</th>
              <th>Thời gian</th>
              <th>Ca Thi</th>
              <th>Hệ số</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($ctnotsession as $row) {
              echo 
                "<tr>
                  <form action='../../controllers/XOAKH_controller.php' method='POST'>
                  <input name='id' value=".$row['id']." style='display:none;'></input>
                  <td>".$row["HoTen"]."</td>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["ThoiGian"]."</td>
                  <td>".$row["CaThi"]."</td>
                  <td>".$row["HeSo"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updatecoithi.php?id=" . $row['id'] . "'>Sửa</a></td>
                  <td type='submit'><button>Xóa</button></td>
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
          <div class="col-md-4">
            <h2>CHẤM THI</h2>
          </div>
          <div class="col-sm-3">
            <button class="site-btn"><a href="../../views/qly_cap_khoa/them_kh_cham_thi.php">THÊM HK CHẤM THI</a></button>
          </div>
          <table class="col-md-12">
            <tr>
              <th>Tên giảng viên</th>
              <th>Tên lớp học phần</th>
              <th>Số bài</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($chamthinotsession as $row) {
              echo 
                "<tr>
                  <form action='../../controllers/XOAKH_controller.php' method='POST'>
                  <input name='id' value=".$row['id']." style='display:none;'></input>
                  <input name='MaLHP' value=".$row['MaLHP']." style='display:none;'></input>
                  <td>".$row["HoTen"]."</td>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["SoBai"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updatechamthi.php?MaLHP=" . $row['MaLHP'] . "'>Sửa</a></td>
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
<script src="../../public/js/test.js"></script>
   
</body>
</html> 
