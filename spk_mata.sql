-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 08:24 AM
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
(12, 'Hasriani', 'admin', 'admin', '21', 'P', 'Pettarani '),
(13, 'Ayu', 'admin', 'admin', '21', 'P', 'Abd.Sirua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_klp_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `id_klp_gejala`, `kd_gejala`, `gejala`) VALUES
(2, 7, 'G001', 'Mata merah merata'),
(4, 7, 'G002', 'Mata berair'),
(5, 7, 'G003', 'Mata terasa lengket pagi hari'),
(6, 7, 'G004', 'Mata terasa panas'),
(7, 7, 'G005', 'Mata gatal'),
(8, 7, 'G006', 'Terdapat kotoran mata'),
(9, 4, 'G007', 'Lekas capek'),
(10, 7, 'G008', 'Penglihatan kabur'),
(11, 4, 'G009', 'Sensasi adanya benda asing dimata'),
(12, 7, 'G010', 'Terkadang terdapat titik kekuning-kuningan pada area yang membengkak.'),
(13, 7, 'G011', 'Pandangan kabur saat melihat objek yang jauh sehingga sering menyipitkan mata,misalnya kesulitan melihat huruf yang dipapan tulis'),
(14, 4, 'G012', 'Sakit kepala atau mata lelah karena mata bekerja secara berlebihan'),
(15, 7, 'G013', 'Frekuensi mengedipkan mata yang berlebihan'),
(16, 7, 'G014', 'Sering menggosok mata'),
(17, 7, 'G015', 'Terlihat tidak menyadari keberadaan objek yang jauh'),
(18, 7, 'G016', 'Kecendrungan untuk memegang bacaan lebih jauh,agar bisa lebih jelas melihat huruf'),
(19, 7, 'G017', 'Menyipitkan mata'),
(20, 7, 'G018', 'Penglihatan kabur ketika membaca dengan jarak normal'),
(21, 7, 'G019', 'Butuh lampu lebih terang saat membaca'),
(22, 4, 'G020', 'Sakit kepala atau mata menegang setelah membaca'),
(23, 7, 'G021', 'Kesulitan membaca cetakan huruf yang berukuran kecil'),
(24, 7, 'G022', 'Mata merah'),
(25, 7, 'G023', 'Iritasi,gatal,atau perih pada mata'),
(26, 7, 'G024', 'Pandangan samar tau kabur'),
(27, 7, 'G025', 'Terasa ada yang mengganjal dimata apabila selaput pterygium tebal atau lebar'),
(28, 7, 'G026', 'Mata terasa kering atau terasa sakit sepanjang hari dan makin memburuk'),
(29, 7, 'G027', 'Kelopak mata yang menempel saat bangun tidur'),
(30, 7, 'G028', 'Penglihatan kabur sementara'),
(31, 7, 'G029', 'Iritasi pada mata'),
(32, 7, 'G030', 'Rasa terbakar,gatal,dan silau pada mata'),
(33, 4, 'G031', 'Penglihatan tidak jelas,seperti terdapat kabut menghalangi objek'),
(34, 7, 'G032', 'Peka terhadap sinar atau cahaya'),
(35, 7, 'G033', 'Dapat melihat dobel pada satu mata'),
(36, 7, 'G034', 'Memerlukan pencahayaan yang tegang untuk dapat membaca'),
(37, 7, 'G035', 'Lensa mata berubah menjadi buram seperti susu');

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
  `nama_klp` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelompok_gejala`
--

INSERT INTO `tbl_kelompok_gejala` (`id`, `nama_klp`, `keterangan`) VALUES
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
(67, 2, 27, 0.7, 0.3),
(68, 4, 27, 0.5, 0.3),
(69, 5, 27, 0.5, 0.4),
(70, 6, 27, 0.4, 0.2),
(71, 7, 27, 1, 0.7),
(72, 8, 27, 0.4, 0.3),
(73, 9, 27, 0.5, 0.3),
(74, 4, 28, 0.5, 0.3),
(75, 10, 28, 0.5, 0.2),
(76, 11, 28, 0.4, 0.2),
(78, 12, 28, 0.5, 0.3),
(92, 13, 29, 0.7, 0.2),
(93, 14, 29, 0.7, 0.2),
(94, 15, 29, 0.4, 0.2),
(95, 16, 29, 0.5, 0.2),
(96, 17, 29, 0.4, 0.2),
(97, 18, 30, 0.4, 0.3),
(98, 19, 30, 0.5, 0.3),
(99, 20, 30, 0.5, 0.2),
(100, 21, 30, 0.4, 0.2),
(101, 22, 30, 0.5, 0.7),
(102, 23, 30, 0.5, 0.3),
(103, 24, 31, 0.7, 0.3),
(104, 25, 31, 0.4, 0.3),
(105, 26, 31, 0.4, 0.2),
(106, 27, 31, 0.4, 0.3),
(107, 28, 32, 0.5, 0.7),
(109, 24, 32, 0.4, 0.3),
(110, 29, 32, 0.7, 0.2),
(111, 30, 32, 0.5, 0.7),
(112, 31, 32, 0.7, 0.2),
(113, 32, 32, 0.5, 0.7),
(114, 33, 33, 0.7, 0.3),
(116, 34, 33, 0.7, 0.3),
(117, 35, 33, 0.5, 0.2),
(118, 36, 33, 0.5, 0.2),
(119, 37, 33, 0.4, 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `definisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `kd_penyakit`, `nama_penyakit`, `definisi`) VALUES
(27, 'P001', 'Konjungtivitis alergi', ' Pengobatan konjungtivitis alergi sangat bergantung dengan penyebab dan beratnya gejala yang dialami penderita. Pertama, tentunya harus mencegah kontak dengan alergen. Obat yang dapat diberikan adalah astringen (mengecilkan jaringan), dan steroid (anti-radang) topikal dosis rendah.'),
(28, 'P002', 'Hordeolum', 'Hordeolum seringkali sembuh tanpa pengobatan dalam waktu 1-2 minggu. Namun kompres hangat akan membantu drainase sehingga mempercepat penyembuhan. Kompres hangat dapat diterapkan 4-6 kali sehari selama beberapa menit setiap sesinya. Pada beberapa kasus hordeolum, diberikan antibiotik untuk menghilangkan infeksi. Antibiotik untuk hordeolum ini dapat diberikan dalam bentuk topikal (salep atau tetes mata) dan bentuk oral (diminum). Namun pada sebagian kasus, antibiotik saja tidak efektif untuk mengatasi hordeolum. Contoh antibiotik topikal dan oral untuk mengatasi hordeolum:  a.	Antibiotik topikal: Gentamycin, Neomycin, Chloramphenicol, dan Polimyxin B. b.	Antibiotik oral: Amoksisilin, Ampisilin, Eritromisin, Doksisiklin.'),
(29, 'P003', 'Miop', 'a.	Memeriksakan mata secara teratur.\r\nb.	Mengendalikan kondisi kesehatan kronis, misalnya diabetes dan  tekanan darah tinggi.\r\nc.	Melindungi mata dari sinar matahari dengan memakai kacamata yang menghambat radiasi ultraviolet (UV).\r\nd.	Mencegah cedera mata. Anda disarankan memakai pelindung mata saat melakukan aktivitas tertentu macam berolahraga, memangkas rumput, mengecat, atau menggunakan produk lain yang mengandung asap beracun\r\ne.	Berhenti merokok. Hal ini tidak hanya membantu mengistirahatkan tubuh melainkan juga kesehatan mata.\r\nf.	Menggunakan lensa korektif yang tepat.\r\ng.	Mengurangi kelelahan mata. Setelah beberapa menit menggunakan komputer atau membaca, Anda harus berpaling sehingga mata dapat rileks\r\n'),
(30, 'P004', 'Presbiop', 'a.	Kacamata. Penggunaan kacamata adalah cara sederhana dan aman untuk menangani presbiopia. Jika kacamata baca biasa tidak bisa menangani, pasien mungkin akan diresepkan kacamata berlensa khusus untuk presbiopia.\r\nb.	Lensa kontak. Alat ini bisa digunakan bagi pasien yang tidak ingin mengenakan kacamata. Namun, lensa kontak mungkin tidak bisa digunakan jika penderita juga mengidap kondisi tidak normal pada kelopak mata, saluran air mata, dan permukaan mata.\r\nc.	Bedah refraktif. Prosedur ini bertujuan untuk mengubah bentuk kornea mata untuk meningkatkan penglihatan jarak dekat. \r\nd.	Implan lensa. Pada prosedur ini, lensa mata penderita akan diganti dengan lensa mata sintetis. Umumnya, pasien yang memilih prosedur ini pernah menjalani pembedahan LASIK sebelumnya.\r\ne.	Inlay kornea. Dokter akan memasukkan ring plastik kecil di sudut setiap kornea mata untuk mengubah lengkungannya. Risiko inlay kornea lebih kecil jika dibandingkan tindakan pembedahan mata lainnya.\r\n'),
(31, 'P005', 'Pterigium', 'Namun apabila pterygium sudah menghalangi lapangan pandang mata atau mengganggu kenyamanan, dapat ditangani dengan pemberian obat-obatan sesuai resep dokter atau dengan operasi. Apabila dengan obat-obatan saja tidak cukup, dapat dilakukan pengangkatan selaput pterygium melalui operasi.Karena berpotensi menyebabkan komplikasi berupa bekas luka dan goresan pada kornea, atau pandangan kabur akibat permukaan kornea yang tidak rata, prosedur operasi hanya dianjurkan apabila:Penanganan lain terbukti tidak efektif'),
(32, 'P006', 'Dry eye', 'a.	Meningkatkan produksi air mata. Beberapa tetes mata dapat membantu meningkatkan produksi air mata. Meningkatkan nutrisi yang kaya akan asam lemak omega 3 juga terhindar dari mata kering\r\nb.	Mengobati kelopak mata yang  sudah mengalami peradangan permukaan mata. Dokter Anda akan memberikan obat tetes mata atau salep atau pembersih kelopak mata dapat membantu mengurangi peradangan pada permukaan mata.\r\nc.	Ingatlah untuk selalu berkedip secara teratur.\r\nd.	Lindungi mata dari lingkungan yang berdebu, berasap, berangin,dan kering\r\ne.	Atur posisi saat membaca atau menggunakan komputer.\r\nf.	Makanlah makanan yang sehat dan seimbang.\r\n'),
(33, 'P007', 'Katarak', 'Satu-satunya pengobatan katarak yang paling efektif adalah operasi.Operasi katarak merupakan prosedur umum meliputi membuang bagian lensa yang berkabut dan digantikan dengan lensa buatan yang disebut intraocular lens implant(IOL).Kadang-kadang tidak digunakan IOL dan sebagai gantinya digunakan kacamata ataupun kontak lensa untuk mengkompensasi bagian lensa yang dibuang.');

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
(20, 'dedi', 'Laki-laki', '22', 'BTP blok Af'),
(21, 'Nurjasila', 'Wanita', '21', 'Racing Centre'),
(22, 'Rosdiana', 'Wanita', '33', 'BTP blok Af'),
(23, 'Risnawati', 'Wanita', '22', 'BTP blok Af'),
(24, 'Hasmi', 'Wanita', '22', 'Borong Raya'),
(25, 'Rasma', 'Wanita', '21', 'Abd.Sirua'),
(26, 'Rasma', 'Wanita', '21', 'Abd.Sirua'),
(27, 'Rasma', 'Wanita', '21', 'Abd.Sirua'),
(28, 'Nani Astuti', 'Wanita', '21', 'Racing Centre'),
(29, 'Nani Astuti Triana', 'Wanita', '21', 'Racing Centre'),
(30, 'Nani Astuti Triana', 'Laki-laki', '21', 'Racing Centre'),
(31, 'Nani Astuti Triana', 'Laki-laki', '21', 'Racing Centre'),
(32, 'wertyu', 'Wanita', '22', 'dfghj'),
(33, 'Senni', 'Wanita', '21', 'Pettarani 3'),
(34, 'wiwik', 'Laki-laki', '22', 'Perintis kemerdekaan'),
(35, 'Marsya', 'Wanita', '22', 'Perintis kemerdekaan'),
(36, 'sulhm', 'Laki-laki', '23', 'Jalan Mannuruki'),
(37, 'Kamaruddin', 'Laki-laki', '21', 'Pettarani '),
(38, 'Hasmiati', 'Wanita', '19', 'Pettarani 3'),
(39, 'Jumriani', '0', '21', 'Borong Raya'),
(40, 'Rasmawati', 'Wanita', '30', 'Cendrawasih'),
(41, 'Gunawan', 'Laki-laki', '30', 'Perintis kemerdekaan'),
(42, 'Riswaldi', 'Laki-laki', '40', 'Perintis kemerdekaan'),
(43, 'Rekawati', 'Wanita', '18', 'Abd.Sirua'),
(44, 'dian', 'Wanita', '18', 'Perintis kemerdekaan'),
(45, 'wardani', 'Wanita', '21', 'Pelita Raya'),
(46, 'Hasmiaa', 'Wanita', '22', 'Pelita Raya'),
(47, 'aldisyaputra', 'Laki-laki', '30', 'Jeneponto'),
(48, 'aldisyaputra', 'Laki-laki', '30', 'Jeneponto');

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
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
