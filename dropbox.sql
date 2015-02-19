-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2015 at 02:02 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dropbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasheet`
--

CREATE TABLE IF NOT EXISTS `datasheet` (
  `email` varchar(50) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasheet`
--

INSERT INTO `datasheet` (`email`, `details`, `credit`, `debit`) VALUES
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to siddhantmanocha199422@gmail.com', '0', '0'),
('siddhantmanocha199422@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', '0', '0'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to siddhantmanocha19949@gmail.com', '-', 'Rs. 1000'),
('siddhantmanocha19949@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('bobby@[172.27.30.193]', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.30.193]', 'Amount transferred to siddhantmanocha@[172.27.30.193]', '-', 'Rs. 100'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred from  bobby@[172.27.30.193]', 'Rs.100', '-'),
('batman@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('batman@gmail.com', 'Amount transferred to siddhantmanocha@[172.27.30.193]', '-', 'Rs. 50'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred from  batman@gmail.com', 'Rs.50', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to bobby@[172.27.30.193]', '-', 'Rs. 1000'),
('bobby@[172.27.30.193]', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to amit.saraswat276@gmail.com', '-', 'Rs. 1000'),
('amit.saraswat276@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to bobby@[172.20.193.108]', '-', 'Rs. 1000'),
('bobby@[172.20.193.108]', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('a@gmail.com;drop table users;', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('a@gmail.com;drop table users;', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. -1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  a@gmail.com;drop table users;', 'Rs.-1000', '-'),
('a@gmail.com;drop table users;', 'Amount transferred to siddhantmanocha@[172.27.30.193]', '-', 'Rs. -1000'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred from  a@gmail.com;drop table users;', 'Rs.-1000', '-'),
('a@gmail.com;drop table users;', 'Amount transferred to ', '-', 'Rs. 100'),
('', 'Amount transferred from  a@gmail.com;drop table users;', 'Rs.100', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to batman@gmail.com', '-', 'Rs. 1000'),
('batman@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to bobby@[172.27.30.193]', '-', 'Rs. 1000'),
('bobby@[172.27.30.193]', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to bobby@[172.20.193.108]', '-', 'Rs. 100'),
('bobby@[172.20.193.108]', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.100', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 100'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.100', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to batman@gmail.com', '-', 'Rs. 1000'),
('batman@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to a@gmail.com;drop table users;', '-', 'Rs. 1000'),
('a@gmail.com;drop table users;', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to amit.saraswat276@gmail.com', '-', 'Rs. 1000'),
('amit.saraswat276@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('<script>alert("hacked");</script>', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('sanilj', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to batman@gmail.com', '-', 'Rs. 1000'),
('batman@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000', '-'),
('<script>', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('Drop table', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('Drop table', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('123', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to siddhantmanocha199422@gmail.com', '-', 'Rs. 1000.34'),
('siddhantmanocha199422@gmail.com', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.1000.34', '-'),
('nik@f.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('peeyusha@iitk.ac.in', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('peeyusha@iitk.ac.in', 'Amount transferred to peeyusha@iitk.ac.in', '-', 'Rs. 1000'),
('peeyusha@iitk.ac.in', 'Amount transferred from  peeyusha@iitk.ac.in', 'Rs.1000', '-'),
('siddhantmanocha199444@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1dd994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha199df4@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('peeyusha@iitk.ac.in', 'Amount transferred to peeyusha@iitk.ac.in', '-', 'Rs. 1.00001'),
('peeyusha@iitk.ac.in', 'Amount transferred from  peeyusha@iitk.ac.in', 'Rs.1.00001', '-'),
('siddhantmanocha@[172.27.30.193]', 'Amount transferred to ', '-', 'Rs. 100'),
('', 'Amount transferred from  siddhantmanocha@[172.27.30.193]', 'Rs.100', '-'),
('asd@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha12111994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha12111994@gmail.com', 'Amount transferred to ', '-', 'Rs. 1000'),
('', 'Amount transferred from  siddhantmanocha12111994@gmail.com', 'Rs.1000', '-'),
('siddhantmanocha1994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1ff994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('satvikguptddda10@yahoo.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('satvikguptddda10@yahoo.com', 'Amount transferred to 123', '-', 'Rs. 1000'),
('123', 'Amount transferred from  satvikguptddda10@yahoo.com', 'Rs.1000', '-'),
('siddhantmanocha1993@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1993@gmail.com', 'Amount transferred to bobby@[172.27.30.193]', '-', 'Rs. 50'),
('bobby@[172.27.30.193]', 'Amount transferred from  siddhantmanocha1993@gmail.com', 'Rs.50', '-'),
('smanocha@cse.iitk.ac.in', 'Amount transferred to siddhantmanocha1993@gmail.com', '-', 'Rs. 1000'),
('siddhantmanocha1993@gmail.com', 'Amount transferred from  smanocha@cse.iitk.ac.in', 'Rs.1000', '-'),
('siddhantmanocha1994@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha199874@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha199094@gmail.com', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('siddhantmanocha1993@gmail.com', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  siddhantmanocha1993@gmail.com', 'Rs.10', '-'),
('siddhantmanocha1993@gmail.com', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  siddhantmanocha1993@gmail.com', 'Rs.10', '-'),
('siddhantmanocha1993@gmail.com', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  siddhantmanocha1993@gmail.com', 'Rs.10', '-'),
('siddhantmanocha1993@gmail.com', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  siddhantmanocha1993@gmail.com', 'Rs.10', '-'),
('', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.22.4]', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.22.4]', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.22.4]', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.22.4]', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('bobby@[172.27.22.4]', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  bobby@[172.27.22.4]', 'Rs.10', '-'),
('bobby@[172.27.22.4]', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  bobby@[172.27.22.4]', 'Rs.10', '-'),
('bobby@[172.27.22.4]', 'Amount transferred to 123', '-', 'Rs. 10'),
('123', 'Amount transferred from  bobby@[172.27.22.4]', 'Rs.10', '-'),
('vineet@cse.iitk.ac.in', 'Rs 1000 deposited by Admin', 'Rs.1000', '-'),
('vineet@cse.iitk.ac.in', 'Amount transferred to bobby@[172.27.22.4]', '-', 'Rs. 10'),
('bobby@[172.27.22.4]', 'Amount transferred from  vineet@cse.iitk.ac.in', 'Rs.10', '-');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `mcn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `altemail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmationstr` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `balance101` double DEFAULT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `altemail`, `password`, `confirmationstr`, `username`, `firstname`, `lastname`, `balance101`) VALUES
('', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '', '', '', 1000),
('123', '', '202cb962ac59075b964b07152d234b70', NULL, '123', 'nik', 'Patil', 2070),
('a@gmail.com;drop table users;', '', '1f3870be274f6c49b3e31a0c6728957f', 'ltl64LUxNK', 'abd', 'Aditya', 'Bhutra', 9000),
('amit.saraswat276@gmail.com', '', 'R9IcgS7lHk', 'ltl64LUxNK', NULL, NULL, NULL, NULL),
('asamitsaras@gmail.com', '', 'amitsaraswat', 'ltl64LUxNK', NULL, NULL, NULL, NULL),
('asd@gmail.com', '', '4782520ad85bbad4f372d4512e3948ca', NULL, 'adqwerty', 'Adiya', 'Bhutra', 1000),
('batman@gmail.com', '', 'ec0e2603172c73a8b644bb9456c1ff6e', 'ltl64LUxNK', 'batman', 'batman', 'batman', 3950),
('bobby@[172.20.193.108]', '', 'b75e37f65c763efdc53852c299af2200', 'ltl64LUxNK', 'bobby', 'Siddhant', 'Manocha', NULL),
('bobby@[172.27.22.4]', '', '927c042b8578da6ba24ff61594bdf06e', NULL, 'sam1234567', 'Siddhant', 'Manocha', 980),
('bobby@[172.27.30.193]', '', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'ltl64LUxNK', 'adi18', 'Aditya', 'Bhutra', 2950),
('dd', '', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'nik', 'nik', 'pat', 1000),
('Drop table', '', 'select', NULL, 'fknvjf', 'Siddhant', 'Manocha', 1000),
('m', '', '1f3870be274f6c49b3e31a0c6728957f', 'ltl64LUxNK', 'abcde', 'Ad', 'bh', 1000),
('mayankmobile@gmail.com', '', '!FUvicodin26', 'ltl64LUxNK', NULL, NULL, NULL, NULL),
('nik@f.com', '', '202cb962ac59075b964b07152d234b70', NULL, '12345', 'qwe', 'asde', 1000),
('peeyusha@iitk.ac.in', '', '5f4dcc3b5aa765d61d8327deb882cf99', 'cqtaxs90bX', 'peeyusha', 'Peeyush', 'Agarwal', 1000),
('sanilj', '', 'd41d8cd98f00b204e9800998ecf8427e', 'ltl64LUxNK', 'sanilj', 'Sanil', 'Jain', 1000),
('satvikguptddda10@yahoo.com', '', 'd000f6f02eb376cb907bb71aaf49aa6c', NULL, 'sold', 'Sam', 'LAS', 0),
('siddhant', '', 'apple123', 'su9hvW6yJo', 'siddhant', 'Siddhant', 'Manocha', NULL),
('siddhantmanocha12111994@gmail.com', '', 'b2faa1a319e6aeb4f2eedec0f3c4876c', NULL, 'sam21', 'Siddhant', 'Manocha', 0),
('siddhantmanocha199094@gmail.com', '', '927c042b8578da6ba24ff61594bdf06e', NULL, 'sam31', 'Siddhant', 'Manocha', 1000),
('siddhantmanocha1993@gmail.com', '', '8dd43ae0638e1ce2690e2e3cfa653923', NULL, 'sid1794', 'Siddhant', 'Manocha', 1910),
('siddhantmanocha199422@gmail.com', '', '4e90ddb44070d44199ec061841ab9862', 'ltl64LUxNK', 'sad', 'Siddhant', 'Manocha', 5000.33984375),
('siddhantmanocha199444@gmail.com', '', '912ec803b2ce49e4a541068d495ab570', NULL, 'se', 'Siddhant', 'Manocha', 1000),
('siddhantmanocha19949@gmail.com', '', '75a593a34aa5ba8e5e5788b7c899802e', 'ltl64LUxNK', 'sam123', 'Siddhant', 'Manocha', NULL),
('siddhantmanocha1994@gmail.com', 'smanocha@iitk.ac.in', 'apple123', 'wElnFPRWEN', NULL, NULL, NULL, NULL),
('siddhantmanocha199874@gmail.com', '', '927c042b8578da6ba24ff61594bdf06e', NULL, 'sid17998', 'Siddhant', 'Manocha', 1000),
('siddhantmanocha199df4@gmail.com', '', '756e5780cec3bfc019625cf2813b6f5b', NULL, 'ffrrxscds', 'Siddhant', 'Manocha', 1000),
('siddhantmanocha19@gmail.com', '', 'apple', 'ltl64LUxNK', NULL, NULL, NULL, NULL),
('siddhantmanocha1dd994@gmail.com', '', '912ec803b2ce49e4a541068d495ab570', NULL, 'fffff', 'Siddhant', 'Manocha', 1000),
('siddhantmanocha1ff994@gmail.com', '', '0de391464e2a21ac54b0b04ee17400db', NULL, 'sam12345', 'Siddhant', 'Manocha', 1000),
('smanocha@cse.iitk.ac.in', '', '8dd43ae0638e1ce2690e2e3cfa653923', '12386114b014f4ac3fe0dd03ae51cb7c', 'sid17', 'Siddhant', 'Manocha', 978849.6875),
('vineet@cse.iitk.ac.in', '', '927c042b8578da6ba24ff61594bdf06e', '7f22ab761a5a4537d4eb66813b554816', 'aditya321', 'Siddhant', 'Manocha', 990),
('vineetp@iitk.ac.in', '', '202cb962ac59075b964b07152d234b70', 'ltl64LUxNK', 'vineet', 'Vineet', 'Purswani', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
