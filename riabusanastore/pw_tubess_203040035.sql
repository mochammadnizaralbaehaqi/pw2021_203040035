-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 08:18 AM
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
(1, 'Kaos Tie Die Biru Langit', 'M / L / XL', '250.000', 'kaosputih.jpg'),
(2, 'Kaos Tie Die Pastel', 'L / XL', '250.000', 'kaospastel.jpg'),
(3, 'Kemeja Hawai', 'M / L / XL', '350.000', 'kemejapantaiputih.jpg'),
(4, 'Kemeja Flanel Merah Marun', 'L / XL', '450.000', 'planelmerah.jpg'),
(5, 'Kemeja Flanel Biru Donker', 'M / L / XL', '450.000', 'planelbiru.jpg'),
(6, 'Sweater Natal Edition', 'L / XL', '250.000', 'sweaternatal.jpg'),
(7, 'Sweater pink sweat', 'M / L / XL', '250.000', 'sweaterpink.jpg'),
(8, 'Hoodie Simpel Edition', 'L / XL', '450.000', 'hoodiecream.jpg'),
(9, 'Jaket Denim Edition', 'M / L / XL', '550.000', 'denimjaket.jpg'),
(10, 'Jaket Rocker Black Solid', 'L / XL', '500.000', 'jaketkulit.jpg');

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
