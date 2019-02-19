-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 02:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-projet-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idcat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idcat`, `type`) VALUES
(1, '\r\nHome appliance brands'),
(2, 'Cooking appliances'),
(3, '\r\nFood preparation appliances'),
(4, 'Vacuum cleaners');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcom` int(11) NOT NULL,
  `content` text NOT NULL,
  `comment_date` date NOT NULL,
  `idpro` int(11) NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcom`, `content`, `comment_date`, `idpro`, `idp`) VALUES
(1, 'This isn’t even about a brand crisis. Customer comments on social media represent expectations — 83% of the writers require brand responses within 24 hours, finds a new survey. Here’s what marketers need to know about what customers expect.', '2019-02-12', 1, 2),
(2, 'This isn’t even about a brand crisis. Customer comments on social media represent expectations — 83% of the writers require brand responses within 24 hours, finds a new survey. Here’s what marketers need to know about what customers expect.', '2019-02-12', 2, 2),
(3, 'This isn’t even about a brand crisis. Customer comments on social media represent expectations — 83% of the writers require brand responses within 24 hours, finds a new survey. Here’s what marketers need to know about what customers expect.', '2019-02-12', 3, 2),
(4, 'This isn’t even about a brand crisis. Customer comments on social media represent expectations — 83% of the writers require brand responses within 24 hours, finds a new survey. Here’s what marketers need to know about what customers expect.', '2019-02-12', 4, 2),
(5, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-11', 5, 3),
(6, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-11', 4, 3),
(7, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-11', 2, 3),
(8, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-10', 6, 3),
(9, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-08', 7, 3),
(10, '“There’s certainly an empowerment to the consumer to share feedback and express themselves when they’re unhappy,” Somal said. “But a business is also empowered with the same platform and the same opportunities.”', '2019-02-07', 1, 3),
(11, '\"It\'s not like we\'re telling people, \'You have to fix this immediately within a day or less or an hour or less,\' \" said Laura Reagen, CEO of Activate Health. \"But the company\'s response has to make people feel like they\'ve been heard.\"', '2019-02-13', 1, 1),
(12, 'are you going to bring back narrow women’s shoes!?', '2019-02-11', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ido` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `state` varchar(30) NOT NULL,
  `idpro` int(11) NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ido`, `quantity`, `order_date`, `state`, `idpro`, `idp`) VALUES
(1, 2, '2019-02-13', 'suspended', 1, 2),
(2, 3, '2019-02-13', 'suspended', 4, 2),
(3, 2, '2019-02-13', 'suspended', 5, 2),
(4, 3, '2019-02-14', 'suspended', 1, 3),
(5, 6, '2019-02-13', 'suspended', 6, 3),
(6, 4, '2019-02-13', 'suspended', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `idp` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `type` enum('client','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`idp`, `first_name`, `last_name`, `email`, `mdp`, `adress`, `type`) VALUES
(1, 'MECHEREF', 'Adel Youcef', 'a.mecheref@esi-sba.dz', '25f9e794323b453885f5181f1b624d0b', 'Algeria , Alger , Zeralda 16000', 'admin'),
(2, 'SEDDIK', 'Walid', 'w.seddik@esi-sba.dz', '25f9e794323b453885f5181f1b624d0b', 'Algeria , Oran Senia 31000', 'client'),
(3, 'HAMIDI', 'Oussama', 'o.hamidi@esi-sba.dz', '25f9e794323b453885f5181f1b624d0b', 'Algeria , Oran city sabah 31000', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idpro` int(11) NOT NULL,
  `designation` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_price` float NOT NULL,
  `sale_price` float NOT NULL,
  `color` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `idcat` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idpro`, `designation`, `quantity`, `purchase_price`, `sale_price`, `color`, `picture`, `idcat`, `name`) VALUES
(1, 'The impact of the global economic recession was forecasted to cause global shipments of home appliances to fall by 8% in 2009. Countries in Western and Eastern Europe ', 50, 3000, 6000, 'black', 'pic1.jpg', 1, 'réfrigérateur'),
(2, 'The market for semiconductors in major home appliances will grow to over $1.5 billion by 2013 as penetration of displays, touch controls, and variable speed motor control rises.', 40, 4500, 8000, 'black', 'pic2.jpg', 1, 'mixeur'),
(3, 'Euromonitor International\'s rankings place Haier\'s refrigeration appliances and Haier\'s home laundry appliances first by global brand name, with 10.4% and 8.4% retail volume market share respectively, up 3.7 point and 1.5 point from 2008.', 30, 15000, 30000, 'black', 'pic3.jpg', 2, 'multi-mixeur'),
(4, 'Euromonitor International\'s rankings place Haier\'s refrigeration appliances and Haier\'s home laundry appliances first by global brand name, with 10.4% and 8.4% retail volume market share respectively, up 3.7 point and 1.5 point from 2008.', 25, 5000, 10000, 'black', 'pic4.jpg', 2, 'micro onde'),
(5, 'The BT126 rod mixer has stainless steel blades and foot, and ergonomic handle for easy use.', 20, 4000, 8000, 'black', 'pic5.jpg', 3, 'Hand blender'),
(6, 'Handsfree operation\r\nHandsfree operation for all jars\r\n\r\nWarranty\r\n5 year warranty on motor ; 2 year warranty on body', 30, 2500, 5000, '#f200b9', 'pic6.jpg', 3, 'Premio i'),
(7, 'The T 10/1 Adv brings new levels of quality and value to the contract cleaner tub vacuum sector. With key features designed to keep purchase and maintenance costs low, the T 10/1 Adv offers the toughness, simplicity, performance and value contract cleaners demand.', 40, 6000, 12000, '#ffff00', 'pic7.jpg', 4, 'Dry vacuum cleaner '),
(8, 'Car Vacuum Cleanercar vacuum cleaner type: 1-hand-heldcar vacuum cleaner power: 45w', 50, 2500, 5000, 'blue', 'pic8.jpg', 4, 'Car Vacuum Cleaner ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcom`),
  ADD KEY `product-comment` (`idpro`),
  ADD KEY `person-comment` (`idp`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ido`),
  ADD KEY `product-orders` (`idpro`),
  ADD KEY `person-orders` (`idp`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idpro`),
  ADD KEY `categorie-product` (`idcat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `person-comment` FOREIGN KEY (`idp`) REFERENCES `person` (`idp`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `person-orders` FOREIGN KEY (`idp`) REFERENCES `person` (`idp`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `categorie-product` FOREIGN KEY (`idcat`) REFERENCES `categorie` (`idcat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
