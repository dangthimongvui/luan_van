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
    // session_start();
    require("../../controllers/DETAI_controller.php");
    require("../../controllers/LOPHP_controller.php");
    require("../../controllers/COITHI_controller.php");
    require("../../controllers/DOANLV_controller.php");
    require("../../controllers/thuchanh_controller.php");
  ?>
<div class="tab" style="color: blue">
  <button class="tablinks" onclick="openCity(event, 'day')">Đăng kí lịch dạy |</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Đăng kí lịch coi thi | </button>
  <button class="tablinks" onclick="openCity(event, 'doan')">Đăng kí lịch hướng dẩn đồ án, tiểu luận, luận văn | </button>
  <button class="tablinks" onclick="openCity(event, 'thuchanh')">Đăng kí nhóm thực hành |</button>
  <button><a href="../qly_cap_khoa/ctlophplt.php">Update thực hiện lý thuyết</a></button>
</div>

<div id="day" class="tabcontent">
  <div class="newsletter-section spad">
     <div class="col-sm-3">
          <button class="site-btn"><a href="../../views/giang_vien/them_kh_gday.php?MaGV=<?php echo $_GET["MaGV"]; ?>">ĐĂNG KÍ MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
          <table class="col-md-12">
            <tr>
              <th>Tên học phần</th>
              <th>Tên lớp học phần </th>
              <th>Sỉ số </th>
              <th>Tính chỉ lý thuyết </th>
              <th>Tính chỉ thực hành</th>
              <th>Thực hiện lý thuyết</th>
              <th>Thực hiện thực hành</th>
              <th></th>
            </tr>
            <?php
            foreach ($lophp as $value) {
            echo "<tr>
              <td>".$value["TenHP"]."</td>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["SiSo"]."</td>
              <td>".$value["SoTCLT"]."</td>
              <td>".$value["SoTCTH"]."</td>
              <td>".$value["ThucHienLT"]."</td>
              <td>".$value["ThucHienLT"]."</td>
              <td><a href='../../views/giang_vien/updateday.php?MaLHP=".$value['MaLHP']."&MaGV=".$_GET['MaGV']."'>Update</a></td>
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
            <button class="site-btn"><a href="../../views/giang_vien/them_kh_coi_thi.php">ĐĂNG KÍ MỚI</a></button>
          </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
          
          <table class="col-md-12">
            <tr>
              <th>Tên lớp học phần</th>
              <th>Thời gian</th>
              <th>CaThi</th>
              <th></th>
            </tr>
            <?php
              foreach ($coithi as $row) {
              echo 
                "<tr>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["ThoiGian"]."</td>
                  <td>".$row["CaThi"]."</td>
                  <td><a href='../../views/giang_vien/updatecoithi.php?ID=".$row['ID']."'>Update</a></td>
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
           <button class="site-btn"><a href="../giang_vien/them_detai.php">ĐĂNG KÍ ĐỀ TÀI</a></button>
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
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($detai as $row) {
              echo 
                "<tr>
                  <form>
                  <td>".$row["TenDT"]."</td>
                  <td>".$row["Cap"]."</td>
                  <td>".$row["QDTiet"]."</td>
                  <td>".$row["TGianTH"]."</td>
                  <td><a href='../../views/giang_vien/updateDeTai.php?MaDT=".$row['MaDT']."'>Update</a></td>
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
           <button class="site-btn"><a href="../giang_vien/them_dalv_spi.php">ĐĂNG KÍ HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN, LUẬN VĂN</a></button>
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
            </tr>
            <?php
              // echo $_SESSION["HoTen"];
              foreach ($doan as $row) {
              echo 
                "<tr>
                  <form>
                  <td>".$row["TenDLV"]."</td>
                  <td>".$row["Loai"]."</td>
                  <td>".$row["TGianTH"]."</td>
                  <td>".$row["MSSV"]."</td>
                  <td>".$row["QDTiet"]."</td>
                  <td><a href='../../views/giang_vien/updatedoan.php?MaDLV=".$row['MaDLV']."'>Update</a></td>
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
          <button class="site-btn"><a href="../../views/giang_vien/insert_nhom_thuc_hanh.php">ĐĂNG KÍ MỚI</a></button>
        </div>
    <div class="container">
      <div class="row">
         <form class="form-class" id="con_form">
         
          <table class="col-md-12">
            <tr>
              <th>Lớp học phần</th>
              <th>Nhóm </th>
              <th>ThucHien</th>
              <th></th>
            </tr>
            <?php
            foreach ($thuchanh as $value) {
            echo "<tr>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["Nhom"]."</td>
              <td>".$value["ThucHien"]."</td>
              <td><a href='../../views/giang_vien/update_thuc_hanh.php?MaLop=".$value['MaLop']."'>Update</a></td>
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
