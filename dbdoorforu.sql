-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 06:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdoorforu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladminlogin`
--

CREATE TABLE IF NOT EXISTS `tbladminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladminlogin`
--

INSERT INTO `tbladminlogin` (`id`, `username`, `password`) VALUES
(1, 'ADMIN', 'ADMIN123');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyregistration`
--

CREATE TABLE IF NOT EXISTS `tblcompanyregistration` (
  `companyid` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(20) NOT NULL,
  `districtid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `companytypeid` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `companyaddress` varchar(50) NOT NULL,
  `contactnumber` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `about` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`companyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblcompanyregistration`
--

INSERT INTO `tblcompanyregistration` (`companyid`, `companyname`, `districtid`, `locationid`, `companytypeid`, `logo`, `companyaddress`, `contactnumber`, `email`, `about`, `password`, `pincode`, `status`) VALUES
(1, 'google', 1, 1, 0, 'anagha saju pic.jpg', 'parambukattu h', 8590826963, 'arun12@gamil.com', 'vhkdkcvsd', '1234', 685590, 'hihi'),
(2, 'infosys', 4, 1, 1, 'anagha saju pic.jpg', 'parambukattu h kolpara', 8590826963, 'infosys@gamil.com', 'software engineer', '1234', 685590, 'bca student'),
(3, 'infopark', 4, 10, 2, 'anagha saju pic.jpg', 'parambukattu H', 8590826963, 'infopark@gamil.com', 'software engineer', '12345', 685590, 'mca student'),
(4, 'idea', 3, 0, 999, 'IMG_20210627_173411_485.jpg', '456', 9087654321, 'arun12@gamil.com', 'vhkdkcvsd', 'hhuukk', 685590, 'mca student');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanytyperegistration`
--

CREATE TABLE IF NOT EXISTS `tblcompanytyperegistration` (
  `companytypeid` int(11) NOT NULL AUTO_INCREMENT,
  `companytypename` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`companytypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblcompanytyperegistration`
--

INSERT INTO `tblcompanytyperegistration` (`companytypeid`, `companytypename`, `description`) VALUES
(1, 'USB', 'IT company'),
(2, 'infosys', 'software company'),
(3, 'ust', 'IT company'),
(4, 'infosys', 'software company'),
(5, 'infopark', 'it feild'),
(7, 'ust', 'it company'),
(8, 'infosys', 'IT company'),
(9, 'infopark', 'software company');

-- --------------------------------------------------------

--
-- Table structure for table `tbldistrict`
--

CREATE TABLE IF NOT EXISTS `tbldistrict` (
  `districtid` int(11) NOT NULL AUTO_INCREMENT,
  `districtname` varchar(50) NOT NULL,
  PRIMARY KEY (`districtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbldistrict`
--

INSERT INTO `tbldistrict` (`districtid`, `districtname`) VALUES
(1, 'Thiruvanathapuram'),
(2, 'Kollam'),
(3, 'Pathanamithitta'),
(4, 'Alappuzha'),
(5, 'Kottayam');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobapply`
--

CREATE TABLE IF NOT EXISTS `tbljobapply` (
  `jobapplyid` int(11) NOT NULL AUTO_INCREMENT,
  `jobseekerid` int(11) NOT NULL,
  `jobpostid` int(11) NOT NULL,
  `upload_cv` varchar(200) NOT NULL,
  `requestdate` date NOT NULL,
  `requeststatus` varchar(50) NOT NULL,
  PRIMARY KEY (`jobapplyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbljobapply`
--

INSERT INTO `tbljobapply` (`jobapplyid`, `jobseekerid`, `jobpostid`, `upload_cv`, `requestdate`, `requeststatus`) VALUES
(1, 3, 1, 'ABSTRACT (4.1) (1).pdf', '2022-10-09', 'Rejected'),
(2, 3, 2, 'aa.pdf', '2022-10-09', 'Accepted'),
(3, 3, 1, 'aa.pdf', '2022-10-09', 'Applayed'),
(4, 1, 3, 'Abstract (1).pdf', '2022-10-09', 'Applayed'),
(5, 1, 5, 'aa.pdf', '2022-10-09', 'Applayed'),
(6, 0, 2, 'SEND MAIL CONFIGURATION (1)(1).pdf', '2022-10-10', 'Applayed');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobpost`
--

CREATE TABLE IF NOT EXISTS `tbljobpost` (
  `jobpostid` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(11) NOT NULL,
  `jobtypeid` int(11) NOT NULL,
  `postdate` date NOT NULL,
  `applydate` date NOT NULL,
  `no-of-vacancies` int(11) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `agelimit` int(11) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `criteria` varchar(250) NOT NULL,
  `salary` double NOT NULL,
  `poststatus` varchar(50) NOT NULL,
  PRIMARY KEY (`jobpostid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbljobpost`
--

INSERT INTO `tbljobpost` (`jobpostid`, `companyid`, `jobtypeid`, `postdate`, `applydate`, `no-of-vacancies`, `qualification`, `agelimit`, `experience`, `criteria`, `salary`, `poststatus`) VALUES
(1, 3, 1, '2022-10-09', '2022-10-17', 4, 'B tech', 30, 'Test', 'test13gsdmlhd,fghdfghdfxghdfg', 30000, 'Deactive'),
(2, 3, 1, '2022-10-09', '2022-10-17', 4, 'B tech', 30, 'Test', 'test13gsdmlhd,fghdfghdfxghdfg', 30000, 'Active'),
(3, 3, 1, '2022-10-09', '2022-10-17', 4, 'B tech', 30, 'Test', 'test13gsdmlhd,fghdfghdfxghdfg', 30000, 'Active'),
(4, 2, 7, '2022-10-09', '2022-10-27', 3, 'btech', 41, 'test', 'test', 1000, 'Active'),
(5, 2, 7, '2022-10-09', '2022-10-27', 3, 'btech', 41, 'test', 'test', 1000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseeker`
--

CREATE TABLE IF NOT EXISTS `tbljobseeker` (
  `jobseekerid` int(11) NOT NULL AUTO_INCREMENT,
  `jobseekername` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `dob` date NOT NULL,
  `districtid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `experence` varchar(150) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`jobseekerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbljobseeker`
--

INSERT INTO `tbljobseeker` (`jobseekerid`, `jobseekername`, `gender`, `email`, `contactno`, `pincode`, `dob`, `districtid`, `locationid`, `experence`, `qualification`, `password`) VALUES
(1, 'anagha', ' female', 'anagha12@gamil.com', 8590826963, 685590, '2001-06-22', 3, 9, '3 years', 'MCA', '1234'),
(2, 'arun', ' female', 'arun12@gamil.com', 8590826963, 685590, '2022-08-16', 4, 6, '3 years', 'BCA', '1234'),
(3, 'Maya', ' female', 'maya@gmail.com', 9876543456, 123456, '2022-10-06', 2, 2, 'test', 'test', '1234'),
(4, 'Maya', ' female', 'maya@gmail.com', 9876543456, 123456, '2022-10-06', 2, 2, 'test', 'test', '1234'),
(5, 'Maya', ' female', 'maya@gmail.com', 9878997897, 1234, '2022-10-04', 2, 2, 'test', 'test', '1234'),
(6, 'Maya', ' female', 'maya@gmail.com', 9878997897, 1234, '2022-10-04', 2, 2, 'test', 'test', '1234'),
(7, 'Maya', ' female', 'maya@gmail.com', 9878997897, 1234, '2022-10-04', 2, 2, 'test', 'test', '1234'),
(8, 'test', ' female', 'test@gmail.com', 9898989898, 1234, '2022-10-05', 1, 1, 'tyyu', 'test', '1234'),
(9, 'yehj', ' female', 'ed@gmail.com', 6787656789, 123, '2022-10-05', 1, 1, 'kjdsf', 'hhj', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobtyperegistration`
--

CREATE TABLE IF NOT EXISTS `tbljobtyperegistration` (
  `jobtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `jobtypename` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`jobtypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbljobtyperegistration`
--

INSERT INTO `tbljobtyperegistration` (`jobtypeid`, `jobtypename`, `description`) VALUES
(1, 'Software engineer', 'engineer'),
(5, 'Database administrator', 'administrator'),
(6, 'Network administrator', 'administrator'),
(7, 'Stack developer', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE IF NOT EXISTS `tbllocation` (
  `locationid` int(11) NOT NULL AUTO_INCREMENT,
  `locationname` varchar(50) NOT NULL,
  `districtid` int(11) NOT NULL,
  PRIMARY KEY (`locationid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`locationid`, `locationname`, `districtid`) VALUES
(1, 'Lsfigihg', 1),
(2, 'anayara', 2),
(6, 'anayara', 4),
(9, 'Puthupali', 3),
(10, 'Kolpara', 5),
(12, 'Text', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
