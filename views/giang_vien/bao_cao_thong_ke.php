<?php include("../layout/header.php"); ?>
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>THỐNG KẾ THỰC HIỆN</h2>
                <div class="page-links">
                    <a href="home.html">TRANG CHỦ</a>
                    <span>THỐNG KẾ THỰC HIỆN</span>
                </div>
            </div>
        </div>
    </div>
    <div class="registration spad fix">
        <div class="container">
            <div class="row">
                <div class="section-title dark">
                    <h2> <span>THỐNG KẾ GIỜ GIẢNG</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-section spad">
        <div class="container">
            <div class="row">
                <div>
                    <div class="col-sm-2">
                        <select>
                            <option type="text">Học kì 1</option>
                            <option  type="text">20182019</option>
                            <option  type="text">Danh sách 03</option>
                            <option  type="text">Danh sách 03</option>
                        </select>
                    </div>  
                    <div class="col-sm-2">
                        <select>
                            <option  type="text">2019-2020</option>
                            <option  type="text">Danh sách 03</option>
                            <option  type="text">Danh sách 03</option>
                        </select>
                    </div>  
                    
                </div>
            </div>  
        </div>
        <!-- <div class="container" class="col-sm-4">
            <div class="row">
                <div class="col-sm-12 class="container">
                    <div class="row">
                        <div>
                            <b>1. THỐNG KÊ CHỨC DANH</b>
                            <table class="col-md-12">
                                <tr>
                                    <th>STT</th>
                                    <th>Chức danh</th>
                                    <th>Số lượng</th>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Giảng viên cao cấp</td>
                                    <td>0</td>
                                </tr>
                                    <td>2</td>
                                    <td>Giảng viên chính</td>
                                    <td>2</td>
                                </tr>
                                    <td>3</td>
                                    <td>Giảng viên</td>
                                    <td>5</td>
                                </tr>
                                </tr>
                                    <td>4</td>
                                    <td>Trợ giảng</td>
                                    <td>2</td>
                                </tr>
                            </table>
                        </div>
                    </div>  
                </div>
                </hr>
                <div class="col-sm-12 class="container">
                    <div class="row">
                        <div>
                            <b>2. THỐNG KÊ HỌC HÀM -HỌC VỊ</b>
                            <table class="col-md-12">
                                <tr>
                                    <th>STT</th>
                                    <th>Chức danh</th>
                                    <th>Số lượng</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tiến sĩ</td>
                                    <td>1</td>
                                </tr>
                                    <td>1</td>
                                    <td>Tiến sĩ</td>
                                    <td>1</td>
                                </tr>
                                    <td>1</td>
                                    <td>Tiến sĩ</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>  
                </div>
            </div>      
        </div>   -->
        <div class="col-sm-12"></div>
        <div class="container" class="col-sm-10">
            <div class="row">
                <div class="col-sm-12 class="container">
                    <div class="row">
                        <h2>THỐNG KÊ GIẢNG VIÊN</h2>
                        <table class="col-md-12">
                            <tr>
                              
                                <th rowspan="2">Họ tên</th>
                                <th rowspan="2">Năm công tác</th>
                                <th>Giờ chuẩn</th>
                                <th>Thực hiện lý thuyết</th>
                                <th>Thực hiện thực hành</th>
                                <th>Hoàn thành nhiệm vụ</th>
                            </tr>
                            <tr>
                            <?php
                            require_once("../../controllers_ad/KHCONGTACGV_controller.php"); 
                            ?>
                        </tr>
                            <!-- <tr>
                                <td>2</td>
                                <td name="ten_gv">Đinh Thành Nhân</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giớ</td>
                                <td name="vuot_bu">0 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">330 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td name="ten_gv">Nguyễn Xuân Hà Giang</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giờ</td>
                                <td name="vuot_bu">5 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">330 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td name="ten_gv">Hà Xuân Sơn</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giờ</td>
                                <td name="vuot_bu">0 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">380 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td name="ten_gv">Lâm Thanh Toản</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giờ</td>
                                <td name="vuot_bu">0 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">280 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td name="ten_gv">Hồng Thanh Luận</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giờ</td>
                                <td name="vuot_bu">0 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">380 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr>
                                <tr>
                                <td>7</td>
                                <td name="ten_gv">Dương Trung Nghĩa</td>
                                <td name="nam_ct">2019-2020</td>
                                <td name="nghia_vu_day">270 giờ</td>
                                <td name="thuc_hien_day">270 giờ</td>
                                <td name="truc_tiep_day">270 giờ</td>
                                <td name="vuot_bu">0 giờ</td>
                                <td name="nghia_vu-nckh">0</td>
                                <td name="thuc_hien_nckh">0</td>
                                <td name="truc_tiep_nckh">0</td>
                                <td name="vuot_bu_nckh">0</td>
                                <td name="nghia_vu_nvkhac">0</td>
                                <td name="thuc_hien_nvkhac">0</td>
                                <td name="truc_tiep_nvkhac">0</td>
                                <td name="vuot_bu_nvkhac">0</td>
                                <td name="tong_nghia_vu">380 giờ</td>
                                <td name="tong_thuc_hien"></td>
                                <td></td>
                            </tr> -->

                        </table>
                    </div>  
                </div>
            <div>   
        </div>
    </div>
</div>
</div>
<?php include("../../views/layout/footer.php"); ?>
<script src="../../public/js/jquery-2.1.4.min.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/magnific-popup.min.js"></script>
<script src="../../public/js/owl.carousel.min.js"></script>
<script src="../../public/js/circle-progress.min.js"></script>
<script src="../../public/js/main.js"></script>

