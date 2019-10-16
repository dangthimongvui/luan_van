use Luanvan;
insert into DANGNHAP(Username, Password)
values ('vui123', 'vui@123');
insert into DANGNHAP(Username, Password)
values ('bi123', 'bi@123');
insert into DANGNHAP(Username, Password)
values ('nghia123', 'nghia@123');
insert into DANGNHAP(Username, Password)
values ('thao123', 'thao@123');
insert into DANGNHAP(Username, Password)
values ('phuogn123', 'phuong@123');


-- insert into DONVI(MaDV,TenDV)
-- values ('CNTT',N'KHOA CÔNG NGHỆ THÔNG TIN');
insert into DONVI(MaDV,TenDV)
values ('CDT',N'KHOA CƠ ĐIỆN TỬ');
insert into DONVI(MaDV,TenDV)
values ('QLCN',N'QUẢN LÍ CÔNG NGHIỆP');
insert into DONVI(MaDV,TenDV)
values ('CNTP',N'CÔNG NGHỆ THỰC PHẨM');


insert into CHUCVU(MaCV, TenCV, TiLeMien)
values ('CV_GV01',N'Giảng viên','12' );
insert into CHUCVU(MaCV,TenCV, TiLeMien)
values ('CV_GV02',N'Trưởng khoa CNTT','12' );
insert into CHUCVU(MaCV,TenCV, TiLeMien)
values ('CV_GV03',N'Trưởng khoa Công nghệ thực phẩm','12' );
insert into CHUCVU(MaCV,TenCV, TiLeMien)
values ('CV_GV04',N'Trợ lí khoa','12' );


insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_CSDL',N'Cơ sở dữ liệu', '1','2');
insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_TRR',N'Toán rời rạc', '1','1');
insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_KTLT',N'Kỹ thuật lập trình', '1','2');
insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_GT1',N'Giải tích 1', '2','0');
insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_GT2',N'Giải tích 2', '2','0');
insert into HOCPHAN(MaHP,TenHP, SoTCLT, SoTCTH)
values ('HP_TTNT',N'Trí tuệ nhân tạo', '1','2');


insert into LOPHP(MaLHP,MaHP, TenLopHP, SiSo, HocKy, NamHoc)
values ('LHPN_KTPMK3','HP_CSDL',N'Kỹ thuật phần mềm k3', '70','2','2019-2020');
insert into LOPHP(MaLHP,MaHP, TenLopHP, SiSo, HocKy, NamHoc)
values ('LHPN_KHMTK3','HP_TRR',N'Khoa học máy tính k3', '80','2','2019-2020');
insert into LOPHP(MaLHP,MaHP, TenLopHP, SiSo, HocKy, NamHoc)
values ('LHPN_CDT1K3','HP_KTLT',N'Cơ điện tử L1 k3', '70','2','2019-2020');
insert into LOPHP(MaLHP,MaHP, TenLopHP, SiSo, HocKy, NamHoc)
values ('LHPN_CDT2K3','HP_KTLT',N'Cơ điện tử L2 ke', '80','2','2019-2020');
insert into LOPHP(MaLHP,MaHP, TenLopHP, SiSo, HocKy, NamHoc)
values ('LHPN_QLCNK3','HP_GT2', N'Quản lý công nghiệp k3', '70','2','2019-2020');


insert into NGACH(MaNgach, TenNgach, GioGD, GioNCKH)
values ('N01_GVCC',N'Giảng viên cao cấp','270','240');
insert into NGACH(MaNgach,TenNgach, GioGD, GioNCKH)
values ('N02_GVC',N'Giảng viên chính','270','190');
insert into NGACH(MaNgach,TenNgach, GioGD, GioNCKH)
values ('N03_GVTS',N'Giảng viên tập sự','50','10');


insert into GIANGVIEN(MaGV, MaDV, MaCV, MaNgach, Username, HoTen, GTinh, Email, DThoai, GioChuan)
values ('GV01','CNTT','CV_GV01','N01_GVCC','vui123', N'Lê Ngọc Hạnh', N'Nữ', 'lnhanh@ctuet.edu.vn','0352323045','510' );
insert into GIANGVIEN(MaGV,MaDV, MaCV, MaNgach, Username, HoTen, GTinh, Email, DThoai, GioChuan)
values ('GV02','QLCN','CV_GV02','N02_GVC','nghia123', N'Lê Hữu Nghĩa', N'Nam', 'lhnghia@ctuet.edu.vn','0372373045','440' );
insert into GIANGVIEN(MaGV,MaDV, MaCV, MaNgach, Username, HoTen, GTinh, Email, DThoai, GioChuan)
values ('GV03','QLCN','CV_GV02','N02_GVC','bi123', N'Lê Hải Bi', N'Nam', 'lhbi@ctuet.edu.vn','0382353055','60' );
insert into GIANGVIEN(MaGV,MaDV, MaCV, MaNgach, Username, HoTen, GTinh, Email, DThoai, GioChuan)
values ('GV04','CNTT','CV_GV01','N01_GVCC','thao123', N'Đặng Ngọc Thảo', N'Nữ', 'dnthao@ctuet.edu.vn','0362423745','510' );
insert into GIANGVIEN(MaGV,MaDV, MaCV, MaNgach, Username, HoTen, GTinh, Email, DThoai, GioChuan)
values ('GV05','CNTT','CV_GV01','N01_GVCC','phuong123', N'Lê Ngọc Phượng', N'Nữ', 'lnphuong@ctuet.edu.vn','0352323045','440' );


