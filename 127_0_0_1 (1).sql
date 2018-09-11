-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 08:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudtwo`
--
CREATE DATABASE IF NOT EXISTS `crudtwo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crudtwo`;

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
-- Table structure for table `tbl_invoice_item`
--

CREATE TABLE `tbl_invoice_item` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `warranty` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serial`
--

CREATE TABLE `tbl_serial` (
  `id` int(11) NOT NULL,
  `code` varchar(40) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_serial`
--

INSERT INTO `tbl_serial` (`id`, `code`, `serial`) VALUES
(1, 'student', 0),
(2, 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `studetn_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `age`, `delete_status`, `email`, `studetn_code`) VALUES
(1, 'Jame2414', 33, 0, 'asasasa', 0),
(2, 'Jim', 23, 0, 'asasasas', 0),
(3, 'Raj', 23, 0, 'asasasa', 0),
(4, 'lakitha', 0, 0, 'asasas', 4),
(5, 'laki', 12, 0, 'asasas', 5),
(6, 'sdf', 0, 0, 'sfsf', 6),
(7, 'adada', 22, 0, 'qwerty@gmail.com', 7),
(8, 'aSDasd', 11, 0, 'sdfsf@kk.lk', 8),
(9, 'SasS', 22, 0, 'LKKKK@JJ.CLM', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_invoice_item`
--
ALTER TABLE `tbl_invoice_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
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
--
-- AUTO_INCREMENT for table `tbl_invoice_item`
--
ALTER TABLE `tbl_invoice_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;--
-- Database: `db_authenticate`
--
CREATE DATABASE IF NOT EXISTS `db_authenticate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_authenticate`;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `db_ewis`
--
CREATE DATABASE IF NOT EXISTS `db_ewis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ewis`;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `marked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `regno`, `date`, `status`, `marked`) VALUES
(22, '201802', '2018-04-28', 'Present', 1),
(23, '201801', '2018-04-28', 'Absent', 1),
(24, '201802', '2018-04-30', 'Present', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch_name`, `start_date`, `end_date`) VALUES
(1, 'Mid', '2018-04-07', '2018-05-15'),
(2, 'January', '2018-01-08', '2018-06-09'),
(3, 'late_april', '2018-04-15', '2018-07-15'),
(4, 'June', '2018-05-28', '2018-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_regno` varchar(15) NOT NULL,
  `status` text NOT NULL,
  `module1` int(11) NOT NULL,
  `module2` int(11) NOT NULL,
  `module3` int(11) NOT NULL,
  `module4` int(11) NOT NULL,
  `batch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_regno`, `status`, `module1`, `module2`, `module3`, `module4`, `batch`) VALUES
(1, '201801', 'Pass', 64, 54, 24, 12, 'January'),
(2, '201802', 'Pass', 64, 54, 24, 50, 'Mid');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stdname` text NOT NULL,
  `address` varchar(80) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `birthday` date NOT NULL,
  `regno` varchar(10) NOT NULL,
  `regdate` date NOT NULL,
  `batch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stdname`, `address`, `nic`, `gender`, `birthday`, `regno`, `regdate`, `batch`) VALUES
(12, 'Test 0', 'Kaluthara', '954665412V', 'female', '1995-10-10', '201802', '2018-03-23', 'mid batch'),
(15, 'Test 1', 'Colombo', '9546365412V', 'female', '1995-10-10', '201801', '2018-03-23', 'mid batch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'neesha', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `db_sat`
--
CREATE DATABASE IF NOT EXISTS `db_sat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sat`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(40) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `brandname`, `comment`) VALUES
(1, 'Asus', ''),
(2, 'Corsiar', ''),
(3, 'Logitech', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` double NOT NULL,
  `customer` int(11) NOT NULL,
  `type` text NOT NULL,
  `notes` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `date`, `total`, `customer`, `type`, `notes`) VALUES
(1, '2018-02-18', 15000, 0, '', 'Sample note');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_item`
--

CREATE TABLE `tbl_invoice_item` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `warranty` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice_item`
--

