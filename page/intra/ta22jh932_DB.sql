-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20.05.2022 klo 18:09
-- Palvelimen versio: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta22jh932_DB`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `liikuntamatkat`
--

CREATE TABLE `liikuntamatkat` (
  `id` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `liikuntamatkat`
--

INSERT INTO `liikuntamatkat` (`id`, `latitude`, `longitude`, `heading`, `description`, `start_date`, `end_date`, `image`, `pdf`) VALUES
(5, 56, 6, 'TESTILiikuntamatka2', 'kuvaus', '20.3.2022', '27.3.2022', '', ''),
(6, 6, 92, 'Liikuntamatka3', 'Lorem ipsum dolor sit amet', '25.5.2022', '27.5.2022', '', ''),
(7, 18, 12, 'Liikuntamatka', '', '25.5.2022', '27.5.2022', '', ''),
(10, 2, 2, '2', 'sadfsdf', '2.2.2222', '2.2.2223', '', ''),
(12, 60, 24, 'IHANA', 'IHANA', '20.05.2022', '21.05.2022', 'pinni.jpg', '206_taitaja2022_FINAALITEHTAÌˆVAÌˆ_2022_05_13_PRINT_day1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liikuntamatkat`
--
ALTER TABLE `liikuntamatkat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liikuntamatkat`
--
ALTER TABLE `liikuntamatkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
