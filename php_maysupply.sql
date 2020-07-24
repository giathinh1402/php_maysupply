-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_maysupply`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(15, 'nguyengiathinh', 'vu.m.hoang@gmail.com', '12345'),
(19, 'nguyengiathinh', 'thinh@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`) VALUES
(7, 'Kitchen & Bath', 'KITCHEN-BATH-397x320.jpg'),
(8, 'General Plumbing Products', 'GENERAL-PLUMBING-PRODUCTS-397x320.jpg'),
(9, 'Pumps & Well Accessories', 'PUMPS-WELL-ACCESSORIES-397x320.jpg'),
(10, 'Tools', 'TOOLS-397x320.jpg'),
(11, 'Ritchie Waterers', 'RITCHIE-WATERERS-397x320.jpg'),
(12, 'Wastewater Solutions', 'WASTEWATER-SOLUTIONS-397x320.jpg'),
(13, 'Water Treatmem Sytems', 'water-treatment-system-397x320.jpg'),
(14, 'Heating &Cooling', 'heatingcooling-397x320.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_infor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_name` varchar(250) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `image_name`, `price`, `category_name`, `quantity`, `description`) VALUES
(4, 'Ống nước 123', 'image5.jpg', '234.00', 'Kitchen & Bath', 23, 'ống nước cho gia đình\r\n'),
(12, 'Vòi rửa tay ', 'image3.jpg', '12.00', 'Kitchen & Bath', 12, 'Chuyên dụng cho căn hộ cao cấp'),
(17, 'Bình nóng lạnha', 'HEATING-COOLING-397x320.jpg', '123.00', 'Heating &Cooling', 12, 'Radiant heat functions by either hydronics or electricity.');

-- --------------------------------------------------------

--
-- Table structure for table `products_categories_relationship`
--

CREATE TABLE `products_categories_relationship` (
  `products_categories_relationship_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_image_relationship`
--

CREATE TABLE `products_image_relationship` (
  `products_image_relationship_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_order_relationship`
--

CREATE TABLE `products_order_relationship` (
  `products_order_relationship_id` int(11) NOT NULL,
  `products_id` int(11) DEFAULT NULL,
  `products_name` varchar(250) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_difference_address`
--

CREATE TABLE `shipping_difference_address` (
  `shipping_difference_address_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `street_address` varchar(250) NOT NULL,
  `town_city` varchar(100) NOT NULL,
  `state_county` varchar(100) NOT NULL,
  `post_code` int(10) NOT NULL,
  `order_note` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_name`) VALUES
(5, 'Hero-resize.jpg'),
(6, 'Hero-resize.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `address` varchar(128) NOT NULL,
  `zip` int(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registered` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_difference_address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `products_categories_relationship`
--
ALTER TABLE `products_categories_relationship`
  ADD PRIMARY KEY (`products_categories_relationship_id`);

--
-- Indexes for table `products_image_relationship`
--
ALTER TABLE `products_image_relationship`
  ADD PRIMARY KEY (`products_image_relationship_id`);

--
-- Indexes for table `products_order_relationship`
--
ALTER TABLE `products_order_relationship`
  ADD PRIMARY KEY (`products_order_relationship_id`);

--
-- Indexes for table `shipping_difference_address`
--
ALTER TABLE `shipping_difference_address`
  ADD PRIMARY KEY (`shipping_difference_address_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products_categories_relationship`
--
ALTER TABLE `products_categories_relationship`
  MODIFY `products_categories_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_image_relationship`
--
ALTER TABLE `products_image_relationship`
  MODIFY `products_image_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_order_relationship`
--
ALTER TABLE `products_order_relationship`
  MODIFY `products_order_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_difference_address`
--
ALTER TABLE `shipping_difference_address`
  MODIFY `shipping_difference_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
