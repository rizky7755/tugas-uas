-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 02:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anggotabelum`
--

CREATE TABLE `anggotabelum` (
  `idanggota` int(5) NOT NULL,
  `namadepan` varchar(20) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nokontrak` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotabelum`
--

INSERT INTO `anggotabelum` (`idanggota`, `namadepan`, `namabelakang`, `email`, `nokontrak`, `alamat`) VALUES
(1, '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `anggotasudah`
--

CREATE TABLE `anggotasudah` (
  `idanggota` int(5) NOT NULL,
  `namadepan` varchar(20) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nokontrak` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggotabelum`
--
ALTER TABLE `anggotabelum`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `anggotasudah`
--
ALTER TABLE `anggotasudah`
  ADD PRIMARY KEY (`idanggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotabelum`
--
ALTER TABLE `anggotabelum`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
