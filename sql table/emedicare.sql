-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 07:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emedicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `doctor_id` varchar(10) NOT NULL,
  `slot_1_start` varchar(10) NOT NULL,
  `slot_1_end` varchar(10) NOT NULL,
  `slot_2_start` varchar(10) NOT NULL,
  `slot_2_end` varchar(10) NOT NULL,
  `slot_3_start` varchar(10) NOT NULL,
  `slot_3_end` varchar(10) NOT NULL,
  `num_of_slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`doctor_id`, `slot_1_start`, `slot_1_end`, `slot_2_start`, `slot_2_end`, `slot_3_start`, `slot_3_end`, `num_of_slot`) VALUES
('1424', '1', '2', '3', '4', '5', '6', 3);

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `medical_id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`medical_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `national_id`, `blood_group`, `religion`, `nationality`, `password`, `gender`, `age`) VALUES
(1001, 'Lionel', 'Messi', 'leo123@gmail.com', '+8801963065605', 'Dhanmondi,Dhaka,Bangladesh', '2610413965404', 'AB+', 'Islam', 'Bangladeshi', '', '', 0),
(10002, 'Sumon', 'Islam', 'Sumon148889@gmail.com', '+8801771544531', 'Naogaon,Rajshahi,Bangladesh', '2610413965405', 'B+', 'Islam', 'Bangladeshi', '', '', 0),
(10003, 'Mahfuzur', 'Rahman', 'mahfuz12@gmail.com', '+8801771544588', 'Meherpur,Kustia,Rajshahi', '1810413965402', 'B-', 'Islam', 'Bangladeshi', '', '', 0),
(0, 'wfwf', 'wfwf', 'asif@gmail.com', '654684651', 'wdad', 'wdw425151', 'awdd', 'wdDADA', 'dAdad', '12345', 'dadad', 35),
(123, ' zdfd', 'dbdbdbdb', 'm@gmail.com', '45374345', 'rgdz', 'rgg', 'A+', 'Islam', 'gdgdrg', '123', 'Male', 43543),
(123, ' zdfd', 'dbdbdbdb', 'm@gmail.com', '45374345', 'rgdz', 'rgg', 'A+', 'Islam', 'gdgdrg', '123', 'Male', 43543),
(12, 'Mahfuz', 'Sozeeb', 'g@gmail.com', '111111111111', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'A+', 'Islam', '', '12', 'Male', 22);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `govt_reg_no` varchar(20) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `specialist` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `habit` varchar(500) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `first_name`, `last_name`, `email`, `password`, `govt_reg_no`, `degree`, `specialist`, `gender`, `religion`, `blood_group`, `address`, `mobile`, `national_id`, `nationality`, `description`, `habit`, `age`) VALUES
(1424, 'Mahfuz', 'Sozeeb', 'm@gmail.com', '12', '64461', 'MBBS', 'Not Yet', 'Male', 'Islam', 'A+', 'Dhanmondi, Dhaka', '01768094971', 'hm616-616m-mumu-6116', 'Bangladeshi', 'Hi, I\'m Dr. Mahfuz. Im here to help you through medication and with proper care.', 'Playing chess', 30),
(5245, 'Sumon', 'Islam', 's@gmail.com', '123', '56331', 'MBBS', 'Not Yet', 'Male', 'Islam', 'B+', 'Mirpur, Dhaka', '01771544531', 'kiuk54i-5441kik-456ikg-igk46', 'Bangladeshi', 'Hi I\'m Dr.Sumon. Are you feeling sickness? Don\'t worry I got your back. Make an quick appointment.', 'Reading', 28);

-- --------------------------------------------------------

--
-- Table structure for table `mcenter`
--

CREATE TABLE `mcenter` (
  `name` varchar(50) NOT NULL,
  `mcenter_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcenter`
--

INSERT INTO `mcenter` (`name`, `mcenter_id`, `email`, `password`, `contact`, `address`, `country`) VALUES
('Medinova', 200, 'medi#gmail.com', '12', '01765156851', 'Dhanmondi, Dhaka', 'Bangladesh'),
('Regency Medical', 201, 'regency@gmail.com', '123', '01765511254', 'Mirpur, Dhaka', 'Bangladesh'),
('Square Hospital', 202, 'square@gmail.com', '1234', '019596546845', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `mcenter_schedule`
--

CREATE TABLE `mcenter_schedule` (
  `patient_id` int(20) NOT NULL,
  `mcenter_id` int(20) NOT NULL,
  `service_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcenter_schedule`
--

INSERT INTO `mcenter_schedule` (`patient_id`, `mcenter_id`, `service_date`) VALUES
(12, 12345, '2018-10-29'),
(12, 123, '2018-10-30'),
(1001, 1234, '2018-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `citizen_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `medicenter_id` int(11) NOT NULL,
  `history` varchar(500) NOT NULL,
  `service_date` date NOT NULL,
  `booktime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`citizen_id`, `doctor_id`, `medicenter_id`, `history`, `service_date`, `booktime`) VALUES
(12, 1424, 0, 'http://localhost/project/doctor/upload/11.PNG', '2018-10-27', '10001015'),
(12, 1424, 0, 'http://localhost/project/doctor/upload/11.PNG', '2018-10-27', '10001015');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `doctor_id` int(10) NOT NULL,
  `citizen_id` int(10) NOT NULL,
  `bookdate` date NOT NULL,
  `booktime` varchar(10) NOT NULL,
  `reson` varchar(1500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`doctor_id`, `citizen_id`, `bookdate`, `booktime`, `reson`, `status`) VALUES
(1424, 12, '2018-10-17', '10001015', 'Fever', 0),
(1424, 12, '2018-10-27', '10001015', 'cold', 0),
(1424, 12, '2018-10-28', '10001015', 'pain', 0),
(1424, 12, '2018-10-30', '10001015', 'Back pain, Fever, Cold', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD KEY `age` (`age`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
