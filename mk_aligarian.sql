-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 02:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mk_aligarian`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy_facility`
--

CREATE TABLE IF NOT EXISTS `academy_facility` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility` text,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `academy_facility`
--

INSERT INTO `academy_facility` (`f_id`, `facility`) VALUES
(1, 'Night practice facility'),
(2, 'Availability of Bowling machine'),
(3, '2 turf and 5 cement wickets'),
(4, 'Arm stick, catching plate, catching net and other required equipments.'),
(5, 'Gym and body fitness equipments'),
(6, 'Yoga training'),
(7, 'General and specific fitness equipment.'),
(8, 'Availability of trained Physio'),
(9, 'Psychological help'),
(10, 'Scientific and systematic training.'),
(11, 'Video analysis for proper understanding and learning.'),
(12, 'Separate coach for beginners.'),
(13, 'Provides Accommodation with proper food facility');

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achievement` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `achievement`) VALUES
(4, 'Tajammul Warsi has played U-22 National Cricket'),
(5, 'Waseem Ali Beg has done U-16 Camp and also played North Zone Interversity Tournament'),
(6, 'Rahul Goswami has played North Zone Interversity Tournament.'),
(7, 'Aquib Raza has played North-Zone Interversity Tournament'),
(8, 'Hannan Rizwan U.P. U-14,U-16 and U-19');

-- --------------------------------------------------------

--
-- Table structure for table `batting`
--

CREATE TABLE IF NOT EXISTS `batting` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) DEFAULT NULL,
  `r_s_1` int(3) DEFAULT NULL,
  `b_f_1` int(3) DEFAULT NULL,
  `f_s_1` int(3) DEFAULT NULL,
  `s_s_1` int(3) DEFAULT NULL,
  `m_out_1` varchar(20) DEFAULT NULL,
  `bowler_1` varchar(30) DEFAULT NULL,
  `fielder_1` varchar(30) DEFAULT NULL,
  `r_s_2` int(3) DEFAULT NULL,
  `b_f_2` int(3) DEFAULT NULL,
  `f_s_2` int(3) DEFAULT NULL,
  `s_s_2` int(3) DEFAULT NULL,
  `m_out_2` varchar(20) DEFAULT NULL,
  `bowler_2` varchar(30) DEFAULT NULL,
  `fielder_2` varchar(30) DEFAULT NULL,
  `r_s_3` int(3) DEFAULT NULL,
  `b_f_3` int(3) DEFAULT NULL,
  `f_s_3` int(3) DEFAULT NULL,
  `s_s_3` int(3) DEFAULT NULL,
  `m_out_3` varchar(20) DEFAULT NULL,
  `bowler_3` varchar(30) DEFAULT NULL,
  `fielder_3` varchar(30) DEFAULT NULL,
  `r_s_4` int(3) DEFAULT NULL,
  `b_f_4` int(3) DEFAULT NULL,
  `f_s_4` int(3) DEFAULT NULL,
  `s_s_4` int(3) DEFAULT NULL,
  `m_out_4` varchar(20) DEFAULT NULL,
  `bowler_4` varchar(30) DEFAULT NULL,
  `fielder_4` varchar(30) DEFAULT NULL,
  `r_s_5` int(3) DEFAULT NULL,
  `b_f_5` int(3) DEFAULT NULL,
  `f_s_5` int(3) DEFAULT NULL,
  `s_s_5` int(3) DEFAULT NULL,
  `m_out_5` varchar(20) DEFAULT NULL,
  `bowler_5` varchar(30) DEFAULT NULL,
  `fielder_5` varchar(30) DEFAULT NULL,
  `r_s_6` int(3) DEFAULT NULL,
  `b_f_6` int(3) DEFAULT NULL,
  `f_s_6` int(3) DEFAULT NULL,
  `s_s_6` int(3) DEFAULT NULL,
  `m_out_6` varchar(20) DEFAULT NULL,
  `bowler_6` varchar(30) DEFAULT NULL,
  `fielder_6` varchar(30) DEFAULT NULL,
  `r_s_7` int(3) DEFAULT NULL,
  `b_f_7` int(3) DEFAULT NULL,
  `f_s_7` int(3) DEFAULT NULL,
  `s_s_7` int(3) DEFAULT NULL,
  `m_out_7` varchar(20) DEFAULT NULL,
  `bowler_7` varchar(30) DEFAULT NULL,
  `fielder_7` varchar(30) DEFAULT NULL,
  `r_s_8` int(3) DEFAULT NULL,
  `b_f_8` int(3) DEFAULT NULL,
  `f_s_8` int(3) DEFAULT NULL,
  `s_s_8` int(3) DEFAULT NULL,
  `m_out_8` varchar(20) DEFAULT NULL,
  `bowler_8` varchar(30) DEFAULT NULL,
  `fielder_8` varchar(30) DEFAULT NULL,
  `r_s_9` int(3) DEFAULT NULL,
  `b_f_9` int(3) DEFAULT NULL,
  `f_s_9` int(3) DEFAULT NULL,
  `s_s_9` int(3) DEFAULT NULL,
  `m_out_9` varchar(20) DEFAULT NULL,
  `bowler_9` varchar(30) DEFAULT NULL,
  `fielder_9` varchar(30) DEFAULT NULL,
  `r_s_10` int(3) DEFAULT NULL,
  `b_f_10` int(3) DEFAULT NULL,
  `f_s_10` int(3) DEFAULT NULL,
  `s_s_10` int(3) DEFAULT NULL,
  `m_out_10` varchar(20) DEFAULT NULL,
  `bowler_10` varchar(30) DEFAULT NULL,
  `fielder_10` varchar(30) DEFAULT NULL,
  `r_s_11` int(3) DEFAULT NULL,
  `b_f_11` int(3) DEFAULT NULL,
  `f_s_11` int(3) DEFAULT NULL,
  `s_s_11` int(3) DEFAULT NULL,
  `m_out_11` varchar(20) DEFAULT NULL,
  `bowler_11` varchar(30) DEFAULT NULL,
  `fielder_11` varchar(30) DEFAULT NULL,
  `extra` int(3) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `batting`
