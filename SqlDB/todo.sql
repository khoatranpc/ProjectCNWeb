-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 04:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `todo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inforuser`
--

CREATE TABLE `inforuser` (
  `IDuser` int(11) NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `Gioitinh` varchar(10) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Hinhanh` text NOT NULL,
  `SDT` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `acc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `inforuser`
--

INSERT INTO `inforuser` (`IDuser`, `Hoten`, `Gioitinh`, `Ngaysinh`, `Hinhanh`, `SDT`, `Email`, `acc`) VALUES
(1, 'Tran Dang Khoa', 'Nam', '2001-12-21', 'img', 12345, 'khoa@gmail.com', 'khoa'),
(2, 'huong', 'Nữ', '2001-07-23', 'img', 2631, 'huong@gmail.com', 'khoahuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `Idschedule` int(11) NOT NULL,
  `Nameschedule` text NOT NULL,
  `Thoigian` datetime NOT NULL,
  `IDuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`Idschedule`, `Nameschedule`, `Thoigian`, `IDuser`) VALUES
(1, 'Đi học về nấu cơm', '2021-12-31 23:59:59', 1),
(2, 'Về nhà để tắm', '2019-02-25 00:00:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useraccount`
--

CREATE TABLE `useraccount` (
  `role` int(11) NOT NULL DEFAULT 1,
  `acc` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `useraccount`
--

INSERT INTO `useraccount` (`role`, `acc`, `password`) VALUES
(1, 'khoa', '123'),
(1, 'khoahuong', '123'),
(1, 'myacc', '567');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `inforuser`
--
ALTER TABLE `inforuser`
  ADD PRIMARY KEY (`IDuser`),
  ADD KEY `userwithacc` (`acc`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Idschedule`),
  ADD KEY `userwithschedule` (`IDuser`);

--
-- Chỉ mục cho bảng `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`acc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `inforuser`
--
ALTER TABLE `inforuser`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Idschedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `inforuser`
--
ALTER TABLE `inforuser`
  ADD CONSTRAINT `userwithacc` FOREIGN KEY (`acc`) REFERENCES `useraccount` (`acc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `userwithschedule` FOREIGN KEY (`IDuser`) REFERENCES `inforuser` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
