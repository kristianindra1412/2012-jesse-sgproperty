-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2012 at 07:16 
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
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=146 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'Adam Road'),
(2, 'Arab Street'),
(3, 'Beach Road'),
(4, 'Boat Quay'),
(5, 'Bugis'),
(6, 'Bukit Timah'),
(7, 'Chinatown'),
(8, 'City Hall'),
(9, 'Clarke Quay'),
(10, 'Club Street'),
(11, 'Dempsey Rd'),
(12, 'Dhoby Ghaut'),
(13, 'Ghim Moh'),
(14, 'Holland'),
(15, 'Holland Village'),
(16, 'Jalan Besar'),
(17, 'Little India'),
(18, 'Mohammed Sultan'),
(19, 'Newton'),
(20, 'Novena'),
(21, 'Orchard'),
(22, 'Raffles Place'),
(23, 'River Valley'),
(24, 'Rochor'),
(25, 'Serangoon'),
(26, 'Somerset'),
(27, 'Tanglin'),
(28, 'Tanjong Pagar'),
(29, 'Thomson'),
(30, 'Arab Street'),
(31, 'Beach Road'),
(32, 'Boat Quay'),
(33, 'Bugis'),
(34, 'Bukit Timah'),
(35, 'Chinatown'),
(36, 'City Hall'),
(37, 'Clarke Quay'),
(38, 'Club Street'),
(39, 'Dempsey Rd'),
(40, 'Dhoby Ghaut'),
(41, 'Ghim Moh'),
(42, 'Holland'),
(43, 'Holland Village'),
(44, 'Jalan Besar'),
(45, 'Little India'),
(46, 'Mohammed Sultan'),
(47, 'Newton'),
(48, 'Novena'),
(49, 'Orchard'),
(50, 'Raffles Place'),
(51, 'River Valley'),
(52, 'Rochor'),
(53, 'Serangoon'),
(54, 'Somerset'),
(55, 'Tanglin'),
(56, 'Tanjong Pagar'),
(57, 'Thomson'),
(58, ''),
(59, 'Bedok'),
(60, 'Bendemeer'),
(61, 'Chai Chee'),
(62, 'Changi'),
(63, 'Changi Airport'),
(64, 'Defu Lane'),
(65, 'East Coast Park'),
(66, 'Eunos'),
(67, 'Fort Road'),
(68, 'Geylang'),
(69, 'Hougang'),
(70, 'Joo Chiat'),
(71, 'Kaki Bukit'),
(72, 'Kallang'),
(73, 'Katong'),
(74, 'Kembangan'),
(75, 'Lavender'),
(76, 'Loyang'),
(77, 'Macpherson'),
(78, 'Marine Parade'),
(79, 'Pasir Ris'),
(80, 'Paya Lebar'),
(81, 'Pulau Tekong'),
(82, 'Pulau Ubin'),
(83, 'Punggol'),
(84, 'Sengkang'),
(85, 'Siglap'),
(86, 'Simei'),
(87, 'Tai Seng'),
(88, 'Tampines'),
(89, 'Tanah Merah'),
(90, 'Telok Kurau'),
(91, 'Ubi'),
(92, 'Upp Changi'),
(93, 'Upper Serangoon'),
(94, 'Ang Mo Kio'),
(95, 'Balestier'),
(96, 'Bishan'),
(97, 'Jalan Kayu'),
(98, 'Kranji'),
(99, 'Macritchie'),
(100, 'Mandai'),
(101, 'Potong Pasir'),
(102, 'Seletar'),
(103, 'Sembawang'),
(104, 'Serangoon Garden'),
(105, 'Sin Ming'),
(106, 'Toa Payoh'),
(107, 'Upper Thomson'),
(108, 'Woodlands'),
(109, 'Yio Chu Kang'),
(110, 'Yishun'),
(111, 'Alexandra'),
(112, 'Ayer Rajah'),
(113, 'Biopolis'),
(114, 'Bukit Merah'),
(115, 'Buona Vista'),
(116, 'Commonwealth'),
(117, 'Dover'),
(118, 'Keppel'),
(119, 'Leng Kee'),
(120, 'Marina Bay'),
(121, 'Outram'),
(122, 'Pasir Panjang'),
(123, 'Portsdown'),
(124, 'Queenstown'),
(125, 'Sentosa'),
(126, 'Telok Blangah'),
(127, 'Tiong Bahru'),
(128, 'Boon Lay'),
(129, 'Bukit Batok'),
(130, 'Bukit Panjang'),
(131, 'Choa Chu Kang'),
(132, 'Clementi'),
(133, 'Hillview'),
(134, 'Jalan Bahar'),
(135, 'Jurong East'),
(136, 'Jurong Island'),
(137, 'Jurong West'),
(138, 'Lim Chu Kang'),
(139, 'Pioneer'),
(140, 'Sungei Kadut'),
(141, 'Sungei Tengah'),
(142, 'Taman Jurong'),
(143, 'Teck Whye'),
(144, 'Tuas'),
(145, 'West Coast');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `code`, `name`, `area_covered`) VALUES
(1, 'D1', 'City Business District', 'Boat Quay, Chinatown, Havelock Road, Marina Square, Raffles Place, Suntec City'),
(2, 'D2', 'City Business District', 'Anson Road, Chinatown, Neil Road, Raffles Place, Shenton Way, Tanjong Pagar'),
(3, 'D3', 'Central South', 'Alexandra Road, Tiong Bahru, Queenstown'),
(4, 'D4', 'South', 'Keppel, Mount Faber, Sentosa, Telok Blangah'),
(5, 'D5', 'South West', 'Buona Vista, Dover, Pasir Panjang, West Coast'),
(6, 'D6', 'City - Business District', 'City Hall, High Street, North Bridge Road'),
(7, 'D7', 'City', 'Beach Road, Bencoolen Road, Bugis, Rochor'),
(8, 'D8', 'Central', 'Little India, Farrer Park, Serangoon Road'),
(9, 'D9', 'Central - Orchard', 'Cairnhill, Killiney, Leonie Hill, Orchard, Oxley'),
(10, 'D10', 'Central - Near Orchard', 'Balmoral, Bukit Timah, Grange Road, Holland, Orchard Boulevard, River Valley, Tanglin Road'),
(11, 'D11', 'Central - Near Orchard', 'Chancery, Bukit Timah, Dunearn Road, Newton'),
(12, 'D12', 'Central', 'Balestier, Moulmein, Novena, Toa Payo'),
(13, 'D13', 'Central East', 'Potong Pasir, Machpherson'),
(14, 'D14', 'Central East', 'Eunos, Geylang, Kembangan, Paya Lebar'),
(15, 'D15', 'East Coast', 'Katong, Marine Parade, Siglap, Tanjong Rhu'),
(16, 'D16', 'Upper East Coast', 'Bayshore, Bedok, Chai Chee'),
(17, 'D17', 'Far East', 'Changi, Loyang, Pasir Ris'),
(18, 'D18', 'Far East', 'Pasir Ris, Simei, Tampines'),
(19, 'D19', 'North East', 'Hougang, Punggol, Sengkang'),
(20, 'D20', 'Central North', 'Ang Mo Kio, Bishan, Braddell Road, Thomson'),
(21, 'D21', 'Central West', 'Clementi, Upper Bukit Timah, Hume Avenue'),
(22, 'D22', 'Far West', 'Boon Lay, Jurong, Tuas'),
(23, 'D23', 'North West', 'Bukit Batok, Choa Chu Kang, Hillview Avenue, Upper Bukit Timah'),
(24, 'D24', 'Far North West', 'Kranji, Lim Chu Kang, Sungei Gedong, Tengah'),
(25, 'D25', 'Far North', 'Admiralty, Woodlands'),
(26, 'D26', 'North', 'Tagore, Yio Chu Kang'),
(27, 'D27', 'Far North', 'Admiralty, Sembawang, Yishun'),
(28, 'D28', 'North East', 'Seletar, Yio Chu Kang');

