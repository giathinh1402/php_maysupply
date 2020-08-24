-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2020 lúc 06:46 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_maysupply`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(15, 'nguyengiathinh', 'vu.m.hoang@gmail.com', '12345'),
(19, 'nguyengiathinh', 'thinh@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
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
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`image_id`, `image_name`, `products_id`) VALUES
(1, 'image3.jpg', 4),
(2, 'image4.jpg', 4),
(3, 'image5.jpg', 4),
(4, 'image3.jpg', 4),
(5, 'image4.jpg', 4),
(6, 'voi2.png', 12),
(7, 'voi1.png', 12),
(8, 'voi3.png', 12),
(9, 'voi4.png', 12),
(10, 'image3.jpg', 12),
(11, 'blumc.png', 20),
(12, 'blumg.png', 20),
(13, 'blumk.png', 20),
(14, 'blumh.png', 20),
(15, 'blume.png', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `town_city` varchar(255) NOT NULL,
  `post_code` int(10) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_infor` varchar(250) NOT NULL,
  `listProduct` varchar(2000) NOT NULL,
  `priceShip` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orders_id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `town_city`, `post_code`, `phone`, `email`, `payment_infor`, `listProduct`, `priceShip`) VALUES
(4, 'dgdfgfgdfg', 'fsdsfdfds', 'cvxcvxvdffewf', 'VietNam', 'csdfsefwew ssdffsdfdfdfsdfdsfss', 'sdfsdffsdf', 154584, 2147483647, 'dsfdf@gmail.com', 'paypal', '{\"4\":{\"item_id\":\"4\",\"item_image\":\"image5.jpg\",\"item_name\":\"u1ed0ng nu01b0u1edbc 123\",\"item_price\":\"123.00\",\"item_quantity\":11},\"20\":{\"item_id\":\"20\",\"item_image\":\"blumc.png\",\"item_name\":\"Mu1eafc Nu1ed1i u1ed0ng Chuyu00ean Du1ee5ng\",\"item_price\":\"350.00\",\"item_quantity\":10},\"12\":{\"item_id\":\"12\",\"item_image\":\"image3.jpg\",\"item_name\":\"Vu00f2i ru1eeda tay \",\"item_price\":\"12.00\",\"item_quantity\":5}} ', '199.00'),
(5, 'Thinh', 'Nguyen', 'SeaDev', 'Japan', '101B Le Huu Trac Son Trac', 'Da Nang', 550000, 2147483647, 'thinh@gmail.com', 'paypal', '{\"4\":{\"item_id\":\"4\",\"item_image\":\"image5.jpg\",\"item_name\":\"u1ed0ng nu01b0u1edbc 123\",\"item_price\":\"123.00\",\"item_quantity\":11},\"20\":{\"item_id\":\"20\",\"item_image\":\"blumc.png\",\"item_name\":\"Mu1eafc Nu1ed1i u1ed0ng Chuyu00ean Du1ee5ng\",\"item_price\":\"350.00\",\"item_quantity\":10},\"12\":{\"item_id\":\"12\",\"item_image\":\"image3.jpg\",\"item_name\":\"Vu00f2i ru1eeda tay \",\"item_price\":\"12.00\",\"item_quantity\":5}} ', '199.00'),
(6, 'Manh', 'Pham', 'PNV', 'Chinese', 'Le Manh Pham 223 Son Tra', 'Da Nang', 550000, 124562337, 'Manh@gmail.com', 'paypal', '{\"4\":{\"item_id\":\"4\",\"item_image\":\"image5.jpg\",\"item_name\":\"u1ed0ng nu01b0u1edbc 123\",\"item_price\":\"123.00\",\"item_quantity\":6},\"12\":{\"item_id\":\"12\",\"item_image\":\"image3.jpg\",\"item_name\":\"Vu00f2i ru1eeda tay \",\"item_price\":\"12.00\",\"item_quantity\":2}} ', '199.00'),
(7, 'rgfgsfgdfd', 'sdvxcvc', 'cxvxvcvxc', 'UnitedKingdom(UK)', 'v  vx  sdfsdfdfs', 'dfdsfsdf6', 4165, 4524545, 'fsf@gmail.com', 'cash-on-delivery', '{\"4\":{\"item_id\":\"4\",\"item_image\":\"image5.jpg\",\"item_name\":\"u1ed0ng nu01b0u1edbc 123\",\"item_price\":\"123.00\",\"item_quantity\":\"1\"}} ', '199.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `image_name`, `category_name`, `post_title`, `post_content`) VALUES
(1, 'Alternate-Heat-Design.jpg', 'About Us', 'Kitchen & Bath Design', 'Don’t make the big box mistake!  Bring your plans and ideas to May Supplyfor a free consultation!'),
(2, 'heating-design.jpg', 'About Us', 'Alternate Heat Design', 'Stay warm and go easy on the environment.  May Supply offers the latest alternative, hydronic heating products and services.'),
(3, 'Plumbing-Solutions-Consulting.jpg', 'About Us', 'Plumbing Solutions Consulting', 'Not exactly sure what part you need or what type of pipe to use?  The experts at May Supply are here to help!'),
(4, 'Water-Testing.jpg', 'About Us', 'Water Testing', 'What’s in your water? May Supply will test your water in our state-certified testing facility, and then help you determine the best treatment options for your home or business.'),
(5, 'get-thru-480x288.png', 'Content Update', 'Minimize Your Environmental Footprint With A Solar Water Heater.', 'Upgrading to a solar water heater is a perfect option for the environmentally and economically conscious homeowner. By using the sun’s energy to heat your water, you’re taking advantage of a free and fairly consistent resource to fuel your home’s water needs.'),
(6, 'kitchen-bathroom-design (1).jpg', 'Content Update', 'Radiant Heat Keeps Open Concept Homes Comfortably Warm.', 'Radiant heat functions by either hydronics or electricity. Hydronic radiant heating is generated by running hot water through plastic tubing, under your flooring. Electric radiant uses heating cables to warm the floor above.'),
(7, 'Curtis-Kite-downtown-solar-and-radiant-020-480x288.jpg', 'Content Update ', 'State Certified Water Testing Keeps Your Family Safe 1', 'Water treatment is a necessity for most homeowners and business owners in the Shenandoah Valley of Virginia and West Virginia. The rocky foundation of our region makes for hard, mineral rich water that can collect on dishes, in laundry machines, and damage your skin and hair.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `image_name`, `price`, `category_name`, `quantity`, `description`) VALUES
(4, 'Ống nước 123', 'image5.jpg', '123.00', 'Kitchen & Bath', 23, 'ống nước cho gia đình\r\n'),
(12, 'Vòi rửa tay ', 'image3.jpg', '12.00', 'Kitchen & Bath', 12, 'Chuyên dụng cho căn hộ cao cấp'),
(17, 'Bình nóng lạnha', 'HEATING-COOLING-397x320.jpg', '123.00', 'General Plumbing Products', 12, 'Radiant heat functions by either hydronics or electricity.'),
(19, 'Ống Nhựa ', 'blumbing5.png', '250.00', 'General Plumbing Products', 25, 'Ống nhựa đa dụng cho mọi chung cư giá rẻ'),
(20, 'Mắc Nối Ống Chuyên Dụng', 'blumc.png', '350.00', 'General Plumbing Products', 35, 'Mắc nối chuyên dụng đa dạng và chuyên dụng cho chung cư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_categories_relationship`
--

CREATE TABLE `products_categories_relationship` (
  `products_categories_relationship_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_image_relationship`
--

CREATE TABLE `products_image_relationship` (
  `products_image_relationship_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_order_relationship`
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
-- Cấu trúc bảng cho bảng `shipping_difference_address`
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
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_name`) VALUES
(5, 'Hero-resize.jpg'),
(6, 'Hero-resize.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Chỉ mục cho bảng `products_categories_relationship`
--
ALTER TABLE `products_categories_relationship`
  ADD PRIMARY KEY (`products_categories_relationship_id`);

--
-- Chỉ mục cho bảng `products_image_relationship`
--
ALTER TABLE `products_image_relationship`
  ADD PRIMARY KEY (`products_image_relationship_id`);

--
-- Chỉ mục cho bảng `products_order_relationship`
--
ALTER TABLE `products_order_relationship`
  ADD PRIMARY KEY (`products_order_relationship_id`);

--
-- Chỉ mục cho bảng `shipping_difference_address`
--
ALTER TABLE `shipping_difference_address`
  ADD PRIMARY KEY (`shipping_difference_address_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products_categories_relationship`
--
ALTER TABLE `products_categories_relationship`
  MODIFY `products_categories_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products_image_relationship`
--
ALTER TABLE `products_image_relationship`
  MODIFY `products_image_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products_order_relationship`
--
ALTER TABLE `products_order_relationship`
  MODIFY `products_order_relationship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `shipping_difference_address`
--
ALTER TABLE `shipping_difference_address`
  MODIFY `shipping_difference_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
