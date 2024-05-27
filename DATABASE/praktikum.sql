-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 03:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `kategori_barang` varchar(50) DEFAULT NULL,
  `deskripsi_barang` text,
  `harga_beli` float DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `stok_barang` int DEFAULT NULL,
  `supplier_barang` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_beli`, `harga_jual`, `stok_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(1, 'KB001', 'Laptop Asus VivoBook 14 A416', 'Elektronik', 'Prosesor Intel® Core™ i5 generasi ke-10 dengan RAM hingga 8GB dan grafis diskrit NVIDIA® MX330.', 7000000, 7500000, 10, 'ASUS Surabaya', '2024-05-01'),
(2, 'KB002', 'Printer Canon MAXIFY GX2070', 'Elektronik', 'Printer berperforma tinggi dengan pencetakan hemat biaya, pengaturan nirkabel, dan pemeliharaan mudah.', 3000000, 3500000, 15, 'Canon Depok', '2024-05-02'),
(3, 'KB003', 'Meja Kantor Kayu', 'Furniture', 'Meja kantor kayu kokoh dan tahan lama dengan laci penyimpanan.', 2000000, 2500000, 20, 'Meubel Suka Maju', '2024-05-03'),
(4, 'KB004', 'AC Panasonic Standard Deluxe 1/2 PK', 'Elektronik', 'AC standar non-inverter dengan fitur hemat energi dan pendinginan cepat.', 2500000, 2800000, 5, 'Panasonic Jakarta', '2024-05-04'),
(5, 'KB005', 'Sepatu Nike Air Max', 'Fashion', 'Sepatu olahraga Nike Air Max untuk pria dengan bantalan empuk.', 900000, 1200000, 25, 'Nike Jakarta', '2024-05-05'),
(6, 'KB006', 'Buku Tulis Sidu A5', 'Alat Tulis', 'Buku tulis ukuran A5 dengan 100 lembar berkualitas tinggi.', 4000, 6000, 100, 'PT.Sinar Dunia', '2024-05-06'),
(7, 'KB007', 'Lampu LED Kawachi 12W', 'Elektronik', 'Lampu LED hemat energi dengan daya 12W dan umur panjang.', 20000, 30000, 50, 'PT.kawachi', '2024-05-07'),
(8, 'KB008', 'Sofa Minimalis Leorand', 'Furniture', 'Sofa minimalis 3 dudukan dengan desain elegan dan busa empuk.', 3500000, 4000000, 8, 'Joko Furniture', '2024-05-08'),
(9, 'KB009', 'Tas Ransel Jansport', 'Fashion', 'Tas ransel Jansport tahan air dengan banyak kompartemen dan desain stylish.', 600000, 750000, 30, 'cate spade', '2024-05-09'),
(10, 'KB010', 'Headphone Fantech WH10', 'Elektronik', 'Headphone Bluetooth dengan suara bass yang kuat dan desain nyaman.', 350000, 450000, 40, 'FANTECH', '2024-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `angkatan` int NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` text,
  `mata_kuliah_favorit` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
