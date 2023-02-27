-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 07:02 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 7.2.34-38+ubuntu22.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int NOT NULL,
  `cust_id` int NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `date`, `description`, `title`) VALUES
(15, 'blog-2.jpg', '2023-02-21', 'aa', 'aa'),
(16, 'blog-1.jpg', '2023-02-21', 'ss', 'ss'),
(17, 'blog-1.jpg', '2023-02-21', 'ww', 'ww'),
(18, 'blog-2.jpg', '2023-02-21', 'ww', 'ww'),
(20, 'blog-3.jpg', '2023-02-22', 'w', 'w'),
(21, 'product-1.png', '2023-02-22', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(14, 1, 1, '5'),
(15, 1, 3, '1'),
(27, 2, 3, '1'),
(29, 2, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `discount` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`, `discount`) VALUES
(1, 'vegetable', 'cat-1.png', '10%'),
(2, 'Fruits', 'cat-2.png', '10%'),
(3, 'Dairy Product', 'cat-3.png', '40%'),
(4, 'Meat ', 'meat.png', '40%');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `image`, `name`, `description`) VALUES
(1, 'feature-img-1.png', 'Fresh and Hygenic Products', 'Our Website provides all types of products that are fresh and hygeic products.'),
(2, 'feature-img-2.png', 'Free and Fast Delivery', 'Our website provide free and fast delivery all over india'),
(3, 'feature-img-3.png', 'Easy and Fast payment', 'Our website provides safe and easy payment from our website');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `footer text` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `currency format` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `total_amount` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `confirm` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `delivery` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `UPI ID` int NOT NULL,
  `Card no` int NOT NULL,
  `Expiry Date` int NOT NULL,
  `CVV` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_paymentdetails`
--

CREATE TABLE `payment_paymentdetails` (
  `id` int NOT NULL,
  `payment_id` int NOT NULL,
  `payment_details_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL,
  `featured_image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `qty` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `category`, `title`, `price`, `description`, `featured_image`, `qty`, `status`, `category_id`) VALUES
(1, 'P-101', 'Vegetable', ' Onion ', '50', 'Buy fresh and hygenic  onions from our website', 'product-2.png', '10000', 'true', 1),
(2, 'P-102', 'Vegetable', ' Potato', '100', 'Fresh and hygenic potato', 'potato.jpg', '10000', 'true', 1),
(3, 'P-103', 'Fruits', ' Grapes', '50', 'Fresh and hygenic grapes', 'grape.jpg', '100', 'true', 2),
(4, 'P-104', 'Fruits', ' Strawberry', '50', 'fresh and hygenic strawberry', 'strawberry.jpg', '100000', 'true', 2),
(5, 'P-105', 'Dairy Product', ' Milk', '30', 'Fresh and hygenic milk', 'mik.jpg', '50', 'true', 3),
(6, 'P-106', 'Dairy Product', ' Egg', '50', 'Fresh and hygenic egg', 'egg.jpg', '100', 'true', 3),
(7, 'P-107', ' Meat', ' Chicken', '100', 'Fresh and hygenic meat', 'chicken.jpg', '200', 'true', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `cart_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `photo`, `description`, `name`, `role`) VALUES
(1, 'profile-1.jpg', 'Fast Delivery', 'Abhishek Yogeshkumar Makwana', '0'),
(2, 'pic-4.png', 'Easy payment method and good products', 'Urvashi', '0'),
(3, 'pic-3.png', 'good', 'karan', '1'),
(5, 'profile-3.jpg', 'Delivery late', 'Aditya', '1'),
(6, 'cat-2.png', 'Very bad', 'Keval', '0'),
(7, 'blog-1.jpg', 'eweew', 'Dhruv', '0'),
(8, 'cart-img-3.png', 'ss', 'ss', NULL),
(9, 'cart-img-3.png', 'ss', 'ss', NULL),
(10, 'cart-img-3.png', 'ww', 'ww', NULL),
(11, 'cart-img-3.png', 'ww', 'ww', NULL),
(12, 'cart-img-3.png', 'ww', 'ww', NULL),
(13, 'cart-img-3.png', 'ww', 'ww', NULL),
(14, 'cart-img-3.png', 'ww', 'ww', NULL),
(15, 'cart-img-3.png', 'ww', 'ww', NULL),
(16, 'cart-img-3.png', 'ww', 'ww', NULL),
(17, 'cart-img-3.png', 'ww', 'ww', NULL),
(18, 'cart-img-3.png', 'ww', 'ww', NULL),
(19, 'cart-img-3.png', 'ww', 'ww', NULL),
(20, 'cart-img-3.png', 'ww', 'ww', NULL),
(21, 'cart-img-3.png', 'ww', 'ww', NULL),
(22, 'cart-img-3.png', 'ww', 'ww', NULL),
(23, 'cart-img-3.png', 'ww', 'ww', NULL),
(24, 'cart-img-3.png', 'ww', 'ww', NULL),
(25, 'cart-img-3.png', 'ww', 'ww', NULL),
(26, 'cart-img-3.png', 'ww', 'ww', NULL),
(27, 'cart-img-3.png', 'ww', 'ww', NULL),
(28, 'cart-img-3.png', 'ww', 'ww', NULL),
(29, 'cart-img-3.png', 'ww', 'ww', NULL),
(30, 'cart-img-3.png', 'ww', 'ww', NULL),
(31, 'cart-img-3.png', 'ww', 'ww', NULL),
(32, 'cart-img-3.png', 'ww', 'ww', NULL),
(33, 'cart-img-3.png', 'ww', 'ww', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `full_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `password`, `type`, `mobile`) VALUES
(1, 'Abhishek Y Makwana', 'Abhishek', 'abhishekadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '8160646216'),
(2, 'Abhishek Y Makwana', 'Abhishek', 'abhishekuser@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '8160646216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
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
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_paymentdetails`
--
ALTER TABLE `payment_paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_paymentdetails`
--
ALTER TABLE `payment_paymentdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
