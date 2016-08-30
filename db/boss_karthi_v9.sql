-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 03:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boss_karthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_accssories`
--

CREATE TABLE IF NOT EXISTS `boss_master_accssories` (
`id` int(11) NOT NULL,
  `accessory_name` varchar(200) NOT NULL,
  `accessory_cost` float NOT NULL,
  `accessory_qty` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_accssories`
--

INSERT INTO `boss_master_accssories` (`id`, `accessory_name`, `accessory_cost`, `accessory_qty`, `status`, `date_created`, `date_modified`) VALUES
(1, 'Clamps', 10, 1, 1, '0000-00-00', '2016-08-23 11:34:09'),
(2, 'Pressure Clips', 20, 1, 1, '2016-08-09', '2016-08-09 11:38:47'),
(3, 'Pins', 25, 1, 1, '2016-08-09', '2016-08-09 11:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_extra_material`
--

CREATE TABLE IF NOT EXISTS `boss_master_extra_material` (
`id` int(11) NOT NULL,
  `extra_material_inch` float NOT NULL,
  `date_created` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_extra_material`
--

INSERT INTO `boss_master_extra_material` (`id`, `extra_material_inch`, `date_created`, `status`) VALUES
(1, 2.5, '2016-08-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_fixture_list`
--

CREATE TABLE IF NOT EXISTS `boss_master_fixture_list` (
`id` int(11) NOT NULL,
  `fixture_name` varchar(150) NOT NULL,
  `fixture_description` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_fixture_list`
--

INSERT INTO `boss_master_fixture_list` (`id`, `fixture_name`, `fixture_description`, `date_created`, `date_modified`, `status`) VALUES
(5, 'Selective Wave Fixture', 'This is test description for fixture select wave fixture', '2016-08-09', '2016-08-16 05:32:09', 1),
(6, 'Press Fit Fixture', 'this is test description for press fit fixture', '2016-08-09', '2016-08-16 05:32:34', 1),
(7, 'Fixture 3', 'this is a test description for fixture 3', '2016-08-16', '2016-08-23 12:01:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_markup`
--

CREATE TABLE IF NOT EXISTS `boss_master_markup` (
`id` int(11) NOT NULL,
  `markup_percentage` float NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_markup`
--

INSERT INTO `boss_master_markup` (`id`, `markup_percentage`, `date_created`, `status`) VALUES
(1, 40, '2016-08-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_tooling_material`
--

CREATE TABLE IF NOT EXISTS `boss_master_tooling_material` (
`id` bigint(20) NOT NULL,
  `material_name` varchar(200) NOT NULL,
  `material_description` text,
  `cost` float NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_tooling_material`
--

INSERT INTO `boss_master_tooling_material` (`id`, `material_name`, `material_description`, `cost`, `date_created`, `date_modified`, `status`) VALUES
(6, 'DUROSTONE ESD Black', 'test description123', 0.17, '2016-08-09', '2016-08-23 11:51:38', 1),
(7, 'G10', 'test description', 0.2, '2016-08-09', '2016-08-24 13:09:06', 1),
(8, 'DUROSTONE ESD Gray - 8mm', 'test description', 0.31, '2016-08-09', '2016-08-24 13:09:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_tooling_timing`
--

CREATE TABLE IF NOT EXISTS `boss_master_tooling_timing` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `design_complex` varchar(200) DEFAULT NULL,
  `cost` float NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_master_tooling_timing`
--

INSERT INTO `boss_master_tooling_timing` (`id`, `name`, `design_complex`, `cost`, `date_created`, `date_modified`, `status`) VALUES
(1, 'Design', 'Standard', 40, '2016-08-05', '2016-08-19 13:07:43', 1),
(2, 'Machine', 'Standard', 45, '2016-08-05', '2016-08-09 06:23:52', 1),
(3, 'Assembly', 'Standard', 40, '2016-08-05', '2016-08-09 06:58:39', 1),
(5, 'Design', 'Complex', 60, '2016-08-09', '2016-08-19 13:03:56', 1),
(6, 'Machine', 'Complex', 90, '2016-08-09', '2016-08-09 06:23:56', 1),
(7, 'Assembly', 'Complex', 60, '2016-08-09', '2016-08-09 06:24:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_quotes`
--

CREATE TABLE IF NOT EXISTS `boss_quotes` (
`id` bigint(20) NOT NULL,
  `email_id` varchar(75) NOT NULL,
  `engineer_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email_id_cc` varchar(250) DEFAULT NULL,
  `email_id_opt` varchar(50) DEFAULT NULL,
  `quote_ref` varchar(20) NOT NULL,
  `quote_status` tinyint(4) NOT NULL COMMENT '1-Tentative,2-Evalution,3-final',
  `stencil_exist` tinyint(4) NOT NULL,
  `tooling_exist` tinyint(4) NOT NULL,
  `notes` text,
  `quote_type` tinyint(4) NOT NULL COMMENT '0-standard quote,1- custom quote',
  `quote_ref_sub` char(2) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_quotes`
--

INSERT INTO `boss_quotes` (`id`, `email_id`, `engineer_id`, `company_id`, `customer_id`, `email_id_cc`, `email_id_opt`, `quote_ref`, `quote_status`, `stencil_exist`, `tooling_exist`, `notes`, `quote_type`, `quote_ref_sub`, `date_created`, `date_modified`, `status`) VALUES
(1, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '222tq001', 1, 0, 1, NULL, 0, '', '2016-08-30', '2016-08-30 10:34:42', 1),
(2, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '222tq001', 1, 0, 1, NULL, 0, '0', '2016-08-30', '2016-08-30 10:36:16', 1),
(3, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '222tq001', 1, 0, 1, NULL, 0, '1', '2016-08-30', '2016-08-30 10:59:52', 1),
(4, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '222tq002', 1, 0, 1, NULL, 0, '', '2016-08-30', '2016-08-30 12:32:39', 1),
(5, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '111tq001', 1, 0, 1, NULL, 0, '', '2016-08-30', '2016-08-30 12:38:22', 1),
(6, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '111tq002', 1, 0, 1, NULL, 0, '', '2016-08-30', '2016-08-30 12:41:17', 1),
(7, 'karthi@gmail.com', 2, 133, 133, ',', NULL, '111tq003', 1, 0, 1, NULL, 0, '', '2016-08-30', '2016-08-30 12:43:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_timing_time_other`
--

CREATE TABLE IF NOT EXISTS `boss_timing_time_other` (
`id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `other_time_cost` float NOT NULL,
  `other_std_hr` tinyint(4) NOT NULL,
  `other_std_min` tinyint(4) NOT NULL,
  `other_cpx_hr` tinyint(4) NOT NULL,
  `other_cpx_min` tinyint(4) NOT NULL,
  `other_total_cost` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_timing_time_other`
--

INSERT INTO `boss_timing_time_other` (`id`, `tooling_id`, `quote_id`, `other_time_cost`, `other_std_hr`, `other_std_min`, `other_cpx_hr`, `other_cpx_min`, `other_total_cost`, `status`, `date_created`, `date_modified`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 1, '2016-08-30', '2016-08-30 10:35:20'),
(2, 2, 2, 0, 0, 0, 0, 0, 0, 1, '2016-08-30', '2016-08-30 10:36:16'),
(3, 3, 3, 0, 0, 0, 0, 0, 0, 1, '2016-08-30', '2016-08-30 10:59:52'),
(4, 4, 4, 0, 0, 0, 0, 0, 0, 1, '2016-08-30', '2016-08-30 12:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling`
--

CREATE TABLE IF NOT EXISTS `boss_tooling` (
`tooling_id` bigint(20) NOT NULL,
  `quote_id` bigint(20) NOT NULL,
  `tooling_type` tinyint(1) NOT NULL,
  `tooling_description` text NOT NULL,
  `tooling_cost_wop` float NOT NULL,
  `premium_percentage` decimal(10,0) NOT NULL,
  `discount_percentage` decimal(10,0) NOT NULL,
  `premium_cost` double NOT NULL,
  `discount_cost` double NOT NULL,
  `tooling_cost_adp` float NOT NULL COMMENT 'tooling cost after discount and premium',
  `multiple_quote` int(11) NOT NULL,
  `multiple_quote_cost` double NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_tooling`
--

INSERT INTO `boss_tooling` (`tooling_id`, `quote_id`, `tooling_type`, `tooling_description`, `tooling_cost_wop`, `premium_percentage`, `discount_percentage`, `premium_cost`, `discount_cost`, `tooling_cost_adp`, `multiple_quote`, `multiple_quote_cost`, `date_created`, `date_modified`, `status`) VALUES
(1, 1, 0, '', 821.19, '10', '0', 82.11875, 0, 903.31, 1, 820, '2016-08-30', '2016-08-30 10:35:20', 1),
(2, 2, 0, '', 821.19, '10', '2', 82.11875, 16.42375, 886.88, 1, 820, '2016-08-30', '2016-08-30 10:36:16', 1),
(3, 3, 0, '', 910.44, '10', '2', 91.04375, 18.20875, 983.27, 1, 910, '2016-08-30', '2016-08-30 10:59:52', 1),
(4, 4, 0, '', 0, '0', '0', 0, 0, 0, 1, 0, '2016-08-30', '2016-08-30 12:35:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_accessory`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_accessory` (
`id` bigint(20) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `accessory_id` tinyint(4) NOT NULL,
  `acc_cost` float NOT NULL,
  `acc_qty` int(11) NOT NULL,
  `acc_total_cost` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_tooling_accessory`
--

INSERT INTO `boss_tooling_accessory` (`id`, `quote_id`, `tooling_id`, `accessory_id`, `acc_cost`, `acc_qty`, `acc_total_cost`, `status`, `date_created`, `date_modified`) VALUES
(1, 1, 1, 1, 10, 5, 50, 1, '2016-08-30', '2016-08-30 10:35:21'),
(2, 1, 1, 2, 20, 6, 120, 1, '2016-08-30', '2016-08-30 10:35:21'),
(3, 1, 1, 3, 25, 7, 175, 1, '2016-08-30', '2016-08-30 10:35:21'),
(4, 2, 2, 1, 10, 5, 50, 1, '2016-08-30', '2016-08-30 10:36:16'),
(5, 2, 2, 2, 20, 6, 120, 1, '2016-08-30', '2016-08-30 10:36:16'),
(6, 2, 2, 3, 25, 7, 175, 1, '2016-08-30', '2016-08-30 10:36:16'),
(7, 3, 3, 1, 10, 5, 50, 1, '2016-08-30', '2016-08-30 10:59:52'),
(8, 3, 3, 2, 20, 6, 120, 1, '2016-08-30', '2016-08-30 10:59:52'),
(9, 3, 3, 3, 25, 7, 175, 1, '2016-08-30', '2016-08-30 10:59:52'),
(10, 4, 4, 1, 10, 0, 0, 1, '2016-08-30', '2016-08-30 12:35:45'),
(11, 4, 4, 2, 20, 0, 0, 1, '2016-08-30', '2016-08-30 12:35:45'),
(12, 4, 4, 3, 25, 0, 0, 1, '2016-08-30', '2016-08-30 12:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_accessory_extra`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_accessory_extra` (
`id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `extra_acc_name` varchar(200) NOT NULL,
  `extra_acc_price` float NOT NULL,
  `extra_acc_qty` int(11) NOT NULL,
  `extra_acc_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_extra`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_extra` (
`id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `material_name` varchar(250) NOT NULL,
  `material_cost` float NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_material`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_material` (
`id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `size_x` float NOT NULL,
  `size_y` float NOT NULL,
  `markup` int(11) NOT NULL,
  `extra_material` float NOT NULL,
  `cost` float NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_tooling_material`
--

INSERT INTO `boss_tooling_material` (`id`, `quote_id`, `tooling_id`, `material_id`, `size_x`, `size_y`, `markup`, `extra_material`, `cost`, `date_created`, `date_modified`, `status`) VALUES
(1, 1, 1, 6, 10, 50, 40, 2.5, 156.188, '2016-08-30', '2016-08-30 10:35:20', 1),
(2, 2, 2, 6, 10, 50, 40, 2.5, 156.188, '2016-08-30', '2016-08-30 10:36:16', 1),
(3, 3, 3, 6, 10, 80, 40, 2.5, 245.438, '2016-08-30', '2016-08-30 10:59:52', 1),
(4, 4, 4, 6, 0, 0, 40, 2.5, 0, '2016-08-30', '2016-08-30 12:35:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_time`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_time` (
`id` int(11) NOT NULL,
  `tooling_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `std_des_hr` float NOT NULL,
  `std_des_min` float NOT NULL,
  `cpx_des_hr` float NOT NULL,
  `cpx_des_min` float NOT NULL,
  `std_ass_hr` float NOT NULL,
  `std_ass_min` float NOT NULL,
  `cpx_ass_hr` float NOT NULL,
  `cpx_ass_min` float NOT NULL,
  `std_mac_hr` float NOT NULL,
  `std_mac_min` float NOT NULL,
  `cpx_mac_hr` float NOT NULL,
  `cpx_mac_min` float NOT NULL,
  `total_design_cost` float NOT NULL,
  `total_machine_cost` float NOT NULL,
  `total_assembly_cost` float NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_tooling_time`
--

INSERT INTO `boss_tooling_time` (`id`, `tooling_id`, `quote_id`, `std_des_hr`, `std_des_min`, `cpx_des_hr`, `cpx_des_min`, `std_ass_hr`, `std_ass_min`, `cpx_ass_hr`, `cpx_ass_min`, `std_mac_hr`, `std_mac_min`, `cpx_mac_hr`, `cpx_mac_min`, `total_design_cost`, `total_machine_cost`, `total_assembly_cost`, `date_created`, `date_modified`, `status`) VALUES
(1, 1, 1, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 200, 0, 120, '2016-08-30', '2016-08-30 10:35:20', 1),
(2, 2, 2, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 200, 0, 120, '2016-08-30', '2016-08-30 10:36:16', 1),
(3, 3, 3, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 200, 0, 120, '2016-08-30', '2016-08-30 10:59:52', 1),
(4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-08-30', '2016-08-30 12:35:45', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boss_master_accssories`
--
ALTER TABLE `boss_master_accssories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_master_extra_material`
--
ALTER TABLE `boss_master_extra_material`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_master_fixture_list`
--
ALTER TABLE `boss_master_fixture_list`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_master_markup`
--
ALTER TABLE `boss_master_markup`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `boss_master_tooling_material`
--
ALTER TABLE `boss_master_tooling_material`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_master_tooling_timing`
--
ALTER TABLE `boss_master_tooling_timing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_quotes`
--
ALTER TABLE `boss_quotes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_timing_time_other`
--
ALTER TABLE `boss_timing_time_other`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling`
--
ALTER TABLE `boss_tooling`
 ADD PRIMARY KEY (`tooling_id`), ADD UNIQUE KEY `id` (`tooling_id`);

--
-- Indexes for table `boss_tooling_accessory`
--
ALTER TABLE `boss_tooling_accessory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling_accessory_extra`
--
ALTER TABLE `boss_tooling_accessory_extra`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling_extra`
--
ALTER TABLE `boss_tooling_extra`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling_material`
--
ALTER TABLE `boss_tooling_material`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling_time`
--
ALTER TABLE `boss_tooling_time`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boss_master_accssories`
--
ALTER TABLE `boss_master_accssories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `boss_master_extra_material`
--
ALTER TABLE `boss_master_extra_material`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `boss_master_fixture_list`
--
ALTER TABLE `boss_master_fixture_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `boss_master_markup`
--
ALTER TABLE `boss_master_markup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `boss_master_tooling_material`
--
ALTER TABLE `boss_master_tooling_material`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `boss_master_tooling_timing`
--
ALTER TABLE `boss_master_tooling_timing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `boss_quotes`
--
ALTER TABLE `boss_quotes`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `boss_timing_time_other`
--
ALTER TABLE `boss_timing_time_other`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `boss_tooling`
--
ALTER TABLE `boss_tooling`
MODIFY `tooling_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `boss_tooling_accessory`
--
ALTER TABLE `boss_tooling_accessory`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `boss_tooling_accessory_extra`
--
ALTER TABLE `boss_tooling_accessory_extra`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_tooling_extra`
--
ALTER TABLE `boss_tooling_extra`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_tooling_material`
--
ALTER TABLE `boss_tooling_material`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `boss_tooling_time`
--
ALTER TABLE `boss_tooling_time`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
