-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 02:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 55, 4, '2018-04-13 02:21:32'),
(2, 52, 4, '2018-04-13 02:25:05'),
(8, 22, 5, '2018-04-13 02:44:05'),
(9, 20, 5, '2018-04-13 15:53:49'),
(10, 51, 5, '2018-04-13 15:56:10'),
(11, 41, 5, '2018-04-13 20:05:30'),
(14, 52, 5, '2018-04-13 20:08:36'),
(15, 55, 5, '2018-04-13 20:28:13'),
(16, 54, 5, '2018-04-13 20:28:21'),
(17, 21, 5, '2018-04-13 20:28:41'),
(20, 55, 19, '2018-04-18 18:25:31'),
(21, 52, 19, '2018-04-18 18:25:50'),
(22, 51, 19, '2018-04-19 00:04:46'),
(23, 51, 19, '2018-04-19 00:04:50'),
(24, 52, 1, '2018-09-11 13:13:29'),
(25, 51, 1, '2018-09-12 04:07:22'),
(26, 51, 1, '2018-09-12 04:07:33'),
(27, 51, 1, '2018-09-12 04:07:34'),
(28, 51, 1, '2018-09-12 04:07:35'),
(29, 58, 27, '2020-05-02 15:04:11'),
(30, 59, 27, '2020-05-02 15:06:19'),
(31, 59, 27, '2020-05-02 15:06:58'),
(32, 57, 27, '2020-05-02 15:09:08'),
(33, 57, 27, '2020-05-02 15:09:17');

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
(5, 'SAUNG HNIN OO', 'saung@gmail.com', '12345678', 'Admin', 'saung.png'),
(6, 'INGYIN MHWE', 'ingyin@gmail.com', '12345678', 'Admin', 'ingyin2.png'),
(7, 'Thantnandarzaw', 'meizhu@gmail.com', '12345678', 'Manager', 'mei.jpeg'),
(8, 'YIN MIN', 'yinmin@gmail.com', '12345678', 'Manager', 'yinmin.png'),
(10, 'HLAING NADI PHYO', 'hlaingnadiphyo@acedatasystems.com', '12345678', 'Manager', 'ingyin.png');

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
(14, 'Typo', '', '2020-09-25 15:37:22', '0000-00-00 00:00:00');

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
(75, 'Stationery', '2020-09-25 15:58:34', '0000-00-00 00:00:00');

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
(28, 'zayarmyat', 'zayarmyat@gmail.com', '12345678', 'default.png');

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
(148, 63, '1588533541-af2.jpg'),
(149, 63, '1588533541-af3.jpg'),
(150, 63, '1588533541-af4.jpg'),
(151, 63, '1588533542-af5.jpg'),
(152, 64, '1588533776-ah2.jpg'),
(153, 64, '1588533776-ah3.jpg'),
(154, 65, '1588534283-ab2.jpg'),
(155, 65, '1588534283-ab3.jpg'),
(156, 65, '1588534283-ab4.jpg'),
(157, 65, '1588534283-ab5.jpg'),
(158, 65, '1588534283-ab6.jpg'),
(159, 65, '1588534283-ab7.jpg'),
(160, 66, '1588535023-ar2.jpg'),
(161, 66, '1588535023-ar3.jpg'),
(162, 66, '1588535023-ar4.jpg'),
(163, 66, '1588535023-ar5.jpg'),
(164, 67, '1588535805-as2.jpg'),
(165, 67, '1588535806-as3.jpg'),
(166, 67, '1588535806-as4.jpg'),
(167, 67, '1588535806-as5.jpg'),
(168, 68, '1588536933-bb2.jpg'),
(169, 68, '1588536933-bb3.jpg'),
(170, 68, '1588536933-bb4.jpg'),
(171, 68, '1588536933-bb5.jpg'),
(172, 69, '1588537493-bc2.jpg'),
(173, 69, '1588537493-bc3.jpg'),
(174, 70, '1588538128-bd2.jpg'),
(175, 70, '1588538128-bd3.jpg'),
(176, 70, '1588538128-bd4.jpg'),
(177, 70, '1588538128-bd5.jpg'),
(178, 70, '1588538128-bd6.jpg'),
(179, 71, '1588539076-be2.jpg'),
(180, 71, '1588539076-be3.jpg'),
(181, 71, '1588539076-be4.jpg');

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
(67, 'zayarmyat@gmail.com', 48, 4, 320.25, 3, 'Cash', '2020-05-03 13:57:36', '2020-05-03 13:58:56');

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
(109, 67, 65, 'ULTRABOOST DNA SHOES', '180', 1, '180', 'zayarmyat@gmail.com');

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
(1, 'wedding', 'wedding.jpg', '2020-09-24 17:50:06', '0000-00-00 00:00:00'),
(4, 'test2', 'python.PNG', '2020-09-25 15:09:10', '0000-00-00 00:00:00');

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
(29, 67, 'Cash', 320.25, 320.25, '2020-05-03 13:58:39');

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
(74, 'Coke Cup 22', '52', '-- Choose --', '14', 'Select a package', '9', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '11', '1683425-10-2.jpg', 15, '0000-00-00 00:00:00', '2020-09-25 16:46:36');

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

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`pro_attr_id`, `product_id`, `color`, `size`, `size2`, `pro_qty`) VALUES
(191, 63, 82, 39, 0, 1),
(192, 63, 82, 41, 0, 1),
(193, 63, 82, 40, 0, 1),
(194, 63, 82, 42, 0, 1),
(195, 63, 82, 43, 0, 1),
(196, 64, 83, 40, 0, 1),
(197, 64, 83, 39, 0, 1),
(198, 64, 83, 42, 0, 1),
(199, 65, 84, 39, 0, 1),
(200, 65, 84, 40, 0, 1),
(201, 65, 84, 42, 0, 1),
(202, 65, 85, 43, 0, 1),
(203, 65, 85, 44, 0, 1),
(204, 65, 86, 46, 0, 1),
(205, 65, 86, 40, 0, 1),
(206, 65, 85, 41, 0, 1),
(207, 66, 87, 40, 0, 1),
(208, 66, 87, 42, 0, 1),
(209, 66, 88, 43, 0, 1),
(210, 66, 88, 44, 0, 1),
(211, 66, 87, 39, 0, 1),
(212, 67, 89, 39, 0, 1),
(213, 67, 89, 40, 0, 1),
(214, 67, 90, 42, 0, 1),
(215, 67, 90, 43, 0, 1),
(216, 67, 91, 44, 0, 1),
(217, 67, 91, 46, 0, 1),
(218, 68, 92, 4, 0, 1),
(219, 68, 92, 5, 0, 1),
(220, 68, 92, 6, 0, 1),
(221, 68, 93, 13, 0, 1),
(222, 68, 93, 5, 0, 1),
(223, 68, 93, 4, 0, 1),
(224, 69, 94, 13, 0, 1),
(225, 69, 94, 4, 0, 1),
(226, 69, 94, 5, 0, 1),
(227, 69, 94, 6, 0, 1),
(228, 70, 97, 3, 0, 1),
(229, 70, 97, 4, 0, 1),
(230, 70, 95, 5, 0, 1),
(231, 70, 95, 6, 0, 1),
(232, 70, 96, 13, 0, 1),
(233, 70, 96, 14, 0, 1),
(234, 70, 95, 5, 0, 1),
(235, 70, 97, 4, 0, 1),
(236, 71, 98, 4, 0, 2),
(237, 71, 98, 5, 0, 1),
(238, 71, 99, 6, 0, 1),
(239, 71, 99, 13, 0, 1),
(240, 71, 99, 14, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(41, 'Zayar Myat', 'zayarmyat@gmail.com', 0, '09772919500', 'register', 'home', 'InnYa Street', 'Myanmar', 'Yangon', 'Yangon', 11241, '2019-11-05 07:05:08', '2019-11-05 07:05:08', '2019-11-05 07:05:08'),
(42, 'Myanmar Plaza Condo', 'yinmin@gmail.com', 0, '09771224100', 'Deliver', 'home', 'Myanmar Plaza Condo', 'Myanmar', 'Yangon', 'Yankin', 11424, '2019-11-06 02:19:15', '2019-11-06 02:25:55', '2019-11-06 02:19:15'),
(43, 'InnYa Street', 'zayar@gmail.com', 0, '09772919500', 'Deliver', 'home', 'InnYa Street', 'Myanmar', 'Yangon', 'Yangon', 11241, '2019-11-12 22:48:09', '2019-11-12 23:06:43', '2019-11-12 22:48:09'),
(44, 'Myanmar Plaza Condo', 'zayar@gmail.com', 0, '09772919500', 'Deliver', 'home', 'mict', 'Myanmar', 'Yangon', 'Yankin', 2147483647, '2019-11-13 21:47:14', '2019-11-13 21:51:28', '2019-11-13 21:47:14'),
(47, 'hanthit', 'hanthit@gmail.com', 0, '09772919500', 'Deliver', 'home', 'no(10) Kamarkyi street', 'Myanmar', 'Yangon', 'yangon', 90001, '2020-05-02 19:29:04', '2020-05-03 08:19:15', '2020-05-02 19:29:04'),
(48, 'zayarmyat', 'zayarmyat@gmail.com', 0, '09772919500', 'Shipping', 'home', 'Pearl Condo', 'Myanmar', 'Yangon', 'Yankin', 9001, '2020-05-03 13:57:32', '2020-05-03 13:58:56', '2020-05-03 13:57:32');

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
(30, 'Sweatshirt', 25, '2020-05-03 12:05:00', '0000-00-00 00:00:00'),
(31, 'NMD ', 26, '2020-05-03 12:17:54', '0000-00-00 00:00:00'),
(32, 'Ultraboost', 26, '2020-05-03 12:26:59', '0000-00-00 00:00:00'),
(33, 'Superstar', 26, '2020-05-03 12:54:01', '0000-00-00 00:00:00'),
(34, 'Sportwear', 27, '2020-05-03 13:09:47', '0000-00-00 00:00:00'),
(35, 'Original Hoodie', 25, '2020-05-03 13:21:12', '0000-00-00 00:00:00'),
(36, 'Sportwear', 28, '2020-05-03 13:48:10', '0000-00-00 00:00:00'),
(37, 'Original T-shirt', 27, '2020-05-03 13:48:39', '0000-00-00 00:00:00'),
(38, 'Original Jacket', 28, '2020-05-03 13:48:54', '0000-00-00 00:00:00');

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
(16, 'test2', 'zayarmyat@gmail.com', 'Myanmar Plaza Condo', '09772919500', '', '2020-09-25 14:41:56', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_attributes`
--
ALTER TABLE `image_attributes`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `pro_attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sold_out`
--
ALTER TABLE `sold_out`
  MODIFY `sold_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
