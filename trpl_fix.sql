-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2017 pada 06.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trpl_fix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `idBarang` int(11) NOT NULL,
  `idSupplier` int(11) NOT NULL,
  `kodeBarang` int(12) NOT NULL,
  `gambar` varchar(12) NOT NULL,
  `namaBarang` varchar(21) NOT NULL,
  `jenisBarang` int(21) NOT NULL,
  `ukuran` varchar(2) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`idBarang`, `idSupplier`, `kodeBarang`, `gambar`, `namaBarang`, `jenisBarang`, `ukuran`, `deskripsi`, `stok`) VALUES
(1, 1, 101, '', 'Casual', 1, 'M', 'Baju yang keren untuk beramah-tamah', 10),
(2, 2, 102, '', 'Casual', 1, 'L', 'Baju yang keren untuk beramah-tamah', 100),
(3, 18, 103, '', 'Casual', 1, 'XL', 'Baju yang keren untuk beramah-tamahs', 0),
(4, 19, 104, '', 'Klasik', 1, 'M', 'Sangat cocok digunakan dalam mode santai', 10),
(5, 20, 105, '', 'Klasik', 1, 'L', 'Sangat cocok digunakan dalam mode santai', 10),
(6, 1, 106, '', 'Klasik', 1, 'XL', 'Sangat cocok digunakan dalam mode santai', 10),
(7, 2, 107, '', 'Modis', 1, 'M', 'Sangat cocok digunakan dalam mode apa aja', 10),
(8, 18, 108, '', 'Modis', 1, 'L', 'Sangat cocok digunakan dalam mode apa aja', 10),
(9, 19, 109, '', 'Modis', 1, 'XL', 'Sangat cocok digunakan dalam mode apa aja', 10),
(10, 20, 201, '', 'Rabbani', 2, 'M', 'Varian baju yang beragam untuk dipakai', 10),
(11, 0, 202, '', 'Rabbani', 2, 'L', 'Varian baju yang beragam untuk dipakai', 10),
(12, 0, 203, '', 'Rabbani', 2, 'XL', 'Varian baju yang beragam untuk dipakai', 10),
(13, 0, 204, '', 'Zoya', 2, 'M', 'Varian baju yang beragam untuk dipakai bersama', 10),
(14, 0, 205, '', 'Zoya', 2, 'L', 'Varian baju yang beragam untuk dipakai bersama', 10),
(15, 0, 206, '', 'Zoya', 2, 'XL', 'Varian baju yang beragam untuk dipakai bersama', 10),
(16, 0, 207, '', 'Elzatta', 2, 'M', 'Varian baju yang beragam', 10),
(17, 0, 208, '', 'Elzatta', 2, 'L', 'Varian baju yang beragam', 10),
(18, 0, 209, '', 'Elzatta', 2, 'XL', 'Varian baju yang beragam', 10),
(19, 0, 301, '', 'Shafira', 3, 'M', 'anak-anak sangat suka variasi warna yang beragam', 10),
(20, 0, 302, '', 'Shafira', 3, 'L', 'anak-anak sangat suka variasi warna yang beragam', 10),
(21, 0, 303, '', 'Shafira', 3, 'XL', 'anak-anak sangat suka variasi warna yang beragam', 10),
(22, 0, 304, '', 'Meccanism', 3, 'M', 'anak-anak sangat suka variasi warna nya', 10),
(23, 0, 305, '', 'Meccanism', 3, 'L', 'anak-anak sangat suka variasi warna nya', 10),
(24, 0, 306, '', 'Meccanism', 3, 'XL', 'anak-anak sangat suka variasi warna nya', 10),
(25, 0, 307, '', 'Dian Pelangi', 3, 'M', 'anak-anak sangat suka variasi warna nya', 10),
(26, 0, 308, '', 'Dian Pelangi', 3, 'L', 'anak-anak sangat suka variasi warna nya', 10),
(27, 0, 309, '', 'Dian Pelangi', 3, 'XL', 'anak-anak sangat suka variasi warna nya', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `namaKaryawan` varchar(12) NOT NULL,
  `jenisKelamin` int(12) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jabatan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `namaKaryawan`, `jenisKelamin`, `tanggalLahir`, `jabatan`) VALUES
(1, 'Beya Aji', 1, '2017-02-21', 1),
(2, 'Ach. Wildan', 1, '2017-02-08', 2),
(3, 'Basirudin', 1, '2017-11-07', 3),
(4, 'Faqih', 1, '2017-11-01', 4),
(5, 'Ridho', 1, '2017-11-11', 5),
(6, 'Ameera', 2, '2017-11-08', 6),
(7, 'Alysha', 2, '2017-10-19', 7),
(8, 'Menthul', 2, '2017-11-02', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `terjual` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `idBarang`, `tanggal`, `terjual`) VALUES
(1, 2, '2017-11-11', 10),
(2, 3, '2017-11-01', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `idPermintaan` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `idSupplier` int(11) NOT NULL,
  `idPenjualan` int(11) NOT NULL,
  `permintaan` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`idPermintaan`, `idBarang`, `idSupplier`, `idPenjualan`, `permintaan`, `status`) VALUES
(1, 1, 16, 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prediksi`
--

CREATE TABLE `prediksi` (
  `idPrediksi` int(11) NOT NULL,
  `idPenjualan` int(12) NOT NULL,
  `totalTerjual` int(50) NOT NULL,
  `prediksi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(11) NOT NULL,
  `idUser` int(12) NOT NULL,
  `namaSupplier` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `idUser`, `namaSupplier`, `alamat`) VALUES
(1, 5, 'feril', 'perum taman kampus C3-1'),
(2, 5, 'Bima', 'Perum GGM blok f.32'),
(18, 5, 'Thariq', 'Perum Kalimantan 31'),
(19, 5, 'Abbi', 'Jl.Jawa 7 no 149'),
(20, 5, 'Juven', 'jl.Mastrip 41'),
(22, 5, 'gilang', 'jl.gilang'),
(23, 5, 'aye', 'aye');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `avatar` varchar(12) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `avatar`, `level`) VALUES
(1, 'admin', 'admin', '', 1),
(2, 'hrd', 'hrd', '', 2),
(3, 'sales', 'sales', '', 3),
(4, 'gudang', 'gudang', '', 4),
(5, 'supplier', 'supplier', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`),
  ADD UNIQUE KEY `idBarang` (`idBarang`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`idPermintaan`),
  ADD UNIQUE KEY `idBarang` (`idBarang`,`idSupplier`,`idPenjualan`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`idPrediksi`),
  ADD UNIQUE KEY `idPenjualan` (`idPenjualan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`),
  ADD UNIQUE KEY `idSupplier` (`idSupplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idPermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `idPrediksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
