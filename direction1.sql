-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `direction1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `ID_BarangMasuk` int(11) NOT NULL,
  `ID_Obat` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_set`
--

CREATE TABLE `data_set` (
  `id` int(11) NOT NULL,
  `usia` varchar(12) DEFAULT NULL,
  `gejala1` varchar(20) DEFAULT NULL,
  `gejala2` varchar(20) DEFAULT NULL,
  `riwayat_alergi` varchar(5) DEFAULT NULL,
  `obat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_set`
--

INSERT INTO `data_set` (`id`, `usia`, `gejala1`, `gejala2`, `riwayat_alergi`, `obat`) VALUES
(1, 'Dewasa', 'Batuk', 'Sakit tenggorokan', 'Tidak', 'Obat A'),
(2, 'Anak-anak', 'Mual', 'Hidung tersumbat', 'Iya', 'Obat A'),
(3, 'Anak-anak', 'Pusing', 'Sakit tenggorokan', 'Tidak', 'Obat B'),
(4, 'Lanjut usia', 'Demam', 'Nyeri', 'Iya', 'Obat A'),
(5, 'Anak-anak', 'Mual', 'Hidung tersumbat', 'Tidak', 'Obat B'),
(6, 'Dewasa', 'Pusing', 'Nyeri', 'Iya', 'Obat C'),
(7, 'Lanjut usia', 'Batuk', 'Sakit tenggorokan', 'Iya', 'Obat C'),
(8, 'Anak-anak', 'Sesak napas', 'Hidung tersumbat', 'Tidak', 'Obat C'),
(9, 'Dewasa', 'Pusing', 'Sakit tenggorokan', 'Tidak', 'Obat A'),
(10, 'Lanjut usia', 'Mual', 'Nyeri', 'Iya', 'Obat A'),
(11, 'Lanjut usia', 'Batuk', 'Sakit tenggorokan', 'Tidak', 'Obat B'),
(12, 'Dewasa', 'Demam', 'Sakit tenggorokan', 'Tidak', 'Obat B'),
(13, 'Dewasa', 'Sesak napas', 'Nyeri', 'Iya', 'Obat C'),
(14, 'Anak-anak', 'Batuk', 'Nyeri', 'Tidak', 'Obat A'),
(15, 'Lanjut usia', 'Mual', 'Sakit tenggorokan', 'Tidak', 'Obat A'),
(16, 'Dewasa', 'Pusing', 'Sakit tenggorokan', 'Iya', 'Obat B'),
(17, 'Anak-anak', 'Demam', 'Hidung tersumbat', 'Iya', 'Obat C'),
(18, 'Dewasa', 'Batuk', 'Sakit tenggorokan', 'Tidak', 'Obat B'),
(19, 'Anak-anak', 'Sesak napas', 'Nyeri', 'Iya', 'Obat C'),
(20, 'Dewasa', 'Demam', 'Hidung tersumbat', 'Tidak', 'Obat C');

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksi`
--

CREATE TABLE `detailtransaksi` (
  `ID_DetailTransaksi` int(11) NOT NULL,
  `ID_Transaksi` int(11) DEFAULT NULL,
  `ID_Obat` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailtransaksi`
--

INSERT INTO `detailtransaksi` (`ID_DetailTransaksi`, `ID_Transaksi`, `ID_Obat`, `Jumlah`) VALUES
(1, 1, 1, 5),
(2, 1, 2, 3),
(3, 2, 3, 2),
(4, 2, 4, 4),
(5, 3, 5, 6),
(6, 3, 6, 1),
(7, 4, 7, 8),
(8, 4, 8, 2),
(9, 5, 9, 3),
(10, 5, 10, 7),
(11, 6, 11, 4),
(12, 6, 1, 2),
(13, 7, 2, 6),
(14, 7, 3, 3),
(15, 8, 4, 1),
(16, 8, 5, 9),
(17, 9, 6, 2),
(18, 9, 7, 5),
(19, 10, 8, 3),
(20, 10, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `ID_Karyawan` int(11) NOT NULL,
  `Nama_Karyawan` varchar(100) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `Nomor_Telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `ID_Obat` int(11) NOT NULL,
  `Nama_Obat` varchar(100) DEFAULT NULL,
  `Harga_Satuan` int(10) DEFAULT NULL,
  `Stok` int(11) DEFAULT NULL,
  `kode_produksi` varchar(255) DEFAULT NULL,
  `kadaluarsa` date DEFAULT NULL,
  `produsen` varchar(255) DEFAULT NULL,
  `penyimpanan` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_Obat`, `Nama_Obat`, `Harga_Satuan`, `Stok`, `kode_produksi`, `kadaluarsa`, `produsen`, `penyimpanan`) VALUES
(1, 'Obat B', 10000, 50, 'KDP001', '2023-07-11', 'Supplier A', 'A'),
(2, 'Obat B', 20000, 100, 'KDP002', '2023-08-15', 'Supplier B', 'B'),
(3, 'Obat C', 15000, 75, 'KDP003', '2023-09-30', 'Supplier C', 'C'),
(4, 'Obat D', 30000, 80, 'KDP004', '2023-07-31', 'Supplier A', 'A'),
(5, 'Obat E', 25000, 60, 'KDP005', '2023-08-15', 'Supplier B', 'B'),
(6, 'Obat F', 18000, 90, 'KDP006', '2023-09-30', 'Supplier C', 'C'),
(7, 'Obat G', 12000, 70, 'KDP007', '2023-07-10', 'Supplier A', 'A'),
(8, 'Obat H', 22000, 40, 'KDP008', '2023-08-15', 'Supplier B', 'B'),
(9, 'Obat I', 16000, 65, 'KDP009', '2023-09-30', 'Supplier C', 'C'),
(10, 'Obat J', 28000, 50, 'KDP010', '2023-07-31', 'Supplier A', 'A'),
(11, 'Obat K', 20000, 80, 'KDP011', '2023-08-15', 'Supplier A', 'B'),
(35, 'ronaldo wati', 20000, 55, '11', '2023-07-26', '11', '1'),
(36, 'boneka', 111, 80, '11', '2023-07-28', 'Supplier A', '1'),
(37, 'boneka', 111, 8, '11', '2023-07-28', 'Supplier b', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(11) NOT NULL,
  `Tanggal_Transaksi` date DEFAULT NULL,
  `Total_Harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `Tanggal_Transaksi`, `Total_Harga`) VALUES
(1, '2023-01-01', 250000),
(2, '2023-01-02', 150000),
(3, '2023-01-03', 500000),
(4, '2023-02-01', 300000),
(5, '2023-02-02', 200000),
(6, '2023-02-03', 450000),
(7, '2023-03-01', 350000),
(8, '2023-03-02', 250000),
(9, '2023-03-03', 400000),
(10, '2023-04-01', 500000),
(11, '2023-04-02', 100000),
(12, '2023-04-03', 600000),
(13, '2023-05-01', 200000),
(14, '2023-05-02', 350000),
(15, '2023-05-03', 450000),
(16, '2023-06-01', 400000),
(17, '2023-06-02', 100000),
(18, '2023-06-03', 550000),
(19, '2023-07-01', 300000),
(20, '2023-07-02', 250000),
(21, '2023-07-03', 300000),
(22, '2023-07-04', 250000),
(23, '2023-07-05', 400000),
(24, '2023-07-03', 500000),
(25, '2023-07-04', 100000),
(26, '2023-06-03', 600000),
(27, '2023-07-01', 200000),
(28, '2023-06-12', 350000),
(29, '2023-06-21', 450000),
(30, '2023-05-09', 400000),
(31, '2023-03-08', 100000),
(32, '2023-01-09', 550000),
(33, '2023-04-26', 300000),
(34, '2023-02-18', 250000),
(35, '2023-03-29', 400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`ID_BarangMasuk`),
  ADD KEY `ID_Obat` (`ID_Obat`);

--
-- Indexes for table `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD PRIMARY KEY (`ID_DetailTransaksi`),
  ADD KEY `ID_Obat` (`ID_Obat`),
  ADD KEY `ID_Transaksi` (`ID_Transaksi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ID_Karyawan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ID_Obat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `ID_Obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`ID_Obat`) REFERENCES `obat` (`ID_Obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD CONSTRAINT `detailtransaksi_ibfk_2` FOREIGN KEY (`ID_Transaksi`) REFERENCES `transaksi` (`ID_Transaksi`),
  ADD CONSTRAINT `detailtransaksi_ibfk_3` FOREIGN KEY (`ID_Obat`) REFERENCES `obat` (`ID_Obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
