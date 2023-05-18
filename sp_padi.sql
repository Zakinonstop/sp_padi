-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 11.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_padi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'wahyudi', '123', 'Admin Wahyudi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(30) NOT NULL,
  `kode_gejala` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`id`, `kode_penyakit`, `kode_gejala`) VALUES
(1, 'P1', 'G1'),
(2, 'P1', 'G3'),
(3, 'P1', 'G4'),
(4, 'P1', 'G8'),
(5, 'P1', 'G9'),
(6, 'P2', 'G2'),
(7, 'P2', 'G4'),
(8, 'P2', 'G5'),
(9, 'P2', 'G9'),
(10, 'P3', 'G6'),
(11, 'P3', 'G7'),
(12, 'P3', 'G9'),
(13, 'P3', 'G10'),
(14, 'P3', 'G11'),
(15, 'P3', 'G12'),
(16, 'P3', 'G13'),
(17, 'P4', 'G14'),
(18, 'P4', 'G15'),
(19, 'P4', 'G16'),
(20, 'P4', 'G17'),
(21, 'P5', 'G18'),
(22, 'P5', 'G19'),
(23, 'P5', 'G20'),
(24, 'P5', 'G21'),
(25, 'P5', 'G22'),
(26, 'P5', 'G23'),
(27, 'P5', 'G24'),
(28, 'P5', 'G25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(30) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `gejala`) VALUES
('G1', 'Malai'),
('G10', 'Malai menjadi kecil'),
('G11', 'Malai tidak berisi '),
('G12', 'Bercak daun membesar'),
('G13', 'Bercak kehitaman pada pelepah'),
('G14', 'Menyerang pelepah'),
('G15', 'Menyerang pelepah yang membentuk anakan'),
('G16', 'Jumlah gabah menurun'),
('G17', 'Kualitas gabah kurang baik'),
('G18', 'Menyerang semua bagian tanaman'),
('G19', 'Daun menjadi pendek'),
('G2', 'Menyerang bagian daun'),
('G20', 'Batang menjadi sempit'),
('G21', 'Tanaman berwarna hijau kekuningan'),
('G22', 'Batang menjadi pendek'),
('G23', 'Buku-buku menjadi pendek'),
('G24', 'Anakan banyak tapi kecil'),
('G25', 'Pertumbuhan tanaman kurang sempurna'),
('G3', 'Menyerang tangkai malai'),
('G4', 'Menyerang titik tumbuh padi'),
('G5', 'Terdapat garis tulang daun'),
('G6', 'Batang melepuh'),
('G7', 'Batang berisi cairan hitam'),
('G8', 'Daun terkulai'),
('G9', 'Akar membusuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(30) NOT NULL,
  `penyakit` varchar(30) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `penyakit`, `solusi`) VALUES
('P1', 'Fusarium', '1. Merenggangkan jarak tanaman \r\n2. Mencelupkan bibit ke dalam air campuran POCNASA\r\n3. Sebarkan GLIO di lahan'),
('P2', 'Kresek hawar daun', '1. Pengolahan tanah secara optimal\r\n2. Penanaman varietas unggul dari benih yang sehat\r\n3. Pengaturan jarak tanam \r\n4. Pemupukan berimbang dengan pemberian unsur N, P, K, dan unsur mikro\r\n5. Pengaturan sistem pengairan sesuai fase pertumbuhan tanaman \r\n6. Penyemprotan bakterisida sesuai anjuran yang efektif\r\n\r\n\r\n\r\n\r\n'),
('P3', 'Batang busuk ', '1. Penyemprotan dengan pestisida jenis fungisida yang berbahan aktif difenokonazol\r\n2. Pengelolaan air secara intermiten, jangan terlalu digenang\r\n3. Pemupukan yang berimbang, dengan pemberian unsur K(Kalium), dan N (Nitrogen) sesuai anjuran \r\n'),
('P4', 'Pelepah daun', '1. Pengaturan jarak tanaman tidak terlalu rapat\r\n2. Pemupukan berimbang \r\n3. Pengairan berselang \r\n4. Sanitasi sisa tanaman dan gulma di sekitar sawah \r\n'),
('P5', 'Kerdil', '1. Menggunakan bibit unggul\r\n2. Membersihkan gulma disekitar tanaman padi\r\n3. Penyemprotan pestisida dan insektisida \r\n4. Bercocok tanam dengan tepat \r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
