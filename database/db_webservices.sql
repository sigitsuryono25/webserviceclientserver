-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 06:23 AM
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
-- Database: `db_webservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(12) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `kategori`, `penulis`, `gambar`, `tanggal`) VALUES
(2, 'Penyambutan Ramadhan', 'Penyambutan Ramadhan', 'Agama', 'Ira S', '1553656484.png', '2019-03-27 10:14:44'),
(3, 'Pemakumuran desa', 'Pemakumuran desa\r\nPemakumuran desaPemakumuran desa\r\nPemakumuran desa\r\nPemakumuran desaPemakumuran desa\r\nPemakumuran desa', 'Ekonomi', 'Okee', 'potensi1.JPG', '2019-04-18 17:50:21'),
(4, 'H-2 Pemilihan Capres-Cawapres Indon', 'H-2 Pemilihan Capres-Cawapres Indonesia\r\nH-2 Pemilihan Capres-Cawapres Indonesia\r\nH-2 Pemilihan Capres-Cawapres Indonesia\r\nH-2 Pemilihan Capres-Cawapres Indonesia\r\nH-2 Pemilihan Capres-Cawapres Indonesia', 'Politik', 'Ira Siregar', '1555584462.png', '2019-04-18 17:47:42'),
(5, 'H-1 Pemilihan Capres-Cawapres Indon', 'H-1 Pemilihan Capres-Cawapres Indonesia\r\nH-1 Pemilihan Capres-Cawapres Indonesia\r\nH-1 Pemilihan Capres-Cawapres Indonesia\r\nH-1 Pemilihan Capres-Cawapres Indonesia\r\nH-1 Pemilihan Capres-Cawapres Indonesia', 'Politik', 'Anggraini ', '1555584515.png', '2019-04-18 17:48:35'),
(6, 'Pemilihan Capres ', 'Pemilihan Capres\r\nPemilihan CapresPemilihan Capres\r\nPemilihan Capres\r\nPemilihan Capres\r\nPemilihan Capres', 'Politik', 'Anggraini', '1555584556.png', '2019-04-18 17:49:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
