-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 11:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_authenticate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authorization`
--

CREATE TABLE `tbl_authorization` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `controller_method_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_authorization`
--

INSERT INTO `tbl_authorization` (`id`, `user_id`, `controller_method_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_controller_method`
--

CREATE TABLE `tbl_controller_method` (
  `id` int(11) NOT NULL,
  `controller` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_controller_method`
--

INSERT INTO `tbl_controller_method` (`id`, `controller`, `method`) VALUES
(1, 'student', 'add'),
(2, 'student', 'edit'),
(3, 'course', 'delete'),
(4, 'course', 'edit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '123', 0),
(2, 'tom', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_authorization`
--
ALTER TABLE `tbl_authorization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_controller_method`
--
ALTER TABLE `tbl_controller_method`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_authorization`
--
ALTER TABLE `tbl_authorization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_controller_method`
--
ALTER TABLE `tbl_controller_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
