-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2019 pada 08.24
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
(236, 's', 's', '234', 'dfs', 'l'),
(237, 'akdan', 'dakul', '081', 'a@gmail.com', 'l'),
(239, 'akdan', 'aaa123', '123a', 'akhdan1303@gmail.com', 'l'),
(240, 'Ganteng', 'Kedungbanteng', '1234567', 'a@gmail.com', 'l'),
(241, 'akdan', 'asdfghj', '1234', 'a@', 'l'),
(253, 'Ganteng', '', '', '', 'l'),
(256, 'sdfgh', 'asdf', '2345', 'a@gmail.com', 'l'),
(257, 'sdf', 'dfg', '1234', 'fgh', 'l'),
(258, 'siti kasirotan', 'kokdoksofk', '-032-103', 'wadkoawkdo@dwada.com', 'l'),
(259, 'dawdwaawd', 'wadawd', '210302139', 'dawkjawid@gmail.com', 'l'),
(260, 'dwaokdawo', 'kdwaowadk', '1032902193', 'akhdan1303@gmail.com', 'l'),
(266, 'sjdkhajkhd', 'shadhkahsdka', '8089809809', 'dasfdja@sgajdcom', 'l'),
(271, 'asdfg', 'asdfg', '12345', 'asdfg', 'p'),
(272, 'sd', 'asdfghj', '1234567', 'asdfgh', 'l'),
(274, '', '', '', '', 'l'),
(275, 'Akhdan Pangestuaji', 'Dawuhan', '1234', 'a@gmail.com', 'l'),
(276, 'asdf', 'fghj', '123', 'asdfg', 'l'),
(277, 'sdfgh', 'a', '345', 'a@', 'l'),
(278, '', '', '', '', 'l'),
(279, '', '', '', '', 'l'),
(280, '', '', '', '', 'l');

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
(98, 237, NULL, 0),
(99, NULL, NULL, 5),
(100, 239, NULL, 4),
(101, 240, NULL, 3),
(102, 241, NULL, 2),
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
(114, 253, NULL, 14),
(115, NULL, NULL, 3),
(116, NULL, NULL, 11),
(117, 256, NULL, 3),
(118, 257, NULL, 11),
(119, 258, NULL, 12),
(120, 259, NULL, 14),
(121, 260, NULL, 15),
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
(132, 271, NULL, 7),
(133, 272, NULL, 12),
(134, NULL, NULL, 0),
(135, 274, NULL, 0),
(136, 275, NULL, 13),
(137, 276, NULL, 14),
(138, 277, NULL, 13),
(139, 278, NULL, 0),
(140, 279, NULL, 1),
(141, 280, NULL, 7);

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
(99, 'JO19825', '2018-02-25 12:53:20', NULL, 8, 0, '2b3d9f5f8a5bae9802defb33a450db2257cfe58df6234ee44087debfc1fc1d60.jpg'),
(102, 'JO42885', '2018-02-25 19:26:07', NULL, 8, 0, NULL);

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
(8, '2019-04-15 16:43:40', '2019-04-24 21:27:00', 'Semarang', 'Solo', 1000000, 'First', 3),
(10, '2019-04-15 06:08:14', '2019-04-26 12:05:53', 'Surabaya', 'Jakarta', 1500000, 'First', 3);

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
(3, 'APWPlan', 'Plan', '15'),
(6, 'Boeing-APW', 'YOI', '25');

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
(26, 'apuss', '$2y$10$5s4Si4nfvV9bXKhm4onbZe6jzhjfHgFpeKEXdVgU7wAtx8k29x6w.', 2),
(28, 'akhdanpangestuaji', '$2y$10$MymrJpxmDYNhB/MX4hsVqedQ2ltLX56HY9AovM.LCZmIH43K74x5i', 1),
(32, 'yayaya', '$2y$10$nzZJO.28q5WS8ATWWQMd/.jjl9qrWNs2zDsJMnGPqv6nOVOCE4tie', 2),
(33, 'ayayaya', '202cb962ac59075b964b07152d234b70', 2),
(34, 'jadi', '$2y$10$HXm4wdmcfGMQbRjx/RjS6esuguTcuocwhh8g6ZA8qX0Yma1ya.aHS', 2),
(35, 'qwerty', '$2y$10$E51NoGxcUP.fDppmYCFeU.21l..LWJOmGMlW0c/L3XOryunvhmoL6', 1),
(36, '3103116226', '$2y$10$nDyO9DbI5CLZ5iTn6yiWA.YGJxPbMshxJdQTZLVpoz6J7Rlomrfp.', 1),
(42, 'haah', '$2y$10$GplPH9w41.BP1aGP9XQTouyEYTlmBdRDo6TOehmKXM9ScQ5nrQoLC', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
