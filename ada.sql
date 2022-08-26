-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 07:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Kepala'),
(3, 'Kelola'),
(4, 'Transaksi'),
(5, 'Kelola Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub_menu`
--

CREATE TABLE `admin_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'Administrator', 'fas fa-fw fa-folder'),
(2, 2, 'My Profile', 'Kepala', 'fas fa-fw fa-folder'),
(3, 1, 'Buku Tamu', 'Administrator/buku_tamu', 'fas fa-fw fa-folder'),
(4, 3, 'Kelola Anggota', 'Kelola/kelanggota', 'fas fa-fw fa-folder'),
(5, 3, 'Kelola Buku', 'Kelola', 'fas fa-fw fa-folder'),
(6, 4, 'Peminjaman Buku', 'Transaksi', 'fas fa-fw fa-folder'),
(7, 4, 'Pengembalian Buku', 'Transaksi/pengembalian', 'fas fa-fw fa-folder'),
(8, 5, 'Laporan Anggota', 'Kelola_Laporan/index', 'fas fa-fw fa-folder'),
(9, 5, 'Laporan Peminjaman', 'Kelola_Laporan/lapbuku', 'fas fa-fw fa-folder'),
(12, 4, 'History Peminjaman', 'Transaksi/history', 'fa fa-fw fa-folder'),
(13, 5, 'Kirim Lpaoran', 'Kelola_Laporan/kirim_laporan', 'fas fa-folder');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_btamu` varchar(10) NOT NULL,
  `tujuan` varchar(64) NOT NULL,
  `tanggal_dtg` date NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_btamu`, `tujuan`, `tanggal_dtg`, `id_anggota`, `nama`) VALUES
('9511101', 'pinjem buku', '2019-10-12', '4511103', 'ramde'),
('9511102', 'pinjem buku', '2019-10-12', '4511101', 'mamattttt'),
('9511103', 'baca buku', '2019-10-12', '4511103', 'ramde'),
('9511104', 'pinjem buku', '2019-10-12', '4511104', 'deden'),
('9511105', 'baca buku', '2019-10-12', '4511103', 'ramde'),
('9511106', 'baca buku', '2019-10-12', '4511104', 'deden'),
('9511107', 'pinjem buku', '2019-10-12', '4511104', 'deden'),
('9511108', 'baca buku', '2019-10-12', '4511103', 'ramde'),
('9511109', 'baca buku', '2019-10-12', '4511101', 'mamattttt'),
('9511110', 'pinjem buku', '2019-10-12', '4511101', 'mamattttt'),
('9511111', 'pinjem buku', '2019-10-12', '4511104', 'deden'),
('9511112', 'pinjem buku', '2019-10-12', '4511103', 'ramde'),
('9511113', 'pinjem buku', '2019-10-12', '4511103', 'ramde'),
('9511114', 'pinjem buku', '2019-10-17', '4511103', 'ramde'),
('9511115', 'pinjem buku', '2019-10-17', '4511103', 'ramde');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `tingkat_pendidikan` text NOT NULL,
  `kategori` text NOT NULL,
  `data_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama`, `alamat`, `no_hp`, `Jenis_kelamin`, `tingkat_pendidikan`, `kategori`, `data_created`) VALUES
('4511101', 'mamattttt', 'Cimahi', '23254232', 'L', 'SMA', 'Umum', '2010-01-01'),
('4511102', 'Raadhan', 'Cibeber', '23254232', 'L', 'SMA', 'Umum', '1970-01-01'),
('4511103', 'ramde', 'Cimahi', '23254232', 'L', 'SMA', 'Umum', '2019-09-25'),
('4511104', 'deden', 'Parongpong', '23254239', 'L', 'SMA', 'Umum', '2019-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` varchar(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `penerbit` varchar(128) NOT NULL,
  `penulis` varchar(64) NOT NULL,
  `tahun_cetak` varchar(50) NOT NULL,
  `stok` int(2) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `penerbit`, `penulis`, `tahun_cetak`, `stok`, `kategori`) VALUES
('4511104', 'bulan', 'gramdia', 'kamu', '1997', 93, 'Thriller'),
('4511105', 'matahari', 'bulan media', 'matahari pagi', '2019', 2, 'Umum'),
('4511106', 'bintang', 'bintang com', 'bintang malam', '2020', 1, 'Umum'),
('4511107', 'ada', 'disini', 'dia', '1898', 40, 'Parenting');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(11) NOT NULL,
  `nopinjam` int(11) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nopinjam`, `id_anggota`, `id`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `qty`, `tgl_pengembalian`) VALUES
('1511101', 2, '4511104', '4511104', '2019-10-04', '2019-10-11', 2, 1, '2019-10-04'),
('1511102', 4, '4511104', '4511104', '2019-10-04', '2019-10-11', 1, 1, '0000-00-00'),
('1511103', 6, '4511103', '4511104', '2019-10-04', '2019-10-11', 1, 1, '0000-00-00'),
('1511104', 7, '4511102', '4511106', '2019-10-05', '2019-10-12', 1, 1, '0000-00-00'),
('1511104', 8, '4511102', '4511104', '2019-10-05', '2019-10-12', 1, 1, '0000-00-00'),
('1511105', 9, '4511101', '4511104', '2019-10-05', '2019-10-12', 2, 1, '2019-10-05'),
('1511105', 10, '4511101', '4511106', '2019-10-05', '2019-10-12', 2, 1, '2019-10-05'),
('1511106', 11, '4511102', '4511104', '2019-10-05', '2019-10-12', 1, 1, '0000-00-00'),
('1511107', 13, '4511101', '4511104', '2019-10-17', '2019-10-24', 2, 1, '2019-10-17'),
('1511107', 14, '4511101', '4511106', '2019-10-17', '2019-10-24', 1, 1, '0000-00-00');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `kembali` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
UPDATE data_buku SET stok = stok + old.qty
WHERE id = old.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
UPDATE data_buku SET stok = stok - new.qty
WHERE id = new.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `data_created`) VALUES
(1, 'asade', 'adas@gdhw.com', 'default.jpg', '$2y$10$z4QxUT2vt9J0ImGGx7nF8.PzohqBb7w9FNSjVliYjid5xcZPUY.Mu', 1, 1566152823),
(2, 'Ramadhan', 'febryramadhan285@gmail.com', 'default.jpg', '$2y$10$iBL2EV6MTxNDYnbiGofI6O/YQSemmW127LdRXi02mfAWNa4EoKsRm', 2, 1566152872),
(3, 'hai', 'hai@gmail.com', 'default.jpg', '$2y$10$SACxZtMZb9BMEzTl3fCqFOuMtyN9IvD8wD.HPQYy5Ap.0P8nDH7XG', 1, 1569590064);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_btamu`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nopinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `nopinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD CONSTRAINT `buku_tamu_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`) ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id`) REFERENCES `data_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
