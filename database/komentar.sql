-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 11:13 AM
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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `balas` text DEFAULT NULL,
  `jenis` varchar(40) DEFAULT NULL,
  `foreign_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `isi`, `status`, `user_id`, `balas`, `jenis`, `foreign_id`, `created_at`, `updated_at`) VALUES
(3, 'andika@gmail.com', 'bagus banget', 1, 3, 'Terima Kasih', 'berita', 6, '2021-07-25 08:22:44', '2021-07-25 08:22:44'),
(6, 'andi@gmail.com', 'bagus banget', NULL, NULL, NULL, 'galeri', 1, '2021-07-25 09:04:16', '2021-07-25 09:04:16'),
(7, 'andika@gmail.com', 'bagus', 1, 3, 'terima kasih', 'berita', 5, '2021-07-25 09:05:19', '2021-07-25 09:05:19'),
(8, 'andika@gmail.com', 'keren', 1, 3, 'terimakasih', 'galeri', 2, '2021-07-25 09:06:12', '2021-07-25 09:06:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
