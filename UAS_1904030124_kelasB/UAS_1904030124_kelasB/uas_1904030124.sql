-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 19.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030124`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_anggota`
--

CREATE TABLE `db_anggota` (
  `id` int(10) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `gambar_anggota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_anggota`
--

INSERT INTO `db_anggota` (`id`, `id_anggota`, `nama_anggota`, `alamat`, `no_hp`, `gambar_anggota`) VALUES
(1, 201, 'Tata Sutabri', 'Tangerang', 812345678, 'foto1.png'),
(2, 202, 'M. Budiyanto', 'Tangerang', 812345678, 'foto3.png'),
(3, 203, 'Sri Handayani', 'Tangerang', 812345678, 'foto4.png'),
(4, 204, 'Risa Kharani', 'Tangerang', 812345678, 'foto5.png'),
(5, 205, 'Adinda Rahma', 'Tangerang', 812345678, 'foto2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_buku`
--

CREATE TABLE `db_buku` (
  `id` int(10) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_buku`
--

INSERT INTO `db_buku` (`id`, `id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `gambar_buku`) VALUES
(1, 101, 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media', '2009', '1.png'),
(2, 102, 'Kesehjateraan Sosial', 'Isbandi Rukminto Adi', 'Rajagrafindo Persada', '2015', '2.png'),
(3, 103, 'Metode Riset Bisnis Edisi II', 'Suliyanto', 'Andi Offset', '2009', '3.png'),
(4, 104, 'Strategic Management', 'Sofjan Assauri', 'Rajagrafindo Persada', '2016', '4.png'),
(5, 105, 'Pengantar Teknologi Informasi', 'Tata Sutabri', 'Andi Offset', '2014', '5.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_anggota`
--
ALTER TABLE `db_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_buku`
--
ALTER TABLE `db_buku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
