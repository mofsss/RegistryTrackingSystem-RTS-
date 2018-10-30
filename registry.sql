-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 09:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
(12345, 'mof1234');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

DROP TABLE IF EXISTS `pm`;
CREATE TABLE `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(1, 2, '', 1, 0, 'cufyhvg', 1540884797, '', ''),
(1, 1, 'request', 3, 1, 'gstdhchvhvh', 1540884721, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `rdata`
--

DROP TABLE IF EXISTS `rdata`;
CREATE TABLE `rdata` (
  `filename` text NOT NULL,
  `filenumber` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata`
--

INSERT INTO `rdata` (`filename`, `filenumber`, `id`) VALUES
('Charles Lwanga College of Education', 'ECZ/2/3/1', 1),
('Solwezi College of Education', 'ECZ/2/3/10', 10),
('Immaculate Visitation College of Education', 'ECZ/2/3/11', 11),
('Kitwe Institute College of Education', 'ECZ/2/3/12', 12),
('Zambia Institute of Special Education', 'ECZ/2/3/13', 13),
('Lyambai College of Education', 'ECZ/2/3/14', 14),
('Jubeva College of Education', 'ECZ/2/3/15', 15),
('Montessori College of Education', 'ECZ/2/3/16', 16),
('Makeni Islamic College of Education', 'ECZ/2/3/17', 17),
('Paglory College of Education', 'ECZ/2/3/18', 18),
('Kafue College of Education', 'ECZ/2/3/19', 19),
('Chipata College of Education', 'ECZ/2/3/2', 2),
('Mufulira Professional College Of Education', 'ECZ/2/3/20', 20),
('Northern College of Education', 'ECZ/2/3/21', 21),
('Quest Project', 'ECZ/2/3/22', 22),
('Musi-O-Tunya College of Education', 'ECZ/2/3/23', 23),
('Monze College of Education', 'ECZ/2/3/24', 24),
('David Livingstone College of Education', 'ECZ/2/3/3', 3),
('Kasama College of Education', 'ECZ/2/3/4', 4),
('Kitwe College of Education', 'ECZ/2/3/5', 5),
('Malcolm Moffat College of Education', 'ECZ/2/3/6', 6),
('Mansa College of Education', 'ECZ/2/3/7', 7),
('Mongu College of Education', 'ECZ/2/3/8', 8),
('Mufulira College of Education', 'ECZ/2/3/9', 9);

-- --------------------------------------------------------

--
-- Table structure for table `rdata1`
--