-- --------------------------------------------------------

--
-- Table structure for table `mrt`
--

CREATE TABLE IF NOT EXISTS `mrt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('NS','EW','NE','CL') COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

--
-- Dumping data for table `mrt`
--

INSERT INTO `mrt` (`id`, `type`, `code`, `name`) VALUES
(1, 'NS', 'NS1', 'Jurong East'),
(2, 'NS', 'NS2', 'Bukit Batok'),
(3, 'NS', 'NS3', 'Bukit Gombak'),
(4, 'NS', 'NS4', 'Choa Chu Kang'),
(5, 'NS', 'NS5', 'Yew Tee'),
(6, 'NS', 'NS7', 'Kranji'),
(7, 'NS', 'NS8', 'Marsiling'),
(8, 'NS', 'NS9', 'Woodlands'),
(9, 'NS', 'NS10', 'Admiralty'),
(10, 'NS', 'NS11', 'Sembawang'),
(11, 'NS', 'NS13', 'Yishun'),
(12, 'NS', 'NS14', 'Khatib'),
(13, 'NS', 'NS15', 'Yio Chu Kang'),
(14, 'NS', 'NS16', 'Ang Mo Kio'),
(15, 'NS', 'NS17', 'Bishan'),
(16, 'NS', 'NS18', 'Braddell'),
(17, 'NS', 'NS19', 'Toa Payoh'),
(18, 'NS', 'NS20', 'Novena'),
(19, 'NS', 'NS21', 'Newton'),
(20, 'NS', 'NS22', 'Orchard'),
(21, 'NS', 'NS23', 'Somerset'),
(22, 'NS', 'NS24', 'Dhoby Ghaut'),
(23, 'NS', 'NS25', 'City Hall'),
(24, 'NS', 'NS26', 'Raffles Place'),
(25, 'NS', 'NS27', 'Marina Bay'),
(26, 'EW', 'EW1', 'Pasir Ris'),
(27, 'EW', 'EW2', 'Tampines'),
(28, 'EW', 'EW3', 'Simei'),
(29, 'EW', 'EW4', 'Tanah Merah'),
(30, 'EW', 'EW5', 'Bedok'),
(31, 'EW', 'EW6', 'Kembangan'),
(32, 'EW', 'EW7', 'Eunos'),
(33, 'EW', 'EW8', 'Paya Lebar'),
(34, 'EW', 'EW9', 'Aljunied'),
(35, 'EW', 'EW10', 'Kallang'),
(36, 'EW', 'EW11', 'Lavender'),
(37, 'EW', 'EW12', 'Bugis'),
(38, 'EW', 'EW13', 'City Hall'),
(39, 'EW', 'EW14', 'Raffles Place'),
(40, 'EW', 'EW15', 'Tanjong Pagar'),
(41, 'EW', 'EW16', 'Outram Park'),
(42, 'EW', 'EW17', 'Tiong Bahru'),
(43, 'EW', 'EW18', 'Redhill'),
(44, 'EW', 'EW19', 'Queenstown'),
(45, 'EW', 'EW20', 'Commonwealth'),
(46, 'EW', 'EW21', 'Buona Vista'),
(47, 'EW', 'EW22', 'Dover'),
(48, 'EW', 'EW23', 'Clementi'),
(49, 'EW', 'EW24', 'Jurong East'),
(50, 'EW', 'EW25', 'Chinese Garden'),
(51, 'EW', 'EW26', 'Lakeside'),
(52, 'EW', 'EW27', 'Boon Lay'),
(53, 'EW', 'EW28', 'Pioneer'),
(54, 'EW', 'EW29', 'Joo Koon'),
(55, 'EW', 'CG1', 'Expo'),
(56, 'EW', 'CG2', 'Changi Airport'),
(57, 'NE', 'NE1', 'HarbourFront'),
(58, 'NE', 'NE3', 'Outram Park'),
(59, 'NE', 'NE4', 'Chinatown'),
(60, 'NE', 'NE5', 'Clarke Quay'),
(61, 'NE', 'NE6', 'Dhoby Ghaut'),
(62, 'NE', 'NE7', 'Little India'),
(63, 'NE', 'NE8', 'Farrer Park'),
(64, 'NE', 'NE9', 'Boon Keng'),
(65, 'NE', 'NE10', 'Potong Pasir'),
(66, 'NE', 'NE11', 'Woodleigh'),
(67, 'NE', 'NE12', 'Serangoon'),
(68, 'NE', 'NE13', 'Kovan'),
(69, 'NE', 'NE14', 'Hougang'),
(70, 'NE', 'NE15', 'Buangkok'),
(71, 'NE', 'NE16', 'Sengkang'),
(72, 'NE', 'NE17', 'Punggol'),
(73, 'CL', 'CC1', 'Dhoby Ghaut'),
(74, 'CL', 'CC2', 'Bras Basah'),
(75, 'CL', 'CC3', 'Esplanade'),
(76, 'CL', 'CC4', 'Promenade'),
(77, 'CL', 'CC5', 'Nicoll Highway'),
(78, 'CL', 'CC6', 'Stadium'),
(79, 'CL', 'CC7', 'Mountbatten'),
(80, 'CL', 'CC8', 'Dakota'),
(81, 'CL', 'CC9', 'Paya Lebar'),
(82, 'CL', 'CC10', 'MacPherson'),
(83, 'CL', 'CC11', 'Tai Seng'),
(84, 'CL', 'CC12', 'Bartley'),
(85, 'CL', 'CC13', 'Serangoon'),
(86, 'CL', 'CC14', 'Lorong Chuan'),
(87, 'CL', 'CC15', 'Bishan'),
(88, 'CL', 'CC16', 'Marymount'),
(89, 'CL', 'CC17', 'Caldecott'),
(90, 'CL', 'CC19', 'Botanic Gardens'),
(91, 'CL', 'CC20', 'Farrer Road'),
(92, 'CL', 'CC21', 'Holland Village'),
(93, 'CL', 'CC22', 'Buona Vista'),
(94, 'CL', 'CC23', 'one-north'),
(95, 'CL', 'CC24', 'Kent Ridge'),
(96, 'CL', 'CC25', 'Haw Par Villa'),
(97, 'CL', 'CC26', 'Pasir Panjang'),
(98, 'CL', 'CC27', 'Labrador Park'),
(99, 'CL', 'CC28', 'Telok Blangah'),
(100, 'CL', 'CC29', 'HarbourFront'),
(101, 'CL', 'CE1', 'Bayfront'),
(102, 'CL', 'CE2', 'Marina Bay');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `owner`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`id`, `name`, `description`) VALUES
(1, 'Landed House', 'Landed House Property'),
(2, 'Condo', 'Condo Property'),
(3, 'HDB - 2I (Improved)', '45 sqm/484 sqft'),
(4, 'HDB - 2S', '41 sqm/441 sqft'),
(5, 'HDB - 3A (Modified)', '90 sqm/969 sqft'),
(6, 'HDB - 3NG (Modified)', '83 sqm/896 sqft'),
(7, 'HDB - 3A', '75 sqm/807 sqft'),
(8, 'HDB - 3NG (New Generation)', '69 sqm/743 sqft\r\n(2 toilets, master bedroom with attached bathroom)'),
(9, 'HDB - 3I (Modified)', '70 sqm/750 sqft'),
(10, 'HDB 3S (Simplified)', '65 sqm/700 sqft'),
(11, 'HDB - 3I (Improved)', '60 sqm/646 sqft\r\n(No attached bath, toilet and bath separated, no storeroom)'),
(12, 'HDB - 3STD (Standard)', '54 sqm/581 sqft\r\n(No attached bathroom/storeroom. Upgraded units have extra utility room or toilet)'),
(13, 'HDB - 4A', '105 sqm/1130 sqft\r\n(2 bathrooms, master bedroom with attached toilet, storeroom)'),
(14, 'HDB - 4NG (New Generation)', '92 sqm/990 sqft'),
(15, 'HDB - 4S (Simplified)', '85 sqm/914 sqft\r\n(2 bathrooms, master bedroom with attached toilet, storeroom)'),
(16, 'HDB - 4I (Improved)', '83 sqm/893 sqft\r\n(toilet and bath separated, no storeroom)'),
(17, 'HDB - 4STD (Standard)', '73 sqm/786 sqft'),
(18, 'HDB - 5A', '135 sqm/1453 sqft'),
(19, 'HDB - 5I', '123 sqm/1313 sqft'),
(20, 'HDB - 5S', '121 sqm/1300 sqft'),
(21, 'EA (Exec Apartment)', '141 sqm/1518 sqft (single storey)'),
(22, 'EM (Exec Maisonette)', '145sqm/1560sqft (double storey)'),
(23, 'MG (Multi-Generation)', '165 sqm/1776 sqft'),
(24, 'Other HDB Type', 'Other HDB type like studio, jumbo flat, etc');

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
  `latitude` float(9,6) NOT NULL,
  `longitude` float(9,6) NOT NULL,
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
  `furnish` enum('F','P','U') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'U',
  `total_bedroom` int(11) NOT NULL,
  `total_bathroom` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `bump_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rent_type` (`type`),
  KEY `posted_by` (`posted_by`),
  KEY `cobroke_welcome` (`cobroke_welcome`,`aircon`),
  KEY `total_bedroom` (`total_bedroom`),
  KEY `furnish` (`furnish`),
  KEY `area_id` (`area_id`),
  KEY `district_id` (`district_id`),
  KEY `mrt_id` (`mrt_id`),
  KEY `aircon` (`aircon`),
  KEY `unit_room` (`unit_room`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rent_sell`
--

INSERT INTO `rent_sell` (`id`, `title`, `description`, `address`, `postal_code`, `latitude`, `longitude`, `area_id`, `district_id`, `mrt_id`, `type`, `posted_by`, `unit_room`, `price`, `property_type_id`, `cobroke_welcome`, `aircon`, `furnish`, `total_bedroom`, `total_bathroom`, `agent_id`, `owner_id`, `expiry_date`, `bump_date`, `created_date`, `modified_date`) VALUES
(4, 'Gud home.. location at yishun', 'good location', 'yishun', '760208', 1.431095, 103.837570, 0, 0, 1, 'RENT', 'AGENT', 'UNIT', 10000, 0, 'N', 'N', 'P', 3, 2, 1, 0, '2012-10-05 17:34:22', '2012-09-28 17:34:22', '2012-09-28 17:34:22', '2012-09-28 17:34:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
