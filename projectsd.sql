-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2022 at 11:02 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

DROP TABLE IF EXISTS `facility`;
CREATE TABLE IF NOT EXISTS `facility` (
  `facilityId` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `capacity` int(4) DEFAULT NULL,
  `facilityDetail` varchar(200) NOT NULL,
  `ratePerDay` decimal(6,2) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`facilityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facilityId`, `name`, `category`, `capacity`, `facilityDetail`, `ratePerDay`, `status`) VALUES
('A30', 'AUDITORIUM IBNU SINA', 'AUDITORIUM', 250, 'Meja & kerusi, rostrum, Sistem PA, LCD Projektor, Penghawa Dingin Berpusat', '1150.00', 'Available'),
('A40', 'AUDITORIUM QUANTUM', 'AUDITORIUM', 80, 'Meja & kerusi, rostrum, Sistem PA, LCD Projektor, Penghawa Dingin Berpusat', '600.00', 'Available'),
('D10', 'ATRIUM', 'DEWAN SERBAGUNA', 500, 'Pentas & Penghawa Dingin Berpusat', '650.00', 'Available'),
('D20', 'ANNEX', 'DEWAN SERBAGUNA', 150, 'Penghawa Dingin Berpusat', '500.00', 'Available'),
('M70', 'MAKMAL SPARK STATION', 'MAKMAL', 40, 'Meja & kerusi, Penghawa Dingin \r\nBerpusat', '720.00', 'Available'),
('M80', 'MAKMAL CREATIVE SPOT', 'MAKMAL', 40, 'Meja & kerusi, Penghawa Dingin \r\nBerpusat', '720.00', 'Available'),
('M90', 'MAKMAL WONDERS HUB', 'MAKMAL', 40, 'Meja & kerusi, Penghawa Dingin \r\nBerpusat', '720.00', 'Available'),
('R50', 'RUANG SERBAGUNA (MPH)', 'RUANG SERBAGUNA', 150, 'Meja & kerusi, Penghawa Dingin \r\nBerpusat', '600.00', 'Available'),
('R60', 'LANDSKAP/WATER PLAZA', 'RUANG SERBAGUNA', 300, '-', '720.00', 'Available'),
('S60', 'GELANGGANG FUTSAL', 'SUKAN', NULL, '-', '70.00', 'Available'),
('S61', 'BasketBall', 'Basketball Court', 100, '-', '100.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL,
  PRIMARY KEY (`pwdResetId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
CREATE TABLE IF NOT EXISTS `rent` (
  `rent_reference` int(30) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `date_reserved` date NOT NULL,
  `reserved_by` varchar(30) NOT NULL,
  `date_rent_start` date NOT NULL,
  `date_rent_end` date NOT NULL,
  `facilityId` varchar(30) NOT NULL,
  `total_price` double NOT NULL,
  PRIMARY KEY (`rent_reference`),
  KEY `userId` (`userId`),
  KEY `facilityId` (`facilityId`),
  KEY `facilityId_2` (`facilityId`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_reference`, `userId`, `date_reserved`, `reserved_by`, `date_rent_start`, `date_rent_end`, `facilityId`, `total_price`) VALUES
(85, 'tancheesen123@hotmail.com', '2022-04-13', 'TANCHEESEN', '2022-04-14', '2022-04-15', 'A30', 1150),
(86, '9@gmail.com', '2022-04-13', 'Mohamad Azafri', '2022-04-14', '2022-04-15', 'A40', 600),
(87, '9@gmail.com', '2022-04-13', 'Mohamad Azafri', '2022-04-16', '2022-04-17', 'D20', 500),
(88, '9@gmail.com', '2022-04-13', 'Mohamad Azafri', '2022-04-18', '2022-04-28', 'D10', 6500),
(89, 'shazanur0@gmail.com', '2022-04-13', 'testing 123123', '2022-04-18', '2022-04-20', 'A30', 2300),
(90, 'shazanur0@gmail.com', '2022-04-13', 'testing 123123', '2022-04-21', '2022-04-22', 'M80', 720),
(91, 'shazanur0@gmail.com', '2022-04-13', 'testing 123123', '2022-04-21', '2022-04-22', 'M80', 720),
(92, 'shazanur0@gmail.com', '2022-04-13', 'testing 123123', '2022-04-18', '2022-05-01', 'R50', 7800),
(93, 'tancheesen123@hotmail.com', '2022-04-13', 'TANCHEESEN', '2022-04-18', '2022-04-23', 'M70', 3600),
(94, 'tancheesen123@hotmail.com', '2022-04-13', 'TANCHEESEN', '2022-04-18', '2022-04-23', 'M70', 3600),
(95, 'tancheesen123@hotmail.com', '2022-04-13', 'TANCHEESEN', '2022-04-25', '2022-04-27', 'M70', 1440),
(96, 'tancheesen123@hotmail.com', '2022-04-13', 'TANCHEESEN', '2022-05-03', '2022-05-06', 'M90', 2160);

-- --------------------------------------------------------

--
-- Table structure for table `state_district`
--

DROP TABLE IF EXISTS `state_district`;
CREATE TABLE IF NOT EXISTS `state_district` (
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `postcode` int(6) NOT NULL,
  PRIMARY KEY (`district`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_district`
--

INSERT INTO `state_district` (`state`, `district`, `postcode`) VALUES
('MELAKA', 'ALOR GAJAH', 78000),
('KELANTAN', 'BACHOK', 16310),
('KEDAH', 'BALING', 9100),
('KEDAH', 'BANDAR BAHARU', 34950),
('JOHOR', 'BATU PAHAT', 83000),
('PAHANG', 'BENTONG', 28700),
('PAHANG', 'BERA', 28200),
('SARAWAK', 'BINTULU', 93550),
('PULAU PINANG', 'GEORGE TOWN', 10000),
('PERAK', 'IPOH', 30000),
('MELAKA', 'JASIN', 77000),
('KELANTAN', 'JELI', 17600),
('JOHOR', 'JOHOR BAHRU', 80594),
('PERLIS', 'KANGAR', 1000),
('TERENGGANU', 'KERTEH', 20550),
('SABAH', 'KOTA KINABALU', 88500),
('NEGERI SEMBILAN', 'KUALA KLAWANG', 71600),
('TERENGGANU', 'KUALA TERENGGANU', 20000),
('SARAWAK', 'KUCHING', 93000),
('NEGERI SEMBILAN', 'MANTIN', 71750),
('SABAH', 'RANAU', 88632),
('SELANGOR', 'SHAH ALAM', 40000),
('SELANGOR', 'SUNGAI BESAR', 40664),
('PERAK', 'TAPAH', 35000),
('PULAU PINANG', 'TELUK BAHANG', 10582);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL DEFAULT 'Student',
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `createdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `password`, `userType`, `vkey`, `verified`, `createdate`) VALUES
('123123@hotmail.com', '12345678', 'Staff', '9d44243f6d4b179327320c9357bff65d', 0, '2022-09-11 10:19:32.424557'),
('admin', 'admin', 'Admin', 'fcb352813a49608905deef5404d55109', 1, '2022-09-06 12:12:41.245271'),
('chee.sen987@gmail.com', 'lol', 'Staff', '3bf5a045a6bf31b3b258b3e8838baefc', 0, '2022-09-09 16:30:56.812795'),
('cheesen987@gmail.com', 'Lone#2002', 'Student', '6fbd07a60045e64687d60ff6771bed1e', 1, '2022-09-04 06:43:10.036086'),
('lol@hotmail.com', 'admin', 'Staff', '6c89d978e6a9579e9236d9d16bc8d198', 1, '2022-09-06 12:17:39.760777'),
('lonely1233@hotmail.com', 'lonely1233', 'Staff', '2194d4b41f5ba23cea43762dedf1ef4c', 1, '2022-09-04 03:31:44.190718'),
('tancheesen123@hotmail.com', 'hoho', 'Staff', '11aafa02d8ea66933a5a5c524b6a78e2', 1, '2022-09-05 14:22:40.424895'),
('ydk1421@gmail.com', 'staff2', 'Staff', 'c1068d17eebb486a11091ca197066068', 1, '2022-09-10 12:04:28.886888');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `MatricNum` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `phoneNum` varchar(30) NOT NULL,
  PRIMARY KEY (`MatricNum`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfostaff`
--

DROP TABLE IF EXISTS `userinfostaff`;
CREATE TABLE IF NOT EXISTS `userinfostaff` (
  `staffId` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `phoneNum` varchar(30) NOT NULL,
  PRIMARY KEY (`staffId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfostaff`
--

INSERT INTO `userinfostaff` (`staffId`, `name`, `userId`, `phoneNum`) VALUES
('213', '123', '123', '123'),
('A20DW114', 'tancheesen', 'tan@gmail.com', '011231231231'),
('A20d123123', 'tancheesen', 'tan@gmail.com', '12312'),
('A20DW1114', 'lonely123', 'lonely123@hotmail.com', '01115386485'),
('A20DW11143', 'lonely1233', 'lonely1233@hotmail.com', '011153864853'),
('TEST01', 'TEST01', 'TEST01@hotmail.com', '01320'),
('testing', 'testing', 'cheesen987@gmail.com', '12312'),
('qweqwe', 'qweqwe', 'cheesen987@gmail.com', '132123'),
('staff1', 'Yap Deh Kai', 'ydk1421@gmail.com', '01159908615'),
('lonely123', 'lonely', 'lol@hotmail.com', '123'),
('admin', 'Admin', 'admin123@hotmail.com', '123'),
('A20DW312331231', 'lol', 'chee.sen987@gmail.com', '0123123123'),
('123', '123', '123123@hotmail.com', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`facilityId`) REFERENCES `facility` (`facilityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
