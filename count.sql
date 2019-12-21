-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 01:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `count`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_caleg`
--

CREATE TABLE IF NOT EXISTS `tb_caleg` (
  `id` int(2) NOT NULL DEFAULT '0',
  `name` varchar(15) DEFAULT NULL,
  `id_partai` int(2) DEFAULT NULL,
  `earned_vote` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_caleg`
--

INSERT INTO `tb_caleg` (`id`, `name`, `id_partai`, `earned_vote`) VALUES
(1, 'Is Bos', 2, '70'),
(2, 'Dobleh', 1, '99'),
(4, 'Kabur', 4, '69');

-- --------------------------------------------------------

--
-- Table structure for table `tb_partai`
--

CREATE TABLE IF NOT EXISTS `tb_partai` (
  `id` int(2) NOT NULL DEFAULT '0',
  `name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_partai`
--

INSERT INTO `tb_partai` (`id`, `name`) VALUES
(1, 'Cilacap Santai'),
(2, 'Cilacap Makmur'),
(3, 'Cilacap Aman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_caleg`
--
ALTER TABLE `tb_caleg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_partai`
--
ALTER TABLE `tb_partai`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
