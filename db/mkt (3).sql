-- phpMyAdmin SQL Dump
-- version 4.2.3deb1.trusty~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2015 at 01:12 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_posts`
--

CREATE TABLE IF NOT EXISTS `facebook_posts` (
  `id` int(11) NOT NULL,
  `facebook_posts` varchar(100) NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fb_queue`
--

CREATE TABLE IF NOT EXISTS `fb_queue` (
`id` int(11) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `fb_ids` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `token` text NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fb_responses`
--

CREATE TABLE IF NOT EXISTS `fb_responses` (
  `id` int(11) NOT NULL,
  `serialize` text NOT NULL,
  `uid` bigint(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `path` varchar(300) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
`id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
`id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `current_lat` double NOT NULL,
  `current_long` double NOT NULL,
  `accuracy` int(11) NOT NULL,
  `offer_type` int(11) NOT NULL,
  `description` text NOT NULL,
  `full_price` double NOT NULL,
  `disconted_price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creation_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offers1`
--

CREATE TABLE IF NOT EXISTS `offers1` (
`id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `desciption` text NOT NULL,
  `full_price` double NOT NULL,
  `disconted_price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offfer_type`
--

CREATE TABLE IF NOT EXISTS `offfer_type` (
`id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE IF NOT EXISTS `outlets` (
`id` int(11) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `mall` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `accuracy` int(11) NOT NULL,
  `owner_first_name` varchar(50) NOT NULL,
  `owner_last_name` varchar(50) NOT NULL,
  `fb_page_url` varchar(300) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `created_by` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(400) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `discount` double NOT NULL,
  `in_stock` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `discounted_price` double NOT NULL,
  `views` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fixed_price` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE IF NOT EXISTS `product_tag` (
`id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `counts` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
`id` int(11) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_queue`
--
ALTER TABLE `fb_queue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers1`
--
ALTER TABLE `offers1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offfer_type`
--
ALTER TABLE `offfer_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `tag` (`tag`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fb_queue`
--
ALTER TABLE `fb_queue`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offers1`
--
ALTER TABLE `offers1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offfer_type`
--
ALTER TABLE `offfer_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
