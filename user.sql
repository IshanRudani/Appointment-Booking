-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 09:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `share_app` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `last_name`, `email`, `phone`, `date`, `time`, `uname`, `share_app`) VALUES
(43, 'Bhavin', 'Mistry', 'ishanrudani25@gmail.com', 6476401396, '2020-01-07', '11:11:00', 'ishan', 'Robert'),
(44, 'Abhi', 'Abhie', 'ishanrudani25@gmail.com', 4287934794, '2020-01-07', '11:11:00', 'abhi', 'ishan'),
(45, 'Ishan', 'Rudani', 'ishanrudani25@gmail.com', 6476401396, '2020-01-07', '11:11:00', 'ishan', 'kunal'),
(46, 'Kunal', 'Patel', 'ishanrudani25@gmail.com', 6476401396, '2020-01-14', '11:11:00', 'kunal', 'ishan'),
(47, 'Miral', 'Miles', 'ishanrudani25@gmail.com', 6476401396, '2020-01-08', '11:11:00', 'Miral', 'ishan'),
(48, 'Robert', 'Meth', 'robert@emhware.com', 6136387183, '2020-01-31', '12:00:00', 'Robert', 'ishan'),
(50, 'Liam', 'Bull', 'liambull@emhware.com', 6136738737, '2020-01-29', '11:00:00', 'Liam', 'Robert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user foreign key` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `user foreign key` FOREIGN KEY (`uname`) REFERENCES `userprimary` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
