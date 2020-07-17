-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 04:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt`
--

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `JenisKelamin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`ID`, `Nama`, `Alamat`, `JenisKelamin`) VALUES
(1, 'Rizalul', 'Tegal', 'Laki-laki'),
(2, 'Putri', 'Jakarta', 'Perempuan'),
(3, 'Ghulayin', 'Pemalang', 'Laki-laki'),
(4, 'Ando', 'Rembang', 'Laki-laki'),
(5, 'Dimas', 'Wonosobo', 'Laki-laki'),
(6, 'Dwi', 'Brebes', 'Laki-laki'),
(7, 'Nany', 'Pati', 'Perempuan'),
(8, 'Yayan', 'Salatiga', 'Laki-laki'),
(9, 'Ibnu', 'Surakarta', 'Laki-laki'),
(10, 'Yogi', 'Cianjur', 'Laki-laki'),
(11, 'Ibnu', 'Bekasi', 'Laki-laki'),
(12, 'Ayu', 'Wonosobo', 'Perempuan'),
(13, 'Ririn', 'Madiun', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
