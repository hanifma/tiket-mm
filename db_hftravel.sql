-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2019 pada 16.55
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukkku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('l','p','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `gender`) VALUES
(229, 'sdfd', 'sdf', '324324', 'asdf', 'l'),
(256, 'sdfgh', 'asdf', '2345', 'a@gmail.com', 'l'),
(258, 'siti kasirotan', 'kokdoksofk', '-032-103', 'wadkoawkdo@dwada.com', 'l'),
(266, 'sjdkhajkhd', 'shadhkahsdka', '8089809809', 'dasfdja@sgajdcom', 'l'),
(277, 'sdfgh', 'a', '345', 'a@', 'l'),
(278, 'Lihul', 'Lihul', '085', 'lihul', 'l'),
(279, 'Luhil', 'Luhil', '097', 'luhil', 'p'),
(280, 'hf', 'hf', '09', 'hf', 'p'),
(281, 'fh', 'fh', '464', 'fh', 'l'),
(282, '', '', '', '', 'l'),
(283, '', '', '', '', 'l'),
(284, '', '', '', '', 'l'),
(285, '', '', '', '', 'l'),
(286, '', '', '', '', 'l'),
(287, '', '', '', '', 'l'),
(288, '', '', '', '', 'l'),
(289, '', '', '', '', 'l'),
(290, '', '', '', '', 'l'),
(291, '', '', '', '', 'l'),
(292, '', '', '', '', 'l'),
(293, '', '', '', '', 'l'),
(294, '', '', '', '', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `reservation_id` int(10) DEFAULT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(95, 229, NULL, 1),
(96, NULL, 99, 10),
(97, NULL, 102, 9),
(98, NULL, NULL, 0),
(99, NULL, NULL, 5),
(100, NULL, NULL, 4),
(101, NULL, NULL, 3),
(102, NULL, NULL, 2),
(103, NULL, NULL, 3),
(104, NULL, NULL, 1),
(105, NULL, NULL, 6),
(106, NULL, NULL, 7),
(107, NULL, NULL, 8),
(108, NULL, NULL, 11),
(109, NULL, NULL, 12),
(110, NULL, NULL, 13),
(111, NULL, NULL, 14),
(112, NULL, NULL, 12),
(113, NULL, NULL, 13),
(114, NULL, NULL, 14),
(115, NULL, NULL, 3),
(116, NULL, NULL, 11),
(117, 256, NULL, 3),
(118, NULL, NULL, 11),
(119, 258, NULL, 12),
(120, NULL, NULL, 14),
(121, NULL, NULL, 15),
(122, NULL, NULL, 2),
(123, NULL, NULL, 4),
(124, NULL, NULL, 1),
(125, NULL, NULL, 2),
(126, NULL, NULL, 3),
(127, 266, NULL, 4),
(128, NULL, NULL, 8),
(129, NULL, NULL, 5),
(130, NULL, NULL, 11),
(131, NULL, NULL, 6),
(132, NULL, NULL, 7),
(133, NULL, NULL, 12),
(134, NULL, NULL, 0),
(135, NULL, NULL, 0),
(136, NULL, NULL, 13),
(137, NULL, NULL, 14),
(138, 277, NULL, 13),
(139, NULL, NULL, 0),
(140, NULL, NULL, 1),
(141, NULL, NULL, 7),
(142, NULL, 133, 1),
(143, NULL, 133, 2),
(144, NULL, 133, 3),
(145, NULL, 133, 4),
(146, NULL, 134, 2),
(147, 278, NULL, 0),
(148, 279, NULL, 1),
(149, 280, NULL, 60),
(150, 281, NULL, 1),
(151, 282, NULL, 6),
(152, 283, NULL, 12),
(153, 284, NULL, 55),
(154, 285, NULL, 0),
(155, 286, NULL, 0),
(156, 287, NULL, 0),
(157, 288, NULL, 0),
(158, 289, NULL, 0),
(159, 290, NULL, 0),
(160, 291, NULL, 4),
(161, 292, NULL, 22),
(162, 293, NULL, 0),
(163, 294, 146, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(8) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `rute_id` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(99, 'JO19825', '2018-02-25 12:53:20', NULL, NULL, 0, '2b3d9f5f8a5bae9802defb33a450db2257cfe58df6234ee44087debfc1fc1d60.jpg'),
(102, 'JO42885', '2018-02-25 19:26:07', NULL, NULL, 0, NULL),
(133, 'AH24827', '2019-04-16 04:44:00', NULL, NULL, 1, '2b511a37ad1224d83b6cf4e68979ded31ff26e290270ccd7dff418686be48da9.jpg'),
(134, 'AH45695', '2019-04-16 05:07:28', NULL, NULL, 1, '9203e78a10e7258c5fc4739cdb3fec16a7a706a5d41c2239cb9b58594ecc0bf5.jpg'),
(146, 'H9656F', '2019-04-17 10:11:22', 45, 13, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `class` enum('First','Economy') NOT NULL,
  `transportation_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(11, '2019-04-21 05:00:00', '2019-04-21 11:20:00', 'Cilacap', 'Jakarta', 399999, 'Economy', 3),
(12, '2019-04-20 23:30:00', '2019-04-21 06:00:00', 'Jakarta', 'Cilacap', 399999, 'Economy', 3),
(13, '2019-04-21 02:00:00', '2019-04-21 05:00:00', 'Cilacap', 'Jakarta', 1200000, 'First', 3),
(14, '2019-04-21 08:00:00', '2019-04-21 11:30:00', 'Jakarta', 'Cilacap', 1200000, 'First', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`) VALUES
(3, 'Airbus A330', 'Pesawat Lokal', '60'),
(6, 'Boeing 771', 'Pesawat Nasional', '80'),
(7, 'HF PLANE 551', 'Pesawat Internasional', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(45, 'aa', '$2y$10$KqYSkM1SHeVNMv2SgAoPA.hguoHrwuw95qu5LC8NYapjBnYTK2r3W', 2),
(46, 'bb', '$2y$10$7ZA5dB1.31u4tPtO5C3qZOSFXj1ZOadsK/cN4a5hpFQBJbSJyyx8.', 1),
(47, 'Lihul', '$2y$10$a6C2DPMwyrI9PcV9qY66.O/wXvos3bI8JVEg2qe2nQS0TYXMJBGfK', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `passengers_ibfk_2` (`reservation_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
