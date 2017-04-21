-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:36 PM
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
  `intID` int(11) NOT NULL,
  `forEmployeeNo` varchar(50) NOT NULL,
  `strContactNo` varchar(50) NOT NULL,
  `strContactType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactfaculty`
--

INSERT INTO `tblcontactfaculty` (`intID`, `forEmployeeNo`, `strContactNo`, `strContactType`) VALUES
(1, '2013888712', '09827341765', 'Cellphone'),
(2, '2013888712', '2214567', 'Telephone'),
(3, '2013888712', '2237671', 'Fax');

-- --------------------------------------------------------

--
-- Table structure for table `tbleducattainment`
--

CREATE TABLE `tbleducattainment` (
  `intID` int(11) NOT NULL,
  `forEmployeeNo` varchar(50) NOT NULL,
  `strType` varchar(50) NOT NULL,
  `strDegree` varchar(50) NOT NULL,
  `strSchool` varchar(50) NOT NULL,
  `strYearGraduated` varchar(4) NOT NULL,
  `strRemarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleducattainment`
--

INSERT INTO `tbleducattainment` (`intID`, `forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) VALUES
(1, '2013888712', 'Bachelors', 'Information Technology', 'PUP', '2008', 'Passed'),
(2, '2013888712', 'Doctors', 'Information Technology', 'PUP', '2012', 'Passed'),
(3, '2013888712', 'Masters', 'Information Technology', 'PUP', '2010', 'Passed'),
(4, '2013888712', 'Other Degree', 'Mechanical Engineering', 'PUP', '2016', 'Passed'),
(5, '2013888712', 'Other Degree', 'Psychology', 'PUP', '2014', 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `tblemailfaculty`
--

CREATE TABLE `tblemailfaculty` (
  `intID` int(11) NOT NULL,
  `forEmployeeNo` varchar(50) NOT NULL,
  `strEmailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemailfaculty`
--

INSERT INTO `tblemailfaculty` (`intID`, `forEmployeeNo`, `strEmailAddress`) VALUES
(1, '2013888712', 'JCruz@gmail.com'),
(2, '2013888712', 'JCSantiago@outlook.ph'),
(3, '2013888712', 'JDCruz@yahoo.com');

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
  `strNameExtension` varchar(50) NOT NULL,
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

--
-- Dumping data for table `tblgeneralinfo`
--

INSERT INTO `tblgeneralinfo` (`strEmployeeNo`, `strFamilyName`, `strFirstName`, `charMiddleInitial`, `strMiddleName`, `strNameExtension`, `Department`, `strStreet`, `strPurok`, `strBuildingNo`, `strCity`, `strProvince`, `dtBirthday`, `dtDateofEntry`, `intCurrentRank`, `strStatus`) VALUES
('2013888712', 'Cruz', 'Juan', 'S', 'Santiago', 'Jr', 'CS', 'Payak Street', '1', '211', 'Antipolo City', 'Rizal', '1992-01-01', '2008-01-01', 2, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tblrank`
--

CREATE TABLE `tblrank` (
  `intRank` int(11) NOT NULL,
  `decSalary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrank`
--

INSERT INTO `tblrank` (`intRank`, `decSalary`) VALUES
(1, '10000'),
(2, '15000');

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
  ADD PRIMARY KEY (`intID`,`forEmployeeNo`);

--
-- Indexes for table `tbleducattainment`
--
ALTER TABLE `tbleducattainment`
  ADD PRIMARY KEY (`intID`,`forEmployeeNo`);

--
-- Indexes for table `tblemailfaculty`
--
ALTER TABLE `tblemailfaculty`
  ADD PRIMARY KEY (`intID`,`forEmployeeNo`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontactfaculty`
--
ALTER TABLE `tblcontactfaculty`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbleducattainment`
--
ALTER TABLE `tbleducattainment`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblemailfaculty`
--
ALTER TABLE `tblemailfaculty`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
