-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingnow`
--

CREATE TABLE `bookingnow` (
  `id_hall` int(10) NOT NULL,
  `name_hall` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `members` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingnow`
--

INSERT INTO `bookingnow` (`id_hall`, `name_hall`, `date`, `members`) VALUES
(13, 'Al-NumanHalls', '2022-09-01', '50'),
(16, 'Al-NumanHalls', '2022-09-23', '100'),
(17, 'Al-NumanHalls', '2022-09-23', '100'),
(18, 'Al-NumanHalls', '2022-09-22', '80'),
(19, 'Al-NumanHalls', '2022-09-22', '80'),
(20, 'Al-NumanHalls', '2022-09-24', '60'),
(21, 'Al-NumanHalls', '2022-09-23', '60'),
(22, 'Al-NumanHalls', '2022-09-30', '50'),
(23, 'Al-NumanHalls', '2022-09-30', '50'),
(24, 'Al-NumanHalls', '2022-09-30', '50'),
(26, 'Nowruzhalls', '2022-09-01', '99'),
(27, 'Al-NumanHalls', '2022-09-07', '5'),
(28, 'Al-NumanHalls', '2022-09-07', '5'),
(29, 'Al-NumanHalls', '2022-09-07', '5'),
(30, 'Nowruzhalls', '2022-09-29', '8'),
(32, 'Al-NumanHalls', '2022-09-23', '1'),
(33, 'Al-NumanHalls', '2022-09-23', '1'),
(34, 'Al-NumanHalls', '2022-09-23', '99'),
(35, 'Al-NumanHalls', '2022-09-23', '99');

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `book_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link_address` varchar(100) NOT NULL,
  `phone_number` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`book_id`, `name`, `price`, `address`, `image`, `link_address`, `phone_number`) VALUES
(1, 'Al-Numan halls', 1000, 'st. Wasfi Al Tal 178, Amman', 'Alnuman_photo1.jpg', 'https://goo.gl/maps/rzdT14ZPRy6VUFi86', '+962 7 9904 0220'),
(2, 'Nowruz halls', 1250.5, 'st. Al-Dahhak Bin Youssef, Amman', 'Nowruzhalls.png', 'https://maps.app.goo.gl/HBRK3V4EEpTkQSJS7', '+962 7 9640 4088');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `username`, `email`, `password`) VALUES
(2, 'mohammed', 'muwahed', 'm7med_saeed', '21110103@htu.edu.jo', '12345678'),
(6, 'mo', 'muwahed', 'mo_muwahed', 'mo_muwahed@gmail.com', '122345678'),
(8, 'moh', 'saeed', 'saeed', 'email@test.com', '123456789'),
(9, 'ra', ',l,', 'jhmhgh', 'vfvf@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingnow`
--
ALTER TABLE `bookingnow`
  ADD PRIMARY KEY (`id_hall`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingnow`
--
ALTER TABLE `bookingnow`
  MODIFY `id_hall` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
