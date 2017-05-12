-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2017 at 06:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitbody`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_image`) VALUES
(2, 'iso-star', 'Description big hist', 'image.png'),
(4, 'olimp', 'final desc', 'logoolimp.png'),
(5, 'amix', 'Descreption', 'image.png'),
(6, 'flex', 'deteks', 'ihjl.png'),
(7, 'mp nutrition', 'destroy', 'ljupco.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `supplement_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_promo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `supplement_id`, `category_id`, `product_name`, `product_image`, `product_description`, `product_price`, `product_promo`) VALUES
(1, 9, 4, 'Whey Protein Complex 100%', 'wheyprotein.png', 'Description', 1800, 0),
(2, 8, 4, 'Amino olimp 9000', 'amino9000.jpg', 'A comprehensive protein preparation, in which the top quality enzymatic hydrolisate of the two best sources of animal protein - whey protein and chicken protein - are the main source of proteins. This combination ensures obtaining an amino acid profile not present in any other preparation based on hydrolyzed protein. Additionally, the use of chicken protein hydrolisate in ANABOLIC AMINO® 9000 MEGA TABS® increases over 6 times the content of glycine, two times of L-arginine, 1.8 times of L-proline and 1.4 times of L-alanine. Glycine participates in the transfection of signals in the central nervous system serving as the transmitter (NMDA receptor activator), constitutes the substrate for the synthesis of components of nucleic acids (necessary for synthesis of protein) and contributes to the correct performance of hematopoietic processes (hem synthesis). L-alanine in addition to its building function of body structural proteins, is used in the liver for synthesis of glucose, thus protecting against muscle cannibalism (when taken before training) or contributing to rapid supplementation of energy reserves and protein synthesis (taken after training). The two times higher content of L-arginine in ANABOLIC AMINO® 9000 MEGA TABS® compared to standard protein hydrolisate available on the market causes the increased synthesis of nitrogen oxide, positively contributing to muscle blood flow and supplying them with nutrition macroelements. In addition the significant supply of L-arginine in ANABOLIC AMINO® 9000 MEGA TABS® has a stimulating effect on the secretion of growth hormone, which is very important during the post-exercise period. It is also important that L-arginine, belonging to the group of alkaline amino acids, plays a major role in maintaining the acidic-alkaline balance of the body, strongly distorted by intensive training. For this reason the very high content of L-arginine in ANABOLIC AMINO® 9000 MEGA TABS® is so important.', 1890, 1),
(3, 4, 4, 'ULTIMATE ANTIOXIDANT', 'ultimate-anti.png', 'img.png', 780, 1),
(4, 11, 5, 'creatin', 'monihidrate.jpg', 'amix.png', 900, 1),
(5, 11, 4, 'Creatin Xplode', '1493378231.png', '', 150, 0),
(6, 11, 7, 'MusclePharm Combat Protein', 'Combat-Protein.jpg', '', 1900, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

CREATE TABLE `supplements` (
  `supplements_id` int(11) NOT NULL,
  `supplement_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`supplements_id`, `supplement_name`) VALUES
(1, 'vitamini'),
(2, 'minerali'),
(3, 'vitaminsko-mineralni-kompleksi'),
(4, 'antioksidanti'),
(5, 'biljni-ekstrakti'),
(6, 'esencijalne-masne-kiseline'),
(7, 'zastita-zglobova'),
(8, 'amino-kiseline'),
(9, 'proteini'),
(10, 'sagorevaci-masti'),
(11, 'kreatin'),
(12, 'povecanje-testosterona-i-hormona-rasta'),
(13, 'sportska-oprema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `fk_supplement_id` (`supplement_id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `supplements`
--
ALTER TABLE `supplements`
  ADD PRIMARY KEY (`supplements_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supplements`
--
ALTER TABLE `supplements`
  MODIFY `supplements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_supplement_id` FOREIGN KEY (`supplement_id`) REFERENCES `supplements` (`supplements_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
