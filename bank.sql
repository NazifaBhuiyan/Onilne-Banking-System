-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_no` varchar(15) NOT NULL,
  `balance` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_no`, `balance`) VALUES
('AC-123387', 75000),
('AC-123388', 55000),
('AC-123389', 0),
('AC-123390', 125000),
('AC-123391', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `borrower_id` int(12) NOT NULL,
  `customer_id` int(12) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `loan_no` int(12) NOT NULL,
  `loan_amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`borrower_id`, `customer_id`, `customer_name`, `loan_no`, `loan_amount`) VALUES
(10, 150, 'Nazifa ', 15, 20000),
(11, 145, 'Momena', 51, 0),
(33, 12, 'turja', 19, 80000),
(40, 142, 'Nadiya', 20, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(12) NOT NULL,
  `customer_name` varchar(15) NOT NULL,
  `customer_street` varchar(25) NOT NULL,
  `customer_city` varchar(15) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `e_mail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_street`, `customer_city`, `Date_of_birth`, `phone_no`, `e_mail`) VALUES
(11, 'fahad', 'link road', 'dhaka', '1996-08-01', '01857456790', 'fahad@gmail.com'),
(12, 'turja', 'bashundhara', 'dhaka', '1995-08-01', '01857456765', 'turja@gmail.com'),
(45, 'mustafa', 'mirpur', 'dhaka', '1994-01-01', '01857456791', 'mustafawasa2007@gmail.com'),
(142, 'Nadiya', 'Uttara', 'Dhaka', '2001-11-29', '01834365159', 'nadiyabhuiyan29@gmail.com'),
(145, 'Momena', 'dhanmondi', 'Dhaka', '1995-11-11', '01834365185', 'momena@gmail.com'),
(150, 'Nazifa ', 'bashaboo', 'Dhaka', '1997-09-19', '01834365158', 'nazifabhuiyan19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `depositor`
--

CREATE TABLE `depositor` (
  `depositor_id` int(12) NOT NULL,
  `customer_id` int(12) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `balance` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

INSERT INTO `depositor` (`depositor_id`, `customer_id`, `customer_name`, `account_no`, `balance`) VALUES
(10, 142, 'Nadiya', 'AC-123387', 75000),
(30, 150, 'Nazifa ', 'AC-123388', 55000),
(31, 145, 'Momena', 'AC-123391', 30000),
(50, 45, 'mustafa', 'AC-123390', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_no` int(11) NOT NULL,
  `loan_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_no`, `loan_amount`) VALUES
(15, 20000),
(16, 75000),
(19, 80000),
(20, 85000),
(50, 100000),
(51, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewcus`
-- (See below for the actual view)
--
CREATE TABLE `viewcus` (
`customer_id` int(12)
,`customer_name` varchar(15)
,`account_no` varchar(15)
,`balance` int(25)
,`loan_no` int(12)
,`loan_amount` int(25)
,`customer_street` varchar(25)
,`customer_city` varchar(15)
,`Date_of_birth` date
,`phone_no` varchar(11)
,`e_mail` varchar(25)
,`borrower_id` int(12)
,`depositor_id` int(12)
);

-- --------------------------------------------------------

--
-- Structure for view `viewcus`
--
DROP TABLE IF EXISTS `viewcus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewcus`  AS   (select `customer`.`customer_id` AS `customer_id`,`customer`.`customer_name` AS `customer_name`,`account`.`account_no` AS `account_no`,`account`.`balance` AS `balance`,`borrower`.`loan_no` AS `loan_no`,`borrower`.`loan_amount` AS `loan_amount`,`customer`.`customer_street` AS `customer_street`,`customer`.`customer_city` AS `customer_city`,`customer`.`Date_of_birth` AS `Date_of_birth`,`customer`.`phone_no` AS `phone_no`,`customer`.`e_mail` AS `e_mail`,`borrower`.`borrower_id` AS `borrower_id`,`depositor`.`depositor_id` AS `depositor_id` from ((((`customer` join `account`) join `borrower` on(`customer`.`customer_id` = `borrower`.`customer_id` and `customer`.`customer_name` = `borrower`.`customer_name`)) join `loan` on(`borrower`.`loan_no` = `loan`.`loan_no` and `borrower`.`loan_amount` = `loan`.`loan_amount`)) join `depositor` on(`customer`.`customer_id` = `depositor`.`customer_id` and `customer`.`customer_name` = `depositor`.`customer_name` and `account`.`account_no` = `depositor`.`account_no` and `account`.`balance` = `depositor`.`balance`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`name`,`password`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`borrower_id`),
  ADD KEY `loan` (`loan_no`),
  ADD KEY `customer` (`customer_name`),
  ADD KEY `customer_name` (`customer_name`),
  ADD KEY `borrower_ibfk_1` (`customer_id`),
  ADD KEY `loan_amount` (`loan_amount`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `depositor`
--
ALTER TABLE `depositor`
  ADD PRIMARY KEY (`depositor_id`),
  ADD KEY `customer` (`customer_id`),
  ADD KEY `account` (`account_no`),
  ADD KEY `customer_name` (`customer_name`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `balance` (`balance`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `borrower_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `depositor`
--
ALTER TABLE `depositor`
  MODIFY `depositor_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrower`
--
ALTER TABLE `borrower`
  ADD CONSTRAINT `borrower_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrower_ibfk_2` FOREIGN KEY (`loan_no`) REFERENCES `loan` (`loan_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `depositor`
--
ALTER TABLE `depositor`
  ADD CONSTRAINT `depositor_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `depositor_ibfk_2` FOREIGN KEY (`account_no`) REFERENCES `account` (`account_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
