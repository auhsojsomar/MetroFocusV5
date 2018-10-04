-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2018 at 01:42 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u740508665_metro`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `status`, `deleted`) VALUES
(1, '20462.jpeg', 'Accessories 1', 'Nikon', 'Card Slot', 200, 50, 'Accessories Description 1', NULL, 'Active', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`id`, `name`, `action`, `quantity`, `datemod`, `type`, `user`, `description`) VALUES
(1, 'w', 'Confirm', 1, 'we', 'we', 'we', 'aw'),
(2, 'Parts 1', 'Confirm', 1, '10/3/2018 1:10 AM', 'Parts', 'admin', 'Reservation'),
(3, 'Accessories 1', 'Confirm', 1, '10/3/2018 1:12 AM', 'Accessories', 'admin', 'Reservation'),
(4, '', 'Confirm', 1, '10/3/2018 1:16 AM', 'Parts', 'admin', 'Reservation'),
(5, 'Accessories 1', 'Reject', 1, '10/3/2018 1:17 AM', 'Accessories', 'admin', 'Reservation'),
(6, '', 'Confirm', 1, '10/3/2018 1:19 AM', '10/03/2018 08:00', 'admin', 'Reservation'),
(7, '', 'Confirm', 1, '10/3/2018 1:20 AM', '10/03/2018 08:00', 'admin', 'Reservation'),
(8, '', 'Confirm', 1, '10/3/2018 1:25 AM', 'Parts', 'admin', 'Reservation'),
(9, 'Parts 1', 'Confirm', 1, '10/3/2018 1:47 AM', 'Parts', 'admin', 'Reservation'),
(10, 'Parts 1', 'Reject', 1, '10/3/2018 1:47 AM', 'Parts', 'admin', 'Reservation'),
(11, 'Parts 1', 'Done', 1, '10/3/2018 2:44 AM', 'Parts', '', 'Reservation'),
(12, 'Parts 1', 'Done', 1, '10/3/2018 2:46 AM', 'Parts', '', 'Reservation'),
(13, 'Parts 1', 'Done', 1, '10/3/2018 2:47 AM', 'Parts', 'admin', 'Reservation'),
(14, 'Parts 1', 'Done', 1, '10/3/2018 2:53 AM', 'Parts', 'admin', 'Reservation'),
(15, 'Parts 1', 'Reject', 1, '10/3/2018 2:53 AM', 'Parts', 'admin', 'Reservation'),
(16, 'Parts 1', 'Reject', 1, '10/3/2018 2:53 AM', 'Parts', 'admin', 'Reservation'),
(17, 'Parts 1', 'Done', 1, '10/3/2018 2:53 AM', 'Parts', 'admin', 'Reservation'),
(18, 'auhsojsomar', 'Confirm', NULL, '10/3/2018 3:02 AM', 'Appointment', 'admin', NULL),
(19, 'auhsojsomar', 'Reject', NULL, '10/3/2018 3:06 AM', 'Appointment', 'admin', NULL),
(20, 'auhsojsomar', 'Confirm', NULL, '10/3/2018 3:12 AM', 'Appointment', 'admin', NULL),
(21, 'auhsojsomar', 'Reject', NULL, '10/3/2018 3:12 AM', 'Appointment', 'admin', NULL),
(22, 'auhsojsomar', 'Reject', NULL, '10/3/2018 3:16 AM', 'Appointment', 'admin', NULL),
(23, 'auhsojsomar', 'Edited', NULL, '10/3/2018 3:21 AM', 'User', 'admin', NULL),
(24, 'Parts 1', 'Done', 1, '10/4/2018 9:41 PM', 'Parts', 'admin', 'Reservation');

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
(1, 'auhsojsomar', 'What the fuck', '10/03/2018 08:00', '09484406141', 'Are you doing?', 'Pending', 0),
(2, 'auhsojsomar', 'you\'re', '10/03/2018 09:30', '09484406141', 'road', 'Pending', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `date_deleted`, `deleted`) VALUES
(1, 'Kodak', NULL, 0),
(4, 'Nikon', NULL, 0),
(5, 'Fuji', NULL, 0),
(60, 'Canon', NULL, 0),
(61, 'Panasonic', NULL, 0),
(62, 'Sony', NULL, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `item_id`, `type`, `quantity`) VALUES
(244, 'user@gmail.com', 5, 'Parts', 28);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date_deleted`, `deleted`) VALUES
(1, 'Battery Cover', NULL, 0),
(3, 'Card Slot', NULL, 0),
(4, 'Lens', NULL, 0),
(5, 'Body Rubber', NULL, 0),
(6, 'DSLR Mainboard', NULL, 0),
(7, 'DSLR Powerboard', NULL, 0),
(8, 'LED', NULL, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `date_deleted`, `deleted`) VALUES
(1, 'Why is my DSLR won′t turn on retain charge?', 'The most common reason for your camera not turning on is that your battery is defunct or not in place properly.The first thing to do is to charge your battery then to make sure it′s inserted properly into the compartment. You′d be amazed how often we get people coming in with batteries that have just jolted slightly loose.Once you′ve secured it in place, check your dials, buttons and memory cards. If they seem to be functioning and in the right spot, go ahead and press the power button. If this doesn′t work, you might need to replace the battery, or it could be something more terminal so go to any camera repairing shop.', NULL, 0),
(7, 'What should I do if I accidentally dropped my camera?', 'Firstly, take some deep breaths. There′s nothing you can do about it now. When you′ve stopped shaking from shock, start checking all the parts of your camera. Like the tip above, check the battery compartment, memory card slots, buttons, dials and body. If they look in order, go ahead and try the power button. Hopefully it starts without any issues. If nothing happens, you may want to take it into a camera shop so they can take a look inside the camera body.', NULL, 0),
(8, 'My picture quality isn′t great, it looks like it has spots or blobs on it.', 'The last thing you want to do is to take a perfect picture only to find it mired with dark spots or blobby patches. To avoid or remedy this, you need to work out if it′s your lens or your sensor. You can test this by taking photos of a plain sheet of A4 paper with each your lenses. Upload them to your computer and if the spots are the same on every photo, it means it′s your sensor. If the marks are constricted to one type of lens, try cleaning the lens head the right way, with accessories like air blowers and specialty lens cleaning tissues; cleaning with an inappropriate chemical or scratchy cloth can permanently damage the lens.', NULL, 0),
(9, 'My camera isn?t saving any photos or pictures, why is that?', 'Most likely this is an issue with your memory card, which could be full or corrupt or not inserted properly (generally, error messages will appear). The best tactic is to insert a different memory card into your camera and to try taking pictures with it. If it works, chances are it?s your existing memory card that?s the problem. Note that some cameras also have a battery saving feature that might restrict photo saving so make sure your camera is charged first. If so, look closely for any irregularities on the card. A thumb print on the metal stripes could be the cause, as could a crack or scratch. Clean it and try again. If it?s still not working, it could be that your camera?s firmware or software simply doesn?t recognize it anymore so try inserting it into another card reader. Failing this, you should take the memory card to a camera repair shop to try and recover your photos.', NULL, 0);

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
  `cnumber` varchar(255) DEFAULT NULL,
  `created` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`, `status`, `firstname`, `lastname`, `cnumber`, `created`, `date_deleted`, `deleted`) VALUES
(1, 'admin', 'b26986ceee60f744534aaab928cc12df', 'Admin', 'Joshua', 'Ramos', '09484406141', 'August 22, 2018', NULL, 0),
(23, 'auhsojsomar', 'b26986ceee60f744534aaab928cc12df', 'User', 'Joshua', 'Ramos', '09484406141', 'September 25, 2018', NULL, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `deleted`, `status`) VALUES
(1, '10601.jpeg', 'Parts 1', 'Kodak', 'Card Slot', 100, 10, 'Parts Description 1', NULL, 0, 'Active');

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
  `deleted` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `username`, `reservationdate`, `itemid`, `category`, `itemquantity`, `status`, `deleted`) VALUES
(1, 'auhsojsomar', '10/03/2018 08:00', 1, 'Parts', 1, 'Done', 0),
(2, 'auhsojsomar', '10/03/2018 08:00', 1, 'Accessories', 1, 'Done', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
