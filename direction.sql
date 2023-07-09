-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 08:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `direction`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotek`
--

CREATE TABLE `apotek` (
  `id_apotek` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apotek`
--

INSERT INTO `apotek` (`id_apotek`, `nama`, `status`, `alamat`) VALUES
(1, 'Apotek Empat Sehat', 'Aktif', 'Jl. Pahlawan No. 123'),
(2, 'Apotek Sentosa', 'Aktif', 'Jl. Merdeka No. 456'),
(3, 'Apotek Sejahtera', 'Aktif', 'Jl. Sudirman No. 789'),
(5, 'Apotek Lima Sempurna', 'Aktif', 'JL. Bukan Kaliurang No. 1011');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_apotek` int(11) DEFAULT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `jumlah_obat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_apotek`, `id_obat`, `jumlah_obat`) VALUES
(1, 1, 1, 1, 10),
(2, 2, 2, 3, 5),
(3, 3, 3, 2, 8),
(4, 1, 2, 4, 3),
(5, 3, 1, 5, 6);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `penyimpanan` varchar(100) DEFAULT NULL,
  `id_apotek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_Obat`, `Nama_Obat`, `Harga_Satuan`, `Stok`, `kode_produksi`, `kadaluarsa`, `produsen`, `penyimpanan`, `id_apotek`) VALUES
(1, 'Paracetamol', 5000, 100, '12345', '2023-07-01', 'ABC Pharma', 'Gudang X', 1),
(2, 'Amoxicillin', 10000, 50, '67890', '2023-12-15', 'XYZ Pharmaceuticals', 'Gudang Y', 2),
(3, 'Omeprazole', 8000, 75, '24680', '2023-11-30', 'PQR Med', 'Gudang Z', 3),
(4, 'Aspirin', 3000, 200, '13579', '2024-06-30', 'ABC Pharma', 'Gudang X', 1),
(5, 'Ibuprofen', 7000, 80, '86420', '2024-09-30', 'XYZ Pharmaceuticals', 'Gudang Y', 2),
(6, 'Salbutamol', 20000, 20, '71082', '2023-09-27', 'PQR Med', 'Gudang Z', 5),
(7, ' Fentanyl', 50000, 200, '74829', '2023-09-28', 'ABC Pharma', 'Gudang X', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `total`) VALUES
(1, '2023-05-07', 100000),
(2, '2023-06-06', 75000),
(3, '2023-07-05', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`id_apotek`);

--
-- Indexes for table `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_apotek` (`id_apotek`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ID_Karyawan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ID_Obat`),
  ADD KEY `id_apotek` (`id_apotek`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apotek`
--
ALTER TABLE `apotek`
  MODIFY `id_apotek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `ID_Obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_apotek`) REFERENCES `apotek` (`id_apotek`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`ID_Obat`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_apotek`) REFERENCES `apotek` (`id_apotek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
