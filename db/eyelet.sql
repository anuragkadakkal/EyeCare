-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 10:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyelet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `drid` int(11) NOT NULL,
  `bkdate` date NOT NULL,
  `bktimeslot` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `drid`, `bkdate`, `bktimeslot`, `status`, `loginid`) VALUES
(16, 21, '2023-01-08', 's1', 0, 23),
(17, 21, '2023-01-08', 's6', 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lno` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `loginid` int(11) NOT NULL,
  `ug` varchar(20) NOT NULL,
  `ugyear` year(4) NOT NULL,
  `pg` varchar(20) NOT NULL,
  `pgyear` year(4) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `expduration` varchar(10) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`id`, `name`, `lno`, `phno`, `loginid`, `ug`, `ugyear`, `pg`, `pgyear`, `exp`, `expduration`, `specialization`, `address`, `pincode`, `dob`) VALUES
(8, 'Anurag', 'TR-1234', '7356308128', 21, '', 0000, '', 0000, '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_drslots`
--

CREATE TABLE `tb_drslots` (
  `id` int(11) NOT NULL,
  `availdate` date NOT NULL,
  `slot1` int(11) NOT NULL,
  `slot2` int(11) NOT NULL,
  `slot3` int(11) NOT NULL,
  `slot4` int(11) NOT NULL,
  `slot5` int(11) NOT NULL,
  `slot6` int(11) NOT NULL,
  `slot7` int(11) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_drslots`
--

INSERT INTO `tb_drslots` (`id`, `availdate`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `loginid`) VALUES
(19, '2023-01-08', 0, 0, 0, 0, 0, 0, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tb_leaves`
--

CREATE TABLE `tb_leaves` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `applydate` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `utype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_leaves`
--

INSERT INTO `tb_leaves` (`id`, `type`, `sdate`, `edate`, `reason`, `comments`, `applydate`, `status`, `staffid`, `utype`) VALUES
(7, 'Full Day', '2023-01-07', '2023-01-08', 'Fever', 'OK', '01-06-2023', 1, 21, 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logginglogin`
--

CREATE TABLE `tb_logginglogin` (
  `logid` int(11) NOT NULL,
  `logtoken` text NOT NULL,
  `loginusername` varchar(255) NOT NULL,
  `curdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logginglogin`
--

INSERT INTO `tb_logginglogin` (`logid`, `logtoken`, `loginusername`, `curdate`) VALUES
(11, 'ed54e8aaf07e44c13f079d2d94021c31', 'admin@eyelet.com', '03-01-2023 05:08:54pm'),
(12, '0dc0c7a181c3cd0210aa3aef7fb65c41', 'admin@eyelet.com', '03-01-2023 06:19:57pm'),
(13, '3189501091336add0a68bc804e612719', 'admin@eyelet.com', '03-01-2023 06:54:44pm'),
(14, '3e3e727a165afb97ccb2e69aa1653741', 'admin@eyelet.com', '06-01-2023 10:32:37am'),
(15, '9788216f8d5bc7147181b1ffe5d46fcd', 'admin@eyelet.com', '06-01-2023 10:52:37am'),
(16, 'd7aa2f4c4fdb676f98b7f812cf00ee85', 'admin@eyelet.com', '06-01-2023 11:05:30am'),
(17, 'c09dc217100d48b372d69a0ef4cf0d65', 'admin@eyelet.com', '06-01-2023 11:16:08am'),
(18, 'c01b0ecb6cd1f47b1788d4c01d4f81ce', 'admin@eyelet.com', '06-01-2023 11:16:11am'),
(19, '86294b2a1604199845dfc4908f4319b7', 'admin@eyelet.com', '06-01-2023 01:28:15pm'),
(20, '2891319d0e96fe2b5618145c6c768618', 'admin@eyelet.com', '06-01-2023 02:42:20pm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `utype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `status`, `utype`) VALUES
(1, 'admin@eyelet.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '1', 'admin'),
(20, 'staff@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '1', 'staff'),
(21, 'doctor@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '1', 'doctor'),
(22, 'anuragkadakkal@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', 'patient'),
(23, 'anuragkdl998@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `tb_patient`
--

CREATE TABLE `tb_patient` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_patient`
--

INSERT INTO `tb_patient` (`id`, `name`, `phno`, `address`, `dob`, `loginid`) VALUES
(8, 'Anurag', '', '', '0000-00-00', 22),
(9, 'Abhimanue', '', '', '0000-00-00', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ptrecords`
--

CREATE TABLE `tb_ptrecords` (
  `rid` int(11) NOT NULL,
  `rsph` varchar(10) NOT NULL,
  `rcyl` varchar(10) NOT NULL,
  `raxis` varchar(10) NOT NULL,
  `rprism` varchar(10) NOT NULL,
  `radd` varchar(10) NOT NULL,
  `lsph` varchar(10) NOT NULL,
  `lcyl` varchar(10) NOT NULL,
  `laxis` varchar(10) NOT NULL,
  `lprism` varchar(10) NOT NULL,
  `ladd` varchar(10) NOT NULL,
  `pd` varchar(10) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `ptid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `loginid` int(11) NOT NULL,
  `ug` varchar(20) NOT NULL,
  `ugyear` year(4) NOT NULL,
  `pg` varchar(20) NOT NULL,
  `pgyear` year(4) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id`, `name`, `phno`, `loginid`, `ug`, `ugyear`, `pg`, `pgyear`, `exp`, `address`, `pincode`, `dob`) VALUES
(5, 'Celine A', '9645000000', 20, '', 0000, '', 0000, '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_drslots`
--
ALTER TABLE `tb_drslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_leaves`
--
ALTER TABLE `tb_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_logginglogin`
--
ALTER TABLE `tb_logginglogin`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_patient`
--
ALTER TABLE `tb_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ptrecords`
--
ALTER TABLE `tb_ptrecords`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_drslots`
--
ALTER TABLE `tb_drslots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_leaves`
--
ALTER TABLE `tb_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_logginglogin`
--
ALTER TABLE `tb_logginglogin`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_patient`
--
ALTER TABLE `tb_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_ptrecords`
--
ALTER TABLE `tb_ptrecords`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
