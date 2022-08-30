-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2022 lúc 01:22 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dblaptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `loaisp` varchar(50) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (1, 'Nike Sportswear Max90', 'giay', '230000', 'Women''s Shoes', 'sp1.png');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (2, 'Men''s Jordan NBA Game Jacket', 'ao', '1939000', 'All-Star Edition', 'sp2.png');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (3, 'Zion', 'ao', '1471000', 'Men''s Hoodie', 'sp3.png');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (4, 'Jordan Sport DNA', 'giay', '1400000', 'Men''s Mesh Shorts', 'sp4.png');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (5, 'Polo Shirt', 'ao', '450000', 'MEN AIRism Pique', 'sp5.jpg');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (6, 'Stand Collar Short Sleeve Shirt', 'ao', '584000', 'MEN', 'sp6.png');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (7, 'Smart Shorts', 'quan', '489000', 'WOMEN', 'sp7.jpg');
INSERT INTO `sanpham` (`masp`, `tensp`, `loaisp`, `gia`, `mota`, `imgURL`) VALUES (8, 'Pocketable Parka', 'ao', '1275000', 'MEN', 'sp8.png');

--
-- Cấu trúc bảng cho bảng `tble_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tble_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES(1, 'shopabc@gmail.com', '123456789', 'shopabc');


--
-- Chỉ mục cho các bảng đã đổ
--

-- Indexes for table `tbl_admin`

ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);


--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
