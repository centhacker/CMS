-- phpMyAdmin SQL Dump taqi ratnani is and idiot
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 07:07 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchId` int(11) NOT NULL,
  `BranchName` varchar(100) NOT NULL,
  `BranchAddress` varchar(100) NOT NULL,
  `RegionId` int(11) NOT NULL,
  `NetworkId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchId`, `BranchName`, `BranchAddress`, `RegionId`, `NetworkId`) VALUES
(1, 'aaa', 'bbbbbbbbbbb', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branchcounters`
--

CREATE TABLE `branchcounters` (
  `CounterId` int(11) NOT NULL,
  `BranchId` int(11) NOT NULL,
  `CounterName` varchar(100) NOT NULL,
  `SortOrder` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchcounters`
--

INSERT INTO `branchcounters` (`CounterId`, `BranchId`, `CounterName`, `SortOrder`) VALUES
(1, 1, 'Counter', 12);

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `NetworkId` int(11) NOT NULL,
  `IP` varchar(50) NOT NULL,
  `Port` varchar(10) NOT NULL,
  `EngineId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`NetworkId`, `IP`, `Port`, `EngineId`) VALUES
(1, '192.168.1.1', '8080', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `PermissionId` varchar(100) NOT NULL,
  `Url` varchar(100) NOT NULL,
  `ParentPermissionId` varchar(100) NOT NULL,
  `SortOrder` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `RegionId` int(11) NOT NULL,
  `RegionName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`RegionId`, `RegionName`) VALUES
(1, 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `regionrole`
--

CREATE TABLE `regionrole` (
  `RegionId` int(11) NOT NULL,
  `RoleId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regionrole`
--

INSERT INTO `regionrole` (`RegionId`, `RoleId`) VALUES
(0, 'a'),
(0, 'a'),
(0, 'Adminstrator'),
(0, 'Agent'),
(0, ''),
(0, ''),
(1, 'Adminstrator'),
(1, 'Agent'),
(1, 'Agent');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleId` varchar(100) NOT NULL,
  `CreatedBy` date NOT NULL,
  `CreatedDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleId`, `CreatedBy`, `CreatedDate`) VALUES
('Adminstrator', '0000-00-00', '2017-01-18'),
('Agent', '2017-01-19', '2017-01-19'),
('Agent', '2017-01-19', '2017-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `rolepermission`
--

CREATE TABLE `rolepermission` (
  `RoleId` varchar(100) NOT NULL,
  `PermissionId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CreatedDate` date NOT NULL,
  `IsActive` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `RoleId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `Username`, `Password`, `CreatedDate`, `IsActive`, `Status`, `RoleId`) VALUES
(1, 'taqi', 'ratnani', 'taqi', 'aaaa', '2017-01-17', '', '', ''),
(2, 'mohammed ', 'taqi', 'infi', 'aqaqa', '2017-01-17', '1', '1', ''),
(3, 'aaa', 'aaa', 'tt', 'aaa', '2017-01-17', '1', '1', ''),
(4, 'Taqi', 'Ratnani', 'taqiratnani', '12345', '2017-01-18', '1', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchId`);

--
-- Indexes for table `branchcounters`
--
ALTER TABLE `branchcounters`
  ADD PRIMARY KEY (`CounterId`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`NetworkId`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`PermissionId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`RegionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `BranchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branchcounters`
--
ALTER TABLE `branchcounters`
  MODIFY `CounterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `NetworkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `RegionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
