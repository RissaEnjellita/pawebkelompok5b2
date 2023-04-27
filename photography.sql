-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` varchar(11) NOT NULL,
  `kamera` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kapasitas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `kamera`, `jenis`, `kapasitas`) VALUES
('K01', 'Canon EOS 6D Mark II', 'DSLR', '2TB'),
('K02', 'Fujifilm T200', 'Mirrorless', '1TB'),
('K03', 'Brica B-Pro 5 Alpha Edition 4K Mark III S', 'Action', '2TB');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nama` varchar(30) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nama`, `nomor_hp`, `alamat`) VALUES
('Bayu', '085709870987', 'Jl. Perjuangan'),
('Ibe', '085798769876', 'Jln. Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `id_kamera` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `nama`, `nomor_hp`, `id_kamera`) VALUES
('P01', 'Ahmad', '085743214321', 'K01'),
('P02', 'Fariz', '082154325432', 'K02'),
('P03', 'Aisyar', '082365436543', 'K03');

-- --------------------------------------------------------

--
-- Table structure for table `transaction1`
--

CREATE TABLE `transaction1` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `id_photographer` varchar(11) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `status1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction1`
--

INSERT INTO `transaction1` (`id`, `nama_customer`, `id_photographer`, `jenis_layanan`, `status1`) VALUES
(1, 'Ibe', 'P01', 'Wedding Photoshoot', 'On Progress'),
(4, 'Bayu', 'P02', 'Cosplay Photoshoot', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kamera` (`id_kamera`);

--
-- Indexes for table `transaction1`
--
ALTER TABLE `transaction1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_customer` (`nama_customer`),
  ADD KEY `id_photographer` (`id_photographer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction1`
--
ALTER TABLE `transaction1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photographer`
--
ALTER TABLE `photographer`
  ADD CONSTRAINT `photographer_ibfk_1` FOREIGN KEY (`id_kamera`) REFERENCES `camera` (`id`);

--
-- Constraints for table `transaction1`
--
ALTER TABLE `transaction1`
  ADD CONSTRAINT `transaction1_ibfk_1` FOREIGN KEY (`nama_customer`) REFERENCES `customer` (`nama`),
  ADD CONSTRAINT `transaction1_ibfk_2` FOREIGN KEY (`id_photographer`) REFERENCES `photographer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
