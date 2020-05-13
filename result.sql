-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 11:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `full_name` text NOT NULL,
  `maths` int(5) NOT NULL,
  `english` int(5) NOT NULL,
  `urdu` int(5) NOT NULL,
  `isl` int(5) NOT NULL,
  `pst` int(5) NOT NULL,
  `obt_marks` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `roll_no`, `full_name`, `maths`, `english`, `urdu`, `isl`, `pst`, `obt_marks`, `total_marks`, `percentage`) VALUES
(1, 28015, 'Ali Jawwad', 75, 90, 80, 56, 82, 383, 500, '76.6%'),
(2, 894000, 'Aashir Asif', 82, 56, 59, 62, 89, 348, 500, '70%'),
(3, 456880, 'Amin Warind', 89, 62, 58, 66, 78, 353, 500, '71%'),
(4, 432534, 'Mohammad Hussain', 92, 45, 65, 67, 90, 325, 500, '73%'),
(5, 121232, 'Abdullah Jawaid', 99, 62, 53, 89, 63, 355, 500, '81%'),
(6, 32351, 'Mohammad Anas', 88, 75, 47, 65, 66, 290, 500, '68%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
