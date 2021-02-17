-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 11:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `59241204025-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bike`
--

CREATE TABLE `tb_bike` (
  `bike_id` int(11) NOT NULL,
  `bike_photo` varchar(200) COLLATE utf8_bin NOT NULL,
  `bike_brand` varchar(200) COLLATE utf8_bin NOT NULL,
  `bike_price` varchar(200) COLLATE utf8_bin NOT NULL,
  `bike_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bike_type`
--

CREATE TABLE `tb_bike_type` (
  `bike_type_id` int(11) NOT NULL,
  `bike_type_name` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `car_id` int(11) NOT NULL,
  `car_brand` varchar(200) COLLATE utf8_bin NOT NULL,
  `car_gen` varchar(200) COLLATE utf8_bin NOT NULL,
  `car_price` int(11) NOT NULL,
  `car_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gbook`
--

CREATE TABLE `tb_gbook` (
  `gbook_id` int(11) NOT NULL,
  `gbook_text` varchar(200) COLLATE utf8_bin NOT NULL,
  `gbook_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `gbook_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_movies`
--

CREATE TABLE `tb_movies` (
  `movies_id` int(11) NOT NULL,
  `movies_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `movies_price` varchar(200) COLLATE utf8_bin NOT NULL,
  `movies_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_photo`
--

CREATE TABLE `tb_photo` (
  `photo_id` int(11) NOT NULL,
  `photo` varchar(200) COLLATE utf8_bin NOT NULL,
  `photo_cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_photo_cate`
--

CREATE TABLE `tb_photo_cate` (
  `photo_cate_id` int(11) NOT NULL,
  `photo_cate_name` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tch`
--

CREATE TABLE `tb_tch` (
  `tch_id` int(11) NOT NULL,
  `tch_text` varchar(200) COLLATE utf8_bin NOT NULL,
  `tch_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `tch_lastname` varchar(200) COLLATE utf8_bin NOT NULL,
  `tch_age` int(11) NOT NULL,
  `tch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bike`
--
ALTER TABLE `tb_bike`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indexes for table `tb_bike_type`
--
ALTER TABLE `tb_bike_type`
  ADD PRIMARY KEY (`bike_type_id`);

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tb_gbook`
--
ALTER TABLE `tb_gbook`
  ADD PRIMARY KEY (`gbook_id`);

--
-- Indexes for table `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tb_photo_cate`
--
ALTER TABLE `tb_photo_cate`
  ADD PRIMARY KEY (`photo_cate_id`);

--
-- Indexes for table `tb_tch`
--
ALTER TABLE `tb_tch`
  ADD PRIMARY KEY (`tch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bike`
--
ALTER TABLE `tb_bike`
  MODIFY `bike_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bike_type`
--
ALTER TABLE `tb_bike_type`
  MODIFY `bike_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gbook`
--
ALTER TABLE `tb_gbook`
  MODIFY `gbook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_photo`
--
ALTER TABLE `tb_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_photo_cate`
--
ALTER TABLE `tb_photo_cate`
  MODIFY `photo_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tch`
--
ALTER TABLE `tb_tch`
  MODIFY `tch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
