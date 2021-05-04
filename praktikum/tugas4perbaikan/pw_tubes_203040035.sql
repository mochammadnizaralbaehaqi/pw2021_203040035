-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 07:12 AM
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
-- Database: `pw_tubess_203040035`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `ukuran`, `harga`, `img`) VALUES
(1, 'Kaos Tie Die Biru Langit', 'M / L / XL', '230.000', 'kaosputih.jpg'),
(2, 'Kaos Tie Die Pastel', 'L / XL', '230.000', 'kaospastel.jpg'),
(3, 'Kemeja Pantai Pangandaran', 'M / L / XL', '260.000', 'kemejapantai.jpg'),
(4, 'Kemeja Pantai Simpel', 'L / XL', '260.000', 'kemejapantaiputih.jpg'),
(5, 'Batik Cirebon', 'M / L / XL', '130.000', 'batikhitam.jpg'),
(6, 'Batik Daerah Asli', 'L / XL', '145.000', 'batikdaerah.jpg'),
(7, 'Kemeja Flanel Merah Marun', 'M / L / XL', '320.000', 'planelmerah.jpg'),
(8, 'Kemeja Flanel Biru Donker', 'L / XL', '320.000', 'planelbiru.jpg'),
(9, 'Sweater Putih Simpel', 'M / L / XL', '260.000', 'sweaternatal.jpg'),
(10, 'Pink Sweater', 'L / XL', '260.000', 'sweaterpink.jpg'),
(11, 'Hoodie Cream Simpel', 'M / L / XL', '350.000', 'hoodiecream.jpg'),
(12, 'Jaket Denim Biru', 'L / XL', '460.000', 'denimjaket.jpg'),
(13, 'Jaket Rocker Black Solid', 'M / L / XL', '430.000', 'jaketkulit.jpg'),
(14, 'Jaket Bomber Army', 'L / XL', '380.000', 'jaketbomber.jpg'),
(15, 'Jaket Gunung Simpel', 'L / XL', '420.000', 'jaketgunung.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
