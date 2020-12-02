-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 10:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgh`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `ad_username` varchar(30) NOT NULL,
  `ad_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `ad_username`, `ad_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'hopefully', 'hopefully');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `b_time` time NOT NULL,
  `b_contact` varchar(10) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_surname` varchar(30) NOT NULL,
  `b_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `b_date`, `b_time`, `b_contact`, `purpose`, `b_name`, `b_surname`, `b_id`) VALUES
(6, '2020-11-30', '09:00:00', '0791504873', 'consult', 'Hope', 'Moloto', '9806155121083');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id_num` varchar(13) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `id_num`, `phoneNum`, `address`, `email`, `password`, `gender`) VALUES
(1, 'thabang', '9711305616089', 'hopefully', '1853 Mostumi street ,Soshanguve', 'njana@gmail.com', 'da1ed0b7f0ccd6dfe1a1c7bdb868e720', 'Male'),
(2, 'Hope Moloto', '9900115689089', '', '123 tut', 'hope@mgh.com', '65fd89d1edc4f5732e09982362c5a941', 'saab'),
(3, 'John Doe', '6710271111586', '', '123 Aubrey Road', 'me@mgh.com', '65fd89d1edc4f5732e09982362c5a941', 'volvo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
