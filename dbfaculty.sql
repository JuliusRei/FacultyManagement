-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 05:43 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactfaculty`
--

CREATE TABLE `tblcontactfaculty` (
  `forEmployeeNo` varchar(50) NOT NULL,
  `strContactNo` varchar(50) NOT NULL,
  `strContactType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbleducattainment`
--

CREATE TABLE `tbleducattainment` (
  `forEmployeeNo` varchar(50) NOT NULL,
  `strType` varchar(50) NOT NULL,
  `strDegree` varchar(50) NOT NULL,
  `strSchool` varchar(50) NOT NULL,
  `strYearGraduated` varchar(4) NOT NULL,
  `strRemarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemailfaculty`
--

CREATE TABLE `tblemailfaculty` (
  `forEmployeeNo` varchar(50) NOT NULL,
  `strEmailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblfacultyeval`
--

CREATE TABLE `tblfacultyeval` (
  `intStudentEval` int(11) NOT NULL,
  `intPeerEval` int(11) NOT NULL,
  `intSelfEval` int(11) NOT NULL,
  `intSupervisorEval` int(11) NOT NULL,
  `strSemester` varchar(5) NOT NULL,
  `strYear` varchar(10) NOT NULL,
  `forEmployeeNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblfacultysubjects`
--

CREATE TABLE `tblfacultysubjects` (
  `forEmployeeNo` varchar(50) NOT NULL,
  `forSubjectCode` varchar(50) NOT NULL,
  `strYearandSection` varchar(50) NOT NULL,
  `strSemester` varchar(5) NOT NULL,
  `strYear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblgeneralinfo`
--

CREATE TABLE `tblgeneralinfo` (
  `strEmployeeNo` varchar(50) NOT NULL,
  `strFamilyName` varchar(50) NOT NULL,
  `strFirstName` varchar(50) NOT NULL,
  `charMiddleInitial` char(5) NOT NULL,
  `strMiddleName` varchar(50) NOT NULL,
  `Department` char(2) NOT NULL,
  `strStreet` varchar(50) NOT NULL,
  `strPurok` varchar(50) NOT NULL,
  `strBuildingNo` varchar(50) NOT NULL,
  `strCity` varchar(50) NOT NULL,
  `strProvince` varchar(50) NOT NULL,
  `dtBirthday` date NOT NULL,
  `dtDateofEntry` date NOT NULL,
  `intCurrentRank` int(11) NOT NULL,
  `strStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrank`
--

CREATE TABLE `tblrank` (
  `intRank` int(11) NOT NULL,
  `decSalary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `strSubjectCode` varchar(50) NOT NULL,
  `intUnit` int(11) NOT NULL,
  `strSubjectDesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontactfaculty`
--
ALTER TABLE `tblcontactfaculty`
  ADD PRIMARY KEY (`forEmployeeNo`,`strContactNo`,`strContactType`);

--
-- Indexes for table `tbleducattainment`
--
ALTER TABLE `tbleducattainment`
  ADD PRIMARY KEY (`forEmployeeNo`);

--
-- Indexes for table `tblemailfaculty`
--
ALTER TABLE `tblemailfaculty`
  ADD PRIMARY KEY (`forEmployeeNo`,`strEmailAddress`);

--
-- Indexes for table `tblfacultyeval`
--
ALTER TABLE `tblfacultyeval`
  ADD PRIMARY KEY (`strSemester`,`strYear`,`forEmployeeNo`);

--
-- Indexes for table `tblfacultysubjects`
--
ALTER TABLE `tblfacultysubjects`
  ADD PRIMARY KEY (`forEmployeeNo`,`forSubjectCode`,`strYearandSection`,`strSemester`,`strYear`);

--
-- Indexes for table `tblgeneralinfo`
--
ALTER TABLE `tblgeneralinfo`
  ADD PRIMARY KEY (`strEmployeeNo`);

--
-- Indexes for table `tblrank`
--
ALTER TABLE `tblrank`
  ADD PRIMARY KEY (`intRank`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`strSubjectCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
