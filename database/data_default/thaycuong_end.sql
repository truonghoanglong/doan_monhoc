-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2021 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thaycuong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Ma_Admin` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Tai_Khoan` varchar(255) NOT NULL,
  `Mat_Khau` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `Dia_Chi` varchar(255) NOT NULL,
  `Gioi_Tinh` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `Ma_Donhang` int(11) NOT NULL,
  `Ma_DVCH` int(11) NOT NULL,
  `Ma_Dangbai` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `Ngay_Dat` datetime NOT NULL,
  `KH_Chapnhandon` bit(2) NOT NULL,
  `Time_Nhandon` datetime NOT NULL,
  `KH_Hoanthanh` bit(2) NOT NULL,
  `Time_Hoanthanh` datetime NOT NULL,
  `Ghi_chu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvicuuho`
--

CREATE TABLE `donvicuuho` (
  `Ma_DVCH` int(11) NOT NULL,
  `Ten_DVCH` varchar(255) NOT NULL,
  `Dia_Chi` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `Nghiep_Vu` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Trang_Thai` bit(2) NOT NULL,
  `Giay_Phep_Kinh_Doanh` varchar(255) NOT NULL,
  `Mat_Khau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Ma_KH` int(11) NOT NULL,
  `Ten_KH` varchar(255) NOT NULL,
  `Mat_Khau` varchar(255) NOT NULL,
  `Dia_Chi` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CMND` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindangbai`
--

CREATE TABLE `thongtindangbai` (
  `Ma_Dangbai` int(11) NOT NULL,
  `Ma_KH` int(11) NOT NULL,
  `Motathongtin` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `Ngay_DangBai` datetime NOT NULL,
  `Diadiem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ma_Admin`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD KEY `Ma_Dangbai` (`Ma_Dangbai`),
  ADD KEY `Ma_DVCH` (`Ma_DVCH`);

--
-- Chỉ mục cho bảng `donvicuuho`
--
ALTER TABLE `donvicuuho`
  ADD PRIMARY KEY (`Ma_DVCH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Ma_KH`);

--
-- Chỉ mục cho bảng `thongtindangbai`
--
ALTER TABLE `thongtindangbai`
  ADD PRIMARY KEY (`Ma_Dangbai`),
  ADD KEY `Ma_KH` (`Ma_KH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`Ma_DVCH`) REFERENCES `donvicuuho` (`Ma_DVCH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`Ma_Dangbai`) REFERENCES `thongtindangbai` (`Ma_Dangbai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thongtindangbai`
--
ALTER TABLE `thongtindangbai`
  ADD CONSTRAINT `thongtindangbai_ibfk_1` FOREIGN KEY (`Ma_KH`) REFERENCES `khachhang` (`Ma_KH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
