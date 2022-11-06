-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 04:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `English` int(20) NOT NULL,
  `Math` int(20) NOT NULL,
  `Physics` int(20) NOT NULL,
  `History` int(20) NOT NULL,
  `Art` int(20) NOT NULL,
  `Highest` int(20) NOT NULL,
  `Lowest` int(20) NOT NULL,
  `Total` int(20) NOT NULL,
  `Average` int(20) NOT NULL,
  `Grades` varchar(20) NOT NULL,
  `Rank` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Student_ID`, `Name`, `English`, `Math`, `Physics`, `History`, `Art`, `Highest`, `Lowest`, `Total`, `Average`, `Grades`, `Rank`) VALUES
(1, 202201, 'Dipra Das', 99, 98, 94, 95, 75, 95, 79, 584, 90, 'A++', 2),
(2, 202202, 'Nabil Jamal', 94, 94, 94, 95, 73, 95, 73, 596, 90, 'A+', 10),
(3, 202203, 'Kawser Hossain', 89, 98, 84, 94, 90, 98, 84, 599, 93, 'A+', 5),
(4, 202204, 'Juhi', 70, 78, 100, 96, 98, 100, 70, 604, 97, 'A+', 2),
(5, 202205, 'Body Sohel', 95, 68, 36, 58, 75, 95, 36, 475, 76, 'B', 58),
(11, 202206, 'Battu Uncle', 46, 64, 67, 75, 34, 97, 56, 35, 65, 'B', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
