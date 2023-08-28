-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 10:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpya`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekebisha`
--

CREATE TABLE `rekebisha` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekebisha`
--

INSERT INTO `rekebisha` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(6575, 'kjgjb', '96@sd', '564', '890'),
(6789, 'hjygu', 'ddfyugn@fhjk', '6789000', 'iokmnm9'),
(8475, 'Neema', 'neema@gmail.com', '84746383', '74847ryeb'),
(87585, 'jdjd', 'kecef@sdfg', '899595564', 'jckdcdk0696');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekebisha`
--
ALTER TABLE `rekebisha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekebisha`
--
ALTER TABLE `rekebisha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988995;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
