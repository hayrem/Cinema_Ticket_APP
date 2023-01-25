-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 08:42 AM
-- Server version: 10.4.24-MariaDB
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
  `number_of_seat` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `show_seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `cinema_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `total_cinema_hall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cinema_halls`
--

CREATE TABLE `cinema_halls` (
  `cinema_hall_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cinema_seats`
--

CREATE TABLE `cinema_seats` (
  `cinema_seat_id` int(11) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `type` char(10) NOT NULL,
  `cinema_hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `duration` time NOT NULL,
  `released` year(4) NOT NULL,
  `language` varchar(50) NOT NULL,
  `description` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `genre`, `country`, `duration`, `released`, `language`, `description`, `image`) VALUES
(1, 'Streets of Blood', 'Zamboniari', 'Cambodia', '01:33:00', 2022, 'Tetum', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'https://res.cloudinary.com/demo/image/upload/sample.jpg'),
(2, 'Wild Oranges', 'Born', 'Cambodia', '11:01:00', 2020, 'Guaraní', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sap', 'https://res.cloudinary.com/demo/image/upload/sample.jpg'),
(3, 'We Own the Night', 'Occleshaw', 'Cambodia', '08:39:00', 2022, 'Kyrgyz', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'https://res.cloudinary.com/demo/image/upload/sample.jpg'),
(4, 'Films to Keep You Awake: The Baby\'s Room (Película', 'Lynde', 'Cambodia', '12:23:00', 2022, 'Northern Sotho', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'https://res.cloudinary.com/demo/image/upload/sample.jpg'),
(5, 'Dragon Ball Z the Movie: The Tree of Might (Dorago', 'Ney', 'Cambodia', '10:40:00', 2022, 'Bislama', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipis', 'https://res.cloudinary.com/demo/image/upload/sample.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `card_id` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expired` date NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `show_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `show_seats`
--

CREATE TABLE `show_seats` (
  `show_seat_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cinema_seat_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `confirm_password`) VALUES
(1, 'lhaine0', 'ssmorthit0@statcounter.com', 'bjUtCIJCPos', 'd3QA8iqbm'),
(2, 'jcatterill1', 'dminall1@seesaa.net', 'hUVqSOa', 'CsKT8wMycK'),
(3, 'lmcfarlan2', 'gplayhill2@people.com.cn', 'gYzzwhI1OU', 'UorbHB'),
(4, 'tmertsching3', 'gelleyne3@auda.org.au', 'AlORxy', 'd9oyOWDzecq'),
(5, 'dibberson4', 'vperrie4@flickr.com', 'QLyrHzt9X6V1', 'qGio4hS'),
(6, 'acorben5', 'jcaudwell5@nbcnews.com', 'JWkpJJfL', 'hVUUowCeJOOH'),
(7, 'spinson6', 'jbrewis6@google.com.au', 'DKA8MdPG', 'IpXRpUx'),
(8, 'cmoneti7', 'fleades7@digg.com', 'n2feuD5', 'EbvF1jw33yjH'),
(9, 'pmanuello8', 'jclipson8@tamu.edu', 'SLqIorHRu3p', 'qHNsQAEPf5'),
(10, 'llafferty9', 'dmarchi9@indiatimes.com', 'lNCUoJO', 'al3pFclIus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `users` (`user_id`),
  ADD KEY `show` (`show_id`),
  ADD KEY `show_seats` (`show_seat_id`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `cinema_halls`
--
ALTER TABLE `cinema_halls`
  ADD PRIMARY KEY (`cinema_hall_id`),
  ADD KEY `cinemas` (`cinema_id`);

--
-- Indexes for table `cinema_seats`
--
ALTER TABLE `cinema_seats`
  ADD PRIMARY KEY (`cinema_seat_id`),
  ADD KEY `cinema_halls` (`cinema_hall_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `booking` (`booking_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `movies` (`movie_id`);

--
-- Indexes for table `show_seats`
--
ALTER TABLE `show_seats`
  ADD PRIMARY KEY (`show_seat_id`),
  ADD KEY `cinema_seats` (`cinema_seat_id`),
  ADD KEY `show` (`show_id`);

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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinema_halls`
--
ALTER TABLE `cinema_halls`
  MODIFY `cinema_hall_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinema_seats`
--
ALTER TABLE `cinema_seats`
  MODIFY `cinema_seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `show_seats`
--
ALTER TABLE `show_seats`
  MODIFY `show_seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
