-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinit`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `email`, `balance`) VALUES
(1, 'Vinit Thombare', 'vinitthombare9867@gmail.com', 690121),
(2, 'Arpit Pandey', 'pandarpit@gmail.com', 27879),
(3, 'Shivam Pandey', 'pandshiv@yahoo.com', 38900),
(4, 'Abhishek Verma', 'abhiverma@gmail.com', 489200),
(5, 'Atharve Taur', 'taurath@yahoo.com', 124000),
(6, 'Rama Rao', 'ramelrao@gmail.com', 21000),
(7, 'Sanket Vikalp', 'sanketvikalpa@gmail.com', 89750),
(8, 'Manya Rupam', 'ManyaR@yahoo.com', 46000),
(9, 'Rishi Rag', 'Riish@yahoo.com', 8200),
(10, 'Pratham Wagh', 'prathm.wagh@gmail.com', 32700);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `his_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`his_id`, `sender`, `reciever`, `amount`) VALUES
(1, 'Vinit Thombare', 'Manya Rupam', 700),
(2, 'Arpit Pandey', 'Pratham Wagh', 1200),
(3, 'Rishi Rag', 'Vinit Thombare', 2300),
(4, 'Arpit Pandey', 'Rishi Rag', 650),
(5, 'Vinit Thombare', 'Rishi Rag', 2100),
(6, 'Pratham Wagh', 'Arpit Pandey', 3000),
(7, 'Pratham Wagh', 'Manya Rupam', 12000),
(8, 'Abhishek Verma', 'Rama Rao', 1800),
(9, 'Rishi Rag', 'Vinit Thombare', 500),
(10, 'Arpit Pandey', 'Vinit Thombare', 121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`his_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
