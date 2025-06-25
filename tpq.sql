-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2024 pada 17.19
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpq`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_masuk`
--

CREATE TABLE `absen_masuk` (
  `id_absen` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `jam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen_masuk`
--

INSERT INTO `absen_masuk` (`id_absen`, `nis`, `tanggal`, `status`, `jam`) VALUES
(1, 20533357, 'Tuesday, 01-10-2024', 'MASUK', '17:09:55 pm'),
(2, 20533311, 'Tuesday, 01-10-2024', 'TIDAK MASUK', '17:10:29 pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_nilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tahfidz` varchar(100) NOT NULL,
  `aqidah` varchar(100) NOT NULL,
  `fiqih` varchar(100) NOT NULL,
  `tajwid` varchar(100) NOT NULL,
  `mahfudlot` varchar(100) NOT NULL,
  `persholatan` varchar(50) NOT NULL,
  `imla` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_nilai`, `nis`, `tahfidz`, `aqidah`, `fiqih`, `tajwid`, `mahfudlot`, `persholatan`, `imla`, `semester`, `tahun`) VALUES
(1, 20533357, '80', '80', '80', '80', '80', '80', '80', '1', '2024'),
(2, 20533390, '40', '40', '40', '40', '40', '40', '40', '2', '2023'),
(4, 20533357, '20', '20', '20', '20', '20', '20', '20', '2', '2024'),
(5, 20533355, '50', '50', '50', '50', '50', '50', '50', '2', '2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nis`, `password`, `nama`, `level`) VALUES
(2, 20533357, '12345', 'Fabio', 'wali'),
(3, 20533390, '12341', 'Fajar', 'wali'),
(4, 20533420, '12345', 'Kurniawan', 'wali'),
(5, 20533355, '12345', 'Jihan Kurniawan', 'wali'),
(6, 20533311, '12345', 'Fajar Kurniawan', 'wali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tahfidz` varchar(100) NOT NULL,
  `aqidah` varchar(100) NOT NULL,
  `fiqih` varchar(100) NOT NULL,
  `tajwid` varchar(100) NOT NULL,
  `mahfudlot` varchar(100) NOT NULL,
  `persholatan` varchar(50) NOT NULL,
  `imla` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `tahfidz`, `aqidah`, `fiqih`, `tajwid`, `mahfudlot`, `persholatan`, `imla`, `semester`, `tahun`) VALUES
(1, 20533357, '80', '80', '80', '80', '80', '80', '80', '1', '2024'),
(2, 20533390, '40', '40', '40', '40', '40', '40', '40', '2', '2023'),
(4, 20533357, '20', '20', '20', '20', '20', '20', '20', '2', '2024'),
(5, 20533355, '50', '50', '50', '50', '50', '50', '50', '2', '2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `pengumuman` text NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `pengumuman`, `tanggal`) VALUES
(1, ' hello world, ndjdfhwefhuwehfuijsdbcnuiwebgvcwuieybviwuecbnwqioscubnjsacbuiefbwuibvwiuevbuiewvqiobvowqihfwqinjdqiowdnjciochniovwevdkwvn9eivhweiuohvweuivhweiohvwioehvwoihvowiehvowiehviowehvwiohv', '2024-10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `nis` int(11) NOT NULL,
  `nama_santri` text NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kelas` text NOT NULL,
  `nama_ortu` text NOT NULL,
  `pekerjaan_ortu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`nis`, `nama_santri`, `ttl`, `alamat`, `kelas`, `nama_ortu`, `pekerjaan_ortu`) VALUES
(20533311, 'Fajar Kurniawan', 'Surakarta, 15 November 2001', 'Surabaya', '2', 'wwwww', 'pppp'),
(20533355, 'Jihan Kurniawan', 'Surabaya, 22 Mei 2022', 'Malang', '3', 'oooo', 'eeeee'),
(20533357, 'Fabio', 'Surakarta, 15 November 2001', 'Surabaya', '1', 'oooo', 'pppp'),
(20533390, 'Fajar', 'Surabaya, 22 Mei 2022', 'Malang', '2', 'wwwww', 'llllll'),
(20533420, 'Kurniawan', 'Surakarta, 15 Oktober 2005', 'Surabaya', '2', 'qqqqq', 'eeeee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20533421;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD CONSTRAINT `absen_masuk_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `santri` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `santri` (`nis`);

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `santri` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `santri` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
