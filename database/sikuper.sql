-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 09:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikuper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi` text NOT NULL,
  `foto_berita` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl_berita`, `isi`, `foto_berita`) VALUES
(30, 'Assalamualaikum wr wb', '2022-05-23', '<p>Waalaikumsalam wr wb</p>\r\n', 'berita-220523-f4dcf2c37b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_perumahan`
--

CREATE TABLE `tbl_jenis_perumahan` (
  `id_jenis_perumahan` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_perumahan`
--

INSERT INTO `tbl_jenis_perumahan` (`id_jenis_perumahan`, `nama_jenis`) VALUES
(1, 'Elite'),
(2, 'Standart'),
(7, 'Tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan`
--

CREATE TABLE `tbl_perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `nama_perumahan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `ket_perumahan` varchar(100) NOT NULL,
  `foto_perumahan` varchar(100) NOT NULL,
  `fasilitas` varchar(250) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `luas_tanah` int(10) NOT NULL,
  `tentang_perumahan` varchar(500) NOT NULL,
  `ketersediaan` varchar(20) NOT NULL,
  `nama_pengembang` varchar(50) NOT NULL,
  `total_unit_perumahan` int(10) NOT NULL,
  `id_jenis_perumahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perumahan`
--

INSERT INTO `tbl_perumahan` (`id_perumahan`, `nama_perumahan`, `lokasi`, `ket_perumahan`, `foto_perumahan`, `fasilitas`, `alamat`, `luas_tanah`, `tentang_perumahan`, `ketersediaan`, `nama_pengembang`, `total_unit_perumahan`, `id_jenis_perumahan`) VALUES
(1, 'Testing residence', 'Jl kelud kecamatan klojen kabuipaten malang', 'Testing Keterangan', 'tes.jpg', 'Lengkap', 'Malang', 100, 'Testing', 'Tersedia', 'Aku', 111, 1),
(2, 'Tes Perumahan Residence', 'Tes Perumahan Residence', '<p>Tes Perumahan Residence</p>\r\n', 'Tes_Perumahan_Residence220523-e79815037a.jpg', '<ul>\r\n	<li>Tes Perumahan Residence</li>\r\n	<li>Tes Perumahan Residence</li>\r\n	<li>Tes Perumahan Residence</li>\r\n</ul>\r\n', 'Tes Perumahan Residence', 123, '<p>Tes Perumahan Residence</p>\r\n', 'Tes Perumahan Reside', 'Tes Perumahan Residence', 1231, 1),
(3, 'Lagi Residence', 'Tes Perumahan Residence', '<p>as</p>\r\n', 'Lagi_Residence220523-5299b8c1cf.jpg', '<ul>\r\n	<li>tes</li>\r\n	<li>e</li>\r\n	<li>s</li>\r\n	<li>s</li>\r\n</ul>\r\n', 'Tes Perumahan Residence', 2, '<p>sc</p>\r\n', 'Tes Perumahan Reside', 'xx', 123, 2),
(4, 'Tes Perumahan Residence 2', 'Tes Perumahan Residence', '<p>AAAA</p>\r\n', 'Tes_Perumahan_Residence_2220523-804eba0e34.jpg', '<ul>\r\n	<li>Fasilitas 1</li>\r\n	<li>Fasilitas 2</li>\r\n	<li>Fasilitas 3</li>\r\n</ul>\r\n', 'Balikpapan', 100, '<p>sss</p>\r\n', 'Tes Perumahan Reside', 'Tes Perumahan Residence', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang_kami`
--

CREATE TABLE `tbl_tentang_kami` (
  `id_tentangKami` int(11) NOT NULL,
  `tentang_kami` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentang_kami`
--

INSERT INTO `tbl_tentang_kami` (`id_tentangKami`, `tentang_kami`, `foto`) VALUES
(1, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Fini', 'tentang-220523-5615e2811b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role` int(2) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `nama`, `alamat`, `role`, `foto_profil`, `password`) VALUES
(1, 'admin', 'Administrator', 'Jl Balikpapan', 1, 'user.png', '$2a$12$R0l/q1VwDVepxwjb5TdLXOk9gIAfcDAGixbOIc2CnusanIwB6b0zq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_jenis_perumahan`
--
ALTER TABLE `tbl_jenis_perumahan`
  ADD PRIMARY KEY (`id_jenis_perumahan`);

--
-- Indexes for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  ADD PRIMARY KEY (`id_perumahan`),
  ADD KEY `id_jenis_perumahan` (`id_jenis_perumahan`);

--
-- Indexes for table `tbl_tentang_kami`
--
ALTER TABLE `tbl_tentang_kami`
  ADD PRIMARY KEY (`id_tentangKami`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_jenis_perumahan`
--
ALTER TABLE `tbl_jenis_perumahan`
  MODIFY `id_jenis_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tentang_kami`
--
ALTER TABLE `tbl_tentang_kami`
  MODIFY `id_tentangKami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  ADD CONSTRAINT `tbl_perumahan_ibfk_1` FOREIGN KEY (`id_jenis_perumahan`) REFERENCES `tbl_jenis_perumahan` (`id_jenis_perumahan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
