-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 10:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'subhash', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image1`, `image2`, `image3`, `image4`, `property_id`) VALUES
(1, '6.jpg', '1.jpg', '1.jpg', '1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
`id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `hall` int(11) NOT NULL,
  `kichan` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `sqr_price` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `video` text NOT NULL,
  `image` text NOT NULL,
  `description` varchar(300) NOT NULL,
  `location` text NOT NULL,
  `property_owner` varchar(20) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `lot_size` varchar(20) NOT NULL,
  `sold` varchar(12) NOT NULL,
  `land_area` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `bedroom`, `hall`, `kichan`, `bathroom`, `balcony`, `price`, `sqr_price`, `address`, `video`, `image`, `description`, `location`, `property_owner`, `property_type`, `lot_size`, `sold`, `land_area`, `date`) VALUES
(2, 'Delux room', 1, 1, 1, 1, 1, '2000', '200', 'ghaziabad uttarpradesh', 'https://www.youtube.com/embed/rOO3MjLABi8', '6.jpg', 'Did you play off any hot home styles this year to improve your listingâ€™s appearance? These were some of the top home design fads.', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.333460644938!2d77.38356901504943!3d28.61976638242279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff3a1792c7d%3A0xf37278c381e08fa9!2sApex+TG+India+Pvt+Ltd+Java%2C+Android%2C+PHP+Training+Noida!5e0!3m2!1sen!2sin!4v1547536527279" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'subhash chandar', 'house', '200', 'yes', '200', '2019-01-12 12:10:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
