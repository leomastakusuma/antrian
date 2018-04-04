-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2016 pada 03.41
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_antrian`
--

CREATE TABLE `client_antrian` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client_antrian`
--

INSERT INTO `client_antrian` (`id`, `client`) VALUES
(1, 1),
(2, 2),
(3, 3)


-- --------------------------------------------------------

--
-- Struktur dari tabel `data_antrian`
--

CREATE TABLE `data_antrian` (
  `id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `waktu` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_antrian`
--

INSERT INTO `data_antrian` (`id`, `counter`, `waktu`, `status`) VALUES
(1, 0, '2016-05-24 10:44:00', 3),
(2, 0, '2016-05-24 10:43:55', 3),
(3, 0, '2016-05-24 10:44:10', 3),
(4, 0, '2016-05-24 10:44:22', 3),
(5, 0, '2016-05-24 10:44:28', 3),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_antrian`
--
ALTER TABLE `client_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_antrian`
--
ALTER TABLE `data_antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_antrian`
--
ALTER TABLE `client_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `data_antrian`
--
ALTER TABLE `data_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
