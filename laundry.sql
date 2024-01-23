-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Jan 2024 pada 10.32
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: laundry
--

-- --------------------------------------------------------

--
-- Struktur dari tabel cart
--

-- Tabel cart
CREATE TABLE cart (
  cart_id int NOT NULL AUTO_INCREMENT,
  -- Kolom-kolom lainnya di sini
  PRIMARY KEY (cart_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel pesan
--

CREATE TABLE pesan (
  pesan_id int NOT NULL,
  user_id int NOT NULL,
  paket varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  berat int NOT NULL,
  subtotal int NOT NULL,
  total int NOT NULL,
  nama_awal varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  nama_akhir varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  alamat text COLLATE utf8mb4_general_ci NOT NULL,
  telepon varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  metode_pembayaran enum('Dana','Ovo','Transfer Bank') COLLATE utf8mb4_general_ci NOT NULL,
  tanggal_masuk date NOT NULL,
  tanggal_keluar date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel pesan
--

INSERT INTO pesan (pesan_id, user_id, paket, berat, subtotal, total, nama_awal, nama_akhir, alamat, telepon, metode_pembayaran, tanggal_masuk, tanggal_keluar) VALUES
(28, 22, 'sprei', 1, 15000, 15000, 'Perferendis voluptas', 'Quos sed laboris ut ', 'Reprehenderit proide', '605151785135', 'Transfer Bank', '1972-01-12', '1995-07-03'),
(29, 22, 'bedcover', 1, 30000, 30000, 'Perferendis voluptas', 'Quos sed laboris ut ', 'Reprehenderit proide', '605151785135', 'Transfer Bank', '1972-01-12', '1995-07-03'),
(30, 22, 'relax', 2, 3500, 7000, 'Esse aut ea ratione ', 'Laboriosam nulla di', 'Qui consectetur ame', '356743642152', 'Transfer Bank', '2004-12-28', '1976-11-03'),
(31, 22, 'boneka', 2, 10000, 20000, 'Esse aut ea ratione ', 'Laboriosam nulla di', 'Qui consectetur ame', '356743642152', 'Transfer Bank', '2004-12-28', '1976-11-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel users
--

CREATE TABLE users (
  user_id int NOT NULL,
  foto varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  username varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  password varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  nama_awal varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  nama_akhir varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  email varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  telepon varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  alamat1 text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  alamat2 text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel users
--

INSERT INTO users (user_id, foto, username, password, nama_awal, nama_akhir, email, telepon, alamat1, alamat2) VALUES
(22, NULL, 'egasuyatna18', NULL, 'Ega', 'Suyatna', 'egasuyatna18@gmail.com', NULL, '111', '111'),
(23, NULL, '111', '111', '111', '111', '111@111', '111', '111', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel cart
--
ALTER TABLE cart
  MODIFY cart_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Indeks untuk tabel pesan
--
ALTER TABLE pesan
  ADD PRIMARY KEY (pesan_id);

--
-- Indeks untuk tabel users
--
ALTER TABLE users
  ADD PRIMARY KEY (user_id),
  ADD UNIQUE KEY username (username),
  ADD UNIQUE KEY email (email);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel cart
--
ALTER TABLE cart
  MODIFY cart_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel pesan
--
ALTER TABLE pesan
  MODIFY pesan_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel users
--
ALTER TABLE users
  MODIFY user_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;