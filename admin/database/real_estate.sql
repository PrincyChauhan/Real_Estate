-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 03:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Princy', 'pc@gmail.com', 'princy');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `subject`, `email`, `mobile`, `message`, `date`) VALUES
(4, 'Princy Chauhan', 'hui', 'pc@gmail.com', '9638653060', 'assawdwdwedw', '2021-03-14 17:18:17'),
(5, 'Princy Chauhan', 'atpl', 'pc@gmail.com', '9638653060', 'ahbhaai', '2021-03-16 20:49:33'),
(6, 'Princy Chauhan', 'cc', 'pc@gmail.com', '9638653060', 'cscscsdv', '2021-03-17 15:23:39'),
(7, 'zxc', 'atpl', 'jimenid209@aramidth.com', '9638653060', 'qsqawdwefeg', '2021-03-27 12:45:54'),
(9, 'XYZ', 'HOME Enquiry', 'jimenid209@aramidth.com', '123456789', 'hello ', '2021-04-11 10:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `mahatma`
--

CREATE TABLE `mahatma` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `satsang` varchar(255) NOT NULL,
  `center_name` varchar(225) NOT NULL,
  `sub_center_name` varchar(255) NOT NULL,
  `coordinator_name` varchar(255) NOT NULL,
  `mahatma_id` varchar(255) NOT NULL,
  `events` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahatma`
--

INSERT INTO `mahatma` (`id`, `name`, `father_name`, `email`, `mobile`, `message`, `date`, `satsang`, `center_name`, `sub_center_name`, `coordinator_name`, `mahatma_id`, `events`) VALUES
(28, 'Princy Chauhan', 's', 'pc@gmail.com', '9638653060', 'huhu', '2021-03-16 17:04:12', 'yes', 's', 'hr', 'hy', 's', 'Hindi Shibir,Any other,'),
(36, 'qwe', 'qwer', 'logey47180@dxecig.com', '123456789', 'qwertyuioasd', '2021-04-11 10:21:53', 'yes', 'zxcd', 'xcv', 'qwert', '123', 'Parayan,MMTH shibir,WHMT shibir,'),
(37, 'Princy Chauhan', 'qqq', 'koromic827@hrandod.com', '9638653060', 'xasasc', '2021-04-17 11:29:10', 'No', 'SURAT', 'xcv', 'qwert', '12344', 'Hindi Shibir,'),
(38, 'wwq', 'eew', 'pc@gmail.com', 'eee', 'sdfd', '2021-04-17 13:30:50', 'No', 'wee', 'ew', 'ewewq', 'ew', 'MMTH shibir,');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `hall` int(11) NOT NULL,
  `kichan` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `description` varchar(300) NOT NULL,
  `location` text NOT NULL,
  `property_owner` varchar(20) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `sold` varchar(12) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `bedroom`, `hall`, `kichan`, `bathroom`, `balcony`, `price`, `address`, `image`, `description`, `location`, `property_owner`, `property_type`, `sold`, `date`) VALUES
(3, 'Sanatan', 2, 1, 1, 2, 1, '199999', 'Adalaj city', 'download.jpg', 'Independent, twin and many such varieties available with creative designs and excellent location', '', 'Princy ', 'Apartment', 'yes', '2020-12-17 14:40:52'),
(4, 'Swaroop', 2, 2, 1, 2, 2, '250000', 'Adalaj city', 'images.jpg', 'creative designs and excellent location', '', 'Presha ', 'Bunglow', 'yes', '2020-12-17 15:01:27'),
(6, 'Stuti', 1, 1, 1, 2, 1, '900000', 'Adalaj city', 'f1.jpg', 'fine place to live.', '', 'Presha ', 'Apartment', 'yes', '2021-02-24 17:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahatma`
--
ALTER TABLE `mahatma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mahatma`
--
ALTER TABLE `mahatma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
