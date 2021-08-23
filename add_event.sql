-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 08:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `descriptions` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(5) NOT NULL,
  `location` varchar(20) NOT NULL,
  `manage_by` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `name`, `descriptions`, `date`, `time`, `location`, `manage_by`, `file`) VALUES
(49, 'MSS Admission', 'MSS Batch 47 admission start', '2021-08-26', '09:00:00.00000', 'Campus', 'Asad', 'error.PNG'),
(50, 'Election', 'student election day', '2021-09-24', '11:45:00.00000', 'Aditoriam', 'maruf', 'images.jpg'),
(51, 'Sports games', 'sports', '2021-10-19', '10:30:00.00000', 'Our school', 'Islam yearul', 'sports.jpg'),
(52, 'Charity events and fundraisers', 'Charity events and fundraisers', '2021-11-30', '11:34:00.00000', 'Our school', 'Rifat', 'chariti.jpg'),
(53, 'Covid-19 Vaccine donate', 'Covid-19 Vaccine donate', '2021-09-09', '10:00:00.00000', 'School aditoriam', 'Maruf', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
