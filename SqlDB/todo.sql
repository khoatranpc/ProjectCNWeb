-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 08:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `inforuser`
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
-- Dumping data for table `inforuser`
--

INSERT INTO `inforuser` (`IDuser`, `Hoten`, `Gioitinh`, `Ngaysinh`, `Hinhanh`, `SDT`, `Email`, `acc`) VALUES
(1, 'Tran Dang Khoa', 'Nam', '2001-12-21', 'img', 12345, 'khoa@gmail.com', 'khoa'),
(2, 'huong', 'Nữ', '2001-07-23', 'img', 2631, 'huong@gmail.com', 'khoahuong'),
(3, 'Trần Đăng Khoa', 'nam', '2021-11-03', 'hinhanhcuatui', 353923603, 'abc@gmaill.com', 'test1'),
(5, 'Trần Đăng Khoa', 'nu', '2021-11-03', 'hinhanhcuatui', 353923603, 'khoatranpc603@moet.edu.vn', 'test2'),
(6, 'Hàng sắp về', 'nu', '2021-11-03', 'hinhanhcuatui', 353923603, 'khoatranpc603@moet.edu.vn', 'test3'),
(7, 'Trần Đăng Khoa', 'nu', '2021-11-03', 'https://www.imgacademy.com/themes/custom/imgacademy/images/helpbox-contact.jpg', 353923603, 'TNT@email.com', 'test4'),
(8, 'Trần Đăng Khoa', 'nu', '2021-11-03', 'https://www.imgacademy.com/themes/custom/imgacademy/images/helpbox-contact.jpg', 353923603, 'khoatranpc603@moet.edu.vn', 'qwe'),
(9, 'Người dùng mới', 'nu', '2021-11-04', 'aaâ', 389922221, 'khoatranpc603@gmail.com', 'ngdung12'),
(10, 'Trần Đăng Khoa', 'nam', '2021-11-04', 'hinhanhcuatui', 353923603, 'bluepan2206@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Idschedule` int(11) NOT NULL,
  `Nameschedule` text NOT NULL,
  `Thoigian` datetime NOT NULL,
  `IDuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Idschedule`, `Nameschedule`, `Thoigian`, `IDuser`) VALUES
(1, 'Đi học về nấu cơm', '2021-12-31 23:59:59', 1),
(2, 'Về nhà để tắm', '2019-02-25 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `role` int(11) NOT NULL DEFAULT 1,
  `acc` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`role`, `acc`, `password`) VALUES
(2, 'admin', '1'),
(1, 'khoa', '123'),
(1, 'khoahuong', '123'),
(1, 'myacc', '567'),
(1, 'ngdung12', '3333'),
(1, 'qwe', '2d122ww'),
(1, 'test', '222'),
(1, 'test1', '1232'),
(1, 'test2', '123'),
(1, 'test3', '2332'),
(1, 'test4', '12323231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inforuser`
--
ALTER TABLE `inforuser`
  ADD PRIMARY KEY (`IDuser`),
  ADD KEY `userwithacc` (`acc`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Idschedule`),
  ADD KEY `userwithschedule` (`IDuser`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`acc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inforuser`
--
ALTER TABLE `inforuser`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Idschedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inforuser`
--
ALTER TABLE `inforuser`
  ADD CONSTRAINT `userwithacc` FOREIGN KEY (`acc`) REFERENCES `useraccount` (`acc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `userwithschedule` FOREIGN KEY (`IDuser`) REFERENCES `inforuser` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
