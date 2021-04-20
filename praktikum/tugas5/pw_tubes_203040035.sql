-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` pw_tubes_203040035`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `merk` varchar(10) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `img`, `merk`, `tipe`, `Harga`) VALUES
(1, 'adidassamba.jpg', 'Adidas', 'Samba Black Solid', '1.800.000'),
(2, 'adidassambawhite.jpg', 'Adidas', 'Samba White Cream', '1.500.000'),
(3, 'nikejordanhijau.jpg', 'Nike', 'Air Jordan Green Limited', '1.600.000'),
(4, 'nikejordanbiru.jpg', 'Nike', 'Air Jordan Blue Custom', '1.400.000'),
(5, 'pumaskateblack.jpg', 'Puma', 'Skate Black 37', '1.200.000'),
(6, 'pumaskatered.jpg', 'Puma', 'Skate Red Limited ', '1.300.000'),
(7, 'conversesekolah.jpg', 'Converse', 'Old School Black Formal', '1.000.000'),
(8, 'vanssekolah.jpg', 'Vans', 'Black Solid School Edition', '1.000.000'),
(9, 'dcshoes.jpg', 'DC', 'DC Original Black School', '1.200.000'),
(10, 'ventelapink.jpg', 'Ventela', 'Pinky Limited Edition', '1.300.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
