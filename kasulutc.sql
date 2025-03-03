-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 09:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasulutc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_information`
--

CREATE TABLE `bank_information` (
  `id` int(11) NOT NULL DEFAULT 1,
  `bank_name` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `reg_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `birth_information`
--

CREATE TABLE `birth_information` (
  `id` int(20) NOT NULL,
  `country_of_birth` varchar(100) NOT NULL,
  `region_of_birth` varchar(100) NOT NULL,
  `district_of_birth` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `f4_leaving` varchar(10) NOT NULL,
  `csee_result_slip` varchar(10) NOT NULL,
  `csee_certificate_number` varchar(20) NOT NULL,
  `f4_index_number` varchar(20) NOT NULL,
  `f4_year` year(4) NOT NULL,
  `f6_leaving` varchar(10) NOT NULL,
  `f6_result_slip` varchar(10) NOT NULL,
  `acsee_certificate_number` varchar(10) NOT NULL,
  `f6_index_number` varchar(10) NOT NULL,
  `f6_year` varchar(10) NOT NULL,
  `gatce_certificate_number` varchar(10) NOT NULL,
  `gatce_index_number` varchar(10) NOT NULL,
  `gatce_year` year(4) NOT NULL,
  `medical_certificate` varchar(10) NOT NULL,
  `birth_certificate_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `certificate_type` varchar(100) NOT NULL,
  `certificate_number` varchar(11) NOT NULL,
  `index_number` varchar(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificatess`
--

CREATE TABLE `certificatess` (
  `id` int(11) NOT NULL,
  `f4_leaving` varchar(10) NOT NULL,
  `csee_result_slip` varchar(10) NOT NULL,
  `csee_certificate_number` varchar(20) NOT NULL,
  `f4_index_number` varchar(20) NOT NULL,
  `f4_year` year(4) NOT NULL,
  `f6_leaving` varchar(10) NOT NULL,
  `f6_result_slip` varchar(10) NOT NULL,
  `acsee_certificate_number` varchar(10) NOT NULL,
  `f6_index_number` varchar(10) NOT NULL,
  `f6_year` varchar(10) NOT NULL,
  `gatce_leaving` varchar(20) NOT NULL,
  `gatce_result_slip` varchar(20) NOT NULL,
  `gatce_certificate_number` varchar(10) NOT NULL,
  `gatce_index_number` varchar(10) NOT NULL,
  `gatce_year` varchar(10) NOT NULL,
  `medical_certificate` varchar(10) NOT NULL,
  `birth_certificate_number` varchar(10) NOT NULL,
  `reg_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `combination` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `id` int(11) DEFAULT NULL,
  `course_name` varchar(100) NOT NULL,
  `combination` varchar(100) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_info`
--

CREATE TABLE `enrollment_info` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `progress_status` varchar(50) NOT NULL DEFAULT 'continuos',
  `reg_type` varchar(20) NOT NULL,
  `reg_status` varchar(20) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `guardian_occupation` varchar(100) NOT NULL,
  `guardian_country` varchar(100) NOT NULL,
  `guardian_nationality` varchar(100) NOT NULL,
  `guardian_nida` varchar(100) NOT NULL,
  `guardian_region` varchar(100) NOT NULL,
  `guardian_district` varchar(100) NOT NULL,
  `guardian_ward` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `reg_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(500) NOT NULL,
  `gender` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `nida` varchar(20) NOT NULL,
  `index_number` varchar(15) NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`reg_id`, `first_name`, `middle_name`, `last_name`, `phone_number`, `email`, `image`, `gender`, `disability`, `religion`, `marital_status`, `nationality`, `nida`, `index_number`, `reg_date`) VALUES
(13552, 'A', 'B', 'C', '1', 'a@gmail.com', './upload/Welcome Scan.jpg', 'M', 'none', 'christian', 'married', 'tanzanian', '1', '1', '2024-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `residential_info`
--

CREATE TABLE `residential_info` (
  `id` int(11) DEFAULT 1,
  `country` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `nida` varchar(30) NOT NULL,
  `region` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth_information`
--
ALTER TABLE `birth_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificatess`
--
ALTER TABLE `certificatess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment_info`
--
ALTER TABLE `enrollment_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth_information`
--
ALTER TABLE `birth_information`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `certificatess`
--
ALTER TABLE `certificatess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrollment_info`
--
ALTER TABLE `enrollment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13553;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
