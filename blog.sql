/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-09-19 20:10:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) DEFAULT NULL,
  `article_subtitle` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `article_sequence` int(11) NOT NULL,
  `article_brief` longtext,
  `article_details` longtext,
  `user_id` int(11) NOT NULL,
  `article_deleted` tinyint(4) NOT NULL DEFAULT '1',
  `article_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `article_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `article_total_hits` int(11) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO article VALUES ('1', 'Bangladesh', 'comilla ', '4', '1', 'this is comilla ', 'this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla this is comilla ', '2', '2', '2015-09-19 13:06:59', '2015-09-19 13:06:59', '0', '');
INSERT INTO article VALUES ('2', 'travel Dhaka ', 'dhanmondi ', '4', '1', 'this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka ', 'this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka ', '1', '1', '0000-00-00 00:00:00', '2015-09-19 04:40:45', '0', '');
INSERT INTO article VALUES ('3', 'travel Dhaka ', 'dhanmondi ', '4', '1', 'this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka ', 'this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka this is dhaka ', '1', '1', '0000-00-00 00:00:00', '2015-09-19 05:08:09', '0', '');
INSERT INTO article VALUES ('4', 'Food in Coxs bazar', 'See food like plater', '2', '1', 'Plater is a common food in cox bazar. There a lot of see food restrurent.', 'Plater is good for health. Plater is good for health. Plater is good for health. Plater is good for health. Plater is good for health. Plater is good for health. Plater is good for health. Plater is good for health.', '1', '1', '0000-00-00 00:00:00', '2015-09-19 06:25:55', '0', '');
INSERT INTO article VALUES ('5', 'Javascript onbeforeunload event', 'The onbeforeunload event fires when the document is about to be unloaded.', '1', '1', 'This event allows you to display a message in a confirmation dialog box to inform the user whether he/she wants to stay or leave the current page.', 'This event allows you to display a message in a confirmation dialog box to inform the user whether he/she wants to stay or leave the current page.\r\nThe default message that appears in the confirmation box, is different in different browsers. However, the standard message is something like \"Are you sure you want to leave this page?\". You cannot remove this message.\r\nHowever, you can write a custom message together with the default message. See the first example on this page.\r\n', '1', '1', '0000-00-00 00:00:00', '2015-09-19 06:45:23', '0', '');
INSERT INTO article VALUES ('6', 'Keys To Success', 'Sensitivity to others is not worth much unless you are able to use that information to modify your behaviorâ€¦ Although flexibility sometimes carries a negative connotation', '3', '1', 'Recently The Time Magazine published Stanford MBA school professor Jeffrey Pfeffers article Keys to Success  6 Traits the Most Successful People Have in Common, Lets have a look......................................', 'In Kotters study of 15 successful general managers, he found that they tended to have concentrated their efforts in one industry and in one company. He concluded that general management was not general, and that the particular expertise acquired by concentrating on a narrow range of business issues is helpful in building a power base and in becoming successful. Concentrating your career in a single industry and in one or a very few organizations is also helpful because it means that your energy is not diverted, and your attention is focused on a narrower set of concerns and problems.', '1', '1', '0000-00-00 00:00:00', '2015-09-19 06:48:50', '0', '');
INSERT INTO article VALUES ('7', 'Support', '', '5', '1', 'ASP.NET, on the other hand, is a Microsoft property. ', 'PHP is free and among the most popular scripting languages online. Thereâ€™s a huge open source developer community that regularly contributes to PHP development. The open-source community also tends to be very helpful, which is a big bonus for beginners.', '2', '1', '2015-09-19 10:57:15', '2015-09-19 10:57:15', '0', '');
INSERT INTO article VALUES ('8', 'Article from Industry Experts', 'What do my employers want', '6', '1', 'These questions haunt the mind of every candidate who is slated to attend an interview or join a new company.', 'Though job descriptions and summaries provide the list of expectations, most candidates want to know and understand the skills that play a significant role in getting the job and succeed after joining the company. In this article industry experts share their expectations from experienced and fresh employees.', '1', '1', '0000-00-00 00:00:00', '2015-09-19 06:52:18', '0', '');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `category_deleted` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO category VALUES ('1', 'TECH', '2015-09-18 18:20:12', '1');
INSERT INTO category VALUES ('2', 'LIFESTYLE', '2015-09-18 18:21:05', '1');
INSERT INTO category VALUES ('3', 'SOCIAL-MEDIA', '2015-09-18 18:22:30', '1');
INSERT INTO category VALUES ('4', 'WORLD', '2015-09-18 18:23:03', '1');
INSERT INTO category VALUES ('5', 'BUSINESS', '2015-09-18 18:24:29', '1');
INSERT INTO category VALUES ('6', 'SPORTS', '2015-09-18 18:25:33', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_birth_day` date NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', 'hasib', 'hasib@hasib.com', '0', '2015-09-08', 'e10adc3949ba59abbe56e057f20f883e', '2015-09-19 01:18:12', '1');
INSERT INTO users VALUES ('2', 'Shima', 'shima@shima.com', '0', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '1');
