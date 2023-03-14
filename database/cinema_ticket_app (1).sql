-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2023 at 06:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
(3, 23, 23, 'Nong', 'Phloeut', 99887766, 'nong@gmail.com', 1);

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
,`trailer` varchar(400)
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
  `trailer` varchar(400) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `country`, `genre`, `duration`, `released`, `language`, `description`, `image`, `trailer`, `post`) VALUES
(39, 'Morbius', 'English', 'Action', '01:44:00', 2022, 'English', 'Watch out for the thrilling moments, gravity-defying stunts and special effects that compensate for what’s missing in making it the action-adventure extravaganza it was expected to be.', 'IMG-63fb4db4c1b7e2.24942822.png', 'https://www.youtube.com/embed/oZ6iiRrz1SY', 1),
(40, 'Spider Man No Way Home', 'English', 'Adventure', '02:30:00', 2021, 'English', 'Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange\'s spell goes horribly wrong, leading to unwanted guests entering their universe. \r\n         \r\n                    ', 'IMG-63fb50c0b3b1f9.10369985.png', 'https://www.youtube.com/embed/JfVOs4VSpmA\" ', 1),
(41, 'Black Miror', 'English', 'Adventure', '02:00:00', 2011, 'English', 'In an abstrusely dystopian future, several individuals grapple with the manipulative effects of cutting edge technology in their personal lives and behaviours.', 'IMG-63fb519aeb0ef2.19583613.jpg', 'https://www.youtube.com/embed/yef_HfQoBd8&quot', 1),
(42, 'Avatar The Way Of Water', 'France', 'Adventure', '03:00:00', 2022, 'English', 'humans want to use the planet as a colony of Earth, which has become uninhabitable because of the climate crisis.', 'IMG-63fb524ab50569.62137925.png', 'www.youtube.com/embed/YXtWPVFk5TQ&quot;', 1),
(43, 'Harry Potter', 'English', 'Action', '01:30:00', 2001, 'English', 'his father&#039;s perpetually untidy black hair, his mother&#039;s bright green eyes, and a lightning bolt-shaped scar on his forehead.', 'IMG-63fb52d987be98.88241069.png', 'https://www.youtube.com/embed/7XqgEU60skY&quot; ', 1),
(44, 'Black Panther', 'English', 'Adventure', '02:15:00', 2018, 'English', '                        After his father\'s death, T\'Challa returns home to Wakanda to inherit his throne. However, a powerful enemy related to his family threatens to attack his nation. \r\n                    ', 'IMG-63fb53a4ecc0e2.21299693.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xjDjIWPwcPU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(45, 'Ant Man', 'English', 'Adventure', '02:00:00', 2023, 'English', 'Ant-Man and the Wasp find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that pushes them beyond the limits of what they thought was possible.', 'IMG-63fb54940e75b0.87398430.jpg', '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/5WfTEZJnv_8&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', 1),
(47, 'Parker', 'English', 'Action', '02:00:00', 2011, 'English', 'Parker, a thief, is double-crossed by his crew members, who leave him to die. However, he survives and decides to settle scores with them, with the help of an unlikely ally.', 'IMG-63fb5a84defd42.87542619.png', '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/QGu6InUcdUY&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', 1),
(48, 'Morbius', 'English', 'Action', '01:20:30', 2011, 'English', ': Watch out for the thrilling moments, gravity-defying stunts and special effects that compensate for what’s missing in making it the action-adventure extravaganza it was expected to be.', 'IMG-63fb6a3f47dbb4.14100292.jpg', '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/oZ6iiRrz1SY&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', 0);

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
(33, 39, '2:30 AM', 1, '2023-01-01'),
(34, 40, '9:00 AM', 1, '2023-01-01'),
(36, 41, '11:00 AM', 1, '2023-01-01'),
(37, 42, '11:00 AM', 2, '2023-01-12'),
(38, 43, '11:00 AM', 3, '2023-01-31'),
(39, 44, '1:00 PM', 3, '2023-01-01'),
(40, 45, '1:00 PM', 2, '2023-01-01'),
(41, 43, '11:00 AM', 3, '2023-01-31'),
(42, 44, '1:00 PM', 3, '2023-01-01'),
(43, 45, '1:00 PM', 2, '2023-01-01'),
(44, 47, '3:00 PM', 2, '2023-01-01');

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
  `role` varchar(50) NOT NULL DEFAULT 'customer',
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `image`) VALUES
(17, 'Nong', 'Phloeut', 'nongphloeut123@gmail.com', '$2y$10$9GT1JFj8Af6BtNzp0DOZn.pysrM22F5FEYD5un2pXaGdmVIuEz8py', 'seller', 'IMG-63fb3b076d7216.97439373.png'),
(18, 'Nong', 'Phloeut', 'nongphloeut21@gmail.com', '$2y$10$IA9jvYVZQTBfSgLtml0AA.zCh8wmtzArlofxHOspO4H4dRORav4d.', 'customer', ''),
(19, 'Nong', 'Phloeut', 'nongphloeut1234@gmail.com', '$2y$10$3sNT40UT.d247j0uVww1Q.OWQbrEYm220xXeJqrbnUN.rK49wLzZ6', 'customer', 'IMG-63fb62b13bfc45.66178265.png'),
(20, 'Nong', 'Phleut', 'nongphloeut222@gmail.com', '$2y$10$1/zZs1qaj/PFXhXEDs6H/u2VWKoM/xwAlV5ryIYghOy8fSjfOGeFC', 'customer', 'IMG-63fb65503a1730.50597223.png'),
(21, 'Nong', 'Phloeut', 'nongphloeut1222@gmail.com', '$2y$10$cIlsR0sDjVD1k8n/XOdiYeyWfTP2cTrNyFzSeExU4kcU.o2Nu4FWC', 'seller', 'IMG-63fb66e81d3f02.54356633.png'),
(22, 'kadin', 'sit', 'kadin@gmail.com', '$2y$10$Ci5hhphKzeOx4WTpxx9JouXjEL1vY9f6YQCQ5TJyErwGEYxNroxlm', 'customer', 'IMG-6401fa58f2f155.85834839.png');

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
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
