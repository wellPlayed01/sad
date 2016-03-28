-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 12:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `cat_id` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `Category`, `Description`) VALUES
('160312-015706AM', 'Shampoo', 'Hair'),
('160312-063911AM', 'Conditioner', 'Hair Moisturizer'),
('160312-075138AM', 'Hair Color', 'Hair'),
('160312-075140AM', '', ''),
('160312-075540AM', 'kahsk', 'hhj'),
('160312-075546AM', 'adjjakl', 'jkljk');

-- --------------------------------------------------------

--
-- Table structure for table `material_tbl`
--

CREATE TABLE IF NOT EXISTS `material_tbl` (
  `material_id` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `variant` varchar(50) NOT NULL,
  `packaging` varchar(50) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_tbl`
--

INSERT INTO `material_tbl` (`material_id`, `category`, `brand_name`, `variant`, `packaging`, `unit`, `value`) VALUES
('123', 'Shampoo', 'iyuiyu', 'nhjkhjk', 'bottle', 'Grams', 10),
('160312-090931AM', 'Hair Color', 'Haksj', 'nhjkhjk', 'bottle', 'Grams', 0),
('160312-090956AM', 'Conditioner', 'fffff', 'nhjkhjk', 'bottle', 'Grams', 0),
('160312-091221AM', 'Shampoo', 'kjjkl', 'nhjkhjk', 'bottle', 'Grams', 0),
('160312-091350AM', 'Shampoo', 'yuoo', 'nhjkhjk', 'bottle', 'Grams', 13);

-- --------------------------------------------------------

--
-- Table structure for table `packaging_tbl`
--

CREATE TABLE IF NOT EXISTS `packaging_tbl` (
  `pack_id` varchar(50) NOT NULL,
  `Packaging` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packaging_tbl`
--

INSERT INTO `packaging_tbl` (`pack_id`, `Packaging`, `Description`) VALUES
('160312-085637AM', 'bottle', 'plastic');

-- --------------------------------------------------------

--
-- Table structure for table `servcat_tbl`
--

CREATE TABLE IF NOT EXISTS `servcat_tbl` (
  `servcat_id` varchar(30) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`servcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE IF NOT EXISTS `service_tbl` (
  `service_id` varchar(30) NOT NULL,
  `service_category` varchar(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_price` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`service_id`, `service_category`, `service_name`, `service_price`) VALUES
('789178', 'Hair', 'Hair Coloring', 400);

-- --------------------------------------------------------

--
-- Table structure for table `unit_tbl`
--

CREATE TABLE IF NOT EXISTS `unit_tbl` (
  `unit_id` varchar(50) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Shortcut` varchar(10) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_tbl`
--

INSERT INTO `unit_tbl` (`unit_id`, `Unit`, `Shortcut`) VALUES
('160312-085704AM', 'Grams', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `variant_tbl`
--

CREATE TABLE IF NOT EXISTS `variant_tbl` (
  `var_id` varchar(50) NOT NULL,
  `Variant` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`var_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variant_tbl`
--

INSERT INTO `variant_tbl` (`var_id`, `Variant`, `Description`) VALUES
('160312-085552AM', 'nhjkhjk', 'hjh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
