-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 05:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brainstorming`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ADD`(IN `ColorA` VARCHAR(20), IN `ColorB` VARCHAR(20))
    DETERMINISTIC
BEGIN
SET @ColorA = ColorA;
SET @ColorB = ColorB;
SET @ColorResult = CONCAT (@ColorA,' + ', @ColorB);
SELECT @ColorResult;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SUB`(IN `ColorA` VARCHAR(20), IN `ColorB` VARCHAR(20), OUT `ColorResult` VARCHAR(50))
    NO SQL
SET ColorResult = CONCAT (ColorA,' - ', ColorB)$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `ADD_FN`(`ColorA` VARCHAR(20), `ColorB` VARCHAR(20)) RETURNS varchar(100) CHARSET latin1
RETURN CONCAT(ColorA,' + ',ColorB)$$

CREATE DEFINER=`root`@`localhost` FUNCTION `DIV_FN`(`ColorA` VARCHAR(20), `ColorB` VARCHAR(20)) RETURNS varchar(100) CHARSET latin1
RETURN CONCAT(ColorA,' \/ ',ColorB)$$

CREATE DEFINER=`root`@`localhost` FUNCTION `MUL_FN`(`ColorA` VARCHAR(20), `ColorB` VARCHAR(20)) RETURNS varchar(100) CHARSET latin1
RETURN CONCAT(ColorA,' * ',ColorB)$$

CREATE DEFINER=`root`@`localhost` FUNCTION `SUB_FN`(`ColorA` VARCHAR(20), `ColorB` VARCHAR(20)) RETURNS varchar(100) CHARSET latin1
RETURN CONCAT(ColorA,' - ',ColorB)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'sree'),
(2, 'abhi'),
(3, 'neethu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
