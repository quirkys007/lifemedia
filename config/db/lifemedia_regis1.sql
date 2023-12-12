-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifemedia_regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) NOT NULL,
  `icon1` varchar(90) NOT NULL,
  `icon2` varchar(90) NOT NULL,
  `icon3` varchar(90) NOT NULL,
  `icon4` varchar(90) NOT NULL,
  `icon5` varchar(90) NOT NULL,
  `icon6` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `icon1`, `icon2`, `icon3`, `icon4`, `icon5`, `icon6`) VALUES
(1, 'Lifemedia', 'Lifemedia', 'Paket Internet', 'Blog-Lifemedia', 'Hubungi kami-Lifemedia', 'Area');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'Jl. Parangtritis 97, RT 57 RW 15, Brontokusuman, Mergangsan, DI Yogyakarta 55153.', '622746055655', 'cs@lifemedia.id');

-- --------------------------------------------------------

--
-- Table structure for table `logadmin`
--

CREATE TABLE `logadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logadmin`
--

INSERT INTO `logadmin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_wilayah` int(11) DEFAULT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `id_wilayah`, `map`) VALUES
(0, 'Belum Tercover', 0, ''),
(1, 'Seturan', 1, ''),
(2, 'Apartemen Taman Melati - Sinduadi', 1, ''),
(5, 'Apartemen Habitat Karawaci', 4, ''),
(6, 'Apartemen Sudirman Park - Jakarta', 5, ''),
(7, 'Apartemen Bogor Valley', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `navbar1` varchar(90) NOT NULL,
  `navbar2` varchar(90) NOT NULL,
  `navbar3` varchar(90) NOT NULL,
  `navbar4` varchar(90) NOT NULL,
  `navbar5` varchar(90) NOT NULL,
  `navbar6` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `navbar1`, `navbar2`, `navbar3`, `navbar4`, `navbar5`, `navbar6`) VALUES
(1, 'home1', 'tentang', 'paket', 'fitur', 'kontak', 'area');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no. telepon/ponsel` char(12) NOT NULL,
  `paket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_paket` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` enum('internet','tvkabel') NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_paket`, `nama`, `harga`, `deskripsi`, `jenis`, `id_lokasi`, `active`, `timestamps`) VALUES
(2, 'Life Style 20Mbps', '250000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Termasuk Life VU TV Digital.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 1, 1, '2019-12-15 03:38:58'),
(3, 'Life Style 50Mbps', '350000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Termasuk Life VU TV Digital.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 1, 1, '2019-12-17 21:59:12'),
(5, 'Life Style 100Mbps', '650000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Termasuk Life VU TV Digital.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 1, 1, '2019-12-20 14:30:24'),
(6, 'Belum Tercover', '0', 'Uncovered', '', 0, 1, '2019-12-22 00:09:52'),
(7, 'Life VU', '80000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'tvkabel', 1, 1, '2019-12-20 14:30:24'),
(8, 'Life Style 20Mbps', '385000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 2, 1, '2019-12-30 08:54:46'),
(9, 'Life Style 50Mbps ', '725000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 2, 1, '2019-12-30 08:55:27'),
(10, 'Life Style 100Mbps', '1305000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 2, 1, '2019-12-30 09:00:14'),
(11, 'Life VU', '80000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak</small>\r\n\r\n                </ul>', 'tvkabel', 2, 0, '2019-12-30 09:01:20'),
(12, 'Life Vision', '150000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak</small>\r\n\r\n                </ul>', 'tvkabel', 2, 0, '2019-12-30 09:02:04'),
(13, 'Life Style 20Mbps', '250000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Only</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2019-12-30 09:04:56'),
(14, 'Life Style 50Mbps', '580000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Only</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2019-12-30 09:05:55'),
(15, 'Life Style 100Mbps', '1170000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Only</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2019-12-30 09:06:23'),
(16, 'Life Vu', '80000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak</small>\r\n\r\n                </ul>', 'internet', 5, 0, '2019-12-30 09:07:10'),
(17, 'Life Vision', '135000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 5, 0, '2019-12-30 09:07:32'),
(18, 'Life Style 20Mbps', '385000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet dan TV Cable</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2020-06-29 14:49:40'),
(19, 'Life Style 50Mbps', '725000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet &amp; TV Cable</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2020-06-29 14:51:45'),
(20, 'Life Style 100Mbps', '1305000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet &amp; TV Cable</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"><br></i></span></li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small>\r\n\r\n                </ul>', 'internet', 5, 1, '2020-06-29 14:52:48'),
(21, 'Life Vu Premium', '135000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'tvkabel', 5, 1, '2020-06-29 14:56:24'),
(22, 'Life Style 20Mbps', '385000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 7, 1, '2020-06-29 22:24:02'),
(23, 'Life Style 50Mbps', '725000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 7, 1, '2020-06-29 22:24:39'),
(24, 'Life Style 100Mbps', '1305000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Termasuk K-Vision</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'internet', 7, 1, '2020-06-29 22:25:16'),
(25, 'Life Style 20Mbps', '525000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 525k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Only</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk bea materai</small></ul>', 'internet', 6, 1, '2020-06-29 22:27:12'),
(26, 'Life Style 50Mbps', '825000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 525k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Internet Only</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Perangkat di pinjamkan.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Support 24 Jam.</li>\r\n                    <small>*Belum termasuk bea materai</small></ul>', 'internet', 6, 1, '2020-06-29 22:29:32'),
(27, 'Live Vision', '150000', '<ul class=\"fa-ul\">\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Registrasi &amp; Installasi Rp 250k.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Layanan Cable TV Digital FTA.</li>\r\n                    <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>50 Channel Lebih Kualitas HD.</li>\r\n                    \r\n                    <small>*Belum termasuk pajak dan materai</small></ul>', 'tvkabel', 1, 1, '2019-12-27 07:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`) VALUES
(0, 'Belum Tercover'),
(1, 'DI Yogyakarta'),
(4, 'Tangerang'),
(5, 'DKI Jakarta'),
(6, 'Bogor - Jawa Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logadmin`
--
ALTER TABLE `logadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logadmin`
--
ALTER TABLE `logadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
