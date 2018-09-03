-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 05:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_mata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`, `usia`, `jenis_kelamin`, `alamat`) VALUES
(12, 'Hasriani', 'admin', 'admin', '21', 'P', 'Pettarani ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_klp_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `gejala` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `id_klp_gejala`, `kd_gejala`, `gejala`) VALUES
(2, 7, 'G001', 'Mata merah merata'),
(4, 7, 'G002', 'Mata merah tidak merata'),
(5, 7, 'G003', 'Mata berair'),
(6, 7, 'G004', 'Terasa Lengket pagi hari'),
(7, 7, 'G005', 'Mata gatal'),
(8, 7, 'G006', 'Peka terhadap cahaya'),
(9, 7, 'G007', 'Penglihatan(kabur)'),
(10, 7, 'G008', 'Penglihatan tidak jelas'),
(11, 4, 'G009', 'Sakit kepala'),
(12, 7, 'G010', 'Mata perih'),
(13, 7, 'G011', 'Air mata berlebihan'),
(14, 7, 'G012', 'Mata terasa kering'),
(15, 7, 'G013', 'Mata iritasi'),
(16, 7, 'G014', 'Butuh lampu lebih terang saat '),
(17, 7, 'G014', 'Butuh lampu lebih terang saat membaca'),
(18, 7, 'G015', 'Mata nyeri hebat'),
(19, 7, 'G015', 'Mata silau akan cahaya'),
(20, 7, 'G016', 'Mata silau akan cahaya'),
(21, 7, 'G017', 'Dapat melihat dobel pada satu mata'),
(22, 7, 'G018', 'Lensa mata berubah menjadi buram seperti kaca susu'),
(23, 7, 'G019', 'Rasa terbakar,gatal dan silau'),
(24, 7, 'G020', 'Menyipitkan mata'),
(25, 4, 'G021', 'Seperti ada benda asing dimata'),
(26, 7, 'G022', 'Kelopak mata yang menempel saat bangun tidur'),
(27, 7, 'G023', 'Penglihatan kabur ketika membaca dengan jarak normal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `id_hasil` int(10) NOT NULL,
  `id_pengunjung` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok_gejala`
--

CREATE TABLE `tbl_kelompok_gejala` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelompok_gejala`
--

INSERT INTO `tbl_kelompok_gejala` (`id`, `nama`, `keterangan`) VALUES
(4, 'gejala non fisik-', '-'),
(7, 'gejala fisik', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Hasriani');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaicf`
--

