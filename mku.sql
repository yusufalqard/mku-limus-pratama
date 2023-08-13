-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 10:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mku`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekapdata`
--

CREATE TABLE `rekapdata` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekapdata`
--

INSERT INTO `rekapdata` (`id`, `deskripsi`, `tgl`, `nominal`) VALUES
(1, 'Infaq Jum&#039;at', '2023-08-03', '3845000'),
(2, 'Air Mineral Gelas VIT', '2023-08-04', '125000'),
(3, 'Sabun Cuci Lantai', '2023-08-04', '60000'),
(4, 'Laundry Alat Sholat Mukena Wanita', '2023-08-04', '110000'),
(5, 'Biaya Parkir mingguan', '2023-08-04', '75000'),
(6, 'Air Botol Cleo', '2023-08-04', '125000'),
(7, 'Infaq Jum\'at', '2023-07-21', '3900000'),
(8, 'Infaq Jum\'at', '2023-07-28', '3159000'),
(9, 'Infaq Jum\'at', '2023-07-14', '4125000'),
(10, 'Infaq Jum\'at', '2023-07-07', '3850000'),
(11, 'Infaq Jum\'at', '2023-06-30', '4358000'),
(12, 'Infaq Jum&#039;at', '2023-08-11', '2757000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `leveluser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `leveluser`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin'),
(2, 'taufik', '4a177908f6a9e3f6fdc5523debda33be886f73b0658ba723be17933ccb3602e5', 'pengurus'),
(3, 'bactiar', '586d94c2ff03ed546992f88bdbd885dadd06620adee1dbf83ed9c785b148614a', 'pengurus'),
(4, 'yusufalqard', '6c76536247c498c1a1d83952cb480ff7cf6e31fb7fdb9c31b10d2ffbb3bbd954', 'admin'),
(5, 'zaidan', '65dfe3e45a1a4b82836305792b70ff191abd3aed85a10ca429f3ff17248287db', 'guest'),
(6, 'giant', '0b132ea2f6cd37dd630da9e84733f169a4473feaebbfa70359b449b759885ffe', 'guest'),
(11, 'tes', 'ce0f6c28b5869ff166714da5fe08554c70c731a335ff9702e38b00f81ad348c6', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekapdata`
--
ALTER TABLE `rekapdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekapdata`
--
ALTER TABLE `rekapdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
