-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 08:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_det`
--

CREATE TABLE `com_det` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `addr` text NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_sel`
--

CREATE TABLE `com_sel` (
  `name` varchar(50) NOT NULL,
  `stu_admno` varchar(50) NOT NULL,
  `flag` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod_appr`
--

CREATE TABLE `hod_appr` (
  `branch` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admno` varchar(50) NOT NULL,
  `approved` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod_det`
--

CREATE TABLE `hod_det` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_aca`
--

CREATE TABLE `per_aca` (
  `admno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `br` varchar(50) NOT NULL,
  `divs` varchar(50) NOT NULL,
  `admq` varchar(50) NOT NULL,
  `entr` int(50) NOT NULL,
  `parr` int(50) NOT NULL,
  `harr` varchar(20) NOT NULL,
  `t10p` float NOT NULL,
  `t12p` float NOT NULL,
  `u1` float NOT NULL,
  `u2` float NOT NULL,
  `u3` float NOT NULL,
  `u4` float NOT NULL,
  `u5` float NOT NULL,
  `uc` float NOT NULL,
  `p1` float NOT NULL,
  `p2` float NOT NULL,
  `pc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_appr`
--

CREATE TABLE `per_appr` (
  `branch` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admno` varchar(50) NOT NULL,
  `approved` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_det`
--

CREATE TABLE `per_det` (
  `image` varchar(50) NOT NULL,
  `admno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `addr` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `focc` varchar(50) NOT NULL,
  `fmo` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mocc` varchar(50) NOT NULL,
  `mmo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_pla`
--

CREATE TABLE `per_pla` (
  `name` varchar(50) NOT NULL,
  `admno` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_res`
--

CREATE TABLE `per_res` (
  `admno` varchar(50) NOT NULL,
  `resume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpo_appr`
--

CREATE TABLE `tpo_appr` (
  `branch` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admno` varchar(50) NOT NULL,
  `approved` int(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `uc` float NOT NULL,
  `parr` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `iden` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vol_det`
--

CREATE TABLE `vol_det` (
  `admno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_det`
--
ALTER TABLE `com_det`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `com_sel`
--
ALTER TABLE `com_sel`
  ADD PRIMARY KEY (`stu_admno`,`cname`);

--
-- Indexes for table `hod_appr`
--
ALTER TABLE `hod_appr`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `hod_det`
--
ALTER TABLE `hod_det`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `per_aca`
--
ALTER TABLE `per_aca`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `per_appr`
--
ALTER TABLE `per_appr`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `per_det`
--
ALTER TABLE `per_det`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `per_pla`
--
ALTER TABLE `per_pla`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `per_res`
--
ALTER TABLE `per_res`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `tpo_appr`
--
ALTER TABLE `tpo_appr`
  ADD PRIMARY KEY (`admno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vol_det`
--
ALTER TABLE `vol_det`
  ADD PRIMARY KEY (`admno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
