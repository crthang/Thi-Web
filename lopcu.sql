-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2017 lúc 09:55 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptudweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopcu`
--

CREATE TABLE `lopcu` (
  `id` int(11) NOT NULL,
  `maThanhVien` varchar(255) DEFAULT NULL,
  `hoVaTen` varchar(100) DEFAULT NULL,
  `bietHieu` varchar(255) DEFAULT NULL,
  `matKhau` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dienThoai` varchar(255) DEFAULT NULL,
  `diaChi` varchar(255) DEFAULT NULL,
  `noiLamViec` varchar(255) DEFAULT NULL,
  `chucVu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lopcu`
--

INSERT INTO `lopcu` (`id`, `maThanhVien`, `hoVaTen`, `bietHieu`, `matKhau`, `email`, `dienThoai`, `diaChi`, `noiLamViec`, `chucVu`) VALUES
(8, '11111111111', 'nguyen van a', 'a', '123456', 'nguyenvana.117@gmail.com', '011111111111', 'Ha noi', 'Ha noi', 'Lop truong'),
(9, '2222222222', 'nguyen van b', 'b', '123456', 'nguyenvanb.117@gmail.com', '02222222222', 'Ha noi', 'Ha noi', 'Thanh vien'),
(10, '3333333333', 'nguyen van c', 'c', '123456', 'nguyenvanc.117@gmail.com', '03333333333', 'Ha noi', 'Ha noi', 'Thanh vien'),
(11, '4444444444', 'nguyen van d', 'd', '123456', 'nguyenvand.117@gmail.com', '04444444444', 'Ha noi', 'Ha noi', 'Thanh vien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lopcu`
--
ALTER TABLE `lopcu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lopcu`
--
ALTER TABLE `lopcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
