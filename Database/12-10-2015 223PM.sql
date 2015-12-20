-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2015 at 02:23 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `staylance`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_host`
--

CREATE TABLE IF NOT EXISTS `about_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_host`
--

INSERT INTO `about_host` (`id`, `host_id`, `about`, `video`, `created_at`, `updated_at`) VALUES
(1, 2, 'ggkhkjhkdjhkldhlsd hslkhljhslj hhlsjah alfjhlhf hjlhlkf lfhjls fhalhdlh fjhdlh lshfkjhslf', 'prairie_harbor(1).sql', 1448880769, 1448881472);

-- --------------------------------------------------------

--
-- Table structure for table `about_hosts_area`
--

CREATE TABLE IF NOT EXISTS `about_hosts_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `doctor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bus_staion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bus_top` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash_machine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `train_station` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `what_to_do` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `travel_tips` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_hosts_area`
--

INSERT INTO `about_hosts_area` (`id`, `host_id`, `doctor`, `bus_staion`, `shop`, `bus_top`, `town`, `airport`, `cash_machine`, `train_station`, `what_to_do`, `travel_tips`, `car`, `created_at`, `updated_at`) VALUES
(1, 2, '6500', '348783', '5435345', '43534534', '23545343', '34534543', '345345345345', '5435345', '34534532', '34525435', '1', 1448881563, 1448881563);

-- --------------------------------------------------------

--
-- Table structure for table `about_hosts_life`
--

CREATE TABLE IF NOT EXISTS `about_hosts_life` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `life_agenda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `best_thing_in_life` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `film` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `food` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `do_not_like` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counteries_travelled` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counteries_like_to_travell` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favourite_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `why_host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `travel_qoute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anything_special` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anything_else` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `orignal_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manupulated_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `user_id`, `orignal_name`, `manupulated_name`, `created_at`, `updated_at`) VALUES
(9, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449038147, 1449038147),
(10, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449038727, 1449038727),
(11, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449038763, 1449038763),
(12, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449039401, 1449039401),
(13, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449039447, 1449039447),
(14, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449039862, 1449039862),
(15, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449040082, 1449040082),
(16, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449040159, 1449040159),
(17, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449040190, 1449040190),
(18, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449041993, 1449041993),
(19, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449047479, 1449047479),
(20, 20, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449047528, 1449047528),
(21, 20, 'logo.png', '96d6f2e7e1f705ab5e59c84a6dc009b2.png', 1449047752, 1449047752),
(22, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449047764, 1449047764),
(23, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048141, 1449048141),
(24, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048167, 1449048167),
(25, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048292, 1449048292),
(26, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048561, 1449048561),
(27, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048725, 1449048725),
(28, 20, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449048878, 1449048878),
(29, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449048928, 1449048928),
(30, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049031, 1449049031),
(31, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049139, 1449049139),
(32, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049269, 1449049269),
(33, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049323, 1449049323),
(34, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049358, 1449049358),
(35, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049429, 1449049429),
(36, 20, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449049472, 1449049472),
(37, 29, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449234893, 1449234893),
(38, 29, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449234901, 1449234901),
(39, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449646862, 1449646862),
(40, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647027, 1449647027),
(41, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647063, 1449647063),
(42, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647142, 1449647142),
(43, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647193, 1449647193),
(44, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647217, 1449647217),
(45, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647319, 1449647319),
(46, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647572, 1449647572),
(47, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647616, 1449647616),
(48, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647626, 1449647626),
(49, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647641, 1449647641),
(50, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647656, 1449647656),
(51, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647763, 1449647763),
(52, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449647780, 1449647780),
(53, 31, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449647845, 1449647845),
(54, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648033, 1449648033),
(55, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648105, 1449648105),
(56, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648129, 1449648129),
(57, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648164, 1449648164),
(58, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648892, 1449648892),
(59, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449648970, 1449648970),
(60, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449649921, 1449649921),
(61, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658180, 1449658180),
(62, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658193, 1449658193),
(63, 31, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449658213, 1449658213),
(64, 31, 'Screenshot from 2015-11-18 14:55:20.png', 'ddf0fb3e2c47967abe5755671888d68d.png', 1449658239, 1449658239),
(65, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658313, 1449658313),
(66, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658476, 1449658476),
(67, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658572, 1449658572),
(68, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658596, 1449658596),
(69, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658652, 1449658652),
(70, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658663, 1449658663),
(71, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658671, 1449658671),
(72, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658684, 1449658684),
(73, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658703, 1449658703),
(74, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658725, 1449658725),
(75, 31, 'Screenshot from 2015-11-18 15:01:34.png', '12ea635f78ca5c962186232c62cfc14f.png', 1449658751, 1449658751),
(76, 31, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449672780, 1449672780),
(77, 31, '10537837_344884055668546_2468645250011359708_n.jpg', 'e761503e67ca36ac72fa672df3d4bf84.jpg', 1449747007, 1449747007);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1448890477),
('host', '18', 1448968922),
('host', '19', 1448979661),
('host', '2', 1448890477),
('host', '20', 1449033933),
('host', '29', 1449234876),
('host', '30', 1449571464),
('traveller', '23', 1449061701),
('traveller', '24', 1449062106),
('traveller', '25', 1449062234),
('traveller', '26', 1449063092),
('traveller', '27', 1449118669),
('traveller', '31', 1449572475);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1448890476, 1448890476),
('createUser', 2, 'Create a User', NULL, NULL, 1448890476, 1448890476),
('host', 1, NULL, NULL, NULL, 1448890476, 1448890476),
('traveller', 1, NULL, NULL, NULL, 1448890476, 1448890476),
('updateUser', 2, 'Update User', NULL, NULL, 1448890476, 1448890476);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('host', 'createUser'),
('traveller', 'createUser'),
('admin', 'host'),
('admin', 'updateUser');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `available_date_ranges`
--

CREATE TABLE IF NOT EXISTS `available_date_ranges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hosts_availability_id` int(11) NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE IF NOT EXISTS `cms_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `created_at`, `updated_at`, `status`) VALUES
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_pagesLang`
--

CREATE TABLE IF NOT EXISTS `cms_pagesLang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cms_pagesLang`
--

INSERT INTO `cms_pagesLang` (`id`, `page_id`, `language`, `title`, `content`) VALUES
(9, 4, 'de', 'German Page Title', '<div id="tw-target-text-container" class="tw-ta-container tw-nfl" style="position: relative; padding-top: 20px; color: #212121; font-family: arial, sans-serif; font-size: 0px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 0px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<pre id="tw-target-text" class="tw-data-text vk_txt tw-ta tw-text-small" dir="ltr" style="unicode-bidi: -webkit-isolate; font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin: 0px; resize: none; overflow: hidden; text-align: left; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; height: 480px; background-color: transparent;" data-placeholder="Translation" data-fulltext=""><span lang="de">Lorem Ipsum ist einfach Dummy-Text der Druck und Satz Industrie . Lorem Ipsum ist in der Branche Standard Demo-Text seit 1500 , als ein unbekannter Drucker hat eine Galeere der Art und durcheinander warf um ein Musterbuch zu erstellen . Es hat nicht nur f&uuml;nf Jahrhunderte , aber auch den Sprung in die elektronische Schrift&uuml;berlebt, im Wesentlichen unver&auml;ndert bleiben. Es wurde in den 1960er Jahren mit der Ver&ouml;ffentlichung von Letraset Bl&auml;tter Lorem Ipsum Passagen mit Desktop-Publishing -Software wie Aldus Pagemaker einschlie&szlig;lich Versionen von Lorem Ipsum popul&auml;r , und in j&uuml;ngerer Zeit .</span></pre>\r\n<pre class="tw-data-text vk_txt tw-ta tw-text-small" lang="de" style="font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: absolute; margin: 0px; resize: none; overflow: hidden; text-align: initial; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; visibility: hidden; background-color: transparent;">&nbsp;</pre>\r\n</div>\r\n<p><br class="Apple-interchange-newline" /><br /></p>'),
(10, 4, 'es', 'Spanish Page Title', '<div id="tw-target-text-container" class="tw-ta-container tw-nfl" style="position: relative; padding-top: 20px; color: #212121; font-family: arial, sans-serif; font-size: 0px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 0px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<pre id="tw-target-text" class="tw-data-text vk_txt tw-ta tw-text-small" dir="ltr" style="unicode-bidi: -webkit-isolate; font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin: 0px; resize: none; overflow: hidden; text-align: left; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; height: 528px; background-color: transparent;" data-placeholder="Translation" data-fulltext=""><span lang="es">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto . Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de la industria desde que el a&ntilde;o 1500, cuando un desconocido tom&oacute; una impresora de cocina tipo y codificados para hacer un libro de textos especimen. Ha sobrevivido no s&oacute;lo cinco siglos , sino tambi&eacute;n el salto a la composici&oacute;n tipogr&aacute;fica electr&oacute;nica , quedando esencialmente sin cambios. Se populariz&oacute; en la d&eacute;cada de 1960 con el lanzamiento de las hojas de Letraset que contienen pasajes de Lorem Ipsum , y m&aacute;s recientemente con software de autoedici&oacute;n, como Aldus PageMaker incluidas las versiones de Lorem Ipsum .</span></pre>\r\n<pre class="tw-data-text vk_txt tw-ta tw-text-small" lang="es" style="font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: absolute; margin: 0px; resize: none; overflow: hidden; text-align: initial; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; visibility: hidden; background-color: transparent;">&nbsp;</pre>\r\n</div>'),
(11, 4, 'en', 'English Page Title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'admin_email', 'info@amsmail.optimasit.com', 1449494037, 1449656648),
(2, 'tes', 'hgf', 1449554166, 1449554166);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries_lang`
--

