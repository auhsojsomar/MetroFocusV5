-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2019 at 10:00 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro_focus`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `status`, `deleted`) VALUES
(1, '1608952350.jpeg', 'Canon 5D Mark', 'Canon', 'Body Rubber', 723, 5, 'Body Rubber for Canon; Color: Camouflage; Type: Silicone/ Rubber; Condition: New', NULL, 'Active', 0),
(2, '1539819020.jpeg', 'Fuji XA10', 'Fuji', 'Body Rubber', 879, 8, 'Body Rubber for camera Fuji XA10; Color: Black; Type: Silicone/ Rubber; Condition: New', NULL, 'Active', 0),
(3, '2074425905.jpeg', 'Panasonic GF7', 'Panasonic', 'Body Rubber', 351, 5, 'Body Rubber For Panasonic GF7; Color: Pink; Type: Silicone/ Rubber; Condition: 2nd hand', NULL, 'Active', 0),
(4, '1158611331.jpeg', 'Sony A7R Mark 2', 'Sony', 'Body Rubber', 434, 5, 'Body Rubber for Sony Camera; Color: Black; Type: Silicone/ Rubber; Condition: New', NULL, 'Active', 0),
(5, '1491780350.jpeg', 'AmazonBasics Medium DSLR Gadget Bag', 'Amazon', 'Camera Bag', 1405.98, 12, 'Color: Black;Size: Medium;Store, carry and protect your camera equipment;Slot for iPad Mini, Google Nexus 7, Amazon Kindle Fire\r\nHolds 1 DSLR body and up to 3 lenses\r\nExternal dimensions: 12\" x 7\" x 9\" ', NULL, 'Active', 0),
(6, '211413271.jpeg', 'Kattee Waterproof Camera Insert Bag, DSLR SLR Padded Case Shockproof for Travel', 'Kattee', 'Camera Bag', 812.17, 7, 'Color: Gray; Type:  High density nylon fabric, anti-static composite and soft padded inner lining; Size: Medium; Waterproof and Shockproof', NULL, 'Active', 0),
(7, '62088602.jpeg', 'Ape Case, Shoulder bag for DSLR, Large, Pro digital photo and video camera luggage case (ACPRO1600)', 'Ape Case', 'Camera Bag', 3464.3, 5, 'Color: Black; Size: Large (Luggage Size); Condition: New\r\nCompatible with SLR cameras, digital cameras, 35mm cameras, and digital video cameras; Contains 16 heavily padded pockets', NULL, 'Active', 0),
(8, '296825934.jpeg', 'Fotopro Phone Tripod, 39.5 Inch Aluminum Camera Tripod with Bluetooth Remote Control and Bag for iPhone 8 or Plus,Samsung, Huawei, Gopro 6or 5 or 4,Nikon,Canon', 'Fotopro', 'Tripod', 1353.97, 3, 'Color: Black ; Condition: New; Type: Aluminum; 8-section legs; Bluetooth Shutter Remote', NULL, 'Active', 0),
(9, '1638254949.jpeg', 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Canon', 'Tripod', 2166.68, 5, 'Color: Black;Condition: New;Flexible head for Canon and Nikon;360 degrees rotation panoramas', NULL, 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

DROP TABLE IF EXISTS `activitylogs`;
CREATE TABLE IF NOT EXISTS `activitylogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `datemod` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`id`, `name`, `action`, `quantity`, `datemod`, `type`, `user`, `description`) VALUES
(43, 'Canon', 'Added', NULL, '10/6/2018 2:18 AM', 'Brand', 'admin', NULL),
(44, 'Fuji', 'Added', NULL, '10/6/2018 2:19 AM', 'Brand', 'admin', NULL),
(45, 'Kodak', 'Added', NULL, '10/6/2018 2:19 AM', 'Brand', 'admin', NULL),
(46, 'Nikon', 'Added', NULL, '10/6/2018 2:19 AM', 'Brand', 'admin', NULL),
(47, 'Panasonic', 'Added', NULL, '10/6/2018 2:19 AM', 'Brand', 'admin', NULL),
(48, 'Sony', 'Added', NULL, '10/6/2018 2:19 AM', 'Brand', 'admin', NULL),
(49, 'Battery Cover', 'Added', NULL, '10/6/2018 2:20 AM', 'Category', 'admin', NULL),
(50, 'Canon EOS 5D Mark II 5D 2', 'Added', NULL, '10/6/2018 2:26 AM', 'Parts', 'admin', NULL),
(51, 'FujiFilm FinePix S4000', 'Added', NULL, '10/6/2018 2:29 AM', 'Parts', 'admin', NULL),
(52, 'Canon EOS 5D Mark II 5D 2', 'Updated', NULL, '10/6/2018 2:29 AM', 'Parts', 'admin', NULL),
(53, 'Kodak EasyShare CX4310', 'Added', NULL, '10/6/2018 2:32 AM', 'Parts', 'admin', NULL),
(54, 'FujiFilm FinePix S4000', 'Updated', NULL, '10/6/2018 2:33 AM', 'Parts', 'admin', NULL),
(55, 'Nikon D50, D70, D70S, D80, D90, D100', 'Added', NULL, '10/6/2018 2:35 AM', 'Parts', 'admin', NULL),
(56, 'Nikon D50, D70, D70S, D80, D90, D100', 'Updated', NULL, '10/6/2018 2:35 AM', 'Parts', 'admin', NULL),
(57, 'Panasonic DMC-TZ3', 'Added', NULL, '10/6/2018 2:41 AM', 'Parts', 'admin', NULL),
(58, 'Sony A7 II ILCE-7M2', 'Added', NULL, '10/6/2018 2:45 AM', 'Parts', 'admin', NULL),
(59, 'Panasonic DMC-TZ3', 'Updated', NULL, '10/6/2018 2:45 AM', 'Parts', 'admin', NULL),
(60, 'Nikon D50, D70, D70S, D80, D90, D100', 'Updated', NULL, '10/6/2018 2:45 AM', 'Parts', 'admin', NULL),
(61, 'Canon EOS 5D Mark II 5D 2', 'Updated', NULL, '10/6/2018 2:46 AM', 'Parts', 'admin', NULL),
(62, 'Sony A7 II ILCE-7M2', 'Updated', NULL, '10/6/2018 2:46 AM', 'Parts', 'admin', NULL),
(63, 'Kodak EasyShare CX4310', 'Updated', NULL, '10/6/2018 2:46 AM', 'Parts', 'admin', NULL),
(64, 'FujiFilm FinePix S4000', 'Updated', NULL, '10/6/2018 2:46 AM', 'Parts', 'admin', NULL),
(65, 'Body Rubber', 'Added', NULL, '10/6/2018 2:49 AM', 'Category', 'admin', NULL),
(66, 'Canon 5D Mark', 'Added', NULL, '10/6/2018 2:51 AM', 'Accessories', 'admin', NULL),
(67, 'Fuji XA10', 'Added', NULL, '10/6/2018 2:57 AM', 'Accessories', 'admin', NULL),
(68, 'Fuji XA10', 'Added', NULL, '10/6/2018 2:57 AM', 'Accessories', 'admin', NULL),
(69, 'Panasonic GF7', 'Added', NULL, '10/6/2018 3:03 AM', 'Accessories', 'admin', NULL),
(70, 'Sony A7R Mark 2', 'Added', NULL, '10/6/2018 6:14 AM', 'Accessories', 'admin', NULL),
(71, 'Camera Bag', 'Added', NULL, '10/6/2018 6:21 AM', 'Category', 'admin', NULL),
(72, 'Amazon', 'Added', NULL, '10/6/2018 6:21 AM', 'Brand', 'admin', NULL),
(73, 'AmazonBasics Medium DSLR Gadget Bag', 'Added', NULL, '10/6/2018 6:25 AM', 'Accessories', 'admin', NULL),
(74, 'Kattee', 'Added', NULL, '10/6/2018 6:27 AM', 'Brand', 'admin', NULL),
(75, 'Kattee Waterproof Camera Insert Bag, DSLR SLR Padded Case Shockproof for Travel', 'Added', NULL, '10/6/2018 6:32 AM', 'Accessories', 'admin', NULL),
(76, 'Ape Case', 'Added', NULL, '10/6/2018 6:38 AM', 'Brand', 'admin', NULL),
(77, 'Ape Case, Shoulder bag for DSLR, Large, Pro digital photo and video camera luggage case (ACPRO1600)', 'Added', NULL, '10/6/2018 6:40 AM', 'Accessories', 'admin', NULL),
(78, 'Cardslot', 'Added', NULL, '10/6/2018 6:43 AM', 'Category', 'admin', NULL),
(79, 'Canon 450D, 500D, 550D, 600D, 60D, 1000D and 1100D', 'Added', NULL, '10/6/2018 6:46 AM', 'Parts', 'admin', NULL),
(80, 'Nikon D600, D610, D3200 and D5200', 'Added', NULL, '10/6/2018 6:47 AM', 'Parts', 'admin', NULL),
(81, 'Canon EOS 700D Rebel T5i Kiss X7i', 'Added', NULL, '10/6/2018 6:49 AM', 'Parts', 'admin', NULL),
(82, 'Nikon D600, D610, D3200 and D5200', 'Updated', NULL, '10/6/2018 6:49 AM', 'Parts', 'admin', NULL),
(83, 'Nikon D600, D610, D3200 and D5200', 'Updated', NULL, '10/6/2018 6:50 AM', 'Parts', 'admin', NULL),
(84, 'Fotopro', 'Added', NULL, '10/6/2018 6:51 AM', 'Brand', 'admin', NULL),
(85, 'Tripod', 'Added', NULL, '10/6/2018 6:52 AM', 'Category', 'admin', NULL),
(86, 'Fotopro Phone Tripod, 39.5 Inch Aluminum Camera Tripod with Bluetooth Remote Control and Bag for iPhone 8 or Plus,Samsung, Huawei, Gopro 6or 5 or 4,Nikon,Canon', 'Added', NULL, '10/6/2018 6:55 AM', 'Accessories', 'admin', NULL),
(87, 'Albott', 'Added', NULL, '10/6/2018 6:58 AM', 'Brand', 'admin', NULL),
(88, 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Added', NULL, '10/6/2018 7:00 AM', 'Accessories', 'admin', NULL),
(89, 'Led', 'Added', NULL, '10/6/2018 7:02 AM', 'Category', 'admin', NULL),
(90, 'CANON SPEEDLITE 430EX', 'Added', NULL, '10/6/2018 7:03 AM', 'Parts', 'admin', NULL),
(91, 'Nikon SB700', 'Added', NULL, '10/6/2018 7:04 AM', 'Parts', 'admin', NULL),
(92, 'Lens', 'Added', NULL, '10/6/2018 7:05 AM', 'Category', 'admin', NULL),
(93, 'CANON POWERSHOT A1000', 'Added', NULL, '10/6/2018 7:06 AM', 'Parts', 'admin', NULL),
(94, 'Canon EOS 700D Rebel T5i Kiss X7i', 'Updated', NULL, '10/6/2018 7:29 AM', 'Parts', 'admin', NULL),
(95, 'Canon EOS 5D Mark II 5D 2', 'Updated', NULL, '10/6/2018 7:29 AM', 'Parts', 'admin', NULL),
(96, 'FujiFilm FinePix S4000', 'Updated', NULL, '10/6/2018 7:30 AM', 'Parts', 'admin', NULL),
(97, 'Kodak EasyShare CX4310', 'Updated', NULL, '10/6/2018 7:30 AM', 'Parts', 'admin', NULL),
(98, 'Nikon D50, D70, D70S, D80, D90, D100', 'Updated', NULL, '10/6/2018 7:31 AM', 'Parts', 'admin', NULL),
(99, 'Panasonic DMC-TZ3', 'Updated', NULL, '10/6/2018 7:31 AM', 'Parts', 'admin', NULL),
(100, 'Sony A7 II ILCE-7M2', 'Updated', NULL, '10/6/2018 7:31 AM', 'Parts', 'admin', NULL),
(101, 'Nikon D600, D610, D3200 and D5200', 'Updated', NULL, '10/6/2018 7:31 AM', 'Parts', 'admin', NULL),
(102, 'Canon 450D, 500D, 550D, 600D, 60D, 1000D and 1100D', 'Updated', NULL, '10/6/2018 7:32 AM', 'Parts', 'admin', NULL),
(103, 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Updated', NULL, '10/6/2018 7:36 AM', 'Accessories', 'admin', NULL),
(104, 'Canon 5D Mark', 'Updated', NULL, '10/6/2018 9:38 AM', 'Accessories', 'admin', NULL),
(105, 'Fuji XA10', 'Updated', NULL, '10/6/2018 9:38 AM', 'Accessories', 'admin', NULL),
(106, 'Panasonic GF7', 'Updated', NULL, '10/6/2018 9:38 AM', 'Accessories', 'admin', NULL),
(107, 'Sony A7R Mark 2', 'Updated', NULL, '10/6/2018 9:39 AM', 'Accessories', 'admin', NULL),
(108, 'AmazonBasics Medium DSLR Gadget Bag', 'Updated', NULL, '10/6/2018 9:39 AM', 'Accessories', 'admin', NULL),
(109, 'Kattee Waterproof Camera Insert Bag, DSLR SLR Padded Case Shockproof for Travel', 'Updated', NULL, '10/6/2018 9:39 AM', 'Accessories', 'admin', NULL),
(110, 'Ape Case, Shoulder bag for DSLR, Large, Pro digital photo and video camera luggage case (ACPRO1600)', 'Updated', NULL, '10/6/2018 9:40 AM', 'Accessories', 'admin', NULL),
(111, 'Fotopro Phone Tripod, 39.5 Inch Aluminum Camera Tripod with Bluetooth Remote Control and Bag for iPhone 8 or Plus,Samsung, Huawei, Gopro 6or 5 or 4,Nikon,Canon', 'Updated', NULL, '10/6/2018 9:40 AM', 'Accessories', 'admin', NULL),
(115, 'Panasonic GF7', 'Add Stocks', 4, '10/6/2018 11:16 AM', 'Accessories', 'admin', NULL),
(116, 'CANON POWERSHOT A1000', 'Confirm', 4, '10/6/2018 11:21 AM', 'Parts', 'admin', 'Reservation'),
(117, 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Confirm', 2, '10/6/2018 11:24 AM', 'Accessories', 'admin', 'Reservation'),
(118, 'CANON POWERSHOT A1000', 'Confirm', 4, '10/6/2018 11:29 AM', 'Parts', 'admin', 'Reservation'),
(119, 'Fotopro Phone Tripod, 39.5 Inch Aluminum Camera Tripod with Bluetooth Remote Control and Bag for iPhone 8 or Plus,Samsung, Huawei, Gopro 6or 5 or 4,Nikon,Canon', 'Confirm', 1, '10/6/2018 11:29 AM', 'Accessories', 'admin', 'Reservation'),
(120, 'riyosandobal', 'Reject', NULL, '10/6/2018 11:53 AM', 'Appointment', 'riyosandobal', NULL),
(121, 'johndoe', 'Deleted', NULL, '10/6/2018 11:55 AM', 'User', 'admin', NULL),
(122, 'vdoctolero', 'Deleted', NULL, '10/6/2018 11:57 AM', 'User', 'admin', NULL),
(123, 'johndoe', 'Deleted', NULL, '10/7/2018 8:08 PM', 'User', 'admin', NULL),
(124, 'Akobobo', 'Deleted', NULL, '10/7/2018 8:08 PM', 'User', 'admin', NULL),
(125, 'grandemaeanne', 'Deleted', NULL, '10/17/2018 5:58 PM', 'User', 'admin', '1'),
(126, 'auhsojsomar', 'Edited', NULL, '10/18/2018 12:33 AM', 'User', 'admin', NULL),
(127, 'auhsojsomar', 'Edited', NULL, '10/18/2018 12:33 AM', 'User', 'admin', NULL),
(128, 'CANON SPEEDLITE 430EX', 'Add Stocks', 10, '10/18/2018 12:41 AM', 'Parts', 'admin', NULL),
(129, 'Nikon SB700', 'Add Stocks', 5, '10/18/2018 12:41 AM', 'Parts', 'admin', NULL),
(130, 'Nikon SB700', 'Add Stocks', 5, '10/18/2018 12:41 AM', 'Parts', 'admin', NULL),
(131, 'CANON POWERSHOT A1000', 'Add Stocks', 5, '10/18/2018 12:42 AM', 'Parts', 'admin', NULL),
(132, 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Add Stocks', 5, '10/18/2018 12:42 AM', 'Accessories', 'admin', NULL),
(149, 'Albott', 'Deleted', NULL, '10/19/2018 6:46 AM', 'Brand', 'admin', 'QWEQWEQWE'),
(150, 'Canon EOS 700D Rebel T5i Kiss X7i', 'Confirm', 1, '10/21/2018 6:24 PM', 'Parts', 'admin', 'Reservation'),
(151, 'Canon EOS 700D Rebel T5i Kiss X7i', 'Reject', 1, '10/21/2018 6:27 PM', 'Parts', 'admin', 'Reservation'),
(152, 'Nikon D50, D70, D70S, D80, D90, D100', 'Add Stocks', 3, '10/26/2018 9:52 PM', 'Parts', 'admin', NULL),
(153, 'Panasonic DMC-TZ3', 'Add Stocks', 4, '10/26/2018 9:52 PM', 'Parts', 'admin', NULL),
(154, 'Canon 450D, 500D, 550D, 600D, 60D, 1000D and 1100D', 'Add Stocks', 2, '6/20/2019 12:33 AM', 'Parts', 'admin', NULL),
(155, 'DELETE', 'Added', NULL, '6/20/2019 12:35 AM', 'Parts', 'admin', NULL),
(156, 'DELETE', 'Deleted', NULL, '6/20/2019 12:35 AM', 'Parts', 'admin', 'Wala lang trip ko lang\r\n'),
(157, 'Canon 450D, 500D, 550D, 600D, 60D, 1000D and 1100D', 'Updated', NULL, '6/20/2019 12:42 AM', 'Parts', 'admin', NULL),
(158, 'Canon EOS 5D Mark II 5D 2', 'Updated', NULL, '6/20/2019 12:43 AM', 'Parts', 'admin', NULL),
(159, 'Canon EOS 700D Rebel T5i Kiss X7i', 'Updated', NULL, '6/20/2019 12:44 AM', 'Parts', 'admin', NULL),
(160, 'CANON POWERSHOT A1000', 'Updated', NULL, '6/20/2019 12:45 AM', 'Parts', 'admin', NULL),
(161, 'CANON SPEEDLITE 430EX', 'Updated', NULL, '6/20/2019 12:45 AM', 'Parts', 'admin', NULL),
(162, 'FujiFilm FinePix S4000', 'Updated', NULL, '6/20/2019 12:45 AM', 'Parts', 'admin', NULL),
(163, 'Kodak EasyShare CX4310', 'Updated', NULL, '6/20/2019 12:46 AM', 'Parts', 'admin', NULL),
(164, 'Nikon D50, D70, D70S, D80, D90, D100', 'Updated', NULL, '6/20/2019 12:46 AM', 'Parts', 'admin', NULL),
(165, 'Nikon D600, D610, D3200 and D5200', 'Updated', NULL, '6/20/2019 12:46 AM', 'Parts', 'admin', NULL),
(166, 'Nikon SB700', 'Updated', NULL, '6/20/2019 12:47 AM', 'Parts', 'admin', NULL),
(167, 'Panasonic DMC-TZ3', 'Updated', NULL, '6/20/2019 12:47 AM', 'Parts', 'admin', NULL),
(168, 'Sony A7 II ILCE-7M2', 'Updated', NULL, '6/20/2019 12:47 AM', 'Parts', 'admin', NULL),
(169, 'Albott 70 Travel Portable DSLR Camera Tripod Monopod Flexible Head for Canon Nikon with Carry Bag', 'Updated', NULL, '6/20/2019 12:49 AM', 'Accessories', 'admin', NULL),
(170, 'Nikon SB700', 'Confirm', 10, '6/21/2019 3:05 PM', 'Parts', 'admin', 'Reservation');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `concern` varchar(255) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `schedule` (`schedule`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `concern`, `schedule`, `cnumber`, `remarks`, `status`, `deleted`) VALUES
(1, 'riyosandobal', 'My lens is broken', '10/19/2018 8:00 AM', '09770173716', 'Need to be fixed, ASAP!', 'Pending', 0),
(2, '', '', '', '', '', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(200) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand` (`brand`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `date_deleted`, `deleted`) VALUES
(1, 'Canon', NULL, 0),
(2, 'Fuji', NULL, 0),
(3, 'Kodak', NULL, 0),
(4, 'Nikon', NULL, 0),
(5, 'Panasonic', NULL, 0),
(6, 'Sony', NULL, 0),
(7, 'Amazon', NULL, 0),
(8, 'Kattee', NULL, 0),
(9, 'Ape Case', NULL, 0),
(10, 'Fotopro', NULL, 0),
(11, 'Albott', '10/19/2018 6:46 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `item_id`, `type`, `quantity`) VALUES
(5, 'johndoe', 10, 'Parts', 8),
(4, 'johndoe', 11, 'Parts', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date_deleted`, `deleted`) VALUES
(1, 'Battery Cover', NULL, 0),
(2, 'Body Rubber', NULL, 0),
(3, 'Camera Bag', NULL, 0),
(4, 'Cardslot', NULL, 0),
(5, 'Tripod', NULL, 0),
(6, 'Led', NULL, 0),
(7, 'Lens', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `date_deleted`, `deleted`) VALUES
(8, 'How do I protect my DSLR from moisture, rain and water?', 'Water Is unappealing For Your DSLR. There is no water proof DSLR. The professional DSLR cameras have some protection and resistant towards moisture and light rain showers but that does not mean you can shoot with them in rain without proper housing. It\'s always a risk. Once you suspect moisture has got inside, notice if your camera shows any signs of damage. It may be switching off automatically, battery draining quickly, or show error message. \r\nHow to deal to this problem?\r\nOnce your DSLR has got into contact with water, immediately remove the battery. Do not turn it back on otherwise power surge can damage your camera permanently. Once dry from outside you should keep it in a dry cabinet or a closed box with a dehumidifier. Make sure you take out your memory cards. Memory cards have exceptional surviving capability. There have been instances in the past where the memory card was found submerged in water but still worked when the files where checked. \r\nTips to avoid receiving the DSLR into trouble with water:\r\nAvoid water, moisture or splashy condition. Never switch your lenses during snowy, rainy or cold weather conditions. If you have to switch lenses, then do it inside the bag itself away from direct contact with moisture. Look for signs of moisture getting inside your lens. Sometime fungus grows inside the lens and you may have to take it to professional. Avoid your DSLR from coming in contact with water at all cost.\r\n', '10/19/2018 6:11 AM', 1),
(10, 'How do I protect my DSLR from heat?', 'Extreme weather conditions can cause trouble to normal functioning of camera. High heat environment may cause your camera to heat up excessively. Especially while shooting for long duration or making a long exposure photograph.\r\nDSLRs are made to withstand a wide range of temperature but that does not mean you can torcher them to extreme temperature for extended period of time.\r\nWorking under direct sunlight or keeping it in hot enclosed area like your car\'s boot where there is heat trap. An example of hot enclosed air would be the hot air trapped to your car\'s boot under the hot sun.\r\nThe polymer surface, glass coatings and plastic casings within your camera kit may turn out to be damaged by heat, so be watchful for them. When the heat is strong, the oils in your DSLR that act to lubricate the inner workings can indeed be dry or otherwise get separated.\r\n\r\nHow to Resolve This problem?\r\n\r\nWhen you touch your DSLR and realize that it overheated, leave it somewhere shady and let it cool down. Do not put it inside a fridge. It will cause rapid condensation and hence moisture will get inside. It is also advisable to remove the battery as it may leak due to overheating. An overheated battery is a fire hazard. Keep away from fire. Use telephoto lens while taking photographs of subjects that include fire.', '10/19/2018 6:11 AM', 1),
(5, 'Why is my LCD monitor is no longer working?', 'It might sound obvious but many DSLR cameras have the option to turn your monitor on and off so start by checking this is set to on. Take this time to check your power saving mode options too. This mode can turn your LCD off very quickly and could be the cause.\r\nAnother thing to check is your brightness levels. Sometimes, people inadvertently make it very dim, to the point where it\'s near-impossible to tell if your monitor is in fact on or off.\r\nIf all these camera settings are fine, you should try resetting your camera. Most DSLR cameras require you to remove the battery and memory card for 10 minutes before re-inserting them and turning it back on.\r\n', NULL, 0),
(7, 'I accidentally dropped off my DSLR on beach and it has sands on its lens, what am I supposed to do?', 'When your DSLR comes in contact with sand, it may be on the sensor of the camera or worse, the moving parts of the DSLR may get stuck. There may or may-not be an error message on your DSLR\'s screen. If the hair particle is on the sensor then you may get a soft/dark spot in all your images. Sensors are electronically charged so they attract dust particles and hair strands like a magnet.\r\n How to resolve this problem:\r\n\r\nNever expose the inner parts of camera while in dusty environment. When you change the lens always keep the DSLR facing downwards. You should try using the rocket blower  to blow off the dust or any physical particle present on the sensor or inside the camera. remember not to poke it to any of the inner parts of camera. If the particle is stuck on the sensor then there are three options.\r\na)	Try in the camera auto sensor clean option. However this may not be an option in all the camera models.\r\nb)	Use Sensor Swab . This is not recommended if you have not done it before.\r\nc)	Take it to a professional. Your only option here\'s to send your DSLR on a dealer/pro who will do the cleaning for you. They rescue your DSLR. They may also re-lube all the moving parts of your camera. It is a good idea to make use of a zip lock plastic when not using the camera in dusty environment. Another tip is not at all get low while shooting for a sandy area. Doing this can be inviting sands to hop in your lenses.\r\nYou should always keep your camera locked properly inside the camera bag when not in use.\r\n', NULL, 0),
(4, 'My camera isn\'t saving any photos or pictures, why is that?', 'Most likely this is an issue with your memory card, which could be full or corrupt or not inserted properly (generally, error messages will appear).\r\nThe best tactic is to insert a different memory card into your camera and to try taking pictures with it. If it works, chances are it\'s your existing memory card that\'s the problem. Note that some cameras also have a battery saving feature that might restrict photo saving so make sure your camera is charged first.\r\nIf so, look closely for any irregularities on the card. A thumb print on the metal stripes could be the cause, as could a crack or scratch. Clean it and try again. If it\'s still not working, it could be that your camera\'s firmware or software simply doesn\'t recognize it anymore so try inserting it into another card reader.\r\nFailing this, you should take the memory card to a camera repair shop to try and recover your photos.\r\n', NULL, 0),
(2, 'What should I do if I accidentally dropped my camera?', 'Firstly, take some deep breaths. There\'s nothing you can do about it now. When you\'ve stopped shaking from shock, start checking all the parts of your camera. Like the tip above, check the battery compartment, memory card slots, buttons, dials and body.\r\n\r\nIf they look in order, go ahead and try the power button. Hopefully it starts without any issues. If nothing happens, you may want to take it into a camera shop so they can take a look inside the camera body.\r\n', NULL, 0),
(3, 'My picture quality isn\'t great, it looks like it has spots or blobs on it.', 'The last thing you want to do is to take a perfect picture only to find it mired with dark spots or blobby patches. To avoid or remedy this, you need to work out if it\'s your lens or your sensor.\r\nYou can test this by taking photos of a plain sheet of A4 paper with each your lenses. Upload them to your computer and if the spots are the same on every photo, it means it\'s your sensor.\r\nIf the marks are constricted to one type of lens, try cleaning the lens head the right way, with accessories like air blowers and specialty lens cleaning tissues; cleaning with an inappropriate chemical or scratchy cloth can permanently damage the lens.\r\n', NULL, 0),
(1, 'Why is my DSLR won\'t turn on retain charge?', 'The most common reason for your camera not turning on is that your battery is defunct or not in place properly.\r\nThe first thing to do is to charge your battery then to make sure it\'s inserted properly into the compartment. You\'d be amazed how often we get people coming in with batteries that have just jolted slightly loose.\r\nOnce you\'ve secured it in place, check your dials, buttons and memory cards. If they seem to be functioning and in the right spot, go ahead and press the power button. If this doesn\'t work, you might need to replace the battery, or it could be something more terminal so go to any camera repairing shop.\r\n', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

DROP TABLE IF EXISTS `loginform`;
CREATE TABLE IF NOT EXISTS `loginform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'User',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `cnumber` varchar(20) NOT NULL,
  `created` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `verification` varchar(20) DEFAULT NULL,
  `newpass` varchar(20) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `cnumber` (`cnumber`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`, `status`, `firstname`, `lastname`, `bday`, `cnumber`, `created`, `date_deleted`, `verification`, `newpass`, `deleted`) VALUES
(1, 'admin', 'b26986ceee60f744534aaab928cc12df', 'Admin', 'Joshua', 'Ramos', '', '09647375868', 'August 22, 2018', NULL, 'Verified', '241510', 0),
(44, 'riyosandobal', '6119442a08276dbb22e918c3d85c1c6e', 'User', 'Rio', 'Sandoval', '', '09770173716', 'October 05, 2018', NULL, 'Verified', '602368', 0),
(49, 'auhsojsomar', 'b26986ceee60f744534aaab928cc12df', 'User', 'Auhsoj', 'Somar', '', '09484406141', 'October 07, 2018', NULL, 'Verified', '935442', 0),
(45, 'marcp213', 'b26986ceee60f744534aaab928cc12df', 'User', 'Marc ', 'Francisco', '', '09568115480', 'October 06, 2018', NULL, 'Verified', '', 0),
(46, 'Jayson', '5ccb61d0528b7779f25e8911a76c9aa1', 'User', 'Jayson', 'Tribo', '', '09150025691', 'October 06, 2018', NULL, '926395', '', 0),
(47, 'vdoctolero', '3a4e24a20ad52afef48852b613da483a', 'User', 'Vas', 'Doctolero', '', '09566119331', 'October 06, 2018', NULL, 'Verified', '', 0),
(50, 'grandemaeanne', 'a371146d4f942b174a424d30208f335b', 'User', 'Mae Anne', 'Francisco', '5/14/1999', '09062507549', 'October 17, 2018', '10/17/2018 5:58 PM', '944026', NULL, 1),
(51, 'nyarker', 'c44a471bd78cc6c2fea32b9fe028d30a', 'User', 'hi', 'hello', '1/6/2010', '09887832324', 'October 17, 2018', NULL, '745876', NULL, 0),
(52, '', 'd41d8cd98f00b204e9800998ecf8427e', 'User', '', '', '', '', 'October 28, 2018', NULL, '922164', NULL, 0),
(53, 'regiecawas', '25d55ad283aa400af464c76d713c07ad', 'User', 'Regie', 'Cawas', '5/13/1998', '09102983091', 'November 28, 2018', NULL, 'Verified', NULL, 0),
(54, 'yyyyyy', '5a05211ec33a102cb3665ac8b42fd3d0', 'User', 'sham', 'yu', '1/6/2010', '09667654432', 'May 27, 2019', NULL, 'Verified', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user`, `type`, `description`, `date_time`, `view`) VALUES
(18, 'auhsojsomar', 'Reservation', '3', '10/10/2018 12:49:41 AM', 1),
(19, 'riyosandobal', 'Reservation', '1', '10/17/2018 9:08:10 PM', 1),
(20, 'riyosandobal', 'Reservation', '1', '10/17/2018 11:22:39 PM', 1),
(21, 'riyosandobal', 'Reservation', '2', '10/18/2018 12:01:37 AM', 1),
(22, 'riyosandobal', 'Appointment', '10/19/2018 8:00 AM', '10/18/2018 1:19:58 AM', 1),
(23, '', 'Appointment', '', '10/31/2018 2:38:47 PM', 1),
(24, 'auhsojsomar', 'Reservation', '1', '6/21/2019 3:04:29 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `deleted`, `status`) VALUES
(1, '2111598659.jpeg', 'Canon EOS 5D Mark II 5D 2', 'Canon', 'Battery Cover', 76.62, 6, 'Battery Cover Repair Part for Canon EOS 5D Mark II 5D 2;Color: Black;Type: Steel;Condition: New\r\n', NULL, 0, 'Active'),
(2, '217780719.jpeg', 'FujiFilm FinePix S4000', 'Fuji', 'Battery Cover', 3194.47, 3, 'Camera Battery Cover Lid Door Replacement;Color: Black;Type: Hard Rubber;Condition: New', NULL, 0, 'Active'),
(3, '1675555108.jpeg', 'Kodak EasyShare CX4310', 'Kodak', 'Battery Cover', 345.59, 4, 'Camera Battery Cover Lid Door Replacement for Kodak;Color: Silver;Type: Steel;Condition: New', NULL, 0, 'Active'),
(4, '1507264185.jpeg', 'Nikon D50, D70, D70S, D80, D90, D100', 'Nikon', 'Battery Cover', 228.25, 5, 'Battery Cover Replacement for Nikon D50, D70, D70S, D80, D90, D100;Color: Black;Type: Hard Rubber;Condition: New', NULL, 0, 'Active'),
(5, '189553137.jpeg', 'Panasonic DMC-TZ3', 'Panasonic', 'Battery Cover', 744.44, 5, 'Camera Replacement Cover Lid For Panasonic DMC-TZ3;Color: White;Type: Hard Rubber;Condition: New', NULL, 0, 'Active'),
(6, '1390281051.jpeg', 'Sony A7 II ILCE-7M2', 'Sony', 'Battery Cover', 2021.79, 3, 'Camera Cover Lid Replacement for Sony;Color: Black;Type: Steel;Condition: New', NULL, 0, 'Active'),
(7, '1461154384.jpeg', 'Canon 450D, 500D, 550D, 600D, 60D, 1000D and 1100D', 'Canon', 'Cardslot', 216.2, 10, 'Camera replacement part;Condition: New', NULL, 0, 'Active'),
(8, '2066780390.jpeg', 'Nikon D600, D610, D3200 and D5200', 'Nikon', 'Cardslot', 265.72, 9, 'Camera replacement part;Condition: New', NULL, 0, 'Active'),
(9, '148481962.jpeg', 'Canon EOS 700D Rebel T5i Kiss X7i', 'Canon', 'Cardslot', 570.84, 2, 'Camera cardslot replacement part;Condition: New', NULL, 0, 'Active'),
(10, '1275375524.jpeg', 'CANON SPEEDLITE 430EX', 'Canon', 'Led', 2247.63, 5, 'Condition: New', NULL, 0, 'Active'),
(11, '1396533343.jpeg', 'Nikon SB700', 'Nikon', 'Led', 3211.36, 0, 'Condition: New', NULL, 0, 'Active'),
(12, '1725530348.jpeg', 'CANON POWERSHOT A1000', 'Canon', 'Lens', 641.42, 5, 'For old versions of Canon Camera', NULL, 0, 'Active'),
(13, '1703601518.jpeg', 'DELETE', 'Canon', 'Battery Cover', 100, 1, 'Dedelete ko to', '6/20/2019 12:35 AM', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `reservationdate` varchar(100) NOT NULL,
  `itemid` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `itemquantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `reservationid` bigint(20) NOT NULL,
  `deleted` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000006 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `username`, `reservationdate`, `itemid`, `category`, `itemquantity`, `status`, `reservationid`, `deleted`) VALUES
(1, 'riyosandobal', '10/19/2018 8:00 AM', 10, 'Parts', 6, 'Canceled', 1000001, 0),
(2, 'riyosandobal', '10/18/2018 8:00 AM', 9, 'Parts', 1, 'Reject', 1000002, 0),
(3, 'riyosandobal', '10/18/2018 8:30 AM', 9, 'Parts', 1, 'Confirmed', 1000003, 0),
(4, 'riyosandobal', '10/18/2018 8:30 AM', 8, 'Accessories', 1, 'Pending', 1000003, 0),
(1000005, 'auhsojsomar', '6/22/2019 8:00 AM', 11, 'Parts', 10, 'Confirmed', 1000004, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
