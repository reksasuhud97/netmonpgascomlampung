-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2018 pada 07.03
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id_blok` int(50) NOT NULL,
  `name_blok` varchar(255) NOT NULL,
  `telp_blok` varchar(100) NOT NULL,
  `add_blok` longtext NOT NULL,
  `sum_client` int(100) NOT NULL,
  `pusat_client` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id_blok`, `name_blok`, `telp_blok`, `add_blok`, `sum_client`, `pusat_client`) VALUES
(12, 'Universitas Lampung', '(072) 178-6766', 'Jalan Professor Dokter Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Rajabasa, Gedong Meneng, Rajabasa, Kota Bandar Lampung, Lampung 35141', 0, '0'),
(13, 'PGAS Regional Lampung', '(000) 000-0000', 'Jl. Dr. Sam Ratulangi No.15, Penengahan, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35126', 0, '1'),
(14, 'LPMP Lampung', '(849) 845-48__', 'dkhjfddkjfn', 0, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id_client` int(50) NOT NULL,
  `id_blok` int(50) NOT NULL,
  `ip_client` varchar(50) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `status_client` enum('Connected','Disconnected','Destination net unreachable','Destination host unreachable','Request timed out') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id_client`, `id_blok`, `ip_client`, `name_client`, `status_client`) VALUES
(27, 13, '103.213.119.12', 'Web Server gasnet.id', 'Connected'),
(29, 13, '0.0.0.0', 'IP Terlarang', 'Disconnected'),
(30, 13, '103.10.223.15', 'Web Server www.pgascom.co.id', 'Connected'),
(33, 12, '103.3.46.5', 'Server Web unila.ac.id', 'Connected'),
(34, 12, '103.3.46.23', 'Server vclass.unila.ac.id', 'Connected'),
(35, 13, '192.168.100.30', 'Router Jadi Jadian', 'Disconnected'),
(36, 13, '192.168.100.1', 'Router Indie Home Rumah', 'Disconnected'),
(37, 12, '103.3.46.6', 'Webserver tik.unila.ac.id', 'Connected'),
(38, 13, '192.168.0.1', 'Router Wireless', 'Connected'),
(39, 13, '192.168.1.1', 'Router PGAS', 'Connected'),
(40, 14, '202.179.185.156', 'LPMP Lampung', 'Disconnected');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(10) NOT NULL,
  `id_client` varchar(100) NOT NULL,
  `date_log` varchar(25) NOT NULL,
  `hour_log` varchar(25) NOT NULL,
  `status_log` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `id_client`, `date_log`, `hour_log`, `status_log`) VALUES
(152, '29', '15 Jan 2018', '14', 0),
(153, '35', '15 Jan 2018', '14', 0),
(154, '36', '15 Jan 2018', '14', 0),
(155, '30', '15 Jan 2018', '09', 0),
(156, '27', '15 Jan 2018', '09', 0),
(157, '37', '15 Jan 2018', '09', 0),
(158, '34', '15 Jan 2018', '09', 0),
(159, '33', '15 Jan 2018', '09', 0),
(160, '29', '16 Jan 2018', '09', 0),
(161, '35', '16 Jan 2018', '09', 0),
(162, '36', '16 Jan 2018', '09', 0),
(163, '29', '19 Jan 2018', '08', 0),
(164, '35', '19 Jan 2018', '08', 0),
(165, '36', '19 Jan 2018', '08', 0),
(166, '27', '19 Jan 2018', '08', 0),
(167, '29', '21 Jan 2018', '15', 0),
(168, '35', '21 Jan 2018', '15', 0),
(169, '36', '21 Jan 2018', '15', 0),
(170, '29', '22 Jan 2018', '18', 0),
(171, '35', '22 Jan 2018', '18', 0),
(172, '27', '22 Jan 2018', '18', 0),
(173, '30', '22 Jan 2018', '18', 0),
(174, '36', '22 Jan 2018', '18', 0),
(175, '39', '22 Jan 2018', '19', 0),
(176, '40', '22 Jan 2018', '10', 0),
(177, '38', '22 Jan 2018', '19', 0),
(178, '29', '23 Jan 2018', '07', 0),
(179, '35', '23 Jan 2018', '07', 0),
(180, '38', '23 Jan 2018', '07', 0),
(181, '39', '23 Jan 2018', '07', 0),
(182, '36', '23 Jan 2018', '08', 0),
(183, '30', '23 Jan 2018', '08', 0),
(184, '27', '23 Jan 2018', '08', 0),
(185, '29', '24 Jan 2018', '10', 0),
(186, '35', '24 Jan 2018', '10', 0),
(187, '36', '24 Jan 2018', '10', 0),
(188, '38', '24 Jan 2018', '07', 0),
(189, '39', '24 Jan 2018', '07', 0),
(190, '27', '24 Jan 2018', '09', 0),
(191, '30', '24 Jan 2018', '09', 0),
(192, '29', '25 Jan 2018', '10', 0),
(193, '35', '25 Jan 2018', '10', 0),
(194, '36', '25 Jan 2018', '10', 0),
(196, '40', '25 Jan 2018', '08', 0),
(197, '27', '25 Jan 2018', '09', 0),
(198, '30', '25 Jan 2018', '09', 0),
(199, '34', '25 Jan 2018', '10', 0),
(200, '29', '26 Jan 2018', '08', 0),
(201, '35', '26 Jan 2018', '08', 0),
(202, '36', '26 Jan 2018', '08', 0),
(203, '29', '29 Jan 2018', '07', 0),
(204, '35', '29 Jan 2018', '07', 0),
(205, '36', '29 Jan 2018', '07', 0),
(206, '39', '29 Jan 2018', '07', 0),
(207, '38', '29 Jan 2018', '07', 0),
(208, '27', '29 Jan 2018', '07', 0),
(209, '30', '29 Jan 2018', '07', 0),
(210, '33', '29 Jan 2018', '07', 0),
(211, '34', '29 Jan 2018', '07', 0),
(212, '37', '29 Jan 2018', '07', 0),
(213, '40', '29 Jan 2018', '07', 0),
(214, '29', '30 Jan 2018', '08', 0),
(215, '35', '30 Jan 2018', '08', 0),
(216, '36', '30 Jan 2018', '08', 0),
(217, '38', '30 Jan 2018', '08', 0),
(218, '39', '30 Jan 2018', '08', 0),
(219, '40', '30 Jan 2018', '08', 0),
(220, '33', '30 Jan 2018', '08', 0),
(221, '34', '30 Jan 2018', '08', 0),
(222, '37', '30 Jan 2018', '08', 0),
(223, '29', '01 Feb 2018', '08', 0),
(224, '35', '01 Feb 2018', '08', 0),
(225, '36', '01 Feb 2018', '08', 0),
(226, '38', '01 Feb 2018', '08', 0),
(227, '39', '01 Feb 2018', '08', 0),
(228, '40', '01 Feb 2018', '08', 0),
(229, '27', '01 Feb 2018', '09', 0),
(230, '29', '02 Feb 2018', '09', 0),
(231, '35', '02 Feb 2018', '09', 0),
(232, '36', '02 Feb 2018', '09', 0),
(233, '40', '02 Feb 2018', '09', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `pwd_user`, `name_user`) VALUES
(1, 'monitoring@pgascom.co.id', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin Monitoring'),
(2, 'thaha@pgascom.co.id', '94c77268fdc721a2fa288671c3ab374e123ec1fa', 'M. Thaha Yanuar Ayub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`,`ip_client`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blok`
--
ALTER TABLE `blok`
  MODIFY `id_blok` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
