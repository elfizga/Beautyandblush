-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2019 at 05:20 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautyandblush`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `blogTitle` varchar(55) NOT NULL,
  `blogDesc` text NOT NULL,
  `blogIMG` varchar(255) NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  `specID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `specID` (`specID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `blogTitle`, `blogDesc`, `blogIMG`, `addDate`, `userID`, `specID`) VALUES
(2, 'test', 'fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg fgdfgfdg\r\ndfgdfg\r\nfdg ', '1.png', '2019-02-04 09:31:15', 2, 3),
(3, 'test', 'fgdfgfdg\r\ndfgdfg\r\nfdg', '1.png', '2019-02-04 08:59:39', 2, 3),
(4, 'title 1 ', '<p>xxxxxxx<br></p>', '66693_photo_2018-10-07_22-16-26.jpg', '2019-02-11 05:10:56', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(70) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `catName`) VALUES
(1, 'Lifestyle'),
(2, 'Fashion'),
(3, 'Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `userID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `blogID` (`blogID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `blogID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `blogID` (`blogID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`ID`, `blogID`, `userID`) VALUES
(1, 3, 2),
(2, 3, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `userIMG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `UserName`, `Password`, `email`, `bio`, `userIMG`) VALUES
(2, 'Mahmoud Benjaber', 'benjaber', '123456789', 'mahmoudbebjabir@gmail.com', 'fgdfgddfg', NULL),
(3, 'Lazord', 'Tsuki', 'Aqswde123', 'lazordelfizga@gmail.com', 'I\'m Mahmoud\'s Tsuki <3', '34277_photo_2018-10-07_22-16-26.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`specID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `blogs_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`ID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`ID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
