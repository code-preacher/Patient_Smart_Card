-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 01:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `specialization` int(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `phone`, `address`, `password`, `gender`, `specialization`, `image`, `date`) VALUES
(1, 'Caro', 'c@c.com', '+ 234 812 676 4150', '61 boniface street', '123456', 'MALE', 6, 'b12.jpg', '2021-04-20 05:40:02'),
(5, 'zak', 'z@z.com', '08136473738', '61 boniface street', '123456', 'MALE', 7, 'zak-doctor-61293cdd848ff.jpg', '2021-08-27 20:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Admin', 'a@a.com', '123456', 1, '2021-04-19 07:17:32'),
(4, 'Davi Petty', 'd@d.com', '123456', 3, '2021-04-20 05:41:00'),
(5, 'Caro', 'c@c.com', '123456', 2, '2021-04-20 05:40:02'),
(8, 'mendy', 'm@m.com', '123456', 3, '2021-08-24 12:49:13'),
(9, 'zak', 'z@z.com', '123456', 2, '2021-08-27 20:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `phone`, `address`, `password`, `gender`, `date`) VALUES
(2, 'Davi Petty', 'd@d.com', '07068235544', '61 Joe Lanet', '123456', 'MALE', '2021-04-20 05:41:00'),
(4, 'mendy', 'm@m.com', '08136473738', '61 boniface street', '123456', 'MALE', '2021-08-24 12:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `name`, `date`) VALUES
(3, 'ELECTRICALS', '2021-04-20 06:04:49'),
(4, 'PLUMBING', '2021-04-20 06:05:09'),
(5, 'FARMING', '2021-04-20 06:08:18'),
(6, 'SURGERY', '2021-08-27 00:33:46'),
(7, 'ANATOMY', '2021-08-27 20:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `name`, `date`) VALUES
(1, 'COVID-19', '2021-08-26 23:37:57'),
(2, 'RIKA VIRUS', '2021-08-27 19:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history`
--

CREATE TABLE `treatment_history` (
  `id` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `treatment_id` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_history`
--

INSERT INTO `treatment_history` (`id`, `patient_id`, `doctor_id`, `treatment_id`, `status`, `date`) VALUES
(2, 2, 1, 1, 1, '2021-08-27 00:02:43'),
(3, 2, 5, 1, 1, '2021-08-27 00:02:43'),
(4, 4, 5, 1, 1, '2021-08-27 00:02:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_history`
--
ALTER TABLE `treatment_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment_history`
--
ALTER TABLE `treatment_history`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
