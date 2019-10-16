-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2019 lúc 02:24 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baibao`
--

CREATE TABLE `baibao` (
  `MaBB` int(11) NOT NULL,
  `TenBB` char(50) COLLATE utf8_czech_ci NOT NULL,
  `TenTChi` char(30) COLLATE utf8_czech_ci NOT NULL,
  `TGianTH` date NOT NULL,
  `QDTiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamthi`
--

CREATE TABLE `chamthi` (
  `id` int(11) NOT NULL,
  `MaGV` int(11) NOT NULL,
  `MaLopHP` int(11) NOT NULL,
  `SoBai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `chamthi`
--

INSERT INTO `chamthi` (`id`, `MaGV`, `MaLopHP`, `SoBai`) VALUES
(1, 4, 13, 80),
(3, 2, 9, 80),
(4, 5, 17, 40),
(5, 5, 8, 65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `MaCV` int(11) NOT NULL,
  `TenCV` char(30) COLLATE utf8_czech_ci NOT NULL,
  `TiLeMien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`MaCV`, `TenCV`, `TiLeMien`) VALUES
(1, 'Trường khoa CNTT', 3),
(2, 'Trợ lý khoa CNTT', 0),
(3, 'Giảng viên', 0),
(4, 'Trưởng khoa Công nghệ thực phầ', 0),
(5, 'Trợ lí khoa CNTP', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coithi`
--

CREATE TABLE `coithi` (
  `id` int(11) NOT NULL,
  `MaGV` int(11) NOT NULL,
  `MaLopHP` int(11) NOT NULL,
  `ThoiGian` date NOT NULL,
  `Buoi` varchar(5) COLLATE utf8_czech_ci NOT NULL,
  `HeSo` int(11) NOT NULL
);

--
-- Đang đổ dữ liệu cho bảng `coithi`
--

INSERT INTO `coithi` (`id`, `MaGV`, `MaLopHP`, `ThoiGian`, `Buoi`, `HeSo`) VALUES
(1, 1, 13, '2019-05-02', 'Sáng', 3),
(2, 2, 13, '2019-05-02', 'Sáng', 3),
(4, 2, 5, '2019-03-03', 'Sáng', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `covanht`
--

CREATE TABLE `covanht` (
  `MaLop` int(11) NOT NULL,
  `MaGV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoidong`
--

CREATE TABLE `cthoidong` (
  `MaGV` int(11) NOT NULL,
  `QDHD` char(50) COLLATE utf8_czech_ci NOT NULL,
  `ChucDanh` int(11) NOT NULL,
  `QDTiet` int(11) NOT NULL,
  `ThucHien` enum('yes','no') COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkhgiangday`
--

CREATE TABLE `ctkhgiangday` (
  `id` int NOT NULL,
  `MaGV` int(11) NOT NULL,
  `MaLopHP` int(11) NOT NULL,
  `Nam` char(9) NOT NULL,
  `HocKy` int(11) NOT NULL,
   `SoTiet` int(11) NOT NULL
  `ThucHien` enum('yes','no')
 
)

--
-- Đang đổ dữ liệu cho bảng `ctkhgiangday`
--

INSERT INTO `ctkhgiangday` (`MaGV`, `MaLopHP`, `Nam`, `HocKy`, `ThucHien`, `SoTiet`) VALUES
(6, 6, '2020-2021', 2, 'no', 220);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkhgvcovanht`
--

CREATE TABLE `ctkhgvcovanht` (
  `MaGV` int(11) NOT NULL,
  `Nam` int(11) NOT NULL,
  `QDTiet` int(11) NOT NULL,
  `ThucHien` enum('yes','no') COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkhhuongdandalv`
--

CREATE TABLE `ctkhhuongdandalv` (
  `MaGV` int(11) NOT NULL,
  `MaDLV` int(11) NOT NULL,
  `Nam` date NOT NULL,
  `ThucHien` enum('yes','no') COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `Username` char(30) COLLATE utf8_czech_ci NOT NULL,
  `Password` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`Username`, `Password`) VALUES
('hoa', '8cf58af61f52fee2dba3b0b8d86f9c4e0aff03a4c57d83386ee8cdcf92e32671'),
('nghia', '729eb7916754cee921967ffa002fb223fddd5efc686823cdf99746d07ebbf917'),
('phuong', 'f6181b87c39c6f7d3082e24adcae0dba146e2973a766016d388f1fff3e2a2f6e'),
('trieu', '43184c91caa4e743c7269875ff781d61d18b61382c0b90e29cdc3c582600f462'),
('trinh', 'f2b232d9e77714ea1de8565f72067ba2ad69b173156448acf094fc2d0528376f');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `MaDT` int(11) NOT NULL,
  `TenDT` char(50) COLLATE utf8_czech_ci NOT NULL,
  `Cap` int(11) NOT NULL,
  `QDTiet` int(11) NOT NULL,
  `TGianTH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanlv`
--

CREATE TABLE `doanlv` (
  `MaDLV` int(11) NOT NULL,
  `TenDLV` char(50) COLLATE utf8_czech_ci NOT NULL,
  `MSSV` char(10) COLLATE utf8_czech_ci NOT NULL,
  `Loai` int(11) NOT NULL,
  `TGianTH` date NOT NULL,
  `QDTiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `MaDV` int(11) NOT NULL,
  `TenDV` char(40) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`MaDV`, `TenDV`) VALUES
(1, 'Khoa công nghệ thông tin'),
(2, 'Khoa quản lý công nghiệp'),
(3, 'Khoa Công nghệ hực phầm'),
(4, 'Khoa Cơ điện tử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` int(11) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `MaCV` int(11) NOT NULL,
  `MaNgach` int(11) NOT NULL,
  `Username` char(30) COLLATE utf8_czech_ci NOT NULL,
  `HoTen` char(40) COLLATE utf8_czech_ci NOT NULL,
  `Gtinh` char(3) COLLATE utf8_czech_ci NOT NULL,
  `Email` char(40) COLLATE utf8_czech_ci NOT NULL,
  `DThoai` char(10) COLLATE utf8_czech_ci NOT NULL,
  `GioChuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `MaDV`, `MaCV`, `MaNgach`, `Username`, `HoTen`, `Gtinh`, `Email`, `DThoai`, `GioChuan`) VALUES
(1, 1, 1, 2, 'hoa', 'Lê Ngọc Hân', 'Nam', 'tnhan@gmail.com', '0352323040', 300),
(2, 2, 1, 1, 'trieu', 'Lê Hải Triều', 'Nam', 'lhtrieu@gmail.com', '0919863497', 500),
(3, 4, 3, 4, 'nghia', 'Đặng Tuấn Nghĩa', 'Nam', 'dtnghia@gmail.com', '037454555', 220),
(4, 2, 5, 1, 'trinh', 'Đặng Ngọc Trinh', 'Nữ', 'dntrinh@gamil.com', '123345666', 310),
(5, 4, 3, 1, 'phuong', 'Ngô Thanh Phương', 'Nam', 'ntphuong@gmail.com', '0919863497', 300),
(6, 3, 4, 4, 'nghia', 'Đặng Tuấn Nghĩa', 'Nam', 'dtnghia@gmail.com', '0919863497', 280);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` int(11) NOT NULL,
  `TenHP` char(40) COLLATE utf8_czech_ci NOT NULL,
  `SoTCLT` int(11) NOT NULL,
  `SoTCTH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`, `SoTCLT`, `SoTCTH`) VALUES
(1, 'Cơ sở dữ liệu', 2, 2),
(2, 'Kỹ thuật lập trình', 1, 2),
(3, 'Toán rời rạc', 2, 1),
(4, 'Giải tích 1', 2, 0),
(5, 'Giải tích 2', 2, 0),
(6, 'Quản trị dự án CNTT', 2, 2),
(7, 'Quản trị dự án KTPM', 2, 2),
(8, 'SQA', 2, 2),
(9, 'Kiễm thử', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidong`
--

CREATE TABLE `hoidong` (
  `SoQD` int(11) NOT NULL,
  `MaDTLV` int(11) NOT NULL,
  `LoaiHD` int(11) NOT NULL,
  `TGianBC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khcongtacgv`
--

CREATE TABLE `khcongtacgv` (
  `MaGV` int(11) NOT NULL,
  `Nam` char(9) COLLATE utf8_czech_ci NOT NULL,
  `QDTiet` int(11) NOT NULL,
  `ThucHien` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khgiangday`
--

CREATE TABLE `khgiangday` (
  `MaGV` int(11) NOT NULL,
  `Nam` char(9) COLLATE utf8_czech_ci NOT NULL,
  `SoTietTH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKH` int(11) NOT NULL,
  `TenKH` char(30) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `MaNganh` int(11) NOT NULL,
  `TenLop` int(11) NOT NULL,
  `SiSo` int(11) NOT NULL,
  `NienKhoa` char(9) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophp`
--

CREATE TABLE `lophp` (
  `MaLHP` int(11) NOT NULL,
  `MaHP` int(11) NOT NULL,
  `TenLopHP` char(30) COLLATE utf8_czech_ci NOT NULL,
  `SiSo` int(11) NOT NULL,
  `HocKy` int(11) NOT NULL,
  `NamHoc` char(9) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `lophp`
--

INSERT INTO `lophp` (`MaLHP`, `MaHP`, `TenLopHP`, `SiSo`, `HocKy`, `NamHoc`) VALUES
(5, 2, 'Khoa học máy tính', 74, 2, '2019-2020'),
(6, 1, 'Cơ sở dữ liệu', 100, 1, '2018-2019'),
(8, 9, 'Khoa học máy tính', 65, 1, '2019-2020'),
(9, 7, 'Hệ thống thông tin', 70, 2, '2017-2018'),
(11, 4, 'Cơ điện tử', 60, 2, '2019-2020'),
(12, 5, 'Quản lý công nghiệp', 120, 2, '2019-2020'),
(13, 3, 'Công nghệ thực phầm', 90, 2, '2019-2020'),
(15, 6, 'Kỹ thuật phần mềm', 100, 1, '2019-2020'),
(16, 9, 'Khoa học máy tính', 85, 2, '2019-2020'),
(17, 2, 'Cơ điện tử L2', 70, 2, '2019-2020');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngach`
--

CREATE TABLE `ngach` (
  `MaNgach` int(11) NOT NULL,
  `TenNgach` char(30) COLLATE utf8_czech_ci NOT NULL,
  `GioGD` int(11) NOT NULL,
  `GioNCKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Đang đổ dữ liệu cho bảng `ngach`
--

INSERT INTO `ngach` (`MaNgach`, `TenNgach`, `GioGD`, `GioNCKH`) VALUES
(1, 'Giảng viên chính', 220, 330),
(2, 'giảng viên cao cấp loại 1', 300, 120),
(3, 'Giảng viên cao cấp loại I', 440, 200),
(4, 'Giảng viên cao cấp loại II', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TenNganh` char(30) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baibao`
--
ALTER TABLE `baibao`
  ADD PRIMARY KEY (`MaBB`);

--
-- Chỉ mục cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaLopHP` (`MaLopHP`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaCV`);

--
-- Chỉ mục cho bảng `coithi`
--
ALTER TABLE `coithi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaLopHP` (`MaLopHP`);

--
-- Chỉ mục cho bảng `covanht`
--
ALTER TABLE `covanht`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `cthoidong`
--
ALTER TABLE `cthoidong`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `ctkhgiangday`
--
ALTER TABLE `ctkhgiangday`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaLopHP` (`MaLopHP`);

--
-- Chỉ mục cho bảng `ctkhgvcovanht`
--
ALTER TABLE `ctkhgvcovanht`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `ctkhhuongdandalv`
--
ALTER TABLE `ctkhhuongdandalv`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaDLV` (`MaDLV`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `UserName` (`Username`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MaDT`);

--
-- Chỉ mục cho bảng `doanlv`
--
ALTER TABLE `doanlv`
  ADD PRIMARY KEY (`MaDLV`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`MaDV`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaDV` (`MaDV`,`MaCV`,`MaNgach`,`Username`),
  ADD KEY `MaCV` (`MaCV`),
  ADD KEY `Username` (`Username`),
  ADD KEY `MaNgach` (`MaNgach`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Chỉ mục cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  ADD PRIMARY KEY (`SoQD`),
  ADD KEY `MaDTLV` (`MaDTLV`);

--
-- Chỉ mục cho bảng `khcongtacgv`
--
ALTER TABLE `khcongtacgv`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `khgiangday`
--
ALTER TABLE `khgiangday`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaNganh` (`MaNganh`);

--
-- Chỉ mục cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD PRIMARY KEY (`MaLHP`),
  ADD KEY `MaHP` (`MaHP`);

--
-- Chỉ mục cho bảng `ngach`
--
ALTER TABLE `ngach`
  ADD PRIMARY KEY (`MaNgach`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`),
  ADD KEY `MaKH` (`MaKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baibao`
--
ALTER TABLE `baibao`
  MODIFY `MaBB` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `coithi`
--
ALTER TABLE `coithi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `covanht`
--
ALTER TABLE `covanht`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cthoidong`
--
ALTER TABLE `cthoidong`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ctkhgiangday`
--
ALTER TABLE `ctkhgiangday`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ctkhgvcovanht`
--
ALTER TABLE `ctkhgvcovanht`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ctkhhuongdandalv`
--
ALTER TABLE `ctkhhuongdandalv`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detai`
--
ALTER TABLE `detai`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `doanlv`
--
ALTER TABLE `doanlv`
  MODIFY `MaDLV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  MODIFY `MaHP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  MODIFY `SoQD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khcongtacgv`
--
ALTER TABLE `khcongtacgv`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khgiangday`
--
ALTER TABLE `khgiangday`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lophp`
--
ALTER TABLE `lophp`
  MODIFY `MaLHP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ngach`
--
ALTER TABLE `ngach`
  MODIFY `MaNgach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nganh`
--
ALTER TABLE `nganh`
  MODIFY `MaNganh` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  ADD CONSTRAINT `chamthi_ibfk_1` FOREIGN KEY (`MaLopHP`) REFERENCES `lophp` (`MaLHP`),
  ADD CONSTRAINT `chamthi_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `coithi`
--
ALTER TABLE `coithi`
  ADD CONSTRAINT `coithi_ibfk_1` FOREIGN KEY (`MaLopHP`) REFERENCES `lophp` (`MaLHP`),
  ADD CONSTRAINT `coithi_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `covanht`
--
ALTER TABLE `covanht`
  ADD CONSTRAINT `covanht_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `covanht_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `ctkhgiangday`
--
ALTER TABLE `ctkhgiangday`
  ADD CONSTRAINT `ctkhgiangday_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `ctkhgiangday_ibfk_2` FOREIGN KEY (`MaLopHP`) REFERENCES `lophp` (`MaLHP`);

--
-- Các ràng buộc cho bảng `ctkhgvcovanht`
--
ALTER TABLE `ctkhgvcovanht`
  ADD CONSTRAINT `ctkhgvcovanht_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `ctkhhuongdandalv`
--
ALTER TABLE `ctkhhuongdandalv`
  ADD CONSTRAINT `ctkhhuongdandalv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `ctkhhuongdandalv_ibfk_2` FOREIGN KEY (`MaDLV`) REFERENCES `doanlv` (`MaDLV`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaDV`) REFERENCES `donvi` (`MaDV`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`),
  ADD CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`Username`) REFERENCES `dangnhap` (`UserName`),
  ADD CONSTRAINT `giangvien_ibfk_4` FOREIGN KEY (`MaNgach`) REFERENCES `ngach` (`MaNgach`);

--
-- Các ràng buộc cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  ADD CONSTRAINT `hoidong_ibfk_1` FOREIGN KEY (`MaDTLV`) REFERENCES `doanlv` (`MaDLV`);

--
-- Các ràng buộc cho bảng `khcongtacgv`
--
ALTER TABLE `khcongtacgv`
  ADD CONSTRAINT `khcongtacgv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `khgiangday`
--
ALTER TABLE `khgiangday`
  ADD CONSTRAINT `khgiangday_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Các ràng buộc cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD CONSTRAINT `lophp_ibfk_1` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khoa` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

