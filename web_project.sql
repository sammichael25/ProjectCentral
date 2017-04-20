-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `mem_id`) VALUES(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL,
  `uid_1` int(11) NOT NULL,
  `uid_2` int(11) NOT NULL,
  `uid_3` int(11) NOT NULL,
  `uid_4` int(11) NOT NULL,
  `uid_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `uid_1`, `uid_2`, `uid_3`, `uid_4`, `uid_5`) VALUES(1, 2, 3, 4, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `proj_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `proj_description` text NOT NULL,
  `github_link` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`proj_id`, `name`, `course_code`, `year`, `proj_description`, `github_link`, `group_id`, `last_updated`) VALUES(2, 'UWE-Find', 'INFO 3490', 3, 'Class room locating web application that gives directions to classrooms around campus', 'https://github.com/spiral360/U-WEFind', 1, '2017-04-20 00:00:00');

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

INSERT INTO `project_image` (`img_id`, `proj_id`, `img_name`, `img_path`, `img_type`) VALUES(1, 2, 'uwefind.png', 'images/project/uwefind.png', 'image/png');

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

INSERT INTO `pro_pic` (`pic_id`, `uid`, `img_name`, `img_path`, `img_type`) VALUES(3, 4, '58f78d0aa3e88.png', 'images/58f78d0aa3e88.png', 'image/png');

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
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`) VALUES(1, 'Michael', 'Sam', 'sammichael25@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student', 'Team Leader');
INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `type`, `role`) VALUES(4, 'John', 'Smith', 'john@mail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Student', 'Programmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `uid_1` (`uid_1`),
  ADD KEY `uid_2` (`uid_2`),
  ADD KEY `uid_3` (`uid_3`,`uid_4`,`uid_5`),
  ADD KEY `uid_4` (`uid_4`),
  ADD KEY `uid_5` (`uid_5`);

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
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_pic`
--
ALTER TABLE `pro_pic`
  MODIFY `pic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `members` (`mem_id`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
