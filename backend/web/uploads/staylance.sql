-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2015 at 03:10 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
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
(1, 1, 'ru', '', ''),
(2, 1, 'en', 'Inner Page', 'my only'),
(3, 2, 'de', 'this german', 'asfasf'),
(4, 2, 'es', 'this is spanish', 'sadasd'),
(5, 2, 'en', 'Inner Page', 'fgdfshdsfhdfgh'),
(6, 3, 'de', 'this germanTitle', '<p>&nbsp;adsfdfsdfsdfsdfsadsafsdfsfsagadfsasdfsadfsad</p>'),
(7, 3, 'es', 'this is spanishTile', '<p>&nbsp;zcZCzCZXczewfwq faasdcsaczxczffrrg</p>'),
(8, 3, 'en', 'djkslahfhklsdfh', '<p>&nbsp;fsfdasf dfgfgfs dfgsdfg sdvsdvsdvs sfvsdfgdsfgdsxc sdsadfasfdsadfasdfsadfdf</p>'),
(9, 4, 'de', 'German Title', '<p>yugbkygkg kgk gk gkg kgjk</p>'),
(10, 4, 'es', 'Spanish Title', '<p>hjbhb hjb&nbsp; k gkjghkj hkjkh kh kgkgkh k hkjk k gh kgkgk</p>'),
(11, 4, 'en', 'English Page Title', '<p>jjh jhg gkg gkg kgh gk</p>');

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
(2, 8, 'Rehan', 'Rehan Aziz', '10/04/1994', '306 R block johar town lahore', '03016582582', '03016582582', 'www.facebook.com/rehanbsit', 1, 2, 1448360873, 1448360873),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('m151110_150032_create_hosts_skill_details_table', 1447761499);

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
-- Table structure for table `postLang`
--

CREATE TABLE IF NOT EXISTS `postLang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `postLang`
--

INSERT INTO `postLang` (`id`, `post_id`, `language`, `title`, `content`) VALUES
(2, 1, 'en', 'Rehan Aziz', 'ssadadad'),
(5, 5, 'ru', 'hjghjghjg', ''),
(6, 5, 'en', 'Englishjhjkhjk', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gender`, `firstname`, `lastname`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `birthday`, `status`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Rehan', 'Aziz', 'rehan@optimageeks.com', 'YlJUBS2bQyX2uTdDWYLAjT2DqNckNI7m', '$2y$13$lH4N3UI/W4mxwup/mgd0..qZUE.JZWSrrgMJLnWQwSbT8xONOUpVC', NULL, 'rehan@optimageeks.com', '10-04-1994', 12, 'host', 1448000341, 1448358118),
(8, 'Mr.', 'Rehan', 'Aziz', 'admin@og.com', 'P4q5wD5e9hBCu6LwjOzt6uX5vhdl2a25', '$2y$13$J7HAY0Hp4k2s3rd8uDjPh.Z1xgJ4QOT4YH3lRCBLQly.qE.ukQra2', NULL, 'admin@og.com', '10-04-1994', 10, 'host', 1448360802, 1448361517),
(11, 'Mr.', 'Rehan', 'admin', 'admin@sstay.com', 'TYxfQfzLl8Yoi9XH7vKanE8YrDcLm6Lr', '$2y$13$GIXQLak716T2aBSPLrZrz.ZyL6HQYxNuNYsfhfE.jr35qObg6UXxG', NULL, 'admin@sstay.com', '78', 10, 'staylance', 1448364060, 1448364141);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms_pagesLang`
--
ALTER TABLE `cms_pagesLang`
  ADD CONSTRAINT `cms_pagesLang_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `cms_pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postLang`
--
ALTER TABLE `postLang`
  ADD CONSTRAINT `postlang_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
