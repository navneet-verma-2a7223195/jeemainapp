-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 08:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeemain`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `candidate_name` varchar(100) NOT NULL,
  `Father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `identification` varchar(100) NOT NULL,
  `identification_num` varchar(100) NOT NULL,
  `premises_no` varchar(100) NOT NULL,
  `sub_locality` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pin_code` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `alternate_no` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `hash_key` varchar(255) DEFAULT NULL,
  `hash_expiry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `candidate_name`, `Father_name`, `mother_name`, `date_of_birth`, `gender`, `identification`, `identification_num`, `premises_no`, `sub_locality`, `country`, `state`, `district`, `pin_code`, `email`, `mobile_no`, `alternate_no`, `password`, `updated_at`, `created_at`, `hash_key`, `hash_expiry`) VALUES
(20230005, 'Navneet Verma', 'Nishith kumar Verma', 'Pushpa Verma', '2002-12-09', '01', '10', 'BTQPV0079L', 'Railway colony', 'Chandralok Chowk', 'IN', '05', 'Muzaffarpur', 842001, 'Kvnavneetg@gmail.com', 2147483647, 2147483647, '$2y$10$hibLzldJUkJ7vkwtLx2XQuuK.H7M.vaU1/AnOmbsvHkSkgseVQdE.', '0000-00-00 00:00:00', '2022-12-29 19:42:46', '20a666f8987a43160c44e7e928c659b10083554f69d7f1764a2e6955bd3ce11d', '2022-12-30 20:13'),
(20230006, 'Prakash Raj', 'Pramesh Kumar', 'Jyoti Devi', '2022-12-02', '01', '03', '895623', 'fdv', 'fhjkmn', 'IN', '18', 'yugjh', 752054, 'Kvnavneet09@gmail.com', 2147483647, 0, '$2y$10$29PJyCBFR7ai6Ba2R8.1gO.a02mAw290ZrdF6TMcE4nBaCzTc4wEG', '0000-00-00 00:00:00', '2022-12-29 19:47:22', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
