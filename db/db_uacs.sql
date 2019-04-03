-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 05:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uacs`
--
CREATE DATABASE IF NOT EXISTS `db_uacs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_uacs`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` longtext NOT NULL,
  `berita` longtext NOT NULL,
  `date_posted` date NOT NULL,
  `date_updated` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `gmaps` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `youtube` longtext NOT NULL,
  `twitter` longtext NOT NULL,
  `line` longtext NOT NULL,
  `bbm` longtext NOT NULL,
  `id_contact` int(11) NOT NULL,
  `email` longtext NOT NULL,
  `id_user` int(11) NOT NULL,
  `whatsApp` longtext NOT NULL,
  `alamat` longtext NOT NULL,
  `homebase` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`gmaps`, `facebook`, `instagram`, `youtube`, `twitter`, `line`, `bbm`, `id_contact`, `email`, `id_user`, `whatsApp`, `alamat`, `homebase`) VALUES
('https://www.google.co.id/maps/place/Kedai+27+Sumatera/@-7.2716211,112.7451102,17z/data=!4m12!1m6!3m5!1s0x2dd7fb6df175f8b7:0xeb9db39951f24010!2sKedai+27+Sumatera!8m2!3d-7.2716211!4d112.7472989!3m4!1s0x2dd7fb6df175f8b7:0xeb9db39951f24010!8m2!3d-7.2716211!4d112.7472989', 'https://www.facebook.com/unitedarmysby/', 'https://www.instagram.com/unitedarmy_sby/', 'https://www.youtube.com/channel/UCRnX4NnrKFDZb10E_55nDDw', 'https://twitter.com/unitedarmy_SBY', 'https://line.me/R/ti/p/%40unitedarmysby', ' http://www.pin.bbm.com/D7008531', 0, 'unitedarmysby@gmail.com', 2, 'https://api.whatsapp.com/send?phone=6287718991878', 'Jl. Sumatera no. 77 Surabaya', 'Kedai 27 Sumatera');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_gambar` varchar(255) DEFAULT NULL,
  `caption_gambar` longtext,
  `link_gambar` longtext,
  `gambar_created` date DEFAULT NULL,
  `gambar_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_profil` varchar(25) DEFAULT NULL,
  `isi_profil` longtext,
  `tglinput_profil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `leveluser` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `user_created` date NOT NULL,
  `user_updated` date NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `leveluser`, `username`, `nama_user`, `password_user`, `user_created`, `user_updated`, `last_login`) VALUES
(1, 'Super Admin', 'admin', 'Admin', '0192023a7bbd73250516f069df18b500', '2018-07-29', '0000-00-00', '0000-00-00'),
(2, 'Super Admin', 'arnoldarmando07', 'Arnold Armando Suwuh', '7ec5f9b11d665b0adbb0e3a3e0cfba9d', '2018-07-29', '0000-00-00', '2018-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_video` longtext,
  `link_video` longtext,
  `caption_video` longtext,
  `video_created` date DEFAULT NULL,
  `video_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_leveluser` (`leveluser`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
