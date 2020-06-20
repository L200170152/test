-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 08:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma6ska`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `ukuran`, `tipe`, `keterangan`) VALUES
(2, '11356857_1630282747217048_49658884_n.jpg', 30154, 'image/jpeg', ''),
(3, '11356857_1630282747217048_49658884_n.jpg', 30154, 'image/jpeg', ''),
(7, 'hem.jpg', 126941, 'image/jpeg', 'ioo'),
(9, 'scan 2.PNG', 11887, 'image/png', 'hello'),
(10, 'scan 1.PNG', 39122, 'image/png', 'contoh'),
(11, 'corryy.jpg', 22967, 'image/jpeg', 'cor');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(2) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'corry luqma', 'corry', 'cor123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblagenda`
--

CREATE TABLE `tblagenda` (
  `id` int(11) NOT NULL,
  `judulAgenda` longtext CHARACTER SET latin1 DEFAULT NULL,
  `detailAgenda` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `PostImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblagenda`
--

INSERT INTO `tblagenda` (`id`, `judulAgenda`, `detailAgenda`, `PostingDate`, `UpdationDate`, `PostImage`) VALUES
(1, 'CLASS MEETING', 'Mulai jam 18.00 ya guys!!!!!!!!', '2020-04-28 07:32:46', NULL, 'db7e690e5d8ae65e5d8ff857f57e65b5.jpg'),
(2, 'CLASS MEETING', 'Mulai jam 18.00 ya guys!!!!!!!!', '2020-04-28 07:33:41', NULL, 'db7e690e5d8ae65e5d8ff857f57e65b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbukutamu`
--

CREATE TABLE `tblbukutamu` (
  `id` int(11) NOT NULL,
  `postId` char(11) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `comment` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbukutamu`
--

INSERT INTO `tblbukutamu` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`) VALUES
(1, '0', 'uuuuu', 'corryluqma@yahoo.co.id', 'bagus', '2020-05-04 13:46:15'),
(2, '0', 'ii', 'cluqma23@gmail.com', 'hihiih\r\n', '2020-05-04 13:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblguru`
--

CREATE TABLE `tblguru` (
  `id` int(10) NOT NULL,
  `nipguru` int(50) DEFAULT NULL,
  `namaguru` varchar(50) DEFAULT NULL,
  `alamatguru` varchar(100) DEFAULT NULL,
  `NUPTK` varchar(30) DEFAULT NULL,
  `mengampu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblguru`
--

INSERT INTO `tblguru` (`id`, `nipguru`, `namaguru`, `alamatguru`, `NUPTK`, `mengampu`) VALUES
(2, 19710713, 'Agung Wijayanto,S.Pd.,M.Pd', '-', '2045749650200003', 'Geografi'),
(3, 19620622, 'Drs. Kasim', '-', '0954740642200012', 'Bahasa dan Sastra As'),
(4, 19630402, 'Rosmaida Gultom, S.Th', '-', '5734741642300012', 'Pendidikan Agama Kri'),
(5, 19670515, 'Rudy Adiyanto, S.Pd', '-', '8552745647200043', 'Matematika'),
(6, 19610219, 'Drs. Kismanto, M.Pd', '-', '7551739640200002', 'Matematika'),
(7, 19620622, 'Drs. Supriyadi', '-', '1547740642200012', 'Matematika'),
(8, 19650729, 'Dra. Sri Handayani', '-', '8061743644300003', 'Bahasa Indonesia / S'),
(9, 19630226, 'Drs. Bambang Riyanto', '-', '5558741641200002', 'Biologi'),
(10, 19610405, 'Drs. Sri Hartono', '-', '737739641200012', 'Penjas Orkes'),
(11, 19660919, 'Tri Bagiyo, SPd. MM.', '-', '5251744647200003', 'Fisika'),
(12, 19661120, 'Dra. Diani Marhaenita', '-', '0452744646300013', 'Geografi'),
(13, 19680817, 'Mujiyati, SPd, M.Si', '-', '8149746648300023', 'Biologi'),
(14, 19620724, 'Drs. Ahmad Al Adib', '-', '2056740641200003', 'Bahasa Inggris / Sas'),
(15, 19620106, 'Drs. Sarwata, M.Pd', '-', '2438740642200012', 'Bahasa Inggris / Sas'),
(16, 19690606, 'Sinung Sri Mulyaningsih,SPd', '-', '3938747646300002', 'PKn'),
(17, 19630912, 'Dra. Umi Mahmudah', '-', '1244741639300003', 'Kimia'),
(18, 19691012, 'Sapti Anayogyani, S.Pd, M.Pd', '-', '1344747647300003', 'Bahasa Indonesia / S'),
(19, 19700207, 'Any Widayanti, S.Pd', '-', '6539748649300002', 'Bahasa dan Sastra As'),
(20, 19661024, 'Indratmoko Pribadi, S.Pd', '-', '8356744646200013', 'Sejarah / Sejarah In'),
(21, 19591109, 'Drs. Joko Waluyo', '-', '9441737639200003', 'Bahasa Jawa'),
(22, 19800405, 'Wirawan, S.Pd', '-', '1737758658200000', 'Bahasa Inggris / Sas'),
(23, 19830228, 'Cettra Shandilia L. A. S.Pd', '-', '9557761662300002', 'Sosiologi'),
(24, 19640809, 'Drs. Muhammad Rosyid Agus S', '-', '2240742643200043', 'Bahasa Inggris / Sas'),
(25, 19690406, 'Sunarjo, S.Pd', '-', '9738747649200002', 'PKn'),
(26, 19700831, 'Suwarni, S.Pd', '-', '7163748650300003', 'Sejarah / Sejarah In'),
(27, 19770604, 'Siti Malikah, S.Pd', '-', '0936755656300012', 'Matematika'),
(28, 19660718, 'Drs. Mustakim', '-', '5050744646200003', 'Ekonomi'),
(29, 19720206, 'Khusnul Hadi, S.Pd', '-', '9538750653200002', 'Bahasa Indonesia / S'),
(30, 19700906, 'FR. Anik Prihati Handayani', '-', '8238748651300003', 'Pendidikan Agama Kat'),
(31, 19801028, 'Oni Yusnani, S.Pd', '-', '1360758660300133', 'Bahasa Jawa'),
(32, 19640508, 'Hermanta, S.Pd, S.Kom', '-', '2840742645200002', 'BK / TIK'),
(33, 19820505, 'Iwan Hartanto, S.Kom', '-', '9837760662110102', 'BK / TIK'),
(34, 19680329, 'Rohmi Malikah NS, S.Pd', '-', '7561746648300052', 'Matematika'),
(35, 19840119, 'Nur Akhlis Afifah, S.Pd.I', '-', '6451762663300102', 'Pendidikan Agama Isl'),
(36, 19660824, 'Suryandari, S.Pd', '-', '9156744646300003', 'Sejarah / Sejarah In'),
(37, 19650811, 'Drs. Agus Setiyono', '-', '8153744648200003', 'Bahasa Indonesia / S'),
(38, 2147483647, 'Lina Maharani,S.P', '-', '4239752653300033', 'Biologi'),
(39, 2147483647, 'Lina Maharani,S.P', '-', '4239752653300033', 'Prakarya'),
(40, 19660421, 'Dra. Sri Lestari,M.Pd', '-', '7753744644300002', 'Kimia'),
(41, 2147483647, 'Arintan Sulistyo Dewi, S.Pd', '-', '6451759660300002', 'Bahasa Indonesia / S'),
(42, 19830905, 'Dwi Fista Setyo Putri, S.Pd.,M.Pd.', '-', '5237761662300063', 'Fisika'),
(43, 19640331, 'Dra. Rochana Dwiningsih', '-', '8663742643300002', 'Penjas Orkes'),
(44, 19741221, 'Etti Nur Haryani,S.Pd', '-', '7553752654300053', 'Ekonomi'),
(45, 19771021, 'Indraswariyanti Hernowo Siwi, S.Psi', '-', '8355755657300053', 'BK Kelas XII'),
(46, 19680422, 'Agus Saputro, S.Pd.', '-', '1245759658300003', 'IPS Sejarah'),
(47, 19701114, 'Luluk  Atin, S.Pd.,M. Si.', '-', '4446748651300043', 'Bahasa Inggris'),
(48, 19670303, 'Dra. Eny Wiji Lestari, M.Hum', '-', '1562744644300003', 'Geografi'),
(49, 19790220, 'Atik Astrini, S.Pd', '-', '0552757658130102', 'Bahasa Inggris'),
(50, 19720130, 'Atien Andriani, S.Pd', '-', '8462750651300022', 'Matematika'),
(51, 19640501, 'Hindarso, S.Pd, M.Pd', '-', '6833742643200002', 'Matematika'),
(52, 19850727, 'Yulia Puji Rahayu, S.Pd', '-', '0059763664300053', 'Matematika'),
(53, 0, 'Untari, S.Pd', '-', '-', 'Seni Budaya'),
(54, 0, 'Sri Maryanti, S.Ag.', '-', '-', 'Pendidikan Agama Isl'),
(55, 0, 'Danang Prawoto', '-', '-', 'Seni Budaya'),
(56, 0, 'Dian Ayu Natalia, S.Pd.', '-', '-', 'Antropologi'),
(57, 0, 'Ina Widati, S.Pd', '-', '-', 'Matematika'),
(58, 0, 'Edy Eko Sunarno, SE', '-', '-', 'Prakarya'),
(59, 0, 'Wahyu Suryo Widiyantoro, S.Pd.', '-', '-', 'BK'),
(60, 0, 'Nur Setiyoningsih, S.Pd.', '-', '-', 'BK'),
(61, 0, 'Dra. Endang Handayani, M.Pd.', '-', '-', 'Bahasa Inggris'),
(62, 0, 'Nida Kusuma K, S.Pd.', '-', '-', 'Penjaskes'),
(63, 19640312, 'Meinita Nur W, A.Md.', '-', '4644742644300082', 'Mandarin'),
(64, 0, 'Aries Marwanti, S.Pd', '-', '-', 'Bahasa Jerman'),
(65, 0, 'Drs. Sutarno', '-', '-', 'PKn'),
(66, 0, 'Drs. Iskak', '-', '-', 'PKn'),
(67, 0, 'Muh. Rizalul Fkri, S.Pd', '-', '-', 'Penjaskes'),
(68, 0, 'Desra Putri Devi, S.Pd', '-', '-', 'Sosiologi'),
(70, 2147483647, 'xxxiiii', '-', '675565652576722', 'gak ngajar ');

-- --------------------------------------------------------

--
-- Table structure for table `tblkaryawan`
--

CREATE TABLE `tblkaryawan` (
  `id` int(10) NOT NULL,
  `namakaryawan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkaryawan`
--

INSERT INTO `tblkaryawan` (`id`, `namakaryawan`, `jabatan`) VALUES
(3, 'Sri Siswanti', 'Kepala Staf TU SMA Negeri 6 Surakarta'),
(4, 'Mugi Rahayu', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(5, 'Kusuma Wijayanti, A.Md', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(6, 'Wiranto', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(7, 'Aris Margono, A.Md', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(8, 'Wahyuning', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(9, 'Sugeng', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(10, 'Sugiyarto', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(11, 'Suwarto', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(12, 'Erwan Nugroho', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(13, 'Sri Wiyono', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(14, 'Ari Setyowati, S.E', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(15, 'Riani Monalisa, S.S', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(16, 'Suratman', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(17, 'Kristiawan Adi P.,S.Pt', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(18, 'Ana Hariani Salim, S.Si', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(19, 'Riswawan', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(20, 'Komaru', 'Staf Karyawan SMA Negeri 6 Surakarta'),
(21, 'Sulis', 'Staf Karyawan SMA Negeri 6 Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `id` int(11) NOT NULL,
  `KategoriNama` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` varchar(5000) CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationPost` timestamp NULL DEFAULT NULL,
  `Is_Active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`id`, `KategoriNama`, `deskripsi`, `PostingDate`, `UpdationPost`, `Is_Active`) VALUES
(1, 'Khusus', 'bebas bro', '2020-05-03 16:15:34', NULL, 1),
(2, 'Berita', 'hay guys ajah', '2020-05-04 14:26:02', NULL, 0),
(3, 'Umum', 'Untuk semua warga SMAN 6', '2020-05-14 04:28:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `id` int(11) NOT NULL,
  `namaPage` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `judulPage` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `description` longtext CHARACTER SET latin1 DEFAULT NULL,
  `pagePosting` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationPage` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`id`, `namaPage`, `judulPage`, `description`, `pagePosting`, `updationPage`) VALUES
(1, 'contactus', 'Kontak Kami', 'hallo guys', '0000-00-00 00:00:00', '2020-05-06 04:08:28'),
(2, 'beasiswa', 'Informasi Beasiswa', 'Disini terdapat informasi beasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'sejarahsekolah', 'Sejarah Sekolah', 'SMA Negeri 6 Surakarta berdiri pada tahun 1976 dengan nama Sekolah Menengah Persiapan Pembangunan (SMPP) Nomor 40 Surakarta. Berdirinya SMPP dirintis oleh SMA Negeri 5 Surakata yang ada pada waktu itu Kepala Sekolahnya adalah Bapak Drs. R.M. SOEPENO, Kepala Sekolah definitif yang pertama kali adalah Bapak Drs. SOEKIDJO PERUBAHAN NAMA SEKOLAH Perubahan nama SMPP Negeri 40 Surakarta menjadi SMA Negeri 6 Surakarta ditetapkan pada tahun 1985.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'visimisi', 'Visi  & Misi', 'Adapun visi yang dimiliki oleh sekolah ini, yaitu Berprestasi dalam mutu, unggul dalam bahasa, santun dalam berbudaya.\r\n', '0000-00-00 00:00:00', '2020-05-06 05:02:43'),
(5, 'misi', 'visi & misi', '\r\n1. Meningkatkan sumber daya kreativitas guru dalam melaksanakan kegiatan belajar dan mengajar.\r\n\r\n2. Mendorong siswa lebih aktif dalam kegiatan intrakurikuler dan ekstrakurikuler.\r\n\r\n3. Menanamkan keunggulan sekolah secara khusus kepada semua warga sekolah dan masyarakat pada umumnya.\r\n\r\n4. Menanamkan budi pekerti yang luhur dan santun sesuai dengan budaya bangsa (terutama 3S : senyum, sapa dan santun).\r\n\r\n5. Mendorong dan membentuk setiap siswa untuk mengerti/menguasai bahasa Daerah, Nasional / internasional.', '0000-00-00 00:00:00', '2020-05-21 13:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE `tblpost` (
  `id` int(11) NOT NULL,
  `judulpost` longtext CHARACTER SET latin1 DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `detailpost` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationPost` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL,
  `urlpost` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `imagepost` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`id`, `judulpost`, `CategoryId`, `detailpost`, `PostingDate`, `UpdationPost`, `Is_Active`, `urlpost`, `imagepost`) VALUES
(4, 'Test', 1, 'UPDATE', '2020-05-14 12:34:03', NULL, 1, 'Test', 'e4e3981a1344b8f6471a481f4e58074c.jpg'),
(6, 'CLASS MEETING', 3, 'UNTUK UMUM', '2020-05-14 14:22:48', NULL, 1, 'CLASS-MEETING', '4d1eb25f44e8900a5fe56c816e5a461d.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblagenda`
--
ALTER TABLE `tblagenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbukutamu`
--
ALTER TABLE `tblbukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkaryawan`
--
ALTER TABLE `tblkaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblagenda`
--
ALTER TABLE `tblagenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbukutamu`
--
ALTER TABLE `tblbukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblguru`
--
ALTER TABLE `tblguru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tblkaryawan`
--
ALTER TABLE `tblkaryawan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
