CREATE DATABASE lv_ver2 character set utf8 collate utf8_czech_ci;
USE lv_ver2;

CREATE TABLE DANGNHAP(
	Username char(30) Primary key,
	Password Text  not null
);

CREATE TABLE DONVI(
	MaDV char(10) PRIMARY KEY,
	TenDV char(40) not null
);

CREATE TABLE CHUCVU(
	MaCV int auto_increment PRIMARY KEY,
	TenCV char(30) not null,
	TiLeMien real not null
);

CREATE TABLE HOCPHAN(
	MaHP char(10) PRIMARY KEY,
	TenHP char(40) not null,
	SoTCLT int not null,
	SoTCTH int not null,
  	MonTQ char(10) not null,
  FOREIGN KEY (MonTQ) REFERENCES HOCPHAN(MaHP)
);

CREATE TABLE KHOA(
  MaKhoa char(10) PRIMARY KEY,
  TenKhoa char(30) not null
);

CREATE TABLE NGACH(
  MaNgach char(10) PRIMARY KEY,
  TenNgach char(30) not null,
  GioGiang int not null
);

CREATE TABLE GIANGVIEN(
  MaGV char(10) PRIMARY KEY,
  MaKH char(10) not null,
  MaCV int not null,
  MaNG char(10) not null,
  Username char(30) not null,
  HoTen char(40) not null,
  Gtinh char(3) not null,
  Email char(30) not null,
  DThoai char(10) not null,
  GioChuan int not null,
  BacLuong real not null,
  FOREIGN KEY (MaKH) REFERENCES Khoa(MaKhoa),
  FOREIGN KEY (MaCV) REFERENCES CHUCVU(MaCV),
  FOREIGN KEY (MaNG) REFERENCES NGACH(MaNgach),
  FOREIGN KEY (Username) REFERENCES DANGNHAP(Username)
);

CREATE TABLE LOPHP(
	MaLHP char(10) PRIMARY KEY,
	MaHP char(10) not null,
	TenLopHP char(30) not null,
	SiSo int not null,
	HocKy int not null,
	NamHoc char(10) not null,
 	MaGV int not null,
  	SoTietLT int not null,
  	SoTietTH int not null,
  	SoTietDGMH int not null,
  	ThucHienLT enum('Y','N') not null,
  	ThucHienTH enum('Y','N') not null,
	FOREIGN KEY (MaHP) REFERENCES HOCPHAN (MaHP)
);
CREATE TABLE CTLOPHPLT(
  MaLop int auto_increment PRIMARY KEY,
  MaLopHP char(10) not null,
  Muc enum('Day','Ktra_Gky','Ra_de','Thi','Cham_thi') not null,
  ThucHien Enum('Y','N') not null,
  FOREIGN KEY (MaLopHP) REFERENCES LOPHP(MaLHP)
  );

CREATE TABLE CTLOPHPTH(
  MaLop int auto_increment PRIMARY KEY,
  MaLopHP char(10) not null,
  Nhom enum('1','2','3'),
  ThucHien Enum('Y','N') not null,
  FOREIGN KEY (MaLopHP) REFERENCES LOPHP(MaLHP)
  );

CREATE TABLE NGANH(
	MaNganh char(10) PRIMARY KEY,
	MaKH char(10) not null,
	TenNganh char(30) not null,
	FOREIGN KEY (MaKH) REFERENCES KHOA(MaKhoa)
);

CREATE TABLE LOP(
	MaLop char(10) PRIMARY KEY,
	MaNganh char(10) not null,
	TenLop int not null,
	SiSo int not null,
	NienKhoa char(9) not null,
	FOREIGN KEY (MaNganh) REFERENCES NGANH(MaNganh)

);
CREATE TABLE COVANHT(
  	MaGVCV char(10) PRIMARY KEY,
	MaLop char(10) not null,
	MaGV char(10) not null,
  	NamHoc char(10) not null,
 	SoTietQD int not null,
 	ThucHien Enum('Y','N'),
	FOREIGN KEY (MaLop) REFERENCES LOP(MaLop),
	FOREIGN KEY (MaGV) REFERENCES GIANGVIEN(MaGV)
);