--

INSERT INTO `batting` (`b_id`, `t_id`, `r_s_1`, `b_f_1`, `f_s_1`, `s_s_1`, `m_out_1`, `bowler_1`, `fielder_1`, `r_s_2`, `b_f_2`, `f_s_2`, `s_s_2`, `m_out_2`, `bowler_2`, `fielder_2`, `r_s_3`, `b_f_3`, `f_s_3`, `s_s_3`, `m_out_3`, `bowler_3`, `fielder_3`, `r_s_4`, `b_f_4`, `f_s_4`, `s_s_4`, `m_out_4`, `bowler_4`, `fielder_4`, `r_s_5`, `b_f_5`, `f_s_5`, `s_s_5`, `m_out_5`, `bowler_5`, `fielder_5`, `r_s_6`, `b_f_6`, `f_s_6`, `s_s_6`, `m_out_6`, `bowler_6`, `fielder_6`, `r_s_7`, `b_f_7`, `f_s_7`, `s_s_7`, `m_out_7`, `bowler_7`, `fielder_7`, `r_s_8`, `b_f_8`, `f_s_8`, `s_s_8`, `m_out_8`, `bowler_8`, `fielder_8`, `r_s_9`, `b_f_9`, `f_s_9`, `s_s_9`, `m_out_9`, `bowler_9`, `fielder_9`, `r_s_10`, `b_f_10`, `f_s_10`, `s_s_10`, `m_out_10`, `bowler_10`, `fielder_10`, `r_s_11`, `b_f_11`, `f_s_11`, `s_s_11`, `m_out_11`, `bowler_11`, `fielder_11`, `extra`) VALUES
(14, 12, 68, 74, 4, 2, 'Bowled', 'SHOAIB NUSRAT', NULL, 32, 60, 4, 0, 'Caught Out', 'SARFARAZ KHAN', 'ABDULLAH KHAN', 70, 60, 3, 3, 'Run Out', NULL, 'BINARY BRAIN', 110, 103, 7, 3, 'Not Out', NULL, NULL, 7, 3, 0, 1, 'LBW', 'MD AREEB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7),
(15, 11, 121, 140, 7, 4, 'Obstructing Field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 89, 4, 4, 'Hit Wicket', 'Z KHAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, 11, 4, 2, 'Not Out', NULL, NULL, 25, 20, 3, 1, 'Not Out', NULL, NULL, 34, 44, 3, 0, 'Stump Out', 'Y CHAHAL', 'MS DHONI', 12),
(16, 44, 38, 24, 4, 1, 'Time Out', NULL, NULL, 40, 24, 4, 3, 'Not Out', NULL, NULL, 21, 12, 2, 1, 'Not Out', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(17, 43, 70, 40, 5, 5, 'Not Out', NULL, NULL, 26, 20, 2, 1, 'Not Out', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `bowling`
--

CREATE TABLE IF NOT EXISTS `bowling` (
  `bo_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) DEFAULT NULL,
  `o_b_1` decimal(3,1) DEFAULT NULL,
  `m_1` int(2) DEFAULT NULL,
  `r_g_1` int(3) DEFAULT NULL,
  `w_t_1` int(2) DEFAULT NULL,
  `o_b_2` decimal(3,1) DEFAULT NULL,
  `m_2` int(2) DEFAULT NULL,
  `r_g_2` int(3) DEFAULT NULL,
  `w_t_2` int(2) DEFAULT NULL,
  `o_b_3` decimal(3,1) DEFAULT NULL,
  `m_3` int(2) DEFAULT NULL,
  `r_g_3` int(3) DEFAULT NULL,
  `w_t_3` int(2) DEFAULT NULL,
  `o_b_4` decimal(3,1) DEFAULT NULL,
  `m_4` int(2) DEFAULT NULL,
  `r_g_4` int(3) DEFAULT NULL,
  `w_t_4` int(2) DEFAULT NULL,
  `o_b_5` decimal(3,1) DEFAULT NULL,
  `m_5` int(2) DEFAULT NULL,
  `r_g_5` int(3) DEFAULT NULL,
  `w_t_5` int(2) DEFAULT NULL,
  `o_b_6` decimal(3,1) DEFAULT NULL,
  `m_6` int(2) DEFAULT NULL,
  `r_g_6` int(3) DEFAULT NULL,
  `w_t_6` int(2) DEFAULT NULL,
  `o_b_7` decimal(3,1) DEFAULT NULL,
  `m_7` int(2) DEFAULT NULL,
  `r_g_7` int(3) DEFAULT NULL,
  `w_t_7` int(2) DEFAULT NULL,
  `o_b_8` decimal(3,1) DEFAULT NULL,
  `m_8` int(2) DEFAULT NULL,
  `r_g_8` int(3) DEFAULT NULL,
  `w_t_8` int(2) DEFAULT NULL,
  `o_b_9` decimal(3,1) DEFAULT NULL,
  `m_9` int(2) DEFAULT NULL,
  `r_g_9` int(3) DEFAULT NULL,
  `w_t_9` int(2) DEFAULT NULL,
  `o_b_10` decimal(3,1) DEFAULT NULL,
  `m_10` int(2) DEFAULT NULL,
  `r_g_10` int(3) DEFAULT NULL,
  `w_t_10` int(2) DEFAULT NULL,
  `o_b_11` decimal(3,1) DEFAULT NULL,
  `m_11` int(2) DEFAULT NULL,
  `r_g_11` int(3) DEFAULT NULL,
  `w_t_11` int(2) DEFAULT NULL,
  PRIMARY KEY (`bo_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bowling`
--

INSERT INTO `bowling` (`bo_id`, `t_id`, `o_b_1`, `m_1`, `r_g_1`, `w_t_1`, `o_b_2`, `m_2`, `r_g_2`, `w_t_2`, `o_b_3`, `m_3`, `r_g_3`, `w_t_3`, `o_b_4`, `m_4`, `r_g_4`, `w_t_4`, `o_b_5`, `m_5`, `r_g_5`, `w_t_5`, `o_b_6`, `m_6`, `r_g_6`, `w_t_6`, `o_b_7`, `m_7`, `r_g_7`, `w_t_7`, `o_b_8`, `m_8`, `r_g_8`, `w_t_8`, `o_b_9`, `m_9`, `r_g_9`, `w_t_9`, `o_b_10`, `m_10`, `r_g_10`, `w_t_10`, `o_b_11`, `m_11`, `r_g_11`, `w_t_11`) VALUES
(15, 11, '10.0', 2, 45, 1, '10.0', 0, 67, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10.0', 0, 62, 0, NULL, NULL, NULL, NULL, '10.0', 1, 51, 1, '10.0', 0, 55, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10.0', 0, 70, 0, '10.0', 4, 44, 0, '10.0', 3, 57, 1, '10.0', 1, 62, 0, '10.0', 0, 55, 1, NULL, NULL, NULL, NULL),
(17, 43, '5.0', 0, 55, 0, '5.0', 0, 34, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 44, '5.0', 0, 45, 0, '3.0', 0, 40, 0, '2.0', 0, 17, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`username`, `password`, `email`) VALUES
('nawabmansur', 'mansur', 'nawabmansur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` text,
  `rating` int(1) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `feedback`, `rating`, `p_id`) VALUES
(1, 'yeah its cool...', 5, 1),
(2, 'Go on with your work', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `team_1` int(11) DEFAULT NULL,
  `result` text,
  `mom` varchar(30) DEFAULT NULL,
  `team_2` int(11) DEFAULT NULL,
  `match_venue` text,
  `umpire_1` varchar(30) DEFAULT NULL,
  `umpire_2` varchar(30) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`),
  KEY `team_other` (`team_1`),
  KEY `tour_id` (`tour_id`),
  KEY `team_2` (`team_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`m_id`, `type`, `match_date`, `team_1`, `result`, `mom`, `team_2`, `match_venue`, `umpire_1`, `umpire_2`, `tour_id`) VALUES
(4, 'tournament', '2012-07-24', 11, 'mk aligarian beat aligarh xi by 6 wickets', 'shoaib nusrat', 12, 'willingdon pavillion amu aligarh', 'sr khan', 'pm shamsi', 1),
(6, 'tournament', '2018-03-08', 15, 'draw due to rain', 'me', 16, 'willingdon pavillion', 'aleem dar', 'billy bowden', 2),
(7, 'tournament', '2018-05-05', 17, 'mk aligarian beat rps by 61 runs', 'best player', 18, 'ahilyabai holkar stadium aligarh', 'rudy kurston', 'david shepherd', 1),
(11, 'warm up', '2018-04-13', 43, 'mk junior beat mk senior by 2 runs', 'farhaan', 44, 'dps ground aligarh', 'mansur ahmad', 'aleem shiekh', NULL),
(13, 'tournament', '2018-05-08', 47, 'mk blue beat mk red by 6 wickets', 'b5', 48, 'maua kheda', 'k nandan', 'aleem dar', 3),
(17, 'tournament', '2018-06-12', 55, 'test', 'test', 56, 'test', 'test', 'test', 4);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `image`) VALUES
(2, 'shoaib 1', '1.jpg'),
(3, 'shoaib 2', '2.jpg'),
(4, 'shoaib 3', '3.jpg'),
(5, 'shoaib 4', '4.jpg'),
(6, 'shoaib 5', '5.jpg'),
(7, 'shoaib 6', '6.jpg'),
(8, 'shoaib 7', '7.jpg'),
(9, 'shoaib 8', '8.jpg'),
(10, 'shoaib 9', '9.jpg'),
(11, 'shoaib 10', '10.jpg'),
(12, 'shoaib 11', '11.jpg'),
(13, 'shoaib 12', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice` text,
  `expire` date DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `player_1` text,
  `player_2` text,
  `player_3` text,
  `player_4` text,
  `player_5` text,
  `player_6` text,
  `player_7` text,
  `player_8` text,
  `player_9` text,
  `player_10` text,
  `player_11` text,
  `player_12` text,
  `post_date` date DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `notice`, `expire`, `type`, `player_1`, `player_2`, `player_3`, `player_4`, `player_5`, `player_6`, `player_7`, `player_8`, `player_9`, `player_10`, `player_11`, `player_12`, `post_date`) VALUES
(2, 'All the academy members are requested to be present at academy ground on 05-04-2018 at 10:00 AM.', '2018-04-05', 'general', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-02'),
(3, 'A practice match will be played on 10-04-2018 at 9:00 AM sharp in Willingdon Pavillion Ground AMU Aligarh. The team for the same is:', '2018-04-10', 'team', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', '2018-04-03'),
(5, 'A friendly Cricket Match will be played between MK Aligarian and DPS at DPS Ground Agra Road, All are required to be present on ground at 8:00 AM.', '2018-06-12', 'team', 'shoaib nusrat (C)', 'shoaib ilyasi', 'shoaib khan', 'mohammad shoaib', 'shoaib raza', 'shoaib ahmed (Wk)', 'shoaib shah', 'shoaib mirza', 'shoaib qureshi', 'syed shoaib', 'shoaib ali', 'shoaib rizvi', '2018-05-10'),
(10, 'ikjnb ', '2018-05-07', 'general', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-20'),
(13, 'saxvdz', '2018-07-01', 'general', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` text,
  `password` varchar(30) DEFAULT NULL,
  `fees` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `photo` text,
  `skill` text,
  `address` text,
  `mobile_no` varchar(13) DEFAULT NULL,
  `authentication` varchar(30) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `email`, `password`, `fees`, `DOB`, `photo`, `skill`, `address`, `mobile_no`, `authentication`, `message`) VALUES
(1, 'shoaib nusrat', 'nusratshoaibansarit@gmail.com', 'shoaib', NULL, '1996-10-13', 'IMG_20160307_141319.jpg', 'Right Arm Left Break', 'M-37 SZ HALL AMU Aligarh', '9012916775', 'yes', 'Come for personal training on moday morning 5:00 AM in athletic ground'),
(2, 'abdullah khan', 'abdullahkhan696@gmail.com', 'abdullah', NULL, '1995-09-13', '635856365340660061.jpg', 'Right hand batsman', 'Hadi nagar Dhorra Mafi Aligarh', '9876543421', 'yes', 'message hai'),
(3, 'md. areeb', 'areeb.addiction@gmail.com', 'areebareeb', NULL, '1997-09-13', 'IMG_20160310_200546.jpg', 'WicketKeeper-Batsman', 'phool chowk Aligarh', '9876123476', 'yes', 'hi'),
(4, 'sarfaraz hussain', 'sarfaraz.hussain771997@gmail.com', 'sarfaraz', NULL, '1997-08-13', 'IMG-20180207-WA0005.jpg', 'Left Arm China man', 'SS North AMU Aligarh', '7896542341', 'yes', NULL),
(6, 'zeeshan khan', 'risan10987654@gmail.com', 'zeeshan', NULL, '1996-08-13', 'IMG-20161230-WA0005.jpg', 'Right hand Batsman', 'M-37 SZ AMU Aligarh', '8765432192', 'yes', NULL),
(7, 'dilshad ahmad', 'dahmad48@gmail.com', 'dilshad', NULL, '1995-09-23', 'IMG-20150820-WA0010.jpg', 'Batsman WicketKeeper', 'MM Hall AMU Aligarh', '9879654521', 'yes', NULL),
(8, 'shoaib ansari', 'doostepauction@gmail.com', 'shoaib', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(9, 'binary brain', 'maryam.aps2@gmail.com', 'binary', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(10, 'amir beg', 'mirzaamirbeg2015@gmail.com', 'amirbeg', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(11, 'mohd mauz', 'mohd.mauz789@gmail.com', 'mohdmauz', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(12, 'abdul salim', 'abdulsalimmohd7580@gmail.com', 'abdulsalim', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(13, 'shoaib ilyasi', 'arshizameer17@gmail.com', 'shoaib', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(14, 'kashif ahmad', 'kashifzoologymains@gmail.com', 'kashif', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(15, 'ameed asghar', 'ameedasghar13@gmail.com', 'ameedasghar', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(16, 'vineet bhagel', 'vineetpal999@gmail.com', 'vineet', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL),
(17, 'mansur ahmad', 'test@gmail.com', 'mansur', NULL, '2018-04-05', 'WP_20150506_14_19_19_Pro(2)(1).jpg', 'right arm left break', 'test', '9897969594', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `monday` text,
  `tuesday` text,
  `wednesday` text,
  `thursday` text,
  `friday` text,
  `saturday` text,
  `sunday` text,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 'fitness', 'caching, fielding', 'practice', 'skills', 'fitness', 'skills', 'match');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_1` varchar(30) DEFAULT NULL,
  `player_2` varchar(30) DEFAULT NULL,
  `player_3` varchar(30) DEFAULT NULL,
  `player_4` varchar(30) DEFAULT NULL,
  `player_5` varchar(30) DEFAULT NULL,
  `player_6` varchar(30) DEFAULT NULL,
  `player_7` varchar(30) DEFAULT NULL,
  `player_8` varchar(30) DEFAULT NULL,
  `player_9` varchar(30) DEFAULT NULL,
  `player_10` varchar(30) DEFAULT NULL,
  `player_11` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`t_id`, `player_1`, `player_2`, `player_3`, `player_4`, `player_5`, `player_6`, `player_7`, `player_8`, `player_9`, `player_10`, `player_11`, `name`) VALUES
(11, 'shoaib nusrat', 'abdullah khan', 'shoaib ilyasi', 'binary brain', 'ameed asghar', 'dilshad ahmad', 'sarfaraz khan', 'md areeb', 'kashif ahmad', 'mauz siddiqui', 'haris shahid', 'mk aligarian'),
(12, 'rohit sharma', 's dhawan', 'v kohli', 'ms dhoni', 'y singh', 'r ashwin', 'b kumar', 'z khan', 'm shami', 'y chahal', 'shoaib shamsi', 'aligarh xi'),
(15, 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'blue'),
(16, 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'red'),
(17, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'mk aligarian'),
(18, 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'rps'),
(43, 'jun 1', 'jun 2', 'jun 3', 'jun 4', 'jun 5', 'jun 6', 'jun 7', 'jun 8', 'jun 9', 'jun 10', 'jun 11', 'mk junior'),
(44, 'sen 1', 'sen 2', 'sen 3', 'sen 4', 'sen 5', 'sen 6', 'sen 7', 'sen 8', 'sen 9', 'sen 10', 'sen 11', 'mk senior'),
(47, 'b1', 'b2 (C)', 'b3', 'b4', 'b5', 'b6 (Wk)', 'b7', 'b8', 'b9', 'b10', 'b11', 'mk blue'),
(48, 'r1', 'r2 (Wk)', 'r3', 'r4', 'r5', 'r6 (C)', 'r7', 'r8', 'r9', 'r10', 'r11', 'mk red'),
(55, 'q (C)', 'w (Wk)', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 'test1'),
(56, 's (Wk)', 'd (C)', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `team_match`
--

CREATE TABLE IF NOT EXISTS `team_match` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_1` int(11) DEFAULT NULL,
  `t_2` int(11) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `toss` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_1` (`t_1`),
  KEY `t_2` (`t_2`),
  KEY `m_id` (`m_id`),
  KEY `toss` (`toss`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `team_match`
--

INSERT INTO `team_match` (`id`, `t_1`, `t_2`, `m_id`, `toss`) VALUES
(1, 11, 12, 4, 12),
(2, 15, 16, 6, 15),
(3, 17, 18, 7, 17),
(16, 43, 44, 11, 44),
(18, 47, 48, 13, 48),
(22, 55, 56, 17, 55);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE IF NOT EXISTS `tournament` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tour_id`, `name`, `s_date`, `e_date`, `position`) VALUES
(1, 'sangwan premier league', '2011-07-20', '2011-08-17', NULL),
(2, 'syed mushtaq trophy', '2018-03-24', '2018-04-07', NULL),
(3, 'mk aligarian cup', '2018-04-01', '2018-04-19', NULL),
(4, 'ashish memorial cricket tourna', '2015-07-16', '2015-07-24', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batting`
--
ALTER TABLE `batting`
  ADD CONSTRAINT `batting_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teams` (`t_id`);

--
-- Constraints for table `bowling`
--
ALTER TABLE `bowling`
  ADD CONSTRAINT `bowling_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teams` (`t_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `player` (`id`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`team_1`) REFERENCES `teams` (`t_id`),
  ADD CONSTRAINT `matches_ibfk_3` FOREIGN KEY (`tour_id`) REFERENCES `tournament` (`tour_id`),
  ADD CONSTRAINT `matches_ibfk_4` FOREIGN KEY (`team_2`) REFERENCES `teams` (`t_id`);

--
-- Constraints for table `team_match`
--
ALTER TABLE `team_match`
  ADD CONSTRAINT `team_match_ibfk_1` FOREIGN KEY (`t_1`) REFERENCES `teams` (`t_id`),
  ADD CONSTRAINT `team_match_ibfk_2` FOREIGN KEY (`t_2`) REFERENCES `teams` (`t_id`),
  ADD CONSTRAINT `team_match_ibfk_3` FOREIGN KEY (`m_id`) REFERENCES `matches` (`m_id`),
  ADD CONSTRAINT `team_match_ibfk_4` FOREIGN KEY (`toss`) REFERENCES `teams` (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
