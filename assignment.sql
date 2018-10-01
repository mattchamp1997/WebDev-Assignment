-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 08:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `name` varchar(20) NOT NULL,
  `description` varchar(60) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`name`, `description`, `price`, `category`) VALUES
('Chips', 'A bag of our famous chips!', 3, 'Chips'),
('Curry Chips', 'Our famous chips, in curry', 4, 'Chips'),
('Garlic Cheese Chips', 'Our most popular item!', 5, 'Chips'),
('Margarita', '12\" Pizza with cheese', 8, 'Pizza'),
('', '', 0, ''),
('Buffalo Pizza', '12\" Pizza with cheese, BBQ base, chicken and bacon', 11, 'Pizza'),
('Spicy Buffalo', '12\" Pizza with cheese, BBQ base, chicken, bacon & jalapenos', 11, 'Pizza'),
('Large Buffalo', '14\" Pizza with cheese, BBQ base, chicken and bacon', 14, 'Pizza'),
('Large Margarita', '14\" Pizza with cheese', 12, 'Pizza'),
('Large Spicy Buffalo', '14\" Pizza with cheese, BBQ base, chicken, bacon & jalapenos', 15, 'Pizza'),
('Fanta', 'Small can', 1, 'Drinks'),
('Coke', 'Small can', 1, 'Drinks'),
('7UP', 'Small can', 1, 'Drinks'),
('Coke', '500ml bottle', 2, 'Drinks'),
('Fanta', '500ml bottle', 2, 'Drinks'),
('7UP ', '500ml bottle', 2, 'Drinks'),
('Champion Burger', 'A burger with cheese, lettuce with our secret sauce & chips!', 10, 'Burger'),
('Chicken Burger', 'A chicken fillet burger, with our secret sauce & chips!', 10, 'Burger'),
('Kids Champion Burger', 'A smaller burger with our secret sauce & chips!', 7, 'Burger'),
('Kids Chicken Burger', 'A smaller chicken burger with our secret sauce and chips!', 7, 'Burger');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phonenumber` int(12) NOT NULL,
  `housenumber` int(3) NOT NULL,
  `addressline1` varchar(30) NOT NULL,
  `town` varchar(20) NOT NULL,
  `postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`username`, `password`, `fullname`, `phonenumber`, `housenumber`, `addressline1`, `town`, `postcode`) VALUES
('matthew', 'matthew', 'Matthew Champion', 870940907, 94, 'Broadford Crescent', 'Ballinteer', 'D16 XY81');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
