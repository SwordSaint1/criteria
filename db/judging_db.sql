-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 09:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judging_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_in_casual`
--

CREATE TABLE `best_in_casual` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `suitability` int(5) DEFAULT NULL,
  `stage_presence` int(5) DEFAULT NULL,
  `uniqueness` int(5) DEFAULT NULL,
  `audience_impact` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_in_casual`
--

INSERT INTO `best_in_casual` (`id`, `contestant`, `suitability`, `stage_presence`, `uniqueness`, `audience_impact`, `judge`) VALUES
(1, 'Michelle Permejo', 25, 25, 20, 7, 'judge3'),
(2, 'Michelle Permejo', 25, 25, 20, 7, 'judge2'),
(3, 'Michelle Permejo', 30, 25, 20, 10, 'judge1'),
(4, 'Culla, Linnsen Maeve V.', 25, 30, 25, 10, 'judge2'),
(5, 'Culla, Linnsen Maeve V.', 35, 30, 25, 10, 'judge1'),
(6, 'Culla, Linnsen Maeve V.', 25, 30, 25, 10, 'judge3');

-- --------------------------------------------------------

--
-- Table structure for table `best_in_long_gown`
--

CREATE TABLE `best_in_long_gown` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `elegance` int(5) DEFAULT NULL,
  `stage_presence` int(5) DEFAULT NULL,
  `projection_execution` int(5) DEFAULT NULL,
  `audience_impact` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `best_in_prod`
--

CREATE TABLE `best_in_prod` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `bearing` int(5) DEFAULT NULL,
  `stage_presence` int(5) DEFAULT NULL,
  `project_execution` int(5) DEFAULT NULL,
  `audience_impact` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_in_prod`
--

INSERT INTO `best_in_prod` (`id`, `contestant`, `bearing`, `stage_presence`, `project_execution`, `audience_impact`, `judge`) VALUES
(1, 'Michelle Permejo', 34, 20, 20, 5, 'judge3'),
(2, 'Michelle Permejo', 25, 20, 20, 5, 'judge4'),
(3, 'Michelle Permejo', 33, 28, 20, 5, 'judge2'),
(4, 'Michelle Permejo', 20, 20, 20, 5, 'judge1'),
(5, 'Culla, Linnsen Maeve V.', 35, 29, 25, 10, 'judge2'),
(6, 'Culla, Linnsen Maeve V.', 35, 30, 25, 10, 'judge1'),
(7, 'Culla, Linnsen Maeve V.', 30, 30, 25, 9, 'judge3');

-- --------------------------------------------------------

--
-- Table structure for table `best_in_ramp`
--

CREATE TABLE `best_in_ramp` (
  `id` int(59) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `poise` int(5) DEFAULT NULL,
  `stage_presence` int(5) DEFAULT NULL,
  `ramp_skills` int(5) DEFAULT NULL,
  `audience_impact` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `best_in_swim`
--

CREATE TABLE `best_in_swim` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `body_figure` int(5) DEFAULT NULL,
  `confidence_style` int(5) DEFAULT NULL,
  `stage_presence` int(5) DEFAULT NULL,
  `over_all` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_in_swim`
--

INSERT INTO `best_in_swim` (`id`, `contestant`, `body_figure`, `confidence_style`, `stage_presence`, `over_all`, `judge`) VALUES
(1, 'Michelle Permejo', 25, 20, 15, 8, 'judge3'),
(2, 'Michelle Permejo', 35, 20, 15, 8, 'judge2'),
(3, 'Michelle Permejo', 30, 30, 20, 10, 'judge1'),
(4, 'Culla, Linnsen Maeve V.', 35, 35, 20, 10, 'judge1'),
(5, 'Culla, Linnsen Maeve V.', 35, 35, 20, 10, 'judge2'),
(6, 'Culla, Linnsen Maeve V.', 35, 30, 20, 8, 'judge3'),
(7, 'Culla, Linnsen Maeve V.', 25, 30, 10, 10, 'judge4');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `id` int(50) NOT NULL,
  `contestant_name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id`, `contestant_name`, `gender`) VALUES