CREATE TABLE `tbl_nilaicf` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilaicf`
--

INSERT INTO `tbl_nilaicf` (`id`, `gejala_id`, `penyakit_id`, `mb`, `md`) VALUES
(24, 2, 27, 0.1, 0.8),
(30, 5, 27, 0.3, 0.7),
(31, 7, 27, 1, 0.2),
(32, 6, 27, 0.3, 0.1),
(33, 9, 27, 0.3, 0.2),
(34, 8, 27, 0.3, 0.4),
(35, 9, 28, 0.3, 0.2),
(36, 18, 28, 0.3, 0.5),
(37, 8, 28, 0.3, 0.5),
(38, 5, 28, 0.3, 0.4),
(40, 18, 29, 0.3, 0.6),
(41, 12, 29, 0.1, 0.2),
(42, 11, 29, 0.2, 0.3),
(43, 13, 29, 0.3, 0.4),
(44, 17, 29, 0.5, 0.1),
(45, 24, 29, 0.5, 0.3),
(46, 9, 29, 0.5, 0.6),
(47, 11, 29, 0.6, 0.2),
(48, 27, 29, 0.7, 0.3),
(50, 4, 31, 0.5, 0.3),
(51, 15, 31, 0.5, 0.7),
(52, 7, 31, 0.5, 0.4),
(53, 12, 31, 0.7, 0.6),
(54, 9, 31, 0.7, 0.3),
(55, 25, 31, 0.9, 0.4),
(56, 14, 32, 0.4, 0.6),
(58, 2, 32, 0.7, 0.5),
(59, 15, 32, 0.7, 0.9),
(60, 23, 32, 0.7, 0.8),
(61, 26, 32, 0.7, 0.7),
(62, 10, 33, 0.7, 0.3),
(63, 8, 33, 0.9, 1),
(64, 21, 33, 0.3, 0.9),
(65, 22, 33, 0.8, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `kd_penyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(27, 'P001', 'Konjungtivitis alergi', 'Mata terasa lengket pagi hari', 'Obat astringen,Obat steroid'),
(28, 'P002', 'Hordeolum', 'Penglihatan Kabur', 'Antibiotik topical :Obat Gentamycin,Neomycin,Chloramphenicol,Polimyxin B.'),
(29, 'P003', 'Miop', 'Mata nyeri hebat', 'Eye Care Softge,Laser PR,Operasi LASIK'),
(30, 'P004', 'Presbiop', 'Butuh lampu lebih terang saat membaca', ' Kacamata,Lensa Kontak,Bedah refraktif,Implan lensa'),
(31, 'P005', 'Pterigium', 'Mata merah tidak merata,Mata iritasi', 'Pemberian obat-obatan sesuai resep dokter atau dengan operasi'),
(32, 'P006', 'Dry eye', 'Mata terasa kering,Iritasi pada mata', 'Gunakan tetes mata untuk melumasi mata'),
(33, 'P007', 'Katarak', 'Dapat melihat dobel pada satu mata', 'Melakukan operasi mata');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `jenis_kelamin`, `umur`, `alamat`) VALUES
(1, 'Hasriani', 'Wanita', '21', 'Pettarani '),
(2, 'Hasriani', 'Wanita', '21', 'Pettarani '),
(3, 'Hasriani', 'Wanita', '21', 'Pettarani '),
(4, 'Ayu', 'Wanita', '22', 'Abd.Sirua'),
(5, 'Hasriani', 'Wanita', '21', 'Abd.Sirua'),
(6, 'Hasriani', 'Wanita', '21', 'Abd.Sirua'),
(7, 'Hasriani', 'Laki-laki', '21', 'Abd.Sirua'),
(8, 'Wahida', 'Wanita', '30', 'Siwa '),
(9, 'Risnawati', 'Wanita', '22', 'Racing Centre'),
(10, 'Hardianto', 'Laki-laki', '18', 'Borong Raya'),
(11, 'Muh.Arif', 'Laki-laki', '40', 'Cendrawasih'),
(12, 'Hasriani', 'Wanita', '21', 'Abd.Sirua'),
(13, 'Alif', 'Laki-laki', '22', 'Borong Raya'),
(14, 'Ayu Lestari', 'Wanita', '21', 'Pettarani '),
(15, 'Ayu Lestari', 'Wanita', '21', 'Pettarani '),
(16, 'Ayu Lestari', 'Wanita', '21', 'Pettarani '),
(17, 'wahida', 'Laki-laki', '30', 'Daya'),
(18, 'wahida', 'Laki-laki', '30', 'Daya'),
(19, 'Risnawati', 'Wanita', '22', 'Perintis kemerdekaan'),
(20, 'dedi', 'Laki-laki', '22', 'BTP blok Af');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `id_klp_gejala` (`id_klp_gejala`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_pengunjung` (`id_pengunjung`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tbl_kelompok_gejala`
--
ALTER TABLE `tbl_kelompok_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilaicf`
--
ALTER TABLE `tbl_nilaicf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`gejala_id`),
  ADD KEY `id_penyakit` (`penyakit_id`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelompok_gejala`
--
ALTER TABLE `tbl_kelompok_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilaicf`
--
ALTER TABLE `tbl_nilaicf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD CONSTRAINT `tbl_gejala_ibfk_1` FOREIGN KEY (`id_klp_gejala`) REFERENCES `tbl_kelompok_gejala` (`id`);

--
-- Constraints for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD CONSTRAINT `tbl_hasil_ibfk_1` FOREIGN KEY (`id_pengunjung`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_hasil_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tbl_penyakit` (`id_penyakit`);

--
-- Constraints for table `tbl_nilaicf`
--
ALTER TABLE `tbl_nilaicf`
  ADD CONSTRAINT `tbl_nilaicf_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `tbl_gejala` (`id_gejala`),
  ADD CONSTRAINT `tbl_nilaicf_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `tbl_penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
