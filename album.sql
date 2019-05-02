-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `user_checked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `firstname`, `lastname`, `user_checked`) VALUES
(1, 'Renato', 'Shkulaku', 'no'),
(2, 'Eden', 'Hazard', 'no'),
(3, 'John', 'Snow', 'no'),
(5, 'eden', 'shkulaku', 'no'),
(7, 'Daenerys', 'Targaryen', 'no'),
(8, 'Aria', 'Stark', 'no'),
(9, 'Leo', 'Messi', 'no'),
(10, 'Cristiano', 'Ronaldo', 'no'),
(11, 'Frank', 'Lampard', 'no'),
(12, 'John', 'Terry', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `user_role`) VALUES
(1, 'sh_renato', '12345', 'Renato', 'Shkulaku', 'shkulakurenato@yahoo.com', 'admin'),
(2, 'hazard', '123', 'Eden', 'Hazard', 'hazard@gmail.com', 'admin'),
(3, 'Leo1', '1234', 'Leo', 'Messi', 'mesi@yahoo.com', 'admin'),
(4, 'renatosh', '$2y$10$.Klw9lofVKwM4I5kUNb58OmCT2.dW.G4/8S7ElGAlW481.whiqL1W', 'Renato', 'shkulaku', 'shkulakurenato@yahoo.com', 'admin'),
(5, 'eden_1', '$2y$10$elb6SVTIrQGx2VxVYoi/YOrjeob.4EDIgAVEOnWnPHVIV8SkcLKTW', 'Eden', 'Hazard', 'eden@yahoo.com', 'admin'),
(6, 'renatosh', '$2y$10$I1GWesyyPBQm9ObUUpWq9uGBPWeKAdBQiE6/128Zujm38isgJED9W', 'Leo', 'Messi', 'messi@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