DROP TABLE IF EXISTS `rdata1`;
CREATE TABLE `rdata1` (
  `filename1` text NOT NULL,
  `filenumber1` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata1`
--

INSERT INTO `rdata1` (`filename1`, `filenumber1`, `id`) VALUES
('Circulars to Educational Institutions ', 'ECZ/2/11/1', 1),
('Circulars to Educational Institutions ', 'ECZ/2/11/1', 1),
('Circulars – Cabinet Office', 'ECZ/2/11/2', 2),
('Urgent Matters', 'ECZ/2/11/3', 3),
('Hotel Accommodation', 'ECZ/5/3/1', 4),
('Luncheons ', 'ECZ/5/3/2', 5),
('Staff Canteen', 'ECZ/5/3/3', 6),
('Printing of Examination Papers', 'ECZ/5/5/1', 7),
('Printing of Examination Syllabi ', 'ECZ/5/5/2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `rdata2`
--

DROP TABLE IF EXISTS `rdata2`;
CREATE TABLE `rdata2` (
  `filename` text NOT NULL,
  `filenumber` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata2`
--

INSERT INTO `rdata2` (`filename`, `filenumber`, `id`) VALUES
('The African Forum for Children’s Literacy in Science and Technology', 'ECZ/6/7/1', 1),
('UNICEF', 'ECZ/6/7/2', 2),
('African Association for Public Administration and Management', 'ECZ/6/7/3', 3),
('UNESCO', 'ECZ/6/7/4', 4),
('National Assessment Project', 'ECZ/6/7/5', 5),
('SADC Technical Committee on Special Education', 'ECZ/6/7/6', 6),
('Russian Education Aid for Development (READ)', 'ECZ/6/7/7', 7),
('UNICEF/MOE ECCDE', 'ECZ/6/7/8', 8),
('USAID Project', 'ECZ/6/7/9', 9),
('Learning Matrics Agenda', 'ECZ/6/7/10', 10),
('Irish Embassy', 'ECZ/6/7/11', 11),
('Camfed', 'ECZ/6/7/12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `rdata3`
--

DROP TABLE IF EXISTS `rdata3`;
CREATE TABLE `rdata3` (
  `filename` text NOT NULL,
  `filenumber` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata3`
--

INSERT INTO `rdata3` (`filename`, `filenumber`, `id`) VALUES
('Trade Unions and Employees Welfare', 'ECZ/7/2/1', 1),
('NAPSA', 'ECZ/7/2/2', 2),
('Public Service Pensions Fund', 'ECZ/7/2/3', 3),
('Workers Compensation', 'ECZ/7/2/4', 4),
('First Aid Kit', 'ECZ/7/2/5', 5),
('Pubic Holidays', 'ECZ/7/17/1', 6),
('Educational Broadcasting ', 'ECZ/9/4/1', 7),
('Transport', 'ECZ/10/2/1', 8),
('Printing Equipment  ', 'ECZ/10/8/1', 9),
('Office Furniture and Equipment ', 'ECZ/10/8/2', 10),
('Permission to use Council Property ', 'ECZ/10/8/3', 11),
('Office Accommodation ', 'ECZ/10/10/1', 12),
('Printing Services ', 'ECZ/10/21/1', 13),
('Government Gazette ', 'ECZ/10/21/2', 14),
('Authority to Travel Abroad', 'ECZ/52/1/1', 15),
('Freight Services ', 'ECZ/52/1/2', 16),
('Funeral Fund ', 'ECZ/52/1/3', 17),
('Library', 'ECZ/52/1/4', 18),
('Obituary', 'ECZ/52/1/5', 19),
('Registry', 'ECZ/52/1/6', 20);

-- --------------------------------------------------------

--
-- Table structure for table `rdata4`
--

DROP TABLE IF EXISTS `rdata4`;
CREATE TABLE `rdata4` (
  `filename` text NOT NULL,
  `filenumber` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata4`
--

INSERT INTO `rdata4` (`filename`, `filenumber`, `id`) VALUES
('Examiner’s Training ', 'ECZ/53/1/1', 1),
('Staff Training and Development', 'ECZ/53/1/2', 2),
('Recognition of Qualifications', 'ECZ/53/1/3', 3),
('SADC Human Resource Development Sector Technical Committee on Accreditation and Certification', 'ECZ/53/1/4', 4),
('Job Evaluation', 'ECZ/53/1/5', 5),
('Recruitment (EC 1 – 4) -  (ECZ 1 -2)', 'ECZ/53/8/1', 6),
('Recruitment (EC 5 – 7) -  (ECZ 3 - 5)', 'ECZ/53/8/2', 7),
('Recruitment (EC 8 – 10) - (ECZ 6 - 8)', 'ECZ/53/8/3', 8),
('Staffing ', 'ECZ/53/8/4', 9),
('Temporary Employees', 'ECZ/53/8/5', 10),
('Application for Employment', 'ECZ/53/8/6', 11),
('Appointment of Councillors ', 'ECZ/53/8/7', 12),
('Appointments and Promotions ', 'ECZ/53/8/8', 13),
('Student Research ', 'ECZ/53/8/9', 14),
('Secondments ', 'ECZ/53/9/1 ', 15),
('Separations – Pension’s Gratuities ', 'ECZ/53/9/2', 16),
('Conditions of Service ', 'ECZ/53/9/3', 17),
('Group Life Assurance ', 'ECZ/53/9/4', 18),
('Social Tour ', 'ECZ/53/9/5', 19),
('Commuted Car Allowance ', 'ECZ/53/9/6', 20),
('Group Pension Scheme ', 'ECZ/53/9/7', 21),
('Medical Services ', 'ECZ/53/9/8', 22),
('Group Personal Accident Scheme ', 'ECZ/53/9/9', 23),
('Establishment ', 'ECZ/53/10/1', 24),
('ECZ Forms', 'ECZ/53/10/2', 25),
('Employees Accommodation', 'ECZ/53/11/1', 26),
('Agreements – Housing ', 'ECZ/53/11/2', 27),
('Building and Maintenance ', 'ECZ/53/11/3', 28),
('Purchase of Houses ', 'ECZ/53/11/4', 29),
('Contractors/Cleaning Services ', 'ECZ/53/11/5', 30);

-- --------------------------------------------------------

--
-- Table structure for table `rdisplay`
--

DROP TABLE IF EXISTS `rdisplay`;
CREATE TABLE `rdisplay` (
  `filename` text NOT NULL,
  `filenumber` varchar(50) NOT NULL,
  `department` text NOT NULL,
  `recipient` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdisplay`
--

INSERT INTO `rdisplay` (`filename`, `filenumber`, `department`, `recipient`, `date`) VALUES
('Exams1', 'ECZ/34/342', 'IT', 'CHRISTINE', '26/10/2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `signup_date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `signup_date`) VALUES
(1, 'mofya', '12345678', 'mofyabwanga@gmail.com', 1540544272),
(2, 'banji', '12345678', 'bmshakubanza@exams-council.org.zm', 1540546510),
(3, 'Admin', 'admingen', 'admin@exams-council.org.zm', 1540550625);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD UNIQUE KEY `timestamp` (`timestamp`);

--
-- Indexes for table `rdata`
--
ALTER TABLE `rdata`
  ADD PRIMARY KEY (`filenumber`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rdisplay`
--
ALTER TABLE `rdisplay`
  ADD PRIMARY KEY (`filenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rdata`
--
ALTER TABLE `rdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
