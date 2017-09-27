-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 10:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat2db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone_Number` int(15) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserType` varchar(30) NOT NULL,
  `AccessTime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `Full_Name`, `Email`, `Phone_Number`, `User_Name`, `Password`, `UserType`, `AccessTime`, `Image`, `Address`) VALUES
(1, 'Morris', 'morrismuriithi85@gmail.com', 56789, 'morris', 'mmn20', 'User', '2017-09-18 20:12:42.895653', '', ''),
(2, 'Brian Seth', 'sethbrian@gmail.com', 793835675, 'Brayo', '5555', 'Admin', '2017-09-18 20:14:56.877728', '', '');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
