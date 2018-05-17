-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 10:53 AM
-- Server version: 10.1.29-MariaDB
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
-- Database: `wixicode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(7) NOT NULL,
  `wixicode` varchar(255) NOT NULL,
  `sell_by` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `price` int(5) NOT NULL,
  `placedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `wixicode`, `sell_by`, `title`, `product`, `price`, `placedOn`) VALUES
(1, 'Wixi405776537', 'ravi', 'rv', '', 50, '2018-05-17 12:49:00'),
(2, 'Wixi632931344', 'ravi', 'rv', '2_product.jpg', 50, '2018-05-17 12:50:17'),
(3, 'Wixi1702996694', 'ravi', 'r', '3_product.png', 10, '2018-05-17 12:54:59'),
(4, 'Wixi984767772', 'ravi', 'r', '4_product.png', 10, '2018-05-17 12:57:27'),
(5, 'Wixi1126256810', 'ravi', 'rwerwer', '5_product.png', 65, '2018-05-17 13:54:37'),
(6, 'Wixi482119865', 'ravi', 'f', '6_product.ico', 96, '2018-05-17 13:56:46'),
(7, 'Wixi1679489116', 'ravi', 'dfsfd', '7_product.ico', 4, '2018-05-17 13:58:25'),
(8, 'Wixi49346655', 'ravi', 'trt', '8_product.jpg', 415, '2018-05-17 14:01:45'),
(9, 'Wixi1771916551', 'ravi', 'drg', '9_product.ico', 456, '2018-05-17 14:04:57'),
(10, 'Wixi1876687654', 'ravi', 'tyu', '10_product.png', 52, '2018-05-17 14:07:35'),
(11, 'Wixi70969955', 'ravi', 'ttttt', '11_product.ico', 100000000, '2018-05-17 14:08:47'),
(12, 'Wixi1628002815', 'ravi', 'Product', '12_product.png', 1, '2018-05-17 14:18:34'),
(13, 'Wixi1854286390', 'd', 'dfgdsafg', '13_product.ico', 5, '2018-05-17 14:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(7) NOT NULL,
  `wixicode` varchar(255) NOT NULL,
  `sell_by` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `price` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  `description` text NOT NULL,
  `product_status` int(2) NOT NULL,
  `txn_id` int(11) DEFAULT NULL,
  `PaymentMethod` varchar(50) DEFAULT NULL,
  `PayerStatus` varchar(50) DEFAULT NULL,
  `PayerMail` varchar(100) DEFAULT NULL,
  `Total` decimal(19,2) DEFAULT NULL,
  `SubTotal` decimal(19,2) DEFAULT NULL,
  `Tax` decimal(19,2) DEFAULT NULL,
  `Payment_state` varchar(50) DEFAULT NULL,
  `placedOn` datetime NOT NULL,
  `CreateTime` timestamp NULL DEFAULT NULL,
  `UpdateTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `wixicode`, `sell_by`, `title`, `product`, `price`, `status`, `description`, `product_status`, `txn_id`, `PaymentMethod`, `PayerStatus`, `PayerMail`, `Total`, `SubTotal`, `Tax`, `Payment_state`, `placedOn`, `CreateTime`, `UpdateTime`) VALUES
(1, '', 'd', '', '', 0, 0, '', 0, 29, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 01:28:38', '2018-05-17 01:28:38'),
(2, '', 'd', '', '', 0, 0, '', 0, 9, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 01:35:28', '2018-05-17 01:35:28'),
(3, '', 'd', '', '', 0, 0, '', 0, 66912478, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 01:39:07', '2018-05-17 01:39:07'),
(4, '', 'd', '', '', 0, 0, '', 0, 43, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 02:55:34', '2018-05-17 02:55:34'),
(5, '', 'd', '', '', 0, 0, '', 0, 0, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 02:57:19', '2018-05-17 02:57:19'),
(6, '', 'd', '', '', 0, 0, '', 0, 0, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 02:59:15', '2018-05-17 02:59:15'),
(7, '', 'd', '', '', 0, 0, '', 0, 4, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:02:44', '2018-05-17 03:02:44'),
(8, '', 'd', '', '', 0, 0, '', 0, 93019533, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:05:42', '2018-05-17 03:05:42'),
(9, '', 'd', '', '', 0, 0, '', 0, 3, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:08:08', '2018-05-17 03:08:08'),
(10, 'Wixi70969955', 'd', 'ttttt', '11_product.ico', 100000000, 0, '', 0, 2, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:09:20', '2018-05-17 03:09:20'),
(11, 'Wixi1628002815', 'd', 'Product', '12_product.png', 1, 0, '', 0, 8, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:19:07', '2018-05-17 03:19:07'),
(12, 'Wixi1854286390', 'd', 'dfgdsafg', '13_product.ico', 5, 0, '', 0, 9, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:20:56', '2018-05-17 03:20:56'),
(13, 'Wixi1195189413', 'd', 'dfggggggggg', '14_product.ico', 8, 0, '', 0, 0, 'paypal', 'VERIFIED', 'ravi.p@gmail.com', '1.00', '1.00', '0.00', 'completed', '0000-00-00 00:00:00', '2018-05-17 03:21:53', '2018-05-17 03:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'fgg', 0, 'd', 'd'),
(2, 'USer', 99999999, 'test@me.com', 'test@123');

-- --------------------------------------------------------

--
-- Table structure for table `wixicode`
--

CREATE TABLE `wixicode` (
  `id` bigint(15) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `product_image` text NOT NULL,
  `audio_file` text NOT NULL,
  `categories` varchar(255) NOT NULL,
  `sub_categories` varchar(255) NOT NULL,
  `discounted_price` text NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `product_status` int(2) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wixicode`
--

INSERT INTO `wixicode` (`id`, `cat_id`, `product_name`, `price`, `description`, `product_image`, `audio_file`, `categories`, `sub_categories`, `discounted_price`, `quantity`, `tag`, `product_status`, `seller_email`, `seller_id`) VALUES
(1, 2, ' WEEKLY PHONE CLEARING MENTORING SESSIONS', '10', '                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.                      ', '1_product.png', '1_audio.', '2', '', '10', 5, 'Private Session', 0, '', 0),
(2, 2, 'PEACE & CALM ALL AROUND YOU', '5', '                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.                                 ', '2_product.png', '2_audio.', '', '', '', 5, 'audio clearing', 0, '', 0),
(3, 2, 'Free HealthAnalysis', '10', '                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                      ', '3_product.png', '3_audio.', '', '', '10', 5, 'private sesion', 0, '', 0),
(6, 1, 'Product', '10', 'test', '6_product.png', '6_audio.mp3', '', '', '97', 2, 'Audio Clearing', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wixicode`
--
ALTER TABLE `wixicode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wixicode`
--
ALTER TABLE `wixicode`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
