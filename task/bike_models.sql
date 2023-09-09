-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 02:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike_models`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2a$04$jfc6aMyfGS4In4k7xhBXEeO.AfwCnhIQvaw0mTvUlHas489ZmTyoG');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(100) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` bigint(100) NOT NULL,
  `qty` int(120) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `image`, `price`, `qty`, `status`) VALUES
(3, 'Suzuki RT-90', '', 12000, 1, 1),
(9, '', '', 0, 0, 0),
(10, '', '', 0, 0, 0),
(11, '', '', 0, 0, 1),
(12, 'Samsung', '', 677, 0, 0),
(13, 'Apple', '', 0, 1, 0),
(14, 'Guava', '', 9011111, 1, 1),
(15, 'Nokia Lumia', '', 677, 12, 1),
(16, 'Apple', '', 12000, 1, 0),
(20, 'Nokia lumia Strong', 'front.png', 677, 0, 1),
(26, 'Suzuki TR-900', 'qty.png', 12000, 5, 1),
(27, 'Nokia X23', 'image.png', 677, 1, 1),
(28, 'galaxy', 'form.png', 677, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands_1`
--

CREATE TABLE `brands_1` (
  `id` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands_1`
--

INSERT INTO `brands_1` (`id`, `fname`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'saayan Biswas', 'Dosra leg spin', 1, '2023-09-01 11:04:11', '2023-09-01 11:04:11'),
(3, 'saayan Biswas', 'Cloth', 1, '2023-09-01 11:04:46', '2023-09-01 11:04:46'),
(4, 'Harry', '0', 1, '2023-09-01 11:06:44', '2023-09-01 11:06:44'),
(5, 'Arihant', 'Infinix', 0, '2023-09-01 11:07:45', '2023-09-01 11:07:45'),
(6, 'Disney', 'Puma', 1, '2023-09-01 11:43:40', '2023-09-01 11:43:40'),
(7, 'Puma', 'Puma', 1, '2023-09-01 11:43:41', '2023-09-01 11:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `title`, `price`, `image`, `qty`, `total`) VALUES
(54, 'Rust Engineer', '0', '', 2, 0),
(55, 'SOLOANA developer', '1200', '', 1, 0),
(56, 'SOLOANA developer', '1200', '', 1, 0),
(57, 'Soloana', '0', '', 1, 0),
(58, 'Call Of Duty', '1200', '', 1, 0),
(59, '', '0', '', 1, 0),
(67, 'Apple', '290099', '', 2, 580198),
(68, 'Apple', '290099', 'errors.png', 1, 0),
(69, 'Apple', '290099', 'errors.png', 1, 0),
(70, 'Apple', '290099', 'apple.jpg', 2, 580198),
(71, 'Call of duty', '900', 'call_of_duty.jpg', 2, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` bigint(10) NOT NULL,
  `status` int(12) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`, `price`, `status`, `qty`) VALUES
(1, 'men cloth', 'ajax.png', 677, 1, 20),
(2, 'Womens Cloth', 'qty.png', 12, 1, 12),
(3, 'mobile', 'ajax.png', 900, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(100) NOT NULL,
  `country` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `amount`) VALUES
(1, 'India', 0),
(2, 'United Kingdom', 0),
(4, 'Auckland', 100),
(5, 'NEW Zealand', 190);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `type` enum('Percent','Fixed') DEFAULT NULL,
  `max_uses` int(11) NOT NULL,
  `discount_amount` double(10,2) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`name`, `code`, `id`, `type`, `max_uses`, `discount_amount`, `status`) VALUES
('SB  NFT', 'IND12', 3, 'Fixed', 12, 12.00, 1),
('WETHFG', 'WETGH90', 6, 'Fixed', 2, 10.00, 1),
('FREE45', 'FREE45', 8, 'Percent', 3, 20.00, 1),
('PAYTM', 'PAYTM90', 9, 'Fixed', 12, 20.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 'errors.png', '0', '2023-09-02 08:48:30', '2023-09-02 08:48:30'),
(6, 'qty.png', '0', '2023-09-02 08:48:30', '2023-09-02 08:48:30'),
(7, 'qty.png', '0', '2023-09-06 09:32:58', '2023-09-06 09:32:58'),
(9, 'admin_panel.png', '0', '2023-09-06 09:35:28', '2023-09-06 09:35:28'),
(10, 'screen.png', '0', '2023-09-06 10:00:33', '2023-09-06 10:00:33'),
(11, 'apple.jpg', '0', '2023-09-06 10:58:00', '2023-09-06 10:58:00'),
(12, 'shop.png', '0', '2023-09-07 08:53:26', '2023-09-07 08:53:26'),
(13, 'html.png', '0', '2023-09-07 09:04:59', '2023-09-07 09:04:59'),
(25, '', '0', '2023-09-08 03:35:03', '2023-09-08 03:35:03'),
(26, 'apple.jpg', '0', '2023-09-08 03:35:03', '2023-09-08 03:35:03'),
(27, '', '0', '2023-09-08 03:37:17', '2023-09-08 03:37:17'),
(28, 'apple.jpg', '0', '2023-09-08 03:37:17', '2023-09-08 03:37:17'),
(29, '', '0', '2023-09-08 03:38:40', '2023-09-08 03:38:40'),
(30, '', '', '2023-09-08 03:38:40', '2023-09-08 03:38:40'),
(31, 'apple.jpg', '', '2023-09-08 03:38:40', '2023-09-08 03:38:40'),
(32, '', '0', '2023-09-08 03:39:19', '2023-09-08 03:39:19'),
(36, '', '0', '2023-09-08 03:42:00', '2023-09-08 03:42:00'),
(37, 'apple.jpg', '0', '2023-09-08 03:42:00', '2023-09-08 03:42:00'),
(38, '', '64fa964b8e7', '2023-09-08 03:44:28', '2023-09-08 03:44:28'),
(39, 'apple.jpg', '64fa964b8e7', '2023-09-08 03:44:28', '2023-09-08 03:44:28'),
(40, '', '64fa964b8e7', '2023-09-08 04:13:33', '2023-09-08 04:13:33'),
(41, 'apple.jpg', '64fa964b8e7', '2023-09-08 04:13:33', '2023-09-08 04:13:33'),
(42, '', '64fa964b8e7', '2023-09-08 04:13:48', '2023-09-08 04:13:48'),
(43, 'apple.jpg', '64fa964b8e7', '2023-09-08 04:13:48', '2023-09-08 04:13:48'),
(44, '', '64fa964b8e7', '2023-09-08 04:13:59', '2023-09-08 04:13:59'),
(45, 'apple.jpg', '64fa964b8e7', '2023-09-08 04:13:59', '2023-09-08 04:13:59'),
(46, '', '64fa964b8e7', '2023-09-08 04:14:30', '2023-09-08 04:14:30'),
(47, 'apple.jpg', '64fa964b8e7', '2023-09-08 04:14:30', '2023-09-08 04:14:30'),
(48, '', '64fa964b8e7', '2023-09-08 04:14:41', '2023-09-08 04:14:41'),
(49, 'apple.jpg', '64fa964b8e7', '2023-09-08 04:14:41', '2023-09-08 04:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(100) NOT NULL,
  `models` varchar(100) NOT NULL,
  `brand_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `models`, `brand_id`) VALUES
(1, 'MT12', 1),
(2, 'XY-90', 1),
(3, 'WE-79', 1),
(4, 'SWE-89', 2),
(5, 'RT-800', 2),
(6, 'RTR-900', 3),
(7, 'ZER-900', 3),
(8, 'River-900', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` int(12) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `image` varchar(120) NOT NULL,
  `is_featured` int(100) NOT NULL,
  `SKU` varchar(200) NOT NULL,
  `BARCODE` bigint(20) NOT NULL,
  `QTY` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` int(100) NOT NULL,
  `compared_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `unique_id`, `description`, `category_id`, `sub_category_id`, `brand_id`, `image`, `is_featured`, `SKU`, `BARCODE`, `QTY`, `status`, `created_at`, `updated_at`, `price`, `compared_price`) VALUES
(2, 'KIOO ', '<p>DUMMY TEXT</p>', '64fa964b8e702', '<p>DUMMY TEXT</p>\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"', 2, 11, 3, '', 0, 'RT5777I900', 9007788, 0, 1, '2023-09-02 06:21:54', '2023-09-02 06:21:54', 0, 0),
(3, 'Harry', 'JIOH', '0', '<p>Dummy ghost</p>', 2, 0, 4, '', 0, '90000', 12688, 90, 1, '2023-09-02 06:37:42', '2023-09-02 06:37:42', 0, 0),
(4, 'Saayan Biswas', 'Saayan', '0', '<p>Hello</p>', 1, 0, 1, '', 0, '1245666', 0, 0, 1, '2023-09-02 08:15:23', '2023-09-02 08:15:23', 0, 0),
(5, 'Books', 'Book', '0', '<p>Comic Books</p>', 1, 0, 1, '', 0, '7889945', 12, 0, 1, '2023-09-02 08:17:33', '2023-09-02 08:17:33', 0, 0),
(6, '', '', '0', '', 1, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 08:37:57', '2023-09-02 08:37:57', 0, 0),
(7, '', '', '0', '', 1, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 08:45:48', '2023-09-02 08:45:48', 0, 0),
(8, '', '', '0', '', 1, 13, 1, '', 0, '', 0, 0, 1, '2023-09-02 08:47:52', '2023-09-02 08:47:52', 0, 0),
(9, '', '', '0', '', 1, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 08:48:37', '2023-09-02 08:48:37', 0, 0),
(10, 'harry POtter', 'samsung', '0', '<p>we are a good leader</p>', 2, 0, 1, '', 0, '', 0, 0, 0, '2023-09-02 10:17:21', '2023-09-02 10:17:21', 0, 0),
(11, 'Brook ', 'BRook', '0', 'SEAshore', 2, 0, 5, '', 0, '1333', 1099, 0, 0, '2023-09-02 13:49:09', '2023-09-02 13:49:09', 0, 0),
(12, 'Brook ', 'BRook', '0', 'SEAshore', 1, 0, 5, '', 0, '1333', 1099, 0, 0, '2023-09-02 13:53:58', '2023-09-02 13:53:58', 0, 0),
(13, 'Brook ', 'BRook', '0', 'SEAshore', 1, 0, 5, '', 0, '1333', 1099, 0, 0, '2023-09-02 13:55:19', '2023-09-02 13:55:19', 0, 0),
(14, '', '', '0', '', 1, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 13:57:47', '2023-09-02 13:57:47', 0, 0),
(15, '', '', '0', '', 2, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 13:58:16', '2023-09-02 13:58:16', 0, 0),
(16, '', '', '0', '', 1, 0, 1, '', 0, '', 0, 0, 1, '2023-09-02 14:32:47', '2023-09-02 14:32:47', 0, 0),
(22, 'John Doe', 'John', '0', '<p>I&nbsp; M A PERSON</p>', 0, 10, 5, '', 0, '127899', 654334, 0, 0, '2023-09-03 03:37:33', '2023-09-03 03:37:33', 0, 0),
(23, '', '', '0', '', 0, 0, 1, '', 0, '', 0, 0, 1, '2023-09-03 03:38:03', '2023-09-03 03:38:03', 0, 0),
(24, 'Shampoo', 'Shampo', '0', '<p>LYXOL</p>', 0, 13, 5, '', 0, '', 0, 0, 1, '2023-09-03 03:39:49', '2023-09-03 03:39:49', 0, 0),
(25, 'Washing machine', 'machhine', '0', '<p>Washes Clothes</p>', 2, 13, 4, '', 0, '', 0, 0, 0, '2023-09-03 03:42:00', '2023-09-03 03:42:00', 0, 0),
(26, 'array', 'array', '0', '<p>this is a dummy text</p>', 1, 8, 5, '', 0, 'SKU-900', 0, 0, 1, '2023-09-03 05:15:58', '2023-09-03 05:15:58', 0, 0),
(28, 'Crypto Punk', '', '0', '<p>Web 3 blockchain</p>', 1, 10, 26, '', 0, '0999', 8888, 0, 1, '2023-09-03 13:49:05', '2023-09-03 13:49:05', 0, 0),
(29, 'Crypto Punk', '', '0', '<p>Web 3 blockchain</p>', 1, 10, 26, '', 0, '0999', 8888, 0, 1, '2023-09-03 13:49:50', '2023-09-03 13:49:50', 0, 0),
(30, 'Bandana  PUnk', 'Punk', '0', '<p>WEB 3 STUFFS</p>', 1, 10, 28, '', 1, '', 0, 0, 1, '2023-09-03 15:30:09', '2023-09-03 15:30:09', 0, 0),
(31, 'Rust Engineer', '', '0', '', 0, 0, 3, '', 1, '', 0, 0, 1, '2023-09-03 15:44:29', '2023-09-03 15:44:29', 0, 0),
(32, 'SOLOANA developer', '', '0', '', 1, 8, 3, '', 1, '', 0, 0, 1, '2023-09-03 15:45:45', '2023-09-03 15:45:45', 1200, 1300),
(33, 'Soloana', '', '0', '', 2, 13, 28, '', 1, '', 0, 0, 0, '2023-09-03 15:47:43', '2023-09-03 15:47:43', 0, 700),
(34, 'Soloana Engineer', '', '0', '\"\"\"\"\"', 2, 13, 28, '', 1, '', 0, 0, 0, '2023-09-03 15:49:46', '2023-09-03 15:49:46', 0, 700),
(35, 'Apple Macbook air Pro', 'Laptop', '0', '', 1, 10, 20, '', 1, '9000099', 1234555, 0, 1, '2023-09-06 10:01:38', '2023-09-06 10:01:38', 0, 900),
(36, 'Apple Macbook air Pro', 'Laptop', '0', '', 1, 10, 20, '', 1, '9000099', 1234555, 0, 1, '2023-09-06 10:02:06', '2023-09-06 10:02:06', 0, 900),
(37, 'Apple Macbook Pro', '', '0', '\"', 1, 10, 28, '', 0, 'ER456666', 8954222, 0, 1, '2023-09-06 10:58:45', '2023-09-06 10:58:45', 0, 20000),
(38, 'ASUS', 'Laptop', '0', 'Good laptop', 1, 10, 3, '', 1, '957732', 12796544, 0, 1, '2023-09-07 03:05:59', '2023-09-07 03:05:59', 24000, 21000),
(39, 'ASUS', 'Laptop', '0', 'Good laptop', 1, 10, 3, '', 1, '957732', 12796544, 0, 1, '2023-09-07 03:57:51', '2023-09-07 03:57:51', 24000, 21000),
(41, 'Call Of Duty', 'Games', '0', '<p>Call of duty</p>', 3, 0, 3, '', 1, '3135677', 99888, 2, 1, '2023-09-07 08:53:59', '2023-09-07 08:53:59', 1200, 900),
(42, 'Call Of Duty', 'Games', '0', '<p>Call of duty</p>', 3, 0, 3, '', 1, '3135677', 99888, 2, 1, '2023-09-07 08:55:42', '2023-09-07 08:55:42', 1200, 900),
(43, 'TEST', 'TEST', '0', '<p>TEST</p>', 3, 0, 3, '', 1, '21466616', 1000, 1, 1, '2023-09-07 09:05:29', '2023-09-07 09:05:29', 1400, 900),
(44, 'TEST', 'TEST', '64f992f6e5145', '<p>TEST</p>', 3, 0, 3, '', 1, '21466616', 1000, 1, 1, '2023-09-07 09:08:06', '2023-09-07 09:08:06', 1400, 900),
(48, '', '', '64fa94d44ecb0', '', 0, 0, 3, '', 1, '', 0, 0, 1, '2023-09-08 03:28:20', '2023-09-08 03:28:20', 0, 0),
(49, '', '', '64fa95ae0759f', '', 0, 0, 3, '', 1, '', 0, 0, 1, '2023-09-08 03:31:58', '2023-09-08 03:31:58', 0, 0),
(50, '', '', '64fa964b8e702', '', 0, 0, 3, '', 1, '', 0, 0, 1, '2023-09-08 03:34:35', '2023-09-08 03:34:35', 0, 0),
(54, '', '', '', '', 0, 0, 3, 'errors.png', 1, '', 0, 0, 1, '2023-09-08 04:39:36', '2023-09-08 04:39:36', 0, 0),
(55, 'Apple', 'laptop', '', '<p>BEST LAPTOP EVER</p>', 1, 8, 3, 'apple.jpg', 1, '120666', 2, 2, 1, '2023-09-08 04:43:33', '2023-09-08 04:43:33', 290099, 90000),
(56, 'Call of duty', 'video game', '', '<p>video game</p>', 3, 0, 3, 'call_of_duty.jpg', 1, '987666', 9655, 3, 1, '2023-09-08 05:52:33', '2023-09-08 05:52:33', 900, 700);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `birthday` int(11) NOT NULL,
  `model` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `last_name`, `gen`, `email`, `password`, `mobile`, `birthday`, `model`) VALUES
(1, 'saayan', 'Biswas', '0', '', '', 0, 0, ''),
(2, 'saayan Biswas', 'Biswas', '0', '', '', 0, 0, ''),
(3, 'saayan Biswas', 'Biswas', '0', '', '', 0, 0, ''),
(4, 'saayan Biswas', 'Biswas', '0', '', '', 0, 0, ''),
(23, 'Admin', 'BISWAS', 'gender:male', 'admin@gmail.com', '$2y$10$vD.esFW2mp3ie/agfauqD.fMerjmSjoIi3LnzoFvyJSCw.rnS4rwS', 8340458616, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` int(100) NOT NULL,
  `country_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `country_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 13, '2023-09-04 03:54:18', '2023-09-04 03:54:18'),
(2, 2, 200, '2023-09-04 03:55:14', '2023-09-04 03:55:14'),
(3, 0, 90, '2023-09-04 04:05:04', '2023-09-04 04:05:04'),
(5, 1, 60, '2023-09-05 10:29:03', '2023-09-05 10:29:03'),
(6, 4, 120, '2023-09-05 10:31:27', '2023-09-05 10:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(11) NOT NULL,
  `First` varchar(100) NOT NULL,
  `Last` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `tshipping` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` enum('paid','not_paid') NOT NULL,
  `status` enum('pending','delivered','shipped') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `First`, `Last`, `email`, `country`, `address`, `city`, `state`, `zip`, `mobile`, `user_id`, `amount`, `tshipping`, `created_at`, `payment_status`, `status`) VALUES
(1, 'vivek', 'dahiya', 'Arihant@facebook.com', '1', 'Station Road Mugma', 'Dhanbad', 'Jharkhand', 828204, 8340458616, 0, 200, 0, '2023-09-05 09:19:35', 'paid', 'pending'),
(2, 'MARK', 'Wood', 'mark@gmail.com', '2', '12 A ROAD NETHERLAND', 'NEWYORK', 'Welligton', 90967, 8340458616, 0, 0, 0, '2023-09-05 09:19:35', 'paid', 'delivered'),
(10, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '2023-09-05 09:19:35', 'paid', 'pending'),
(11, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '2023-09-05 09:19:35', 'paid', 'shipped'),
(12, 'Admin', 'Biswas', 'admin@gmail.com', '1', 'Station Road Mugma', 'Dhanbad', 'Jharkhand', 828204, 8340458616, 23, 13, 130, '2023-09-05 09:19:35', 'paid', 'pending'),
(14, '', '', '', '', '', '', '', 0, 0, 0, 90, 1350, '2023-09-08 09:08:54', '', ''),
(15, '', '', '', '', '', '', '', 0, 0, 0, 90, 1350, '2023-09-08 09:09:08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `fname`, `status`, `slug`, `category`, `category_id`) VALUES
(8, 'Men Cloth', '1', '1', 0, 1),
(10, 'Mumbai', '1', 'nokia', 3, 1),
(11, 'saayan Bisw', '1', 'samsung', 20, 2),
(12, 'Arihant', '1', 'Dosra', 13, 1),
(13, 'Arihant', '1', 'Ari', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_1`
--
ALTER TABLE `brands_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `brands_1`
--
ALTER TABLE `brands_1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
