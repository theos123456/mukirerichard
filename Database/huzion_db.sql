-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 12:05 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huzion_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `dist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dist_id`),
  KEY `prov_id_idx` (`prov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dist_id`, `name`, `prov_id`) VALUES
(1, 'Musanze', 1),
(2, 'Rulindo', 1),
(3, 'Gakenke', 1),
(4, 'Gicumbi', 1),
(5, 'Burera', 1),
(6, 'Ruhango', 2),
(7, 'Nyanza', 2),
(8, 'Huye', 2),
(9, 'Nyamagabe', 2),
(10, 'Nyaruguru', 2),
(11, 'Gisagara', 2),
(12, 'Kamonyi', 2),
(13, 'Muhanga', 2),
(14, 'Nyagatare', 3),
(15, 'Bugesera', 3),
(16, 'Rwamagana', 3),
(17, 'Ngoma', 3),
(18, 'Kayonza', 3),
(19, 'Gatsibo', 3),
(20, 'Kirehe', 3),
(21, 'Rusizi', 4),
(22, 'Nyamasheke', 4),
(23, 'Rubavu', 4),
(24, 'Karongi', 4),
(25, 'Rutsiro', 4),
(26, 'Ngororero', 4),
(27, 'Nyabihu', 4),
(28, 'Gasabo', 5),
(29, 'Kicukiro', 5),
(30, 'Nyarugenge', 5),
(31, 'kicukiro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message_tbl`
--

CREATE TABLE IF NOT EXISTS `message_tbl` (
  `msg_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(45) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message_tbl`
--

INSERT INTO `message_tbl` (`msg_id`, `sender_name`, `sender_email`, `message`, `time`, `date`) VALUES
(1, 'UWINEZA JOEL', 'joel53@gmail.com', 'hello sir,\r\ni would like to thank you for your invaluable support you give us', '08:24:42', 'Tue-24-Jul-2018'),
(2, 'muhawenimana', 'nani@gmail.com', 'hello', '08:31:25', 'Tue-24-Jul-2018'),
(3, 'hirwa henry', 'henryh@yahoo.com', 'Mwiriwe!\r\ntwanyuzwe na service muduha murakoze', '11:56:30', 'Tue-24-Jul-2018'),
(4, 'nmj,k.', 'bvnm@gmail.com', 'ggfg', '10:58:18', 'Fri-27-Jul-2018'),
(5, 'hirwa henry', 'henryh@yahoo.com', 'MORNING SIR', '06:19:47', 'Fri-03-Aug-2018'),
(6, 'hirwa henry', 'henryh@yahoo.com', 'MORNING SIR', '06:19:47', 'Fri-03-Aug-2018');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_publication` varchar(45) DEFAULT NULL,
  `payment_method` varchar(45) DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL,
  `published_id` int(11) DEFAULT NULL,
  `publishing_price_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `published_id_idx` (`published_id`),
  KEY `ssn_idx` (`ssn`),
  KEY `publishing_price_id_idx` (`publishing_price_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) DEFAULT NULL,
  `pub_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pub_id_idx` (`pub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `pub_id`) VALUES
(1, 'gallery/images.jpg', 3),
(2, 'gallery/images (2).jpg', 0),
(3, 'gallery/Jellyfish.jpg', 8707),
(4, 'gallery/Jellyfish.jpg', 8791),
(5, 'gallery/Jellyfish.jpg', 4758),
(6, 'gallery/Jellyfish.jpg', 2202),
(7, 'gallery/Jellyfish.jpg', 7006),
(8, 'gallery/Jellyfish.jpg', 2982),
(9, 'gallery/Jellyfish.jpg', 4692),
(10, 'gallery/Jellyfish.jpg', 3003),
(11, 'gallery/images (8).jpg', 611),
(12, 'gallery/Penguins (1).jpg', 611),
(13, 'gallery/Desert (1).jpg', 611),
(14, 'gallery/images (9).jpg', 8333),
(15, 'gallery/images (10).jpg', 8333),
(16, 'gallery/Desert (1).jpg', 8333),
(17, 'gallery/images (11).jpg', 8333);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `prov_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`prov_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`prov_id`, `name`) VALUES
(1, 'Northern'),
(2, 'Southern'),
(3, 'Eastern'),
(4, 'Western'),
(5, 'Kigali city');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `pub_id` int(5) NOT NULL,
  `prod_name` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `category` varchar(145) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `unit_price` varchar(100) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pub_date` varchar(50) NOT NULL,
  `publisher` int(11) NOT NULL,
  `dist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pub_id`),
  KEY `dist_id_idx` (`dist_id`),
  KEY `publisher` (`publisher`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`pub_id`, `prod_name`, `model`, `category`, `sub_category`, `unit_price`, `address`, `description`, `pub_date`, `publisher`, `dist_id`) VALUES
(3, 'Techno w3', 'Techo', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'sonatube', 'the best phone that help you to communicate with your friends by chatting,calling and so on and Also help you to capture the real pictures', '', 6696, 29),
(4, 'Techno w3', 'Samsung A2', 'Mobile phone & Tablets', 'Mobile phones', '50000$', 'nyenyeri', 'red colored phone', '', 1370, 29),
(8791, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(4758, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(2202, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(7006, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(2982, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(4692, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(3003, 'Techno w3', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '120000Frw', 'nyenyeri', 'Red phone', '06-08-2018', 1370, 7),
(611, 'samsung tablet', 'Hp 250', 'Mobile phone & Tablets', 'Mobile phones', '50000$', 'sonatube', 'red phones', '06-08-2018', 1370, 7),
(8333, 'Techno w3', 'Samsung A2', 'Mobile phone & Tablets', 'Mobile phones', '50000$', 'nyenyeri', 'Red tablet', '06-08-2018', 1370, 0);

-- --------------------------------------------------------

--
-- Table structure for table `publishing_price`
--

CREATE TABLE IF NOT EXISTS `publishing_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publishing_price`
--

INSERT INTO `publishing_price` (`id`, `amount`, `type`) VALUES
(1, 20000, 'Video'),
(2, 10000, 'audio');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ssn_idx` (`ssn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `username`, `password`, `ssn`) VALUES
(1, 'aba', 'remy', 6696),
(2, 'do', 'it', 2752),
(3, '', '12345', 4009),
(4, 'kuki', '12q', 8824),
(5, 'user1', '12345', 1370),
(6, 'bobo', 'bobo', 4803);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pubprice` varchar(45) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `musician` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `unit_price` int(6) DEFAULT NULL,
  `description` varchar(300) NOT NULL,
  `file` varchar(400) NOT NULL,
  `publisher` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `pubprice`, `name`, `musician`, `category`, `type`, `unit_price`, `description`, `file`, `publisher`) VALUES
(1, '1000 frw', 'we are here', 'Alicia keys', 'RnB', 'video', 12000, 'Good song to listen', 'songs/Alicia Keys - We Are Here.MP4', 6696),
(2, '1000 frw', 'say yes Jesus', ' Michelle Williams ft. Kelly Rowland, Beyonce', 'Gospel', 'video', 25000, '_Say Yes_ - Michelle Williams ft. Kelly Rowland, Beyonce (2015 Stellar Awards)it is the best gospel song that remind us to trust in Jesus because when Jesus say anthing to us it have to be.', 'songs/_Say Yes_ - Michelle Williams ft. Kelly Rowland, Beyonce (2015 Stellar Awards).mp4', 6696),
(3, '1000 frw', 'The kingdom', 'Alyxx Dione - Chingalinga ft. Jason Derulo', 'RnB', 'video', 30, 'Alyxx Dione - Chingalinga ft. Jason Derulo that song it is the magic music that full of the high definition & classic image and best dance', 'songs/Alyxx Dione - Chingalinga ft. Jason Derulo.mp4', 6696),
(4, '1000 frw', 'Kami', 'kidGaju ft The Ben', 'RnB', 'video', 4800, 'the best rwandan music', 'songs/Kami By Kid Gaju Ft The Ben Official Video Clipe G Pac Promoteur2017.mp4(1).mp3', 1370),
(5, '1000 frw', 'I Know who i am', 'Sinach', 'Gospel', 'video', 20, 'the best gospel music', 'songs/i know who I am.mp4', 1370),
(6, '1000 frw', 'Boutique', 'Mr Kagame', 'RnB', 'video', 4800, 'the best rwandan music', 'songs/Boutique_by_Mr_Kagame(Official_Video_2017).mp4', 1370),
(7, '1000', 'hoziana', 'ambassador', 'RnB', 'video', 12000, 'the best gospel song', 'songs/Hoziana by Ambassadors of Christ Choir 2014 - YouTube[via torchbrowser.com].mp4', 6696);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ssn` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(105) DEFAULT NULL,
  `telephone` varchar(15) NOT NULL,
  `work_with` varchar(8) NOT NULL DEFAULT 'none',
  `title` varchar(45) DEFAULT NULL,
  `national_id` varchar(16) NOT NULL,
  `country` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `dist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ssn`),
  KEY `dist_id_idx` (`dist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ssn`, `fname`, `lname`, `email`, `telephone`, `work_with`, `title`, `national_id`, `country`, `address`, `dist_id`) VALUES
(1370, 'Byagutangaza', 'Theoneste', 'theos@gmail.com', '0782134554', 'Whatsapp', 'Publisher', '1198947749830948', 'rwanda', 'Muko', 4),
(2752, 'Hategekimana  ', 'olivier', 'hategpeter23@gmail.com', '0789112312', '', 'Publisher', '1232343434565656', 'RWANDA', 'cyanika', 23),
(4803, 'Muhawenimana', 'jean bosco', 'jboscom1@yahoo.com', '0782134554', 'Whatsapp', 'Admin', '1198947749830948', 'Rwanda', 'Rubona', 2),
(6696, 'ABAYO', 'Remy', 'abare12@gmail.com', '0788990023', 'Whatsapp', 'Publisher', '1199949023332434', 'RWANDA', 'Kinihira', 2),
(8824, 'Rukundo', 'leona', 'leonakuki@gmail.com', '0783434212', 'Whatsapp', 'Publisher', '1198947749830942', 'rwanda', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
