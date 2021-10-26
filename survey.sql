-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 07:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahlatse`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `ID` int(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Age` int(10) NOT NULL,
  `Pizza` varchar(20) DEFAULT NULL,
  `Pasta` varchar(20) DEFAULT NULL,
  `Pap_and_Wors` varchar(20) DEFAULT NULL,
  `Chicken_Stir_Fry` varchar(20) DEFAULT NULL,
  `Beef_Stir_Fry` varchar(20) DEFAULT NULL,
  `Other` varchar(20) DEFAULT NULL,
  `Eat_Out` varchar(20) NOT NULL,
  `Movies` varchar(20) NOT NULL,
  `WatchTV` varchar(20) NOT NULL,
  `Radio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`ID`, `Surname`, `FirstName`, `ContactNumber`, `Date`, `Age`, `Pizza`, `Pasta`, `Pap_and_Wors`, `Chicken_Stir_Fry`, `Beef_Stir_Fry`, `Other`, `Eat_Out`, `Movies`, `WatchTV`, `Radio`) VALUES
(42, 'malatji', 'shola', '0812345678', '2011-12-12', 12, '', 'pasta', '', 'chicken', '', 'other', 'strongly agree(1)', 'agree(2)', 'disaagree(4)', 'neutral(3)'),
(43, 'frogs', 'steeler', '0787665432', '2021-10-26', 21, '', 'pasta', 'pap', '', 'beef', '', 'strongly agree(1)', 'agree(2)', 'neutral(3)', 'disaagree(4)'),
(44, 'danzel', 'Machines', '0867776654', '2021-10-26', 43, '', 'pasta', 'pap', '', 'beef', '', 'strongly agree(1)', 'agree(2)', 'disaagree(4)', 'strongly disagree(5)'),
(45, 'Malatji', 'Mahlatse Castor', '0787645342', '2021-10-26', 34, '', 'pasta', '', 'chicken', '', 'other', 'strongly agree(1)', 'strongly agree(1)', 'agree(2)', 'neutral(3)'),
(46, 'gred', 'dela mon', '0765432109', '2021-10-26', 44, '', 'pasta', '', '', 'beef', 'other', 'strongly agree(1)', 'agree(2)', 'neutral(3)', 'agree(2)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
