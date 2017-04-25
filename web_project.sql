-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 04:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--
CREATE DATABASE IF NOT EXISTS `web_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web_project`;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`) VALUES(2, 'UWE-Find Inc &copy;');
INSERT INTO `groups` (`group_id`, `group_name`) VALUES(3, 'Google Developers');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `proj_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `proj_des` text NOT NULL,
  `proj_description` text NOT NULL,
  `github_link` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_des`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(3, 'UWE Find', 'INFO 3490', 3, 'UWI Classroom Locating Application. Can be used to find any classroom, toilet or office on campus.', 'UWI Classroom Locating Application. Can be used to find any classroom, toilet or office on campus.', 'https://github.com/spiral360/U-WEFind', 2, '2017-04-21 00:00:00');
INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_des`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(4, 'Junk Trade', 'INFO 3490', 3, 'Junk Trade is a web app that allows users to trade items with other users without need for money', 'Junk Trade is a web app that allows users to trade items with other users without need for money. JunkTrade allows users to define the value of their items by putting it up to trade against other user items.', 'https://github.com/micmac473/junktrade', 3, '2017-04-25 00:00:00');
INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_des`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(5, 'aopj', 'ooap', 2, 'oipjnlkkbkj,mpojnomjik', 'iohjnoijmhnnbyutyokjmaq', 'oijhnmopjiuhn', 2, '2017-04-23 00:00:00');
INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_des`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(6, 'rsauxanj', 'iiasus', 2, 'aojxmaioouwqma', 'poiuxmaoiquwjsnmxmoijxjamxao', 'pokjximoiaukxsm', 2, '2017-04-23 00:00:00');
INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_des`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(7, 'poqspoiaxja', 'aposijmao', 1, 'i09pajxjahkssmkxaoikapmpxaso', 'apokjxmoajnatfasuttwqjomsaoiusoiytagsankspoyuxjampoxamoiyiagakpomaxa', 'iaousjxnaoiqwuytxiqgbqm', 2, '2017-04-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `img_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_image`
--

INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(2, 3, 'uwefind.png', 'images/project/uwefind.png', 'image/png');
INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(3, 4, 'logo.png', 'images/project/logo.png', 'image/png');
INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(4, 5, '2.png', 'images/project/2.png', 'images/png');
INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(5, 6, '4.png', 'images/project/4.png', 'images/png');
INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(6, 7, '5.png', 'images/project/5.png', 'images/png');

-- --------------------------------------------------------

--
-- Table structure for table `pro_pic`
--

CREATE TABLE `pro_pic` (
  `pic_id` int(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_pic`
--

INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(8, 12, '58fa47cad229f.jpg', 'images/profile/58fa47cad229f.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(9, 13, '58fa47f9f19d8.jpg', 'images/profile/58fa47f9f19d8.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(10, 14, '58fa4829ccd70.jpg', 'images/profile/58fa4829ccd70.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(11, 15, '58fa487001d0e.jpg', 'images/profile/58fa487001d0e.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(12, 16, '58fa489be5e09.jpg', 'images/profile/58fa489be5e09.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(13, 17, '58fa4b0270688.jpg', 'images/profile/58fa4b0270688.jpg', 'image/jpeg');
INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(14, 18, '58fa4b2e921bb.jpg', 'images/profile/58fa4b2e921bb.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `role` text NOT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(1, 'Michael', 'Sam', 'sammichael25@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Programmer', NULL);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(12, 'User', 'One', 'user@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Team Leader', 2);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(13, 'User', 'Two', 'user2@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Programmer', 2);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(14, 'User', 'Three', 'user3@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Database Admin', 2);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(15, 'User', 'Four', 'user4@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Graphic Designer', 2);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(16, 'User', 'Five', 'user5@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Web Developer', 2);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(17, 'User', 'Six', 'user6@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Web Developer', 3);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(18, 'User', 'Seven', 'user7@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Web Developer', 3);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(19, 'User', 'Eight', 'user8@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Programmer', 3);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(20, 'User', 'Nine', 'user9@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Programmer', 3);
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`, `group_id`) VALUES(21, 'User', 'Ten', 'user10@mail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Web Developer', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`proj_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `proj_id` (`proj_id`);

--
-- Indexes for table `pro_pic`
--
ALTER TABLE `pro_pic`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pro_pic`
--
ALTER TABLE `pro_pic`
  MODIFY `pic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `project_details_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

--
-- Constraints for table `project_image`
--
ALTER TABLE `project_image`
  ADD CONSTRAINT `project_image_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project_details` (`proj_id`);

--
-- Constraints for table `pro_pic`
--
ALTER TABLE `pro_pic`
  ADD CONSTRAINT `pro_pic_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
