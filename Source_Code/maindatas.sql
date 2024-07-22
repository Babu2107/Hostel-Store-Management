-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 10:48 AM
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
('Hide and seek', 'assets/hideandseek.webp', 1001, 48, 10, 0),
('Cavins', 'assets/cavins.webp', 1002, 96, 40, 0),
('Fruitnik', 'assets/fruitnik.webp', 1003, 97, 10, 0),
('20-20', 'assets/2020.jpg', 1004, 95, 10, 0);

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
(2022506093, 'kb2g9tFe', '1.Hide and seek(1001)-1 Nos-10Rs.\r\n2.Cavins(1002)-2 Nos-80Rs.\r\n3.Fruitnik(1003)-2 Nos-20Rs.\r\n4.20-20(1004)-1 Nos-10Rs.\r\n\r\nTotal Amount : 120Rs.', 2);

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
('2022506066', 'SHALINI K ', '2022506066', 1000, 'Ponni', 2014),
('2022506067', 'MONA K ', '2022506067', 1000, 'Ponni', 2013),
('2022506068', 'VAISHNAVI J ', '2022506068', 1000, 'Ponni', 2012),
('2022506069', 'DEEPIKA M ', '2022506069', 1000, 'Ponni', 2011),
('2022506070', 'TAMILSELVAN V ', '2022506070', 1000, 'Bhavani', 1004),
('2022506071', 'MALIK ABDUR RAHMAN J ', '2022506071', 1000, 'Bhavani', 1003),
('2022506072', 'AASHIN A P ', '2022506072', 1000, 'Bhavani', 1002),
('2022506073', 'SUSHMIDHA B ', '2022506073', 1000, 'Rajam', 3003),
('2022506074', 'VAMIKA V ', '2022506074', 1000, 'Rajam', 3002),
('2022506075', 'ANUSHRI T ', '2022506075', 1000, 'Rajam', 3001),
('2022506076', 'AJAY R ', '2022506076', 1000, ' Bhavani', 1013),
('2022506077', 'NIYATHI S B ', '2022506077', 1000, ' Rajam', 1012),
('2022506078', 'KABILESH SELVAKUMAR E ', '2022506078', 1000, ' Bhavani', 1012),
('2022506079', 'YUVARAJ K ', '2022506079', 1000, ' Bhavani', 1011),
('2022506080', 'KALPANA S ', '2022506080', 1000, 'Cauvery', 4008),
('2022506081', 'MANOBALA P ', '2022506081', 1000, ' Bhavani', 1010),
('2022506082', 'BARATHBALA B ', '2022506082', 1000, ' Bhavani', 1009),
('2022506083', 'NELSON BHARATHI A ', '2022506083', 1000, ' Bhavani', 1008),
('2022506084', 'GOWTHAM RAJASEKARAN ', '2022506084', 1000, ' Bhavani', 1007),
('2022506085', 'ANISHVARAN G ', '2022506085', 1000, ' Bhavani', 1006),
('2022506086', 'MITHUN KARTHIKEYAN ', '2022506086', 1000, ' Bhavani', 1005),
('2022506087', 'AADHIRA R ', '2022506087', 1000, 'Cauvery', 4007),
('2022506088', 'SARVESHVARAN A ', '2022506088', 1000, 'Birla', 2003),
('2022506089', 'SRI HARSSHAA M K ', '2022506089', 1000, 'Cauvery', 4006),
('2022506090', 'PAVITHRADEVI C ', '2022506090', 1000, 'Cauvery', 4005),
('2022506091', 'JENCY K ', '2022506091', 1000, 'Cauvery', 4004),
('2022506092', 'ABINAYA T ', '2022506092', 1000, 'Cauvery', 4003),
('2022506093', 'KARTHIKEYAN B ', '2022506093', 880, 'Amaravaty', 6010),
('2022506094', 'AKASH SAI RAM D ', '2022506094', 1000, 'Amaravaty', 6009),
('2022506095', 'BABU M ', '2022506095', 1000, 'Amaravaty', 6008),
('2022506096', 'PRIYADHARSHINI R ', '2022506096', 1000, 'Cauvery', 4002),
('2022506097', 'MEENAKSHI C ', '2022506097', 1000, 'Cauvery', 4001),
('2022506098', 'S HARINI RAJAM ', '2022506098', 1000, 'Amaravaty', 6007),
('2022506099', 'NITHISH S ', '2022506099', 1000, 'Amaravaty', 6006),
('2022506100', 'SANDHIP SURIYA K S ', '2022506100', 1000, 'Amaravaty', 6005),
('2022506101', 'ANSELM FLAVIAN P ', '2022506101', 1000, 'Amaravaty', 6004),
('2022506102', 'SESHATHRI A ', '2022506102', 1000, 'Amaravaty', 6003),
('2022506103', 'GURUPRAKASH P ', '2022506103', 1000, 'Amaravaty', 6002),
('2022506104', 'KRISHNAA S ', '2022506104', 1000, 'Amaravaty', 6001),
('2022506105', 'VANI V ', '2022506105', 1000, 'Ponni', 2010),
('2022506106', 'HARISHMA K ', '2022506106', 1000, 'Ponni', 2009),
('2022506107', 'KAVYASHREE V ', '2022506107', 1000, 'Ponni', 2008),
('2022506108', 'ANUPRIYA D ', '2022506108', 1000, 'Ponni', 2007),
('2022506109', 'SESHAVARSHAN M ', '2022506109', 1000, 'Thamirabar', 5002),
('2022506110', 'RAVISHANKAR S ', '2022506110', 1000, 'Thamirabar', 5001),
('2022506111', 'ALAMELU KR ', '2022506111', 1000, 'Ponni', 2006),
('2022506112', 'KANAGARAJ M ', '2022506112', 1000, 'Bhavani', 1001),
('2022506113', 'JOHN PRABU A ', '2022506113', 1000, 'Bhavani', 1000),
('2022506114', 'VIJAYA SHREE R ', '2022506114', 1000, 'Ponni', 2005),
('2022506115', 'NETHRA V S ', '2022506115', 1000, 'Ponni', 2004),
('2022506116', 'BHARATH H ', '2022506116', 1000, 'Amaravathy', 6011),
('2022506117', 'ASMITHA A G ', '2022506117', 1000, 'Ponni', 2003),
('2022506118', 'YUVASHRI AR P ', '2022506118', 1000, 'Ponni', 2002),
('2022506119', 'HARINI MUTHULAKSHMI K ', '2022506119', 1000, 'Ponni', 2001),
('2022506120', 'SARAVANAN R ', '2022506120', 1000, ' Thamiraba', 5009),
('2022506121', 'ATHISHRITHVIK R ', '2022506121', 1000, ' Thamiraba', 5008),
('2022506122', 'SAMSUGANI N ', '2022506122', 1000, ' Thamiraba', 5007),
('2022506123', 'BALU R ', '2022506123', 1000, ' Thamiraba', 5006),
('2022506124', 'SANJAY B ', '2022506124', 1000, ' Thamiraba', 5005),
('2022506125', 'KUMARAN M ', '2022506125', 1000, ' Thamiraba', 5004),
('2022506126', 'NANDHITHA K ', '2022506126', 1000, ' Cauvery', 4001),
('2022506127', 'SOWNDHAR M ', '2022506127', 1000, ' Thamiraba', 5003),
('2022506128', 'ARCHANA K ', '2022506128', 1000, ' Ponni', 4003),
('2022506129', 'ANISHA B ', '2022506129', 1000, ' Ponni', 4004),
('2022506130', 'PRANAAV SANJITH R ', '2022506130', 1000, ' Birla', 4005),
('2022506131', 'HAREESH REDDY N ', '2022506131', 1000, ' Birla', 4006);

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
