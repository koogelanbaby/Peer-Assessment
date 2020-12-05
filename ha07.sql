-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 05:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ha07`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `StudentID` int(10) NOT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Team` varchar(10) DEFAULT NULL,
  `AttendanceAssessment` int(11) DEFAULT NULL,
  `WorkAssessment` int(11) DEFAULT NULL,
  `ParticipationAssessment` int(11) DEFAULT NULL,
  `DoneByStudentID` int(10) NOT NULL,
  `Report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`StudentID`, `StudentName`, `Email`, `Team`, `AttendanceAssessment`, `WorkAssessment`, `ParticipationAssessment`, `DoneByStudentID`, `Report`) VALUES
(253145897, 'koogelan', 'koogelan@gmail.com', 'Team4', 8, 9, 10, 253753951, 'Very dedicated person and gets the job done'),
(253169132, 'spica', 'spica@gmail.com', 'Team3', 6, 8, 8, 253269131, 'This student has participated in all the activities'),
(253228567, 'nomanze', 'nomanze@gmail.com', 'Team6', 9, 8, 10, 253186477, 'Very good performance '),
(253228741, 'dean', 'dean@gmail.com', 'Team8', 2, 1, 2, 253441528, 'Never came for the meetings and did no work'),
(253369129, 'Bjergsen', 'Bjergsen@gmail.com', 'Team2', 10, 10, 10, 253469128, 'This person was excellent in everything '),
(253456951, 'yi jun', 'yijun@gmail.com', 'Team5', 7, 5, 5, 253457897, 'Because he no attend the meetings'),
(253569127, 'smith', 'smith@gmail.com', 'Team2', 8, 8, 7, 253369129, 'Work diligently and completed on time '),
(253669124, 'sam', 'sam@gmail.com', 'Team1', 7, 7, 9, 253669125, 'Did a good job on the paperwork'),
(253669125, 'Owen', 'Owen@gmail.com', 'Team1', 4, 5, 6, 253669124, 'The reason for this score is because the student did not take part in any activity'),
(253974896, 'mani maran', 'mani@gmail.com', 'Team7', 9, 8, 8, 253669874, 'Has completed all the given tasks.');

-- --------------------------------------------------------

--
-- Table structure for table `collegestudent`
--

CREATE TABLE `collegestudent` (
  `StudentID` int(9) UNSIGNED NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Captcha` varchar(30) DEFAULT NULL,
  `Team` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collegestudent`
--

INSERT INTO `collegestudent` (`StudentID`, `Password`, `Email`, `Captcha`, `Team`) VALUES
(253145897, 'zxc154', 'koogelan@gmail.com', '2254', 'Team4'),
(253169132, 'wdr129', 'spica@gmail.com', '23fdw', 'Team3'),
(253186477, 'mno147', 'thulasi@gmail.com', '89fdg', 'Team6'),
(253195471, 'fvvc546', 'meera@gmail.com', '84867', 'Team9'),
(253228567, 'qwe854', 'nomanze@gmail.com', '45asdx', 'Team6'),
(253228741, 'tyu451', 'dean@gmail.com', '78xzcx', 'Team8'),
(253269131, 'rer423', 'Sergen@gmail.com', '37sfw', 'Team3'),
(253297145, 'saz457', 'mithra@gmail.com', '44419', 'Team9'),
(253369129, 'fes133', 'Bjergsen@gmail.com', '57dfw', 'Team2'),
(253441528, 'asq784', 'pavi@gmail.com', '23323', 'Team8'),
(253456951, 'tre123', 'yijun@gmail.com', '23axc', 'Team5'),
(253469128, 'srr153', 'Loken@gmail.com', '23sdw', 'Team2'),
(253554178, 'fgh456', 'kim@gmail.com', '62047', 'Team8'),
(253569127, 'dfr146', 'Smith@gmail.com', '58asw', 'Team2'),
(253669124, 'sdr193', 'sam@gmail.com', '56sdw', 'Team1'),
(253669125, 'wer123', 'Owen@gmail.com', '98axc', 'Team1'),
(253669874, 'lom581', 'feroz@gmail.com', '91asr', 'Team7'),
(253693124, 'ghj456', 'chin@gmail.com', '56jkl', 'Team6'),
(253728147, 'asd546', 'Mac@gmail.com', '47629', 'Team1'),
(253753951, 'wbh741', 'uthaya@gmail.com', '13asd', 'Team4'),
(253884567, 'xcv471', 'kengseng@gmail.com', '745aca', 'Team7'),
(253891459, 'bnm896', 'ah@gmaail.com', '85dfg', 'Team5'),
(253917562, 'saz541', 'laysha@gmail.com', '58859', 'Team9'),
(253969133, 'ser423', 'smake@gmail.com', '56sdv', 'Team3'),
(253974896, 'oip789', 'mani@gmail.com', '78lkj', 'Team7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `collegestudent`
--
ALTER TABLE `collegestudent`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegestudent`
--
ALTER TABLE `collegestudent`
  MODIFY `StudentID` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256856538;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
