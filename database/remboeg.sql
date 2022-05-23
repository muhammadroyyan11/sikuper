-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2022 pada 08.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remboeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `link_tokped` varchar(255) NOT NULL,
  `gambar_name` varchar(255) NOT NULL,
  `id_kproduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `name`, `description`, `harga`, `status`, `link_tokped`, `gambar_name`, `id_kproduk`) VALUES
(4, 'Grinder', '<p>TESTING DESC</p>\r\n', '100000', 'Tersedia', 'https:/tokopedia.com', 'pos5.jpeg', 2),
(5, 'Tes', '<p>asdasd</p>\r\n', '5000000', 'Tersedia', 'asdasd', 'pos4.jpeg', 1),
(6, 'Breville Coffee Machine ', '<p>asdasdasd</p>\r\n', '283912', 'Tersedia', 'asdasd', 'day-MATTE-600x6002.jpg', 2),
(7, 'akshdjahl', '<p>asdljjaksbdkja</p>\r\n', '12831', 'Tersedia', 'askhdjadsk', 'bali.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartikel`
--

CREATE TABLE `kartikel` (
  `id_kartikel` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kartikel`
--

INSERT INTO `kartikel` (`id_kartikel`, `nama`, `isActive`) VALUES
(2, 'Biji Kopi', 1),
(3, 'Tentang Kopi', 1),
(4, 'Roasting Kopi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kproduk`
--

CREATE TABLE `kproduk` (
  `id_kproduk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kproduk`
--

INSERT INTO `kproduk` (`id_kproduk`, `nama`, `isActive`) VALUES
(1, 'Biji Kopi', '1'),
(2, 'Mesin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_posting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id_partner`, `name`, `alamat`, `instagram`, `maps`) VALUES
(1, 'Tes', 'Tes Alamat No21 Malang 56123', '@Remboegpawon', 'https://maps.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `seo_judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `featured` char(1) NOT NULL,
  `choice` char(1) NOT NULL,
  `thread` char(1) NOT NULL,
  `gambar_name` varchar(255) NOT NULL,
  `id_kartikel` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id_posting`, `judul`, `seo_judul`, `konten`, `featured`, `choice`, `thread`, `gambar_name`, `id_kartikel`, `isActive`, `date`) VALUES
(6, 'Testing dengan gambar', 'testing-dengan-gambar', '<p>Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel&nbsp;Testing Artikel vv</p>\r\n', '<', 'Y', 'N', 'bali.jpg', 3, 1, '2022-05-10'),
(7, 'Testing dengan gambar 2', 'testing-dengan-gambar-2', '<p>Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;Testing gambar 2&nbsp;</p>\r\n', '<', 'N', 'N', 'f2af26e2589f6204a2c73d758f249ae5', 3, 1, '2022-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `gambar_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slide`, `gambar_name`) VALUES
(1, 'ikan-koi-sampul5.jpg'),
(2, 'pos_3.jpg'),
(3, 'ikan-koi-sampul6.jpg'),
(4, 'ikan-koi-sampul7.jpg'),
(5, 'bali.jpg'),
(6, 'bali1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','master') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'master', '$2a$12$erIFWPSHn8Nb10AwdHkHfO5Pv4F7ZdeMZ6eodBNGzGkmdJTGx86Y.', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(20, 'Dummy Akun', 'tes', 'demo@getcraftable.com', '123109293', 'admin', '$2y$10$ctMaQzDJI31ii6zTNftZR.C1lcmft95pGNZMYEdNiqbYevHegdm.m', 1635823901, 'user.png', 1),
(21, 'Bhakti Karya Mahasiswa', 'bkm', 'bkm@bkm.com', '19827893612', 'admin', '$2y$10$I8KYCVbW4ABZlSNm9XBqcOAZpJidKliZokIj5LkiHWeI8TMt69ZEa', 1639328171, 'user.png', 1),
(22, 'Dewan Perwakilan Mahasiswa', 'dpm', 'dpm@polinema.ac.id', '086251239182', 'admin', '$2y$10$bLch0dB1552wQc7QTLF9Ye7mykwzOKj0cAZcwS8vO5aUI14kzX8pK', 1639919237, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kproduk` (`id_kproduk`);

--
-- Indeks untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  ADD PRIMARY KEY (`id_kartikel`);

--
-- Indeks untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  ADD PRIMARY KEY (`id_kproduk`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_kartikel` (`id_kartikel`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  MODIFY `id_kartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  MODIFY `id_kproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kproduk`) REFERENCES `kproduk` (`id_kproduk`);

--
-- Ketidakleluasaan untuk tabel `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`);

--
-- Ketidakleluasaan untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_kartikel`) REFERENCES `kartikel` (`id_kartikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
