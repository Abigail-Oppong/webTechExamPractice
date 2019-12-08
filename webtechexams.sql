-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 09:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechexams`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pcontact` varchar(10) NOT NULL,
  `pdob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`pid`, `pname`, `email`, `pcontact`, `pdob`) VALUES
(1, 'David', 'dave@gmail.com', '0233456567', '2019-11-12'),
(2, 'Emma ', 'ema@gmail.com', '0987654321', '2019-11-07'),
(3, 'Fred', 'fred@gmail.com', '0456676445', '2019-11-11'),
(4, 'Simon', 'simon@gmail.com', '0244567878', '2019-11-01'),
(5, 'grace', 'grace@gmail.com', '0456556676', '2019-11-06'),
(6, 'Michael ', 'm@gmail.com', '0985775774', '2019-11-05'),
(7, 'anyname', 'anything@gmail.com', '034567645', '2019-11-12'),
(8, 'Whtater', 'email@email.com', '038383833', '2019-11-04'),
(9, '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
