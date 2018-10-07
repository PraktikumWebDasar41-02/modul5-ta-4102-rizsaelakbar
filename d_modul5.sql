-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2018 pada 04.48
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `komentar`) VALUES
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'abror', 'abror@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'abror', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('', '', '', 'good job dode yeay lol'),
('6701174115', 'saya', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'sayaa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174110', 'as', 'rizsa@gmail.com', ''),
('1234567891', 'fg', 'rizsa@gmail.com', 'good job dode yeay lol'),
('1234567891', 'rizsa', 'rizsa@gmail.com', 'good job dode yeay lol'),
('1234567891', 'rizsa', 'rizsa@gmail.com', 'good job dode yeay lol'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf'),
('6701174115', 'rizsa', 'rizsa@gmail.com', 'asdfs as fas  fas  fa s  as f   sf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
