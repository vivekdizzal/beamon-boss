-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2016 at 03:13 PM
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
(1, 'Clamps', 10, 1, 1, '0000-00-00', '2016-08-09 11:02:17'),
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
(1, 1.5, '2016-08-18', 1);

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
(7, 'Fixture 3', 'this is a test ', '2016-08-16', '2016-08-16 05:53:15', 1);

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
(1, 35, '2016-08-18', 1);

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
(6, 'DUROSTONE ESD Black', '', 0.17, '2016-08-09', '2016-08-19 05:32:14', 1),
(7, 'G10', '', 20, '2016-08-09', '2016-08-18 10:35:05', 1),
(8, 'DUROSTONE ESD Gray - 8mm', '', 30, '2016-08-09', '2016-08-09 04:31:18', 1);

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
  `email_id_cc` varchar(50) DEFAULT NULL,
  `email_id_opt` varchar(50) DEFAULT NULL,
  `quote_ref` varchar(20) NOT NULL,
  `quote_status` tinyint(4) NOT NULL COMMENT '1-Tentative,2-Evalution,3-final',
  `stencil_exist` tinyint(4) NOT NULL,
  `tooling_exist` tinyint(4) NOT NULL,
  `notes` text,
  `quote_type` tinyint(4) NOT NULL COMMENT '0-standard quote,1- custom quote',
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_quotes`
--

INSERT INTO `boss_quotes` (`id`, `email_id`, `engineer_id`, `company_id`, `customer_id`, `email_id_cc`, `email_id_opt`, `quote_ref`, `quote_status`, `stencil_exist`, `tooling_exist`, `notes`, `quote_type`, `date_created`, `date_modified`, `status`) VALUES
(1, 'karthik@gmail.com', 2, 1, 1, NULL, NULL, '', 0, 0, 1, NULL, 0, '2016-08-22', '2016-08-22 08:32:01', 1),
(2, '', 2, 1, 1, NULL, NULL, '', 1, 0, 1, NULL, 0, '2016-08-22', '2016-08-22 10:16:30', 1),
(3, '', 2, 1, 1, NULL, NULL, '', 1, 0, 1, NULL, 0, '2016-08-22', '2016-08-22 10:21:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling`
--

CREATE TABLE IF NOT EXISTS `boss_tooling` (
  `id` bigint(20) NOT NULL DEFAULT '0',
  `quote_id` bigint(20) NOT NULL,
  `material_id` int(11) NOT NULL,
  `size_x` float NOT NULL,
  `size_y` float NOT NULL,
  `extra_material` float NOT NULL,
  `mark_up` float NOT NULL,
  `cost` float NOT NULL,
  `tooling_description` text NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_extra`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_extra` (
  `id` bigint(20) NOT NULL,
  `tooling_acc_id` int(11) NOT NULL,
  `acc_cost` float NOT NULL,
  `acc_qty` int(11) NOT NULL,
  `acc_total_cost` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_tooling_time`
--

CREATE TABLE IF NOT EXISTS `boss_tooling_time` (
  `id` int(11) DEFAULT NULL,
  `tooling_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `other_material_name` varchar(200) NOT NULL,
  `other_material_cost` float NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `boss_tooling`
--
ALTER TABLE `boss_tooling`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_tooling_extra`
--
ALTER TABLE `boss_tooling_extra`
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
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
