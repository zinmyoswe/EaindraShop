-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 06:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaindrashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_favourite`
--

CREATE TABLE `add_to_favourite` (
  `fav_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `fav_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_to_favourite`
--

INSERT INTO `add_to_favourite` (`fav_id`, `product_id`, `customer_id`, `fav_date`) VALUES
(3, 84, 28, '2020-10-10 09:55:17'),
(4, 85, 30, '2020-10-19 13:30:56'),
(6, 76, 0, '2020-10-21 17:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `role`, `admin_img`) VALUES
(5, 'SAUNG HNIN OO', 'saung@gmail.com', '12345678', 'Supervisor', 'saung.png'),
(6, 'INGYIN MHWE', 'ingyin@gmail.com', '12345678', 'Admin', 'ingyin2.png'),
(7, 'meizhu', 'meizhu@gmail.com', '12345678', 'Founder & CEO', '858258.jpg'),
(8, 'YIN MIN', 'yinmin@gmail.com', '12345678', 'Manager', 'yinmin.png'),
(10, 'HLAING NADI PHYO', 'hlaingnadiphyo@acedatasystems.com', '12345678', 'Manager', 'ingyin.png'),
(12, 'Jennie', 'jennie@gmail.com', '12345678', 'Supervisor', '654986.png'),
(13, 'Hsuyamin', 'lisa@gmail.com', '12345678', 'Delivery Staff', '166070.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attr_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attr_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`attr_id`, `name`, `value`, `attr_img`) VALUES
(1, 'color', 'black', 'black.png'),
(2, 'color', 'grey', 'grey.png'),
(3, 'size', 'XS', ''),
(4, 'size', 'S', ''),
(5, 'size', 'M', ''),
(6, 'size', 'L', ''),
(7, 'color', 'red', 'red.PNG'),
(8, 'color', 'white', 'white.PNG'),
(9, 'size2', '41', ''),
(10, 'size2', '42', ''),
(11, 'size2', '43', ''),
(12, 'size2', '44', ''),
(13, 'size', 'XL', ''),
(14, 'size', 'XXL', ''),
(15, 'size2', '28', ''),
(16, 'size2', '29', ''),
(17, 'size2', '30', ''),
(18, 'size2', '31', ''),
(19, 'size2', '32', ''),
(20, 'size2', '33', ''),
(21, 'size2', '34', ''),
(22, 'size2', '35', ''),
(28, 'size3', 'ONE SIZE', ''),
(29, 'color', 'blue', 'blue.PNG'),
(30, 'color', 'blue2', 'blue2.PNG'),
(31, 'color', 'blue3', 'blue3.PNG'),
(32, 'color', 'blue4', 'blue4.PNG'),
(33, 'color', 'blue5', 'blue5.PNG'),
(34, 'color', 'green', 'green.PNG'),
(35, 'color', 'green3', 'green3.PNG'),
(36, 'color', 'green4', 'green4.PNG'),
(37, 'color', 'black2', 'black2.PNG'),
(38, 'color', 'grey2', 'grey2.PNG'),
(39, 'size', 'US 7, UK 6.5, F 40', ''),
(40, 'size', 'US 8, UK 7, F 41', ''),
(41, 'size', 'US 8, UK 7.5, F 41.5', ''),
(42, 'size', 'US 9, UK 8, F 42', ''),
(43, 'size', 'US 10, UK 9, F 43', ''),
(44, 'size', 'US 11, UK 10, F 44', ''),
(45, 'size', 'US 11, UK 10.5, F 44.5', ''),
(46, 'size', 'US 6, UK 5, F 39', ''),
(47, 'size', 'US 5, UK 4, F 38', ''),
(48, 'size', 'US 5, UK 4.5, F 38.5', ''),
(49, 'size', 'US 4, UK 3, F 37', ''),
(50, 'size', 'US 4, UK 3.5, F 37.5', ''),
(51, 'color', 'onesize1', 'jjj7 (4).PNG'),
(82, 'color', 'NMD_white_001', 'af.jpg'),
(83, 'color', 'NMD_black_001', 'ah.jpg'),
(84, 'color', 'ultraboot_white_001', 'ab.jpg'),
(85, 'color', 'ultraboot_white_002', 'ab6.jpg'),
(86, 'color', 'ultraboot_grey_001', 'ab7.jpg'),
(87, 'color', 'Ultraboot_grey_002', 'ar.jpg'),
(88, 'color', 'ultraboot_brown_001', 'ar5.jpg'),
(89, 'color', 'superstar_white_001', 'as.jpg'),
(90, 'color', 'superstar_darkblue_001', 'as5.jpg'),
(91, 'color', 'superstar_white_stripe_002', 'as4.jpg'),
(92, 'color', 'hoodie_green_001', 'bb.jpg'),
(93, 'color', 'hoodie_black_001', 'bb5.jpg'),
(94, 'color', 'hoodie_black_002', 'bc.jpg'),
(95, 'color', 'Track_black_001', 'bd.jpg'),
(96, 'color', 'Track_red_001', 'bd5.jpg'),
(97, 'color', 'Track_blue_001', 'bd6.jpg'),
(98, 'color', 'Trio_black', 'be.jpg'),
(99, 'color', 'Trio_white', 'be4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_cover`, `created_date`, `modified_date`) VALUES
(14, 'typo', '', '2020-11-24 08:12:03', '2020-11-24 08:12:03'),
(16, 'eain5', 'yLHugSf1.jpeg', '2020-11-24 09:09:26', '2020-11-24 09:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created_date`, `modified_date`) VALUES
(47, 'Toy', '2020-09-24 16:46:30', '2020-09-24 16:50:11'),
(49, 'Ballon', '2020-09-24 16:49:22', '2020-09-24 16:49:28'),
(52, 'Cup', '2020-09-24 16:54:42', '0000-00-00 00:00:00'),
(53, 'Accessories', '2020-09-24 16:54:49', '2020-09-25 14:52:00'),
(75, 'Stationery', '2020-09-25 15:58:34', '0000-00-00 00:00:00'),
(76, 'Gifts', '2020-10-04 00:30:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `color_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`color_product_id`, `product_id`, `color_id`) VALUES
(23, 75, 79),
(25, 75, 75),
(26, 79, 79),
(27, 79, 75),
(28, 77, 78),
(29, 77, 77),
(30, 78, 78),
(31, 78, 77),
(32, 82, 82),
(33, 82, 81),
(34, 82, 80),
(35, 81, 82),
(36, 81, 81),
(37, 81, 80),
(38, 80, 82),
(39, 80, 81),
(40, 80, 80),
(41, 83, 83),
(42, 83, 79),
(43, 83, 75),
(44, 79, 83),
(45, 75, 83),
(46, 86, 86),
(47, 85, 85),
(48, 84, 84),
(49, 76, 76),
(161, 74, 74),
(163, 72, 72),
(164, 87, 87),
(165, 87, 76),
(166, 76, 87);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `sender_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `comment`, `sender_name`, `product_id`, `date`) VALUES
(8, 0, 'test1', 'weishuo', 79, '2020-10-03 21:38:30'),
(9, 0, 'test2', 'weishuo', 79, '2020-10-03 21:45:33'),
(22, 0, 'test3', 'weishuo', 79, '2020-10-10 10:50:31'),
(23, 0, '', '', 0, '2020-10-10 10:51:11'),
(24, 0, '', '', 0, '2020-10-10 10:51:36'),
(25, 0, 'yes', 'weishuo', 79, '2020-10-10 10:52:17'),
(26, 0, 'test', 'weishuo', 85, '2020-10-10 10:55:56'),
(27, 0, 'good', 'zayarmyat', 85, '2020-10-10 10:57:03'),
(28, 0, 'ajax', 'zayarmyat', 85, '2020-10-10 11:11:22'),
(29, 0, 'pillow is good', 'zayarmyat', 85, '2020-10-10 11:13:22'),
(30, 0, 'cotton bag', 'zayarmyat', 78, '2020-10-10 19:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pass`, `customer_img`) VALUES
(28, 'zayarmyat', 'zayarmyat@gmail.com', '12345678', 'default.png'),
(30, 'weishuo', 'weishuo@gmail.com', '12345678', 'default.png'),
(31, 'susu', 'susu@gmail.com', '12345678', 'default.png'),
(32, 'phwe', 'phwe@gmail.com', '12345678', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `product_id`, `percentage`, `created_date`, `duration`, `end_date`) VALUES
(2, 78, 30, '10/01/2020', '', '10/31/2020'),
(4, 84, 30, '10/01/2020', '', '10/30/2020'),
(5, 86, 30, '11/01/2020', '', '11/30/2020');

-- --------------------------------------------------------

--
-- Table structure for table `image_attributes`
--

CREATE TABLE `image_attributes` (
  `img_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_attributes`
--

INSERT INTO `image_attributes` (`img_id`, `product_id`, `image`) VALUES
(185, 75, '1601083346-144988-15-1.jpg'),
(186, 76, '1601113764-143777-14-1.jpg'),
(187, 77, '1601114383-145819-00-2.jpg'),
(188, 77, '1601114383-145819-00-3.jpg'),
(189, 78, '1601115519-145819-14-1.jpg'),
(190, 79, '1601115912-144988-16-1.jpg'),
(191, 84, '1601967595-d2.PNG'),
(192, 85, '1601967742-c4.PNG'),
(193, 86, '1601968190-e2.PNG'),
(194, 86, '1601968190-e3.PNG'),
(195, 86, '1601968190-e4.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `total_amt` float NOT NULL,
  `total_qty` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer`, `shipping_id`, `status`, `total_amt`, `total_qty`, `payment_type`, `created_date`, `modified_date`) VALUES
(67, 'zayarmyat@gmail.com', 48, 5, 320.25, 3, 'Cash', '2020-05-03 13:57:36', '2020-10-03 05:35:48'),
(68, 'susu@gmail.com', 50, 3, 11.55, 2, 'KBZPay', '2020-10-02 23:35:48', '2020-10-02 23:35:48'),
(69, 'susu@gmail.com', 50, 3, 22.05, 2, 'WavePay', '2020-10-03 00:10:16', '2020-10-03 00:10:16'),
(70, 'weishuo@gmail.com', 49, 5, 15.75, 3, 'Cash', '2020-10-03 05:44:53', '2020-10-03 09:19:33'),
(71, 'weishuo@gmail.com', 49, 3, 11.55, 1, 'Credit', '2020-10-04 00:19:53', '2020-10-04 00:19:53'),
(72, 'weishuo@gmail.com', 49, 3, 23.1, 1, 'KBZPay', '2020-10-10 01:41:51', '2020-10-10 01:41:51'),
(73, 'zayarmyat@gmail.com', 41, 4, 23.1, 3, 'Cash', '2020-10-10 09:59:54', '2020-10-10 10:10:11'),
(74, 'phwe@gmail.com', 51, 3, 17.85, 2, 'KBZPay', '2020-10-15 03:18:36', '2020-10-15 03:18:36'),
(75, 'weishuo@gmail.com', 49, 2, 15.75, 3, 'Cash', '2020-10-19 13:29:34', '2020-10-19 13:29:34'),
(76, 'weishuo@gmail.com', 49, 3, 23.1, 1, 'KBZPay', '2020-10-21 17:21:48', '2020-10-21 17:21:48'),
(77, 'weishuo@gmail.com', 49, 3, 11.55, 2, 'WavePay', '2020-11-14 11:25:15', '2020-11-14 11:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `units` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `product_name`, `price`, `units`, `total`, `customer`) VALUES
(107, 67, 71, 'TIRO WINDBREAKER', '65', 1, '65', 'zayarmyat@gmail.com'),
(108, 67, 70, 'ESSENTIALS COLORBLOCK TRACK TOP', '60', 1, '60', 'zayarmyat@gmail.com'),
(109, 67, 65, 'ULTRABOOST DNA SHOES', '180', 1, '180', 'zayarmyat@gmail.com'),
(110, 68, 75, 'A5 Fashion Activity Journal', '5', 1, '5', 'susu@gmail.com'),
(111, 68, 76, 'Noodle Bowl', '6', 1, '6', 'susu@gmail.com'),
(112, 69, 74, 'Coke Cup 22', '11', 1, '11', 'susu@gmail.com'),
(113, 69, 78, 'Book Tote Bag', '10', 1, '10', 'susu@gmail.com'),
(114, 70, 79, 'A5 Fashion Activity Journal', '5', 3, '15', 'weishuo@gmail.com'),
(115, 71, 74, 'Coke Cup 22', '11', 1, '11', 'weishuo@gmail.com'),
(116, 72, 86, 'Wireless Earbuds', '22', 1, '22', 'weishuo@gmail.com'),
(117, 73, 81, 'Daily Mug', '5', 1, '5', 'zayarmyat@gmail.com'),
(118, 73, 83, 'A5 Fashion Activity Journal', '5', 1, '5', 'zayarmyat@gmail.com'),
(119, 73, 84, 'The Traveller Drink Bottle', '12', 1, '12', 'zayarmyat@gmail.com'),
(120, 74, 85, 'Convertible Cushion Throw', '12', 1, '12', 'phwe@gmail.com'),
(121, 74, 82, 'Daily Mug', '5', 1, '5', 'phwe@gmail.com'),
(122, 75, 80, 'Daily Mug', '5', 2, '10', 'weishuo@gmail.com'),
(123, 75, 83, 'A5 Fashion Activity Journal', '5', 1, '5', 'weishuo@gmail.com'),
(124, 76, 86, 'Wireless Earbuds', '22', 1, '22', 'weishuo@gmail.com'),
(125, 77, 83, 'A5 Fashion Activity Journal', '5', 1, '5', 'weishuo@gmail.com'),
(126, 77, 87, 'Noodle Bowl', '6', 1, '6', 'weishuo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_image`, `created_date`, `modified_date`) VALUES
(2, 'Year End Sale 2', 'new-year-sale-discount-banner-template-promotion_7087-1017.jpg', '2020-11-24 08:16:19', '2020-11-24 09:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `payamount` float NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `payment_type`, `amount`, `payamount`, `payment_date`) VALUES
(29, 67, 'Cash', 320.25, 320.25, '2020-05-03 13:58:39'),
(30, 68, 'KBZPay', 11.55, 11.55, '2020-10-02 23:35:49'),
(31, 69, 'WavePay', 22.05, 22.05, '2020-10-03 00:10:17'),
(32, 71, 'Credit', 11.55, 11.55, '2020-10-04 00:19:54'),
(33, 72, 'KBZPay', 23.1, 23.1, '2020-10-10 01:41:51'),
(34, 74, 'KBZPay', 17.85, 17.85, '2020-10-15 03:18:37'),
(35, 76, 'KBZPay', 23.1, 23.1, '2020-10-21 17:21:49'),
(36, 77, 'WavePay', 11.55, 11.55, '2020-11-14 11:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_detail_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_no` int(50) NOT NULL,
  `exp_month` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exp_year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `security_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`payment_detail_id`, `payment_id`, `name`, `card_no`, `exp_month`, `exp_year`, `security_code`, `created_date`) VALUES
(1, 30, '', 0, '', '', '', '2020-10-02 23:35:49'),
(2, 31, '', 0, '', '', '', '2020-10-03 00:10:17'),
(3, 32, 'WeiShuo', 2147483647, 'August', '2027', '213434', '2020-10-04 00:19:54'),
(4, 33, '', 0, '', '', '', '2020-10-10 01:41:51'),
(5, 34, '', 0, '', '', '', '2020-10-15 03:18:37'),
(6, 35, '', 0, '', '', '', '2020-10-21 17:21:49'),
(7, 36, '', 0, '', '', '', '2020-11-14 11:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `categories`, `sub_cat`, `brand`, `package`, `supplier`, `description`, `price`, `cover`, `qty`, `created_date`, `modified_date`) VALUES
(72, 'Mini Highlighter 10Pk 2', '75', '-- Choose --', 'Select a Brand', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"product-content small-12 large-6 xlarge-4 xxlarge-5 columns\">\r\n<h2 class=\"product-info-label\"><span style=\"color: #999999;\">Product Details</span></h2>\r\n<div id=\"details-description-container\">\r\n<div class=\"product-content\">Our pack of 10 mini scented highlighters come in a reusable carry case and are full of fun colours! <br /><br /><strong>Features: </strong> <br />- Scented <br />- Reusable case <br /><strong>Composition: </strong>85% Plastic, 15% Ink<br /><br />Dimensions: <br />Case: 7.5cmL x 18.5cmH x 2cmW <br />Each highlighter: 7cmL x 1.5cmW<br /><br /></div>\r\n</div>\r\n<div class=\"columns\">\r\n<h2 class=\"product-info-label\"><span style=\"color: #999999;\">Product Dimensions</span></h2>\r\nCase: 7.5cmL x 18.5cmH x 2cmW <br />Each highlighter: 7cmL x 1.5cmW&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n</div>\r\n</body>\r\n</html>', '5', '145905-01-2.jpg', 12, '0000-00-00 00:00:00', '2020-09-25 16:50:25'),
(74, 'Coke Cup 22', '52', '-- Choose --', '14', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '11', 'f1.PNG', 13, '0000-00-00 00:00:00', '2020-10-06 00:12:38'),
(75, 'A5 Fashion Activity Journal', '75', '-- Choose --', '14', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'b3.PNG', 15, '0000-00-00 00:00:00', '2020-10-05 23:47:39'),
(76, 'Noodle Bowl', '52', 'Mugs & Eating', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '6', '143777-14-2.jpg', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Book Tote Bag', '53', '-- Choose --', '14', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '10', 'f2.PNG', 16, '0000-00-00 00:00:00', '2020-10-06 00:24:11'),
(78, 'Book Tote Bag', '53', 'Bags & Luggage', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '10', '145819-14-2.jpg', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'A5 Fashion Activity Journal 22', '75', '-- Choose --', '14', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'b2.PNG', 0, '0000-00-00 00:00:00', '2020-10-05 23:47:06'),
(80, 'Daily Mug', '52', '42', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'a.PNG', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Daily Mug', '52', '42', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'a1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Daily Mug', '52', '42', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'a2.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'A5 Fashion Activity Journal', '75', '39', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '5', 'b1.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'The Traveller Drink Bottle', '76', 'No Sub Category found', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '12', 'd1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Convertible Cushion Throw', '76', 'No Sub Category found', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '12', 'c1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Wireless Earbuds', '76', 'No Sub Category found', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '22', 'e1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Noodle Bowl', '52', '40', '14', 'Select a Package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '6', 'f4.PNG', 6, '2020-10-21 16:18:44', '2020-10-21 16:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `pro_attr_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `size2` int(11) NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_name`, `supplier_id`, `admin_id`, `product_id`, `total`, `qty`, `created_date`, `modified_date`) VALUES
(6, 'The Studio Tote Bag', 17, 10, 0, 10, 12, '2020-10-09 23:40:00', '2020-10-09 23:40:00'),
(9, 'Noodle Bowl', 9, 8, 0, 6, 7, '2020-10-21 16:17:12', '2020-10-21 16:17:12'),
(10, 'Box Of Socks', 9, 8, 0, 16, 10, '2020-11-15 01:49:37', '2020-11-15 01:49:37'),
(12, 'test23', 9, 8, 0, 22, 16, '2020-11-18 13:17:22', '2020-11-18 13:17:22'),
(13, 'test67', 9, 8, 0, 168, 12, '2020-11-18 13:34:49', '2020-11-18 13:34:49'),
(15, 'testnov', 9, 8, 0, 90, 15, '2020-11-20 00:46:26', '2020-11-20 00:46:26'),
(16, 'testdec', 9, 8, 0, 132, 20, '2020-11-20 01:51:31', '2020-11-20 01:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `purchase_detail_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `color_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`purchase_detail_id`, `purchase_id`, `product_id`, `product_name`, `price`, `qty`, `total`, `color`, `color_image`) VALUES
(7, 13, 0, 'test67', 14, 8, 112, 'black', 'a'),
(8, 13, 0, 'test67', 14, 4, 56, 'white', 'a'),
(9, 15, 0, 'testnov', 6, 8, 48, 'blue', 'a'),
(10, 15, 0, 'testnov', 6, 7, 42, 'pink', 'a'),
(11, 16, 0, 'testdec', 6, 8, 48, 'black', 'a'),
(12, 16, 0, 'testdec', 7, 12, 84, 'grey', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `shipping_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `full_name`, `email`, `store_id`, `phone`, `status`, `shipping_type`, `street_address`, `country`, `state`, `city`, `zipcode`, `created_date`, `modified_date`, `shipping_time`) VALUES
(6, 'testing', 'overmidnight12@gmail.com', 0, '095057545', 'register', 'home', 'no(241),aung thiri street,DAWBON TOWNSHIP', 'MYANMAR', 'YANGON', 'YANGON', 12312, '2018-02-09 15:50:11', '0000-00-00 00:00:00', '2018-02-09 15:50:11'),
(7, 'shishi', 'overmidnight12@gmail.com', 0, '0923212121', 'register', 'home', 'bahan,', 'MYANMAR', 'YANGON', 'YANGON', 12311, '2018-02-09 16:17:09', '0000-00-00 00:00:00', '2018-02-09 16:17:09'),
(8, 'Thantnandarzaw', 'overmidnight12@gmail.com', 0, '0979223411', 'Shipping', 'home', 'no(21)B,51st street,Botataung', 'MYANMAR', 'YANGON', 'YANGON', 6421, '2018-02-10 02:21:41', '2020-05-03 08:18:42', '2018-02-10 02:21:41'),
(9, 'toetoe', 'linsandar96@gmail.com', 0, '09432111332', 'register', 'home', '12/B,2nd floor,sanchaung street', 'MYANMAR', 'MON STATE', 'MUDON', 3425, '2018-02-14 17:12:57', '0000-00-00 00:00:00', '2018-02-14 17:12:57'),
(10, 'Ingyin Mhwe', 'ingyin@gmail.com', 0, '09772321331', 'Deliver', 'home', 'no21/B,22street,Tharkayta', 'MYANMAR', 'YANGON', 'YANGON', 3214, '2018-02-23 13:21:16', '2018-03-15 07:25:41', '2018-02-23 13:21:16'),
(11, 'TestingShipping', 'linsandar96@gmail.com', 0, '2434131', 'register', 'home', 'sdafsdafsadf', 'sfsdf', 'safa', 'sddfsa', 0, '2018-03-12 03:59:19', '0000-00-00 00:00:00', '2018-03-12 03:59:19'),
(12, 'hlahaa', 'linsandar96@gmail.com', 0, '2313', 'Shipping', 'home', 'no(21)B,51st street,Botataung', 'MYANMAR', 'YANGON', 'YANGON', 23131, '2018-03-12 06:28:29', '2018-03-15 10:04:15', '2018-03-12 06:28:29'),
(22, 'TTTYYYY', 'linsandar96@gmail.com', 4, '21331412', 'register', 'store', '', '', '', '', 0, '2018-03-12 14:28:22', '2018-03-12 14:28:22', '2018-03-12 14:28:22'),
(23, 'dsafdsa', 'linsandar96@gmail.com', 2, '23322', 'register', 'store', '', '', '', '', 0, '2018-03-12 14:34:13', '2018-03-12 14:34:13', '2018-03-12 14:34:13'),
(24, 'SaungOo', 'saunghninoo@acedatasystems.com', 0, '41412421', 'Deliver', 'home', '21/C,Latha street, Latha Township', 'MYANMAR', 'YANGON', 'YANGON', 2423, '2018-03-13 14:49:46', '2018-04-09 10:49:38', '2018-03-13 14:49:46'),
(25, 'Su Myat', 'sumyat@gmail.com', 0, '423423434', 'Deliver', 'home', '1128, Sanchaung Street, sanchaung Township', 'MYANMAR', 'YANGON', 'YANGON', 13432, '2018-03-17 09:56:41', '2018-04-26 17:41:30', '2018-03-17 09:56:41'),
(26, 'hninoohlaing', 'saunghninoo@gmail.com', 0, '095057545', 'register', 'home', '12/BPS Building, Hlaing Township', 'Myanmar', 'Yangon', 'Yangon', 15332, '2018-08-18 14:09:57', '2018-08-18 14:09:57', '2018-08-18 14:09:57'),
(27, 'zinzintun', 'overmidnight12@gmail.com', 0, '09772843040', 'register', 'home', '22,B, Latha Street', 'Myanmar', 'Yangon', 'Latha', 32421, '2018-09-05 21:16:10', '2018-09-05 21:16:10', '2018-09-05 21:16:10'),
(40, 'PAN ASTHESTIC', 'overmidnight12@gmail.com', 0, '09772843040', 'register', 'home', 'No 8 , ground floor, Coner of Kannar Street and Sin min Street', 'Myanmar', 'Yangon', 'Alone Township', 90001, '2018-09-17 13:05:16', '2018-09-17 13:05:16', '2018-09-17 13:05:16'),
(41, 'Zayar Myat', 'zayarmyat@gmail.com', 0, '09772919500', 'Shipping', 'home', 'InnYa Street', 'Myanmar', 'Yangon', 'Yangon', 11241, '2019-11-05 07:05:08', '2020-10-10 10:10:11', '2019-11-05 07:05:08'),
(42, 'Myanmar Plaza Condo', 'yinmin@gmail.com', 0, '09771224100', 'Deliver', 'home', 'Myanmar Plaza Condo', 'Myanmar', 'Yangon', 'Yankin', 11424, '2019-11-06 02:19:15', '2019-11-06 02:25:55', '2019-11-06 02:19:15'),
(43, 'InnYa Street', 'zayar@gmail.com', 0, '09772919500', 'Deliver', 'home', 'InnYa Street', 'Myanmar', 'Yangon', 'Yangon', 11241, '2019-11-12 22:48:09', '2019-11-12 23:06:43', '2019-11-12 22:48:09'),
(44, 'Myanmar Plaza Condo', 'zayar@gmail.com', 0, '09772919500', 'Deliver', 'home', 'mict', 'Myanmar', 'Yangon', 'Yankin', 2147483647, '2019-11-13 21:47:14', '2019-11-13 21:51:28', '2019-11-13 21:47:14'),
(47, 'hanthit', 'hanthit@gmail.com', 0, '09772919500', 'Deliver', 'home', 'no(10) Kamarkyi street', 'Myanmar', 'Yangon', 'yangon', 90001, '2020-05-02 19:29:04', '2020-05-03 08:19:15', '2020-05-02 19:29:04'),
(48, 'zayarmyat', 'zayarmyat@gmail.com', 0, '09772919500', 'Deliver', 'home', 'Pearl Condo', 'Myanmar', 'Yangon', 'Yankin', 9001, '2020-05-03 13:57:32', '2020-10-03 05:35:48', '2020-05-03 13:57:32'),
(49, 'WeiShuo', 'weishuo@gmail.com', 0, '09772919500', 'Deliver', 'home', 'Myanmar Plaza Office Tower 1', 'Myanmar', 'Yangon', 'Yangon', 11201, '2020-09-29 15:17:06', '2020-10-03 09:19:33', '2020-09-29 15:17:06'),
(50, 'su su lay', 'susu@gmail.com', 0, '09772919500', 'register', 'home', 'Myanmar Plaza Office Tower 1', 'Myanmar', 'Yangon', 'Yankin', 90001, '2020-10-02 22:24:18', '2020-10-02 22:24:18', '2020-10-02 22:24:18'),
(51, 'phwe', 'phwe@gmail.com', 0, '09772919500', 'register', 'home', 'Shwe taung Office', 'Myanmar', 'Yangon', 'Yangon', 90001, '2020-10-15 03:18:08', '2020-10-15 03:18:08', '2020-10-15 03:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `sold_out`
--

CREATE TABLE `sold_out` (
  `sold_out_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sold_out`
--

INSERT INTO `sold_out` (`sold_out_id`, `email`, `product_id`, `created_date`) VALUES
(1, 'weishuo@gmail.com', 79, '2020-10-03 05:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_ph` text COLLATE utf8_unicode_ci NOT NULL,
  `store_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `category_id`, `created_date`, `modified_date`) VALUES
(39, 'Journals & Notebooks', 75, '2020-09-25 18:12:08', '0000-00-00 00:00:00'),
(40, ' Mugs & Eating', 52, '2020-09-26 02:43:33', '0000-00-00 00:00:00'),
(41, 'Bags & Luggage', 53, '2020-09-26 02:58:16', '0000-00-00 00:00:00'),
(42, 'Drinking', 52, '2020-10-05 23:15:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `email`, `address`, `phone`, `supplier_cover`, `created_date`, `modified_date`) VALUES
(9, 'ACE Data Systems', 'acedatasystems@gmail.com', '', '', 'a (1).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'test', 'overmidnight12@gmail.com', 'Yangon', '09772919500', '', '2020-09-25 14:21:35', '0000-00-00 00:00:00'),
(16, 'test2', 'zayarmyat@gmail.com', 'Myanmar Plaza Condo', '09772919500', '', '2020-09-25 14:41:56', '0000-00-00 00:00:00'),
(17, 'NCC', 'ncc@gmail.com', 'Maynigone', '01223456', '', '2020-10-10 01:21:24', '0000-00-00 00:00:00'),
(18, 'Uniqlo2', 'uniqlo@gmail.com', 'aada', '09978022411', '', '2020-11-20 00:05:51', '2020-11-24 08:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_favourite`
--
ALTER TABLE `add_to_favourite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`color_product_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `image_attributes`
--
ALTER TABLE `image_attributes`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`payment_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`pro_attr_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`purchase_detail_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sold_out`
--
ALTER TABLE `sold_out`
  ADD PRIMARY KEY (`sold_out_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_favourite`
--
ALTER TABLE `add_to_favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `color_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image_attributes`
--
ALTER TABLE `image_attributes`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `pro_attr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `purchase_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sold_out`
--
ALTER TABLE `sold_out`
  MODIFY `sold_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
