-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 12:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifestylestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `deletedaccounts`
--

CREATE TABLE `deletedaccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletedaccounts`
--

INSERT INTO `deletedaccounts` (`id`, `name`, `email`, `reason`) VALUES
(1, 'abc', 'abc@gmail.com', 'dont want');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Canon DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 80000),
(5, 'Titan Model#301', 13000),
(6, 'Titan Model#201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Louis Philippe', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(3, 'Anant Gangwar', 'gangwaranant@gmail.com', 'Do you deliver in RK Puram area?'),
(4, 'Anant Gangwar', 'gangwaranant@gmail.com', 'what you want?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(7, 'gang', 'gang@gmail.com', '96e79218965eb72c92a549dd5a330112', '8989898989', 'dol', 'dol'),
(9, 'Mr awesome', 'aws@gmail.com', '96e79218965eb72c92a549dd5a330112', '8738383823', 'wanted city', 'wanted');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to Cart','Confirmed') NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`, `timestamp`) VALUES
(13, 7, 2, 'Confirmed', '2019-07-04 07:53:57'),
(17, 7, 3, 'Confirmed', '2019-07-04 07:54:42'),
(18, 7, 3, 'Confirmed', '2019-07-04 07:57:43'),
(19, 7, 2, 'Confirmed', '2019-07-04 07:57:45'),
(20, 7, 7, 'Confirmed', '2019-07-04 08:00:04'),
(21, 7, 6, 'Confirmed', '2019-07-04 08:00:06'),
(22, 7, 2, 'Confirmed', '2019-07-04 08:10:34'),
(23, 7, 3, 'Confirmed', '2019-07-04 08:10:36'),
(24, 7, 9, 'Added to Cart', '2019-07-04 08:12:12'),
(28, 9, 6, 'Confirmed', '2019-07-04 10:24:44'),
(32, 9, 7, 'Confirmed', '2019-07-04 10:33:27'),
(33, 9, 6, 'Confirmed', '2019-07-04 10:37:03'),
(35, 9, 2, 'Confirmed', '2019-07-04 10:48:42'),
(36, 9, 3, 'Confirmed', '2019-07-04 10:48:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deletedaccounts`
--
ALTER TABLE `deletedaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `item_id` (`item_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deletedaccounts`
--
ALTER TABLE `deletedaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
