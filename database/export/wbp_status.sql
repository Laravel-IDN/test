-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2020 at 06:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapas`
--

-- --------------------------------------------------------

--
-- Table structure for table `wbp_status`
--

CREATE TABLE `wbp_status` (
  `id` int(11) NOT NULL,
  `wbp_id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `start_at` date NOT NULL,
  `end_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wbp_status`
--

INSERT INTO `wbp_status` (`id`, `wbp_id`, `keterangan`, `start_at`, `end_at`) VALUES
(1, 26, 'Perkelahian', '2020-02-04', '2020-02-20'),
(2, 27, 'Perkelahian', '2020-01-20', '2020-01-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wbp_status`
--
ALTER TABLE `wbp_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wbp_status`
--
ALTER TABLE `wbp_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
