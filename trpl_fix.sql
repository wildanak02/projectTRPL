-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2017 pada 22.14
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
  `kodeBarang` varchar(15) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `namaBarang` varchar(21) NOT NULL,
  `jenisBarang` int(2) NOT NULL,
  `ukuran` varchar(2) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`idBarang`, `idSupplier`, `kodeBarang`, `gambar`, `namaBarang`, `jenisBarang`, `ukuran`, `deskripsi`, `stok`) VALUES
(1, 1, 'BMP1', 'muslimpria1.jpg', 'Muslim Keren', 1, 'L', 'Baju ini dibuat dengan ahli jahit dengan menggunak', -370),
(2, 1, 'BMP2', 'muslimpria1.jpg', 'Muslim Keren', 1, 'M', 'Baju ini dibuat dengan ahli jahit dengan menggunak', 20),
(3, 1, 'BMP3', 'muslimpria1.jpg', 'Muslim Keren', 1, 'XL', 'Baju ini dibuat dengan ahli jahit dengan menggunak', 30),
(4, 1, 'BMP4', 'muslimpria1.jpg', 'Muslim Keren', 1, 'S', 'Baju ini dibuat dengan ahli jahit dengan menggunak', 30),
(5, 2, 'BMW1', 'muslimwanita.jpg', 'Muslim Keren Wanita', 2, 'L', 'Baju Muslim keren kekinian jaman now', 70),
(6, 2, 'BMW2', 'muslimwanita.jpg', 'Muslim Keren Wanita', 2, 'XL', 'Baju Muslim keren kekinian jaman now', 60),
(7, 2, 'BMW3', 'muslimwanita.jpg', 'Muslim Keren Wanita', 2, 'M', 'Baju Muslim keren kekinian jaman now', 80),
(8, 2, 'BMW4', 'muslimwanita.jpg', 'Muslim Keren Wanita', 2, 'S', 'Baju Muslim keren kekinian jaman now', 54),
(9, 3, 'BMA1', 'muslimanak.jpg', 'Muslim Anak Kece Beud', 3, 'M', 'Busana Muslim untuk anak mengaji', 30),
(10, 3, 'BMA2', 'muslimanak.jpg', 'Muslim Anak Kece Beud', 3, 'XL', 'Busana Muslim untuk anak mengaji', 10),
(11, 3, 'BMA3', 'muslimanak.jpg', 'Muslim Anak Kece Beud', 3, 'L', 'Busana Muslim untuk anak mengaji', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `namaKaryawan` varchar(50) NOT NULL,
  `jenisKelamin` int(12) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jabatan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `namaKaryawan`, `jenisKelamin`, `tanggalLahir`, `jabatan`) VALUES
(2, 'Achmad WIldan Akbar', 1, '2017-11-24', 1);

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
(1, 1, '2017-01-02', 20),
(2, 1, '2017-02-02', 20),
(3, 1, '2017-03-09', 30),
(4, 1, '2017-04-14', 40),
(5, 1, '2017-05-20', 40),
(6, 1, '2017-06-09', 20),
(7, 1, '2017-07-14', 30),
(8, 1, '2017-08-03', 20),
(9, 1, '2017-09-25', 20),
(10, 1, '2017-10-25', 20),
(11, 1, '2017-11-10', 30),
(12, 1, '2017-12-22', 30),
(13, 1, '2018-01-13', 30),
(14, 1, '2018-02-08', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `idPermintaan` int(11) NOT NULL,
  `kodeBarang` varchar(15) NOT NULL,
  `idSupplier` int(11) NOT NULL,
  `permintaan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`idPermintaan`, `kodeBarang`, `idSupplier`, `permintaan`, `status`) VALUES
(1, 'BMP1', 1, 0, 0),
(2, 'BMP2', 1, 0, 0),
(3, 'BMP3', 1, 0, 0),
(4, 'BMP4', 1, 0, 0),
(5, 'BMW1', 2, 0, 0),
(6, 'BMW2', 2, 0, 0),
(7, 'BMW3', 2, 0, 0),
(8, 'BMW4', 2, 0, 0),
(9, 'BMA1', 3, 0, 0),
(10, 'BMA2', 3, 0, 0),
(11, 'BMA3', 3, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prediksi`
--

CREATE TABLE `prediksi` (
  `idPrediksi` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `totalTerjual` int(50) NOT NULL,
  `prediksi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prediksi`
--

INSERT INTO `prediksi` (`idPrediksi`, `idBarang`, `totalTerjual`, `prediksi`) VALUES
(1, 1, 350, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(11) NOT NULL,
  `level` int(12) NOT NULL,
  `namaSupplier` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `level`, `namaSupplier`, `alamat`) VALUES
(1, 5, 'beya', 'jl.Jatinegoro'),
(2, 5, 'wildan', 'jl.kenangan'),
(3, 5, 'feril', 'jl.Kalipuro'),
(4, 5, 'thoriq', 'sumberjambe'),
(5, 5, 'bima', 'banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `avatar`, `level`) VALUES
(1, 'admin', 'admin', '', 1),
(2, 'hrd', 'hrd', 'teacher-1.png', 2),
(3, 'sales', 'sales', 'girl-1.png', 3),
(4, 'gudang', 'gudang', 'man.png', 4),
(5, 'beya', 'beya', 'boy.png', 5),
(6, 'wildan', 'wildan', 'boy-1.png', 5),
(7, 'feril', 'feril', 'man-1.png', 5),
(8, 'thoriq', 'thoriq', 'scientist.png', 5),
(9, 'bima', 'bima', 'student.png', 5);

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
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`idPermintaan`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`idPrediksi`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

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
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idPermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `idPrediksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
