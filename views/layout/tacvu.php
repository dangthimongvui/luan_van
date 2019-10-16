<!DOCTYPE html>
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

    require("../../controllers_ad/getDN.controller.php");
    require("../../controllers/KHOA_controller.php");
    require("../../controllers/LOP_controller.php");
    require("../../controllers_ad/nganh_controller.php");
    require("../../controllers/HOCPHAN_controller.php");
  ?>
<div class="tab" style="color: blue">
 <!--  <button class="tablinks" onclick="openCity(event, 'day')">Quản lý tài khoản |</button> -->
  <button class="tablinks" onclick="openCity(event, 'khoa')">Quản lý khoa | </button>
  <button class="tablinks" onclick="openCity(event, 'lop')">Quản lý lớp | </button>
  <button class="tablinks" onclick="openCity(event, 'nganh')">Quản lý ngành |</button>
  <button class="tablinks" onclick="openCity(event, 'hocphan')">Quản lý học phần</button>
</div>

<div id="day" class="tabcontent">
  <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/qly_cap_khoa/insert_taikhoan.php">THÊM MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
            <table class="col-md-12">
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Loại tài khoản</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($dangnhap as $value){
                echo "
                <tr>
                <form action='../../controllers_ad/XOATAIKHOAN_controller.php' method='POST'>
                  <input name='username' value=".$value['Username']." style='display:none;'/>
                  <td>".$value["Username"]."</td>
                  <td>".$value["Password"]."</td>
                  <td>".$value["LoaiTK"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updatetaikhoan.php?Username=".$value['Username']."'>Update</a></td>
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

<div id="khoa" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="col-sm-3">
      <button class="site-btn"><a href="../../views/qly_cap_khoa/insert_khoa.php">THÊM MỚI</a></button>
    </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          
           <table class="col-md-12">
            <tr>
              <th>Mã khoa</th>
              <th>Tên khoa</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($khoa as $row) {
              echo 
                "<tr>
                  <form action='../../controllers_ad/XOAKHOA_controller.php' method='POST'>
                  <input name='makhoa' value=".$row['MaKhoa']." style='display:none;'/>
                  <td>".$row["MaKhoa"]."</td>
                  <td>".$row["TenKhoa"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updatekhoa.php?MaKhoa=".$row['MaKhoa']."'>Update</a></td>
                  <td type='submit'><button>Xóa</button></td>
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

<div id="lop" class="tabcontent">
    <div class="newsletter-section spad">
      <div class="col-sm-3">
           <button class="site-btn"><a href=../../views/qly_cap_khoa/insertLop.php>THÊM MỚI</a></button>
         </div>
    <div class="container">
      <div class="row">
        <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th style="text-align: center">Mã lớp</th>
              <th>Mã ngành</th>
              <th>Tên lớp</th>
              <th>Sỉ số</th>
              <th>Niên khóa</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($lop as $row) {
              echo 
                "<tr>
                  <form  action='../../controllers_ad/XOALOP_controller.php' method='POST'>
                  <input name='malop' value=".$row['MaLop']." style='display:none;'/>
                  <td>".$row["MaLop"]."</td>
                  <td>".$row["MaNganh"]."</td>
                  <td>".$row["TenLop"]."</td>
                  <td>".$row["SiSo"]."</td>
                  <td>".$row["NienKhoa"]."</td>
                  <td><a href='../../views/qly_cap_khoa/updatelop.php?MaLop=".$row['MaLop']."'>Update</a></td>
                  <td type='submit'><button>Xóa</button></td>
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
</div>
<div id="nganh" class="tabcontent">
  <div class="newsletter-section spad">
      <div class="col-sm-3">
           <button class="site-btn"><a href=../../views/qly_cap_khoa/insert_nganh.php>THÊM MỚI</a></button>
         </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th>Mã ngành</th>
              <th>Tên khoa</th>
              <th>Tên ngành</th>
              <th></th>
              <th></th>
            </tr>
            <?php
            foreach ($nganh as $value) {
            echo "<tr>
              <form action='../../controllers_ad/XOANGANH_controller.php' method='POST'>
              <input name='manganh' value=".$row['MaNganh']." style='display:none;'/>
              <td>".$value["MaNganh"]."</td>
              <td>".$value["TenKhoa"]."</td>
              <td>".$value["TenNganh"]."</td>
              <td><a href='../../views/qly_cap_khoa/updatenganh.php'>Update</a></td>
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

<div id="hocphan" class="tabcontent">
  <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/qly_cap_khoa/insert_hocphan.php">THÊM MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th>Mã học phần</th>
              <th>Tên học phần</th>
              <th>Số tính chỉ lý thuyết</th>
              <th>Số tính chỉ thực hành</th>
              <th>Môn tiên quyết</th>

              <th></th>
              <th></th>
            </tr>
            <?php
            foreach ($hocphan as $value) {
            echo "<tr>
              <form action='../../controllers_ad/XOAHOCPHAN_controller.php' method='POST'>
              <input name='mahp' value=".$value['MaHP']." style='display:none;'/>
              <td>".$value["MaHP"]."</td>
              <td>".$value["TenHP"]."</td>
              <td>".$value["SoTCLT"]."</td>
              <td>".$value["SoTCTH"]."</td>
              <td>".$value["MonTQ"]."</td>
              <td><a href='../../views/qly_cap_khoa/updatehocphan.php'>Update</a></td>
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
