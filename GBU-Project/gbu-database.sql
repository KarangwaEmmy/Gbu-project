-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 06:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbu-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic-year`
--

CREATE TABLE `academic-year` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic-year`
--

INSERT INTO `academic-year` (`id`, `year`, `semester`, `date`) VALUES
(7, '2018-2019', 'Semester 2', '2019-05-30 20:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `phone`, `type`, `password`, `submitdate`) VALUES
(1, 'Ingabire', 'Ingabire@gmail.com', '0780695831', 'Secretary', '$2y$10$NbMmYl9oOsQADh5Yo3jusubcBWAcDMBU5uYWOUEEQUrlTArtCwNae', '2019-05-01 10:51:26'),
(3, 'Sandrine', 'Sandrine@gmail.com', '0787772600', 'Treasurer', '$2y$10$juV1Cx.y/zx780R1uOQfbuIJhwI8aBpUduE7BwI60hFdfrUI6JipG', '2019-05-01 10:52:41'),
(4, 'Bihozagara', 'Admin', '0780695000', 'Admin', '$2y$10$W9f6nTlKlNhFtazh7x5Xfe6dSM2GThbw5sgeFGDM8sOV6DL.3rtqe', '2019-05-01 10:53:14'),
(5, 'Emmy', 'karangwae10@gmail.com', '0786639530', 'treasurer', '$2y$10$gZvMLMejfXwwADToKj3ZnOFwz221F8INaEhA2F5XKsIkT3YGky80m', '2019-05-06 18:44:16'),
(6, 'Iribagiza', 'Iribagiza@gmail.com', '07877678135', 'secretary', '$2y$10$PU16m7VAltyxO4p/EIrsneJE3xmuE/QyAXIowO/x56hfwZRaaaJbW', '2019-05-23 15:20:26'),
(7, 'karangwa', 'karangwa@gmail.com', '0787867678', 'Treasurer', '$2y$10$EQCdDQzUQ83xXAirp7Cw.OVMqMD7Td75ArAO4Mqo078bBkxBr3E6q', '2019-05-23 15:24:19'),
(8, 'Rusizana', 'Rusizana@gmail.com', '078766576456', 'Treasurer', '$2y$10$0F.sIeOIHcBUP1yNaNIjNOUu/RIIHd./cr64jzwmlUSJC02BVAj6a', '2019-05-23 15:35:25'),
(9, 'Phionah', 'Phionah@gmail.com', '08966776876', 'secretary', '$2y$10$iVw5HQLI5Qq0UQ3xqnD.2e1cDWmFlRfv.jfCDN04o8ti3MHmsTpvy', '2019-05-27 17:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `person`, `details`, `submitdate`) VALUES
(1, '', '', '', '2019-05-07 10:10:35'),
(2, '$name', '$person', '$activity', '2019-05-07 10:14:20'),
(3, 'Karangwa', 'kemmy', 'Activity!', '2019-05-07 10:20:28'),
(4, 'Karangwa', 'kemmy', 'Activity!', '2019-05-07 10:25:30'),
(5, 'hjkhjk', 'Sandrine', 'Activity! hgjkhjkhjkhljkl', '2019-05-08 18:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `amisdedbu`
--

CREATE TABLE `amisdedbu` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `homechurch` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `Year of graduation` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amisdedbu`
--

INSERT INTO `amisdedbu` (`id`, `firstname`, `lastname`, `email`, `phone`, `homechurch`, `sex`, `district`, `sector`, `department`, `Year of graduation`, `submitdate`) VALUES
(1, 'Diane', 'Musabyimana', 'email@gmail.com', '078345678', 'Bethel', 'Female', 'Kicukiro', 'Kanombe', 'INTERCESSION', '2018-2019', '2019-05-25 03:40:28'),
(2, 'Underson', 'GATARE', 'email@gmail.com', '078888888', 'Zion Temple', 'Male', 'Gasabo', 'Kimironko', 'LITERATURE', '2019-2020', '2019-05-25 03:42:15'),
(3, 'David', 'SAFARI', 'email@gmail.com', '07899999999', 'CLA', 'Male', 'Nyarugenge', 'Muhima', 'SOCIAL AFFAIRES', '2018-2019', '2019-05-25 03:43:55'),
(4, 'Emmy', 'Karangwa', 'email@gmail.com', '0787777777', 'Restoration ', 'Male', 'Huye', 'Remera', 'MEDIA', '2018-2019', '2019-05-25 03:45:39'),
(5, 'Aline', 'Iribagiza', 'email@gmail.com', '078654321', 'Miracle Center', 'Female', 'Gasabo', 'Kimironko', 'INTERCESSION', '2018-2019', '2019-05-25 03:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `person`, `details`, `submitdate`) VALUES
(6, 'fds', 'fsd', ' Write Announcement!Write Announcement!Write Announcement!Write Announcement!Write Announcement!Write Announcement!Write Announcement!', '2019-05-07 10:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE `cell` (
  `id` int(11) NOT NULL,
  `academic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cellleader` varchar(255) NOT NULL,
  `cellcordinator` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`id`, `academic`, `name`, `cellleader`, `cellcordinator`, `period`, `submitdate`) VALUES
(1, '', 'Grace of God', 'Akimana samilla sonia', 'Nyiramunyura Alice', 'Tuesday-Thursday', '2019-05-25 09:18:02'),
(2, '', 'Morning star', 'Shingiro Roger Verdic', 'Hirwa Joshua', 'Monday-Thursday', '2019-05-25 09:19:31'),
(3, '', 'Jehovah Shalom', 'Isimbi K. sandrine', 'Hirwa Joshua', 'Wesnday-friday', '2019-05-25 09:20:27'),
(4, '', 'New Covenant', 'Hategekimana David', 'Kimararungu Augist', 'Tuesday-Thursday', '2019-05-25 09:24:19'),
(5, '', 'Chosen by Jesus', 'Nyirankundimana Yusta', 'Kimararungu Augist', 'Tuesday-Thursday', '2019-05-25 09:25:21'),
(6, '', 'God&#39;s Kingdom', 'Bisesta Isaac', 'Rubona Kevin', 'Tuesday-Thursday', '2019-05-25 09:29:57'),
(7, '', 'Jehovah Nissi', 'Kabatesi Sylvia', 'Rubona Kevin', 'Wesnday-friday', '2019-05-25 09:31:23'),
(8, '', 'Forgiveness', 'Munezero Chance', 'Nyiramunyura Alice', 'Monday-Thursday', '2019-05-25 09:32:59'),
(9, '', 'Ezra Generation', 'Utamuliza Alida', 'Rubona Kevin', 'Monday-Thursday', '2019-05-25 09:33:39'),
(10, '', 'Set Apart', 'Karasanyi Johsnon', 'Hirwa Joshua', 'Monday-Thursday', '2019-05-25 09:35:50'),
(11, '', 'Ambassadors', 'Devotha', 'Rubona Kevin', 'Tuesday-Thursday', '2019-05-25 09:37:06'),
(12, '', 'Conquerors', 'Rutuku charles', 'Kimararungu Augist', 'Tuesday-Thursday', '2019-05-25 09:38:01'),
(13, '', 'Divine', 'Manzi Frank', 'Kimararungu Augist', 'Monday-Thursday', '2019-05-25 09:44:04'),
(14, '', 'Come to Jesus', 'Nyacyesa Juru ', 'Rubona Kevin', 'Monday-Thursday', '2019-05-25 09:46:01'),
(15, '', 'Dominion', 'Rubona Kevin', 'Nyiramunyura Alice', 'Tuesday-Thursday', '2019-05-25 09:47:01'),
(16, '', 'Redeemed', 'Valens', 'Hirwa Joshua', 'Wesnday-friday', '2019-05-25 09:48:07'),
(17, '', 'Carmel', 'Izere Byishimo Patience', 'Nyiramunyura Alice', 'Monday-Thursday', '2019-05-25 09:49:07'),
(18, '', 'Bethel', 'Dushimumukiza Marie Flora', 'Nyiramunyura Alice', 'Tuesday-Thursday', '2019-05-25 09:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `academic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `Vis` varchar(255) NOT NULL,
  `secretary` varchar(255) NOT NULL,
  `treasurer` varchar(255) NOT NULL,
  `fellowshipday` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `academic`, `name`, `leader`, `Vis`, `secretary`, `treasurer`, `fellowshipday`, `submitdate`) VALUES
(1, '', 'PROTOCOL', 'AKIMANA Henriette', 'Augustin KIMARARUNGU', 'AKIMANA Samilla Sonia', 'RUTUKU Charles', 'Friday', '2019-05-24 21:56:09'),
(2, '', 'EVANGELISM', 'TURATSINZE Bosco', 'John Doe', 'John Doe', 'John Doe', 'Friday', '2019-05-24 21:59:52'),
(3, '', 'SOUND', 'NKUNDIMANA Jean D\'Amour', 'John Doe', 'John Doe', 'John Doe', 'Wednesday', '2019-05-24 22:02:09'),
(4, '', 'LAST HARVESTERS', 'TUMUSIME James', 'John Doe', 'John Doe', 'John Doe', 'Tuesday', '2019-05-24 22:03:27'),
(5, '', 'MEDIA', 'IRADUKUNDA Emmy', 'John Doe', 'John Doe', 'John Doe', 'Thursday', '2019-05-24 22:04:57'),
(6, '', 'SOCIAL AFFAIRES', 'BISETSA Isaac', 'John Doe', 'John Doe', 'John Doe', 'Wednesday', '2019-05-24 22:05:38'),
(7, '', 'INTERCESSION', ' KWIHANGANA Faustin', 'John Doe', 'John Doe', 'John Doe', 'Monday', '2019-05-24 22:06:58'),
(8, '', 'CREATIVE DANCE', 'TUMUSIME Emmanuel', 'Jesca', 'John Doe', 'John Doe', 'Tuesday', '2019-05-24 22:09:16'),
(9, '', 'RHEMA MINISTRIES', 'NDABUNGUYE Bienvenue', 'Didier', 'John Doe', 'John Doe', 'Tuesday', '2019-05-24 22:11:44'),
(10, '', 'LITERATURE', 'NYACYESU Juru Jessy', 'Didier', 'John Doe', 'John Doe', 'Sunday', '2019-05-24 22:14:45'),
(11, '2019-2020', 'Intwarane', 'Christella', 'Iranzi', 'Aline', 'Chance', 'Thursday', '2019-05-29 16:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `academic` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `academic`, `date`, `donor`, `amount`, `comment`, `submitdate`) VALUES
(1, '', '05/24/19', 'INGABIRE Marcia', '12500rwf', 'Supporting Save a soul tournament', '2019-05-25 01:01:50'),
(2, '', '01/02/19', 'John Mugabo', '15000rwf', ' Supporting 2019 Outreach', '2019-05-25 01:03:08'),
(3, '', '05/15/19', 'MUYANGO Jimmy', '30000', 'Supporting Save a soul tournament', '2019-05-25 01:07:48'),
(4, '', '04/05/19', 'GBUR', '50000', 'Supporting GBUR', '2019-05-25 01:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `submitter` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `submitter`, `date`, `name`, `amount`, `details`, `submitdate`) VALUES
(1, 'Treasure', '03/13/19', 'Water', '5000', 'Buying a box of water(24bottles)', '2019-05-25 01:38:35'),
(2, 'Treasure', '05/10/19', 'Repairing an amplifier', '6000', 'A damaged amplifier to b repaired', '2019-05-25 01:40:03'),
(3, 'Treasure', '12/21/18', 'Communication', '8000', 'Paying airtime taken  ', '2019-05-25 01:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `gbumember`
--

CREATE TABLE `gbumember` (
  `id` int(11) NOT NULL,
  `academic` varchar(255) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `homechurch` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gbumember`
--

INSERT INTO `gbumember` (`id`, `academic`, `firstname`, `lastname`, `email`, `phone`, `homechurch`, `cell`, `department`, `sex`, `graduation`, `school`, `faculty`, `image`, `submitdate`) VALUES
(6, '', ' Rhema', 'Patience', 'byishimo@gmail.com', '0789654312', 'Zion tempre', '1', '', 'Female', '1', 'ICT', 'IS', '', '2019-05-25 12:48:20'),
(7, '', 'Uwase ', 'Sandrine', '1432@gmail.com', '0786532345', 'Miracle center', '11', '', 'Female', '1', 'ICT', 'Computer Engineering', '', '2019-05-25 12:50:05'),
(8, '', 'Isimbi', 'Natasha', 'natasha@gmail.com', '0786654432', 'Restoration church', '13', '4', 'Female', '2020-2021', 'Geology', 'GE', '', '2019-05-25 12:53:18'),
(34, '', 'Iribagiza ', 'Phiona', '123@gmail.com', '078880987', 'Zion tempre', '16', '5', 'Female', '11', 'Architecture', 'EMV', '', '2019-05-25 18:30:08'),
(36, '', 'Ruth', 'Muteteri', 'ruth@gmail.com', '0787772618', 'Revelation church', '9', '2', 'Female', '2019-2020', 'Ict', 'IT', '', '2019-05-25 19:41:46'),
(38, 'Array', 'Jaque', 'Bihozagara', 'Ingabire@gmail.com', '0780695831', 'Restoration church', '15', '1', 'Male', '2020-2021', 'Architecture', 'IT', '', '2019-05-27 20:08:18'),
(39, '2018-2019', 'Chrysostome', 'Mugisha', 'shyaka@gmail.com', '0788872494', 'Assembly', '9', '4', 'Male', '2018-2019', 'Surveying', 'Surveying', '', '2019-05-27 20:15:19'),
(40, '2018-2019', 'Ingabire', 'Marcia', 'Ingabire@gmail.com', '0676472532', 'Restoration church', '16', '1', 'Female', '2021-2022', 'Architecture', 'IT', '', '2019-05-27 20:26:20'),
(41, '2018-2019', 'Emmy', 'Karangwa', 'karangwae10@gmail.com', '0783133033', 'Revelation Church Kabarore', '13', '6', 'Male', '2018-2019', 'ICT', 'Computer and Software Engineering', '', '2019-05-27 23:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `MemberId` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `MemberId`, `image`, `submitdate`) VALUES
(1, '39', '215043150.jpg', '2019-05-27 21:45:45'),
(3, '41', '216255082.JPG', '2019-05-27 23:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `offerings` varchar(255) NOT NULL,
  `tithe` varchar(255) NOT NULL,
  `thankgiving` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `date`, `offerings`, `tithe`, `thankgiving`, `comment`, `submitdate`) VALUES
(1, '05/17/19', '11000', '4000', '0', 'Sunday&#39;s service', '2019-05-25 01:13:13'),
(2, '02/06/19', '3420', '4300', '0', 'Friday service', '2019-05-25 01:14:26'),
(3, '01/30/19', '4050', '3400', '0', 'Sunday Service', '2019-05-25 01:15:47'),
(4, '11/22/18', '4500', '16000', '0', 'Sunday service', '2019-05-25 01:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic-year`
--
ALTER TABLE `academic-year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amisdedbu`
--
ALTER TABLE `amisdedbu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cell`
--
ALTER TABLE `cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gbumember`
--
ALTER TABLE `gbumember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic-year`
--
ALTER TABLE `academic-year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `amisdedbu`
--
ALTER TABLE `amisdedbu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cell`
--
ALTER TABLE `cell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gbumember`
--
ALTER TABLE `gbumember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
