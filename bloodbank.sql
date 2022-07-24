-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 04:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `sno` int(11) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_location` varchar(50) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`sno`, `blood_type`, `hospital_name`, `hospital_location`, `tstamp`) VALUES
(1, 'B+', 'Apollo', 'Bangalore', '2022-07-23 23:48:11'),
(2, 'B-', 'nrr', 'udupi', '2022-07-24 00:10:00'),
(3, '0-', 'Sapthagiri Hospital', 'Soldevanahalli', '2022-07-24 00:14:14'),
(5, 'z-', 'zeno', 'karnataka', '2022-07-24 06:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `sno` int(11) NOT NULL,
  `receiver_name` varchar(20) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `blood_group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`sno`, `receiver_name`, `hospital_name`, `blood_group`) VALUES
(1, 'tushar', 'Apollosadad', 'b+'),
(2, 'sizzi', 'dsfsfsf', 'b+'),
(3, 'sizzi', 'dsfsfsf', 'b+'),
(4, 'ashi', 'hkg', '0-'),
(5, 'tush', 'nrr', 'B-'),
(6, 'tush', 'Sapthagiri Hospital', '0-'),
(7, 'tush', 'Sapthagiri Hospital', '0-'),
(8, 'tush', 'nrr', 'B-'),
(9, 'pera', 'zeno', 'z-'),
(10, 'pera', '', ''),
(11, 'pera', '', ''),
(12, 'pera', 'Apollo', 'B+'),
(13, 'pera', 'nrr', 'B-'),
(14, 'pera', 'nrr', 'B-'),
(15, 'pera', 'nrr', 'B-'),
(16, 'pera', 'Apollo', 'B+'),
(17, 'pera', 'Apollo', 'B+'),
(18, 'pera', 'Apollo', 'B+'),
(19, 'pera', 'Apollo', 'B+'),
(20, 'pera', 'Apollo', 'B+'),
(21, 'pera', 'Apollo', 'B+'),
(22, 'pera', 'nrr', 'B-'),
(23, 'pera', 'Sapthagiri Hospital', '0-'),
(24, 'pera', 'zeno', 'z-'),
(25, 'pera', 'Apollo', 'B+'),
(26, 'pera', 'Apollo', 'B+'),
(27, 'pera', 'nrr', 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `blood`, `location`, `username`, `password`, `user_type`) VALUES
(1, 'Apollo', NULL, 'Bangalore', 'apollo123', 'apollo1234', 'hospital'),
(2, 'asdsad', NULL, 'admin', 'sadsa', '$2y$10$1xGvi.4AZu7HpjPeWpOWZ.mAY2dCwUAk7s.nnXtHu6PZuNyqmNze2', 'hospital'),
(3, 'apollo', NULL, 'admin', 'apollo', '$2y$10$enkbG50FTPbU57ibCySJK.YinC7FfwH.PVCyas8MihOEI84Anzge2', 'hospital'),
(4, 'Tushar Choudhary', NULL, 'bihar', 'tushu', '$2y$10$Rmr2tGjamxwE6xTAVb4.VeKO2xo.o6iV4Vu1AipOTrOGFn23Cptjy', ''),
(5, 'asd', NULL, 'admin', 'das', '$2y$10$ypZttkKAAaDIG9E8f1Iz/eGZoyGVRC869F8MgRCqd82hIQjCmef2S', 'hospital'),
(6, 'Tushar Choudhary', NULL, 'bihar', 'AddictedA12216', '$2y$10$agXUVz2LRwzxt.n7ef9ux.yrg3EceSmdal5RQSR4tueP49dkPtwTm', ''),
(7, 'asd', NULL, 'asd', 'dsa', '$2y$10$f29jn2njtzKZ1qLWowYlEeXYdiFkjvs8.z97JyJwO.TFpgjSaztlC', 'hospital'),
(8, 'Prerna Kumari', NULL, 'admin', 'asdsddsa', '$2y$10$OV.ZIlRUfTNiOYzwa2NA2eMHdS0ATAmIDa1U0CgwLHPPtfnxz1A1y', 'hospital'),
(9, 'Tushar Choudhary', NULL, 'admin', 'peragjhlk', '$2y$10$oNsawi9ON7fnpnDOhToilehyKWi.CgaTfjfJWtgSp64W.g9Rg4Sc2', 'reciever'),
(10, 'Tushar Choudhary', 'b+', 'admin', 'asdefgrrgdvfdv', '$2y$10$6d.G0.UV6pCWxhVpGjH9oO7RQwrr570.veDaNg/SSenIjaGwD/Hr.', 'reciever'),
(11, 'TUSH', NULL, 'TUSH', 'tush', '$2y$10$WcVvuSNOLHJbbZ8M56IMZeNjk7ZK9hjpXNpAvB4VkftpckSyA7tkK', 'hospital'),
(12, 'pera', 'b+', 'pera', 'pera', '$2y$10$GYvBZWwdyzodCG0uHusgC./lhgc6T8ZydNNaI5eqH0cHiydJceVO.', 'reciever'),
(13, 'zeno', NULL, 'karnataka', 'zeno', '$2y$10$7nsf4ZGfYNL41RkY9rYYjeMnqJbnzuB9Nwr/jYlmLAZ4Mrs14b1Ka', 'hospital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
