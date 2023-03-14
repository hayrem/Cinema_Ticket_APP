-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_ticket_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `hall_seat_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `hall_seat_id`, `show_id`, `first_name`, `last_name`, `phone`, `email`, `user_id`) VALUES
(3, 1, 1, 'Nong', 'Phloeut', 99887766, 'nong@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `total_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`hall_id`, `hall_name`, `total_seat`) VALUES
(1, 'A', 50),
(2, 'B', 50),
(3, 'C', 50),
(4, 'D', 50);

-- --------------------------------------------------------

--
-- Table structure for table `hall_seats`
--

CREATE TABLE `hall_seats` (
  `hall_seat_id` int(11) NOT NULL,
  `seat_number` varchar(50) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `hall_shows`
-- (See below for the actual view)
--
CREATE TABLE `hall_shows` (
`show_id` int(11)
,`movie_id` int(11)
,`title` varchar(100)
,`genre` varchar(100)
,`country` varchar(100)
,`duration` time
,`released` year(4)
,`language` varchar(100)
,`description` varchar(255)
,`image` varchar(255)
,`trailer` varchar(255)
,`date_show` date
,`time_start` varchar(11)
,`hall_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `duration` time NOT NULL,
  `released` year(4) NOT NULL,
  `language` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `country`, `genre`, `duration`, `released`, `language`, `description`, `image`, `trailer`, `post`) VALUES
(32, 'cxvcb', 'France', 'Action', '02:00:07', 2023, 'Khmer', 'sdgfhgjhkj', 'IMG-63f097a60668a4.69175820.jpg', 'https://www.youtube.com/embed/U9Br9QWyq9s', 1),
(33, 'asdf', 'France', 'Action', '02:00:07', 2023, 'Khmer', 'sdgfhgjhkj', 'IMG-63f097a60668a4.69175820.jpg', 'https://www.youtube.com/embed/U9Br9QWyq9s', 1),
(34, 'niv', 'France', 'Action', '02:00:07', 2023, 'Khmer', 'sdgfhgjhkj', 'IMG-63f097a60668a4.69175820.jpg', 'https://www.youtube.com/embed/U9Br9QWyq9s', 1),
(35, 'the', 'France', 'Action', '02:00:07', 2023, 'Khmer', 'sdgfhgjhkj', 'IMG-63f097a60668a4.69175820.jpg', 'https://www.youtube.com/embed/U9Br9QWyq9s', 1),
(36, 'x cv', 'France', 'Adventure', '02:00:07', 2023, 'Poland', 'adsfdgfhgj ASDSFDGHGHMJ sadfsdgf', 'IMG-63f0aafff33515.45391044.jpg', 'https://www.youtube.com/embed/U9Br9QWyq9s', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time_start` varchar(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `date_show` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `movie_id`, `time_start`, `hall_id`, `date_show`) VALUES
(1, 29, '2:00', 2, '2023-02-08'),
(22, 32, 'A1', 1, '2023-01-01'),
(23, 34, 'A1', 2, '2023-01-25'),
(24, 35, 'A7', 4, '2023-01-01'),
(25, 33, 'A1', 3, '2023-01-01'),
(26, 36, 'A5', 3, '2023-01-01'),
(27, 32, 'A1', 1, '2023-01-01'),
(28, 36, '7:00 PM', 1, '2023-01-18'),
(29, 32, '7:00 PM', 4, '2023-01-31');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ticket`
-- (See below for the actual view)
--
CREATE TABLE `ticket` (
`show_id` int(11)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`phone` int(10)
,`hall_seat_id` int(11)
,`user_id` int(11)
,`movie_id` int(11)
,`time_start` varchar(11)
,`hall_id` int(11)
,`date_show` date
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Marilin', 'Kienzle', 'mkienzle0@spiegel.de', 'Gl0IlA5xqYtD', 'customer'),
(2, 'Aldwin', 'Baddiley', 'abaddiley1@berkeley.edu', 'YOwdt8SbH', 'customer'),
(3, 'Lelah', 'Millership', 'lmillership2@skyrock.com', 'M60z3TUzTg9C', 'seller'),
(4, 'Wildon', 'Jemmison', 'wjemmison3@drupal.org', 'vVpuk9ggXD3g', 'seller'),
(5, 'Boigie', 'Peacham', 'bpeacham4@nifty.com', 'w2prwz7gUe', 'customer'),
(9, 'Ni', 'Ka', 'sreyrea.han@student.pasedfghjresnumerquies.org', '$2y$10$p.nsEQfGbH5iuLEZlDZDB.zUIzdOZ/ss9bx.KOQRUCKZYiDqthgg6', 'seller'),
(10, 'lak', 'na', 'dd@gmail.com', '$2y$10$yM9BVamKEfeDDBuVEGMzWe4.VOTSugOK/zXuATKws89ux1ZDYbsZu', 'customer'),
(11, 'ma', 'na', '09dd@gmail.com', '$2y$10$NLMjN0E9W3dllp308qB66OLAlD5Au/c1KOKa64jqnOBxJ5OMGEtby', 'customer');

-- --------------------------------------------------------

--
-- Structure for view `hall_shows`
--
DROP TABLE IF EXISTS `hall_shows`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hall_shows`  AS SELECT `shows`.`show_id` AS `show_id`, `movies`.`movie_id` AS `movie_id`, `movies`.`title` AS `title`, `movies`.`genre` AS `genre`, `movies`.`country` AS `country`, `movies`.`duration` AS `duration`, `movies`.`released` AS `released`, `movies`.`language` AS `language`, `movies`.`description` AS `description`, `movies`.`image` AS `image`, `movies`.`trailer` AS `trailer`, `shows`.`date_show` AS `date_show`, `shows`.`time_start` AS `time_start`, `halls`.`hall_name` AS `hall_name` FROM ((`shows` join `movies` on(`shows`.`movie_id` = `movies`.`movie_id`)) join `halls` on(`shows`.`hall_id` = `halls`.`hall_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `ticket`
--
DROP TABLE IF EXISTS `ticket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ticket`  AS SELECT `booking`.`show_id` AS `show_id`, `booking`.`first_name` AS `first_name`, `booking`.`last_name` AS `last_name`, `booking`.`phone` AS `phone`, `booking`.`hall_seat_id` AS `hall_seat_id`, `booking`.`user_id` AS `user_id`, `shows`.`movie_id` AS `movie_id`, `shows`.`time_start` AS `time_start`, `shows`.`hall_id` AS `hall_id`, `shows`.`date_show` AS `date_show` FROM (`booking` join `shows` on(`booking`.`show_id` = `shows`.`show_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `hall_seats` (`hall_seat_id`),
  ADD KEY `shows` (`show_id`),
  ADD KEY `users` (`user_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `hall_seats`
--
ALTER TABLE `hall_seats`
  ADD PRIMARY KEY (`hall_seat_id`),
  ADD KEY `booking` (`booking_id`),
  ADD KEY `halls` (`hall_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `movies` (`movie_id`),
  ADD KEY `halls` (`hall_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hall_seats`
--
ALTER TABLE `hall_seats`
  MODIFY `hall_seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
