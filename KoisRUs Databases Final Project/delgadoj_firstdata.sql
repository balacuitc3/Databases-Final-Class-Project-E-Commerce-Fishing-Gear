-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2017 at 02:27 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delgadoj_firstdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `a_firstname` varchar(255) NOT NULL,
  `a_lastname` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_age` int(11) NOT NULL,
  `a_ssn` int(11) NOT NULL,
  `a_birthdate` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`a_firstname`, `a_lastname`, `a_username`, `a_password`, `a_age`, `a_ssn`, `a_birthdate`) VALUES
('Kate', 'Jordan', 'kate444', 'adminkate2', 25, 108222000, '2492');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `p_category` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`p_category`, `categoryName`) VALUES
(1, 'baits and hooks'),
(2, 'lines and rods'),
(3, 'Apperal'),
(4, 'books');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customer_id` int(11) NOT NULL,
  `Birth_date` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Address` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customer_id`, `Birth_date`, `email`, `Fname`, `Lname`, `username`, `password`, `Address`) VALUES
(1083430077, 1195, 'delgadoj11@montclair.edu', 'Joseph', 'Delgado', 'delgadoj_alaas02', 'April2001', 0),
(1083430078, 0, 'b@bmail.com', 'b', 'b', 'bb1234', 'bigboi', 0),
(1083430081, 0, 'delgadoapril13@gmail.com', 'joseph', 'delgado', 'b', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `e_id` int(11) NOT NULL,
  `e_birth_date` int(11) NOT NULL,
  `e_Fname` varchar(255) NOT NULL,
  `e_Lname` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_ssn` int(11) NOT NULL,
  `e_username` varchar(255) NOT NULL,
  `e_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`e_id`, `e_birth_date`, `e_Fname`, `e_Lname`, `e_email`, `e_ssn`, `e_username`, `e_password`) VALUES
(102388012, 7694, 'John', 'Bay', 'johnb333@gmail.com', 142009882, 'johnb333', 'employee111');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `item_ID` int(11) NOT NULL,
  `o_ID` int(11) NOT NULL,
  `p_ID` int(11) NOT NULL,
  `item_Bill` decimal(10,2) NOT NULL,
  `item_Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`item_ID`, `o_ID`, `p_ID`, `item_Bill`, `item_Quantity`) VALUES
(1, 1, 4, '2500.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Owner`
--

CREATE TABLE `Owner` (
  `o_firstname` varchar(255) NOT NULL,
  `o_lastname` varchar(255) NOT NULL,
  `o_username` varchar(255) NOT NULL,
  `o_password` varchar(255) NOT NULL,
  `o_age` int(11) NOT NULL,
  `o_ssn` int(11) NOT NULL,
  `o_birthdate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Owner`
--

INSERT INTO `Owner` (`o_firstname`, `o_lastname`, `o_username`, `o_password`, `o_age`, `o_ssn`, `o_birthdate`) VALUES
('Nick', 'Cannon', 'nick555', 'ownernick5', 37, 134222464, 9880);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_description` varchar(250) NOT NULL,
  `p_price` decimal(6,2) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `abbvrName` varchar(60) NOT NULL,
  `p_code` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `p_name`, `p_description`, `p_price`, `p_quantity`, `abbvrName`, `p_code`) VALUES
(1, 'Johnny Morrits Rod', 'black fishing pole', '130.99', 100, '', ''),
(2, 'Lew\'s Carbon Fire Spinning Rod', 'blue spinning rod', '160.99', 100, '', ''),
(3, 'Lew\'s Speed Stick Casting Rod', 'beige speed rod', '190.99', 100, '', ''),
(4, 'Carperlan Telesco Short Rod', 'short rod', '230.99', 100, '', ''),
(5, 'Waterloo Saltwater Casting Rod', 'Green saltwater rod', '175.99', 100, '', ''),
(6, 'Sufix 1000-Yards Size Fishing Line', 'fishing line', '20.99', 100, '', ''),
(7, 'Eliete 6lb Fishing Line', '6lb fishing line', '17.99', 100, '', ''),
(8, 'Eliete 10lb Fishing Line', '10 lb fishing line', '10.99', 100, '', ''),
(9, 'Offshore Double Hook', 'silver hook', '20.99', 100, '', ''),
(10, 'Offshore  Hook', 'grey hook', '10.99', 100, '', ''),
(11, 'Berkleys Colored Octopus Hooks', 'neon green hook', '4.99', 100, '', ''),
(12, 'Gamakatsu G Medium Treble Hook', 'triple hook', '11.99', 100, '', ''),
(13, 'Mustard UtraPoint 1x Hook', '1x hook', '12.99', 100, '', ''),
(14, 'Fishing Lures Floating 10pcs 5.5cm', '10 pc. fake fish ', '8.99', 100, '', ''),
(15, 'Live Worm Bait 40pcs', 'live worms', '5.99', 100, '', ''),
(16, 'Live Fish Bait 10pcs', 'live fish bait', '7.99', 100, '', ''),
(17, 'Tan Fishing Hat', 'tan hat', '15.99', 100, '', ''),
(18, 'Black Fishing Hat', 'covers entire backside', '25.99', 100, '', ''),
(19, 'Colombia Schooner Bank Cachalot', 'black hat', '15.99', 100, '', ''),
(20, ' Patagonia Convertible Vest', 'grey vest (multiple pockets)', '101.99', 100, '', ''),
(21, 'Patagonia Sweet Vest 28L', 'tan small vest', '99.99', 100, '', ''),
(22, 'Patagonia Hybrid Pack Vest', 'light-grey vest', '118.99', 100, '', ''),
(23, '\"The RodFather\" Long-Sleeve Shirt', 'navy blue graphic-t', '15.99', 100, '', ''),
(24, 'Piranha Long-Sleeve Shirt', 'long sleeve shirt', '17.99', 100, '', ''),
(25, 'Fishing Stories', 'best seller', '10.99', 100, '', ''),
(26, 'Bass Fishing Exposed', 'Some random description', '11.99', 0, '', ''),
(27, 'The Total Fishing Manual', 'For Beginners', '14.99', 0, '', ''),
(28, 'Fly Fishing For Bass HandBook', 'Handbook', '12.99', 0, '', ''),
(29, 'Fly Fishing Tactic', 'Great for Tactics', '18.99', 0, '', ''),
(30, 'Fishing For Dummies', 'Great for begginers', '8.99', 0, '', ''),
(31, 'How To Use Jerk Baits', 'Fishing Guide', '15.99', 0, '', ''),
(32, 'Where The Fish Are', 'New York Time \"Best Seller\"', '7.99', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `price` decimal(10,2) NOT NULL,
  `receiptnumber` int(11) NOT NULL AUTO_INCREMENT,
  `tax` decimal(10,2) ,
  `amountpaid` decimal(10,2) NOT NULL,
  `date` int(11) ,
  `productname` varchar(255) ,
  `r_username` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`price`, `receiptnumber`, `tax`, `amountpaid`, `date`, `productname`, `r_username`) VALUES
('0.00', 0, '0.00', '0.00', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`a_username`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `Owner`
--
ALTER TABLE `Owner`
  ADD PRIMARY KEY (`o_username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptnumber`),
  ADD UNIQUE KEY `price` (`price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1083430086;
--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102388013;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111118;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
