-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 03:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day_id`, `days`) VALUES
(1, 'M'),
(2, 'T'),
(3, 'W'),
(4, 'TH'),
(5, 'F'),
(6, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `grade` varchar(225) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `day_id` varchar(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sched_status` int(11) DEFAULT '0',
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `sec_id`, `grade`, `sub_id`, `teacher_id`, `day_id`, `time_id`, `user_id`, `sched_status`, `datecreated`, `dateupdated`) VALUES
(1, 1, '11', 1, 2, 'M', 7, 2, 1, '2018-04-02 14:36:11', '2018-04-03 13:12:52'),
(2, 1, '11', 1, 2, 'M', 1, 2, 1, '2018-04-02 14:38:05', '2018-04-03 13:37:13'),
(3, 1, '11', 1, 2, 'M', 2, 2, 1, '2018-04-02 14:50:28', '2018-04-03 13:37:13'),
(4, 8, '7', 4, 3, 'M', 1, 2, 2, '2018-04-03 15:19:49', '2018-04-03 15:29:32'),
(5, 8, '7', 4, 3, 'M', 2, 2, 2, '2018-04-03 15:22:02', '2018-04-03 15:29:32'),
(6, 7, '8', 2, 4, 'TH', 4, 2, 0, '2018-04-03 15:23:52', NULL),
(7, 8, '7', 1, 2, 'T', 5, 2, 2, '2018-04-03 15:33:46', '2018-04-03 15:34:36'),
(8, 8, '7', 2, 6, 'W', 6, 2, 2, '2018-04-03 15:34:06', '2018-04-03 15:34:36'),
(9, 8, '7', 5, 2, 'TH', 9, 2, 2, '2018-04-03 15:34:22', '2018-04-03 15:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `sec_id` int(11) NOT NULL,
  `sectionName` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_id`, `sectionName`, `grade`) VALUES
(1, 'HUMSS', 11),
(3, 'ABM', 11),
(4, 'HUMSS', 12),
(5, 'Sampaguita', 9),
(6, 'Amethyst', 9),
(7, 'Helium', 8),
(8, 'Aries', 7);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `settinh_id` int(11) NOT NULL,
  `show_sched` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studno` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studno`, `lname`, `fname`, `mname`, `gender`, `address`) VALUES
(2, 789456, 'Monteverde', 'Juan', 'Smith', 'Male', '#3 lot 34 block 21, address, city');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(11) NOT NULL,
  `subCode` varchar(50) NOT NULL,
  `subName` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `subCode`, `subName`, `status`) VALUES
(1, 'EN+12', 'English', 1),
(2, 'OCMM', 'Oral Communication', 1),
(3, 'RW1', 'Reading and Writing', 1),
(4, 'En121', 'Komunikasyon at Pananaliksik sa Wika at Kulturang ', 1),
(5, 'CPA-R', 'Contemporary Philippine Arts from the Regions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submitted_schedule`
--

CREATE TABLE `submitted_schedule` (
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `schedule_status` int(11) NOT NULL,
  `timestamp_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_schedule`
--

INSERT INTO `submitted_schedule` (`id`, `grade`, `section_id`, `user_id`, `schedule_status`, `timestamp_created`, `timestamp_updated`) VALUES
(1, 11, 1, 2, 1, '2018-04-02 15:36:22', '2018-04-03 13:37:13'),
(2, 11, 1, 5, 0, '2018-04-02 15:36:22', '2018-04-03 13:37:13'),
(3, 11, 1, 3, 0, '2018-04-02 15:36:22', '2018-04-03 13:33:59'),
(4, 7, 8, 2, 0, '2018-04-03 15:29:32', '0000-00-00 00:00:00'),
(5, 7, 8, 2, 0, '2018-04-03 15:34:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `title`, `lname`, `fname`, `mname`, `gender`, `position`, `address`) VALUES
(2, 'MR', 'Clanton', 'Neville', 'Clay', 'Male', 'Teacher 1', '3677 Ashton Lane, Fulton, Mississippi'),
(3, 'MR', 'Naldoza', 'Junjun', 'Eclarinal', 'Male', 'Teacher 2', '3356 Stratford Park Evansville Idiana'),
(4, 'MRS', 'Berkeley', 'Patsy', 'C', 'Female', 'Teacher 1', '2233 Burke Street North Billerica Massachusetts'),
(5, 'MRS', 'Perez', 'Gertrude', 'L ', 'Female', 'Teacher 3', '467 Ritter Street Huntsville Alabama'),
(6, 'MR', 'Fisher', 'Juan', 'B ', 'Male', 'Teacher 4', '377 Stroop Hill Road Atlanta Georgia');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `time_start` varchar(225) NOT NULL,
  `time_end` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_start`, `time_end`) VALUES
(1, '7:00AM', '8:00AM'),
(2, '8:00AM', '9:00AM'),
(3, '9:00AM', '10:00AM'),
(4, '10:00AM', '11:00AM'),
(5, '11:00AM', '12:00PM'),
(6, '1:00PM', '2:00PM'),
(7, '2:00PM', '3:00PM'),
(8, '3:00PM', '4:00PM'),
(9, '4:00PM', '5:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `mname`, `password`, `email`, `position`, `user_type`, `title`, `status`, `date_created`, `date_updated`) VALUES
(1, '', 'Admin', '', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff', 'admin@scheduler.com', 'Admin', 1, 'Mr.', 1, '2018-03-17 02:27:47', '2018-03-18 06:13:59'),
(2, 'Teacher', 'Sample', 'Scheduler', '64a8d0534943275efeaf05a6510daf2e478cc24a', 'teacher@scheduler.com', 'Head Teacher1', 3, 'Mrs', 1, '2018-03-17 02:30:18', '2018-03-18 08:30:09'),
(3, 'Principal', 'Sample', 'Scheduler', '64a8d0534943275efeaf05a6510daf2e478cc24a', 'principal@scheduler.com', 'Principal1', 2, 'Mr', 1, '2018-03-17 02:30:18', '2018-03-18 09:19:15'),
(4, 'Principal', 'Sample', 'Account', 'Sample123', 'principal1@scheduler.com', 'Principal', 2, 'Mr', 1, '2018-03-17 07:20:36', '2018-03-17 07:36:32'),
(5, 'Lastname', 'Firstname', 'Middle', '64a8d0534943275efeaf05a6510daf2e478cc24a', 'sample11@sample.com', 'Principal', 2, 'Mrs', 0, '2018-03-18 05:50:05', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`settinh_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `submitted_schedule`
--
ALTER TABLE `submitted_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `settinh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `submitted_schedule`
--
ALTER TABLE `submitted_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
