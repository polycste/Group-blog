-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 06:29 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_birth_day` date NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_gender`, `user_birth_day`, `user_password`, `user_created_at`) VALUES
(1, 'shmanur', 'Male', '12', '0000-00-00', '123456', '0000-00-00 00:00:00'),
(9, 'Jewel', 'hasib@gmail.com', '0', '0000-00-00', '1234567', '0000-00-00 00:00:00'),
(12, 'Lina', 'lina@gmail.com', '0', '0000-00-00', 'a123456', '0000-00-00 00:00:00'),
(14, 'poly', 'poly@gmail.com', '0', '0000-00-00', 'b123456', '0000-00-00 00:00:00'),
(16, 'shima', 'shima@gmail.com', '0', '0000-00-00', 's123456', '0000-00-00 00:00:00'),
(17, 'Konic', 'konic@gmail.com', '0', '0000-00-00', 'k123456', '0000-00-00 00:00:00'),
(18, 'Shamim', 'shamim@gmail.com', '0', '0000-00-00', '1234567', '0000-00-00 00:00:00'),
(19, 'majeda', 'majeda@gmail.com', '0', '0000-00-00', 'm123456', '0000-00-00 00:00:00'),
(20, 'nirupom', 'niru@gmail.com', '0', '0000-00-00', 'n123456', '0000-00-00 00:00:00'),
(21, 'siam', 'siam@gmail.com', '0', '0000-00-00', '1234567', '0000-00-00 00:00:00'),
(24, 'Shima', 'shimaa@gmail.com', '0', '1997-12-31', '123456', '0000-00-00 00:00:00'),
(25, 'jahid', 'jahid@gmail.com', '0', '2015-09-17', '123456', '0000-00-00 00:00:00'),
(27, 'shama', 'sha@gmail.com', '0', '2015-09-17', '1234567', '0000-00-00 00:00:00'),
(28, 'Forid', 'forid@gmail.com', '0', '2015-09-14', '123456', '2015-09-17 03:53:42'),
(30, 'sumi', 'sumi@gmail.com', 'Female', '2015-09-18', '123456', '2015-09-17 03:59:39'),
(31, 'raju', 'raju@gmail.com', 'Male', '2015-09-25', '123456', '2015-09-17 05:47:52'),
(32, '', '', 'Female', '2015-09-17', '', '2015-09-18 06:08:15'),
(35, 'sh', 'lin@gmail.com', 'Male', '2015-09-16', '', '2015-09-18 06:12:51'),
(40, 'shamim', 'shaaa@gmail.com', 'Male', '2015-09-17', '12345', '2015-09-18 06:29:29'),
(49, 'anik', 'anik@gjkjfi', 'Male', '2015-09-18', 'fcea920f7412b5da7be0cf42b8c93759', '2015-09-18 06:53:18'),
(51, 'sojib', 'sojib@gmail.com', 'Male', '2015-09-03', 'fcea920f7412b5da7be0cf42b8c93759', '2015-09-18 06:55:04'),
(52, 'rohom', 'jamil@gmail.com', 'Male', '2015-09-10', '380a678fab0fbe82e4ba44a96ad972bc', '2015-09-18 07:09:17'),
(55, 'Rajon', 'ra@gmail.com', 'Male', '2015-09-07', '25d55ad283aa400af464c76d713c07ad', '2015-09-18 08:17:52'),
(57, 'Jamal', 'jamal@gmail.com', 'Male', '2015-09-09', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:24:49'),
(58, 'ayesha', 'ayesha@gmail.com', 'Female', '1994-09-02', 'fcea920f7412b5da7be0cf42b8c93759', '2015-09-18 08:28:40'),
(59, 'Ahad', 'ahad@gmail.com', 'Male', '2015-09-16', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:33:23'),
(60, 'jumon', 'jumon@gmail.com', 'Male', '2015-09-10', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:37:09'),
(61, 'leo', 'leo@gmail.com', 'Male', '2015-09-12', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:40:26'),
(62, 'suhel', 'suhel@gmail.com', 'Male', '2015-09-17', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:46:00'),
(63, 'ami', 'ami@gmail.com', 'Male', '2015-09-16', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:48:54'),
(64, 'lima', 'lima@gmail.com', 'Female', '2015-09-17', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 08:53:26'),
(65, '', 'aaaa@gmail.com', 'Male', '2015-09-16', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-18 09:20:00'),
(66, 'sha', 'gg@mail.com', 'Female', '2015-09-08', 'd41d8cd98f00b204e9800998ecf8427e', '2015-09-18 09:22:18'),
(68, '', 'tttt@gmail.com', 'Male', '2015-09-20', 'ba336827c2f0e72650ee499d0d13cc0d', '2015-09-18 09:26:13'),
(70, '', 'lll@gmail.com', 'Female', '2015-09-23', 'd41d8cd98f00b204e9800998ecf8427e', '2015-09-18 09:27:44'),
(72, '', 'sk@gmail.com', 'Male', '2015-09-01', 'b7c15f55d337e46bc3c3580be21cc9e3', '2015-09-18 09:29:44'),
(74, 'tytytuy', 'dffrd@yuyuy', 'Female', '0000-00-00', '84099c85cc1f18ad9f736a4664be9483', '2015-09-18 09:31:33'),
(78, '', 'dfhdhf@jjfgrjk', 'Male', '2015-09-14', '68af9f5b70ce48f8a320ab013823e045', '2015-09-18 09:52:34'),
(81, '', 'dfgfdg@gmail.com', 'Male', '2015-09-08', '5fe4eecab9b782942874c1fd5a4c512e', '2015-09-18 10:35:19'),
(82, '', 'sdg@gmail.com', 'Male', '2015-09-24', '33e78d60bc1f9dcc7291c891e6f069e4', '2015-09-18 10:44:00'),
(83, '', 'gfhf@gmail.com', 'Male', '2015-09-09', 'feee1be489aaab4d4e3776d95a4306e2', '2015-09-18 10:51:41'),
(84, '', 'zxvz@gmail.com', 'Male', '2015-09-02', '20838a8df7cc0babd745c7af4b7d94e2', '2015-09-18 10:53:39'),
(85, '', 'sdss@hgu', 'Male', '2015-09-16', 'eb458816d5b63d291f74028dbc247a84', '2015-09-18 11:16:08'),
(90, 'dfdg', 'fdg@ghfd.com', 'Male', '2015-09-02', '89f25685515117d9ef631697df123bf9', '2015-09-18 12:05:26'),
(91, '', 'sdfs@gmail.com', 'Male', '2015-09-01', 'a5820e2e2e2b1260fed3ea431f131859', '2015-09-18 12:05:45'),
(96, 'vbnvbn', 'sddfs@gmail.com', 'Male', '2015-09-10', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '2015-09-18 12:23:57'),
(97, 'hassib', 'hasibb@gmail.com', 'Male', '2015-09-09', 'fcea920f7412b5da7be0cf42b8c93759', '2015-09-18 12:28:51'),
(98, 'fdgfdg', 'gdg@gf.com', 'Male', '2015-09-03', '19b19ffc30caef1c9376cd2982992a59', '2015-09-18 12:51:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