-- insert into KHOA(MaKhoa, TenKhoa)
-- values ('CNTT_01',N'Công nghệ thông tin');
-- insert into KHOA(TenKhoa)
-- values ('CNTP_01',N'Công nghệ thực phẩm');
-- insert into KHOA(TenKhoa)
-- values ('CDT_01',N'Cơ điện tử');
-- insert into KHOA(TenKhoa)
-- values ('KHCB_01',N'Khoa học cơ bản');


-- insert into NGANH(MaNganh, MaKH, TenNganh)
-- values ('KTPM01','CNTT_01',N'Kỹ thuật phần mềm');
-- insert into NGANH(TenNganh)
-- values ('KHMT01','',N'Khoa học máy tính');
-- insert into NGANH(TenNganh)
-- values (N'Công nghệ thực phẩm');
-- insert into NGANH(TenNganh)
-- values (N'Quản lý công nghiệp');
-- insert into NGANH(TenNganh)
-- values (N'Cơ điện tử');


-- insert into LOP(MaNganh, TenLop,SiSo, NienKhoa)
-- values (1,'KTPM0115',70,'2015-2019');
-- insert into LOP(MaNganh, TenLop,SiSo, NienKhoa)
-- values (1,'KHMT0115',80,'2015-2019');
-- insert into LOP(MaNganh, TenLop,SiSo, NienKhoa)
-- values (1,'CDT1_0115',75,'2015-2019');
-- insert into LOP(MaNganh, TenLop,SiSo, NienKhoa)
-- values (1,'CDT2_0115',70,'2015-2019');
-- insert into LOP(MaNganh, TenLop,SiSo, NienKhoa)
-- values (1,'QLCN115',80,'2015-2019');


-- insert into COVANHT(MaLop, MaGV)
-- values (1,5);
-- insert into COVANHT(MaLop, MaGV)
-- values (2,4);
-- insert into COVANHT(MaLop, MaGV)
-- values (3,3);
-- insert into COVANHT(MaLop, MaGV)
-- values (4,2);
-- insert into COVANHT(MaLop, MaGV)
-- values (5,1);


-- insert into COITHI(MaGV, MaLopHP, ThoiGian, Buoi, HeSo)
-- values (1, 1, '1h30 Ngày 20/03/2019', N'Chiều', ' ');
-- insert into COITHI(MaGV, MaLopHP, ThoiGian, Buoi, HeSo)
-- values (1, 2, '3h30 Ngày 21/03/2019', N'Chiều', ' ');
-- insert into COITHI(MaGV, MaLopHP, ThoiGian, Buoi, HeSo)
-- values (2, 1, '1h30 Ngày 22/03/2019', N'Chiều', ' ');
-- insert into COITHI(MaGV, MaLopHP, ThoiGian, Buoi, HeSo)
-- values (2, 2, '7h30 Ngày 23/03/2019', N'Sáng', ' ');
-- insert into COITHI(MaGV, MaLopHP, ThoiGian, Buoi, HeSo)
-- values (2, 3, '9h30 Ngày 23/03/2019', N'Sáng', ' ');



-- insert into CHAMTHI(MaGV, MaLopHP, SoBai)
-- values (5,1, '70');
-- insert into CHAMTHI(MaGV, MaLopHP, SoBai)
-- values (4,2, '75');
-- insert into CHAMTHI(MaGV, MaLopHP, SoBai)
-- values (3,3, '80');
-- insert into CHAMTHI(MaGV, MaLopHP, SoBai)
-- values (2,4, '65');
-- insert into CHAMTHI(MaGV, MaLopHP, SoBai)
-- values (1,5, '90');


-- insert into BAIBAO(TenBB, TenTChi, TGianTH, QDTiet)
-- values (N'Nghiên cứu Blockchain', 'GOURNAL', 'Từ 20/03/2019 đến 20/10/2019',' ')
-- insert into BAIBAO(TenBB, TenTChi, TGianTH, QDTiet)
-- values (N'Nghiên cứu Blockchain', 'GOURNAL', 'Từ 20/03/2019 đến 20/10/2019',' ')
-- insert into BAIBAO(TenBB, TenTChi, TGianTH, QDTiet)
-- values (N'Nghiên cứu Blockchain', 'GOURNAL', 'Từ 20/03/2019 đến 20/10/2019',' ')
-- insert into BAIBAO(TenBB, TenTChi, TGianTH, QDTiet)
-- values (N'Nghiên cứu Blockchain', 'GOURNAL', 'Từ 20/03/2019 đến 20/10/2019',' ')
-- insert into BAIBAO(TenBB, TenTChi, TGianTH, QDTiet)
-- values (N'Nghiên cứu Blockchain', 'GOURNAL', 'Từ 20/03/2019 đến 20/10/2019',' ')



-- insert into DETAI(TenDT, Cap, QDTiet, TGianTH)
-- values (N'Website quản lý giờ giảng trường đại học', N'Trường',' ', 'Từ 20/03/2019 đến 20/10/2019')







