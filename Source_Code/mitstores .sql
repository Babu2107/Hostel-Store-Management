-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 11:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitstores`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `iname` varchar(100) NOT NULL,
  `itemimage` varchar(100) NOT NULL,
  `icode` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iname`, `itemimage`, `icode`, `quantity`, `price`, `sold`) VALUES
('Hide and seek', 'assets/hideandseek.webp', 1001, 49, 10, 0),
('Cavins', 'assets/cavins.webp', 1002, 98, 40, 0),
('Fruitnik', 'assets/fruitnik.webp', 1003, 99, 10, 0),
('20-20', 'assets/2020.jpg', 1004, 96, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `studentid` int(11) NOT NULL,
  `productid` varchar(8) NOT NULL,
  `data` mediumtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`studentid`, `productid`, `data`, `status`) VALUES
(2022506093, '8293', '1.Hide and seek(1001)-2 Nos-20Rs.\r\n2.Cavins(1002)-2 Nos-80Rs.\r\n\r\nTotal Amount : 100Rs.', 2),
(2022506093, '8222', '1.Cavins(1002)-3 Nos-120Rs.\r\n\r\nTotal Amount : 120Rs.', 2),
(2022506093, '211a3mbh', '1.Cavins(1002)-3 Nos-120Rs.\r\n\r\nTotal Amount : 120Rs.', 2),
(2022506086, 'amk4ybev', '1.Cavins(1002)-3 Nos-120Rs.\r\n\r\nTotal Amount : 120Rs.', 0),
(2022506087, 'JjqoRZly', '1.Hide and seek(1001)-1 Nos-10Rs.\r\n2.Cavins(1002)-2 Nos-80Rs.\r\n3.Fruitnik(1003)-1 Nos-10Rs.\r\n\r\nTotal Amount : 100Rs.', 2),
(2022506093, '7pEhRWvz', '1.Hide and seek(1001)-2 Nos-20Rs.\r\n2.Cavins(1002)-2 Nos-80Rs.\r\n\r\nTotal Amount : 100Rs.', 0),
(2022506093, 'Q5iqXESz', '1.Hide and seek(1001)-1 Nos-10Rs.\r\n2.Cavins(1002)-2 Nos-80Rs.\r\n3.Fruitnik(1003)-1 Nos-10Rs.\r\n4.20-20(1004)-1 Nos-10Rs.\r\n\r\nTotal Amount : 110Rs.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `userid` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `balance` int(11) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `roomno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`userid`, `name`, `password`, `balance`, `hostel`, `roomno`) VALUES
('2022506086', 'Mithun', '2022506086', 1370, 'Bhavani', 5008),
('2022506087', 'Aadhira', '2022506087', 900, 'Poni', 4521),
('2022506093', 'B.Karthikeyan', '2022506093', 790, 'Birla', 4301),
('2022506098', 'Harini', '2022506098', 1000, 'rajam', 2022),
('2022506116', 'H.Bharath', '2022506116', 1000, 'Marudam', 6005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`icode`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD UNIQUE KEY `userid` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
