-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 02:46 PM
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
  `status` tinyint(4) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_master_fixture_list`
--

CREATE TABLE IF NOT EXISTS `boss_master_fixture_list` (
`id` int(11) NOT NULL,
  `fixture_name` varchar(150) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boss_quotes`
--

CREATE TABLE IF NOT EXISTS `boss_quotes` (
`id` bigint(20) NOT NULL,
  `email_id` varchar(75) NOT NULL,
  `email_id_cc` varchar(50) DEFAULT NULL,
  `email_id_opt` varchar(50) DEFAULT NULL,
  `quote_ref` varchar(20) NOT NULL,
  `total_material_cost` float NOT NULL,
  `total_extra_cost` float NOT NULL,
  `total_timing_cost` float NOT NULL,
  `quote_status` tinyint(4) NOT NULL COMMENT '1-Tentative,2-Evalution,3-final',
  `stencil_exist` tinyint(4) NOT NULL,
  `tooling_exist` tinyint(4) NOT NULL,
  `notes` text,
  `premium` float NOT NULL,
  `discount` float NOT NULL,
  `total_quote_cost` float NOT NULL,
  `quote_type` tinyint(4) NOT NULL COMMENT '0-standard quote,1- custom quote',
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boss_master_accssories`
--
ALTER TABLE `boss_master_accssories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_master_fixture_list`
--
ALTER TABLE `boss_master_fixture_list`
 ADD PRIMARY KEY (`id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_master_fixture_list`
--
ALTER TABLE `boss_master_fixture_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_master_tooling_material`
--
ALTER TABLE `boss_master_tooling_material`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_master_tooling_timing`
--
ALTER TABLE `boss_master_tooling_timing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boss_quotes`
--
ALTER TABLE `boss_quotes`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
