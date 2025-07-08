-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 05:32 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE IF NOT EXISTS `accept` (
  `id` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `instructor` varchar(20) NOT NULL,
  `appeal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`id`, `course`, `department`, `instructor`, `appeal`) VALUES
('1300/05', 'd', 'computer science', 'bandla', 'my grade is not corr');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ConfirmPassword` varchar(15) NOT NULL,
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`UserName`, `Password`, `ConfirmPassword`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE IF NOT EXISTS `appeal` (
  `id` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `instructor` varchar(20) NOT NULL,
  `appeal` varchar(20) NOT NULL,
  `approved` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appeal`
--


-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(10) NOT NULL DEFAULT '0',
  `rate` float NOT NULL,
  `total_rate` float NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `subject`, `body`, `date`, `views`, `rate`, `total_rate`, `hits`) VALUES
(2, 'PHP', '<p>PHP received mixed reviews due to lacking native support at the core language level. In 2005, a project headed by Andrei Zmievski was initiated to bring native Unicode support throughout PHP, by embedding the (ICU) library, and representing text strings as  internally.\r\n Since this would cause major changes both to the internals of the \r\nlanguage and to user code, it was planned to release this as version 6.0\r\n of the language, along with other major features then in development.</p>\r\n<p>However, a shortage of developers who understood the necessary \r\nchanges, and performance problems arising from conversion to and from \r\nUTF-16, which is rarely used in a web context, led to delays in the \r\nproject.\r\n As a result, a PHP&nbsp;5.3 release was created in 2009, with many \r\nnon-Unicode features back-ported from PHP&nbsp;6, notably namespaces. In \r\nMarch 2010, the project in its current form was officially abandoned, \r\nand a PHP&nbsp;5.4 release was prepared containing most remaining non-Unicode\r\n features from PHP&nbsp;6, such as traits and closure re-binding. Initial hopes were that a new plan would be formed for Unicode integration, but as of 2014 none has been adopted.</p>', '2016-06-12 10:06:50', 147, 2.78873, 198, 71),
(3, 'For All 4th Year computer science students', 'your final presentation date has been changed from saturday to tuesday', '2016-06-12 10:05:43', 2, 0, 0, 0),
(4, 'for all dtu staff members ', 'dont forget that we have a meeting tommorow afternoon at 8:00 on our faculity issue', '2016-06-13 08:20:15', 1, 0, 0, 0),
(5, 'for  all students', 'fcasgdfkadsbfjgvkbjvhsdvkfhbjsbvjhgxkvbkb', '2016-06-13 14:22:57', 0, 0, 0, 0),
(6, 'for gc stu', 'gdgghdhb  bbbbbbbbbbbbbbbbb', '2016-06-13 20:10:58', 0, 0, 0, 0),
(7, 'for all teachers', 'thevmkjkssvbmvcdvj', '2016-06-13 20:24:53', 0, 0, 0, 0),
(8, 'hjuygfgh', 'trytughj', '2016-06-13 20:27:06', 0, 0, 0, 0),
(9, 'For All 4th Year computer science students', 'dont you have  a defence on 06/10/2006', '2016-06-13 20:46:46', 0, 0, 0, 0),
(10, 'for gc stu', 'rrrrrrrctfv ghbnh cxzxdcfvgyhbj n', '2016-06-14 00:13:18', 0, 0, 0, 0),
(11, 'For All 4th Year computer science students', 'bb zcnz v,nmxnx ', '2016-06-14 11:34:03', 0, 0, 0, 0),
(12, 'for 4th year computer science department represantatives', 'you are expected to get gouns from the registrar and deliver to your classmates', '2016-06-15 14:10:37', 0, 0, 0, 0),
(13, 'vvvvvv', 'gggufdyfgxrsygvjh.hourrwwatvk/ytiun;kupo\r\n', '2016-06-17 21:09:01', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `depheadlogin`
--

CREATE TABLE IF NOT EXISTS `depheadlogin` (
  `UserName` varchar(15) NOT NULL,
  `department` varchar(15) NOT NULL,
  `degree` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ConfirmPassword` varchar(15) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depheadlogin`
--

INSERT INTO `depheadlogin` (`UserName`, `department`, `degree`, `age`, `Password`, `ConfirmPassword`) VALUES
('sisay', 'computer scienc', 'Msc', 32, 'sisay', 'sisay');

-- --------------------------------------------------------

--
-- Table structure for table `instructorlogin`
--

CREATE TABLE IF NOT EXISTS `instructorlogin` (
  `UserName` varchar(15) NOT NULL,
  `department` varchar(15) NOT NULL,
  `degree` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ConfirmPassword` varchar(15) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructorlogin`
--

INSERT INTO `instructorlogin` (`UserName`, `department`, `degree`, `age`, `Password`, `ConfirmPassword`) VALUES
('johnson', 'computer scienc', 'professor', 30, 'johnson', 'johnson');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `instructor` varchar(20) NOT NULL,
  `old` varchar(20) NOT NULL,
  `new` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `reglogin`
--

CREATE TABLE IF NOT EXISTS `reglogin` (
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ConfirmPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reglogin`
--

INSERT INTO `reglogin` (`UserName`, `Password`, `ConfirmPassword`) VALUES
('registrar', 'registrar', 'registrar');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `department` varchar(15) NOT NULL,
  `course` varchar(15) NOT NULL,
  `instructor` varchar(15) NOT NULL,
  `starttime` varchar(15) NOT NULL,
  `endtime` varchar(15) NOT NULL,
  `year` varchar(15) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `block` varchar(15) NOT NULL,
  `room` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `day` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`department`, `course`, `instructor`, `starttime`, `endtime`, `year`, `semester`, `block`, `room`, `section`, `date`, `day`, `type`) VALUES
('pre eng', 'distributed sys', 'krishna', '2:10 am', '3:00 am', '1st Year', ' semester 1', '44', '01', 'section 1', '22/10/2008', 'monday', 'class'),
('pre eng', 'distributed sys', 'krishna', '3:50 am', '8:10 am', '1st Year', ' semester 1', '45', '01', 'section 1', '22/10/2008', 'monday', 'class');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` varchar(15) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `section` varchar(20) NOT NULL,
  `Course` varchar(15) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Result` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `content` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `upload`
--


-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `content` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `uploads`
--

