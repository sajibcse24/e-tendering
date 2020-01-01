-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 06:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etender`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidder`
--

CREATE TABLE `bidder` (
  `id` int(11) NOT NULL,
  `admin_type` int(11) NOT NULL DEFAULT '1',
  `email` varchar(74) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cipher_text` varchar(100) DEFAULT NULL,
  `org_name` varchar(120) NOT NULL,
  `address` text,
  `phone` varchar(40) NOT NULL,
  `fax` varchar(40) NOT NULL,
  `tin` varchar(40) NOT NULL,
  `trade_license_no` varchar(40) NOT NULL,
  `vat` varchar(60) NOT NULL,
  `ltradew_icense_file` varchar(255) DEFAULT NULL,
  `vat_certificate` varchar(255) DEFAULT NULL,
  `tin_certificate` varchar(255) DEFAULT NULL,
  `tax_certificate` varchar(255) DEFAULT NULL,
  `name` varchar(120) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidder`
--

INSERT INTO `bidder` (`id`, `admin_type`, `email`, `password`, `cipher_text`, `org_name`, `address`, `phone`, `fax`, `tin`, `trade_license_no`, `vat`, `ltradew_icense_file`, `vat_certificate`, `tin_certificate`, `tax_certificate`, `name`, `designation`, `mobile_number`, `registration_date`, `status`) VALUES
(1, 99, 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sdsfsfsdfsdf', 'sfdsdfsdfsdf', 'sfsdfsdfsdfsdf', 'sdfsfsdfs', 'fsdfsdfsdf', 'sdfsdfsdfsfs', 'sfsdfsfsf', 'sfsfsfdsfdsf', '', '1517643125.jpg', '1517643125.jpg', '1517643125.jpg', 'sdfsfsfdfsdf', 'sfdsfsf', 'sfsdfsfsf', '2018-02-03', 0),
(2, 1, 'test@gmail.com', '8725b7d44c47c883b200a40e15ad1ad1', 'sdsfsfsdfsdf', 'sfdsdfsdfsdf', 'sfsdfsdfsdfsdf', 'sdfsfsdfs', 'fsdfsdfsdf', 'sdfsdfsdfsfs', 'sfsdfsfsf', 'sfsfsfdsfdsf', '', '1517645047.jpg', '1517645047.jpg', '1517645047.jpg', 'sdfsfsfdfsdf', 'sfdsfsf', 'sfsdfsfsf', '2018-02-03', 0),
(3, 1, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', '', '', '1517839606.', '1517839606.', '1517839606.', '', '', '', '2018-02-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `bidder_id` int(11) NOT NULL,
  `admin_approve` int(11) NOT NULL,
  `tender_title` text NOT NULL,
  `short_description` text NOT NULL,
  `download_file` text NOT NULL,
  `tender_type` varchar(55) NOT NULL,
  `end_date` varchar(44) NOT NULL,
  `open_date` varchar(44) NOT NULL,
  `earnest_money` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `bidder_id`, `admin_approve`, `tender_title`, `short_description`, `download_file`, `tender_type`, `end_date`, `open_date`, `earnest_money`, `created_date`, `status`) VALUES
(1, 1, 0, 'Flyover making 2018', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', '1518020750.png', 'asdasda', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '234534234324', '2018-02-07', 1),
(2, 1, 0, 'Textile Marketing Leading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', '1518020750.png', 'consruction', '2018-02-09 00:00:00', '2018-02-09 00:00:00', '234534234324', '2018-02-07', 1),
(3, 1, 0, 'IT Infracturer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', '1518020750.png', 'zsdczdsc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '234534234324', '2018-02-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidder`
--
ALTER TABLE `bidder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidder`
--
ALTER TABLE `bidder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
