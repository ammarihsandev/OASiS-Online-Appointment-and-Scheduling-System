
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2015 at 08:44 PM
-- Server version: 5.1.69
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u432221022_myfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` int(1) NOT NULL AUTO_INCREMENT,
  `Admin_pass` varchar(50) NOT NULL,
  `Admin_username` varchar(10) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_pass`, `Admin_username`) VALUES
(1, '5f4dcc3b5aa765d61d8327deb882cf99', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `App_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(8) NOT NULL,
  `Lecturer_ID` int(5) NOT NULL,
  `App_date` date NOT NULL,
  `App_time` time NOT NULL,
  `App_reason` varchar(30) NOT NULL,
  `App_status` varchar(10) NOT NULL,
  `App_creationtime` varchar(20) NOT NULL,
  `Note` varchar(9) NOT NULL DEFAULT 'ok',
  `Cancel_reason` varchar(200) NOT NULL,
  PRIMARY KEY (`App_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`App_ID`, `Student_ID`, `Lecturer_ID`, `App_date`, `App_time`, `App_reason`, `App_status`, `App_creationtime`, `Note`, `Cancel_reason`) VALUES
(2, 1118503, 1234, '2015-04-24', '09:00:00', 'assignment', 'ongoing', '12/04/2015, 12.23 pm', 'cancel', ''),
(4, 1118503, 5555, '2015-04-16', '08:30:00', 'yui', '', '14/04/2015, 05:12 pm', 'cancel', 'I have an exam at the same time.'),
(5, 1118503, 5555, '2015-03-01', '08:30:00', 'yui', '', '14/04/2015, 05:12 pm', 'cancel', 'Attending Meeting'),
(6, 1118503, 5555, '2015-04-06', '09:00:00', 'consultation', '', '14/04/2015, 05:24 pm', 'cancel', 'Attend the Anual Meeting'),
(21, 1118503, 1235, '2015-04-28', '09:00:00', 'Consultation about FYP Poster', '', '27/04/2015, 01:20 pm', 'ok', ''),
(18, 1118503, 1234, '2015-04-14', '09:30:00', 'testing', '', '17/04/2015, 11:47 am', 'ok', ''),
(17, 1118503, 1234, '2015-04-14', '09:00:00', 'Project Discussion', '', '17/04/2015, 11:13 am', 'ok', ''),
(15, 1118503, 1234, '2015-04-21', '08:30:00', 'kk', '', '17/04/2015, 11:09 am', 'cancel', 'I need to attend conference in US'),
(19, 1118503, 1234, '2015-04-14', '09:00:00', 'Consultation', '', '17/04/2015, 04:27 pm', 'ok', ''),
(22, 1118503, 1234, '2015-04-28', '09:00:00', 'assignement consultation', '', '28/04/2015, 11:46 am', 'ok', ''),
(23, 1118503, 1234, '2015-04-28', '09:00:00', 'test mobile', '', '30/04/2015, 09:25 am', 'ok', ''),
(24, 0, 1234, '1970-01-01', '12:00:00', 'vd', '', '05/05/2015, 09:51 pm', 'ok', ''),
(25, 0, 1234, '1970-01-01', '08:30:00', 'bmmnmn', '', '05/05/2015, 10:16 pm', 'ok', ''),
(26, 1118503, 1234, '2015-05-15', '17:00:00', 'Assignment 2', '', '06/05/2015, 12:06 pm', 'ok', ''),
(27, 1111, 5555, '1970-01-01', '09:00:00', 'Unsetted', '', '07/05/2015, 04:34 pm', 'ok', ''),
(28, 1118503, 1234, '2015-05-05', '09:00:00', 'FYP Exhibition Consultation', '', '07/05/2015, 05:11 pm', 'ok', ''),
(29, 1118503, 1234, '2015-05-05', '09:00:00', 'Consultation fyp', '', '08/05/2015, 11:09 am', 'ok', ''),
(30, 1118503, 1234, '2015-05-05', '09:00:00', 'Consultation fyp', '', '08/05/2015, 11:09 am', 'ok', ''),
(31, 1118503, 1234, '2015-05-05', '09:00:00', 'Consultation for FYP Project', '', '08/05/2015, 12:18 pm', 'ok', ''),
(32, 1118503, 1234, '2015-05-05', '09:00:00', 'FYP Consultation', '', '08/05/2015, 03:04 pm', 'ok', ''),
(33, 1118503, 0, '0000-00-00', '00:00:00', '', '', '08/05/2015, 03:05 pm', 'ok', ''),
(34, 1118503, 1235, '2015-05-12', '09:00:00', 'Group Assignemnet Consultation', '', '08/05/2015, 03:35 pm', 'ok', ''),
(35, 1118503, 1234, '2015-05-05', '09:00:00', 'Assignment Consultation', '', '08/05/2015, 04:01 pm', 'ok', ''),
(36, 1118503, 1234, '2015-05-12', '09:00:00', 'Assignment Consultation', '', '08/05/2015, 04:35 pm', 'ok', ''),
(37, 1118503, 1234, '2015-05-12', '09:30:00', 'Assignment Consultation', '', '08/05/2015, 04:57 pm', 'ok', ''),
(38, 1118503, 1234, '1970-01-01', '09:00:00', 'FYP 2 Consultation', '', '12/05/2015, 04:36 pm', 'ok', ''),
(39, 1118503, 1234, '2015-05-12', '09:00:00', 'FYP 2 Consultation', '', '12/05/2015, 04:49 pm', 'ok', ''),
(40, 1118503, 1234, '2015-05-12', '09:30:00', 'FYP2 Consultation', '', '13/05/2015, 10:46 pm', 'ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `avatime`
--

CREATE TABLE IF NOT EXISTS `avatime` (
  `AvaTimeID` int(11) NOT NULL AUTO_INCREMENT,
  `Lecturer_ID` int(11) NOT NULL,
  `day` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`AvaTimeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `avatime`
--

INSERT INTO `avatime` (`AvaTimeID`, `Lecturer_ID`, `day`, `time`) VALUES
(14, 1234, 'Friday', '16:30:00'),
(13, 1234, 'Tuesday', '12:00:00'),
(12, 1234, 'Tuesday', '09:30:00'),
(11, 1234, 'Tuesday', '09:00:00'),
(10, 1234, 'Tuesday', '08:30:00'),
(15, 1234, 'Friday', '17:00:00'),
(16, 1234, 'Friday', '17:30:00'),
(17, 1235, 'Tuesday', '08:30:00'),
(18, 1235, 'Tuesday', '09:00:00'),
(19, 1235, 'Tuesday', '09:30:00'),
(20, 5555, 'Tuesday', '08:30:00'),
(25, 5555, 'Thursday', '11:30:00'),
(24, 1234, 'Wednesday', '10:00:00'),
(26, 5555, 'Thursday', '12:00:00'),
(27, 5555, 'Thursday', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_subject` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `contact_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_time`, `note`) VALUES
(14, 'Student IIUM', 'ammarihsan04@gmail.com', 'Forgot Password', 'Dear admin, I have forgotten my password and can not login to the IIUM OASiS, so what can I do? Thank you..', '13/02/2015, 05:29 pm', 'replied'),
(15, 'Mahmoud', 'mahmoudiium@gmail.com', 'Testing', 'I can not log in using my matric no and password why ?', '17/02/2015, 04:08 pm', 'replied'),
(11, 'Ihsan', 'ammar.ihsan@live.iium.edu.my', 'Testing', 'Hi, this is just a testing message. Hi, this is just a testing message. Hi, this is just a testing message. ', '10/02/2015, 04:02 pm', 'read'),
(16, 'MAste', '', 'Smart head', 'Y you hide your source code ::::::::::::', '12/03/2015, 06:31 pm', 'read'),
(18, 'Ammar', 'me@ammarihsan.com', 'Questions', 'This is sample Message!', '07/05/2015, 05:15 pm', 'unread'),
(19, 'Amin', 'me@ammarihsan.com', 'Testing Message', 'Hello.. This is message content', '07/05/2015, 07:25 pm', 'unread'),
(20, 'Ammar Ihsan', 'me@ammarihsan.com', 'Message Subject Test', 'Message Subject Content', '08/05/2015, 12:07 am', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Course_ID` int(4) NOT NULL AUTO_INCREMENT,
  `Course_Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Course_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Student_ID` int(7) NOT NULL,
  `Lecturer_ID` int(4) NOT NULL,
  PRIMARY KEY (`Course_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Course_Code`, `Course_Name`, `Student_ID`, `Lecturer_ID`) VALUES
(1, 'INFO 4999', 'Final Year Project 2', 1118503, 0),
(2, 'CSC 3401', 'Operating System', 1118503, 0),
(3, 'INFO 2402', 'Information Retrieval Technologies', 1118503, 0),
(4, 'INFO 4203', 'Creative Design Technique', 1118503, 0),
(5, 'INFO 4504', 'Technopreneurship', 1118503, 0),
(6, 'UNGS 2050', 'Ethics and Fiqh For Everyday Life', 1118503, 0),
(7, 'INFO 4998', 'Final Year Project 1', 0, 1234),
(8, 'INFO 4999', 'Final Year Project 2', 0, 1235),
(9, 'INFO 4997', 'Industrial Attachment', 0, 1234),
(10, 'INFO 2701', 'Foundation of Quantitative Analysis', 0, 1235),
(11, 'INFO 4998', 'Final Year Project 1', 0, 3333),
(12, 'INFO 4501', 'ICT and Islam', 0, 3333),
(46, 'info 3432', 'course code', 0, 8765),
(22, 'vrwrf 3422', 'fraergetg', 0, 5463),
(31, 'INFO 4999', 'Final Year Project 2', 0, 2222),
(32, 'INFO 4998', 'Final Year Project 1', 0, 2222),
(34, 'CSC 3401', 'Operating System', 1234567, 0),
(35, 'INFO 4504', 'Technopreneurship', 1234567, 0),
(36, 'INFO 4203', 'Creative Design Technique', 1234567, 0),
(37, 'UNGS 2050', 'Ethics and Fiqh For Everyday Life', 1234567, 0),
(42, 'UNGS 2050', 'Ethics and Fiqh For Everyday Life', 1234568, 0),
(43, 'INFO 4998', 'Final Year Project 1', 1234568, 0),
(44, 'INFO 2402', 'Information Retrieval Technologies', 1234568, 0),
(45, 'INFO 4203', 'Creative Design Technique', 1234568, 0),
(47, 'INFO 4998', 'Final Year Project 1', 1324351, 0),
(48, 'LE 4000', 'English for Academic Language', 1324351, 0),
(49, 'MGT 4710', 'Organizational Behaviour', 1324351, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `Lecturer_ID` int(5) NOT NULL,
  `Lecturer_pass` varchar(50) NOT NULL DEFAULT '5f4dcc3b5aa765d61d8327deb882cf99',
  `Lecturer_fname` varchar(20) NOT NULL,
  `Lecturer_lname` varchar(20) NOT NULL,
  `Lecturer_phone` int(15) NOT NULL,
  `Lecturer_email` varchar(30) NOT NULL,
  `Lecturer_kul` varchar(100) NOT NULL,
  `Lecturer_dep` varchar(100) NOT NULL,
  `Lecturer_img` varchar(100) NOT NULL DEFAULT 'iiumoasis.com/photos/student/no%20image%20-%20men.jpg',
  `Lecturer_time` varchar(50) NOT NULL,
  `Lecturer_office` varchar(100) NOT NULL,
  PRIMARY KEY (`Lecturer_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`Lecturer_ID`, `Lecturer_pass`, `Lecturer_fname`, `Lecturer_lname`, `Lecturer_phone`, `Lecturer_email`, `Lecturer_kul`, `Lecturer_dep`, `Lecturer_img`, `Lecturer_time`, `Lecturer_office`) VALUES
(1234, '5f4dcc3b5aa765d61d8327deb882cf99', 'Alessandro', 'Volta', 812345432, 'ammarihsan04@gmail.com', 'Kulliyyah of Information and Communcation Technology', 'Department of Information System', 'iiumoasis.com/photos/lecturer/download.jpg', '', 'KICT D4 14'),
(1235, '5f4dcc3b5aa765d61d8327deb882cf99', 'Galileo', 'Galilei', 12239849, 'erecsson20@yahoo.com', 'Information and Communication Technology', 'Information System', 'iiumoasis.com/photos/lecturer/gleo.jpg', '', 'KoE E4-32'),
(5555, '5f4dcc3b5aa765d61d8327deb882cf99', 'Albert', 'Einstein', 1184564333, 'ammarihsan04@gmail.com', 'Kulliyyah of Information and Communcation Technology', 'Department of Computer Science', 'iiumoasis.com/photos/student/no%20image%20-%20men.jpg', '', 'KICT E3-20 '),
(2222, '5f4dcc3b5aa765d61d8327deb882cf99', 'James', 'Watt', 1123456752, 'ammarihsan04@gmail.com', 'Kulliyyah of Information and Communcation Technology', 'Department of Computer Science', 'iiumoasis.com/photos/lecturer/james watt.jpg', '', 'KICT E3-21');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Message_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(8) NOT NULL,
  `Lecturer_ID` int(5) NOT NULL,
  `Message_content` varchar(150) NOT NULL,
  `Message_time` varchar(50) NOT NULL,
  `Note` varchar(10) NOT NULL DEFAULT 'unread',
  `Sender` varchar(10) NOT NULL,
  PRIMARY KEY (`Message_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Message_ID`, `Student_ID`, `Lecturer_ID`, `Message_content`, `Message_time`, `Note`, `Sender`) VALUES
(1, 1118503, 2222, 'Hi, this is testing sir..', '10/02/2015', 'replied', 'student'),
(2, 1118503, 2222, 'Hi, this is testing sir..Hi, this is testing sir..Hi, this is testing sir..Hi, this is testing sir..Hi, this is testing sir..', '2015-02-10', 'replied', 'lecturer'),
(5, 1118503, 1234, 'neh lagi', '12/02/2015, 12:32 am', 'replied', 'lecturer'),
(10, 1118503, 1234, 'hehe', '12/02/2015, 01:08 pm', 'replied', 'lecturer'),
(14, 1118503, 1234, 'This is messqage from lecturer...', '12/02/2015, 07:43 pm', 'replied', 'lecturer'),
(42, 1118503, 5555, 'Assalamualaikum Sir...', '19/05/2015, 07:57 am', 'read', 'student'),
(31, 1118503, 1234, 'testing <b>ini tebal gak ya</b> <br/><hr/><img src="http://fyp.masmai.com/photos/student/dd.jpg"></img>', '14/02/2015, 06:58 am', 'replied', 'lecturer'),
(32, 1118503, 1234, '<b>bold neh</b><a href="http://fyp.masmai.com">ini link</a><img src="http://http://fyp.masmai.com/photos/student/dd.jpg"></img>', '14/02/2015, 07:22 am', 'replied', 'lecturer'),
(33, 1118503, 1234, 'mkin <i>miring</i> aja...', '14/02/2015, 07:31 am', 'replied', 'lecturer'),
(35, 1118503, 1234, 'repli test', '25/02/2015, 05:50 pm', 'replied', 'student'),
(36, 1118503, 1234, 'okay', '25/02/2015, 05:53 pm', 'replied', 'lecturer'),
(41, 1118503, 1234, 'Testing', '08/05/2015, 04:37 pm', 'read', 'student'),
(38, 1118503, 1234, 'test', '06/05/2015, 12:05 pm', 'replied', 'student'),
(39, 1118503, 1234, 'Helloo!', '07/05/2015, 05:12 pm', 'replied', 'student'),
(40, 1118503, 1234, 'Hi...!!', '07/05/2015, 05:14 pm', 'replied', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Student_ID` int(8) NOT NULL,
  `Student_pass` varchar(50) NOT NULL DEFAULT '5f4dcc3b5aa765d61d8327deb882cf99',
  `Student_fname` varchar(20) NOT NULL,
  `Student_lname` varchar(20) NOT NULL,
  `Student_phone` int(15) NOT NULL,
  `Student_email` varchar(30) NOT NULL,
  `Student_kul` varchar(100) NOT NULL,
  `Student_dep` varchar(100) NOT NULL,
  `Student_img` varchar(100) NOT NULL DEFAULT 'fyp.masmai.com/photos/student/no%20image%20-%20men.jpg',
  PRIMARY KEY (`Student_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Student_pass`, `Student_fname`, `Student_lname`, `Student_phone`, `Student_email`, `Student_kul`, `Student_dep`, `Student_img`) VALUES
(1118503, '5f4dcc3b5aa765d61d8327deb882cf99', 'Ammar', 'Ihsan Nasution', 1126195169, 'erecsson20@yahoo.com', 'Kulliyyah of Information and Communcation Technology', 'Department of Information System', 'iiumoasis.com/photos/student/dd.jpg'),
(1234567, '5f4dcc3b5aa765d61d8327deb882cf99', 'Ihsan', 'Nasti', 2147483647, 'ammar.ihsan@live.iium.edu.my', 'Kulliyyah of Information and Communcation Technology', 'Department of Information System', 'iiumoasis.com/photos/student/no%20image%20-%20men.jpg'),
(1234568, '5f4dcc3b5aa765d61d8327deb882cf99', 'Mimin', 'Mumun', 976757456, 'miminmumun22@yahoo.com', 'Kulliyyah of Economics & Management Sciences', 'Department of Business Administration', 'iiumoasis.com/photos/student/no%20image%20-%20men.jpg'),
(1324351, '5f4dcc3b5aa765d61d8327deb882cf99', 'Wahyu', 'Abdillah', 1123434534, 'wahyu20@yahoo.com', 'Kulliyyah of Information and Communcation Technology', 'Department of Computer Science', 'fyp.masmai.com/photos/student/no%20image%20-%20men.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `Site_ID` int(2) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title_desc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `logo_desktop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo_mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `footer` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tutorial_lecturer` text COLLATE utf8_unicode_ci NOT NULL,
  `tutorial_student` text COLLATE utf8_unicode_ci NOT NULL,
  `faqs` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `features` text COLLATE utf8_unicode_ci NOT NULL,
  `news` text COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `main_page` text COLLATE utf8_unicode_ci NOT NULL,
  `exhibition` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Site_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`Site_ID`, `title`, `title_desc`, `description`, `logo_desktop`, `logo_mobile`, `footer`, `tutorial_lecturer`, `tutorial_student`, `faqs`, `contact_email`, `about`, `features`, `news`, `banner`, `main_page`, `exhibition`) VALUES
(1, 'IIUM OASiS', 'IIUM Online Appointment and Scheduling System', 'IIUM OASiS is an Online Appointment and Scheduling System in IIUM. Developed as Final Year Project (FYP) for Kuliyyah of ICT, IIUM. Designed by Ammar ', 'https://www.iiumoasis.com/image/logo.png', 'https://m.iiumoasis.com/image/oasis.png', 'Copyright &copy; 2015 | <a href="http://ammarihsan.com" target="_blank">Ammar Ihsan Nasution</a><br/>International Islamic University Malaysia (IIUM),  P.O. Box 10, 50728 Kuala Lumpur, Malaysia.', '\n	<h3 class=\\"faq\\" onclick=\\"showStuff(''answer1''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Login To the Website</h3>\n<span id=\\"answer1\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer1''); \\"><small>- Go to the page <br/>\n- Enter your username (matric number)<br/>\n- Enter your password<br/>\n- Click \\"log in\\" button</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer2''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View the schedule and the history</h3>\n<span id=\\"answer2\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer2''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my schedule\\" menu to view appointmnet schedule<br/>\n- Click on the \\"my history\\" tab to view past schedule (history)<br/>\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer3''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View the schedule and the history\n</h3>\n<span id=\\"answer3\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer3''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my schedule\\" menu<br/>\n- Choose the student''s name<br/>\n- Click on the \\"detail\\" button to get the information of the student\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer4''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View and Update own profile</h3>\n<span id=\\"answer4\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer4''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my profile\\" menu to view the profile<br/>\n- Click on the \\"edit profile\\" tab to update the profile<br/>\n- Write the information that you want to update<br/>\n- Click on the update button\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer5''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Change profile picture</h3>\n\n<span id=\\"answer5\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer5''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my profile\\" menu<br/>\n- Click on the \\"edit profile\\" tab<br/>\n- Go to my picture and click the upload button<br/>\n- Choose the picture from your computer<br/>\n- Click on the update button<br/>\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer6''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Set and Update available time</h3>\n<span id=\\"answer6\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer6''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my profile\\" menu<br/>\n- Click on the \\"edit profile\\" tab<br/>\n- Go to \\"available time\\" menu<br/>\n- Choose your available time<br/>\n- Click on the update button<br/>\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer7''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View and Reply the message</h3>\n<span id=\\"answer7\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer7''); \\"><small>- Log in to IIUM OASiS<br/>\n- Click on the \\"my message\\" menu to view the message<br/>\n- Choose the message, and click on the \\"reply\\" button<br/>\n- Write your message and click \\"send\\" button\n</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer8''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Cancel the appointment</h3>\n<span id=\\"answer8\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer8''); \\"><small>- Log in to the website<br/>\n- Click on the \\"View Schedule\\" menu<br/>\n- Choose the appointment schedule<br/>\n- Click on the \\"cancel\\" button<br/>\n- Confirm cancelation</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer9''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Log out from the website</h3>\n<span id=\\"answer9\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer9''); \\"><small>- Go to the top of the page<br/>\n- Click on the \\"log out\\" button\n</small></p></span>\n\n\n\n<small><br/>\n&nbsp;If you have more questions, please contact ammar.ihsan@live.iium.edu.my for further assistance</small>', '<script type=\\"text/javascript\\">\r\n	function showStuff(id) {\r\n		document.getElementById(id).style.display = ''block'';\r\n	}\r\nfunction hideStuff(id) {\r\n		document.getElementById(id).style.display = ''none'';\r\n	}\r\n</script>\r\n\r\n	<h3 class=\\"faq\\" onclick=\\"showStuff(''answer1''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Login To the Website</h3>\r\n<span id=\\"answer1\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer1''); \\"><small>- Go to the page <br/>\r\n- Enter your username (matric number)<br/>\r\n- Enter your password<br/>\r\n- Click \\"log in\\" button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer2''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Search the Lecturer</h3>\r\n<span id=\\"answer2\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer2''); \\"><small>- Go the the home<br/>\r\n- Enter the Lecturer''s Name<br/>\r\n- Choose the Lecturer''s Kuliyyah<br/>\r\n- Choose the Lecturer''s Department<br/>\r\n- Click on the \\"View Available Time\\" button<br/>\r\n- After a moment, you will see the result page</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer3''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View the Lecturer''s information\r\n</h3>\r\n<span id=\\"answer3\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer3''); \\"><small>- Go the the home<br/>\r\n- Enter the Lecturer''s Name<br/>\r\n- Choose the Lecturer''s Kuliyyah<br/>\r\n- Choose the Lecturer''s Department<br/>\r\n- Click on the \\"View Available Time\\" button<br/>\r\n- After a moment, you will see the result page<br/>\r\n- Click on the \\"View Lecturer''s Information\\" button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer4''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Set an Appointment</h3>\r\n<span id=\\"answer4\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer4''); \\"><small>- Go the the home<br/>\r\n- Enter the Lecturer''s Name<br/>\r\n- Choose the Lecturer''s Kuliyyah<br/>\r\n- Choose the Lecturer''s Department<br/>\r\n- Click on the \\"View Available Time\\" button<br/>\r\n- After a moment, you will see the result page<br/>\r\n- Pick your available time<br/>\r\n- Review and confirm your appointment</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer5''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View the schedule and the history</h3>\r\n\r\n<span id=\\"answer5\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer5''); \\"><small>- Log in to IIUM OASiS<br/>\r\n- Click on the \\"my schedule\\" menu to view appointmnet schedule<br/>\r\n- Click on the \\"my history\\" tab to view past schedule (history)</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer6''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View and Update own profile</h3>\r\n<span id=\\"answer6\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer6''); \\"><small>- Log in to IIUM OASiS<br/>\r\n- Click on the \\"my profile\\" menu to view the profile<br/>\r\n- Click on the \\"edit profile\\" tab to update the profile<br/>\r\n- Write the information that you want to update<br/>\r\n- Click on the update button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer7''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Change profile picture</h3>\r\n<span id=\\"answer7\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer7''); \\"><small>- Log in to IIUM OASiS<br/>\r\n- Click on the \\"my profile\\" menu<br/>\r\n- Click on the \\"edit profile\\" tab<br/>\r\n- Go to my picture and click the upload button<br/>\r\n- Choose the picture from your computer<br/>\r\n- Click on the update button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer8''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Send Message to the Lecturer</h3>\r\n<span id=\\"answer8\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer8''); \\"><small>- Go the the home<br/>\r\n- Enter the Lecturer''s Name<br/>\r\n- Choose the Lecturer''s Kuliyyah<br/>\r\n- Choose the Lecturer''s Department<br/>\r\n- Click on the \\"View Available Time\\" button<br/>\r\n- After a moment, you will see the result page<br/>\r\n- Click on the \\"View Lecturer''s Information\\" menu<br/>\r\n- Click on the \\"message\\" button<br/>\r\n- Enter your message details<br/>\r\n- Click on the \\"send\\" button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer9''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>View and Reply the message</h3>\r\n<span id=\\"answer9\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer9''); \\"><small>- Log in to IIUM OASiS<br/>\r\n- Click on the \\"my message\\" menu to view the message<br/>\r\n- Choose the message, and click on the \\"reply\\" button<br/>\r\n- Write your message and click \\"send\\" button</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer10''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Cancel the appointment</h3>\r\n<span id=\\"answer10\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer10''); \\"><small>- Log in to the website<br/>\r\n- Click on the \\"View Schedule\\" menu<br/>\r\n- Choose the appointment schedule<br/>\r\n- Click on the \\"cancel\\" button<br/>\r\n- Confirm cancelation</small></p></span>\r\n\r\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer11''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Log out from the website</h3>\r\n<span id=\\"answer11\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer11''); \\"><small>- Go to the top of the page<br/>\r\n- Click on the \\"log out\\" button\r\n</small></p></span>\r\n\r\n\r\n<small><br/>\r\n&nbsp;If you have more questions, please contact ammar.ihsan@live.iium.edu.my for further assistance</small>', '<h3 class=\\"faq\\" onclick=\\"showStuff(''answer1''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>What is IIUM OASIS?</h3>\n<span id=\\"answer1\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer1''); \\"><small>IIUM OASiS is an online appointment maker platform in IIUM University. OASiS stands for Online Appointment and Scheduling System. It developed as an online system for creating and managing the appointment for the Lecturer and the Student in IIUM. Student can set an appointment with their lecturers for consultation. While the Lecturer can provide thair available time to the students.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer2''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>How do I log into IIUM OASiS?</h3>\n<span id=\\"answer2\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer2''); \\"><small>Go to IIUM OASiS website. In the top of the portal, you may log in using your username (matric number for the student or staff id for the lecturer) and your password.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer3''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>I cannot log in to IIUM OASiS. What should I do?\n</h3>\n<span id=\\"answer3\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer3''); \\"><small>If you cannot login, make sure of the following:<br/>\nIf you are a new staff/lecturer, please request for an IIUM e-mail address.<br/>\nIf you are a new student, make sure you have changed your temporary pin no given to you by AMAD/CPS when you first came to IIUM. Log into the MyIIUM portal and update your profile. Than, activate your account at the MyIIUM portal.\nIf you still cannot login, send e-mail to erecsson20@yahoo.com</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer4''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Can I edit my profile in IIUM OASiS?</h3>\n<span id=\\"answer4\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer4''); \\"><small>Yes, all users can update and modify their personal informations including their email address, phone number, and their address. All users can also upload and change their profiles pictures on IIUM OASiS.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer5''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>I don''t see the available time for the current lecturer. What should I do?</h3>\n\n<span id=\\"answer5\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer5''); \\"><small>If this is happen to you, there are two possiblities. Either the lecturer did not update their available time or the available time has booked by others students.\nYou may ask and request for other time for consultation to the lecturer by sending the message to the lecturer on IIUM OASiS.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer6''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Suddenly, I can''t come at consultation hour. What should I do?</h3>\n<span id=\\"answer6\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer6''); \\"><small>For unavoidable circumtances, yoou can cancle the appointment. Go to your schedule details. Select the appointment and click on the cancel button.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer7''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>Will I receive notification via e-mail for a new appointment?</h3>\n<span id=\\"answer7\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer7''); \\"><small>Yes, E-mail notification about the appointment details will be sent to all students and the lecturer automatically when the new appointment setted.</small></p></span>\n\n<h3 class=\\"faq\\" onclick=\\"showStuff(''answer8''); return false;\\"><img src=\\"image/check.png\\" width=\\"22\\">&nbsp;</img>How I can learn on how to use IIUM OASiS?</h3>\n<span id=\\"answer8\\" style=\\"display: none;\\"><p style=\\"background-color:#E9E9E9;padding:10px;\\"  onclick=\\"hideStuff(''answer8''); \\"><small>To learn more on how to use IIUM OASiS, please refer to the manual and video tutorials available for the lecturers and the students. You will see the link in the bottom of this page. If you have any questions, please submit your questions in contact us page.</small></p></span>\n<small><br/>\nIf you have more questions, please contact ammar.ihsan@live.iium.edu.my for further assistance</small>\n', 'info@iiumoasis.com', '<p><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IIUM OASiS</strong> is an online appointment maker platform in <a href="http://iium.edu.my" target="_blank">IIUM Univeristy</a>. OASiS stands for Online Appointment and Scheduling System. This website developed as the Final Year Project for Kulliyyah of Information and Communication Technology IIUM.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This website is to help the university to build the system for consultation service management among IIUM Lecturers and Students. With this website, the lecturers and the students can manage their time to meet and do the consultation.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The lecturer will select and provide their available time for consultation hours. And the students can view the available lecturers and time, so they can pick any date and time for doing consultation. Once they make an appointment, then the lecturer will be informed and the data in the system will be updated automatically.<br />\r\n<br />\r\nSet the appointment with your lecturer as simple as 1, 2, 3.<br />\r\n1. SELECT your Lecturer<br />\r\n2. PICK available time<br />\r\n3. MEET your Lecturer<br />\r\n<br />\r\nIf you have any comments, questions, or suggestions, feel free to contact us.<br />\r\n<br />\r\n<br />\r\n---------------------------------------------------<br />\r\n<em>Ammar Ihsan Nasution<br />\r\nKuliyyah of Informationa and Communication Technology<br />\r\nInternetional Islamic University Malaysia<br />\r\n<a href="http://www.ammarihsan.com">AmmarIhsan.com</a></em><br />\r\n<em>me(at)ammarihsan.com</em><br />\r\n01126195169</p>\r\n', '<p><img alt="secrecy icon" src="http://icons.iconarchive.com/icons/aha-soft/security/128/secrecy-icon.png" style="float:right; height:128px; margin-top:3px; width:128px" /><strong>Safe and Secure</strong></p>\r\n\r\n<ul>\r\n	<li>SSL Connection</li>\r\n	<li>Password Encryption</li>\r\n	<li>Auto Logout For Account Inactivity</li>\r\n</ul>\r\n\r\n<p><strong>Appointment Feature</strong></p>\r\n\r\n<ul>\r\n	<li>Real Time Website Notification</li>\r\n	<li>Real Time Email Notification</li>\r\n	<li>Easy to Search and View Information</li>\r\n	<li>Appointment Confirmation Slip<img src="http://icons.iconarchive.com/icons/saki/nuoveXT-2/128/Actions-appointment-new-icon.png" style="float:right" /></li>\r\n</ul>\r\n\r\n<p><strong>Messaging Feature</strong></p>\r\n\r\n<ul>\r\n	<li>Real Time Website Notification</li>\r\n	<li>Real Time Email Notification</li>\r\n	<li>Easy to Send and View Message</li>\r\n	<li>Message Status (Read/Unread/Replied)</li>\r\n</ul>\r\n\r\n<p><strong>Admin Feature</strong></p>\r\n\r\n<ul>\r\n	<li>Easy to update and manage the member</li>\r\n	<li>Easy to view the <strong>website statistics</strong></li>\r\n	<li>Easy to manage the message<img src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-2/128/message-already-read-icon.png" style="float:right; line-height:20.7999992370605px" /></li>\r\n	<li>Content Management Site</li>\r\n</ul>\r\n\r\n<p><strong>Search Engine Optimization (SEO) Friendly</strong></p>\r\n\r\n<ul>\r\n	<li>Well designed for Search Engine</li>\r\n	<li>Google Site Link</li>\r\n	<li>Fast to Load</li>\r\n	<li>Easy to Navigate</li>\r\n	<li>User Friendly</li>\r\n</ul>\r\n', '<p><img src="http://icons.iconarchive.com/icons/capital18/ethereal-2/128/Toolbar-Info-icon.png" style="float:right" /></p>\r\n\r\n<p>This website <em><strong>(IIUM OASIS)</strong></em> designed to fulfill the requirement of FYP 1 and FYP 2. If you have any idea/comment/suggestion, we will happy to hear that through our email at <a href="/cdn-cgi/l/email-protection#e58c8b838aa58c8c90888a84968c96cb868a88da9690878f808691d8acacb0a8c0d7d5b4908096918c8a8bc0d7a3b69082828096918c8a8b"><em>[email&nbsp;protected]</em></a> or you can send it via <a href="http://iiumoasis.com/contact.php">contact us</a> form.</p>\r\n\r\n<p>Now, IIUM OASIS also available in Mobile version. You may acces the mobile version of IIUM OASIS directly through your mobile devices or by visiting <a href="https://m.iiumoasis.com">https://m.iiumoasis.com</a></p>\r\n\r\n<p>For further news, info, and update about this project will be informed through this page. Thank you for supporting our project!</p>\r\n\r\n<p><br />\r\nFind us on 8th of Mai 2015 for FYP Final Exhibition on KICT Hall.</p>\r\n\r\n<p>See you....</p>\r\n', 'https://www.iiumoasis.com/image/banner2.png', '<table width=\\"600\\"><tr><td colspan=\\"5\\"><center><i><b><h2>IIUM Online Appointment and Scheduling System</h2><h3>\\"Set an Appointment with Your Lecturer in 3 Steps!\\"</h3><br><b></i></center></td></tr><tr>\n<td width=\\"33%\\"><center><b>-(1)-<br></center></td>\n<td ><center><b><p></p><br></center></td>\n<td width=\\"33%\\"><center><b>-(2)-<br></center></td>\n<td ><center><b><p></p><br></center></td>\n<td width=\\"33%\\"><center><b>-(3)- </center></td></tr>\n<tr><td width=\\"33%\\"><center><img src=\\"image/select.png\\" alt=\\"Select The Lecturer\\"  title=\\"Select The Lecturer\\" width=\\"100\\"></img></center></td>\n<td><center><img height=\\"50\\" title=\\"Next\\" src=\\"image/arrowr (5).png\\" width=\\"70\\" alt=\\"First Arrow\\"></img></center></td>\n<td width=\\"33%\\"><center><img  alt=\\"Pick Available Time\\"  title=\\"Pick Available Time\\"  width=\\"100\\" src=\\"image/pick.png\\"></img></center></td>\n<td><center><img height=\\"50\\" alt=\\"Second Arrow\\" src=\\"image/arrowr (5).png\\" title=\\"Next\\" width=\\"70\\"></img></center></td>\n<td width=\\"33%\\"><center><img src=\\"image/meet.png\\" alt=\\"Meet Your Lecturer\\" title=\\"Meet Your Lecturer\\" width=\\"100\\"></img></center></td></tr>\n<tr>\n<td width=\\"33%\\"><center><small><b>Select Your Lecturer!</center></td>\n<td ><center><b> <br></center></td>\n<td width=\\"33%\\"><center><small><b>Pick the Available Time!<br></center></td>\n<td ><center><b> <br></center></td>\n<td width=\\"33%\\"><center><small><b>Meet Your Lecturer!<br></center></td>\n<tr><td> </td></tr>\n</table>', '<p>FYP Exhibition is Coming Soon...</p>\r\n\r\n<p>Visit Us and Know More about IIUM OASiS...</p>\r\n\r\n<p>It is on 8th of Mai, 2015 at KICT Multipurpose Hall...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://www.iiumoasis.com/image/FYPP%20Purple%203.png" target="_blank"><img alt="Click to Enlarge the Poster" src="https://www.iiumoasis.com/image/FYPP%20Purple%203.png" style=" width:100%" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
