-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2018 pada 11.18
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `no` int(5) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` char(20) NOT NULL,
  `email` char(20) NOT NULL,
  `alamat` char(20) NOT NULL,
  `jenis_kelamin` char(20) NOT NULL,
  `agama` char(20) NOT NULL,
  `jabatan` char(20) NOT NULL,
  `1` char(5) NOT NULL,
  `2` char(5) NOT NULL,
  `3` char(5) NOT NULL,
  `4` char(5) NOT NULL,
  `5` char(5) NOT NULL,
  `6` char(5) NOT NULL,
  `7` char(5) NOT NULL,
  `8` char(5) NOT NULL,
  `9` char(5) NOT NULL,
  `10` char(5) NOT NULL,
  `11` char(5) NOT NULL,
  `12` char(5) NOT NULL,
  `13` char(5) NOT NULL,
  `14` char(5) NOT NULL,
  `15` char(5) NOT NULL,
  `16` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`no`, `nip`, `nama`, `email`, `alamat`, `jenis_kelamin`, `agama`, `jabatan`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`) VALUES
(1, '112233444', 'neni nur', 'neninur@gmail.com', 'indramayu', 'perempuan', 'islam', 'dosen tetap', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '', '', '', '', '', '', '', '', ''),
(2, '112233433', 'agus wawan St', 'agus.wawan@gmail', 'bandung', 'laki-laki', 'islam', 'dosen tetap', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '', '', '', '', '', '', '', '', ''),
(3, '334455443', 'maman supriatna', 'mamansupwe@g.com', 'garut', 'laki-laki', 'islam', 'dekan', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `no` int(3) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` char(20) NOT NULL,
  `email` char(20) NOT NULL,
  `alamat` char(10) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `agama` char(10) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `persentase` varchar(5) NOT NULL,
  `1` char(2) NOT NULL,
  `2` char(2) NOT NULL,
  `3` char(2) NOT NULL,
  `4` char(2) NOT NULL,
  `5` char(2) NOT NULL,
  `6` char(2) NOT NULL,
  `7` char(2) NOT NULL,
  `8` char(2) NOT NULL,
  `9` char(2) NOT NULL,
  `10` char(2) NOT NULL,
  `11` char(2) NOT NULL,
  `12` char(2) NOT NULL,
  `13` char(2) NOT NULL,
  `14` char(2) NOT NULL,
  `15` char(2) NOT NULL,
  `16` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`no`, `nim`, `nama`, `email`, `alamat`, `jenis_kelamin`, `agama`, `angkatan`, `persentase`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`) VALUES
(1, '1157050247', 'budi', 'budi@gmail.com', 'bandung', 'laki-laki', 'islam', 2014, '', 'H', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1157050001', 'maman supriatna', 'mamansupwe@g.com', 'bandung', 'laki-laki', 'islam', 2003, '', 'H', 'H', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1157050137', 'Rangga Jenni N', 'rangga@gmail.com', 'bandung', 'laki-laki', 'islam', 2015, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_dosen`
--

CREATE TABLE `informasi_dosen` (
  `no` int(3) NOT NULL,
  `id_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(20) NOT NULL,
  `sks` int(2) NOT NULL,
  `jam` varchar(11) DEFAULT NULL,
  `tanggal` int(11) NOT NULL,
  `nama_dosen` char(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_dosen`
--

INSERT INTO `informasi_dosen` (`no`, `id_matakuliah`, `nama_matakuliah`, `sks`, `jam`, `tanggal`, `nama_dosen`, `keterangan`) VALUES
(1, 'TO0001', 'basisdata', 2, '113000', 20180521, 'wildan komara St', 'kuliah di pindahkan'),
(2, 'T0002', 'bahasa indonesia', 3, '72328', 20180501, 'Eva kusuma Spd', 'terlambat 20 menit'),
(3, 'pk0001', 'dasar pemograman', 2, '70000', 20180501, 'kokom komara St', 'hadir'),
(4, 'rey442', 'ekonomi', 2, '150000', 20180517, 'wardianto Sos', 'hadir'),
(5, 'uyi343', 'PBO', 3, '82200', 20180514, 'muhamad komar St.', 'hadir'),
(6, 'dw33', 'adwa', 2, '14:30', 0, 'abud', 'hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `no` int(3) NOT NULL,
  `id_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` char(20) NOT NULL,
  `sks` int(2) NOT NULL,
  `hari` char(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `dosen` char(20) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`no`, `id_matakuliah`, `nama_matakuliah`, `sks`, `hari`, `jam`, `dosen`, `semester`) VALUES
(1, 'pk0001', 'Prak. daspro', 1, 'rabu', '07:00:00.0', 'maman St', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `informasi_dosen`
--
ALTER TABLE `informasi_dosen`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi_dosen`
--
ALTER TABLE `informasi_dosen`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
