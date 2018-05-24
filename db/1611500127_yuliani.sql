-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2018 pada 14.41
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1611500127_yuliani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_role` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_role`) VALUES
(4, 'yuli@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(5, 'ani', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'editor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `id_katagori` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `headline` varchar(50) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar` varchar(220) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_katagori`, `judul`, `headline`, `isi`, `penulis`, `gambar`, `waktu`) VALUES
(4, 1, 'ketawai', 'pantai nan indah', 'laut yang luas ', 'yuliani', 'lengkuas_island.jpg', '2018-01-15 03:19:31'),
(5, 3, 'pagoda', ' pagoda di sungail liat', 'wisata sekaligus religius', 'yuliani', 'puri-tri-agung.png', '0000-00-00 00:00:00'),
(6, 3, 'hutan bakau kurau', ' bakau', 'wisata baru yang ada di bangka tengah ', 'yuliani', 'wisata-mangrove_20170731_223259.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(10) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jumlah_hari` int(10) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `tujuan`, `jumlah_hari`, `harga`) VALUES
(4, 'mentok', 6, '1000000'),
(5, 'Pantai Parai Tenggiri', 10, '1500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanya`
--

CREATE TABLE `pertanya` (
  `id_pertanya` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanya`
--

INSERT INTO `pertanya` (`id_pertanya`, `nama`, `email`, `no_hp`, `pertanyaan`) VALUES
(5, 'yuliani', 'yuliani@gmail.com', '09823212241', 'suka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_katagori`
--

CREATE TABLE `sub_katagori` (
  `id_katagori` int(20) NOT NULL,
  `nm_katagori` varchar(100) NOT NULL,
  `deskerpsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_katagori`
--

INSERT INTO `sub_katagori` (`id_katagori`, `nm_katagori`, `deskerpsi`) VALUES
(1, 'pantai', 'saya suka pantai'),
(2, 'sejarah', 'sejarah adalah'),
(3, 'wisata', 'wisata adalah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `pertanya`
--
ALTER TABLE `pertanya`
  ADD PRIMARY KEY (`id_pertanya`);

--
-- Indexes for table `sub_katagori`
--
ALTER TABLE `sub_katagori`
  ADD PRIMARY KEY (`id_katagori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pertanya`
--
ALTER TABLE `pertanya`
  MODIFY `id_pertanya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_katagori`
--
ALTER TABLE `sub_katagori`
  MODIFY `id_katagori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
