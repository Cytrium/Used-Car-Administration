-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 06:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `idalamat` int(11) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `alamat1` varchar(20) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `icpelanggan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jualan`
--

CREATE TABLE `jualan` (
  `idjualan` int(11) NOT NULL,
  `tarikh` date NOT NULL,
  `jenis_bayaran` varchar(20) NOT NULL,
  `nomplat` varchar(10) NOT NULL,
  `idpelanggan` varchar(12) NOT NULL,
  `idpekerja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kenderaan`
--

CREATE TABLE `kenderaan` (
  `nomplat` varchar(20) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `tahun_perbuat` int(4) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `gambar` varchar(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `icpelanggan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomhp` varchar(13) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama_pengguna` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_laluan` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama_pengguna`, `nama`, `kata_laluan`, `status`) VALUES
('admin', 'PENGURUS SISTEM', '1234', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`idalamat`);

--
-- Indexes for table `jualan`
--
ALTER TABLE `jualan`
  ADD PRIMARY KEY (`idjualan`);

--
-- Indexes for table `kenderaan`
--
ALTER TABLE `kenderaan`
  ADD PRIMARY KEY (`nomplat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`icpelanggan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nama_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `idalamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jualan`
--
ALTER TABLE `jualan`
  MODIFY `idjualan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
