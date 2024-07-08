-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 11:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecream`
--
CREATE DATABASE IF NOT EXISTS `icecream` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icecream`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `image` varchar(40) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `name`, `price`, `username`, `image`, `quantity`, `total`) VALUES
(13, 'Cone', 50, '', 'img/vcone1.jpg', 2, 100),
(14, 'Cone', 50, '', 'img/vcone1.jpg', 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `mobileno` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `city`, `mobileno`, `email`, `feedback`) VALUES
(1, 'Bansi k.ishotiya', 'gonal', 90678678090, 'bansi107@gmail.com', 'very good'),
(2, 'jensi j.vekariya', 'ahemdabad', 9909569650, 'jensi126@gmail.com', 'your site is useful in summer vacation'),
(3, 'shivani n. patel', 'anida', 9978588222, 'shivani.123@gmail.co', 'your site is  userful for online ice cream shopping'),
(4, 'anjel a. ladola', 'Surat', 7896778987, 'anjel120@gmail.com', 'A Good ratio of vanilla to chocolate makes this perfect sized ice cream bar delicious'),
(5, 'vishva pachani', 'surat', 9035678657, 'vishva123@gmail.com', 'Not Provide Online Payment Feasility'),
(6, 'nensi patel', 'maheshana', 9078989756, 'nensipatel@gmail.com', 'Your Site Useful For Best Quality Products'),
(7, 'dhruvi a. vekariya', 'junagadh', 7865767456, 'dhrvi11@gmail.com', 'You Are Provides Fast Home Delivery'),
(8, 'pali d. sandandiya', 'Jaipur', 8238252320, 'pallsandaniya@gmail.', 'Your Site Limitation Is Not For All Areas '),
(9, 'rachita K. jagani', 'Ahemdabad', 8969867598, 'rachitapatel1@gmail.', 'Your Project In Require All Adavance Feactures'),
(10, 'granthi r. patel', 'upleta', 8067847689, 'granthi@gmail.com', 'You Can Provide Many Standard Companies Products');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'jensi', 'jensi123'),
(2, 'shivani', 'shivani123'),
(3, 'pallavi', 'palllavi123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `company` varchar(20) NOT NULL,
  `flavour` varchar(100) NOT NULL,
  `description` varchar(70) NOT NULL,
  `sugar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `company`, `flavour`, `description`, `sugar`) VALUES
(1, 'Cone', '50', 'vcone1.jpg', 'vadilal', 'kaju', '100ml', 'withsugar'),
(2, 'shake', '170', 'p4 (15).jpg', 'amul', 'chocolate', '190', 'withsugar'),
(3, 'cream', '160', 'p7 (4).jpg', 'hawmor', 'chocolate', '70ml', 'withsugar'),
(4, 'Chocolate Disc', '250', 'p8 (17).jpg', 'baskiabarry', 'Turbo(Chocolate Disc)', '110ml', 'withsugar'),
(5, 'cup', '250', 'p9 (13).jpg', 'vadilal', 'chocolate', '90ml', 'withsugar'),
(6, 'kulfi', '50', 'vcandy31.jpg', 'amul', 'Chowpaty Kulfi', '50ml', 'withsugar'),
(7, 'shake', '140', 'p10 (14).jpg', 'shital', 'Orange ', '60ml', 'withsugar'),
(8, 'shake', '250', 'p2 (11).jpg', 'amul', 'chocholate', '60ml', 'withsugar'),
(9, 'shake', '170', 'p10 (10).jpg', 'baskiabarry', 'mango', '60ml', 'withsugar'),
(10, 'familypack', '270', 'vfp7.png', 'amul', 'pishta', '60ml', 'withsugar'),
(11, 'pasti', '170', 'p7 (2).jpg', 'vadilal', 'mix', '55ml', 'withsugar'),
(12, 'cup', '70', 'vcup31.jpg', 'vadila', 'chocolate', '55ml', 'withsugar'),
(13, 'pasti', '220', 'p21.jpg', 'br', 'rainbo', '60ml', 'withsugar'),
(14, 'familypake', '270', 'vfp2.jpg', 'vadila', 'Chocobar', '60ml', 'withsugar'),
(15, 'shake', '140', 'p2 (2).jpg', 'oreo', 'oreo', '60ml', 'withsugar'),
(16, 'pake', '300', 'p10 (15).jpg', 'hawmor', 'Pakka Aam', '100ml', 'withsugar'),
(17, 'shake', '130', 'p4 (8).jpg', 'hawmor', 'grapsh', '65ml', 'withsugar'),
(18, 'Candy', '50', 'candy5.jpg', 'br', 'grapsh', '60ml', 'withsugar'),
(19, 'Candy', '40', 'mcandy24.png', 'Momai', 'Pan Masti', '60ml', 'withsugar'),
(20, 'Candy', '50', 'mcone6.jpg', 'Momai', 'Elaichi Kulfi', '60ml', 'withsugar');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(15) NOT NULL,
  `item` varchar(15) NOT NULL,
  `total` varchar(17) NOT NULL,
  `payment` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `address`, `city`, `item`, `total`, `payment`) VALUES
(1, 'khushi kansagra', 'Aerodromme,\r\nJamanagar', 'Jamanagar', 'Family Pack', '570', 570),
(2, 'janant juberi', 'sun city', 'surat', 'cup icecream', '50', 50),
(3, 'pinal patel', 'rajkot', 'ahemdabad', 'cup icecream', '50', 50),
(4, 'sima', 'gopi nagar,near ram temple', 'mumbai', 'cone', '2', 50),
(5, 'janki', 'vashudev nagar,near ved choke', 'ahemdabad', 'shake', '70', 70),
(6, 'vansi', 'mahavir nagar,gageja school near', 'surat', 'thick shake', '4', 250),
(7, 'priya', 'gokuldham,powder gali', 'rajkot', 'brovni', '320', 320),
(8, 'armi', 'bansi seri,motibag', 'junagadh', 'candy', '50', 50),
(9, 'tulshi', 'dharmnager,near temple', 'rajkot', 'cone', '70', 70),
(10, 'aneri', 'hanuman nager,jajra road', 'upleta', 'pasty', '70', 70),
(11, 'jensi j. vekariya', 'Krishna Part-2,\r\n', 'ahemdabad', 'Cone', '100', 100),
(12, 'jensi j. vekariya', 'Krishna Part-2,\r\n', 'ahemdabad', 'cup', '500', 500),
(13, 'jensi j. vekariya', 'Krishna Part-2,\r\n', 'ahemdabad', 'sake', '500', 500);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobileno` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `city`, `pincode`, `state`, `country`, `username`, `password`, `gender`, `mobileno`, `email`, `dob`) VALUES
(1, 'jensi j. vekariya', 'Krishna Part-2,\r\n', 'ahemdabad', 356789, 'Gujarat', 'India', 'admin', 'admin', 'female', 9907656434, 'jensi6@gmail.com', '2004-08-09'),
(2, 'beena kavthiya', 'laxminarayan\r\nSurat', 'Surat', 394270, 'Gujarat', 'India', 'beena', '12345', 'female', 9908767566, 'beena234@gmail.com', '1990-03-09'),
(3, 'krishna kavthiya', 'suriy nagar', 'Jamanagar', 345678, 'Gujarat', 'India', 'krishana patel', '12345', 'female', 6353224163, 'krishna128@gmail.com', '2000-07-03'),
(4, 'hemangi', 'kastur nagar,\r\nSurat', 'Surat', 354678, 'Gujarat', 'India', 'hemangi patel', '12345', 'female', 8978678956, 'hemangi134@gmail.com', '2002-05-07'),
(5, 'priti', 'om nagar', 'Surat', 395009, 'Gujarat', 'India', 'priti  patel', '12345', 'female', 9067867890, 'priti@gmail.com', '1990-06-09'),
(6, 'janat', 'mobatpar,near college', 'mumbai', 367980, 'Gujarat', 'India', 'janat', '12345', 'female', 7879077647, 'janat107@gmail.com', '1995-04-25'),
(7, 'shirti', 'near bas stop,nell park', 'Bharuch', 392150, 'Gujarat', 'India', 'shriti', '12345', 'female', 7897656789, 'shrti@gmail.com', '1999-07-12'),
(8, 'Kashmira S. Jagani', 'ghanshyam nagar', 'surat', 370201, 'Gujarat', 'India', 'Kashmira Jagani', '12345', 'female', 9988722334, 'kashmirapatel@gmail.', '1996-06-05'),
(9, 'nayara', 'adi nagar', 'surat', 370205, 'Gujarat', 'India', 'nayra patel', '12345', 'female', 7890976567, 'nayra@gmail.com', '1994-04-19'),
(10, 'shree', 'Dadara Nagar,\r\n\r\n', 'kunkavav', 365450, 'Gujarat', 'India', 'Krishti Garada', '12345', 'female', 907896757, 'shree@gmail.com', '2001-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
