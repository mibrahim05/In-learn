-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 07:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inlearn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin7890');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(1, 'Learn PHP in Easy Way and quickly', ' In PHP course helps in understanding the basics of PHP scripting language. It is a very useful now a days ', 'Learning Point', '../image/courseimg/phpimg.jpg', '15 hours', 0, 2000),
(6, 'Learn python programming', 'In this course you will learn from the basics to advanced in python programming. This course will be helpfull for the beginners ', 'code school', '../image/courseimg/pythonimg.jpg', '3 Months', 0, 2999),
(7, 'C++ for beginners ', 'In this course you will learn the basics of c++ programming. This course is for beginers to get started with C++ programming', 'varun kumar', '../image/courseimg/c++12.jpg', '1 Month', 0, 999),
(8, 'Complete HTML Tutorial ', 'In this course you will learn HTML ', 'Rohan kumar', '../image/courseimg/html12.jpg', '2 Weeks', 0, 599),
(9, 'Css Zero To Hero', 'In this course you will learn from the beginers to advanced Css ', 'Divya kumar', '../image/courseimg/css1.jpg', '1 Month', 0, 899),
(10, 'Advanced python Programming', 'In this course you will learn the advanced level in python programming', 'mohammed bilal', '../image/courseimg/ai.jpg', '5 Months', 0, 3000),
(11, 'learn software project management ', 'learn software project management and its cost and execution easily', 'john', '../image/courseimg/spmimg.jpg', '10 days', 0, 2999);

-- --------------------------------------------------------

--
-- Table structure for table `courseadd`
--

CREATE TABLE `courseadd` (
  `co_id` int(11) NOT NULL,
  `add_id` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respmsg` text NOT NULL,
  `amount` int(11) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courseadd`
--

INSERT INTO `courseadd` (`co_id`, `add_id`, `stu_email`, `course_id`, `status`, `respmsg`, `amount`, `add_date`) VALUES
(1, 'ORDS46270740', 'mohammed@gmail.com', 1, 'Success', 'Done', 0, '2003-03-23'),
(2, 'ORDS17090168', 'mohammed@gmail.com', 6, 'Success', 'Done', 0, '2006-03-23'),
(3, 'ORDS94443571', 'mohammed@gmail.com', 11, 'Success', 'Done', 0, '2003-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(3, 'In learn is the best place to level up your skills ', 1),
(4, 'PHP course is really good and easy to learn', 2),
(5, 'Python is great for beginner to get started', 3),
(6, 'In learn is very helpfull for me as student as it provides free courses ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(2, 'Introduction to PHP programming', 'In this lesson you will learn introduction to php', '../lessonvid/phpv2.mp4', 1, 'Learn PHP in Easy Way and quickly'),
(4, 'Introduction to Python programming', 'this is a Introduction to python programming', '../lessonvid/video5.mp4', 6, 'Learn python programming'),
(5, 'Introduction to C++', 'In this lesson you will learn the introduction to c++ programming ', '../lessonvid/c++1.mp4', 7, 'C++ for beginners '),
(6, 'What is html ', 'In this lesson you will learn the introduction to html ', '../lessonvid/html1.mp4', 8, 'Complete HTML Tutorial '),
(7, 'What is CSS', 'In this lesson you will learn about the basics of Css', '../lessonvid/css1.mp4', 9, 'Css Zero To Hero'),
(8, 'What are variables in PHP', 'In this lesson you will learn about the variables in php', '../lessonvid/video13.mp4', 1, 'Learn PHP in Easy Way and quickly'),
(9, 'function point', 'learn function eaily', '../lessonvid/spm1.mp4', 11, 'learn software project management '),
(10, 'How to calculate function point', 'In this lesson you will learn how to calculate function point', '../lessonvid/spm2.mp4', 11, 'learn software project management ');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, '    mohammed', 'mohammed@gmail.com', 'moh7890', '    Student', '../image/stu/student4.jpg'),
(2, ' ibrahim', 'ibrahim@gmail.com', 'ibrahim1234', ' Student', '../image/stu/stu2.jpg'),
(3, ' nizam', 'nizam@gmail.com', 'nizam1234', ' UG student', '../image/stu/student.png'),
(4, 'ahmed', 'ahmed@gmail.com', 'ahmed7890', '', ''),
(5, '   kumar', 'kumar@gmail.com', 'kumar1234', ' Student', '../image/stu/stu5.jpg'),
(6, 'john', 'john@gmail.com', 'john1234', '', ''),
(8, 'rohan', 'rohan@gmail.com', 'rohan7890', 'web deb', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseadd`
--
ALTER TABLE `courseadd`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `courseadd`
--
ALTER TABLE `courseadd`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student1`
--
ALTER TABLE `student1`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
