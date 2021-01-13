-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 12:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproflio`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `artitle` varchar(200) NOT NULL,
  `ardesc` text NOT NULL,
  `arimg` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `artitle`, `ardesc`, `arimg`, `category_id`, `user_id`) VALUES
(2, 'News Project', 'This is PHP Project With MVC Framework (https://github.com/AbdelkawySalah/NewsWithMVC)', 'NewsProject_x2-700x466.jpg', 11, 1),
(3, 'Angular News Project', 'Angular News Project(https://github.com/AbdelkawySalah/AngularNewsProject)', 'lakK5zvA.jpg', 11, 1),
(4, 'APi Project', 'RestFulAPi Project and Using Postman Website (https://github.com/AbdelkawySalah/RestFulApi)', 'api-2-2.png', 11, 1),
(5, 'Itamss Website', 'Itamss Company  Website(http://www.itamss.com)', 'ITAMSs-Egypt-982.jpeg', 11, 1),
(6, 'Design Courses Website Page', 'Design Courses Website Page(https://github.com/AbdelkawySalah/coursesweb)', 'Web-Development-Course.jpg', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(60) NOT NULL,
  `categorylink` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `categorylink`, `user_id`) VALUES
(11, 'portfolio', 'PORTFOLIO', 1),
(12, 'about', 'about', 1),
(13, 'certifieds', 'certifieds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certfieds`
--

CREATE TABLE `certfieds` (
  `id` int(11) NOT NULL,
  `cert_tit` varchar(150) NOT NULL,
  `cert_img` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certfieds`
--

INSERT INTO `certfieds` (`id`, `cert_tit`, `cert_img`, `user_id`) VALUES
(1, 'API Certificate', 'API.JPG', 1),
(3, 'MVC Certificate', 'MVC.JPG', 1),
(4, 'Front End Developer Course', 'udicty.jpg', 1),
(5, 'Full Stack PhP Developer Coursed', 'fullstack.jpg', 1),
(6, 'Business model innovation ', 'Business model innovation.jpeg', 1),
(7, 'Vb net & vb6 & Sqlserver  Course ', 'AGC.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sname`, `email`, `password`) VALUES
(1, 'ahmed', 'ahmed@yahoo.com', '123'),
(3, 'abdelkawy', 'abdou@yahoo.com', '3631373');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `certfieds`
--
ALTER TABLE `certfieds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `certfieds`
--
ALTER TABLE `certfieds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `certfieds`
--
ALTER TABLE `certfieds`
  ADD CONSTRAINT `certfieds_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