CREATE TABLE COITHI(
	ID int auto_increment PRIMARY KEY,
 	MaGV char(10) not null,
	MaLopHP char(10) not null,
	ThoiGian date not null,
	Buoi date not null,
	HeSo int not null,
    FOREIGN KEY (MaGV) REFERENCES GIANGVIEN(MaGV),
	FOREIGN KEY (MaLopHP) REFERENCES LOPHP(MaLHP)
);

CREATE TABLE BAIBAO(
	MaBB int auto_increment PRIMARY KEY,
	TenBB char(50) not null,
	TenTChi char(30) not null,
	TGianTH date not null,
	QDTiet int not null,
    MaGV char(10) not null,
    FOREIGN KEY (MaGV) REFERENCES GIANGVIEN(MaGV)
);

CREATE TABLE DETAI(
	MaDT int auto_increment PRIMARY KEY,
	TenDT char(50) not null,
	Cap int not null,
	QDTiet int not null,
	TGianTH Date not null
);

CREATE TABLE DOANLV(
	MaDLV char(10) PRIMARY KEY,
	TenDLV char(50) not null,
	MSSV char(10) not null,
	Loai int not null,
	TGianTH date not null,
	QDTiet int not null
);

CREATE TABLE CTKHHUONGDANDALV(
  MaKHHD int auto_increment PRIMARY KEY,
  MaGV char(10) not null,
  MaDLV char(10) not null,
  Nam date not null,
  QDTiet int not null,
  ThucHien enum('yes','no') not null,
  FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV),
  FOREIGN KEY (MaDLV) REFERENCES DOANLV(MaDLV)
);

CREATE TABLE HOIDONG(
	SoQD char(10) PRIMARY KEY,
	MaDTLV char(10) not null,
	LoaiHD int not null,
	TGianTH date not null,
	FOREIGN KEY (MaDTLV) REFERENCES DOANLV(MaDLV)
);

CREATE TABLE KHGCGV(
  ID int auto_increment PRIMARY KEY,
  MaGV char(10) not null,
  Nam char(9) not null,
  GioChuan int not null,
  FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV)
);

CREATE TABLE KHCONGTACGV(
    ID int auto_increment PRIMARY KEY,
	MaGV char(10) not null,
	Nam char(9) not null,
	QDTiet int not null,
	ThucHien enum('yes','no') not null,
	FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV)
);

CREATE TABLE CTKHGVCOVANHT(
    ID int auto_increment PRIMARY KEY,
	MaGV char(10) not null,
	Nam int not null,
	QDTiet int not null,
	ThucHien enum('yes','no') not null,
	FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV)
);

CREATE TABLE CTHOIDONG(
  	ID int auto_increment PRIMARY KEY,
	MaGV char(10) not null,
	SoQD int not null,
	ChucDanh char(30) not null,
	QDTiet int not null,
	ThucHien enum('yes','no') not null,
  FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV)
);

CREATE TABLE KHGIANGDAY(
  	ID int auto_increment PRIMARY KEY,
	MaGV char(10) not null,
	Nam char(10) not null,
	SoTietKH int not null,
	FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV)
); 

CREATE TABLE CTKHGIANGDAY(
	ID int auto_increment PRIMARY KEY,
  	MaGV char(10) not null,
	MaLopHP char(10) not null,
	Nam char(10) not null,
	SoTietTH int not null,
	ThucHien enum('yes','no'),
	FOREIGN KEY (MaGV) REFERENCES GIANGVIEN (MaGV),
	FOREIGN KEY (MaLopHP) REFERENCES LOPHP(MaLHP)
);

