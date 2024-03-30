-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1111
-- Generation Time: Oct 16, 2023 at 03:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `croma`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `productname` text NOT NULL,
  `old_price` bigint(20) NOT NULL,
  `new_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `productname`, `old_price`, `new_price`) VALUES
(33, 'I Phone 14 Pro Max.jpg', 'I Phone 14 Pro Max', 10000, 200000),
(39, 'Logitech Keyboard.jpg', 'Logitech Keyboard', 500, 900000),
(40, 'LG LED Smart tv 32 Inch HD.jpg', 'LG Smart Television ', 5000, 19000);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_address` varchar(30) NOT NULL,
  `u_contact` int(10) NOT NULL,
  `u_pwd` varchar(30) NOT NULL,
  `u_rptpwd` varchar(30) NOT NULL,
  `u_gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`u_id`, `u_fname`, `u_email`, `u_address`, `u_contact`, `u_pwd`, `u_rptpwd`, `u_gender`) VALUES
(100, 'Anant', 'patelbrij5698@gmail.com', 'sd', 2147483647, 'sdsdsd', 'sdsdsd', 'male'),
(101, 'Pritesh', 'priteshsir@gmail.com', 'surat', 2147483647, 'giitgiit', 'giitgiit', 'male'),
(102, 'kenil', 'kenil022@gmail.com', 'surat', 2147483647, 'kenil022', 'kenil022', 'male'),
(103, 'Anant', 'anantsoni6317204@gmail.com', 'dsjfslkknekjndknajndfkjsdn', 10, '858585', '858585', 'male'),
(104, 'ashutosh', 'ashutoshthummar2209@gmail.com', 'jakatnaka, surat', 2147483647, '505050', '505050', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
