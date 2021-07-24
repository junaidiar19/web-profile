-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 03:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  `pembina` varchar(254) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `name`, `image`, `pembina`, `hari`, `jam`) VALUES
(1, 'Volly', 'assets/images/ekstra/volley1.png', 'Suryadi S.Si', 'Senin', '14.00 - 16.00'),
(2, 'Basket', 'assets/images/ekstra/basket1.png', 'Syafrudin, S.Pd.', 'Selasa', '14.00 - 16.00'),
(3, 'Palang Merah Remaja (PMR)', 'assets/images/ekstra/pmr1.png', 'Ningsih Astuti, S.Pd', 'Rabu', '14.00 - 16.00'),
(4, 'Futsal ', 'assets/images/ekstra/futsal21.png', 'Bahrian Noor, S.Pd', 'Kamis', '14.00 - 16.00'),
(5, 'Karate', 'assets/images/ekstra/karate1.png', 'Agung Satyo, S.Pd.', 'Jumat', '15.00 - 17.00'),
(6, 'Pramuka', 'assets/images/ekstra/pramuka1.png', 'Zafina Safitri, S.Pd.', 'Sabtu', '15.00 - 17.00');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `image` varchar(154) NOT NULL,
  `jmh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `name`, `image`, `jmh`) VALUES
(2, 'Ruang Kelas', 'assets/images/fasilitas/kelas.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image` varchar(254) NOT NULL,
  `caption` varchar(254) NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`, `caption`, `id_komentar`) VALUES
(1, 'assets/images/galeri/perpisahan2.jpg', 'Perpisahan 2021', 0),
(2, 'assets/images/galeri/Capture.PNG', 'SMPN 24 Banjarmasin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `wali` varchar(200) NOT NULL,
  `kelas` varchar(254) NOT NULL,
  `semester` int(11) NOT NULL,
  `tahun_ajaran` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `wali`, `kelas`, `semester`, `tahun_ajaran`, `image`) VALUES
(1, 'Rara, S.Pd.', 'VII A', 1, '2021/2022', 'assets/images/jadwal/7a.PNG'),
(2, 'Dika S.Pd', 'VII B', 1, '2021/2022', 'assets/images/jadwal/7b.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(254) NOT NULL,
  `gambar` varchar(254) NOT NULL,
  `isi` text NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `gambar`, `isi`, `id_komentar`, `status`) VALUES
(1, 'Peringatan Sumpah Pemuda', 'assets/images/kegiatan/upacra.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat.', 0, 'Lama'),
(2, 'PPDB Jalur Prestasi pada SMPN 24 Banjarmasin', 'assets/images/kegiatan/ppdb1.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat.', 0, 'Lama'),
(3, 'Ujian Daring TA. 2020/2021', 'assets/images/kegiatan/ujian_daring.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.\r\nVivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.\r\nIn porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\nFusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.\r\nDonec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue.', 0, 'Lama'),
(4, 'Vaksinisasi Tenaga Pengajar dan Staff SMPN 24 Banjarmasin', 'assets/images/kegiatan/vaksinasi.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.\r\nVivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.\r\nIn porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\nFusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.\r\nDonec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue.', 0, 'Baru'),
(5, 'MPLS Siswa Baru SMPN 24 Banjarmasin TA. 2021/2022', 'assets/images/kegiatan/mpls.JPG', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.\r\nVivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.\r\nIn porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\nFusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.\r\nDonec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue.', 0, 'Baru'),
(6, 'Perpisahan dan Pembagian Kelas IX SKHUS SMPN 24', 'assets/images/kegiatan/perpisahan2.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.\r\nVivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.\r\nIn porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\nFusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.\r\nDonec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue.', 0, 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_user` varchar(254) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `isi_komen` text NOT NULL,
  `status_komen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_user`, `id_kegiatan`, `id_galeri`, `isi_komen`, `status_komen`) VALUES
(3, 'abdul@gmail.com', 1, 0, 'Mantap', 'Hide'),
(4, 'abdul@gmail.com', 0, 1, 'Mantap', 'Hide'),
(5, 'abdul@gmail.com', 0, 2, 'Mantap', 'Hide');

-- --------------------------------------------------------

--
-- Table structure for table `kriitik`
--

CREATE TABLE `kriitik` (
  `id` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriitik`
--

INSERT INTO `kriitik` (`id`, `id_user`, `kritik`, `saran`) VALUES
(1, 'Siti Zulaika', 'Tampilan masih belum terlalu lengkap', 'Diharapkan pihak sekolah dapat lebih aktif lagi untuk memaintance website SMPN 24 Banjarmasin'),
(2, 'Iyas', '', 'Mantap...');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(254) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(254) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(10) NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `name`, `image`, `pendidikan`, `jabatan`, `tempat_lahir`, `tgl_lahir`, `j_kelamin`, `telp`, `email`, `status`) VALUES
(2, 19620419, 'Hj.  Susilo Rahayu, S.Pd, S.E.', 'assets/images/pegawai/DSC_0041.JPG', 'S1', 'Kepala Sekolah', 'Pasuruan', '0000-00-00', 'Perempuan', 2147483647, 'susilorahayu19@gmail.com', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `name_lomba` varchar(254) NOT NULL,
  `name_peserta` varchar(254) NOT NULL,
  `prestasi` varchar(254) NOT NULL,
  `tingkat` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `name_lomba`, `name_peserta`, `prestasi`, `tingkat`, `image`) VALUES
(1, 'Olimpiade Sains Nasional Tahun 2021', 'Siti Zulaika', 'Juara III', 'Nasional', 'assets/images/prestasi/osn.jpeg'),
(2, 'Olimpiade Matematika Tahun 2021', 'Ahmad', 'Juara II', 'Provinsi', 'assets/images/prestasi/juara_mtk.jpg'),
(3, 'Olimpiade Pidato Tentang Lingkungan Hidup', 'Beny', 'Juara III', 'Antar SMP', 'assets/images/prestasi/juara_pidato.jpg'),
(4, 'Olimpiade IPS Tahun 2021', 'Nana', 'Juara 1', 'Kota', 'assets/images/prestasi/olim_ips.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(254) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `email`, `username`, `password`, `image`, `level`) VALUES
(1, 'Ika', 6112001, 'ika@gmail.com', 'admin', 'admin', 'assets/images/WhatsApp_Image_2021-07-01_at_00_55_29.jpeg', 1),
(2, 'Irfan Arisandi', 0, 'Teknik Informatika', 'irfan', '$2y$12$6Esi83o3EiU/mj3VWFJKEe0eeROkF8N73bjyppTkFhLZPlTGA76aG', '', 2),
(3, 'Ali', 7112000, 'ali@gmail.com', 'admin2', '$2a$08$fz3rCgzgOsDx4TxnYd5XGupJngp5XdYbi5QSwf0vCFePplmGqFYtS', 'assets/images/WhatsApp_Image_2021-07-01_at_00_55_11.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriitik`
--
ALTER TABLE `kriitik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriitik`
--
ALTER TABLE `kriitik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
