-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 12:44 PM
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
-- Database: `asteriscstudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_details`
--

CREATE TABLE `branch_details` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_details`
--

INSERT INTO `branch_details` (`id`, `branch_name`) VALUES
(1, 'Bhande Plot'),
(2, 'Tirangaa Square'),
(3, 'Friends Colony');

-- --------------------------------------------------------

--
-- Table structure for table `certificatetb`
--

CREATE TABLE `certificatetb` (
  `sr` int(11) NOT NULL,
  `course` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `remark` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificatetb`
--

INSERT INTO `certificatetb` (`sr`, `course`, `date`, `remark`, `email`, `cer`) VALUES
(1, 'C ', '12/06/2022', 'Complete', 'harshal45mandale@gmail.com', 'MyCertificate.pdf'),
(2, 'C++', '17/05/2022', 'Complete', 'harshal45mandale@gmail.com', 'Immortals of Meluha by Amish Tripathi-1-1 (1) (1).pdf'),
(3, 'Java', '21/12/2022', 'Pending', 'harshal45mandale@gmail.com', NULL),
(4, 'Adv Java', '12/03/2023', 'Pending', 'harshal45mandale@gmail.com', NULL),
(5, 'C Lang', '12/06/2022', 'Pending', 'anuj12pandhre@gmail.com', NULL),
(6, 'C++', '17/07/2022', 'Pending', 'anuj12pandhre@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `google_drive_link` varchar(255) NOT NULL,
  `course_fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `course_duration`, `google_drive_link`, `course_fees`) VALUES
(1, 'C Programming with Project', '2 months', 'abcd', 4800),
(2, 'C++ Programming with Project', '2 months', 'abcd', 4800),
(3, 'C & C++ Programming with Project', '3 months', 'abcd', 7000),
(4, 'Core Java Programming with Project', '4 months', 'abcd', 25000),
(5, 'Advance Java Programming with Project', '2 months', 'abcd', 38000),
(6, 'Industrial Java Training (Full Stack)', '6 months', 'abcd', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `Stu_inv` int(11) DEFAULT NULL,
  `Stu_inv_date` varchar(255) DEFAULT NULL,
  `Stu_due_date` varchar(255) DEFAULT NULL,
  `Stu_total` double DEFAULT NULL,
  `Stu_status` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`Stu_inv`, `Stu_inv_date`, `Stu_due_date`, `Stu_total`, `Stu_status`, `email`) VALUES
(1111, '26-01-2023', '31--01-2023', 58000, 'Completed', '	anuj12pandhre@gmail.com'),
(2222, '27-01-2023', '01-02-2023', 55000, 'Pending', 'raju67bhasme@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `internship_details`
--

CREATE TABLE `internship_details` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(245) NOT NULL,
  `st_email` varchar(45) NOT NULL,
  `date_joining` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `reg_link` varchar(245) NOT NULL,
  `fees` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_details`
--

INSERT INTO `internship_details` (`st_id`, `st_name`, `st_email`, `date_joining`, `end_date`, `reg_link`, `fees`) VALUES
(1, 'Pranit Sarode', 'prajweshwalekar39752@gmail.com', '17/08/2023', '17/02/2024', 'https://asterisc.in/', 5000),
(3, 'Sammer Randhive', '', '20/07/2023', '20/01/2024', 'https://asterisc.in/', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `job_calls`
--

CREATE TABLE `job_calls` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(245) NOT NULL,
  `job_title` varchar(245) NOT NULL,
  `com_city` varchar(245) NOT NULL,
  `com_state` varchar(245) NOT NULL,
  `com_salary` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_calls`
--

INSERT INTO `job_calls` (`company_id`, `company_name`, `job_title`, `com_city`, `com_state`, `com_salary`) VALUES
(2, 'Infosys', 'Java Developer', 'Nagpur', 'Maharashtra', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `student_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `parent_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `e_number` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `batch_timing` varchar(255) NOT NULL,
  `tutor_name` varchar(255) NOT NULL,
  `photofile` varchar(255) NOT NULL,
  `docfile` varchar(255) NOT NULL,
  `total_fees` varchar(255) NOT NULL,
  `paid_fees` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `admission_date` varchar(255) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `Password` varchar(145) NOT NULL,
  `referral_code` varchar(255) NOT NULL,
  `referral_point` int(200) NOT NULL DEFAULT 0,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`student_id`, `full_name`, `gender`, `dob`, `email`, `student_number`, `parent_number`, `address`, `city`, `pin_code`, `work`, `c_name`, `e_number`, `branch`, `course`, `batch_timing`, `tutor_name`, `photofile`, `docfile`, `total_fees`, `paid_fees`, `payment_type`, `cheque_no`, `admission_date`, `receipt_number`, `Password`, `referral_code`, `referral_point`, `resettoken`, `resettokenexpire`) VALUES
(1, 'Harshal Bhumeshwar Mandale', 'Female', '2023-02-04', 'harshal45mandale@gmail.com', '7744952465', '8376754537', 'Shani Chowk', 'Katol', '41512', 'prof', 'Nabira Mahavidyalaya', '12431', 'Bhande Plot', 'Full Stack Java', '1pm-2pm', 'Chandrakant Sir', 'pngegg (2).png', 'xyz', '65000', '30000', 'Cash', 'xyz', '12/05/2022', '121', 'Harshal12', '', 0, NULL, NULL),
(2, 'Raju Bhasme', 'Male', '2002-02-02', 'raju67bhasme@gmail.com', '9878656778', '7654548905', 'Sharda Chowk', 'Katol', '41512', 'prof', 'Full Stack Java', 'xyz', 'Bhande Plot', 'Offline', '12pm-2pm', 'Chandrakant Sir', 'download (1).jpg', 'xyz', '65000', '30000', 'UPI', 'xyz', '6/05/2022', '12342', 'raju123', '', 0, NULL, NULL),
(7, 'Prajwesh Walekar', 'Male', '10/2/2002', 'prajweshwalekar256@gmail.com', '0000000000', '1111111111', 'nagpur', ' Nagpur', '440017', 'dadwdwd', 'kamla nehru', '1231321313', 'Bhande Plot', 'c++', '10:30', 'pooja mam', 'pexels-pixabay-36717.jpg', 'adawdad', '30000', '20000', 'cash', '3142535346266', '20/10/2002', '4141414', 'pj121', '', 0, NULL, NULL),
(8, 'Pranit Sarode', 'Male', '2003-07-21', 'pranitsarode@gmail.com', '0000000000', '1111111111', 'nagpur', ' Nagpur', '440017', 'dadwdwd', 'kamla nehru', '1231321313', 'Bhande Plot', 'c++', '10:30', 'pooja mam', 'xyz', 'adawdad', '30000', '20000', 'cash', '3142535346266', '20/10/2002', '4141414', 'pranit121', '', 0, NULL, NULL),
(13, 'Pranit sa', 'Male', '2023-08-28', 'prajweshwalekar39752@gmail.com', '5235235', '23525253', 'fwfawrt', ' fwqfq', 'qfqwq', 'fqfqf', 'qfqfq', 'fqwfqfqq', 'Tiranga Square', 'C & C++ Programming With Project', '06:00 PM TO 07:00 PM', 'faqwfa', 'admin2.png', 'admin2.png', 'fqwfqf', 'fqwfqf', 'Online', 'qfqwfqfq', '2023-08-26', 'fqwfqw', '$2y$10$8rUKwgCHPguKsMAM3Rfd5O53SnVIYAUkdPyh6PjWXlySDmn4qX5LS', '', 0, NULL, NULL),
(14, 'Prajwesh Walekar', 'Male', '2023-08-28', 'prajweshwalekar4555@gmail.com', '7972703857', '7972703857', 'nagpur', 'Nagpur', '440017', 'student', 'astresick', '1231321313', 'Tirangaa Square', 'C Programming with Project', '10.00 TO 11.00 AM', 'pooja mam', 'IMG-64f4af3658dc44.39233628.png', 'DOC-64f4af36599fe7.92286762.png', '4800', '20000', 'cash', '3142535346266', '2023-08-30', '4141414', '$2y$10$INM3LawsjOr0XybTcGl9zu/bNOjpSUwI1tcgn0.YAICCycSfjUOpC', 'CF895B65', 0, NULL, NULL),
(15, 'Prajwesh Walekar', 'Male', '2023-09-14', 'prajweshwalekar222@gmail.com', '7972703857', '7972703857', 'nagpur', 'Nagpur', '440017', 'working', 'astresick', '1231321313', 'Tirangaa Square', 'C++ Programming with Project', '11.00 TO 12.00 PM', 'pooja mam', 'IMG-64f75b32023282.27224252.png', 'DOC-64f75b3202b5e9.44856571.png', '4800', '2000', 'cash', '', '2023-08-28', '4141414', '', 'E2DE20AC', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificatetb`
--
ALTER TABLE `certificatetb`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `internship_details`
--
ALTER TABLE `internship_details`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `job_calls`
--
ALTER TABLE `job_calls`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship_details`
--
ALTER TABLE `internship_details`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_calls`
--
ALTER TABLE `job_calls`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
