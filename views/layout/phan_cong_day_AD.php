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

    // require("../../controllers/LOPHP_controller.php");
    // require("../../controllers/COITHI_controller.php");
    // require("../../controllers/CHAMTHI_controller.php");
    // require("../../controllers/GIANGVIEN_controller.php");
  ?>
<div class="tab" style="color: blue">
  <button class="tablinks" onclick="openCity(event, 'day')">Phân công dạy |</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Phân công coi thi | </button>
  <button class="tablinks" onclick="openCity(event, 'doan')">Phân công hướng dẩn đồ án, tiểu luận, luận văn  </button>
 <!--  <button class="tablinks" onclick="openCity(event, 'thuchanh')">Phân công nhóm thực hành</button> -->
</div>

<div id="day" class="tabcontent">
  <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/admin/them_kh_gday.php">THÊM KẾ HOẠCH MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
            <table class="col-md-12">
            <tr>
              <th>Tên giảng viên</th>
              <th>Tên lớp học phần</th>
              <th>Mã học phần</th>
              <th>Số tính chỉ lý thuyết</th>
              <th>Số tính thực hành</th>
              <th>Thực hiện lý thuyết</th>
              <th>Thực hiện thực hành</th>
              <th>Năm học</th>
              <th>Học Kì</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              foreach ($alllophp as $value){
                echo "
                <tr>
                <form action='../../controllers_admin/XOADAY.php' method='POST'>
                  <input type='text' name='MaGV' value=".$value['MaGV']." style='display:none'></input>
                  <input type='text' name='MaLopHP' value=".$value['MaLHP']." style='display:none'></input>
                   <td>".$value["HoTen"]."</td>
                  <td>".$value["TenLopHP"]."</td>
                  <td>".$value["SiSo"]."</td>
                  <td>".$value["SoTCLT"]."</td>
                  <td>".$value["SoTCTH"]."</td>
                  <td>".$value["ThucHienLT"]."</td>
                  <td>".$value["ThucHienLT"]."</td>
                  <td name='NamHoc'>".$value["NamHoc"]."</td>
                  <td name='HocKy'>HK".$value["HocKy"]."</td>
                  <td><a href='../../views/admin/updateday.php?MaLHP=".$value['MaLHP']."'>Update</a></td>
                  <td><button type='submit'>Xóa</button></td>
                </form>
                </tr>";
              }
            ?>
          </table>  
           <i>Ghi chú: </i><b>Y</b> là đã trạng thái đã thực hiện - 
           <b>N</b> là trạng thái chưa thực hiện
        </form>
      </div>  
    </div>
  </div>
</div>

<div id="coithi" class="tabcontent">
  <div class="newsletter-section spad">
    <div class="col-sm-3">
      <button class="site-btn"><a href="../../views/admin/them_kh_coi_thi.php">THÊM KẾ HOẠCH MỚI</a></button>
    </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          
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
              foreach ($coithinotsession as $row) {
              echo 
                "<tr>
                  <form action='../../controllers_admin/XOACOITHI.php' method='POST'>
                  <input name='ID' value=".$row['ID']." style='display:none;'></input>
                  <td>".$row["HoTen"]."</td>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["ThoiGian"]."</td>
                  <td>".$row["CaThi"]."</td>
                  <td>".$row["HeSo"]."</td>
                  <td><a href='../../views/admin/updatecoithi.php?id=" . $row['ID'] . "'>Update</a></td>
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

<div id="doan" class="tabcontent">
    <div class="newsletter-section spad">
      <div class="col-sm-3">
           <button class="site-btn"><a href=../admin/them_detai.php>ĐĂNG KÍ ĐỀ TÀI</a></button>
         </div>
    <div class="container">
      <div class="row">
        <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th style="text-align: center">Tên đề tài</th>
              <th>Cấp</th>
              <th>Qui đổi tiết (giờ)</th>
              <th>Thời gian thực hiện</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($detai as $row) {
              echo 
                "<tr>
                  <form action='../../controllers_admin/XOADETAI.php' method='POST'>
                  <input name='MaDT' value=".$row['MaDT']." style='display:none;'></input>
                  <td>".$row["TenDT"]."</td>
                  <td>".$row["Cap"]."</td>
                  <td>".$row["QDTiet"]."</td>
                  <td>".$row["TGianTH"]."</td>
                  <td><a href='../../views/admin/updateDeTai.php?MaDT=".$row['MaDT']."'>Update</a></td>
                  <td type='submit'><button>Xóa</button></td>
                  </form>
                </tr>";
              }
            ?>
          </table>
        </form>
      </div>
    </div>

    <div class="newsletter-section spad">
      <div class="col-sm-3">
           <button class="site-btn"><a href="../admin/them_dalv_spi.php">ĐĂNG KÍ HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</a></button>
         </div>
    <div class="container">
      <div class="row">
        <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th style="text-align: center">Tên đề tài</th>
              <th>Loại đề tài</th>
              <th>Thời gian thực hiện</th>
              <th>Sinh viên thực hiện</th>
              <th>Qui đổi tiết (giờ)</th>
              <th></th>
              <th></th>
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($doan as $row) {
              echo 
                "<tr>
                  <form action='../../controllers_admin/XOADOAN.php' method='POST'>
                  <input name='MaDLV' value=".$row['MaDLV']." style='display:none;'></input>
                  <td>".$row["TenDLV"]."</td>
                  <td>".$row["Loai"]."</td>
                  <td>".$row["TGianTH"]."</td>
                  <td>".$row["MSSV"]."</td>
                  <td>".$row["QDTiet"]."</td>
                  <td><a href='../../views/admin/updatedoan.php?MaDLV=".$row['MaDLV']."'>Update</a></td>
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
<div id="thuchanh" class="tabcontent">
  <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/admin/insert_nhom_thuc_hanh.php">THÊM KẾ HOẠCH MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th>Mã lớp học phần</th>
              <th>Nhóm </th>
              <th>ThucHien</th>
              <th></th>
              <th></th>
            </tr>
            <?php
            foreach ($thuchanh as $value) {
            echo "<tr>
              <form action='../../controllers_admin/XOATH.php' method='POST'>
              <input name='id' value=".$value['MaLop']." style='display:none;'></input>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["Nhom"]."</td>
              <td>".$value["ThucHien"]."</td>
              <td><a href='../../views/admin/update_thuc_hanh.php?id=".$value['MaLop']."'>Update</a></td>
              <td><button type='submit'>Xóa</button></td>
              </form>
            </tr>";
                }
            ?>
          </table>
           <i>Ghi chú: </i><b>Y</b> là đã trạng thái đã thực hiện - 
           <b>N</b> là trạng thái chưa thực hiện
        </form>
      </div>  
    </div>
  </div>
</div>

<script src="../../public/js/test.js"></script>
   
</body>
</html> 
