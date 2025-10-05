-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2025 at 02:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stc-event-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `Attendance_ID` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `Event_ID` int(255) NOT NULL,
  `Event_name` varchar(255) NOT NULL,
  `Student_ID` int(50) NOT NULL,
  `Student_name` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Time_in` varchar(50) NOT NULL,
  `Time_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_name` varchar(255) NOT NULL,
  `dept_Acronym` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Dept_ID`, `Dept_name`, `dept_Acronym`) VALUES
(1, 'Colege of Arts, and Sciences, and Teacher Education', 'CASTE'),
(2, 'College of Criminology', 'COC'),
(3, 'College of Business, Technology and Accountancy', 'CBTA'),
(4, 'College of Nursing', 'CON'),
(5, 'Senior High School', 'Senior High School'),
(6, 'Junior High School', 'Junior High School'),
(7, 'Elementary Department', 'Elementary');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `TimeIn_start` varchar(50) NOT NULL,
  `TimeIn_end` varchar(50) NOT NULL,
  `Time_out` varchar(50) NOT NULL,
  `Timeout_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, '1st Semester'),
(2, '2nd Semester');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `ID_Number` int(10) NOT NULL,
  `RFID` bigint(20) NOT NULL,
  `Student_name` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Dept_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` enum('user','admin','','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  ADD PRIMARY KEY (`Attendance_ID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  MODIFY `Attendance_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
