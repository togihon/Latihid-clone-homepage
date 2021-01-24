-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 12:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kelas Gratis Populer'),
(2, 'Kelas LatihID Terbaru'),
(3, 'Expert Class'),
(4, 'LatihID Modul'),
(5, 'LatihID Talks'),
(6, 'LatihID PETA'),
(7, 'Kelas Memulai Bisnis'),
(8, 'Kelas Pemasaran'),
(9, 'Kelas Manajemen Operasional');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `nama_modul` varchar(200) NOT NULL,
  `harga_modul` int(10) NOT NULL,
  `id_kategori` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `gambar`, `nama_modul`, `harga_modul`, `id_kategori`) VALUES
(1, 'https://www.filepicker.io/api/file/7Sh4j4pTi6DaYeSXdx7M', 'Mencari Modal untuk Memulai Usaha', 0, 1),
(2, 'https://www.filepicker.io/api/file/cdc6mSS8R767CSyYYCNb', 'Manajemen Produk : Mengubah Ide Kreatif Menjadi Produk Jadi', 0, 1),
(3, 'https://www.filepicker.io/api/file/qA1pwHkpRaOjoFq2spxx', 'Copywriting untuk Meningkatkan Bisnis Kita', 0, 2),
(4, 'https://www.filepicker.io/api/file/Y5Th42eDSCKbEPY0y1Lw', 'Pentingnya Izin Usaha bagi UMKM Indonesia', 0, 2),
(5, 'https://www.filepicker.io/api/file/SV8nk5ypQxWIKj8gmxLf', 'Membangun Loyalitas Pegawai UMKM', 0, 2),
(6, 'https://www.filepicker.io/api/file/3rV3qvyRStGfLWepwREp', 'Membangun Loyalitas Pelanggan', 0, 2),
(7, 'https://www.filepicker.io/api/file/G6MNtda4SlS91mbbOZAb', 'Social Media Marketing', 0, 1),
(8, 'https://www.filepicker.io/api/file/g1Hvjq3iTrldUFC3PRsM', 'Mengenal Business Model Canvas', 0, 1),
(9, 'https://www.filepicker.io/api/file/vlfJNZApQ5CtzFoVTW9T', 'Kerjasama Tim dalam Kesuksesan UMKM', 0, 1),
(10, 'https://www.filepicker.io/api/file/fybDrFdRkSXJxByMXP34', 'Strategi Pemasaran untuk UMKM', 21000, 3),
(11, 'https://www.filepicker.io/api/file/jgZ8L8I0TWelTKrtcL6x', 'Memahami Analisa Rantai Nilai UMKM', 21000, 3),
(12, 'https://www.filepicker.io/api/file/l29RZnhSiaRd86duwY3S', 'Memahami Business Model Canvas untuk UMKM', 21000, 3),
(13, 'https://www.filepicker.io/api/file/zHI6ayQxTzCayjVlfnf7', 'Menemukan Ide dan Perencanaan Usaha di Desa', 21000, 3),
(14, 'https://www.filepicker.io/api/file/Y5Th42eDSCKbEPY0y1Lw', 'Pentingnya Izin Usaha bagi UMKM Indonesia', 0, 4),
(15, 'https://www.filepicker.io/api/file/SV8nk5ypQxWIKj8gmxLf', 'Membangun Loyalitas Pegawai UMKM', 0, 4),
(16, 'https://www.filepicker.io/api/file/qA1pwHkpRaOjoFq2spxx', 'Copywriting untuk Meningkatkan Bisnis Kita', 0, 4),
(17, 'https://www.filepicker.io/api/file/Oqv0VHWJSIGLUWxhqVlz', 'Strategic Tools untuk Berbisnis', 0, 4),
(18, 'https://www.filepicker.io/api/file/cdc6mSS8R767CSyYYCNb', 'Manajemen Produk : Mengubah Ide Kreatif Menjadi Produk Jadi', 0, 4),
(19, 'https://www.filepicker.io/api/file/uR5sdNuOTRSBtW3ynhFA', 'Aspek Hukum Dalam Kacamata UMKM', 0, 4),
(20, 'https://www.filepicker.io/api/file/tMZRvlkuR16v4SBpyAp5', 'Strategi Psikologi Marketing dalam Berbisnis untuk Memikat Konsumen', 1, 5),
(21, 'https://www.filepicker.io/api/file/utxonxYuRuKqme7MkL9i', 'Bicara Dunia Usaha : Pandemi dan Pemerintah - UMKM Bagaimana?', 0, 5),
(22, 'https://www.filepicker.io/api/file/lqvB8yMcTzqJrYToBscL', 'Perizinan Usaha sebagai Pelindung UMKM', 0, 5),
(23, 'https://www.filepicker.io/api/file/4lRhBz3RFed97iYoQikQ', 'Jurus Ampuh Memaksimalkan Marketplace', 0, 5),
(24, 'https://www.filepicker.io/api/file/JFT99g4TDYc2BA1puPAO', 'Membangun Mental Usaha - Cerita Konsistensi Memulai Usaha', 1, 5),
(25, 'https://www.filepicker.io/api/file/IQgrTMJETuanzaVMYVbJ', 'Memulai Bisnis Sejak Kuliah, Mengapa Tidak?', 1, 5),
(26, 'https://i.ytimg.com/vi/22g6D-TctiQ/hqdefault.jpg', 'Memulai Bisnis, Siapa Takut? bersama Valencia Gabriella', 0, 6),
(27, 'https://i.ytimg.com/vi/KHFcpRGPQbY/hqdefault.jpg', 'Berbisnis dengan Passion bersama Aulia Arman', 0, 6),
(28, 'https://i.ytimg.com/vi/NJL3vXi3tkE/hqdefault.jpg', 'Mengenal Social Enterprise bersama Kitong Bisa Enterprise', 0, 6),
(29, 'https://i.ytimg.com/vi/4DhaNl_qNbo/hqdefault.jpg', 'Pentingnya Packaging dalam Berbisnis bersama Reymond Lee', 0, 6),
(30, 'https://i.ytimg.com/vi/jr0oASY7UPE/maxresdefault.jpg', '\"Environmentally Friendly Cafe di Masa Kini\" bersama Katarina Wilhelmina Sudjono', 0, 6),
(31, 'https://i.ytimg.com/vi/22g6D-TctiQ/hqdefault.jpg', 'Memulai Bisnis, Siapa Takut? bersama Valencia Gabriella', 0, 6),
(32, 'https://www.filepicker.io/api/file/g1Hvjq3iTrldUFC3PRsM', 'Memahami Business Model Canvas', 0, 7),
(33, 'https://www.filepicker.io/api/file/6x6GbgmkQCKK5hsgPRZr', '3 Ide Bisnis di Masa New Normal', 0, 7),
(34, 'https://www.filepicker.io/api/file/Y5Th42eDSCKbEPY0y1Lw', 'Pentingnya Izin Usaha bagi UMKM Indonesia', 0, 7),
(35, 'https://www.filepicker.io/api/file/mP6cxS2rRCmusftjYZ7z', 'Dasar-Dasar Sistem Dalam Memulai UMKM', 0, 7),
(36, 'https://www.filepicker.io/api/file/NgR8eQUQdCNnPwN53GOX', 'Memulai Usaha Dari Modal 0', 0, 7),
(37, 'https://www.filepicker.io/api/file/TxGp0YmuSISu5UKMS2ZD', 'Berjualan di Instagram', 0, 8),
(38, 'https://www.filepicker.io/api/file/TxGp0YmuSISu5UKMS2ZD', 'Marketing Mix', 0, 8),
(39, 'https://www.filepicker.io/api/file/7e9pVxwrSwuQRRzeg5xd', 'Buat Website Bisnismu', 0, 8),
(40, 'https://www.filepicker.io/api/file/f8K1lanaRDqpcwpqPjYV', 'Optimalisasi Marketing Ads untuk Berbisnis', 0, 8),
(41, 'https://www.filepicker.io/api/file/3Vv50Z9QoO7qgwqDhHoA', 'Design Sprint: 5 Langkah Menciptakan Inovasi', 0, 9),
(42, 'https://www.filepicker.io/api/file/SV8nk5ypQxWIKj8gmxLf', 'Membangun Loyalitas Pegawai UMKM', 0, 9),
(43, 'https://www.filepicker.io/api/file/sQJqrTQkQiqTV8k5Oi5Z', 'Rahasia Sukses Berjualan di Marketplace', 0, 9),
(44, 'https://www.filepicker.io/api/file/VlMROzjwQmOJP6DkyMUi', 'Dasar - Dasar Manajemen SDM Untuk UMKM', 0, 9),
(45, 'https://www.filepicker.io/api/file/3rV3qvyRStGfLWepwREp', 'Membangun Loyalitas Pelanggan', 0, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`),
  ADD KEY `FK_kategroi_id` (`id_kategori`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `modul`
--
ALTER TABLE `modul`
  ADD CONSTRAINT `FK_kategroi_id` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
