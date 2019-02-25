-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2018 at 08:17 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omkarsah_pet_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `service_id` int(25) DEFAULT NULL,
  `userid` varchar(25) NOT NULL,
  `client_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`fname`, `lname`, `phone`, `email`, `service_id`, `userid`, `client_ID`) VALUES
('omkar', 'sa', '1234567891', 'omkars2194@gmail.com', 123, 'Petstr_d273', 10),
('omkar', 'sdfg', '1234567891', 'omkars2194@gmail.com', 123, 'Petstr_8ea', 162),
('University', 'arlington', '403-440-6061', 'paddy.saha@gmail.com ', 123, 'Petstr_976', 197),
('omkar', 'sdfg', '1234567891', 'omkars2194@gmail.com', NULL, 'Petstr_936', 200),
('Omkar', 'Sahasrabudhe', '682-132-1234', 'omkarmukund.sahasrabudhe@', 123, 'Petstr_992', 201),
('adi', 'kumar', '156165162132', 'aditya.r003@gmail.com ', 123, 'Petstr_995', 202),
('Vishwaswqdasfd', 'Bhavedsf', '1234567891', 'omkars2194@gmail.com ', NULL, 'Petstr_9a4', 205),
('Abhiyuday', 'Malwala', '98080880001', 'viru94@gmail.com ', NULL, 'Petstr_a81', 206),
('VIRAJ', 'SASA', '1234567891', 'viru94@gmail.com ', NULL, 'Petstr_a91', 207),
('akshay', 'ww', '07798080034', 'akshay.waikar@gmail.com ', NULL, 'Petstr_371', 208);

-- --------------------------------------------------------

--
-- Table structure for table `Enquiry`
--

CREATE TABLE `Enquiry` (
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Enquiry`
--

INSERT INTO `Enquiry` (`Firstname`, `Lastname`, `email`, `phone`, `Comments`) VALUES
('murtuja', 'kumar', 'murtuja.kumar@gmail.com', '7894561230', ''),
('viraaaj', 'thakur', 'viru94@gmail.com', '7894561568', ''),
('viraaaj', 'thakur', 'viru94@gmail.com', '7894561568', ''),
('viraaaj', 'thakur', 'viru94@gmail.com', '7894561568', 'helloo'),
('viraaaj', 'thakur', 'viru94@gmail.com', '7894561568', 'helloo');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleid` int(25) NOT NULL,
  `description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleid`, `description`) VALUES
(1, 'Client'),
(2, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(25) NOT NULL DEFAULT '0',
  `service_description` varchar(25) NOT NULL,
  `b_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_description`, `b_id`) VALUES
(123, 'Dog Washing', 22712),
(388, 'Cat Wasjhing ', 58239),
(487, 'Food Provider', 18295),
(685, '', 95782),
(895, 'Pet Transport', 33585);

-- --------------------------------------------------------

--
-- Table structure for table `service_data`
--

CREATE TABLE `service_data` (
  `b_id` int(11) NOT NULL DEFAULT '0',
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `bname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_data`
--

INSERT INTO `service_data` (`b_id`, `fname`, `lname`, `phone`, `email`, `userid`, `bname`) VALUES
(18295, 'yank', 'dfghjkl', '345678978976', 'omkftf@gh.com ', 'Petstr_f3cf', 'pjjkk'),
(22712, 'Omkar', 'Sahasrabudhe', '6824332184', 'omkarmukund.sahasrabudhe@', 'Petstr_d273', 'abc'),
(33585, 'ADITYA', 'KDA', '123-456-7891', 'aditya.r003@gmail.com ', 'Petstr_5b7b', 'ADDA'),
(36061, 'Abhiyuday', 'kuma', '123456789', 'abuu@hmail.com ', 'Petstr_1df8', 'odishfh'),
(50595, 'ajju', 'kia', '133665444654', 'aj@hm.com ', 'Petstr_a883', 'onkdskjfd'),
(58239, 'Omkar', 'Sahasrabudhe', '07798080034', 'omkars2194@gmail.com ', 'Petstr_4067', 'PieFive'),
(65797, 'Arrined', 'Hinesdf', '8172726287', 'omkars2194@gmail.com ', 'Petstr_5b8e', 'University of Texas Arlin'),
(90359, 'Arrined', 'Hinesdf', '8172726287', 'omkars2194@gmail.com ', 'Petstr_101d', 'University of Texas Arlin'),
(95782, 'Omkar', 'Sahasrabudhe', '6824332184', 'omkars2194@gmail.com ', 'Petstr_1be7', '1994');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `userid` varchar(25) NOT NULL DEFAULT '0',
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `roleid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`userid`, `password`, `email`, `roleid`) VALUES
('Petstr_$uniqid', 'wdm@$pwd', 'abhina@gmail.com', 1),
('Petstr_1be7', 'wdm@be708', 'omkars2194@gmail.com', 2),
('Petstr_1df8', '123', 'abuu@hmail.com', 2),
('Petstr_371', '123456', 'akshay.waikar@gmail.com', 1),
('Petstr_4067', '123456789', 'omkars2194@gmail.com', 2),
('Petstr_5b7b', 'wdm@b7b47', 'aditya.r003@gmail.com', 2),
('Petstr_8da', 'wdm@806e', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_8e2', 'wdm@ab36', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_8ea', 'wdm@6e4a', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_901', 'wdm@1b3b', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_902', '', 'omkars2194@gmail.com', 1),
('Petstr_908', 'wdm@ed66', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_936', 'wdm@0dd0', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_95c', '123456789', 'omkars2194@gmail.com', 1),
('Petstr_961', '99999999', 'viru94@gmail.com', 1),
('Petstr_967', 'wdm@2b4d', 'viruwaerf94@gmail.com', 1),
('Petstr_976', 'wdm@18dc', 'paddy.saha@gmail.com', 1),
('Petstr_992', 'wdm@1256', 'omkarmukund.sahasrabudhe@', 1),
('Petstr_995', 'wdm@fbd4', 'aditya.r003@gmail.com', 1),
('Petstr_99c', 'wdm@26ef', 'omkars4@gmail.com', 1),
('Petstr_9a0', 'wdm@d35c', 'omkars2194@gmail.com', 1),
('Petstr_9a4', 'wdm@5d4b', 'omkars2194@gmail.com', 1),
('Petstr_a81', 'wdm@797b', 'viru94@gmail.com', 1),
('Petstr_a883', 'wdm@883c9', 'aj@hm.com', 2),
('Petstr_a91', 'wdm@4998', 'viru94@gmail.com', 1),
('Petstr_d273', 'wdm@273f9', 'omkarmukund.sahasrabudhe@', 2),
('Petstr_f3cf', 'wdm@3cff3', 'omkftf@gh.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_data`
--
ALTER TABLE `client_data`
  ADD PRIMARY KEY (`client_ID`),
  ADD KEY `userid` (`userid`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `service_data`
--
ALTER TABLE `service_data`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_data`
--
ALTER TABLE `client_data`
  MODIFY `client_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_data`
--
ALTER TABLE `client_data`
  ADD CONSTRAINT `client_data_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_data` (`userid`),
  ADD CONSTRAINT `client_data_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `service_data` (`b_id`);

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `roles` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
