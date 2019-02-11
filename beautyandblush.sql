-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 11:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `blogTitle` varchar(55) NOT NULL,
  `blogDesc` text NOT NULL,
  `blogIMG` varchar(255) NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  `specID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `blogTitle`, `blogDesc`, `blogIMG`, `addDate`, `userID`, `specID`) VALUES
(5, 'fashion industry', ';The fashion industry consists of four levels: the production of raw materials, principally href=\"https://www.britannica.com/technology/fiber-technology\" cand textiles but also leather and fur the production of fashion goods by designers, manufacturers, contractors, and others; href=\"https://www.britannica.com/topic/retailing\" sales; and various forms of advertising and promotion. These levels consist of many separate but interdependent sectors, all of which are devoted to the goal of satisfying ;a href=\"https://www.britannica.com/topic/supply-and-demand\" class=\"md-crosslink autoxref\"&gt;consumer demand for apparel under conditions that enable participants in the industry to operate at a profit.', '56835_inst8.jpeg', '2019-02-11 21:55:40', 4, 2),
(6, 'How can I have a healthy lifestyle?', '<div class=\"co8aDb gsrt\" aria-level=\"3\" role=\"heading\"><b>15 Easy Ways to Be Healthier</b></div><ol class=\"X5LH0c\"><li class=\"TrT0Xe\">Think\r\n positive and focus on gratitude. Research shows a healthy positive \r\nattitude helps build a healthier immune system and boosts overall \r\nhealth. ... </li><li class=\"TrT0Xe\">Eat your vegetables. ... </li><li class=\"TrT0Xe\">Set a “5-meal ideal” ... </li><li class=\"TrT0Xe\">Exercise daily. ... </li><li class=\"TrT0Xe\">Get a good night\'s sleep. ... </li><li class=\"TrT0Xe\">Check your food \'tude. ... </li><li class=\"TrT0Xe\">Eat like a kid. ... </li><li class=\"TrT0Xe\">Be a picky eater.</li></ol>', '76058_inst6.jpeg', '2019-02-11 22:22:11', 4, 1),
(7, '17 Life-Changing Makeup Hacks ', '<p>Hold your black, green, burgundy, etc., kohl eye pencil (which typically\r\n creates a thin, harder-to-apply line), under the flame for one second, \r\nlet it cool for 15 seconds, and then watch the consistency change right \r\nbefore your eyes. Finally, glide on your newly made gel liner for an \r\ninstantly smudgier formula.</p><p>To make a sheer or less pigmented eyeshadow appear more colorful on your eyelid, take a white eyeliner pencil, like <a class=\"body-link\" href=\"http://www.makeupforever.com/us/en-us/make-up/eyes/eyeliner/kohl-pencil\" target=\"_blank\" data-vars-ga-outbound-link=\"http://www.makeupforever.com/us/en-us/make-up/eyes/eyeliner/kohl-pencil\">Make Up For Ever Kohl Eye Pencil in White</a>,\r\n and run it over your entire eyelid. The opaque consistency of the liner\r\n will intensify any eyeshadow shade and make it pop instantly against \r\nyour skin. (Tip via makeup artist <a class=\"body-link\" href=\"https://twitter.com/DIVAliciousBlog\" target=\"_blank\" data-vars-ga-outbound-link=\"https://twitter.com/DIVAliciousBlog\">Lauren Cosenza</a> founder of <a class=\"body-link\" href=\"http://divaliciousblog.com/\" target=\"_blank\" data-vars-ga-outbound-link=\"http://divaliciousblog.com/\">Divalicious Blog</a>.) </p>', '93322_Eye.jpg', '2019-02-11 22:24:18', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `catName` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `userID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `addDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `userIMG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `UserName`, `Password`, `email`, `bio`, `userIMG`) VALUES
(2, 'Mahmoud Benjaber', 'benjaber', '123456789', 'mahmoudbebjabir@gmail.com', 'fgdfgddfg', NULL),
(3, 'Lazord', 'Tsuki', 'Aqswde123', 'lazordelfizga@gmail.com', 'I\'m Mahmoud\'s Tsuki <3', '34277_photo_2018-10-07_22-16-26.jpg'),
(4, 'muna', 'muna99', '123456789', 'boamuna@yahoo.com', 'muna 20 years old the youngest in the family i like kpop songs it calms me down ', 'muna.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `specID` (`specID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blogID` (`blogID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blogID` (`blogID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