INSERT INTO `tbl_invoice_item` (`id`, `invoice_id`, `item_id`, `warranty`, `quantity`, `unit_price`, `total_price`) VALUES
(1, 1, 2, '0', 10, 500, 5000),
(2, 1, 1, '0', 1, 0, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_serial` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `delete_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `name`, `description`, `item_type`, `quantity`, `item_serial`, `brand`, `delete_status`) VALUES
(1, 'Corsiar Vengence 16GB (8*2) Kit', '2400 MHz DDR4', 'Ram', 6, 1, 'Corsiar', 0),
(2, 'Asus Rog Strix GTX 1060 6GB VGA', '6 GB , Triple Fan', 'VGA', 5, 2, 'Asus', 0),
(3, 'Spec 04 Casing', '3 year warranty', 'Casing', 15, 3, 'Corsiar', 0),
(4, 'Z170 pro gaming', '3 year warranty', 'Mother board', 5, 4, 'Asus', 0),
(5, 'Logitech G502 Proteus Spectrum Mouse', '3 year warranty', 'Mouse', 10, 5, 'Logitech', 0),
(6, 'Logitech G105 Gaming Key Board', '3 year warranty', 'Key Board', 10, 6, 'Logitech', 0),
(7, 'Corsiar Carbide Spec 03', '2 year warranty', 'Casing', 10, 7, 'Corsiar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_type`
--

CREATE TABLE `tbl_item_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `delete_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_type`
--

INSERT INTO `tbl_item_type` (`id`, `name`, `delete_status`) VALUES
(3, 'Casing', 0),
(10, 'Key Board', 0),
(4, 'Monitor', 0),
(12, 'Mother board', 0),
(6, 'Motherboard', 1),
(7, 'Mouse', 0),
(11, 'Mouse Pad', 0),
(5, 'Power Supply', 0),
(8, 'Printer', 0),
(1, 'Ram', 0),
(9, 'Scanner', 0),
(2, 'VGA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `creator` int(11) NOT NULL,
  `role_serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rolepermission`
--

CREATE TABLE `tbl_rolepermission` (
  `id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `permissionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serial`
--

CREATE TABLE `tbl_serial` (
  `id` int(11) NOT NULL,
  `entity_name` varchar(30) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_serial`
--

INSERT INTO `tbl_serial` (`id`, `entity_name`, `serial`) VALUES
(1, 'supplier', 1),
(2, 'item', 7),
(3, 'role', 0),
(4, 'user', 0),
(5, 'itemType', 12),
(6, 'invoice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(70) NOT NULL,
  `business_registrationid` int(11) NOT NULL,
  `fax` varchar(12) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `date_added` date NOT NULL,
  `supplier_serial` int(11) NOT NULL,
  `delete_status` tinyint(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `credit_period_days` int(11) NOT NULL,
  `credit_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `name`, `address`, `business_registrationid`, `fax`, `telephone`, `date_added`, `supplier_serial`, `delete_status`, `email`, `credit_period_days`, `credit_amount`) VALUES
(1, 'New supplier', 'Colombo 04', 0, '12312312', '1231231231', '2018-01-31', 1, 0, 'qwerty@gmail.com', 45, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_contact`
--

CREATE TABLE `tbl_supplier_contact` (
  `id` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `contact_person_name` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `extension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier_contact`
--

INSERT INTO `tbl_supplier_contact` (`id`, `supplierid`, `contact_person_name`, `mobile`, `email`, `telephone`, `extension`) VALUES
(1, 1, 'New Contact Person', 711234567, 'contact@contact.com', '1231231231', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_credit`
--

CREATE TABLE `tbl_supplier_credit` (
  `id` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `credit_amount` int(11) NOT NULL,
  `credit_period` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_item`
--

CREATE TABLE `tbl_supplier_item` (
  `id` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `unitprice` double NOT NULL,
  `discount` double NOT NULL,
  `max_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `empid` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_serial` int(11) NOT NULL,
  `delete_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `empid`, `password`, `user_serial`, `delete_status`) VALUES
(1, 'Lakitha', 0, '123', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userrole`
--

CREATE TABLE `tbl_userrole` (
  `id` int(11) NOT NULL,
  `roleid` int(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brandname` (`brandname`),
  ADD KEY `brandname_2` (`brandname`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice_item`
--
ALTER TABLE `tbl_invoice_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_type` (`item_type`),
  ADD KEY `item_type_2` (`item_type`);

--
-- Indexes for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rolepermission`
--
ALTER TABLE `tbl_rolepermission`
  ADD PRIMARY KEY (`id`,`roleid`,`permissionid`),
  ADD KEY `permissionid` (`permissionid`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier_contact`
--
ALTER TABLE `tbl_supplier_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplierid` (`supplierid`);

--
-- Indexes for table `tbl_supplier_credit`
--
ALTER TABLE `tbl_supplier_credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplierid` (`supplierid`);

--
-- Indexes for table `tbl_supplier_item`
--
ALTER TABLE `tbl_supplier_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplierid` (`supplierid`),
  ADD KEY `supplierid_2` (`supplierid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_userrole`
--
ALTER TABLE `tbl_userrole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleid` (`roleid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_invoice_item`
--
ALTER TABLE `tbl_invoice_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rolepermission`
--
ALTER TABLE `tbl_rolepermission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_supplier_contact`
--
ALTER TABLE `tbl_supplier_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_supplier_credit`
--
ALTER TABLE `tbl_supplier_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_supplier_item`
--
ALTER TABLE `tbl_supplier_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_userrole`
--
ALTER TABLE `tbl_userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_ibfk_1` FOREIGN KEY (`item_type`) REFERENCES `tbl_item_type` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rolepermission`
--
ALTER TABLE `tbl_rolepermission`
  ADD CONSTRAINT `tbl_rolepermission_ibfk_1` FOREIGN KEY (`permissionid`) REFERENCES `tbl_permission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_rolepermission_ibfk_2` FOREIGN KEY (`roleid`) REFERENCES `tbl_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_supplier_contact`
--
ALTER TABLE `tbl_supplier_contact`
  ADD CONSTRAINT `tbl_supplier_contact_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `tbl_supplier` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_supplier_credit`
--
ALTER TABLE `tbl_supplier_credit`
  ADD CONSTRAINT `tbl_supplier_credit_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `tbl_supplier` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_supplier_item`
--
ALTER TABLE `tbl_supplier_item`
  ADD CONSTRAINT `tbl_supplier_item_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `tbl_supplier` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_supplier_item_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `tbl_item` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_userrole`
--
ALTER TABLE `tbl_userrole`
  ADD CONSTRAINT `tbl_userrole_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `tbl_role` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_userrole_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `tbl_user` (`id`) ON UPDATE CASCADE;
--
-- Database: `ewis`
--
CREATE DATABASE IF NOT EXISTS `ewis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ewis`;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `marked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `regno`, `date`, `status`, `marked`) VALUES
(22, '201802', '2018-04-28', 'Present', 1),
(23, '201801', '2018-04-28', 'Absent', 1),
(24, '201802', '2018-04-29', 'Present', 1),
(25, '201801', '2018-04-29', 'Absent', 1),
(26, 'EW18043010', '2018-04-30', 'Present', 1),
(27, 'EW18043010', '2018-05-07', 'Present', 1),
(28, '201801', '2018-05-07', 'Absent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch_name`, `start_date`, `end_date`) VALUES
(1, 'Mid', '2018-04-07', '2018-05-15'),
(2, 'January', '2018-01-08', '2018-06-09'),
(3, 'late_april', '2018-04-15', '2018-07-15'),
(4, 'June', '2018-05-28', '2018-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_regno` varchar(15) NOT NULL,
  `status` text NOT NULL,
  `module1` int(11) NOT NULL,
  `module2` int(11) NOT NULL,
  `module3` int(11) NOT NULL,
  `module4` int(11) NOT NULL,
  `batch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_regno`, `status`, `module1`, `module2`, `module3`, `module4`, `batch`) VALUES
(1, '201801', 'Pass', 64, 54, 24, 12, 'January'),
(2, '201802', 'Pass', 64, 54, 24, 50, 'Mid');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stdname` text NOT NULL,
  `address` varchar(80) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `birthday` date NOT NULL,
  `regno` varchar(10) NOT NULL,
  `regdate` date NOT NULL,
  `batch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stdname`, `address`, `nic`, `gender`, `birthday`, `regno`, `regdate`, `batch`) VALUES
(12, 'Test 12', 'Kaluthara', '954665412V', 'female', '1995-10-11', '201802', '2018-03-23', 'mid batch'),
(15, 'Test 1', 'Colombo', '9546365412V', 'female', '1995-10-10', '201801', '2018-03-23', 'mid batch'),
(16, 'Sample', 'Kaluthara', '953654552V', 'female', '1995-05-03', 'EW18043010', '2018-04-30', 'mid batch'),
(17, 'test', 'Colombo 04', '954665412V', 'male', '1995-10-10', 'EW18043011', '2018-04-30', 'Mid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'neesha', '123', 'user'),
(2, 'Admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\",\"full_screen\":\"on\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ewis\",\"table\":\"batch\"},{\"db\":\"ewis\",\"table\":\"student\"},{\"db\":\"ewis\",\"table\":\"attendence\"},{\"db\":\"db_authenticate\",\"table\":\"tbl_authorization\"},{\"db\":\"db_authenticate\",\"table\":\"tbl_user\"},{\"db\":\"db_authenticate\",\"table\":\"tbl_controller_method\"},{\"db\":\"ewis\",\"table\":\"user\"},{\"db\":\"ewis\",\"table\":\"marks\"},{\"db\":\"db_ewis\",\"table\":\"user\"},{\"db\":\"db_ewis\",\"table\":\"marks\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'crudtwo', 'tbl_student', '{\"sorted_col\":\"`tbl_student`.`studetn_code`  ASC\"}', '2017-09-23 18:13:00'),
('root', 'crudtwo', 'tbl_user', '{\"sorted_col\":\"`tbl_user`.`id`  ASC\"}', '2017-06-12 19:20:05'),
('root', 'db_sat', 'tbl_serial', '{\"sorted_col\":\"`tbl_serial`.`id`  ASC\"}', '2018-02-18 13:11:41'),
('root', 'ewis', 'attendence', '{\"sorted_col\":\"`attendence`.`status` ASC\"}', '2018-04-28 22:13:46'),
('root', 'ewis', 'marks', '{\"sorted_col\":\"`marks`.`student_regno` ASC\"}', '2018-04-28 05:07:34'),
('root', 'ewis', 'student', '{\"sorted_col\":\"`student`.`regno`  DESC\"}', '2018-04-29 20:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-04-09 15:57:22', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