CREATE TABLE IF NOT EXISTS `countries_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries_lang`
--

INSERT INTO `countries_lang` (`id`, `country_id`, `language`, `name`, `short_name`) VALUES
(1, 1, 'de', 'Pakistani', 'pk'),
(2, 1, 'es', 'pakistan', 'paki'),
(3, 1, 'en', 'Pakistan', 'Pak');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_key` (`email_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `created_at`, `updated_at`, `email_key`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'traveller_subscriber'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'host_subscriber'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'test_email');

-- --------------------------------------------------------

--
-- Table structure for table `email_templatesLang`
--

CREATE TABLE IF NOT EXISTS `email_templatesLang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_template_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email_template_id` (`email_template_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `email_templatesLang`
--

INSERT INTO `email_templatesLang` (`id`, `email_template_id`, `language`, `title`, `subject`, `content`) VALUES
(1, 2, 'de', 'ahsk', 'asdf', '<p>&nbsp;sfd,</p>\r\n<p>sfafasfasdfasdf</p>'),
(2, 2, 'es', 'we', 'asdfsa', '<p>&nbsp;as,</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; afssda sdf f f dss ffa</p>'),
(3, 2, 'en', 'Subcribers Email', 'Welcome to Staylance', '<p>&nbsp;Hi,</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; how are you</p>'),
(4, 1, 'de', 'test', 'test', '<p>test</p>'),
(5, 1, 'es', 'es', 'es', '<p>rs</p>'),
(6, 1, 'en', 'test', 'no', '<p>test</p>'),
(7, 3, 'de', 'Neue E-Mail -Vorlage', 'E-Mail Testinng', '<div id="tw-target-text-container" class="tw-ta-container tw-nfl" style="position: relative; padding-top: 20px; color: #212121; font-family: arial, sans-serif; font-size: 0px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 0px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<pre id="tw-target-text" class="tw-data-text vk_txt tw-ta tw-text-small" dir="ltr" style="unicode-bidi: -webkit-isolate; font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin: 0px; resize: none; overflow: hidden; text-align: left; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; height: 480px; background-color: transparent;" data-placeholder="Translation" data-fulltext=""><span lang="de">Lorem Ipsum ist einfach Dummy-Text der Druck und Satz Industrie . Lorem Ipsum ist in der Branche Standard Demo-Text seit 1500 , als ein unbekannter Drucker hat eine Galeere der Art und durcheinander warf um ein Musterbuch zu erstellen . Es hat nicht nur f&uuml;nf Jahrhunderte , aber auch den Sprung in die elektronische Schrift&uuml;berlebt, im Wesentlichen unver&auml;ndert bleiben. Es wurde in den 1960er Jahren mit der Ver&ouml;ffentlichung von Letraset Bl&auml;tter Lorem Ipsum Passagen mit Desktop-Publishing -Software wie Aldus Pagemaker einschlie&szlig;lich Versionen von Lorem Ipsum popul&auml;r , und in j&uuml;ngerer Zeit .</span></pre>\r\n<pre class="tw-data-text vk_txt tw-ta tw-text-small" lang="de" style="font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: absolute; margin: 0px; resize: none; overflow: hidden; text-align: initial; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; visibility: hidden; background-color: transparent;">&nbsp;</pre>\r\n</div>'),
(8, 3, 'es', 'Nueva plantilla de correo electrÃ³nico', 'Email Por Testing', '<div id="tw-target-text-container" class="tw-ta-container tw-nfl" style="position: relative; padding-top: 20px; color: #212121; font-family: arial, sans-serif; font-size: 0px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 0px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<pre id="tw-target-text" class="tw-data-text vk_txt tw-ta tw-text-small" dir="ltr" style="unicode-bidi: -webkit-isolate; font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin: 0px; resize: none; overflow: hidden; text-align: left; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; height: 528px; background-color: transparent;" data-placeholder="Translation" data-fulltext=""><span lang="es">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto . Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de la industria desde que el a&ntilde;o 1500, cuando un desconocido tom&oacute; una impresora de cocina tipo y codificados para hacer un libro de textos especimen. Ha sobrevivido no s&oacute;lo cinco siglos , sino tambi&eacute;n el salto a la composici&oacute;n tipogr&aacute;fica electr&oacute;nica , quedando esencialmente sin cambios. Se populariz&oacute; en la d&eacute;cada de 1960 con el lanzamiento de las hojas de Letraset que contienen pasajes de Lorem Ipsum , y m&aacute;s recientemente con software de autoedici&oacute;n, como Aldus PageMaker incluidas las versiones de Lorem Ipsum .</span></pre>\r\n<pre class="tw-data-text vk_txt tw-ta tw-text-small" lang="es" style="font-weight: normal !important; font-size: 16px !important; font-family: inherit; border: none; padding: 0px 0.14em 0px 0px; position: absolute; margin: 0px; resize: none; overflow: hidden; text-align: initial; width: 237.5px; white-space: pre-wrap; word-wrap: break-word; line-height: 24px !important; color: #212121 !important; visibility: hidden; background-color: transparent;">&nbsp;</pre>\r\n</div>'),
(9, 3, 'en', 'New Email Template', 'Email For Testing', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE IF NOT EXISTS `hosts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `host_type` int(11) NOT NULL,
  `about_host` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`id`, `user_id`, `name`, `profile_name`, `birthday`, `adress`, `mobile_phone`, `home_phone`, `facebook`, `host_type`, `about_host`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rehan Aziz', 'Rehan', '34', '306 R', '+923016582582', '+923016582582', 'rehan', 1, 1, 1448288401, 1448288401),
(2, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582582', 'www.facebook.com/rehanbsit', 1, 1, 1448360873, 1448881415),
(3, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582582', 'www.facebook.com/rehanbsit', 1, 2, 1448361064, 1448361064),
(4, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582582', 'www.facebook.com/rehanbsit', 1, 2, 1448361201, 1448361201),
(5, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582582', 'www.facebook.com/rehanbsit', 1, 2, 1448361213, 1448361213),
(6, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582580', 'www.facebook.com/rehanbsit', 1, 2, 1448361238, 1448361238),
(7, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582580', 'www.facebook.com/rehanbsit', 1, 2, 1448361335, 1448361335),
(8, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582580', 'www.facebook.com/rehanbsit', 1, 2, 1448361436, 1448361436),
(9, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582580', 'www.facebook.com/rehanbsit', 1, 2, 1448361467, 1448361467),
(10, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582580', 'www.facebook.com/rehanbsit', 1, 2, 1448361517, 1448361517);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_accommodation`
--

CREATE TABLE IF NOT EXISTS `hosts_accommodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `number_of_places` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bedroom_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beds` int(11) NOT NULL,
  `bathroom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bathroom_facilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hosts_accommodation`
--

INSERT INTO `hosts_accommodation` (`id`, `host_id`, `number_of_places`, `type`, `bedrooms`, `bedroom_type`, `beds`, `bathroom`, `bathroom_facilities`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1', 45, '1', 43, '1', '43', 1448881573, 1448881573);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_artistic_help`
--

CREATE TABLE IF NOT EXISTS `hosts_artistic_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `painting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sculpting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bother` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosts_availability`
--

CREATE TABLE IF NOT EXISTS `hosts_availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `number_of_staylancers` int(11) NOT NULL,
  `can_not_host` int(11) NOT NULL,
  `availabe_dates` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `help` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `share` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hosts_availability`
--

INSERT INTO `hosts_availability` (`id`, `host_id`, `number_of_staylancers`, `can_not_host`, `availabe_dates`, `help`, `share`, `pay`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '1', '1', '0', '0', 1448880524, 1448881453);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_average_weekdays`
--

CREATE TABLE IF NOT EXISTS `hosts_average_weekdays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `breakfast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lunch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dinner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `more_information` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smoking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anything_else` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hosts_average_weekdays`
--

INSERT INTO `hosts_average_weekdays` (`id`, `host_id`, `breakfast`, `lunch`, `dinner`, `more_information`, `smoking`, `anything_else`, `created_at`, `updated_at`) VALUES
(1, 2, 'abc', 'def', 'ghi', 'lmnopqrst', '1', 'uvwxyz', 1448881514, 1448881539);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_foods`
--

CREATE TABLE IF NOT EXISTS `hosts_foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `food_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `food_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drinks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosts_food_details`
--

CREATE TABLE IF NOT EXISTS `hosts_food_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `food_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additional_charge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `breakfast_per_day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lunch_per_day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dinner_per_day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `breakfast_per_week` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lunch_per_week` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dinner_per_week` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `breakfast_per_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lunch_per_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dinner_per_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_information` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosts_general_help`
--

CREATE TABLE IF NOT EXISTS `hosts_general_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `gardening` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `farming` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `housework` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maintenance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_housework` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_children` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_elderly` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `computer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `digial_marketing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `computer_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `learning_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volunteering` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosts_languages`
--

CREATE TABLE IF NOT EXISTS `hosts_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hosts_languages`
--

INSERT INTO `hosts_languages` (`id`, `host_id`, `language`, `type`, `created_at`, `updated_at`) VALUES
(1, 2, 'English', 'Mother Tongue', 1448880773, 1448880773),
(2, 2, 'Urdu', 'Fluent', 1448880778, 1448880778),
(3, 2, 'Saraiki', 'Fluent', 1448880783, 1448880783),
(4, 2, 'punjabi', 'Fluent', 1448880788, 1448880788),
(5, 2, 'English', 'Fluent', 1448880796, 1448880796),
(6, 2, 'English', 'Learning', 1448880803, 1448880803),
(7, 2, 'Urdu', 'Learning', 1448880813, 1448880813),
(8, 2, 'English', 'Mother Tongue', 1448881482, 1448881482);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_other_services`
--

CREATE TABLE IF NOT EXISTS `hosts_other_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) DEFAULT NULL,
  `wifi_included_with_stay` int(11) DEFAULT NULL,
  `wifi_possible_for_extra_charges` int(11) DEFAULT NULL,
  `wifi_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `laundry_included_with_stay` int(11) DEFAULT NULL,
  `laundry_possible_for_extra_charges` int(11) DEFAULT NULL,
  `laundry_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bicycle_included_with_stay` int(11) DEFAULT NULL,
  `bicycle_possible_for_extra_charges` int(11) DEFAULT NULL,
  `bicycle_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection_included_with_stay` int(11) DEFAULT NULL,
  `collection_possible_for_extra_charges` int(11) DEFAULT NULL,
  `collection_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_included_with_stay` int(11) DEFAULT NULL,
  `car_possible_for_extra_charges` int(11) DEFAULT NULL,
  `car_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anything_else_included_with_stay` int(11) DEFAULT NULL,
  `anything_else_possible_for_extra_charges` int(11) DEFAULT NULL,
  `anything_else_any_extra_charges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hosts_other_services`
--

INSERT INTO `hosts_other_services` (`id`, `host_id`, `wifi_included_with_stay`, `wifi_possible_for_extra_charges`, `wifi_any_extra_charges`, `laundry_included_with_stay`, `laundry_possible_for_extra_charges`, `laundry_any_extra_charges`, `bicycle_included_with_stay`, `bicycle_possible_for_extra_charges`, `bicycle_any_extra_charges`, `collection_included_with_stay`, `collection_possible_for_extra_charges`, `collection_any_extra_charges`, `car_included_with_stay`, `car_possible_for_extra_charges`, `car_any_extra_charges`, `anything_else_included_with_stay`, `anything_else_possible_for_extra_charges`, `anything_else_any_extra_charges`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 0, NULL, 1, 0, NULL, 1, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 1448881584, 1448881584);

-- --------------------------------------------------------

--
-- Table structure for table `hosts_professional_help`
--

CREATE TABLE IF NOT EXISTS `hosts_professional_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `chef` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `builder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `painter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carpenter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `landscraper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiler` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_children` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_elderly` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caring_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `computer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `digial_marketing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `computer_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `learning_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volunteering` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosts_skill_details`
--

CREATE TABLE IF NOT EXISTS `hosts_skill_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `kills_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages_lang`
--

CREATE TABLE IF NOT EXISTS `languages_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `language_id` (`language_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `languages_lang`
--

INSERT INTO `languages_lang` (`id`, `language_id`, `language`, `name`, `short_name`) VALUES
(1, 1, 'de', 'English', 'en'),
(2, 1, 'es', 'InglÃ©s', 'in'),
(3, 1, 'en', 'English', 'en'),
(7, 3, 'de', 'punjhabi', 'punj'),
(8, 3, 'es', 'punjabi', 'pub'),
(9, 3, 'en', 'Punjabi', 'pun'),
(10, 4, 'de', '', ''),
(11, 4, 'es', '', ''),
(12, 4, 'en', 'German', 'de'),
(13, 5, 'de', '', ''),
(14, 5, 'es', '', ''),
(15, 5, 'en', 'spanish', 'es');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1447761492),
('m130524_201442_init', 1447761496),
('m140506_102106_rbac_init', 1448889488),
('m151102_071431_modification_in_user_table', 1447761497),
('m151102_111521_create_hosts_table', 1447761497),
('m151103_102505_create_hosts_availability_table', 1447761497),
('m151103_102716_create_available_date_ranges_table', 1447761497),
('m151104_061234_create_about_host_table', 1447761497),
('m151105_080440_create_hosts_languages_table', 1447761497),
('m151105_131341_create_hosts_average_weekday_table', 1447761498),
('m151106_071740_create_about_hosts_area_table', 1447761498),
('m151106_091003_create_hosts_accommodation_table', 1447761498),
('m151106_113209_create_hosts_other_services_table', 1447761498),
('m151110_053230_create_hosts_foods_table', 1447761498),
('m151110_062559_create_hosts_food_details_table', 1447761498),
('m151110_095414_create_about_hosts_life_table', 1447761498),
('m151110_121956_create_hosts_general_help_table', 1447761499),
('m151110_132313_create_hosts_professional_help_table', 1447761499),
('m151110_135831_create_hosts_artistic_help_table', 1447761499),
('m151110_150032_create_hosts_skill_details_table', 1447761499),
('m151202_060208_create_attachments_table', 1449036311),
('m151202_103205_create_travellers_table', 1449145980),
('m151204_064419_create_subscribers_table', 1449233317),
('m151207_104154_configuration', 1449494000),
('m151208_053607_create_traveller_photo_table', 1449574420),
('m151210_071453_create_traveller_description_table', 1449731882),
('m151210_081234_create_traveller_help_table', 1449735444),
('m151210_121702_create_travellers_profile_table', 1449750092),
('m151211_090616_create_travellers_languages_table', 1449825093);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `created_at`, `updated_at`, `enabled`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 78),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 78),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 78);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `type`, `created_at`, `updated_at`) VALUES
(46, 'rehan@optimageeks.com', 'traveller_subscriber', 1449730912, 1449730912);

-- --------------------------------------------------------

--
-- Table structure for table `travellers`
--

CREATE TABLE IF NOT EXISTS `travellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sur_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `how_find_staylance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `travellers`
--

INSERT INTO `travellers` (`id`, `user_id`, `gender`, `user_name`, `name`, `sur_name`, `address`, `country`, `province`, `city`, `postcode`, `mobile_phone`, `landline`, `birthday`, `skype_id`, `website`, `how_find_staylance`, `account_type`, `created_at`, `updated_at`) VALUES
(1, 27, 'man', 'rehanbsit', 'Rehan', 'Aziz', '450e2f674af91b4ea93d8e675464830c8c2b2986', 'United States', 'Oklahoma', 'Texas County', 73945, '03016582582', '0423567700', 'Jun 10, 2021', 'rehanwebdesigner', 'optimageeks.com', 'website', 2, 1449146077, 1449551160),
(2, 27, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 2, 1449464544, 1449464964),
(3, 27, 'man', 'rehanbsit', 'Rehan', 'Aziz', '450e2f674af91b4ea93d8e675464830c8c2b2986', 'United States', 'Oklahoma', 'Texas County', 73945, '03016582582', '0423567700', '432553465', 'rehanwebdesigner', 'optimageeks.com', 'website', 2, 1449476195, 1449477204),
(4, 31, 'man', 'rehanbsit', 'Rehan', 'Aziz', '450e2f674af91b4ea93d8e675464830c8c2b2986', 'United States', 'Oklahoma', 'Texas County', 73945, '03016582582', '0423567700', 'Jan 6, 2016', 'rehanwebdesigner', 'optimageeks.com', 'website', 1, 1449572667, 1449829881);

-- --------------------------------------------------------

--
-- Table structure for table `travellers_languages`
--

CREATE TABLE IF NOT EXISTS `travellers_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `traveller_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `travellers_languages`
--

INSERT INTO `travellers_languages` (`id`, `traveller_id`, `language`, `type`, `created_at`, `updated_at`) VALUES
(1, 4, 'Punjabi', 'mother_language', 1449835694, 1449835694),
(2, 4, 'English', 'fluent', 1449835694, 1449835694),
(3, 4, 'German', 'learning', 1449835694, 1449835694);

-- --------------------------------------------------------

--
-- Table structure for table `travellers_profile`
--

CREATE TABLE IF NOT EXISTS `travellers_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `traveller_id` int(11) NOT NULL,
  `what_can_share` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `staylance_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `travellers_profile`
--

INSERT INTO `travellers_profile` (`id`, `traveller_id`, `what_can_share`, `staylance_experience`, `created_at`, `updated_at`) VALUES
(1, 4, 'Demo text', 'Dummy text', NULL, 1449837712);

-- --------------------------------------------------------

--
-- Table structure for table `traveller_description`
--

CREATE TABLE IF NOT EXISTS `traveller_description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `traveller_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `traveller_description`
--

INSERT INTO `traveller_description` (`id`, `traveller_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 'here is the details', 1449735635, 1449829887),
(2, 4, 'Rehan is here', 1449745253, 1449745253);

-- --------------------------------------------------------

--
-- Table structure for table `traveller_help`
--

CREATE TABLE IF NOT EXISTS `traveller_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `traveller_id` int(11) NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `general_help` int(11) NOT NULL,
  `professional_help` int(11) NOT NULL,
  `artistic_help` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `traveller_help`
--

INSERT INTO `traveller_help` (`id`, `traveller_id`, `profession`, `general_help`, `professional_help`, `artistic_help`, `created_at`, `updated_at`) VALUES
(1, 4, 'hi there', 1, 0, 1, NULL, 1449837708),
(2, 4, 'hi there', 0, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `traveller_photo`
--

CREATE TABLE IF NOT EXISTS `traveller_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `traveller_id` int(11) NOT NULL,
  `attachment_id` int(11) NOT NULL,
  `text1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `traveller_photo`
--

INSERT INTO `traveller_photo` (`id`, `traveller_id`, `attachment_id`, `text1`, `text2`, `text3`, `created_at`, `updated_at`) VALUES
(1, 4, 75, 'asd', 'asda', 'rehan', 1449658751, 1449658751),
(2, 4, 76, 'Rehan', 'Aziz', 'gsadghd', 1449672780, 1449672780),
(3, 4, 77, 'Rehan', 'Aziz', 'gsadgh', 1449747007, 1449747007);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `user_role` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gender`, `firstname`, `lastname`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `birthday`, `status`, `user_role`, `created_at`, `updated_at`) VALUES
(31, 'Mr.', 'Rehan', 'Aziz', 'rehan@optimageeks.com', 'R9xpfFQQYiUO7uRSjqBnuXik4uUryPIC', '$2y$13$FqjAWWo/7NBEQjZkWPvo3Oc8Bb9.rS21OB2RHh6dj9JDJB0q.2AgO', NULL, 'rehan@optimageeks.com', '10-04-1994', 10, 'traveller', 1449572474, 1449572474);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_pagesLang`
--
ALTER TABLE `cms_pagesLang`
  ADD CONSTRAINT `cms_pagesLang_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `cms_pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `countries_lang`
--
ALTER TABLE `countries_lang`
  ADD CONSTRAINT `countries_lang_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_templatesLang`
--
ALTER TABLE `email_templatesLang`
  ADD CONSTRAINT `email_templates_ibfk_1` FOREIGN KEY (`email_template_id`) REFERENCES `email_templates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `languages_lang`
--
ALTER TABLE `languages_lang`
  ADD CONSTRAINT `languages_lang_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
