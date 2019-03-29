-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 05:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak5`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `ttl` date NOT NULL,
  `ipk` decimal(4,2) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `ttl`, `ipk`, `kelas`) VALUES
('Aan', 485036, '2019-03-09', '3.50', '42-01'),
('yiyiyiyi', 5682651, '2019-03-16', '3.50', '42-01'),
('wkwkwk', 8529185, '2019-03-08', '3.50', '42-01'),
('Elisa', 9403506, '2019-03-16', '3.50', '42-01'),
('Ester', 12345657, '2019-03-16', '3.50', '42-01'),
('Firza', 28508085, '2019-03-08', '3.50', '42-01'),
('yayaya', 31481974, '2019-03-02', '3.50', '42-01'),
('Devi', 43635747, '2019-03-01', '3.50', '42-01'),
('Dyah', 64803941, '2019-03-02', '3.50', '42-01'),
('Mahasiswa', 79014930, '2019-03-06', '3.50', '42-01'),
('Mahasiswi', 88147515, '2019-03-02', '3.50', '42-01'),
('hahahahha', 89480300, '2019-02-28', '3.50', '42-01'),
('Putri', 93470214, '2019-03-09', '3.50', '42-01'),
('Rifki', 112930844, '2019-03-01', '3.50', '42-01'),
('Uni', 492075950, '2019-03-09', '3.50', '42-01'),
('Sri', 593038460, '2019-03-03', '3.50', '42-01'),
('Firda', 730855324, '2019-03-16', '3.50', '42-01'),
('Ikhsan', 889920445, '2019-03-01', '3.50', '42-01'),
('Ani', 999999999, '2019-03-02', '3.50', '42-01'),
('Nining Parwati', 2147483647, '2019-03-01', '3.50', '42-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
