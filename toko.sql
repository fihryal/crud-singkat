-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Des 2022 pada 04.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bahan` varchar(1000) NOT NULL,
  `cara_masak` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `gambar`, `keterangan`, `nama`, `bahan`, `cara_masak`) VALUES
(3, '', 'makanan', 'burger', 'daging', 'masak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmamasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmamasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmavmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmmmasak,mmmmmmmmmm'),
(4, 'kentang goreng', 'kentang', 'kentang goreng', 'kentang', 'goreng'),
(5, 'anto.png', 'p', 'p', 'p', 'p');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
