-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 12:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'iphone'),
(2, 'samsung'),
(3, 'H&M'),
(4, 'american eagle'),
(5, 'HP'),
(7, 'ASUS'),
(8, 'Dell'),
(9, 'HUAWEI');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pro_id`, `quantity`) VALUES
(5, 3, 13, 2),
(6, 3, 5, 1),
(23, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`) VALUES
(1, 'fashion', 0),
(2, 'electronic', 0),
(3, 'men\'s wear', 1),
(4, 'woman\'s wear', 1),
(5, 'mobiles', 2),
(6, 'labtops', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `status`, `message`) VALUES
(1, 'mhmd', 12837474, 'mhmd@gmail.com', 1, 'hii this is my message'),
(3, 'ahmed', 18273334, 'ahmed@gmail.com', 1, 'the second message'),
(8, 'adham', 920192829, 'adham@gmail.com', 1, 'test message'),
(9, 'amjad', 112239383, 'amjad@gmail.com', 1, 'test 2'),
(12, 'hesham', 122873836, 'hesham@gmail.com', 1, 'test 3'),
(13, 'bahgat', 122873836, 'bahgat@gmail.com', 1, 'test 5'),
(14, 'sakr', 2012867283, 'sakr@gmail.com', 1, 'new message'),
(20, 'hesham', 122873836, 'hesham@gmail.com', 1, 'jnbhcg'),
(35, 'hassan', 100111, 'hassan@gmail.com', 1, 'hassan message'),
(36, 'adham', 920192829, 'adham@gmail.com', 1, 'adham message'),
(37, 'adham', 920192829, 'adham@gmail.com', 1, 'hello'),
(38, 'hesham', 122873836, 'hesham@gmail.com', 0, 'hasham message'),
(39, 'hesham', 122873836, 'hesham@gmail.com', 0, 'hhhhh'),
(40, 'hesham', 122873836, 'hesham@gmail.com', 0, 'message'),
(41, 'amr mhmd', 1022010220, 'amr@gmail.com', 1, 'last tets');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `pr`
--

CREATE TABLE `pr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pr`
--

INSERT INTO `pr` (`id`, `name`) VALUES
(1, 'owner'),
(2, 'supervisor'),
(3, 'admin'),
(4, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `count`, `cat`, `brand`, `description`, `view`) VALUES
(2, 'iPhone 11', 1300, '170394441081740N41233411A_1.webp', 15, 5, 1, 'hii this is iphone 11Black 128GB 4G LTE', 0),
(5, 'jacket  ', 240, '170394461564082be51ff8414da472f82bfafa800a790cc_9366.webp', 12, 4, 4, 'this is jacket', 0),
(6, 'ASUS', 3500, '170394479126010N53392382A_1.webp', 21, 6, 7, 'hii this is asus', 0),
(7, 'HP ', 3100, '170394492591601N53375698A_1.webp', 19, 6, 1, 'hii this is HP laptop', 0),
(8, 'shirt', 110, '170394500516629f74b24ee-707e-489c-8334-a140f67c400d.webp', 12, 4, 3, 'hiii this is shirt', 0),
(9, 'new jacket', 80, '17039450654983718270443-769b-44dc-b1c1-eaf808c90ce0.webp', 9, 3, 4, 'hii this is new jacket', 0),
(10, 'pants', 23, '17043015365701025401099_010_main.webp', 11, 3, 3, 'hii this is pants', 0),
(11, 'shorts', 18, '170430158544129HT7227_01_laydown.jpg', 9, 3, 4, 'hii this is short', 0),
(12, 'blue pants', 39, '170430164066369123.webp', 22, 3, 3, 'hii this is blue pants', 0),
(13, 'green shirt', 34, '170430172090554086db343-df9d-4c38-b649-b132094cbc99.webp', 5, 4, 4, 'hii this is green shirt', 0),
(14, 'nokia', 480, '170430183064802N53417435A_1.webp', 12, 5, 2, 'hii this is nokia', 0),
(15, 'oppo', 660, '170430187599929N53423308A_1.webp', 25, 5, 1, 'hii this is oppo', 0),
(16, 'Dell Inspiron 35111 Laptop', 2800, '170706769153021c3b76592-4c40-491c-a1b1-3147d63f4e1a.webp', 16, 6, 8, 'this is dell labtop', 0),
(18, 'macbook', 4000, '170706789752847N53330577A_1.webp', 7, 6, 1, 'this is macbook', 0),
(19, 'HUAWEI metabook', 1400, '170706825131846N53360846A_1.webp', 9, 6, 9, 'this is HUAWEI metabook  ', 0),
(20, 'Gray dress', 60, '170706875186011OIP (2).jpg', 5, 4, 3, 'this is gray dress', 0),
(21, 'Blue dress', 60, '1707068814412812b68.jpg', 4, 4, 4, 'this is blue dress', 0),
(22, 'jacket ', 20, '17152708403131324125390_001_main.webp', 66, 1, 3, 'Hii this is Jacket', 0),
(25, 'test', 1111, '171527406792910IMG_0708.jpg,171527406716133IMG_0710.jpg,171527406736225IMG_0731.jpg', 1, 1, 1, 'heeeey', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `pr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `gender`, `pr`) VALUES
(1, 'mhmd', '202cb962ac59075b964b07152d234b70', 'mhmd@gmail.com', 'mansoura', 1, 1),
(2, 'mhmd1', '123', 'mhmd@gmail.com', 'tanta', 1, 2),
(3, 'tamer', '202cb962ac59075b964b07152d234b70', 'tamer@gamil.com', 'cairo', 1, 4),
(6, 'hesham', '202cb962ac59075b964b07152d234b70', 'hesham@gmail.com', 'tanat', 1, 3),
(7, 'mhmd', '202cb962ac59075b964b07152d234b70', 'hesham@gmail.com', 'tanat', 1, 1),
(8, 'ahmed', '202cb962ac59075b964b07152d234b70', 'mhmd@gmail.com', 'alex', 1, 1),
(16, 'amjad', '202cb962ac59075b964b07152d234b70', 'hesham@gmail.com', 'tanat', 1, 2),
(17, 'mhmd', '202cb962ac59075b964b07152d234b70', 'hesham@gmail.com', 'tanat', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`cat`),
  ADD KEY `brand` (`brand`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `pr` (`pr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand`) REFERENCES `brand` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`pr`) REFERENCES `pr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
