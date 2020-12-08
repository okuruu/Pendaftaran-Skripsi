-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 04:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penskri`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `LEVEL` varchar(15) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `NIM` varchar(30) NOT NULL,
  `PW` varchar(200) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TTL` varchar(150) NOT NULL,
  `NOHP` varchar(16) NOT NULL,
  `JURUSAN` varchar(45) NOT NULL,
  `FAK` varchar(20) NOT NULL,
  `JUSEM` varchar(255) NOT NULL,
  `PEMSEM` varchar(255) NOT NULL,
  `JUHAS` varchar(255) NOT NULL,
  `PEMHAS` varchar(255) NOT NULL,
  `JUSKRIP` varchar(255) NOT NULL,
  `JUDULUJIANSKRIPSI` varchar(255) NOT NULL,
  `TANGGAL` varchar(25) NOT NULL,
  `PENGUSKRIP1` varchar(255) NOT NULL,
  `PENGUSKRIP2` varchar(255) NOT NULL,
  `TEMPAT` varchar(255) NOT NULL,
  `JAM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`LEVEL`, `NAMA`, `NIM`, `PW`, `ALAMAT`, `TTL`, `NOHP`, `JURUSAN`, `FAK`, `JUSEM`, `PEMSEM`, `JUHAS`, `PEMHAS`, `JUSKRIP`, `JUDULUJIANSKRIPSI`, `TANGGAL`, `PENGUSKRIP1`, `PENGUSKRIP2`, `TEMPAT`, `JAM`) VALUES
('dosen', '', '112233', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('mahasiswa', 'Gilby Dhilega Yodiaz', '161552018150046', '123', 'Jl. Plaosan Timur VI/I', 'Malang, 12 Maret 1998', '08984170335', 'Informatika', 'Teknik', 'Implementasi Steganografi Image System Pada Android Menggunakan Metode LSB', 'Dr. Istiadi, ST., MT.', 'Klasifikasi Support Vector Machine Pada Dataset Malware', 'Fitri Marisa, S.Kom, M.Pd.', 'Impelentasi Steganografi Image System Pada Android Dengan Metode LSB', 'Impelentasi Steganografi Image System Pada Android Dengan Metode LSB', '2019-02-05', 'Dr. Istiadi, ST., MT.', 'Firman Nurdiyansyah, S.Kom,. M.M', 'Fakultas Teknik', '15:42'),
('mahasiswa', 'Yusuf Mansur', '332211', '123', 'Jl. Surabaya No. 39', 'Jakarta, 19 Oktober 1995', '085790885200', 'Industri', 'Teknik', 'Kualifikasi Data Identitas Pada Kelurahan Mojolangu', 'Dr. Istiadi, ST., MT.', 'Identifikasi Dataset Malware Pada Socket AM4', 'Fitri Marisa, S.Kom, M.Pd.', 'Data Pelanggan Tetap Industri Rumahan Berdasarkan Model Ajax', 'Data Pelanggan Tetap Industri Rumahan Berdasarkan Model Ajax', '2019-12-12', 'Fitri Marisa, S.Kom, M.Pd.', 'Firman Nurdiyansyah, S.Kom,. M.M', 'Fakultas Teknik B4', '18:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
