-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2023 at 10:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genpassword`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int(2) NOT NULL,
  `length` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `length`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_password`
--

CREATE TABLE `tbl_password` (
  `id` int(11) NOT NULL,
  `device_name` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `site` varchar(100) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `pass1` varchar(50) NOT NULL,
  `pass2` varchar(100) NOT NULL,
  `raw` varchar(100) NOT NULL,
  `gen_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_password`
--
ALTER TABLE `tbl_password`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_password`
--
ALTER TABLE `tbl_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
