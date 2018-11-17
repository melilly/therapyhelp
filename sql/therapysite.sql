-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2018 at 01:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `therapysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

DROP TABLE IF EXISTS `practices`;
CREATE TABLE IF NOT EXISTS `practices` (
  `professional_id` int(255) NOT NULL,
  `specialty_id` int(255) NOT NULL,
  `practices` bit(1) NOT NULL DEFAULT b'0',
  `isTrauma` bit(1) NOT NULL DEFAULT b'0',
  `isMarriage` bit(1) NOT NULL DEFAULT b'0',
  `isFamily` bit(1) NOT NULL DEFAULT b'0',
  `isDevelopmental` bit(1) NOT NULL DEFAULT b'0',
  `isSpiritual` bit(1) NOT NULL DEFAULT b'0',
  `isDepression` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`professional_id`, `specialty_id`, `practices`, `isTrauma`, `isMarriage`, `isFamily`, `isDevelopmental`, `isSpiritual`, `isDepression`) VALUES
(4, 1, b'1', b'0', b'0', b'0', b'0', b'0', b'0'),
(4, 2, b'0', b'0', b'0', b'0', b'0', b'0', b'0'),
(4, 3, b'1', b'0', b'0', b'0', b'0', b'0', b'0'),
(4, 4, b'1', b'0', b'0', b'0', b'0', b'0', b'0'),
(4, 5, b'0', b'0', b'0', b'0', b'0', b'0', b'0'),
(4, 6, b'1', b'0', b'0', b'0', b'0', b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

DROP TABLE IF EXISTS `professional`;
CREATE TABLE IF NOT EXISTS `professional` (
  `user_id` int(255) NOT NULL,
  `professional_id` int(255) NOT NULL AUTO_INCREMENT,
  `location` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `school` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `accredited` bit(1) NOT NULL,
  `rate` decimal(65,0) NOT NULL DEFAULT '0',
  `isDepression` bit(1) NOT NULL DEFAULT b'0',
  `isDevelopmental` bit(1) NOT NULL DEFAULT b'0',
  `isFamily` bit(1) NOT NULL DEFAULT b'0',
  `isMarriage` bit(1) NOT NULL DEFAULT b'0',
  `isSpiritual` bit(1) NOT NULL DEFAULT b'0',
  `isTrauma` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`professional_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`user_id`, `professional_id`, `location`, `school`, `bio`, `accredited`, `rate`, `isDepression`, `isDevelopmental`, `isFamily`, `isMarriage`, `isSpiritual`, `isTrauma`) VALUES
(4, 1, 'logan', 'Utah State', 'fafnjknasf asfonasjfk jkas fjasobfnoajs fj asjfjabbfj asjd fjsabfjoa sjfnjsa fjjbfja sfasjf ojasfbjsd fj asfasjfjkasf asfasfnasjjf asg safjkadsnfjka sf a  asdjkfnadsjnfjasdnfklnasd fasdljf ajsl fdlasd flasb fj asdjlf alksdioasdf asdf aslfksadnfnasd dfaslaksdfnlasdf asdflkasdf n dsflkasdfnlsadiafdslknadsfkl adsf.kjasfdovhb d,sdafl', b'1', '75', b'0', b'1', b'0', b'1', b'1', b'1'),
(7, 2, 'Austin, Texas', 'Harvard', 'fjkas jk adsfk sjfnas dfjks abfja sfk asfkn  aksfjhaiewufbjkabfuagbfjewa vajkewbvja vabjae va vkibauiebawjl vmavd vjabwvj awlj eajwf jaewofbouaewflbliuabfilab flisudvgbaefkajwe fdskcbiuawefbaf aefjaefbkjae f,nsd flvfaewbfjk afbjdddjbkfdhbfdbfdjbjhbbvjkzbvjbkjkbkjbzdsdjbsioisbjsdkjdfsjkafhdkjsfasadfoafob', b'1', '250', b'1', b'0', b'0', b'1', b'0', b'0'),
(8, 3, 'Washington DC', 'Boston University', 'fjkas jk adsfk sjfnas dfjks abfja sfk asfkn  aksfjhaiewufbjkabfuagbfjewa vajkewbvja vabjae va vkibauiebawjl vmavd vjabwvj awlj eajwf jaewofbouaewflbliuabfilab flisudvgbaefkajwe fdskcbiuawefbaf aefjaefbkjae f,nsd flvfaewbfjk afbjdddjbkfdhbfdbfdjbjhbbvjkzbvjbkjkbkjbzdsdjbsioisbjsdkjdfsjkafhdkjsfasadfoafob', b'1', '43', b'0', b'1', b'0', b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `client_id` int(255) NOT NULL,
  `professional_id` int(255) NOT NULL,
  `next_session` date NOT NULL,
  `next_time` time DEFAULT NULL,
  `current` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`client_id`, `professional_id`, `next_session`, `next_time`, `current`) VALUES
(1, 1, '2018-11-23', '00:00:12', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
CREATE TABLE IF NOT EXISTS `specialties` (
  `specialty_id` int(255) NOT NULL AUTO_INCREMENT,
  `specialty_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`specialty_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`specialty_id`, `specialty_name`) VALUES
(1, 'trauma'),
(2, 'marriage councling'),
(3, 'family'),
(4, 'developmental'),
(5, 'spiritual'),
(6, 'depression');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isVerified` bit(1) DEFAULT NULL,
  `isClient` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fName`, `lName`, `email`, `password`, `isVerified`, `isClient`) VALUES
(2, 'Elizabeth', 'Howell', 'erhowell15@gmail.com', 'little15', b'1', b'1'),
(3, 'John', 'Smith', 'jSmith@gmail.com', 'root', b'1', b'1'),
(4, 'Dane', 'Chair', 'dar@gmail.com', 'root', b'1', b'0'),
(5, 'Jane', 'Smith', 'janeS@gmail.com', 'root', b'1', b'1'),
(6, 'Ryan', 'Davidson', 'rdav@yahoo.com', ' root', b'1', b'1'),
(7, 'Mary', 'Huges', 'mhughes.yahoo.com', 'root', b'1', b'0'),
(8, 'Erik', 'Mars', 'EMars.yahoo.com', 'root', b'1', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
