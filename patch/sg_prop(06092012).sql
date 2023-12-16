-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2012 at 12:33 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sg_prop`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `specialities` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo_ext` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `agency_pict_ext` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `agent`
--


-- --------------------------------------------------------

--
-- Table structure for table `agent_account`
--

CREATE TABLE IF NOT EXISTS `agent_account` (
  `agent_id` int(11) NOT NULL,
  `total_post` int(11) NOT NULL,
  `total_bump` int(11) NOT NULL,
  `total_coin` int(11) NOT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agent_account`
--


-- --------------------------------------------------------

--
-- Table structure for table `agent_area`
--

CREATE TABLE IF NOT EXISTS `agent_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `agent_area`
--


-- --------------------------------------------------------

--
-- Table structure for table `agent_district`
--

CREATE TABLE IF NOT EXISTS `agent_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `agent_district`
--


-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `area`
--


-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `area_covered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `district`
--


-- --------------------------------------------------------

--
-- Table structure for table `mrt`
--

CREATE TABLE IF NOT EXISTS `mrt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('NS','EW','NE','CL') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mrt`
--


-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE IF NOT EXISTS `property_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `property_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `rent_sell`
--

CREATE TABLE IF NOT EXISTS `rent_sell` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `area_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `mrt_id` int(11) NOT NULL,
  `type` enum('RENT','SELL') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'RENT',
  `posted_by` enum('OWNER','AGENT') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'OWNER',
  `unit_room` enum('UNIT','ROOM') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ROOM',
  `price` bigint(20) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `cobroke_welcome` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `aircon` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `total_bedroom` int(11) NOT NULL,
  `total_bathroom` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `owner_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `expiry_date` datetime NOT NULL,
  `bump_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rent_type` (`type`),
  KEY `posted_by` (`posted_by`),
  KEY `cobroke_welcome` (`cobroke_welcome`,`aircon`),
  KEY `total_bedroom` (`total_bedroom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rent_sell`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
