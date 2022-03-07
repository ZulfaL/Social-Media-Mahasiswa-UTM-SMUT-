-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2021 pada 10.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socmed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NIM_ADMIN` char(20) DEFAULT NULL,
  `NAMA_ADMIN` varchar(255) DEFAULT NULL,
  `EMAIL_ADMIN` char(255) DEFAULT NULL,
  `PASSWORD_ADMIN` char(12) DEFAULT NULL,
  `ALAMAT_ADMIN` varchar(255) DEFAULT NULL,
  `NO_TELEPON_ADMIN` varchar(12) DEFAULT NULL,
  `JENIS_KELAMIN_ADMIN` varchar(12) DEFAULT NULL,
  `FOTO_ADMIN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NIM_ADMIN`, `NAMA_ADMIN`, `EMAIL_ADMIN`, `PASSWORD_ADMIN`, `ALAMAT_ADMIN`, `NO_TELEPON_ADMIN`, `JENIS_KELAMIN_ADMIN`, `FOTO_ADMIN`) VALUES
(1, '123456789123', 'Azizi Ahmad', 'achazizi873@gmail.com', '41e5653fc7ae', 'Griya Abadi 33', '087701679746', 'Laki-laki', 'user.png'),
(2, '160411100159', 'ach azizi', 'achazizi873@gmail.com', 'e0a5eec73685', 'sumenep 163469', '087701679746', 'Laki-laki', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `follow`
--

CREATE TABLE `follow` (
  `ID_FOLLOW` int(11) NOT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL,
  `ID_ADD_MEMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `ID_MEMBER` int(11) NOT NULL,
  `NIM_MEMBER` varchar(20) DEFAULT NULL,
  `NAMA_MEMBER` varchar(255) DEFAULT NULL,
  `EMAIL_MEMBER` varchar(255) DEFAULT NULL,
  `PASSWORD_MEMBER` varchar(12) DEFAULT NULL,
  `ALAMAT_MEMBER` varchar(255) DEFAULT NULL,
  `NO_TELEPON_MEMBER` varchar(12) DEFAULT NULL,
  `JENIS_KELAMIN_MEMBER` varchar(12) DEFAULT NULL,
  `FOTO_MEMBER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`ID_MEMBER`, `NIM_MEMBER`, `NAMA_MEMBER`, `EMAIL_MEMBER`, `PASSWORD_MEMBER`, `ALAMAT_MEMBER`, `NO_TELEPON_MEMBER`, `JENIS_KELAMIN_MEMBER`, `FOTO_MEMBER`) VALUES
(1, '123456789012', 'zulfa', 'zulfa@gmail.com', '54187325749f', 'griya abadi bangkalan 123', '087701679748', 'Perempuan', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengelola`
--

CREATE TABLE `mengelola` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_MEMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengelola_postingan`
--

CREATE TABLE `mengelola_postingan` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_POST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `ID_POST` int(11) NOT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL,
  `NIM_POST` varchar(20) DEFAULT NULL,
  `NAMA_POST` varchar(255) DEFAULT NULL,
  `POSTINGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`ID_FOLLOW`),
  ADD KEY `FK_TAMBAH` (`ID_MEMBER`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_MEMBER`);

--
-- Indeks untuk tabel `mengelola`
--
ALTER TABLE `mengelola`
  ADD PRIMARY KEY (`ID_ADMIN`,`ID_MEMBER`),
  ADD KEY `FK_MENGELOLA2` (`ID_MEMBER`);

--
-- Indeks untuk tabel `mengelola_postingan`
--
ALTER TABLE `mengelola_postingan`
  ADD PRIMARY KEY (`ID_ADMIN`,`ID_POST`),
  ADD KEY `FK_MENGELOLA_POSTINGAN2` (`ID_POST`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `FK_MENGELOLAPOST` (`ID_MEMBER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `follow`
--
ALTER TABLE `follow`
  MODIFY `ID_FOLLOW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `ID_POST` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `FK_TAMBAH` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID_MEMBER`);

--
-- Ketidakleluasaan untuk tabel `mengelola`
--
ALTER TABLE `mengelola`
  ADD CONSTRAINT `FK_MENGELOLA` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MENGELOLA2` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID_MEMBER`);

--
-- Ketidakleluasaan untuk tabel `mengelola_postingan`
--
ALTER TABLE `mengelola_postingan`
  ADD CONSTRAINT `FK_MENGELOLA_POSTINGAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MENGELOLA_POSTINGAN2` FOREIGN KEY (`ID_POST`) REFERENCES `postingan` (`ID_POST`);

--
-- Ketidakleluasaan untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `FK_MENGELOLAPOST` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID_MEMBER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
