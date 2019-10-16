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

<!-- <div class="tab" style="color: blue">
  <button class="tablinks" onclick="openCity(event, 'day')">Theo dõi lịch dạy |</button>
  <button class="tablinks" onclick="openCity(event, 'coithi')">Theo dõi lịch coi thi | </button>
  <button class="tablinks" onclick="openCity(event, 'chamthi')">Theo dõi lịch hướng dẩn đồ án, tiểu luận, luận văn | </button>
  <button class="tablinks" onclick="openCity(event, 'thuchanh')">Theo dõi lịch thực hành</button>
</div> -->


  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
         <h2 style="text-align: center;"> <span>KẾ HOẠCH DẠY</span></h2>
         <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th>Tên học phần</th>
              <th>Tên lớp học phần </th>
              <th>Sỉ số </th>
              <th>Giờ lý thuyết </th>
              <th>Giớ thực hành</th>
              <th>Trạng thái</th>
            </tr>
            <?php
            foreach ($lophp as $value) {
            echo "<tr>
              <td>".$value["TenHP"]."</td>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["SiSo"]."</td>
              <td>".$value["SoTCLT"]."</td>
              <td>".$value["SoTCTH"]."</td>
              <td>".$value["ThucHien"]."</td>
            </tr>";
                }
            ?>
          </table>
        </form>
      </div>  
    </div>
    <hr width="50%" />
    <div class="container">
      <div class="row">
          <h2 style="text-align: center;"><span>KẾ HOẠCH COI THI</span></h2>
         <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th>Tên lớp học phần</th>
              <th>Thời gian</th>
              <th>CaThi</th>
              <th>Trạng thái</th>
            </tr>
            <?php
              foreach ($coithi as $row) {
              echo 
                "<tr>
                  <td>".$row["TenLopHP"]."</td>
                  <td>".$row["ThoiGian"]."</td>
                  <td>".$row["CaThi"]."</td>
                  <td>".$row["ThucHien"]."</td>
                </tr>";
              }
            ?>
          </table> 
          </form> 
      </div>
    </div>
    <hr width="50%" />
    <div class="container">
      <div class="row">
        <h2 style="text-align: center;"><span>KẾ HOẠCH HƯỚNG DẨN ĐỒ ÁN, TIỂU LUẬN,LUẬN VĂN</span></h2>
         <form class="form-class" id="con_form">
        <form class="form-class" id="con_form">
          <table class="col-md-12">
            <tr>
              <th style="text-align: center">Tên đề tài</th>
              <th>Loại đề tài</th>
              <th>Thời gian thực hiện</th>
              <th>Sinh viên thực hiện</th>
              <th>Qui đổi tiết (giờ)</th>
              <th>Trạng thái</th>
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
                  <td>".$row["ThucHien"]."</td>
                  </form>
                </tr>";
              }
            ?>
          </table>
        </form>
      </div>
    <hr width="50%" />
    <div class="container">
      <div class="row">
         <h2 style="text-align: center;"><span>KẾ HOẠCH ĐĂNG KÍ PHÒNG THỰC HÀNH</span></h2>
         <form class="form-class" id="con_form">
         
          <table class="col-md-12">
            <tr>
              <th>Tên lớp học phần</th>
              <th>Tiết</th>
              <th>Nhóm </th>
              <th>Sỉ số </th>
              <th>Thời gian</th>
              <th>Trạng thái</th>
            </tr>
            <?php
            foreach ($thuchanh as $value) {
            echo "<tr>
              <td>".$value["TenLopHP"]."</td>
              <td>".$value["Tiet"]."</td>
              <td>".$value["Nhom"]."</td>
              <td>".$value["SiSo"]."</td>
              <td>".$value["TGianTH"]."</td>
              <td>".$value["ThucHien"]."</td>
            </tr>";
                }
            ?>
          </table>
        </form>
      </div>  
    </div>
    <!-- <hr width="50%" /> -->
  </div>
</div>
<script src="../../public/js/test.js"></script>
   
