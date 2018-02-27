-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 04:44 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pft database`
--

-- --------------------------------------------------------

--
-- Table structure for table `pft`
--

CREATE TABLE `pft` (
  `SNO` int(5) NOT NULL,
  `NAME` text NOT NULL,
  `CRNO` varchar(12) NOT NULL,
  `TIMESTAMP` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AGE` int(2) NOT NULL,
  `SEX` varchar(1) NOT NULL,
  `OPD` text NOT NULL,
  `HEIGHT` decimal(4,1) DEFAULT NULL,
  `WEIGHT` decimal(4,1) DEFAULT NULL,
  `BSA` decimal(3,2) DEFAULT NULL,
  `DIAGNOSIS` text NOT NULL,
  `FVC` decimal(3,2) DEFAULT NULL,
  `FVCPRED` decimal(3,2) DEFAULT NULL,
  `FVCLLN` decimal(3,2) DEFAULT NULL,
  `FVCPERC` decimal(5,2) DEFAULT NULL,
  `FEV1` decimal(3,2) DEFAULT NULL,
  `FEV1PRED` decimal(3,2) DEFAULT NULL,
  `FEV1LLN` decimal(3,2) DEFAULT NULL,
  `FEV1PERC` decimal(5,2) DEFAULT NULL,
  `RAT` decimal(3,1) DEFAULT NULL,
  `RATPRED` decimal(3,1) DEFAULT NULL,
  `RATLLN` decimal(3,1) DEFAULT NULL,
  `PEF` decimal(4,1) DEFAULT NULL,
  `PEFPRED` decimal(4,1) DEFAULT NULL,
  `PEFLLN` decimal(4,1) DEFAULT NULL,
  `PEFPERC` decimal(4,1) DEFAULT NULL,
  `FEF` decimal(4,1) DEFAULT NULL,
  `FEFPRED` decimal(4,1) DEFAULT NULL,
  `FEFLLN` decimal(4,1) DEFAULT NULL,
  `FEFPERC` decimal(4,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `pft`
--

INSERT INTO `pft` (`SNO`, `NAME`, `CRNO`, `TIMESTAMP`, `AGE`, `SEX`, `OPD`, `HEIGHT`, `WEIGHT`, `BSA`, `DIAGNOSIS`, `FVC`, `FVCPRED`, `FVCLLN`, `FVCPERC`, `FEV1`, `FEV1PRED`, `FEV1LLN`, `FEV1PERC`, `RAT`, `RATPRED`, `RATLLN`, `PEF`, `PEFPRED`, `PEFLLN`, `PEFPERC`, `FEF`, `FEFPRED`, `FEFLLN`, `FEFPERC`) VALUES
(12, 'Tushar', '123456789112', '2017-07-25 23:41:52', 20, '1', 'jcjbc mvcxj jvx', '170.0', '60.0', '1.69', 'OK', '3.00', '4.44', '3.62', '67.57', '2.00', '3.74', '3.05', '53.48', '66.7', '84.9', '74.0', '3.0', '518.3', '427.8', '0.6', '3.0', '264.8', '162.3', '1.1'),
(123, 'wwww', '124', '2017-12-17 21:51:14', 56, 'M', 'JJDJDJDJDJDJ', '56.0', '45.0', '0.67', 'CSSD', '3.00', '-1.64', '-2.46', '-182.93', '2.00', '-1.10', '-1.79', '-181.82', '66.7', '85.8', '74.9', '1.0', '205.8', '115.3', '0.5', '4.0', '19.4', '-83.1', '20.7'),
(1, '2', '2', '2017-07-26 01:17:28', 2, '2', '', '170.0', '80.0', '1.92', 'FDFDF', '3.00', '3.87', '3.14', '77.52', '2.00', '3.46', '2.93', '57.80', '66.7', '93.3', '83.8', '1.0', '411.8', '327.9', '0.2', '0.5', '272.8', '196.3', '0.2'),
(2, 'ABC', '33', '2017-07-26 17:07:20', 33, '1', 'wffefefre', '150.0', '80.0', '1.75', 'xss', '3.00', '3.28', '2.46', '91.46', '2.00', '2.74', '2.05', '72.99', '66.7', '83.1', '72.2', '1.9', '480.2', '389.7', '0.4', '1.0', '205.8', '103.3', '0.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pft`
--
ALTER TABLE `pft`
  ADD PRIMARY KEY (`CRNO`,`TIMESTAMP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