(1, 'Culla, Linnsen Maeve V.', 'female'),
(2, 'Michelle Permejo', 'female'),
(3, 'Lagrosa, Kristine Jane', 'female'),
(4, 'Villasica, Bernadette A.', 'female'),
(5, 'Maranan, Jan Ann C.', 'female'),
(6, 'Coleen Hernandez', 'female'),
(7, 'Umali, Lara Vanessa C.', 'female'),
(8, 'De Castro, Dianne I.', 'female'),
(9, 'Bastatas, Marie Fe', 'female'),
(10, 'Desirre Atasan', 'female'),
(11, 'Alyza Manaog', 'female'),
(12, 'Buno, Erica M.', 'female'),
(13, 'Fajardo, Demi Jane R.', 'female'),
(14, 'Jolina Malones', 'female'),
(15, 'Reyes, Kimberly', 'female'),
(16, 'Roderos, Micha D.', 'female'),
(17, 'Carandang, Rachelle F.', 'female'),
(18, 'De Villa, Jhellie', 'female'),
(19, 'Justin Romero', 'male'),
(20, 'Noto, Kevin', 'male'),
(21, 'Clarito, Jhon Carlo R.', 'male'),
(22, 'Mendoza, Christian C. ', 'male'),
(23, 'Rayson Nuay', 'male'),
(24, 'Mendoza, Mark Lowell L.', 'male'),
(25, 'Talag, John Lerry L.', 'male'),
(26, 'Donell Arriola', 'male'),
(27, 'Mervin Jay Umandap', 'male'),
(28, 'Senorin, Rey John A.', 'male'),
(29, 'Fruelda, Kaypee ', 'male'),
(30, 'Christian Mark Solis', 'male'),
(31, 'John Marck Lopez', 'male'),
(32, 'Martinez, Russel L.', 'male'),
(33, 'Payoyo, Raphael L.', 'male'),
(34, 'Cruz, Jan Patrick ', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `final_round`
--

CREATE TABLE `final_round` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `intelligence` int(5) DEFAULT NULL,
  `beauty` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr_miss_smile`
--

CREATE TABLE `mr_miss_smile` (
  `id` int(50) NOT NULL,
  `contestant` varchar(50) DEFAULT NULL,
  `capturing_smile` int(5) DEFAULT NULL,
  `confidence` int(5) DEFAULT NULL,
  `projection` int(5) DEFAULT NULL,
  `judge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(50) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `full_name`, `username`, `password`, `role`) VALUES
(1, 'jj', 'admin', 'admin', 'admin'),
(2, 'jj', 'judge', 'admin', 'judge'),
(6, 'judge1', 'judge1', 'admin', 'judge'),
(7, 'judge2', 'judge2', 'admin', 'judge'),
(8, 'judge3', 'judge3', 'admin', 'judge'),
(9, 'judge4', 'judge4', 'admin', 'judge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_in_casual`
--
ALTER TABLE `best_in_casual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_in_long_gown`
--
ALTER TABLE `best_in_long_gown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_in_prod`
--
ALTER TABLE `best_in_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_in_ramp`
--
ALTER TABLE `best_in_ramp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_in_swim`
--
ALTER TABLE `best_in_swim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_round`
--
ALTER TABLE `final_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mr_miss_smile`
--
ALTER TABLE `mr_miss_smile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_in_casual`
--
ALTER TABLE `best_in_casual`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `best_in_long_gown`
--
ALTER TABLE `best_in_long_gown`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `best_in_prod`
--
ALTER TABLE `best_in_prod`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `best_in_ramp`
--
ALTER TABLE `best_in_ramp`
  MODIFY `id` int(59) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `best_in_swim`
--
ALTER TABLE `best_in_swim`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `final_round`
--
ALTER TABLE `final_round`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mr_miss_smile`
--
ALTER TABLE `mr_miss_smile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
