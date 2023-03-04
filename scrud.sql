-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `pangkat`, `jabatan`, `jenis_kelamin`) VALUES
(5, 'Ade Rahmat Saputra, M.Pd.', 'Mertapada, Astanajapura, Cirebon', 'Kepala Sekolah', 'Kepala Sekolah', 'Laki-Laki'),
(6, 'Madhuri', 'Mertapada, Astanajapura, Cirebon', 'Koor. Tata Usaha', 'Guru ', 'Laki-Laki'),
(8, 'Zaenudin I.M.,S.Pd', 'Mertapada, Astanajapura, Cirebon', 'Waka Hubind', 'Guru Mapel Penjaskes', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `anggota1`
--

CREATE TABLE `anggota1` (
  `id` int(30) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `mapel` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota1`
--

INSERT INTO `anggota1` (`id`, `nama`, `alamat`, `mapel`, `jabatan`, `jenis_kelamin`) VALUES
(1, 'rikoo', 'kanci', 'mtk', 'guru', 'laki');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) NOT NULL,
  `nip` int(20) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `jumlah_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nip`, `kelas`, `jumlah_siswa`) VALUES
(1, 26484394, '11 RPL', 39);

-- --------------------------------------------------------

--
-- Table structure for table `pdb`
--

CREATE TABLE `pdb` (
  `id` int(10) NOT NULL,
  `no_pendaftaran` int(20) NOT NULL,
  `no_induk` int(20) NOT NULL,
  `nisn` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdb`
--

INSERT INTO `pdb` (`id`, `no_pendaftaran`, `no_induk`, `nisn`, `nama`, `alamat`, `TTL`, `jenis_kelamin`, `agama`, `asal_sekolah`) VALUES
(2, 7678, 6, 7, 'JH', 'HBK', 'BJ,', 'BJ', 'J', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaranspp`
--

CREATE TABLE `pembayaranspp` (
  `id` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `tgl_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaranspp`
--

INSERT INTO `pembayaranspp` (`id`, `nama`, `kelas`, `jurusan`, `tgl_pembayaran`) VALUES
(1, 'riyantii', '11', 'RPL(rekayasa  perangkat lunak)', '02/01/06');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(50) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `alamat_peserta` text NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_peserta`, `alamat_peserta`, `asal_sekolah`, `no_hp`, `email`) VALUES
(4, 'ryyxi', 'pgrn', 'MTs Wathoniyah Pengarengan', 898899, 'pal@gmail.com'),
(5, 'Dibah', 'kdw', 'sd', 2147483647, 'bah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`, `kelas`, `jurusan`) VALUES
(6, 'okeh', 'Pengarengan, Pangenan, Cirebon', '10', 'tbo1'),
(7, 'ryntii6', 'buntet', '1224', 'hehe'),
(12, 'rikoo', 'buntet', '12', 'rpl');

-- --------------------------------------------------------

--
-- Table structure for table `siswa1`
--

CREATE TABLE `siswa1` (
  `id` int(30) NOT NULL,
  `no_induk` int(40) NOT NULL,
  `nisn` int(50) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `kelas` int(10) NOT NULL,
  `jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa1`
--

INSERT INTO `siswa1` (`id`, `no_induk`, `nisn`, `nama`, `alamat`, `TTL`, `jenis_kelamin`, `kelas`, `jurusan`) VALUES
(1, 80785, 7899, 'riyanti', '', 'cirebon,28,01,2006', 'perempuan', 11, 'RPL(rekayasa perangkat lunak)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Malas Ngoding', 'malasngoding', 'malasngoding123', 'admin'),
(2, 'operator', 'operator', 'operator123', 'operator'),
(3, 'Jamaludin', 'jamaludin', 'jamaludin123', 'pengurus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota1`
--
ALTER TABLE `anggota1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdb`
--
ALTER TABLE `pdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaranspp`
--
ALTER TABLE `pembayaranspp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa1`
--
ALTER TABLE `siswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `anggota1`
--
ALTER TABLE `anggota1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdb`
--
ALTER TABLE `pdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaranspp`
--
ALTER TABLE `pembayaranspp`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `siswa1`
--
ALTER TABLE `siswa1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
