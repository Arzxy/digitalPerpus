-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2024 pada 11.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dig_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_anggota` enum('Mahasiswa','Admin') NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` char(15) NOT NULL DEFAULT 'Anggota'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `jenis_anggota`, `password`, `level`) VALUES
('A001', 'Skibidin', 'Mahasiswa', '123', 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `file_buku` varchar(200) NOT NULL,
  `file_banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `penerbit`, `tgl`, `file_buku`, `file_banner`) VALUES
('B003', 'Naruto Shipuden', 'FAgrhh', '2024-07-10', 'Web Latihan 8 (202304023).pdf', 'qrcode.png'),
('B004', 'Hari raya penuh Berk', 'vadba', '2024-07-10', 'Web Latihan 9 (202304023).pdf', 'download.jpg'),
('B005', 'Jurnal ABC', 'CDBVE', '2024-07-10', 'jm_elektro,+Jurnal+Randi+V+Palit.pdf', 'Screenshot 2024-05-02 125525.png'),
('B006', 'Arya modol', 'Akupaul', '2024-07-11', '2024.2.TRPL204.20.8iHlzFgJic.pdf', 'JasaKu Logo (JPG) (Akmal).jpg'),
('B007', 'Arya geleh di kali', 'Unknownay', '2024-07-11', 'Rafly_A_202304002_English For Presentation.pdf', 'Chatt (1).png'),
('B008', 'Arya ndasmu', 'CDBVE', '2024-07-11', 'WhatsApp Image 2022-04-29 at 21.38.13 (1).jpeg', 'Landing Page.png'),
('B009', 'Arya anak bawamg', 'Lombaa', '2024-07-11', 'Rancang_Bangun_Aplikasi_Top_Up_Voucher_Game_Online.pdf', '2. Tugas Teks Dasar.jpg'),
('B010', 'Arya punya bawang pu', 'Lopa', '2024-07-11', 'A.H.+Dalimunthe+et+al.pdf', 'Projek Sisfo Mobile.png'),
('B011', 'Hari raya penuh Berk', 'Asamu', '2024-07-11', '1 Laravel 8.pdf', 'original-e36c38c8d7ac8f721763ed39d7dfdc79.jpg'),
('B012', 'Kita hayu', 'Opw', '2024-08-01', '913-Gallery PDF-3553-1-10-20230429.pdf', 'Diagram Tanpa Judul.drawio (3).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL DEFAULT 'Administrator'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Zainal Arifin', 'admin', '1', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
