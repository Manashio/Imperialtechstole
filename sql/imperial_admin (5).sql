-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 10:47 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imperial_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_audiovideo`
--

CREATE TABLE `my_audiovideo` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_audiovideo_solutions` varchar(100) NOT NULL,
  `my_descriptions` varchar(2000) NOT NULL,
  `my_brands` varchar(100) NOT NULL,
  `my_image` varchar(100) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `my_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_audiovideo`
--

INSERT INTO `my_audiovideo` (`my_id`, `my_catagory_id`, `my_audiovideo_solutions`, `my_descriptions`, `my_brands`, `my_image`, `created_at`, `updated_at`, `my_status`) VALUES
(1, 5, 'Audio/Video Solution', '', 'LG, Panasonic, Samsung', '', 0, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `my_catagory`
--

CREATE TABLE `my_catagory` (
  `my_id` int(11) NOT NULL,
  `my_catagory_name` varchar(100) NOT NULL,
  `my_catagory_seo` varchar(1000) NOT NULL,
  `my_pagename` varchar(2999) NOT NULL,
  `my_catagory_status` enum('active','inactive') NOT NULL,
  `my_catagory_created_at` int(11) NOT NULL,
  `my_catagory_updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_catagory`
--

INSERT INTO `my_catagory` (`my_id`, `my_catagory_name`, `my_catagory_seo`, `my_pagename`, `my_catagory_status`, `my_catagory_created_at`, `my_catagory_updated_at`) VALUES
(1, 'Video Wall', 'video wall', 'video-wall.php', 'active', 0, 0),
(2, 'Large Format Display/Digital Signage', 'Large Format Display/Digital Signage', 'format-display.php', 'active', 0, 0),
(3, 'Projector', 'Projector', 'projector.php', 'active', 0, 0),
(4, 'Video Conferencing ', 'Video Conferencing ', 'conference.php', 'active', 0, 0),
(5, 'Audio/Video Solution', 'Audio/Video Solution', 'audiovideo.php', 'active', 0, 0),
(6, 'Smart/Virtual Classroom', 'Smart/Virtual Classroom', 'classroom.php', 'active', 0, 0),
(7, 'IT/Networking/UPS', 'IT/Networking/UPS', '', 'active', 0, 0),
(8, 'Security & Surveillance', 'Security & Surveillance', '', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_classroom`
--

CREATE TABLE `my_classroom` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_subcatagory_id` int(11) NOT NULL,
  `my_name` varchar(100) NOT NULL,
  `my_image` varchar(100) NOT NULL,
  `my_description` varchar(2000) NOT NULL,
  `my_products_of` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_classroom`
--

INSERT INTO `my_classroom` (`my_id`, `my_catagory_id`, `my_subcatagory_id`, `my_name`, `my_image`, `my_description`, `my_products_of`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 12, 'Smart Classroom Solution', 'image.jpg', 'Some Image Description', 'Smart Classroom Solution', 'active', 1524454052, 0),
(2, 6, 13, 'Virtual Classroom Solution', 'someimage.jpg', 'Image Description', 'Virtual Classroom Solution', 'active', 1524454052, 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_classroom_product`
--

CREATE TABLE `my_classroom_product` (
  `my_id` int(11) NOT NULL,
  `my_classroom_id` int(11) NOT NULL,
  `my_products_name` varchar(100) NOT NULL,
  `my_images` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `broucher` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_classroom_product`
--

INSERT INTO `my_classroom_product` (`my_id`, `my_classroom_id`, `my_products_name`, `my_images`, `description`, `broucher`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smart Board', 'someimage.jpg', 'About Smart Board', 'related Brouchers', 'active', 0, 0),
(2, 1, 'Smart  Panel', 'image.jpg', 'Smart Panel Description', 'broucher link for download.', 'active', 0, 0),
(3, 2, 'Camera', 'image.jpg', 'About Camera Description', 'Broucher Download', 'active', 0, 0),
(4, 2, 'Media Box/Virtual License', 'image.jpg', 'Media Description', 'Broucher Download', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_format_display`
--

CREATE TABLE `my_format_display` (
  `my_id` int(11) NOT NULL,
  `my_subcatagory_id` int(11) NOT NULL,
  `my_display_name` varchar(100) NOT NULL,
  `my_display_size` varchar(100) NOT NULL,
  `my_display_brand` varchar(100) NOT NULL,
  `my_display_specification` varchar(1000) NOT NULL,
  `my_display_broucher` varchar(1000) NOT NULL,
  `my_display_image` varchar(1000) NOT NULL,
  `my_display_status` enum('active','inactive') NOT NULL,
  `my_display_created_at` int(11) NOT NULL,
  `my_display_updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_format_display`
--

INSERT INTO `my_format_display` (`my_id`, `my_subcatagory_id`, `my_display_name`, `my_display_size`, `my_display_brand`, `my_display_specification`, `my_display_broucher`, `my_display_image`, `my_display_status`, `my_display_created_at`, `my_display_updated_at`) VALUES
(1, 3, '98 Inch Large Format Display\r\n', '98-inch', 'LG', 'Something About LG DISPLAY', '', '', 'active', 0, 0),
(2, 4, '86 Inch Large Format Display\r\n\r\n', '86-inch', 'Samsung', 'About The Same Thing', '', '', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_projector`
--

CREATE TABLE `my_projector` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_projector_name` varchar(100) NOT NULL,
  `my_projector_brand` varchar(100) NOT NULL,
  `my_projector_specification` varchar(1000) NOT NULL,
  `my_projector_broucher` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `my_projector_created_at` int(11) NOT NULL,
  `my_projector_updated_at` int(11) NOT NULL,
  `my_projector_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_projector`
--

INSERT INTO `my_projector` (`my_id`, `my_catagory_id`, `my_projector_name`, `my_projector_brand`, `my_projector_specification`, `my_projector_broucher`, `image`, `my_projector_created_at`, `my_projector_updated_at`, `my_projector_status`) VALUES
(1, 3, 'Projector 1', 'LG', 'Projector Specification', '', '', 0, 0, 'active'),
(2, 3, 'Projector 2', 'Samsung', 'Some Specification', '', '', 0, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `my_subcatagory`
--

CREATE TABLE `my_subcatagory` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_subcatagory_name` varchar(100) NOT NULL,
  `my_subcatagory_seo` varchar(1000) NOT NULL,
  `my_pagename` varchar(1000) NOT NULL,
  `my_subcatagory_status` enum('active','inactive') NOT NULL,
  `my_catagory_created_at` int(11) NOT NULL,
  `my_catagory_updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_subcatagory`
--

INSERT INTO `my_subcatagory` (`my_id`, `my_catagory_id`, `my_subcatagory_name`, `my_subcatagory_seo`, `my_pagename`, `my_subcatagory_status`, `my_catagory_created_at`, `my_catagory_updated_at`) VALUES
(1, 1, 'LCD Video Wall', 'LCD Video Wall', 'video-wall-product.php', 'active', 0, 0),
(2, 1, 'LED Video Wall', 'LED Video Wall', 'video-wall-product.php', 'active', 0, 0),
(3, 2, '98 Inch Large Format Display', '98 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(4, 2, '86 Inch Large Format Display', '86 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(5, 2, '75 Inch Large Format Display', '75 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(6, 2, '65 Inch Large Format Display', '65 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(7, 2, '55 Inch Large Format Display', '55 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(8, 2, '48 Inch Large Format Display', '48 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(9, 2, '43 Inch Large Format Display', '43 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(10, 2, '32 Inch Large Format Display', '32 Inch Large Format Display', 'format-display-product.php', 'active', 0, 0),
(11, 3, 'LCD/DLP Projector', 'LCD/DLP Projector', 'projector.php', 'active', 0, 0),
(12, 6, 'Smart Classroom Solution', 'Smart Classroom Solution', 'classroom_types.php', 'active', 0, 1524334864),
(13, 6, 'Virtual Classroom Solution', 'Virtual Classroom Solution', 'classroom_types.php', 'active', 0, 1524334879);

-- --------------------------------------------------------

--
-- Table structure for table `my_videoconferencing`
--

CREATE TABLE `my_videoconferencing` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_videoconference_name` varchar(100) NOT NULL,
  `my_images` varchar(100) NOT NULL,
  `my_point_desc` varchar(1000) NOT NULL,
  `my_multipart_desc` varchar(1000) NOT NULL,
  `my_brand` varchar(100) NOT NULL,
  `my_status` enum('active','inactive') NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_videoconferencing`
--

INSERT INTO `my_videoconferencing` (`my_id`, `my_catagory_id`, `my_videoconference_name`, `my_images`, `my_point_desc`, `my_multipart_desc`, `my_brand`, `my_status`, `created_at`, `updated_at`) VALUES
(1, 4, 'VIDEO CONFERENCE', '', 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose', 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose', 'LG', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_videowall`
--

CREATE TABLE `my_videowall` (
  `my_id` int(11) NOT NULL,
  `my_catagory_id` int(11) NOT NULL,
  `my_subcatagory_id` int(11) NOT NULL,
  `my_video_name` varchar(100) NOT NULL,
  `my_video_description` varchar(10000) NOT NULL,
  `my_video_image` varchar(1000) NOT NULL,
  `my_video_seo` varchar(1000) NOT NULL,
  `my_video_status` enum('active','inactive') NOT NULL,
  `my_video_created_at` int(11) NOT NULL,
  `my_video_updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_videowall`
--

INSERT INTO `my_videowall` (`my_id`, `my_catagory_id`, `my_subcatagory_id`, `my_video_name`, `my_video_description`, `my_video_image`, `my_video_seo`, `my_video_status`, `my_video_created_at`, `my_video_updated_at`) VALUES
(1, 1, 1, 'LCD Video Wall\r\n', 'LCD description given here.\r\n', '', '', 'active', 0, 0),
(2, 1, 2, 'LED Video Wall', 'LED description given here.', '', '', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_lists`
--

CREATE TABLE `products_lists` (
  `id` int(11) NOT NULL,
  `product_of` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `broucher` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_lists`
--

INSERT INTO `products_lists` (`id`, `product_of`, `name`, `model`, `description`, `price`, `image`, `broucher`, `created_at`, `updated_at`, `status`) VALUES
(1, 'video wal', 'LG DIGITAL', '32SE3KB/D', '32” display,350 nits brightness, inbuilt Digital Signage,18x7 operation,in built speaker(10W x 2), HDMI, DVID, VGA, USB, RS232,', 37000, '', '', 0, 0, 'active'),
(2, 'video wal', 'LG Flat Wall Display', '43SE3KB/D', '43” display,350 nits brightness, inbuilt Digital Signage,18x7 operation,in built speaker(10W x 2), HDMI, DVID, VGA, USB, RS232,', 52000, '', '', 0, 0, 'active'),
(3, 'dummy', 'Dummy name', 'dummy model', 'dummy descriptions', 2131, '', '', 0, 0, ''),
(4, 'Digital Signage System', 'Dummy Name', 'dummy model', 'dummy descriptions', 2131, '', '', 0, 0, ''),
(5, 'Digital Signage System', 'Digital Signage System', 'XYZ model', 'some Description kela', 29128, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addonimages`
--

CREATE TABLE `tbl_addonimages` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` varchar(1000) NOT NULL,
  `fld_image_cat` varchar(1000) NOT NULL,
  `fld_image` varchar(1000) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE `tbl_administrator` (
  `fld_id` int(11) NOT NULL,
  `fld_name` varchar(50) DEFAULT NULL,
  `fld_username` varchar(25) NOT NULL,
  `fld_userpass` varchar(50) NOT NULL,
  `fld_email` varchar(50) NOT NULL,
  `fld_phone` varchar(50) DEFAULT NULL,
  `fld_facebook` varchar(255) NOT NULL,
  `fld_twitter` varchar(255) NOT NULL,
  `fld_linkedin` varchar(255) NOT NULL,
  `fld_googleplus` varchar(255) NOT NULL,
  `fld_llogintime` datetime DEFAULT NULL,
  `fld_lloginip` varchar(25) DEFAULT NULL,
  `fld_datetime` datetime NOT NULL,
  `fld_company_name` varchar(255) NOT NULL,
  `fld_address` varchar(255) NOT NULL,
  `fld_contact_number` varchar(255) NOT NULL,
  `fld_map` blob NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`fld_id`, `fld_name`, `fld_username`, `fld_userpass`, `fld_email`, `fld_phone`, `fld_facebook`, `fld_twitter`, `fld_linkedin`, `fld_googleplus`, `fld_llogintime`, `fld_lloginip`, `fld_datetime`, `fld_company_name`, `fld_address`, `fld_contact_number`, `fld_map`, `fld_status`) VALUES
(1, 'Administrator', 'admin', 'cws312#', 'LAURA.SHI@CBEC365.COM', '+86 27-59730365', 'https://www.facebook.com/', 'https://twitter.com/', 'https://in.linkedin.com/', 'https://google.com/', '2018-03-31 15:44:53', '171.50.169.190', '2016-01-01 00:00:00', '', 'China', '', '', 1),
(2, 'nubul', 'nubul', 'pass', 'nubulmachary@gmail.com', NULL, '', '', '', '', '2018-04-15 22:33:06', '::1', '0000-00-00 00:00:00', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appliedfor`
--

CREATE TABLE `tbl_appliedfor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `applied_date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appliedfor`
--

INSERT INTO `tbl_appliedfor` (`id`, `user_id`, `course_id`, `applied_date`, `status`, `flag`) VALUES
(1, 4, 7, '2016-04-04 01:35:37', 0, 3),
(2, 4, 8, '2016-04-05 01:36:51', 1, 3),
(3, 4, 8, '2016-04-06 11:58:30', 0, 4),
(4, 4, 8, '2016-04-07 10:52:11', 0, 4),
(5, 4, 8, '2016-04-06 10:52:57', 0, 3),
(6, 9, 62, '16-04-12 02:56:58', 0, 1),
(7, 9, 62, '2016-04-12 02:58:08', 0, 1),
(8, 10, 47, '16-04-12 03:06:13', 0, 1),
(9, 9, 62, '2016-04-12 03:08:51', 0, 1),
(10, 11, 62, '16-04-12 03:09:27', 0, 1),
(11, 8, 0, '2016-04-12 03:27:07', 0, 1),
(12, 8, 0, '2016-04-12 03:27:08', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `fld_id` int(11) NOT NULL,
  `fld_title` text NOT NULL,
  `fld_description` text NOT NULL,
  `fld_date` varchar(50) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_meta_title` text NOT NULL,
  `fld_meta_description` text NOT NULL,
  `fld_meta_keywords` text NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`fld_id`, `fld_title`, `fld_description`, `fld_date`, `fld_image`, `fld_meta_title`, `fld_meta_description`, `fld_meta_keywords`, `fld_status`) VALUES
(3, 'Relax in a beautiful contest', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>\r\n', '05-04-2016 12:08:16', 'drink..jpg', 'Relax in a beautiful contest', 'Relax in a beautiful contest', 'Relax in a beautiful contest', 'Active'),
(4, 'Cozy and Charming rooms', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>\r\n', '05-04-2016 12:08:43', 'camera..jpg', 'Cozy and Charming rooms', 'Cozy and Charming rooms', 'Cozy and Charming rooms', 'Active'),
(7, 'Discover typical Food', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>\r\n', '16-05-2016 05:25:44', 'plate..jpg', 'Discover typical Food', 'Discover typical Food', 'Discover typical Food', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_backup`
--

CREATE TABLE `tbl_backup` (
  `fld_id` int(11) NOT NULL,
  `fld_backupname` varchar(255) DEFAULT NULL,
  `fld_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_backup`
--

INSERT INTO `tbl_backup` (`fld_id`, `fld_backupname`, `fld_date`) VALUES
(1, 'DB_20150814160217.sql', '2015-08-14 16:02:17'),
(2, 'DB_20151015153748.sql', '2015-10-15 15:37:48'),
(3, 'DB_20151125182000.sql', '2015-11-25 18:20:01'),
(4, 'DB_20160217161632.sql', '2016-02-17 16:16:33'),
(15, 'DB-2016-01-11-18-45-14.zip', '2016-01-11 18:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyoffer`
--

CREATE TABLE `tbl_buyoffer` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` int(11) NOT NULL,
  `fld_catid` int(11) NOT NULL,
  `fld_subcatid` int(11) NOT NULL,
  `fld_product_code` varchar(255) NOT NULL,
  `fld_product_name` varchar(255) NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_short_desc` text NOT NULL,
  `fld_desc` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_added_on` datetime NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active',
  `fld_featured` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buyoffer`
--

INSERT INTO `tbl_buyoffer` (`fld_id`, `fld_company_id`, `fld_catid`, `fld_subcatid`, `fld_product_code`, `fld_product_name`, `fld_seourl`, `fld_image`, `fld_short_desc`, `fld_desc`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_added_on`, `fld_status`, `fld_featured`) VALUES
(6, 3, 10, 16, '9601367264', 'shuttering plywood ', 'xzcvcxz', '1IMG20161305115IMG2016114311678.jpg', '', '<p>We want to buy shuttering plywood in bulk Qty&nbsp;<br />\r\nsize : 8x4<br />\r\nCost and delivery details will discussed by the supplier only&nbsp;<br />\r\nPlease quote for the same along with price and details.....</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n', 'shuttering plywood ', 'shuttering plywood ', 'shuttering plywood ', '2016-06-17 11:49:08', 'Active', 0),
(7, 1, 10, 17, '7912316294', 'furnace doors	', 'sdfasdf', '', '', '<p>We want to buy emamectin benzoate...<br />\r\n<br />\r\n<br />\r\nPackaging - 100 gram.<br />\r\n<br />\r\n<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\n<br />\r\n<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'furnace doors	 ', 'furnace doors	 ', 'furnace doors	 ', '2016-06-17 02:26:10', 'Active', 0),
(8, 3, 10, 17, '8415235820', 'pvc resin', 'pvc-resin', '', '', '<p>We want to buy pvc resin in huge quantity...<br />\r\nForm - Powder</p>\r\n\r\n<p>Packaging - 25 k.g.</p>\r\n\r\n<p>Further details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n\r\n<p><strong>Estimated Order Quantity:</strong> 10 Metric Tons</p>\r\n<p><strong>Requirement Urgency:</strong> Urgent</p>\r\n<p><strong>Purpose of Purchase:</strong> Reselling</p>\r\n<p><strong>Requirement Frequency:</strong> Monthly</p>\r\n\r\n\r\n', 'pvc resin', 'pvc resin', 'pvc resin', '2016-06-17 12:09:01', 'Active', 0),
(10, 3, 12, 27, '9984846916', 'emamectin benzoate', 'emamectin-benzoate', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 01:07:57', 'Active', 0),
(11, 3, 10, 17, '7675418832', 'pvc resin', 'pvc-resin_1', '', '', '<p>We want to buy pvc resin in huge quantity...<br />\r\nForm - Powder</p>\r\n\r\n<p>Packaging - 25 k.g.</p>\r\n\r\n<p>Further details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n\r\n<p><strong>Estimated Order Quantity:</strong> 10 Metric Tons</p>\r\n\r\n<p><strong>Requirement Urgency:</strong> Urgent</p>\r\n\r\n<p><strong>Purpose of Purchase:</strong> Reselling</p>\r\n\r\n<p><strong>Requirement Frequency:</strong> Monthly</p>\r\n', 'pvc resin', 'pvc resin', 'pvc resin', '2016-06-17 02:21:54', 'Active', 0),
(12, 3, 10, 16, '5525148516', 'shuttering plywood ', 'shuttering-plywood_1', '', '', '<p>We want to buy shuttering plywood in bulk Qty&nbsp;<br />\r\nsize : 8x4<br />\r\nCost and delivery details will discussed by the supplier only&nbsp;<br />\r\nPlease quote for the same along with price and details.....</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n', 'shuttering plywood ', 'shuttering plywood ', 'shuttering plywood ', '2016-06-17 02:22:01', 'Active', 0),
(13, 3, 13, 36, '3671485777', 'shuttering plywood ', 'shuttering-plywood_2', '', '', '<p>We want to buy shuttering plywood in bulk Qty&nbsp;<br />\r\nsize : 8x4<br />\r\nCost and delivery details will discussed by the supplier only&nbsp;<br />\r\nPlease quote for the same along with price and details.....</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n', 'shuttering plywood ', 'shuttering plywood ', 'shuttering plywood ', '2016-06-17 02:22:17', 'Active', 0),
(14, 3, 11, 22, '6899976450', 'pvc resin', 'pvc-resin_2', '', '', '<p>We want to buy pvc resin in huge quantity...<br />\r\nForm - Powder</p>\r\n\r\n<p>Packaging - 25 k.g.</p>\r\n\r\n<p>Further details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n\r\n<p><strong>Estimated Order Quantity:</strong> 10 Metric Tons</p>\r\n\r\n<p><strong>Requirement Urgency:</strong> Urgent</p>\r\n\r\n<p><strong>Purpose of Purchase:</strong> Reselling</p>\r\n\r\n<p><strong>Requirement Frequency:</strong> Monthly</p>\r\n', 'pvc resin', 'pvc resin', 'pvc resin', '2016-06-17 02:22:27', 'Active', 0),
(15, 3, 14, 43, '4971726367', 'emamectin benzoate', 'emamectin-benzoate_1', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:22:39', 'Active', 0),
(16, 3, 14, 44, '4681188030', 'shuttering plywood ', 'shuttering-plywood_3', '', '', '<p>We want to buy shuttering plywood in bulk Qty&nbsp;<br />\r\nsize : 8x4<br />\r\nCost and delivery details will discussed by the supplier only&nbsp;<br />\r\nPlease quote for the same along with price and details.....</p>\r\n\r\n<p>Additional Information About the Buy Leads</p>\r\n', 'shuttering plywood ', 'shuttering plywood ', 'shuttering plywood ', '2016-06-17 02:23:00', 'Active', 0),
(17, 1, 14, 43, '4686127271', 'emamectin benzoate', 'emamectin-benzoate_2', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:23:18', 'Active', 0),
(18, 1, 10, 17, '7175646205', 'furnace doors	 ', 'furnace-doors', '', '', '<p>We want to buy emamectin benzoate...</p>\r\n\r\n<p>Packaging - 100 gram.</p>\r\n\r\n<p>Further details will be discussed with supplier.</p>\r\n\r\n<p>Please send the details and quotation for same.</p>\r\n', 'furnace doors	 ', 'furnace doors	 ', 'furnace doors	 ', '2016-06-17 02:24:46', 'Active', 0),
(19, 1, 13, 37, '4818258334', 'furnace doors	 ', 'furnace-doors_1', '', '', '<p>We want to buy emamectin benzoate...</p>\r\n\r\n<p>Packaging - 100 gram.</p>\r\n\r\n<p>Further details will be discussed with supplier.</p>\r\n\r\n<p>Please send the details and quotation for same.</p>\r\n', 'furnace doors	 ', 'furnace doors	 ', 'furnace doors	 ', '2016-06-17 02:25:05', 'Active', 0),
(21, 4, 12, 27, '2941157341', 'emamectin benzoate', 'emamectin-benzoate_3', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:17', 'Active', 0),
(22, 5, 12, 27, '1139656702', 'emamectin benzoate', 'emamectin-benzoate_4', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:24', 'Active', 0),
(23, 6, 12, 27, '8888355829', 'emamectin benzoate', 'emamectin-benzoate_5', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:30', 'Active', 0),
(24, 7, 12, 27, '4293937222', 'emamectin benzoate', 'emamectin-benzoate_6', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:36', 'Active', 0),
(25, 8, 12, 27, '4803056713', 'emamectin benzoate', 'emamectin-benzoate_7', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:42', 'Active', 0),
(26, 9, 12, 27, '6423496803', 'emamectin benzoate', 'emamectin-benzoate_8', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:48', 'Active', 0),
(27, 10, 12, 27, '7703036659', 'emamectin benzoate', 'emamectin-benzoate_9', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:37:55', 'Active', 0),
(28, 11, 12, 27, '6528338781', 'emamectin benzoate', 'emamectin-benzoate_10', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:38:16', 'Active', 0),
(29, 12, 12, 27, '9568295668', 'emamectin benzoate', 'emamectin-benzoate_11', '', '', '<p>We want to buy emamectin benzoate...<br />\r\nPackaging - 100 gram.<br />\r\nFurther details will be discussed with supplier.&nbsp;<br />\r\nPlease send the details and quotation for same.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:38:23', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `fld_id` int(11) NOT NULL,
  `fld_name` varchar(100) NOT NULL,
  `fld_seo_url` varchar(50) NOT NULL,
  `fld_parentid` int(11) NOT NULL DEFAULT '0',
  `fld_layer` int(11) NOT NULL,
  `fld_image` varchar(1000) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active',
  `fld_featured` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`fld_id`, `fld_name`, `fld_seo_url`, `fld_parentid`, `fld_layer`, `fld_image`, `fld_status`, `fld_featured`) VALUES
(1, 'Audio / Video', 'audio-video', 0, 1, '', 'Active', 0),
(2, 'Video Wall', 'video-wall', 1, 2, '', 'Active', 0),
(3, 'Signage System', 'signage-system', 1, 2, '', 'Active', 0),
(4, 'LFD - Large Formate Display', 'lfd--large-formate-display', 1, 2, '', 'Active', 0),
(5, 'Touch Screen', 'touch-screen', 1, 2, '', 'Active', 0),
(6, 'Multimedia Projectors', 'multimedia-projectors', 1, 2, '', 'Active', 0),
(7, 'Video Conferencing System', 'video-conferencing-system', 1, 2, '', 'Active', 0),
(8, 'Classroom Solutions', 'classroom-solutions', 1, 2, '', 'Active', 0),
(9, 'IT / Networking', 'it-networking', 0, 1, '', 'Active', 0),
(10, 'IT', 'it', 9, 2, '', 'Active', 0),
(11, 'Server', 'server', 10, 3, '', 'Active', 0),
(12, 'Laptop/Desktop', 'laptopdesktop', 10, 3, '', 'Active', 0),
(13, 'Printers', 'printers', 10, 3, '', 'Active', 0),
(14, 'Power Solutions', 'power-solutions', 10, 3, '', 'Active', 0),
(15, 'Networking', 'networking', 9, 2, '', 'Active', 0),
(16, 'Component', 'component', 9, 2, '', 'Active', 0),
(17, 'Consumable', 'consumable', 9, 2, '', 'Active', 0),
(18, 'Toner Cartridge', 'toner-cartridge', 17, 3, '', 'Active', 0),
(19, 'Security & Surveillance', 'security-surveillance', 0, 1, '', 'Active', 0),
(20, 'Biometrics', 'biometrics', 19, 2, '', 'Active', 0),
(21, 'CCTV Solutions', 'cctv-solutions', 19, 2, '', 'Active', 0),
(22, 'X-Rey Baggage Scanner', 'x-rey-baggage-scanner', 19, 2, '', 'Active', 0),
(23, 'Home Automation', 'home-automation', 19, 2, '', 'Active', 0),
(24, 'Fire Alarm System', 'fire-alarm-system', 19, 2, '', 'Active', 0),
(25, 'Door Access Control System', 'door-access-control-system', 20, 3, '', 'Active', 0),
(26, 'Time Attendance Systym', 'time-attendance-systym', 20, 3, '', 'Active', 0),
(27, 'Desktop Laptop Authentication', 'desktop-laptop-authentication', 20, 3, '', 'Active', 0),
(28, 'Adhar Kit', 'adhar-kit', 20, 3, '', 'Active', 0),
(29, 'Solutions', 'solutions', 0, 1, '', 'Active', 0),
(30, 'Data Center', 'data-center', 29, 2, '', 'Active', 0),
(31, 'Nockroom', 'nockroom', 29, 2, '', 'Active', 0),
(32, 'Board Room/Conference', 'board-roomconference', 29, 2, '', 'Active', 0),
(33, 'Cinema / Auditorium', 'cinema-auditorium', 29, 2, '', 'Active', 0),
(34, 'Components', 'components', 0, 1, '', 'Active', 0),
(35, 'Other', 'other', 0, 1, '', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `fld_id` int(11) NOT NULL,
  `fld_provinceid` int(11) NOT NULL,
  `fld_city` varchar(255) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `fld_id` int(11) NOT NULL,
  `fld_email` varchar(255) NOT NULL,
  `fld_password` varchar(255) NOT NULL,
  `fld_company_name` varchar(255) NOT NULL,
  `fld_china_exp_name` varchar(255) NOT NULL,
  `fld_international_certification` varchar(255) NOT NULL,
  `fld_website_url` varchar(255) NOT NULL,
  `fld_business_type` varchar(50) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_phone` varchar(50) NOT NULL,
  `fld_mobile` varchar(50) NOT NULL,
  `fld_fax` varchar(50) NOT NULL,
  `fld_address` varchar(255) NOT NULL,
  `fld_district` varchar(255) NOT NULL,
  `fld_city` varchar(255) NOT NULL,
  `fld_state` varchar(255) NOT NULL,
  `fld_pincode` varchar(50) NOT NULL,
  `fld_country` varchar(255) NOT NULL,
  `fld_reg_date` datetime NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_image2` varchar(255) NOT NULL,
  `fld_desc` text NOT NULL,
  `fld_ecommhub` text NOT NULL,
  `fld_investment` text NOT NULL,
  `fld_services` text NOT NULL,
  `fld_companies` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`fld_id`, `fld_email`, `fld_password`, `fld_company_name`, `fld_china_exp_name`, `fld_international_certification`, `fld_website_url`, `fld_business_type`, `fld_name`, `fld_phone`, `fld_mobile`, `fld_fax`, `fld_address`, `fld_district`, `fld_city`, `fld_state`, `fld_pincode`, `fld_country`, `fld_reg_date`, `fld_seourl`, `fld_image`, `fld_image2`, `fld_desc`, `fld_ecommhub`, `fld_investment`, `fld_services`, `fld_companies`, `fld_mtitle`, `fld_mdesc`, `fld_mkeywords`, `fld_status`) VALUES
(1, '', '197598a2cf62f4b339e44a3ae169531b', 'gh', '', '', '', '', '', 'gh', 'g', 'h', 'hg', '', '', '', 'gh', '', '2017-09-19 11:56:32', 'gh', '', '', 'gh                       ', '', '', '', '', 'gh', '', 'gh', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactpage`
--

CREATE TABLE `tbl_contactpage` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactpage`
--

INSERT INTO `tbl_contactpage` (`id`, `email`, `phone`, `address`, `map`) VALUES
(1, '  testingprojectswt@gmail.com \r\ntest@gmail.copm ', '011-4504 4000 (10 Lines)\r\n 09654433438', 'Apar India, 6, Community Centre,\r\nSector-8, Rohini,\r\nDelhi-110085', '<script src=\'https://maps.googleapis.com/maps/api/js?v=3.exp\'></script><div style=\'overflow:hidden;height:150px;width:250px;\'><div id=\'gmap_canvas\' style=\'height:150px;width:250px;\'></div><div><small><a href=\"http://embedgooglemaps.com\">									embed google maps							</a></small></div><div><small><a href=\"http://freedirectorysubmissionsites.com/\">link directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type=\'text/javascript\'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(28.670951,77.08096699999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById(\'gmap_canvas\'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.670951,77.08096699999999)});infowindow = new google.maps.InfoWindow({content:\'<strong>Apar India</strong><br>6, Community Centre, Sector-8, Rohini, Delhi-110085<br>\'});google.maps.event.addListener(marker, \'click\', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, \'load\', init_map);</script>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `contId` int(11) NOT NULL,
  `contCode` varchar(5) DEFAULT NULL,
  `contName` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country_master`
--

INSERT INTO `tbl_country_master` (`contId`, `contCode`, `contName`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegowina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (local name: Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GR', 'Greece'),
(84, 'GL', 'Greenland'),
(85, 'GD', 'Grenada'),
(86, 'GP', 'Guadeloupe'),
(87, 'GU', 'Guam'),
(88, 'GT', 'Guatemala'),
(89, 'GN', 'Guinea'),
(90, 'GW', 'Guinea-Bissau'),
(91, 'GY', 'Guyana'),
(92, 'HT', 'Haiti'),
(93, 'HM', 'Heard and Mc Donald Islands'),
(94, 'HN', 'Honduras'),
(95, 'HK', 'Hong Kong'),
(96, 'HU', 'Hungary'),
(97, 'IS', 'Iceland'),
(98, 'IN', 'India'),
(99, 'ID', 'Indonesia'),
(100, 'IR', 'Iran (Islamic Republic of)'),
(101, 'IQ', 'Iraq'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IT', 'Italy'),
(105, 'JM', 'Jamaica'),
(106, 'JP', 'Japan'),
(107, 'JO', 'Jordan'),
(108, 'KZ', 'Kazakhstan'),
(109, 'KE', 'Kenya'),
(110, 'KI', 'Kiribati'),
(111, 'KW', 'Kuwait'),
(112, 'KG', 'Kyrgyzstan'),
(113, 'LV', 'Latvia'),
(114, 'LB', 'Lebanon'),
(115, 'LS', 'Lesotho'),
(116, 'LR', 'Liberia'),
(117, 'LY', 'Libyan Arab Jamahiriya'),
(118, 'LI', 'Liechtenstein'),
(119, 'LT', 'Lithuania'),
(120, 'LU', 'Luxembourg'),
(121, 'MO', 'Macao'),
(122, 'MK', 'Macedonia'),
(123, 'MG', 'Madagascar'),
(124, 'MW', 'Malawi'),
(125, 'MY', 'Malaysia'),
(126, 'MV', 'Maldives'),
(127, 'ML', 'Mali'),
(128, 'MT', 'Malta'),
(129, 'MH', 'Marshall Islands'),
(130, 'MQ', 'Martinique'),
(131, 'MR', 'Mauritania'),
(132, 'MU', 'Mauritius'),
(133, 'YT', 'Mayotte'),
(134, 'MX', 'Mexico'),
(135, 'FM', 'Micronesia'),
(136, 'MD', 'Moldova'),
(137, 'MC', 'Monaco'),
(138, 'MN', 'Mongolia'),
(139, 'MS', 'Montserrat'),
(140, 'MA', 'Morocco'),
(141, 'MZ', 'Mozambique'),
(142, 'MM', 'Myanmar'),
(143, 'NA', 'Namibia'),
(144, 'NR', 'Nauru'),
(145, 'NP', 'Nepal'),
(146, 'NL', 'Netherlands'),
(147, 'AN', 'Netherlands Antilles'),
(148, 'NC', 'New Caledonia'),
(149, 'NZ', 'New Zealand'),
(150, 'NI', 'Nicaragua'),
(151, 'NE', 'Niger'),
(152, 'NG', 'Nigeria'),
(153, 'NU', 'Niue'),
(154, 'NF', 'Norfolk Island'),
(155, 'KP', 'North Korea'),
(156, 'MP', 'Northern Mariana Islands'),
(157, 'NO', 'Norway'),
(158, 'OM', 'Oman'),
(159, 'PK', 'Pakistan'),
(160, 'PW', 'Palau'),
(161, 'PA', 'Panama'),
(162, 'PG', 'Papua New Guinea'),
(163, 'PY', 'Paraguay'),
(164, 'PE', 'Peru'),
(165, 'PH', 'Philippines'),
(166, 'PN', 'Pitcairn'),
(167, 'PL', 'Poland'),
(168, 'PT', 'Portugal'),
(169, 'PR', 'Puerto Rico'),
(170, 'QA', 'Qatar'),
(171, 'RE', 'Reunion'),
(172, 'RO', 'Romania'),
(173, 'RU', 'Russian Federation'),
(174, 'RW', 'Rwanda'),
(175, 'KN', 'Saint Kitts and Nevis'),
(176, 'LC', 'Saint Lucia'),
(177, 'VC', 'Saint Vincent and the Grenadines'),
(178, 'WS', 'Samoa'),
(179, 'SM', 'San Marino'),
(180, 'ST', 'Sao Tome and Principe'),
(181, 'SA', 'Saudi Arabia'),
(182, 'SN', 'Senegal'),
(183, 'SC', 'Seychelles'),
(184, 'SL', 'Sierra Leone'),
(185, 'SG', 'Singapore'),
(186, 'SK', 'Slovakia (Slovak Republic)'),
(187, 'SI', 'Slovenia'),
(188, 'SB', 'Solomon Islands'),
(189, 'SO', 'Somalia'),
(190, 'ZA', 'South Africa'),
(191, 'KR', 'South Korea'),
(192, 'ES', 'Spain'),
(193, 'LK', 'Sri Lanka'),
(194, 'SH', 'St. Helena'),
(195, 'PM', 'St. Pierre and Miquelon'),
(196, 'SD', 'Sudan'),
(197, 'SR', 'Suriname'),
(198, 'SJ', 'Svalbard and Jan Mayen Islands'),
(199, 'SZ', 'Swaziland'),
(200, 'SE', 'Sweden'),
(201, 'CH', 'Switzerland'),
(202, 'SY', 'Syrian Arab Republic'),
(203, 'TW', 'Taiwan'),
(204, 'TJ', 'Tajikistan'),
(205, 'TZ', 'Tanzania'),
(206, 'TH', 'Thailand'),
(207, 'TG', 'Togo'),
(208, 'TK', 'Tokelau'),
(209, 'TO', 'Tonga'),
(210, 'TT', 'Trinidad and Tobago'),
(211, 'TN', 'Tunisia'),
(212, 'TR', 'Turkey'),
(213, 'TM', 'Turkmenistan'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TV', 'Tuvalu'),
(216, 'UG', 'Uganda'),
(217, 'UA', 'Ukraine'),
(218, 'AE', 'United Arab Emirates'),
(219, 'UK', 'United Kingdom'),
(220, 'US', 'United States'),
(221, 'UY', 'Uruguay'),
(222, 'UZ', 'Uzbekistan'),
(223, 'VU', 'Vanuatu'),
(224, 'VA', 'Vatican City State (Holy See)'),
(225, 'VE', 'Venezuela'),
(226, 'VN', 'Vietnam'),
(227, 'VG', 'Virgin Islands (British)'),
(228, 'VI', 'Virgin Islands (U.S.)'),
(229, 'WF', 'Wallis And Futuna Islands'),
(230, 'EH', 'Western Sahara'),
(231, 'YE', 'Yemen'),
(232, 'YU', 'Yugoslavia'),
(233, 'ZM', 'Zambia'),
(234, 'ZW', 'Zimbabwe'),
(235, 'OT', 'Other Country');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `fld_id` int(11) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_catid` varchar(255) NOT NULL,
  `fld_universityid` int(11) NOT NULL,
  `fld_fee` varchar(255) NOT NULL,
  `fld_duration` varchar(255) NOT NULL,
  `fld_eligibility_criteria` varchar(255) NOT NULL,
  `fld_modeofdelhivery` varchar(255) NOT NULL,
  `fld_featured` int(11) NOT NULL,
  `fld_coursehighlight` text NOT NULL,
  `fld_benifits` text NOT NULL,
  `fld_eligibilityinfo` text NOT NULL,
  `fld_curriculum` text NOT NULL,
  `fld_uploadfile` varchar(255) NOT NULL,
  `fld_addedon` varchar(255) NOT NULL,
  `fld_status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`fld_id`, `fld_name`, `fld_catid`, `fld_universityid`, `fld_fee`, `fld_duration`, `fld_eligibility_criteria`, `fld_modeofdelhivery`, `fld_featured`, `fld_coursehighlight`, `fld_benifits`, `fld_eligibilityinfo`, `fld_curriculum`, `fld_uploadfile`, `fld_addedon`, `fld_status`) VALUES
(2, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '<ul>\r\n	<li>\r\n	<h3>Fundamentals Of SEM</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Flexibility In Learning</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Display Campaigns Using Google AdWords</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Industry Recognized Certificate</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Practice Quizzes And MCQs</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Job Opportunities</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'aparindia.docx', '07-03-2016', 'Active'),
(3, 'BAC', '2', 1, '9666', '2 Years', '10 + 2 Pass', 'Class Room', 0, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '<ul>\r\n	 <li>\r\n	 <h3>Fundamentals Of SEM</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	 \r\n	<li>\r\n	 <h3>Flexibility In Learning</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	 \r\n	 \r\n	  <li>\r\n	 <h3>Display Campaigns Using Google AdWords</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	 \r\n	<li>\r\n	 <h3>Industry Recognized Certificate</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	 \r\n	 \r\n	  <li>\r\n	 <h3>Practice Quizzes And MCQs</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	 \r\n	<li>\r\n	 <h3>Job Opportunities</h3>\r\n	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	 </li>\r\n	\r\n	</ul>', '<ul class=\"sectionlist\">\r\n						<li><span>32 hours of Instructor-led Training</span></li>\r\n						<li><span>29 hours of High Quality E-Learning content</span></li>\r\n						<li><span>137 End-of-Chapter Quizzes & 2 Simulation Exams each</span></li>\r\n						<li><span>3 Industry Case studies and 20 Real world industry examples</span></li>\r\n						<li><span>PRINCE2® Foundation and Practitioner Exam Fee Included</span></li>\r\n						<li><span>98.6% Pass rate</span></li>\r\n				  \r\n				  </ul>', '<div class=\"accordion1\">\r\n      <h3 class=\"panel-title\"><span class=\"text1\">1</span>Beginner\'s Module</h3>\r\n      <div class=\"panel-content\">\r\n       <ul class=\"sectionlist\" style=\"padding-left:10px;\">\r\n						<li><span>Getting Started</span></li>\r\n						<li><span>Introduction to AdWords</span></li>\r\n						<li><span>Account Management</span></li>\r\n						<li><span>Campaign and Ad Group Management</span></li>\r\n						<li><span>A Quick Quiz</span></li>\r\n						<li><span>Keyword Targeting</span></li>\r\n				  \r\n				  </ul>\r\n      </div>\r\n	  \r\n	   <h3 class=\"panel-title\"><span class=\"text1\">2</span>Beginner\'s Module</h3>\r\n      <div class=\"panel-content\">\r\n       <ul class=\"sectionlist\" style=\"padding-left:10px;\">\r\n						<li><span>Getting Started</span></li>\r\n						<li><span>Introduction to AdWords</span></li>\r\n						<li><span>Account Management</span></li>\r\n						<li><span>Campaign and Ad Group Management</span></li>\r\n						<li><span>A Quick Quiz</span></li>\r\n						<li><span>Keyword Targeting</span></li>\r\n				  \r\n				  </ul>\r\n      </div>\r\n    	  \r\n		   <h3 class=\"panel-title\"><span class=\"text1\">3</span>Beginner\'s Module</h3>\r\n      <div class=\"panel-content\">\r\n       <ul class=\"sectionlist\" style=\"padding-left:10px;\">\r\n						<li><span>Getting Started</span></li>\r\n						<li><span>Introduction to AdWords</span></li>\r\n						<li><span>Account Management</span></li>\r\n						<li><span>Campaign and Ad Group Management</span></li>\r\n						<li><span>A Quick Quiz</span></li>\r\n						<li><span>Keyword Targeting</span></li>\r\n				  \r\n				  </ul>\r\n      </div>\r\n		  \r\n	 \r\n	  \r\n  </div>', 'images (6).jpg', '07-03-2016', 'Active'),
(4, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '<ul>\r\n	<li>\r\n	<h3>Fundamentals Of SEM</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Flexibility In Learning</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Display Campaigns Using Google AdWords</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Industry Recognized Certificate</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Practice Quizzes And MCQs</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Job Opportunities</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'download.jpg', '07-03-2016', 'Active'),
(7, 'Superintendent\'s Report', '10', 9, '341232', '10', '2 Years', 'Class Room', 0, '<p>qweqwe qeq</p>\r\n', '<ul>\r\n	<li>\r\n	<h3>Fundamentals Of SEM</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Flexibility In Learning</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Display Campaigns Using Google AdWords</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Industry Recognized Certificate</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Practice Quizzes And MCQs</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Job Opportunities</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'women.jpg', '19-03-2016', 'Active'),
(8, 'BBA', '3', 1, '50000', '3 Years', '10 + 2 Pass', 'Class Room', 1, '<p>BBA</p>\r\n', '<ul>\r\n	<li>\r\n	<h3>Fundamentals Of SEM</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Flexibility In Learning</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Display Campaigns Using Google AdWords</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Industry Recognized Certificate</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Practice Quizzes And MCQs</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n	<li>\r\n	<h3>Job Opportunities</h3>\r\n\r\n	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'images (6).jpg', '23-03-2016', 'Active'),
(9, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'images (8).jpg', '07-03-2016', 'Active'),
(10, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'download.jpg', '07-03-2016', 'Active'),
(11, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'images (8).jpg', '07-03-2016', 'Active'),
(12, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'download.jpg', '07-03-2016', 'Active'),
(13, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'images (8).jpg', '07-03-2016', 'Active'),
(14, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'download.jpg', '07-03-2016', 'Active'),
(15, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>\r\n', '', '<ul>\r\n	<li>32 hours of Instructor-led Training</li>\r\n	<li>29 hours of High Quality E-Learning content</li>\r\n	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>\r\n	<li>3 Industry Case studies and 20 Real world industry examples</li>\r\n	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>\r\n	<li>98.6% Pass rate</li>\r\n</ul>\r\n', '<div class=\"accordion1\">\r\n<h3>1Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>2Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>3Beginner&#39;s Module</h3>\r\n\r\n<div class=\"panel-content\">\r\n<ul>\r\n	<li>Getting Started</li>\r\n	<li>Introduction to AdWords</li>\r\n	<li>Account Management</li>\r\n	<li>Campaign and Ad Group Management</li>\r\n	<li>A Quick Quiz</li>\r\n	<li>Keyword Targeting</li>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'images (8).jpg', '07-03-2016', 'Active'),
(16, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(17, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(18, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(19, 'BAC', '2', 1, '9666', '2 Years', '10 + 2 Pass', 'Class Room', 0, '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active'),
(20, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(23, 'BBA', '8', 1, '50000', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active'),
(24, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(25, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(26, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(27, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(28, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(29, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(30, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(31, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(32, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(33, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(34, 'BAC', '2', 1, '9666', '2 Years', '10 + 2 Pass', 'Class Room', 0, '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active'),
(35, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(38, 'BBA', '8', 1, '50000', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active'),
(39, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(40, 'M.COM', '11', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(41, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(42, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(43, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(44, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(45, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(46, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(47, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(48, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(49, 'BAC', '2', 1, '9666', '2 Years', '10 + 2 Pass', 'Class Room', 0, '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active'),
(50, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(53, 'BBA', '8', 1, '50000', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active'),
(54, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(55, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(56, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(57, 'M.COM', '11', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(58, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(59, 'M.COM', '2', 1, '96600', '3 Years', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'download.jpg', '07-03-2016', 'Active'),
(60, 'MCA', '3', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active'),
(61, 'MCA', '4,11,5,3,10,12,6,2', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(62, 'MCA', '11', 1, '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', 1, '', '', '', '', '', '07-03-2016', 'Active'),
(63, 'test courser', '4,5,3,10,12,6,2', 1, '111', '11', '1111', 'Class Room', 1, '<p>11111</p>\r\n', '<p>111</p>\r\n', '<p>111</p>\r\n', '<p>111</p>\r\n', 'PGD sales _ Brochure.docx', '26-04-2016', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `fld_id` int(11) NOT NULL,
  `fld_cityid` int(11) NOT NULL,
  `fld_district` varchar(255) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` varchar(1000) NOT NULL,
  `fld_image_cat` varchar(1000) NOT NULL,
  `fld_image` varchar(1000) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`fld_id`, `fld_company_id`, `fld_image_cat`, `fld_image`, `fld_status`) VALUES
(9, '5', '1', 'AERO29241472296205.png', 1),
(8, '4', '1', 'AERO37691472296078.jpg', 1),
(7, '3', '3', 'AERO94251472295987.jpg', 1),
(6, '3', '1', 'AERO94211472295976.jpg', 1),
(10, '6', '1', 'AERO48871472296381.JPG', 1),
(11, '6', '3', 'AERO73921472296396.JPG', 1),
(12, '7', '1', 'AERO60811472296555.JPG', 1),
(13, '7', '3', 'AERO3131472296567.JPG', 1),
(14, '8', '1', 'AERO12401472296626.jpg', 1),
(15, '8', '3', 'AERO65151472296633.jpg', 1),
(16, '9', '1', 'AERO18691472296702.jpg', 1),
(17, '10', '1', 'AERO79521472296792.jpg', 1),
(18, '10', '2', 'AERO46691472296801.jpg', 1),
(19, '10', '3', 'AERO40521472296813.jpg', 1),
(20, '11', '1', 'AERO24461472297005.jpg', 1),
(21, '12', '1', 'AERO87161472297073.jpg', 1),
(22, '12', '2', 'AERO74701472297084.jpg', 1),
(23, '13', '1', 'AERO24081472297206.jpg', 1),
(24, '13', '2', 'AERO23271472297213.jpg', 1),
(25, '13', '3', 'AERO58401472297222.jpg', 1),
(26, '14', '1', 'AERO65621472297301.jpeg', 1),
(27, '15', '1', 'AERO91951472297369.jpg', 1),
(28, '16', '1', 'AERO53151472297425.jpg', 1),
(29, '16', '2', 'AERO69671472297434.jpg', 1),
(30, '18', '1', 'AERO80531472297527.JPG', 1),
(31, '19', '1', 'AERO61131472297641.JPG', 1),
(32, '19', '3', 'AERO21391472297659.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ecomm`
--

CREATE TABLE `tbl_ecomm` (
  `fld_id` int(11) NOT NULL,
  `fld_email` varchar(255) NOT NULL,
  `fld_password` varchar(255) NOT NULL,
  `fld_company_name` varchar(255) NOT NULL,
  `fld_website_url` varchar(255) NOT NULL,
  `fld_business_type` varchar(50) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_phone` varchar(50) NOT NULL,
  `fld_mobile` varchar(50) NOT NULL,
  `fld_fax` varchar(50) NOT NULL,
  `fld_address` varchar(255) NOT NULL,
  `fld_city` varchar(255) NOT NULL,
  `fld_state` varchar(255) NOT NULL,
  `fld_pincode` varchar(50) NOT NULL,
  `fld_country` varchar(255) NOT NULL,
  `fld_reg_date` datetime NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_desc` varchar(255) NOT NULL,
  `fld_ecommhub` text NOT NULL,
  `fld_investment` text NOT NULL,
  `fld_services` text NOT NULL,
  `fld_companies` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_host_name` varchar(255) NOT NULL,
  `fld_location` varchar(255) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_time` varchar(50) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_description` varchar(255) NOT NULL,
  `fld_meta_title` varchar(255) NOT NULL,
  `fld_meta_description` varchar(255) NOT NULL,
  `fld_meta_keywords` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exp_section`
--

CREATE TABLE `tbl_exp_section` (
  `fld_id` int(11) NOT NULL,
  `fld_email` varchar(255) NOT NULL,
  `fld_password` varchar(255) NOT NULL,
  `fld_company_name` varchar(255) NOT NULL,
  `fld_international_certification` varchar(255) NOT NULL,
  `fld_website_url` varchar(255) NOT NULL,
  `fld_business_type` varchar(50) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_phone` varchar(50) NOT NULL,
  `fld_mobile` varchar(50) NOT NULL,
  `fld_fax` varchar(50) NOT NULL,
  `fld_address` varchar(255) NOT NULL,
  `fld_district` varchar(255) NOT NULL,
  `fld_city` varchar(255) NOT NULL,
  `fld_state` varchar(255) NOT NULL,
  `fld_pincode` varchar(50) NOT NULL,
  `fld_country` varchar(255) NOT NULL,
  `fld_reg_date` datetime NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_desc` varchar(255) NOT NULL,
  `fld_ecommhub` text NOT NULL,
  `fld_investment` text NOT NULL,
  `fld_services` text NOT NULL,
  `fld_companies` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(250) DEFAULT NULL,
  `fld_desc` text,
  `fld_status` varchar(20) DEFAULT 'Active',
  `fld_posted` date DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`fld_id`, `fld_title`, `fld_desc`, `fld_status`, `fld_posted`) VALUES
(4, 'Chinese Exhibition information is abundant here', 'Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us. Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us', 'Active', '2016-06-22'),
(5, 'Chinese Exhibition information is abundant here', 'Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us. Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us', 'Active', '2016-06-22'),
(6, 'Chinese Exhibition information is abundant here', 'Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us. Chinese Exhibition information is abundant here. If you are interested in business opportunities from them just follow us', 'Active', '2016-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `fld_id` int(10) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`fld_id`, `fld_image`, `fld_status`) VALUES
(25, 'AERO83661521694794.png', 'Active'),
(24, 'AERO5111521694790.png', 'Active'),
(23, 'AERO16351521694786.png', 'Active'),
(22, 'AERO50721521694781.png', 'Active'),
(21, 'AERO1311521694776.png', 'Active'),
(20, 'AERO65881521694766.png', 'Active'),
(19, 'AERO17311521694762.png', 'Active'),
(18, 'AERO9991521694757.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `fld_id` int(11) NOT NULL,
  `fld_mtitle` varchar(255) DEFAULT NULL,
  `fld_mkeywords` text,
  `fld_mdesc` text,
  `fld_cmstitle` varchar(255) DEFAULT NULL,
  `fld_title` varchar(255) DEFAULT NULL,
  `fld_desc` longblob,
  `fld_seo_url` varchar(255) DEFAULT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_createdon` datetime DEFAULT NULL,
  `fld_status` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`fld_id`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_cmstitle`, `fld_title`, `fld_desc`, `fld_seo_url`, `fld_image`, `fld_createdon`, `fld_status`) VALUES
(12, 'Address', 'Address', 'Address', NULL, 'Address', 0x266c743b702667743b266c743b7374726f6e672667743b4d722e20556461792050726174617026616d703b6e6273703b284469726563746f7229266c743b2f7374726f6e672667743b266c743b2f702667743b0d0a0d0a266c743b702667743b266c743b7374726f6e672667743b50686f6e65266c743b2f7374726f6e672667743b26616d703b6e6273703b3a202b39312d313234202d20343733323336392f34373636373531266c743b6272202f2667743b0d0a266c743b7374726f6e672667743b4d6f62696c65266c743b2f7374726f6e672667743b26616d703b6e6273703b3a202b39312d39393130313436303633266c743b2f702667743b0d0a0d0a266c743b702667743b456d61692069643a207564617940696d70657269616c74656368736f6c2e636f6d266c743b6272202f2667743b0d0a26616d703b6e6273703b266c743b2f702667743b0d0a0d0a266c743b702667743b266c743b7374726f6e672667743b416464726573733a266c743b2f7374726f6e672667743b266c743b2f702667743b0d0a0d0a266c743b702667743b266c743b7374726f6e672667743b436f7270204f66666963653a266c743b2f7374726f6e672667743b26616d703b6e6273703b556e6974206e6f2d3331322c20546f7765722d42342c5370617a6520492054656368205061726b266c743b6272202f2667743b0d0a53686f6e6120526f61642c20536563746f72202d2034392c2047757267616f6e266c743b2f702667743b0d0a0d0a266c743b702667743b26616d703b6e6273703b266c743b2f702667743b0d0a0d0a266c743b702667743b266c743b7374726f6e672667743b576562266c743b2f7374726f6e672667743b26616d703b6e6273703b3a207777772e696d70657269616c74656368736f6c2e636f6d266c743b2f702667743b0d0a0d0a266c743b702667743b26616d703b6e6273703b266c743b2f702667743b0d0a0d0a266c743b702667743b266c743b7374726f6e672667743b266c743b7374726f6e672667743b4272616e63686573203a26616d703b6e6273703b266c743b2f7374726f6e672667743b266c743b2f7374726f6e672667743b26616d703b6e6273703b44656c68692c2050756e6a61622c205061746e612c204b6f6c6b6174612c204d756d6261692c20487964657261626164266c743b2f702667743b0d0a, NULL, '', NULL, 1),
(10, 'ABOUT US', 'ABOUT US', 'ABOUT US', NULL, 'ABOUT US', 0x266c743b64697620636c6173733d2671756f743b636f6c2d6d642d313220746578742d6a7573746966792671756f743b2667743b0d0a266c743b64697620636c6173733d2671756f743b636f6c2d6d642d31322070642d302671756f743b2667743b0d0a266c743b68322667743b434f4d50414e592050524f46494c45266c743b2f68322667743b0d0a0d0a266c743b70207374796c653d2671756f743b746578742d616c69676e3a6a7573746966792671756f743b2667743b576974682070616e20496e6469612070726573656e63652c2077652c20266c743b7374726f6e672667743b496d70657269616c2054656368736f6c205076742e204c74642e266c743b2f7374726f6e672667743b2068617665206265636f6d65207468652070726566657272656420696e746567726174656420736f6c7574696f6e7320636f6d70616e792e20436f6d6d69746d656e7420746f2068696768207175616c697479207374616e646172647320616e6420737570706f727420686173206561726e656420757320612072657075746174696f6e206f6620737570706c6965722026616d703b616d703b20747261646572206f662050726f6a6563746f72732c20436f70696572732c20266c743b6120687265663d2671756f743b687474703a2f2f7777772e696d70657269616c74656368736f6c2e636f6d2f6c66642d6c617267652d666f726d6174652d646973706c61792e7068702671756f743b2667743b4c6172676520466f726d617420446973706c617973266c743b2f612667743b2c20266c743b6120687265663d2671756f743b687474703a2f2f7777772e696d70657269616c74656368736f6c2e636f6d2f626f6172642d726f6f6d2d636f6e666572656e63652e7068702671756f743b2667743b426f61726420526f6f6d20536f6c7574696f6e73266c743b2f612667743b206574632e20576520776f726b20746f7761726473206578706c6f72696e6720616e6420696e74726f647563696e67206e65772077617973206f6620696d70726f76696e67207573657220696e746572616374696f6e207468726f75676820746563686e6f6c6f677920616e6420736f6c7574696f6e732e20467572746865722c20737570706f7274206f662074616c656e74656420616e6420657870657269656e63656420706572736f6e6e656c20616c6c6f777320757320746f206265636f6d652061206c656164696e6720706c6179657220696e2074686520646f6d61696e206f6620746563686e6f6c6f677920646973747269627574696f6e2e266c743b2f702667743b0d0a266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6c2d6d642d31322070642d302671756f743b2667743b0d0a266c743b64697620636c6173733d2671756f743b636f6c2d6d642d3820706c2d302671756f743b2667743b0d0a266c743b68332667743b436f6d70616e79204661637473266c743b2f68332667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b7461626c652671756f743b2667743b0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b4e6174757265206f6620427573696e657373266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b495420536f6c7574696f6e20616e64205365727669636573266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b59656172206f662045737461626c6973686d656e74266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b32303134266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b4e6f2e206f6620456d706c6f79656573266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b3735266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b437265646974205261746564266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b59657320284341524529266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b57617265686f7573696e6720466163696c697479266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b596573266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d66616374732671756f743b2667743b4272616e6368204f666669636573266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6d70616e792d6661637473322671756f743b2667743b44656c68692c2047757267616f6e2c204d756d6261692c205061746e612c20487964657261626164266c743b2f6469762667743b0d0a266c743b2f6469762667743b0d0a266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6c2d6d642d342070726f647563742d72616e676520706c2d302671756f743b2667743b0d0a266c743b68332667743b50726f647563742052616e6765266c743b2f68332667743b0d0a0d0a266c743b756c2667743b0d0a09266c743b6c692667743b5068696c697073202f204c4720566964656f2057616c6c266c743b2f6c692667743b0d0a09266c743b6c692667743b5068696c697073202f204c47204469676974616c205369676e61676520536f6c7574696f6e266c743b2f6c692667743b0d0a09266c743b6c692667743b566964656f2057616c6c20436f6e74726f6c6c6572266c743b2f6c692667743b0d0a09266c743b6c692667743b50726f6a6563746f7273266c743b2f6c692667743b0d0a09266c743b6c692667743b436f7069657273202f205072696e746572266c743b2f6c692667743b0d0a09266c743b6c692667743b566964656f20436f6e666572656e63696e672053797374656d266c743b2f6c692667743b0d0a09266c743b6c692667743b536572766572202f204465736b746f70202f204c6170746f70266c743b2f6c692667743b0d0a09266c743b6c692667743b536d61727420436c61737320526f6f6d20536f6c7574696f6e266c743b2f6c692667743b0d0a09266c743b6c692667743b426f61726420526f6f6d20536f6c7574696f6e73266c743b2f6c692667743b0d0a09266c743b6c692667743b54696d6520417474656e64616e6365202f2042696f6d65747269632053797374656d266c743b2f6c692667743b0d0a09266c743b6c692667743b43435456205375727665696c6c616e636520616e642073656375726974696573266c743b2f6c692667743b0d0a09266c743b6c692667743b4f6e6c696e6520555053266c743b2f6c692667743b0d0a266c743b2f756c2667743b0d0a266c743b2f6469762667743b0d0a266c743b2f6469762667743b0d0a0d0a266c743b64697620636c6173733d2671756f743b636f6c2d6d642d31322070642d302671756f743b2667743b0d0a266c743b68332667743b5768792043686f6f73652055733f266c743b2f68332667743b0d0a0d0a266c743b70207374796c653d2671756f743b746578742d616c69676e3a6a7573746966792671756f743b2667743b5765206861766520707574206f7572206265737420666f6f7420666f727761726420746f20616368696576652061207369676e69666963616e7420706f736974696f6e20696e2074686520696e6475737472792c20776869636820616c736f207265666c6563747320696e206f75722063757272656e7420696e647573747269616c20706f736974696f6e2e20466f6c6c6f77696e67206172652074686520666163746f7273207468617420706c6179206120766974616c20726f6c6520696e206f757220696e647573747269616c20737563636573732e266c743b2f702667743b0d0a0d0a266c743b756c2667743b0d0a09266c743b6c692667743b4574686963616c20627573696e65737320707261637469636573266c743b2f6c692667743b0d0a09266c743b6c692667743b5472616e73706172656e7420627573696e657373206465616c73266c743b2f6c692667743b0d0a09266c743b6c692667743b446f6d61696e20657870657274697365266c743b2f6c692667743b0d0a09266c743b6c692667743b547275737465642076656e646f7273266c743b2f6c692667743b0d0a09266c743b6c692667743b536f706869737469636174656420696e667261737472756374757265266c743b2f6c692667743b0d0a09266c743b6c692667743b457863656c6c656e742070726f66657373696f6e616c73266c743b2f6c692667743b0d0a09266c743b6c692667743b4d6178696d756d207175616c697479266c743b2f6c692667743b0d0a09266c743b6c692667743b50726f6d70742064656c6976657279206f66206f7264657273266c743b2f6c692667743b0d0a09266c743b6c692667743b436c69656e7420736174697366616374696f6e266c743b2f6c692667743b0d0a266c743b2f756c2667743b0d0a266c743b2f6469762667743b0d0a266c743b2f6469762667743b0d0a, NULL, '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` int(11) NOT NULL,
  `fld_catid` int(11) NOT NULL,
  `fld_subcatid` int(11) NOT NULL,
  `fld_subsubcatid` int(11) NOT NULL,
  `fld_product_code` varchar(255) NOT NULL,
  `fld_product_name` varchar(255) NOT NULL,
  `fld_product_model` varchar(1000) NOT NULL,
  `fld_product_category` varchar(1000) NOT NULL,
  `fld_product_price` varchar(1000) NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_short_desc` text NOT NULL,
  `fld_desc` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_added_on` datetime NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active',
  `fld_featured` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`fld_id`, `fld_company_id`, `fld_catid`, `fld_subcatid`, `fld_subsubcatid`, `fld_product_code`, `fld_product_name`, `fld_product_model`, `fld_product_category`, `fld_product_price`, `fld_seourl`, `fld_image`, `fld_short_desc`, `fld_desc`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_added_on`, `fld_status`, `fld_featured`) VALUES
(8, 1, 1, 2, 0, '-', 'Video Wall', '-', '-', '-', 'video-wall', '', '-', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Laser video walls</strong><br />\r\n			Are you tired of the dim lighting in the control room? Wouldn&rsquo;t you rather open the curtains to let daylight in? You probably would, but then the operators wouldn&rsquo;t be able to distinguish all of the details on the video wall. Barco comes with the solution: a video wall that delivers 2x more brightness than mainstream rear-projection video walls, but still provides great image quality and more than 11 years of uninterrupted lifetime in 24/7 mode.</td>\r\n			<td><img src=\"http://www.imperialtechsol.com/images/old.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>LED rear-projection video walls</strong><br />\r\n			Imperial TechSol portfolio of LED-lit rear-projection video walls consists of the industry-standard OverView M series and the full-featured, fully redundant OverView O series. Available in a vast variety of screen sizes and formats, Video walls suit every small, medium and large sized control room. The new OSV range, based on the O series&#39; technology, introduces a large, perfectly seamless canvas for in-depth collaboration and Big Data evaluation.</td>\r\n			<td><img src=\"http://www.imperialtechsol.com/images/mvl.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>LCD Video walls</strong><br />\r\n			Imperial TechSol professional-grade, high-resolution LCD displays are the perfect solution for tiled video wall applications in small to medium-sized control rooms.</p>\r\n\r\n			<p>The OverView series comprises 46&quot; and 55&quot; LCD displays with LED backlights, combining high brightness and a wide color gamut with an extremely narrow bezel for excellent tiled visual performance.</p>\r\n			</td>\r\n			<td><img src=\"http://www.imperialtechsol.com/images/NSL-4601.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Video Wall', 'Video Wall', 'Video Wall', '2017-09-20 04:10:32', 'Active', 0),
(5, 0, 9, 10, 12, 'hjh', 'hj', 'jh', 'jhj', 'hj', 'hj', '', 'hjh', '<p>hhj</p>\r\n', 'hjhj', 'hj', 'hj', '2017-09-20 03:50:10', 'Active', 0),
(6, 0, 9, 10, 13, 'hj', 'hj', 'hj', 'hj', 'hj', 'hj_1', '', 'hj', '<p>hj</p>\r\n', 'gh', 'gh', 'gh', '2017-09-20 03:50:37', 'Active', 0),
(7, 0, 9, 10, 12, 'hj', 'hj', 'hj', 'hj', 'hj', 'hj_2', '', 'hj', '<p>hj</p>\r\n', 'hjh', 'hj', 'hj', '2017-09-20 03:51:17', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` varchar(1000) NOT NULL,
  `fld_image_cat` varchar(1000) NOT NULL,
  `fld_image` varchar(1000) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `fld_id` int(11) NOT NULL,
  `fld_province` varchar(255) NOT NULL,
  `fld_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_province`
--

INSERT INTO `tbl_province` (`fld_id`, `fld_province`, `fld_status`) VALUES
(1, 'Anhui', 1),
(2, 'Hubei', 1),
(3, 'Henan', 1),
(4, 'Hebei', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_selloffer`
--

CREATE TABLE `tbl_selloffer` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` int(11) NOT NULL,
  `fld_catid` int(11) NOT NULL,
  `fld_subcatid` int(11) NOT NULL,
  `fld_product_code` varchar(255) NOT NULL,
  `fld_product_name` varchar(255) NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_short_desc` text NOT NULL,
  `fld_desc` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(255) NOT NULL,
  `fld_mdesc` varchar(255) NOT NULL,
  `fld_added_on` datetime NOT NULL,
  `fld_expire` datetime NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active',
  `fld_featured` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_selloffer`
--

INSERT INTO `tbl_selloffer` (`fld_id`, `fld_company_id`, `fld_catid`, `fld_subcatid`, `fld_product_code`, `fld_product_name`, `fld_seourl`, `fld_image`, `fld_short_desc`, `fld_desc`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_added_on`, `fld_expire`, `fld_status`, `fld_featured`) VALUES
(1, 3, 10, 16, '3156258366', 'emamectin benzoate', 'sdfasdf', '1IMG2016174112914.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:06:22', '2016-06-21 00:00:00', 'Active', 0),
(3, 3, 10, 17, '3634836493', 'emamectin benzoate', 'emamectin-benzoate_1', '1IMG20161305115IMG2016140759604.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:07:34', '2016-06-21 00:00:00', 'Active', 0),
(4, 3, 10, 18, '8148277424', 'emamectin benzoate', 'emamectin-benzoate_2', '1IMG20161305115IMG2016141612305.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:07:59', '2016-06-21 00:00:00', 'Active', 0),
(5, 3, 11, 23, '6153935931', 'emamectin benzoate', 'emamectin-benzoate_3', '1IMG20161305115IMG2016141950625.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:19:50', '2016-06-21 00:00:00', 'Active', 0),
(6, 3, 12, 28, '9529527671', 'emamectin benzoate', 'emamectin-benzoate_4', '1IMG20161305115IMG2016141958434.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:19:58', '2016-06-23 00:00:00', 'Active', 0),
(7, 3, 13, 37, '4578336643', 'emamectin benzoate', 'emamectin-benzoate_5', '1IMG20161305115IMG2016142005381.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:20:05', '2016-06-24 00:00:00', 'Active', 0),
(8, 1, 10, 18, '4731745998', 'emamectin benzoate', 'emamectin-benzoate_6', '1IMG20161305115IMG2016141632560.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:16:12', '2016-06-21 00:00:00', 'Active', 0),
(9, 1, 10, 18, '4329756568', 'emamectin benzoate', 'emamectin-benzoate_7', '1IMG20161305115IMG2016141714798.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 02:19:20', '2016-06-29 00:00:00', 'Active', 0),
(10, 1, 13, 37, '6603897750', 'Shuttering Plywood', 'shuttering-plywood', '1IMG20161305115IMG2016141739623.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'Shuttering Plywood', 'Shuttering Plywood', 'Shuttering Plywood', '2016-06-17 02:19:27', '2016-06-30 00:00:00', 'Active', 0),
(11, 1, 15, 51, '9586507952', 'Shuttering Plywood', 'shuttering-plywood_1', '1IMG20161305115IMG2016141854965.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'Shuttering Plywood', 'Shuttering Plywood', 'Shuttering Plywood', '2016-06-17 02:18:54', '2016-06-23 00:00:00', 'Active', 0),
(12, 1, 13, 36, '2445897855', 'Shuttering Plywood', 'shuttering-plywood_2', '1IMG20161305115IMG2016141901906.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'Shuttering Plywood', 'Shuttering Plywood', 'Shuttering Plywood', '2016-06-17 02:19:01', '2016-06-23 00:00:00', 'Active', 0),
(13, 1, 13, 37, '7747708091', 'Shuttering Plywood', 'shuttering-plywood_3', '1IMG20161305115IMG2016141907935.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'Shuttering Plywood', 'Shuttering Plywood', 'Shuttering Plywood', '2016-06-17 02:19:07', '2016-06-29 00:00:00', 'Active', 0),
(14, 4, 10, 16, '3452738585', 'emamectin benzoate', 'emamectin-benzoate_8', '1IMG2016174206462.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:41:12', '2016-06-21 00:00:00', 'Active', 0),
(15, 5, 13, 37, '4599566488', 'emamectin benzoate', 'emamectin-benzoate_9', '1IMG2016174242898.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:42:06', '2016-06-29 00:00:00', 'Active', 0),
(16, 5, 13, 38, '9517516316', 'emamectin benzoate', 'emamectin-benzoate_10', '1IMG2016174311327.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:42:42', '2016-06-30 00:00:00', 'Active', 0),
(17, 6, 13, 38, '5968376962', 'emamectin benzoate', 'emamectin-benzoate_11', '1IMG201617435295.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:43:11', '2016-07-08 00:00:00', 'Active', 0),
(18, 7, 13, 38, '3284386656', 'emamectin benzoate', 'emamectin-benzoate_12', '1IMG2016174652592.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:46:52', '2016-07-08 00:00:00', 'Active', 0),
(19, 8, 13, 38, '1275016478', 'emamectin benzoate', 'emamectin-benzoate_13', '1IMG2016174638877.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:46:38', '2016-07-06 00:00:00', 'Active', 0),
(20, 9, 11, 22, '2526627448', 'emamectin benzoate', 'emamectin-benzoate_14', '1IMG2016174625743.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:46:25', '2016-07-04 00:00:00', 'Active', 0),
(21, 10, 15, 48, '2781737194', 'emamectin benzoate', 'emamectin-benzoate_15', '1IMG2016174612198.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:46:12', '2016-07-15 00:00:00', 'Active', 0),
(22, 11, 15, 51, '5759208020', 'emamectin benzoate', 'emamectin-benzoate_16', 'fairIMG2016174601701.png', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:46:01', '2016-07-28 00:00:00', 'Active', 0),
(23, 12, 15, 51, '8207977540', 'emamectin benzoate', 'emamectin-benzoate_17', '1IMG2016174542736.jpg', 'Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, & other south indian/kerala delicacies.', '<p>Banana chips, tapioca chips, kerala mixtures, murukku (round or stick), peanut candies, boondi laddu, kerala pappad, pickles, curry powders, sun dried prawn fish, vattu kappa, vettu kappa, &amp; other south indian/kerala delicacies.</p>\r\n', 'emamectin benzoate', 'emamectin benzoate', 'emamectin benzoate', '2016-06-17 05:45:42', '2016-07-22 00:00:00', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `fld_id` int(11) NOT NULL,
  `fld_company_id` int(11) NOT NULL,
  `fld_catid` int(11) NOT NULL,
  `fld_subcatid` int(11) NOT NULL,
  `fld_catagory` varchar(100) NOT NULL,
  `fld_product_code` varchar(255) NOT NULL,
  `fld_product_name` varchar(255) NOT NULL,
  `fld_price` varchar(255) NOT NULL,
  `fld_duration` varchar(255) NOT NULL,
  `fld_destination` varchar(255) NOT NULL,
  `fld_seourl` varchar(255) NOT NULL,
  `fld_image` varchar(255) NOT NULL,
  `fld_icon` varchar(255) NOT NULL,
  `fld_short_desc` text NOT NULL,
  `fld_desc` text NOT NULL,
  `fld_dignostic` text NOT NULL,
  `fld_repair` text NOT NULL,
  `fld_warranty` text NOT NULL,
  `fld_mtitle` varchar(255) NOT NULL,
  `fld_mkeywords` varchar(800) NOT NULL,
  `fld_mdesc` varchar(800) NOT NULL,
  `fld_added_on` datetime NOT NULL,
  `fld_top` int(11) NOT NULL DEFAULT '0',
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active',
  `fld_featured` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`fld_id`, `fld_company_id`, `fld_catid`, `fld_subcatid`, `fld_catagory`, `fld_product_code`, `fld_product_name`, `fld_price`, `fld_duration`, `fld_destination`, `fld_seourl`, `fld_image`, `fld_icon`, `fld_short_desc`, `fld_desc`, `fld_dignostic`, `fld_repair`, `fld_warranty`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_added_on`, `fld_top`, `fld_status`, `fld_featured`) VALUES
(1, 0, 0, 0, 'audio_video', '9394006690', 'Video Wal', '', '', '', 'video-wall', 'AERO20361522692068.jpg', '', '', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h2 style=\"text-align:center\">Video Wall suppliers</h2>\r\n\r\n			<p style=\"text-align:justify\">Be it your home or office or a commercial space, a video wall can successfully create stunning visuals without much ado! In today&#39;s technological and changing environment, promotions, lightings and interior decor stays incomplete without LED effects. Imperial Techsol is a portal to turn towards if you are searching for some LED Video wall from top brands. High quality image delivery along with light saving option is what Imperial Techsol <strong>Video Wall supplier</strong> offers you.</p>\r\n\r\n			<p style=\"text-align:justify\">We deal with various top brands from the multimedia and appliance market so as to make sure that whatever our customers buy from <strong>Video Wall supplier </strong>is nothing less than perfect.</p>\r\n\r\n			<p style=\"text-align:justify\">Why you may need LCD/<strong>LED Video Wall Supplier</strong>?</p>\r\n\r\n			<p style=\"text-align:justify\">LED video walls provide an excellent level of brightness and are highly reliable, creating stunning visual images anywhere. Due to the high resolution and small pixel pitch, the X HD series allows you to take advantage of <strong>LED Video Wall Supplier</strong> not only in typical applications, but also in others, for example in control rooms and in conference rooms.</p>\r\n			</td>\r\n			<td style=\"text-align:justify\"><img src=\"http://www.imperialtechsol.com/images/old.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">The most important part of the advertising design for most retail properties is the display case. Every owner of a store, travel agency or bank strives to make the showcase the brightest and most attractive, because it directly affects the attraction of new customers. Such efforts are always expensive, because after a while the exposition should be updated, and the services of professional designers are not cheap.</p>\r\n\r\n			<p style=\"text-align:justify\"><strong>Imperial Techsol LCD Video Wall supplier</strong> offers you an original and modern solution to this problem - modern information video walls. You will be able to change the design of your store at least once a day without additional financial costs.</p>\r\n\r\n			<p style=\"text-align:justify\">LED video wall is a set of assembled LCD panels, which, thanks to their configuration, work in concert and are essentially one large screen. <strong>LCD Video Wall supplier</strong> will allow you, to demonstrate your potential buyers video advertising of any type. These can be presentations, collages, commercials or images.</p>\r\n			</td>\r\n			<td style=\"text-align:justify\"><img src=\"http://www.imperialtechsol.com/images/mvl.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">Come to reliable <strong>Philips Video Wall supplier</strong> for best output</p>\r\n\r\n			<p style=\"text-align:justify\"><strong>LG Video Wall supplier </strong>will help you to choose the optimal characteristics of the advertising device for you, make installation and adjustment.</p>\r\n\r\n			<p style=\"text-align:justify\">We have extensive experience with LED devices of various complexity and purpose, so that in addition to promotional Led panels you can order the full range of LED advertising of any complexity: advertising line, pharmacy LED cross, a light-emitting diode panel or elements of illumination of facades and interiors of buildings.</p>\r\n\r\n			<p style=\"text-align:justify\"><strong>Narrow Bezel Video Wall supplier </strong>will be able to offer you the light design that suit the demands of your enterprise or commercial object from &quot;A&quot; to &quot;I&quot;, and you will not worry about how the design elements ordered in different places will harmonize. Many years of successful work in the market says a lot about the quality of our products. <strong>Philips Video Wall supplier </strong>will help your company to become brighter and more successful!</p>\r\n			</td>\r\n			<td style=\"text-align:justify\"><img src=\"http://www.imperialtechsol.com/images/NSL-4601.jpg\" style=\"height:170px; width:232px\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', 'Video Wall Supplier India | LED, LCD, LG, Philips Narrow Bezel Video Wall', 'Video Wall supplier, Video Wall supplier India LED Video Wall supplier, LCD Video Wall supplier, LG Video Wall supplier, Philips Video Wall supplier, Narrow Bezel Video Wall supplier, large tv', 'Imperial Techsol Pvt. Ltd we are top online suppliers of Video Wall, LED Video Wall, LCD Video Wall, LG Video Wall, Philips Video Wall, Narrow Bezel.', '2018-04-02 11:31:08', 0, 'Active', 0),
(2, 0, 0, 0, 'audio_video', '6978428309', 'Digital Signage System', '', '', '', 'signage-system', 'AERO9351521024111.jpg', '', '', '<p style=\"text-align:justify\">Digital Signage system supplier - Digital Signage technology consists of presenting information on electronic media, such as displays, projection systems located in crowded places - at stations, airports, transport, restaurants, hospitals, fitness clubs, and shopping complexes and even on the street.</p>\r\n\r\n<p style=\"text-align:justify\">The main task of Digital Signage display supplier is to effectively distribute advertising and information, with the ability to address the target audience in a specific place and at a certain time.</p>\r\n\r\n<p style=\"text-align:justify\">The key device in Digital Signage is a reliable media player with the software installed on it, and in creating a network computer from which the whole network is managed. Important functions fall on a media player with an integrated microprocessor, memory and a set of interfaces for connecting electronic displays and displays, which directly reproduces the image thus the player must meet the increased requirements for reliability, service life and operation.</p>\r\n\r\n<p style=\"text-align:justify\">Plasma and <a href=\"http://www.imperialtechsol.com/display-supplier.php\">LCD displays</a>, <a href=\"http://www.imperialtechsol.com/cinema-projector.php\">projectors</a>, LED signs and other equipment for displaying information are usually used to display information.</p>\r\n\r\n<h2 style=\"text-align:justify\">What are Digital Signage systems used for?</h2>\r\n\r\n<p style=\"text-align:justify\">The system of informing visitors to trade halls and centers, airports and railway stations, medical institutions, financial organizations, government bodies, sports facilities, representative offices and branches of companies:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Advertising;</li>\r\n	<li style=\"text-align:justify\">Information table;</li>\r\n	<li style=\"text-align:justify\">E-queue management, etc.</li>\r\n	<li style=\"text-align:justify\">Corporate information system:</li>\r\n	<li style=\"text-align:justify\">News;</li>\r\n	<li style=\"text-align:justify\">Marketing and HR materials;</li>\r\n	<li style=\"text-align:justify\">Notification of employees.</li>\r\n</ul>\r\n\r\n<h2 style=\"text-align:justify\">Contact Digital Signage System Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt. Ltd. is your one shop stop to buy all kinds and size of Digital Signage systems at affordable price range. We have been a leader in the world of Digital Signage suppliers for many years and want to continue this legacy for coming years. Contact us today to buy the best branded, and guarantee backup digital signage systems with us.</p>\r\n', '', '', '', 'Digital Signage System Supplier for Shopping Malls India - ImperialTechsol', 'Digital Signage system supplier, Digital Signage display supplier, Digital Signage System for Shopping Malls, Digital Signage, Digital Signage solution india ', 'Digital Signage System Supplier India - Imperial Techsol offers the Digital Signage supplier for shopping malls across India at best prices with free shipping at doorstep.', '2018-03-14 04:12:59', 0, 'Active', 0),
(3, 0, 0, 0, 'audio_video', '9112647966', 'LFD - Large Format Display', '', '', '', 'lfd--large-formate-display', 'AERO41211506021045.jpg', '', '', '<h2 style=\"text-align:justify\">Large Format Display Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Giant full color LED electronic display systems are high-tech multimedia productsthat mix optical, electronic and acoustic processing signals. To define your electronic screen well you need to know several characteristics offered by <strong>65&rdquo; display supplier</strong> for the electronic display.</p>\r\n\r\n<p style=\"text-align:justify\">Huge displays provide ways to advertise your brand as per your choice and needs. <strong>75-inch display supplier</strong> promotes products by showing them on the screen. <strong>Imperial Techsol Pvt. Ltd</strong> offers high-quality displays, outdoor displays and advertisement screens to create an overwhelming impact on the customers which will ultimately enhance your sale.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>75-inch display supplier</strong> offers a full range of LED-based displays for exterior signage as well as various applications that provide the best solution to your communication needs.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Imperial Techsol Pvt. Ltd</strong> offers a massive range of display screens that have:</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Variable information systems for drivers.</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Cross arrow traffic lights with LED technology for roads Light panels</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Solid construction, extensive experience in traffic screens, easy to read and without distraction for the driver or pedestrian.</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; From high resolution to monochrome displays, different shines and types of panels to choose.</p>\r\n\r\n<p style=\"text-align:justify\">Sale, construction, design, and installation your screen, from the hardware, software, your training and warranty market leader.</p>\r\n\r\n<h3 style=\"text-align:justify\">Mobile Signaling Units.</h3>\r\n\r\n<p style=\"text-align:justify\">Portable variable message panels (LEDs) are commonly used in inclement weather (activated by temperature sensors or radar sensors) and for the temporary control of traffic at fairs, shows, and other events. They can also be used in parking lots to indicate suggestions.</p>\r\n\r\n<h3 style=\"text-align:justify\">Highlights of Imperial Techsol Pvt. Ltd:</h3>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Experts in outdoor led displays, vials, for signage, easy reading, high brightness and weather resistance, durable and of the highest quality.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>&bull;&nbsp;&nbsp;&nbsp; </strong>65-inch display supplier advise you step by step so that you will make the best decision in the installation of your advertising street screen or external signage.</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp; Imperial Techsol Pvt. Ltd gives you guarantee and prices that other suppliers do not offer. <a name=\"_GoBack\"></a></p>\r\n', '', '', '', 'Large Format Display, LFD Supplier in Delhi India - ImperialTechsol', 'large format display supplier, large format display supplier in Delhi, large format display supplier India, lfd supplier online, lfd supplier india, lfd price ', 'Welcome to Imperial Techsol Pvt. Ltd we are based in Delhi, India we are one of the leading large format display supplier, LFD supplier in Delhi, India.', '2018-03-15 11:55:40', 0, 'Active', 0),
(4, 0, 0, 0, 'audio_video', '4748638290', 'Touch Screen Display Solution', '', '', '', 'touch-screen', 'AERO33921506021169.jpg', '', '', '<p style=\"text-align:justify\">Touchscreen technology is the direct manipulation type gesture based technology. Direct manipulation is the ability to manipulate digital world inside a screen without the use of command-line-commands. A device which works on touchscreen technology is coined as Touchscreen. A touchscreen is an electronic visual display capable of &lsquo;detecting&rsquo; and effectively &lsquo;locating&rsquo; a touch over its display area. It is sensitive to the touch of a human finger, hand, pointed finger nail and passive objects like stylus. Users can simply move things on the screen, scroll them, make them bigger and many more.<br />\r\n<br />\r\nThe Imperial Techsol panel portfolio offers the right solution for every application, from a simple keypad panel through mobile and stationary operator interfaces right up to a performant all-rounder &ndash; rugged, compact and multiple interface options. Brilliant display screens and error-free ergonomic operation with either keypad or a touch screen operator interfaces provide added value.<br />\r\n<br />\r\nA touch screen is a computer display screen that is also an input device. The screens are sensitive to pressure; a user interacts with the computer by touching pictures or words on the screen.</p>\r\n', '', '', '', 'Touch Screen Display Solution Supplier India - ImperialTechsol', 'touch screen display, touch screen display solution, touch screen display solution supplier, touch screen display solution supplier india', 'Touch Screen Display Solution suppliers in India. Imperial Techsol offers the touch screen display solution supplier in across Delhi, India at best price.', '2018-04-04 01:07:22', 0, 'Active', 0),
(5, 0, 0, 0, 'securityservilance', '9499797933', 'Multimedia Projectors', '', '', '', 'multimedia-projectors', 'AERO40381506021768.jpg', '', '', '<div>\r\n<h2>Multimedia Projector supplier</h2>\r\n</div>\r\n\r\n<p style=\"text-align:justify\">The projector is a light device that redistributes the light of a lamp with the concentration of light flux on a small-sized surface or in a small volume. Projectors are mainly opto-mechanical or optical-digital devices, allowing using a light source to project images of objects on a surface located outside the device, called a screen.</p>\r\n\r\n<p style=\"text-align:justify\">Now the prices for projectors for home viewing can be comparable with the prices for mobile phones and a good multimedia full HD projector to buy very easily!</p>\r\n\r\n<h2 style=\"text-align:justify\">How to choose a projector?</h2>\r\n\r\n<p style=\"text-align:justify\">The <strong>Multimedia Projector</strong> is a technically complex device with a lot of different settings and functions, so you need to approach the projector very carefully and clearly understand the goals for which the projector is purchased, so as not to throw money away.</p>\r\n\r\n<p style=\"text-align:justify\">The choice of a projector, first of all, depends on its purpose, because the requirements for an office projector and a projector for a home theatre are completely different than if you need a projector for the school. If you yourself do not understand the <strong>Multimedia Projector</strong>, but clearly represent for what purposes and you know where and in what conditions the projector will be used, then contact our specialist and he will help you to choose the optimal model.</p>\r\n\r\n<h3 style=\"text-align:justify\">Advantages of purchasing a projector on the website of our online store</h3>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol <strong>Multimedia Projector supplier</strong> has long been selling the full range of multimedia projection equipment. We have accumulated knowledge and experience, which we will gladly share with our customers, help in choosing, we will consult on any issues.</p>\r\n\r\n<p style=\"text-align:justify\">Whether it&#39;s projectors for home, or projectors for cinemas, choosing any equipment, you face the need to study the characteristics and features of equipment, our specialists will save your time.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Multimedia Projector supplier</strong> for home theatre should satisfy the needs of the client, and the price for such multimedia projector should not exceed the planned level of the budget. You can choose the full HD projector and observe the necessary balance right now simply by contacting us.</p>\r\n', '', '', '', 'Multimedia Projector Supplier, Multimedia Projector', 'Multimedia Projector supplier, Multimedia Projector', 'Welcome to Imperial Techsol Pvt. Ltd we are based in Delhi, India we are supplier and manufacturer of Multimedia Projector supplier, Multimedia Projector', '2018-03-20 01:40:29', 0, 'Active', 0),
(6, 0, 0, 0, 'audio_video', '8762517457', 'Video Conferencing System', '', '', '', 'video-conferencing-system', 'AERO42641506021825.jpg', '', '', '<p style=\"text-align: justify;\">With technologically advanced products, we help enterprises of all sizes and budgets to make their workplace more connected &ndash; irrespective of the their locational restraints due to global workforce and give rise to their budding business. With a variety of solutions, serving different purposes, we helps organizations in unlocking the potential of human collaboration.</p>\r\n\r\n<p style=\"text-align: justify;\">Depending upon the needs and the requirements of the business enterprises, we provide solutions for every need:</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Personal Collaboration Solutions &ndash;&nbsp;</strong>Avail the advantages of powerful collaboration solutions from any place and on any device of your choice.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Room Solutions &ndash;&nbsp;</strong>Room Solutions enable high quality audio, video collaboration and content sharing for conference rooms or meeting rooms requirements.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Immersive Solutions &ndash;</strong>&nbsp;These solutions help you get the real-time, lifelike experience so that the focus remains on the objective of the meeting and not on the type of technology used.</p>\r\n', '', '', '', 'Video Conferencing System', 'Video Conferencing System', 'Video Conferencing System', '2017-09-22 12:53:45', 0, 'Active', 0),
(7, 0, 0, 0, 'it_networking', '2841248150', 'Smart Classroom Solutions', '', '', '', 'classroom-solutions', 'AERO65471506021913.jpg', '', '', '<p style=\"text-align:justify\">Projectors are devices capable of projecting onto a large screen the information downloaded or transmitted to them. Classroom projectors are created to make the most comfortable and enjoyable viewing of various kinds of images, lectures or videos. They are used in offices or educational institutions to demonstrate presentations, and projectors can also be used at home for watching movies.</p>\r\n\r\n<p style=\"text-align:justify\">The price of the classroom projector depends on many factors and varies in a wide range. In the directory of the digital technology store DNS, you will find a variety of projector options - for any purpose and any purse. Projectors differ, first, by manufacturing technology. The most popular are LCD (using liquid crystals) and DLP (using a micromirror system).</p>\r\n\r\n<p style=\"text-align:justify\">Projectors also vary in size: they can be stationary, portable and ultraportable. The first ones will be suitable for use in large rooms, and the latter can be taken with you to travel because they have modest dimensions and weight. It is important to consider in choosing a projector, with what source of information it can work. Most projectors can interact with almost any multimedia device: computer, laptop, DVD player and others. At Imperial Techsol Pvt Ltd, we are one of the well known classroom projector supplier pan India.</p>\r\n\r\n<p style=\"text-align:justify\">Also on the market, you can increasingly buy a projector that supports communication with devices over Wi-Fi. Some projectors have 3D support, which will allow you to create a true home theater.</p>\r\n\r\n<p style=\"text-align:justify\">Also, while choosing, it is worth paying attention to such indicators as the contrast, resolution and image format. Regardless of whether you are going to purchase a home projector or a model for presentations, the DNS store will provide you with a wide selection of these devices. For the widest range of projectors, feel free to contact Classroom projector suppliers today!</p>\r\n', '', '', '', 'Smart Classroom Solutions, Digital Class Room Solutions Supplier India', 'smart classroom solutions, class room projector supplier, digital class room solution, smart class services in india, smart classroom solutions supplier', 'Smart Classroom Solutions Supplier- Imperial Techsol offers the smart class room projector, digital class room system supplier across India at best prices.', '2018-03-14 06:40:39', 0, 'Active', 0),
(11, 0, 0, 0, 'securityservilance', '2885397985', 'Door Access Control System | Door Entry System', '', '', '', 'door-access-control-system', 'AERO46231506022029.jpg', '', '', '<h2 style=\"text-align:justify\"><strong>DOOR ACCESS CONTROL SYSTEMS</strong></h2>\r\n\r\n<p style=\"text-align:justify\">This door won&#39;t open for everyone-that&#39;s the idea behind Door Access Systems. In other words, through these systems only authorized persons are allowed access to a particular area / or areas of a building. Door Access Systems are extremely cost effective way to provide a high level of security in homes and offices. These systems can be classified in the following categories: Finger ID and Proximity Technology</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>RETINA BASED DOOR ACCESS SYSTEM</strong></h3>\r\n\r\n<p style=\"text-align:justify\">This device pre-stored the person&#39;s eye color and its other physical features. When the person has to pass through a door, it scans his retina, matches it with the data stored and only then the door gets opened.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>PALM BASED DOOR ACES SYSTEM</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Here the person has to place his palm over the reader which on finding it similar to the one stored allows the person&#39;s entry.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>FINGER SCAN DOOR ACCESS SYSTEM</strong></h3>\r\n\r\n<p style=\"text-align:justify\">This state of art door access system, which is completely fool- proof. As it identifies the fingerprints and allows the access to only authorized persons.</p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>MAGNETIC SWIPE CARD SYSTEM WITH OR WITHOUT COLOURED PHITO-ID LAMNATED CARDS</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Here one has to insert a tamper-proof photo ID card into a reader, which scans it, and only then the person can enter the premises. These systems can work with or without computer connectivity and can be further used for Time Attendance with Pay Roll Accounting facility.<img src=\"http://www.imperialtechsol.com/images/door1.jpg\" style=\"float:right; height:209px; width:405px\" /></p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>PROXOMITY DOOR ACCESS STSTEM</strong></h4>\r\n\r\n<p style=\"text-align:justify\">This device is suitable for colder climates, when people prefer to keep their hand</p>\r\n\r\n<p style=\"text-align:justify\">inside the pockets. Here the person is given an instrument, usually shaped like a pen, which is connected with device on the door. For example, when the person is 18 inches (approx.) from the door, the reader on the door scans the device on the person&#39;s pocket, and only then person can enter the premises.</p>\r\n', '', '', '', 'Door Access Control System Solution Supplier India - ImperialTechsol', 'door access control system, door access control solution supplier, biometric door access solution supplier, door entry system dealer india', 'Door Access Control System - We offers the door access control system supplier, biometric access door, fingerprint door access solution dealer in India at best price.', '2018-03-17 11:53:20', 0, 'Active', 0),
(8, 0, 0, 0, 'it_networking', '5686236751', 'Server | Computer Server Supplier', '', '', '', 'server', 'AERO14201506020922.jpg', '', '', '<h2 style=\"text-align:center\">Computer Server Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt. Ltd provides complete series of LED video wall displays that serve industry-leading power-efficient performance and longevity. Designed with accuracy, Imperial LED series can maintain a massive range of brightness level at optimum power and long illumination period.</p>\r\n\r\n<p style=\"text-align:justify\">LED3 displays are specially designed for energy efficiency feature; these LEDs deliver high-quality brightness for up to 800+ units, high reliability for every power unit and extended illumination life. Imperial&rsquo;s advanced technology ensures every LED on the video wall functions at a user-defined brightness level throughout the usage of video wall; all while delivering balanced intensity, crispy, colored and clear images. 55-inch displayis engineered for low cost, quiet and worry-free operations.</p>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt. Ltd is a <strong>55&rdquo; display supplier</strong> that offers high-quality displays at affordable prices. The advanced and pioneer display technology of Imperial Techsol Pvt. Ltd includes software and hardware facilities. The <strong>55-inch display supplier</strong> meets the demand of multiple sectors in our country like transport, Corporate hubs, defense, government agencies and educational institutes. This is where anything that fits into the consumer electronics category is assembled, packaged and exported to the rest of the world.</p>\r\n\r\n<p style=\"text-align:justify\">84&rdquo; display suppliers are gathering components purchased from subcontractors. Proximity to subcontractors is a critical factor in manufacturing. Mounting an LED display requires thousands of parts - delivery times and transportation costs will certainly add up to the bottom line.</p>\r\n\r\n<p style=\"text-align:justify\">Their experience, coupled with research into innovative technologies, guarantee the quality and reliability of our LED displays at a constructive and technological level. Imperial Techsol team is formed by the best professionals in the sector also has a service of maintenance and post-sale.</p>\r\n\r\n<p style=\"text-align:justify\">The <strong>55&rdquo; display supplier</strong>believe in providing quality services at affordable prices. If you want to get more information, contact Imperial Techsol Pvt. Ltd. Our team will feel delighted<a name=\"_GoBack\"></a> to guide you.</p>\r\n', '', '', '', 'Computer Server supplier | Data Wall supplier', 'Computer Server supplier, Data Wall supplier', 'Welcome to Imperial Techsol Pvt. Ltd we are based in Delhi, India we are one of the leading Computer Server supplier and Data Wall supplier in Delhi India', '2018-03-19 02:05:27', 0, 'Active', 0),
(9, 0, 0, 0, 'it_networking', '5696916204', 'Laptop Supplier, Desktop Supplier', '', '', '', 'laptopdesktop', 'AERO80931506020972.jpg', '', '', '<p style=\"text-align:justify\">Your only one call will be solve your Laptop or Desktop Problems at your home in front of your eyesight at very affordable cost. We have professionals and experienced Laptop engineer who have huge experienced to repair any kind of Laptop related problems whether hardware or software related. We repair all major brands of laptop like Apple (Mac Book Air Or Mac Book Pro), Dell Inspiron, Toshiba Satellite, HP Pavilion, Acer Aspire, HCL, Lenovo Tablets or Notebooks, LG, Fujistu, IBM Think Pad, Sony Vaio, Asus Eeebook and provide computer repair service in Delhi NCR at your home or official place and fix your device in front of your eye sight that gives you completed satisfaction along with your precious time save.</p>\r\n\r\n<p style=\"text-align:justify\">Laptop Home Service is one of the best laptop repairing service provider company in Delhi NCR and repair your system at your home/office at very cheapest price and if you are looking for laptop service in Gurgaon, Noida, Vaishali, Indirapuram, Ghaziabad or Faridabad location then we do. Our laptop repair company is one of the best computer service center in Delhi NCR, Your first concern is that how much cost is going to repair your laptop? We will always give you an exact estimate before repair work. Once you&#39;re agreeing with that budget then we&#39;ll start the repairing work instantly! Our laptop repair services include notebook repair, component-level repair, screen repair, power jack repair and spyware or virus removal, USB port repair, laptop window installation service, blue screen black screen, No display, broken hinges repair service for HP, Dell, Sony, Toshiba, Mac, HCL, IBM, Compaq, Acer, Asus laptops and more only Rs500, it is very affordable cost. Our expert engineer is adept at repairing and updating your system by starting. With our technical support, you can repair your desktop/laptop (PC) in the best possible way. We are always here for prompt and friendly PC Repair Services.</p>\r\n', '', '', '', 'Laptop Supplier, Desktop Supplier in India at Best Price', 'Laptop supplier, Desktop supplier, laptop supplier india, desktop supplier india, laptop desktop seller laptop in india', 'Laptop Supplier - Imperial Techsol provide the laptop supplier, desktop supplier in across India for company at best prices.', '2018-03-24 02:52:51', 0, 'Active', 0),
(10, 0, 0, 0, 'it_networking', '9249696664', 'Printers Supplier', '', '', '', 'hj', 'AERO92961506020858.jpg', '', '', '<p style=\"text-align:justify\">Computing is definitely made easier with advanced peripherals like printers and scanners. Printers are used to produce hard copy output while scanners digitise physical documents and store it on your computer. Home printing has been around for years and with superior connectivity and technology, it is surprising how easy it is to print using most gadgets, even in your home or office. You can easily can connect your laptops with a wifi connection to your printer Capsule Guide Explore a collection of all-in-one, inkjet, laser printers, and scanners from popular brands only on Imperial Techsol. Deciding on the type of printer and scanner before picking the brands and features makes it easier to select the perfect one for you. Many printers allow you to print through Wi-Fi, USB ports, blue-tooth, and Ethernet options from your tablet, computer or smartphone. Different technology is implemented for every printer while quality of the prints varies as well. Different types, Different Needs For quality photo-prints from your smartphone to fast, reliable all-in-one printer that incorporates scanning, copying and fax machines provide everything you need for comprehensive home printing.</p>\r\n\r\n<p style=\"text-align:justify\">Featured with wireless and mobile printing, these printers serve a complete solution in a single, compact package. Whether it is school or college work, inkjet printers are ideal for everyday home use. Inkjet printer uses cartridges cheaper than laser toner and delivers better quality photos and colour documents. Laser printers are meant for frequent use and suitable for offices that regularly print in large amounts. Designed for business use, monochrome and colour variants are available in both laser and inkjet versions for whichever suits your mood. Laser printer can print much quicker and in greater volumes than inkjet printers can. Whether your work keeps you confined in the office, on the road or at home, a versatile range of scanners are present to meet every need. Optical technology with stylish, functional design, photo scanners satisfy an array of scanning needs from quality reproductions to quick auto scanning operations. Carry your business where it takes you with handy, mobile scanners that allow you to scan documents or receipts on the spot. From HP Scanjet to Portronics or Kodak series, upgrade your performance with printer and scanner from reputed brands like Epson, Canon, Skypix and many more.</p>\r\n', '', '', '', 'Printers Supplier, Wi-Fi, Inkjet, Laser Printers Supplier India', 'printers supplier, wi-fi printers supplier, Inkjet printers supplier, Laser Printers Supplier India, printers supplier india, printers supplier for home', 'Printers Supplier- Imperial Techsol provide the wi-fi printers, Inkjet printers, Laser printers supplier for home, small & large business in across India at best prices.', '2018-03-20 01:23:08', 0, 'Active', 0),
(12, 0, 0, 0, 'securityservilance', '2452037185', 'Time Attendance System', '', '', '', 'time-attendance-system', 'AERO59571506022220.jpg', '', '', '<p style=\"text-align: justify;\">We offer you a wide selection of Attendance Recorders which are customizable to provide an apt solution for your organization. Available with a choice of sensors like fingerprint, proximity, magnetic, bar-code, infra red, touch-token, key-pad or their combination. A wide assortment of&nbsp;<strong>Time Attendance System</strong>, that are equipped with integrated human voice and buzzer, high password storage capacity, battery backup &amp; transaction storage capacity.&nbsp;<br />\r\n<br />\r\n<strong>Fingerprint Time Attendance System</strong></p>\r\n\r\n<p style=\"text-align:justify\">Our range of Fingerprint Time Attendance System is equipped with the most power packed fingerprint and time attendance recorder. This system is available with fastest fingerprint identification and verification speed. It also has intelligent fingerprint recognition technology, that is first time in industry. This system automatically learns and adapts to the changes in the fingerprints, that leads to lowest false rejections. Our system is incorporated with fast TCP/IP network communication, popular USB flash disk function to download/upload users and attendance logs.</p>\r\n', '', '', '', 'Time Attendance System, Biometric Attendance Machine Supplier India', 'time attendance system, fingerprint attendance system, biometric attendance machine supplier india', 'Time Attendance System - We offers the time attendance system supplier, biometric attendance machine, fingerprint solution supplier in India at best price.', '2018-03-20 10:55:59', 0, 'Active', 0),
(13, 0, 0, 0, 'it_networking', '7347606035', 'Desktop Laptop Authentication', '', '', '', 'desktop-leptop-authentication', 'AERO37231506022302.jpg', '', '', '<p style=\"text-align:justify\">Imperial Techsol Desktop lets IT administrators manage authentication of Macs and PCs without the hassle of maintaining Active Directory, VPN, or LDAP. This is especially useful for laptops not bound to Active Directory, such as Macs &mdash; or PCs used by contractors, vendors, and customers. It is also useful for remote PC users frustrated by having to use VPN to access on-premises Active Directory through a firewall. Optionally, you can have Active Directory sync to Imperial Techsol Directory using our Active Directory Connector, and to LDAP using our LDAP Connector.</p>\r\n', '', '', '', 'Desktop Laptop Authentication Solution India - Imperialtechsol.com', 'Desktop Laptop Authentication, 2 factor authentication, IT administrators manage authentication', 'Desktop Laptop Authentication Solution India. Imperial Techsol offers the desktop laptop authentication solution in across India at best price.', '2018-03-19 02:01:50', 0, 'Active', 0),
(14, 0, 0, 0, 'securityservilance', '1902467652', 'Aadhar Kit - UID Kit', '', '', '', 'adhar-kit', 'AERO80991506022424.jpg', '', '', '<p>Imperial Techsol is the most&nbsp;versatile&nbsp;Aadhaar Printing Tool available for Microsoft Windows. It transforms the Aadhaar PDF file into a CR80 sized card, as per UIDAI standards.</p>\r\n\r\n<p><strong>Features Include -</strong></p>\r\n\r\n<ul>\r\n	<li>One Click e-Aadhaar Parsing.</li>\r\n	<li>Various card customization options, for pre-printed/blank cards. (Enable/Disable Card Elements like Header, Footer, Barcode, Photobox etc).</li>\r\n	<li>Picture editing for enhanced print results.</li>\r\n	<li>Font Adjustment option for native texts.</li>\r\n	<li>Adjustments available for preprinted cards with incorrect offsets.</li>\r\n	<li>Reports for tracking Prints.</li>\r\n	<li>Works with any CR80 card Printer. (Thermal/Inkjet)</li>\r\n	<li>Frequent Software updates, with improved experience and features every time.</li>\r\n	<li>Easy system migration (limited to once in 7 days).</li>\r\n	<li>Also available for bulk printing on A4 sheets (10 cards each).</li>\r\n</ul>\r\n', '', '', '', 'Aadhar Kit Online Suppliers & Exporters in India @Imperialtechsol.com', 'Aadhar Kit, Aadhar Kit online suppliers, Aadhar Kit online suppliers in india, UID kit, aadhar card kit, aadhar card machine supplier', 'Aadhar Kit online suppliers & exporters in India. We are also provide Aadhar Kit, UID kit, Aadhar Card Kit, Aadhar Card Machine across India at very best prices.', '2018-04-04 01:17:15', 0, 'Active', 0),
(15, 0, 0, 0, 'securityservilance', '8448396142', 'CCTV Solutions', '', '', '', 'cctv-solutions', 'AERO17571506022730.jpg', '', '', '<h3>CCTV Solution Online</h3>\r\n\r\n<p style=\"text-align:justify\">Today, for everyone security is one of the major concerns. With the escalating crime rate, people take various preventive measures to protect the property and valuable possession from any kind of uncertainty.</p>\r\n\r\n<p style=\"text-align:justify\">Fortunately, with the advancement in the technology CCTV has emerged as one of the best and efficient security and surveillance system. Now a day, CCTV cameras are used at the most the places to provide a higher level of security and protection mainly in the public areas like railway station, airports, malls, main markets etc. Also, CCTV systems can be installed at the home and business establishments where one need to protect their valuables.</p>\r\n\r\n<p style=\"text-align:justify\">CCTV in Delhi NCR is widely used and proven to be a helpful and reliable security system that works better than the other available security systems. Today many advanced CCTV systems are available in the market that features enhanced camera clarity, wide are coverage, easy to operate. If one wants to install a CCTV surveillance system in their house or office they can easily get one from online as well as an offline medium. There are many dealers that offer a wide range of high-tech CCTV in Noida, Faridabad, Gurgaon, Delhi India. To locate the best dealer in the city one can browse the internet or ask referrals.</p>\r\n', '', '', '', 'CCTV Solutions | CCTV Camera Dealer in India @Imperialtechsol.com ', 'CCTV Solutions, CCTV Camera Dealer, CCTV Camera Dealer in india, IP cameras, wifi cameras, wired cameras', 'CCTV Solution- We are providing all types of cctv cameras, IP cameras, wifi cameras & wired cameras, bullets, Dom, PTZ cameras online across India at very best prices. Call now!!', '2018-04-04 01:17:46', 0, 'Active', 0),
(16, 0, 0, 0, 'securityservilance', '7973017482', 'X-Ray Baggage Scanner ', '', '', '', 'x-rey-baggage-scanner', 'AERO14711506023164.jpg', '', '', '<p style=\"text-align:justify\">We are engaged in manufacturing and supplying of Quality&nbsp;<strong>X-ray Baggage Scanners</strong>. These come with many advanced functionalities, which makes them highly desirable at various sensitive places.<br />\r\n<br />\r\nWe offer<strong>&nbsp;advanced X-Ray Hand Baggage Scanner</strong>&nbsp;capable of detecting organic and inorganic items such as weapons, explosives and narcotics. These&nbsp;<strong>Baggage scanners</strong>&nbsp;can be connected to a local area network for checking and matching from the database and also support multi-terminal check<strong>&nbsp;baggage&nbsp;</strong>simultaneously. Our&nbsp;<strong>Portable x-ray baggage scanning system&nbsp;</strong>works on combining the latest software and hardware technologies to provide superior image clarity, resolution and processing power. The<strong>&nbsp;X-ray Baggage Scanners</strong>ensures delivering excellent images of scanned objects and maintains highest level of safety.<br />\r\n<br />\r\n<strong>X-ray baggage scanning machines</strong>&nbsp;are a perfect solution for a quick and thorough inspection of baggage and other materials and the transmit ray is highly accurate and has a hundred percent detection rate. Our&nbsp;<strong>X-ray&nbsp;</strong><strong>baggage scanner Equipments&nbsp;</strong>are ideal solutions for malls, corporate complexes, airports, customs facilities, transportation operations, carriers, parcel services etc.</p>\r\n', '', '', '', 'X-Ray Baggage Scanner Solution Supplier in India - ImperialTechsol', 'x-ray baggage scanner, x-ray baggage scanner solution, x-ray baggage scanner solution supplier, x-ray baggage scanner supplier in india', 'X-Ray Baggage Scanner Solution Supplier in India. Imperial Techsol offers the X-Ray baggage scanner supplier, baggage scanner supplier in across India at best price.', '2018-03-19 12:08:45', 0, 'Active', 0),
(17, 0, 0, 0, 'securityservilance', '7944558321', 'Home Automation', '', '', '', 'home-automation', 'AERO11841506023214.jpg', '', '', '<p style=\"text-align:justify\">Welcome to Imperial Techsol , you must be in midst of constructing you new house and therefore looking for Home automation , don&rsquo;t worry , you have clicked the right page .We offer wireless automation solutions.</p>\r\n\r\n<p style=\"text-align:justify\">We convert house into a smart house by giving control on your smarphone/tablet.You can control lighting, curtains,home cinema, media server ,surveillance ,climate control ,back ground music, we customise just as per your taste and design.</p>\r\n\r\n<h3 style=\"text-align:justify\">Home Automation System Solution</h3>\r\n\r\n<p style=\"text-align:justify\">Our automation solutions are wireless and meant for existing homes as well.</p>\r\n\r\n<p style=\"text-align:justify\">Fill up your details or call us, our automation expert will schedule an appointment with you and recommend the best automation solution to convert your home into a smart home.</p>\r\n\r\n<p style=\"text-align:justify\">Our Home automation give you control of Climate, Security , Equipments, Lights with options of adding sensors to create scenes as per your mood and requirement.</p>\r\n\r\n<p style=\"text-align:justify\">Home automation is exactly what it sounds like: automating the ability to control items around the house&mdash;from window shades to pet feeders&mdash;with a simple push of a button (or a voice command). Some activities, like setting up a lamp to turn on and off at your whim, are simple and relatively inexpensive. Others, like advanced surveillance cameras, may require a more serious investment of time and money.</p>\r\n\r\n<p style=\"text-align:justify\">There are many smart home product categories, so you can control everything from lights and temperature to locks and security in your home. Here&#39;s a rundown of the best products we&#39;ve tested for every room of the house.</p>\r\n', '', '', '', 'Home Automation, Home Automation System Supplier - ImperialTechsol', 'home automation, home automation system, home automation system supplier, home automation system dealer', 'Home Automation System- Imperial Techsol offers the home automation, home automation system Supplier in across India at best price.', '2018-03-17 02:49:02', 0, 'Active', 0),
(18, 0, 0, 0, 'securityservilance', '9807808555', 'Fire Alarm System | Smoke Detector System', '', '', '', 'fire-alarm-system', 'AERO81881506023341.jpg', '', '', '<p style=\"text-align:justify\">We,&nbsp;Imperial Techsol, are known as a most prominent authorized service provider of all kind of&nbsp;&nbsp;<strong>Supplying fire &amp; safety equipments like fire protection systems, fire hydrant system, fire sprinkler system, fire detection, fire extinguisher, alarm system, fire extinguishers, fire signages, safety equipments, personnel protective equipments.</strong></p>\r\n\r\n<h2 style=\"text-align: justify;\">Fire Alarm System Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">A key aspect of fire protection is to identify a developing fire emergency in a timely manner, and to alert the building&#39;s occupants and fire emergency organizations. This is the role of fire detection and alarm systems. Depending on the anticipated fire scenario, building and use type, number and type of occupants, and criticality of contents and mission, these systems can provide several main functions. First they provide a means to identify a developing fire through either manual or automatic methods and second, they alert building occupants to a fire condition and the need to evacuate. Another common function is the transmission of an alarm notification signal to the fire department or other emergency response organization. They may also shut down electrical, air handling equipment or special process operations, and they may be used to initiate automatic suppression systems. This section will describe the basic aspects of fire detection and alarm systems.<br />\r\n&nbsp;</p>\r\n\r\n<h3 style=\"text-align: justify;\">Smoke Detector System Supplier</h3>\r\n\r\n<p style=\"text-align:justify\">For most fires, water represents the ideal extinguishing agent. Fire sprinklers utilize water by direct application onto flames and heat, which causes cooling of the combustion process and prevents ignition of adjacent combustibles. They are most effective during the fire&#39;s initial flame growth stage, while the fire is relatively easy to control. A properly selected sprinkler will detect the fire&#39;s heat, initiate alarm, and begin suppression within moments after flames appear. In most instances sprinklers will control fire advancement within a few minutes of their activation, which will in turn result in significantly less damage than otherwise would happen without sprinklers.</p>\r\n', '', '', '', 'Fire Alarm System Supplier, Smoke Detector System Supplier India', 'fire alarm system supplier, smoke detector system supplier india, smoke detector system, fire protection systems, fire sprinkler system, fire detection, fire extinguisher, fire signage', 'Fire Alarm System Supplier - Imperial Techsol offers the fire alarm system supplier, fire sprinkler system, smoke detector system supplier across India at best prices.', '2018-03-14 06:14:24', 0, 'Active', 0);
INSERT INTO `tbl_service` (`fld_id`, `fld_company_id`, `fld_catid`, `fld_subcatid`, `fld_catagory`, `fld_product_code`, `fld_product_name`, `fld_price`, `fld_duration`, `fld_destination`, `fld_seourl`, `fld_image`, `fld_icon`, `fld_short_desc`, `fld_desc`, `fld_dignostic`, `fld_repair`, `fld_warranty`, `fld_mtitle`, `fld_mkeywords`, `fld_mdesc`, `fld_added_on`, `fld_top`, `fld_status`, `fld_featured`) VALUES
(19, 0, 0, 0, 'solutions', '6168407161', 'Data Center Solution | Server Room Solution', '', '', '', 'data-center', '', '', '', '<p style=\"text-align:justify\">Large-scale computer systems have been around for a while, and many people are already familiar with the term data center. In the 1940s, computers were so large that individual rooms had to be specially set aside to house them. Even the steady miniaturization of the computer did not initially change this arrangement because the functional scope increased to such an extent that the systems still required the same amount of space. Even today, with individual PCs being much more powerful than any mainframe system from those days, every large-scale operation has complex IT infrastructures with a substantial amount of hardware &ndash; and they are still housed in properly outfitted rooms. Depending on their size, these are referred to as &ldquo;server rooms&rdquo; or &ldquo;data centers.&rdquo;<br />\r\n<img src=\"http://www.imperialtechsol.com/images/datacenter.jpg\" style=\"float:right; height:202px; width:324px\" /><br />\r\nImperial Techsol is an innovative legacy/SDN hybrid switch, installed with open-architecture powerful Imperial Techsol network operating system, which supports many legacy L2/L3 protocols and state-of-the-art OpenFlow features with line-rate traffic. MT198T is equipped with 48 ports 10GbE SFP+ and 6 40GbE QSFP ports, specifically designed for the use of Top-of-Rack (ToR) switches, enterprise Layer-3 switches, and telecom monitoring/tapping networks. It provides line-rate OpenFlow 1.3 pipeline performance, which delivers real and authentic OpenFlow features in real time. It also supports L2/L3 protocols commonly used in data center and enterprise; thus it is also a cost-effective switch solution in legacy networks. MT198T therefor provides a progressive and feasible way for networking systems from the legacy mode migrating to SDN.<br />\r\n<br />\r\nComputers, of course, require electricity, as well as protection from theft and the accidental or intentional manipulation of hardware. Put simply, one has to safeguard data centers against external influences and provide them with sufficient cooling. After all, there is a lot of powerful hardware sitting in one place.</p>\r\n\r\n<p style=\"text-align:justify\">In addition to these &ldquo;hard&rdquo; factors, one must also take into consideration organizational measures, such as periodic backups that ensure operability. As a rule, the more extensive and critical the hardware and software become, the more time and effort are required to provide optimal protection.</p>\r\n\r\n<p style=\"text-align:justify\">For that reason, a data center preferably consists of a well-constructed, sturdy building that houses servers, storage devices, cables, and a connection to the Internet. In addition, the center also has a large amount of equipment associated with supplying power and cooling, and often automatic fire extinguishing systems.</p>\r\n', '', '', '', 'Data Center Solution Supplier, Server Room Solution - ImperialTechsol', 'Data Center, data center solution supplier, data center solution, server room solution ', 'Data Center Solution Supplier India - Imperial Techsol offers the data center solution supplier, server room solution supplier across India at best price.', '2018-03-17 11:07:41', 0, 'Active', 0),
(20, 0, 0, 0, 'it_networking', '4804937053', 'Network Operations Center - NOC', '', '', '', 'nockroom', '', '', '', '<p style=\"text-align:justify\">Our Network Operations Center (NOC) with more than 110 routers and switches is on par with the latest companies / ISPs in the world thereby allowing students to familiarize themselves with the real-time network challenges faced in companies today.<br />\r\n<img src=\"http://www.imperialtechsol.com/images/noc.jpg\" style=\"float:right; height:236px; width:364px\" /><br />\r\nImperial Techsol Network Operations Center (NOC) services are your guarantee for worry-free performance of your digital cinema network. From our dedicated NOC*, we can permanently monitor every projector, server, theater management system, and automation controller in your theater. When staff resources are at a premium, the Imperial Techsol NOC offers you 100% confidence that your valuable assets are being cared for.<br />\r\n<br />\r\nA Network Operations Center, or NOC, is the primary work space engineers utilize to monitor, manage and troubleshoot problems on a network. The Network Operations Center offers oversight of problems, configuration and change management, network security, performance and policy monitoring, reporting, quality assurance, scheduling, and documentation by utilizing sophisticated network management, monitoring and analysis tools. The NOC provides a structured environment that effectively coordinates operational activities with all participants and vendors related to the function of the network. The NOC technicians typically provide support twenty-four hours a day, seven days a week.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">A network operations center (NOC) is a central location from which network administrators manage, control and monitor one or more networks. The overall function is to maintain optimal network operations across a variety of platforms, mediums and communications channels.</p>\r\n\r\n<p style=\"text-align:justify\">Large network service providers are associated with network operation centers, which feature a visual representation of the networks being monitored and workstations where detailed network statuses are monitored. Software is employed to help manage the networks. Telecommunications, television broadcast and computer networks are controlled through network operations centers.</p>\r\n', '', '', '', 'Network Operations Center Supplier in India, NOC - ImperialTechsol', 'network operations center, network operations center supplier, network operations center india', 'Network Operations Center Supplier India - Imperial Techsol offers the network operations center (NOC) supplier across India at best price.', '2018-03-16 12:59:29', 0, 'Active', 0),
(21, 0, 0, 0, 'audio_video', '8741766223', 'Boardroom/Conference Room Digital Solution', '', '', '', 'board-roomconference', 'AERO23771506023549.jpg', '', '', '<p style=\"text-align:justify\">Corporate Boardrooms are no longer just an image building tool for large multi-national organisations. Over the last decade they have evolved into the hub for most strategic, operational and tactical decision making within organisations and are powered by a whole new generation of tools for presentations and smooth sharing of content.</p>\r\n\r\n<p style=\"text-align:justify\">The modern boardroom &amp; conference room design features high-resolution displays of upto 4K for improved image clarity resulting in crisper more engaging presentations. This means that communicating finer details like intricate graphs, detailed spreadsheets and high-definition photographs etc., is simpler than ever before. These displays can also be touch sensitive, which allows information to be annotated to convey ideas in a more dynamic and precise way.</p>\r\n\r\n<p style=\"text-align:justify\">Wireless presentation technology enables BYOD, which allows presenters to walk in even with mobile devices like a tablet or a smartphone, and present content seamlessly and wirelessly. Highly intuitive control systems let the presenter get the room lighting, projector and other devices ready with the touch of a single button.</p>\r\n\r\n<p style=\"text-align:justify\">Boardrooms &amp; Conference Rooms designed by Actis improves the environment for meetings, improves operational client interactions and helps reduce corporate travel expenses. It also provides meeting participants with the flexibility to participate remotely, in case they are unable to be physically present.</p>\r\n', '', '', '', 'Boardroom & Conference Room Digital Solution Supplier India', 'boardroom digital solution supplier, conference room digital solution supplier, conference room solution supplier', 'Boardroom & Conference Room Digital Solution Supplier India - Imperial Techsol offers the corporate boardroom audio video solution supplier across India at best price.', '2018-04-04 01:17:35', 0, 'Active', 0),
(22, 0, 0, 0, 'solutions', '5742287905', 'Cinema / Auditorium', '', '', '', 'cinema-auditorium', 'AERO91921506023589.jpg', '', '', '<p style=\"text-align:justify\">Cinema / Auditorium Digital Soultion Supplier</p>\r\n\r\n<p style=\"text-align:justify\">We design, manufacture, and install auditorium seating and fixed seating solutions that<strong>&nbsp;your clients will love.</strong>&nbsp;And that means we&#39;re not like all other seating manufacturers. Most of our auditorium seats come with a lifetime warranty, and we&#39;ll not only work with your in-house designers, but manage the entire process and sweat the details, so you don&#39;t have to.</p>\r\n\r\n<p style=\"text-align:justify\">We help bring your vision to life, manage the project from beginning to end, and make you look good in the process. Our chairs are designed with a focus on quality and high attention to detail. We welcome the opportunity to work with you on custom solutions for your space.</p>\r\n\r\n<p style=\"text-align:justify\">We&#39;ve installed fixed seating in many of the country&#39;s finest facilities including performing arts centers, concert halls, theaters, museums, and universities, as well as public and private high schools. Whether you need auditorium seats, or fixed seating solutions for educational facilities, we&rsquo;ve got you covered.</p>\r\n\r\n<p style=\"text-align:justify\">So yeah, we&#39;re not like other seating manufacturers.&nbsp;<strong>We&#39;re different...</strong>&nbsp;and we think you&#39;ll love working with us.</p>\r\n', '', '', '', 'Cinema Auditorium Solution Supplier in India - ImperialTechSol', 'Cinema solution suppler, auditorium digital solution supplier, cinema digital solution supplier india', 'Imperial Techsol Pvt. Ltd. offers the cinema auditorium solution supplier across India at best price. We are leading company in digital solution in all over India.', '2018-03-15 06:19:25', 0, 'Active', 0),
(23, 0, 0, 0, 'other', '5335137173', 'Other', '', '', '', 'other', '', '', '', '', '', '', '', 'Other', 'Other', 'Other', '2017-09-22 01:23:47', 0, 'Active', 0),
(25, 0, 0, 0, 'it_networking', '4495388499', 'Networking Solution Supplier | IT Solution Supplier', '', '', '', 'networking', '', '', '', '<p><img alt=\"IT Networking Solution\" src=\"http://www.imperialtechsol.com/sharpinstitute/images/images/IT%20networking%20solution.jpg\" style=\"height:400px; width:600px\" /></p>\r\n', '', '', '', 'IT Networking Solution Supplier India - ImperialTechsol', 'IT networking solution supplier, networking solution supplier, IT networking solution, networking solution in India', 'IT Networking Solution Supplier â€“ Imperial Techsol offers the IT networking solution, computer & wireless service supplier in across India at best price.', '2018-03-17 02:29:27', 0, 'Active', 0),
(28, 0, 0, 0, 'it_networking', '6144807001', 'Power Solutions Supplier', '', '', '', 'power-solutions', '', '', '', '', '', '', '', 'Power Solutions Supplier India â€“ Imperial Techsol Pvt. Ltd.', 'power solutions, power solutions supplier, power solutions supplier india', 'Power Solutions Supplier - Imperial Techsol provide the power solution, power system supplier in across India at best prices.', '2018-03-20 01:32:23', 0, 'Active', 0),
(29, 0, 0, 0, '', '4573608325', 'Laser Projector', '', '', '', 'laser-projector', 'AERO17881506752358.jpg', '', '', '<h2 style=\"text-align:center\"><strong>Laser Projector Supplier</strong></h2>\r\n\r\n<p style=\"text-align:justify\"><strong>Laser projectors</strong> display contours, templates or other shapes with high accuracy and scale on virtually any surface by projecting laser lines.</p>\r\n\r\n<p style=\"text-align:justify\">The laser projector is based on CAD data. The imported data is treated as projection data and then transferred to one or more laser projectors. The projection surface may be flat or curved.</p>\r\n\r\n<p style=\"text-align:justify\">The high-quality laser projectors, which are also commercially available at laser projector supplier, are useful for many commercial applications as well as in private use. The laser beamers focus on future-oriented innovations, which are capable of reproducing imaging details, such as outlines, shapes and limitations of objects by means of laser technology on different surfaces.</p>\r\n\r\n<h3 style=\"text-align: justify;\">Imperial Techsol Pvt Ltd- The ultimate Laser Projector supplier</h3>\r\n\r\n<p style=\"text-align:justify\">These devices, which are to be allocated to the video projectors, have a high power and can be used above all for large-screen projections. The laser projectors have also established themselves as central technical equipment for home cinema systems. The images are projected onto bodies as well as surfaces with a flat or uneven texture.</p>\r\n\r\n<h3 style=\"text-align: justify;\">The Function of Laser Projectors</h3>\r\n\r\n<p style=\"text-align:justify\">The design of the laser projectors is based on different modulation components composed of three solid state lasers. These are responsible for creating the colors from the primary colors green, red and blue. Furthermore, one finds a modulator, which is responsible for the optics and the acoustics, and in which the laser beams with the primary colors are simultaneously modulated.</p>\r\n\r\n<p style=\"text-align:justify\">The laser projectors are characterized mainly by excellent brightness and contrast, which cannot be achieved to the same degree with conventional projectors. Contact the best <strong>Laser Projector supplier</strong> today and order yours with us!</p>\r\n', '', '', '', 'Laser Projector Supplier in Delhi, India - ImperialTechsol', 'laser projector supplier, Laser Projector, projector supplier, laser light projector, laser projector supplier india', 'Laser Projector Supplier Delhi, India- Imperial Techsol offers the best laser light projector supplier across India at best prices with free shipping at doorstep.', '2018-03-15 12:11:22', 0, 'Active', 0),
(30, 0, 0, 0, '', '8132676597', 'LED Projector - HD LED Video Projectors', '', '', '', 'led-projector', 'AERO851521176082.jpg', '', '', '<h2>Imperial Techsol Pvt Ltd LED Projector supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Outdoor <strong>LED projectors</strong> are used to illuminate all types of outdoor applications thanks to its high protection against external agents, although they can be used in indoor spaces such as high power spotlights in industrial buildings, work etc.</p>\r\n\r\n<p style=\"text-align:justify\">This light system makes the most of the light emitted, reaching 90% of the conventional metal iodide. In addition, LED projectors for internal and external use are low-power, do not emit ultraviolet infrared radiation and have a much higher life cycle than a traditional lighting system.</p>\r\n\r\n<p style=\"text-align:justify\">In Imperial Techsol Pvt. Ltd. we offer you a wide range of outdoor LED projectors, where you can choose from different designs and brands. Enter the LED world through <strong>LED Projector supplier</strong> new online lighting shop. Discover the LED projectors on Imperial Techsol.</p>\r\n\r\n<p style=\"text-align:justify\">Among our range you can find products with different 10w, 30w, 50w and 200w watts with sensing sensors and fixing brackets. All of our LED projectors are guaranteed and allow you to save on your bill! We are one of the most celebrated <strong>LED Projector supplier</strong> pan India.</p>\r\n\r\n<p style=\"text-align:justify\">Suitable for both commercial and domestic use, our LED projectors have high power but consume little energy, making them environmentally friendly and perfect for beautifying the exterior of your property.</p>\r\n\r\n<p style=\"text-align:justify\">Are not you sure of which <strong>LED projector</strong> is suitable for your application? For more information, please contact Imperial Techsol Pvt Ltd. Service. Our team will be happy to guide you in your choice.</p>\r\n', '', '', '', 'LED Projector supplier | Imperial Techsol Pvt. Ltd', 'LED Projector supplier, LED Projector, suppliers of LED Projector', 'Welcome to Imperial Techsol Pvt. Ltd we are based in Delhi, India we are supplier of LED Projector supplier, LED Projector, suppliers of LED Projector', '2018-03-16 10:46:34', 0, 'Active', 0),
(31, 0, 0, 0, 'audio/video', '3604708060', '2D, 3D Cinema Projector', '', '', '', 'cinema-projector', 'AERO76481521003694.jpg', '', '', '<p style=\"text-align:justify\">Multimedia projector is designed to display video information in 2D or 3D, widely used in educational institutions, offices and entertainment, suitable for home theater. Many models display high-resolution video (1920 &times; 1080).</p>\r\n\r\n<p style=\"text-align:justify\">Modifications that can reproduce a volumetric image are most in demand, they fall into two categories: Full HD 3D and 3D Ready. The devices are equipped with network interfaces: wired LAN and / or wireless Wi-Fi, some models are capable of playing video through a local network, without using a computer.</p>\r\n\r\n<h2 style=\"text-align:justify\">Requirements for the Cinema Projector</h2>\r\n\r\n<p style=\"text-align:justify\">The Cinema Projector<strong> </strong>is designed to create a high-quality image that avoids overvoltage of vision. Optimal image is 1080p (Full HD), and the contrast and brightness level is 300: 1 and 600 lm. For correct display of information 3D HD projectors, you may need special glasses.</p>\r\n\r\n<h2 style=\"text-align:justify\">Buy Affordable Projectors with Cinema Projector Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Another requirement for equipment for cinemas is easy maintenance and reliable protection from dust, because a professional 3D Full HD projector has to work seven days a week 24 hours a day. Such devices, designed for wide use, should be easy to install, configure and maintain, have a clear interface and remote control capability.</p>\r\n\r\n<p style=\"text-align:justify\">Modern Cinema Projector<strong> </strong>has a resolution of 1920 by 1080 pixels with 16: 9 aspect ratio. The technology is used when playing video in the format BluRay and HD-DVD, television broadcasts HDTV. Image with a high degree of brightness and realism you can get even at home.</p>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt. Ltd offers the widest collection of cinema projectors at most reasonable prices and high quality brands.</p>\r\n', '', '', '', '2D, 3D Cinema Projector Supplier India at Best Prices - ImperialTechsol', 'Cinema Projector supplier, Cinema Projector supplier in India, 3D Cinema Projector , 2D Cinema Projector, Cinema Projector, movie projector, best Cinema Projector, Multimedia Projector', 'Cinema projector supplier India - Imperial Techsol Pvt. Ltd offers the best 2D, 3D Cinema Projector, Multimedia Projector, Movie projector across India at affordable prices.', '2018-04-04 01:16:55', 0, 'Active', 0),
(32, 0, 0, 0, '', '9895896472', 'Home Theater Projector ', '', '', '', 'home-theater-projector', 'AERO88721521107430.jpg', '', '', '<div>\r\n<h2 style=\"text-align:center\">Home Theater Projector supplier</h2>\r\n\r\n<p style=\"text-align:justify\">A high-quality multimedia projector is perhaps one of the most important elements of a home theater. The modern projector is, first of all, a wide format of the image, high-quality optics, priority of contrast over brightness, low noise level, modern design and support for most popular video formats (including Full HD).</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Home Theater Projector</strong> allows you to create the entourage of &quot;big&quot; cinema. With their help, you can experience experiences similar to those that occur when viewing a picture in a large cinema hall. Spectacular, exciting and impressive shots cannot but please the eye.</p>\r\n\r\n<p style=\"text-align:justify\">A significant contribution to the creation of an atmosphere that is as close as possible to the cinema is made by muffled light, a professional acoustic system and, of course, the most realistic image displayed by the projector. Full HD format and high-resolution video are provided by the operation of powerful modern video processors. Thus, the quality of the broadcast video can be serenely calm.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Count of Imperial Techsol Home Theater Projector supplier</strong></p>\r\n\r\n<p style=\"text-align:justify\">The function of a <strong>Home Theater Projector </strong>is to provide a 3D image. The technology of this image introduces new colors into the viewing of films, enriches visual perception with voluminous and efficient frames.</p>\r\n\r\n<p style=\"text-align:justify\">The choice of <strong>Home Theater Projector supplier </strong>is based on the study of the technical characteristics of the products. The prices for products vary depending on the functionality of the particular projector, the degree of novelty of the proposed product and brand. As practice shows, in conditions of time deficit, the procedure for choosing a suitable projector is more expedient to discuss with specialists.</p>\r\n\r\n<p style=\"text-align:justify\">Thanks to innovative technological solutions by <strong>Imperial Techsol Pvt. Ltd.</strong>, the perception of the latest novelties in the cinema world is exacerbated to an unprecedented level. To buy a projector for a home theater means to purchase a ticket to a world of vivid impressions, which you can enjoy at home.</p>\r\n</div>\r\n', '', '', '', 'Full HD Home Theater Projector Supplier India - ImperialTechsol', 'full hd home theater projector supplier, home theater Projector, hd home theater projector, home cinema projector supplier india', 'Full HD Home Theater Projector Supplier India- Imperial Techsol offers the hd home theater projector, Home cinema projector supplier across India at effective price.', '2018-03-15 03:20:30', 0, 'Active', 0),
(33, 0, 0, 0, '', '9818177543', 'DLP Projector', '', '', '', 'dlp-projector', 'AERO70301520939740.jpg', '', '', '<div>\r\n<h2 style=\"text-align:center\">DLP Projector Supplier- Imperial Techsol Pvt. Ltd</h2>\r\n\r\n<p style=\"text-align:justify\">DLP Projectors are classified as micro-mirror. The advantage of this technology is the high contrast of the image, and as a consequence, a cleaner display of white and black colors, which are needed primarily for presentations.</p>\r\n\r\n<p style=\"text-align:justify\">99% of similar products support 3d format. The function is developed by the corporation Texas Instruments and is exclusively produced by it for all companies. For many years of sales, we have not identified a single complaint on the mechanism of DLP.</p>\r\n\r\n<p style=\"text-align:justify\">Advantages of DLP technology offered by <strong>DLP Projector supplier</strong>:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Produces a smooth, crystal clear image</li>\r\n	<li style=\"text-align:justify\">It allows you to project superfast (16 microseconds pixel response time, which is about 1000 times faster than LCD projectors), smooth, and no jittery images</li>\r\n	<li style=\"text-align:justify\">Projectors are smaller and lighter</li>\r\n	<li style=\"text-align:justify\">Pixels on the image are less noticeable than LCD projectors</li>\r\n	<li style=\"text-align:justify\">The design without a filter provides virtually no maintenance</li>\r\n	<li style=\"text-align:justify\">Great savings in maintenance costs and extended projector lifespan reduce total cost of ownership (TCO)</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">A key element of all DLP projectors is the DMD matrix from Texas Instruments, which manipulates light and color using several hundred thousand microscopic mirrors located on the surface of the chip. Located at a distance of less than one micron from each other, these mirrors get a smooth, crystal clear image.</p>\r\n\r\n<p style=\"text-align:justify\">Contact the best DLP Projector supplier</p>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt. Ltd offers you the best DLP projectors. Our collection of projectors will offer you multiple options to select from. Shop with us and get suitable budget friendly projector for your home or workplace.</p>\r\n</div>\r\n', '', '', '', 'DLP Projector Supplier India, DLP Projector Dealer- Imperialtechsol', 'DLP Projector supplier, DLP Projector, DLP Projector Dealer', 'Imperial Techsol offers you the best DLP projectors across India. Shop with us and get suitable budget friendly DLP projector for your home or workplace. ', '2018-03-13 05:05:25', 0, 'Active', 0),
(34, 0, 0, 0, '', '3661228854', 'LCD Projector', '', '', '', 'lcd-projector', 'AERO64961520946154.jpg', '', '', '<div>\r\n<h2 style=\"text-align:center\">LCD Projector supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Imperial Techsol Pvt Ltd. offers a wide range of models of LCD projectors with different brightness and resolution so that installers can make the right choice depending on the features of the object.&nbsp;All LCD projectors suppliers offer suppliers have high performance and power, providing high-quality images at a low cost of ownership.</p>\r\n\r\n<p style=\"text-align:justify\">Although LCD (Liquid Crystal Display) projectors have dominated the market in recent years, projectors equipped with DLP (Digital Light Processing) technology, however, offer specific features that may be better suited for your own presentation.&nbsp;Thus, it is vital for the organization to first determine the differences in each technology, before deciding which LCD or DLP technology to purchase the projector from <strong>LCD projectors suppliers</strong>.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>LCD projectors suppliers at best price online</strong></p>\r\n\r\n<h3 style=\"text-align: justify;\">Advantages of LCD projectors:</h3>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Provides a higher brightness in the three primary colors</li>\r\n	<li style=\"text-align:justify\">Offers more flexible mounting options due to a larger optical zoom range</li>\r\n	<li style=\"text-align:justify\">3LCD projector produces less noise than a DLP projector</li>\r\n	<li style=\"text-align:justify\">More saturated colors provide better results in spaces with high illumination</li>\r\n	<li style=\"text-align:justify\">Consumes less energy and produces less heat</li>\r\n	<li style=\"text-align:justify\">No &quot;rainbow effect&quot; on the projected images</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">LCD technology uses a lamp that sends white light to a combination of mirrors.&nbsp;These mirrors share light on its three primary colors (red, green and blue).&nbsp;For each color uses its own LCD matrix (so 3LCD).&nbsp;Three colors are then combined with a prism, which forms a full-color image consisting of millions of colors.</p>\r\n\r\n<p style=\"text-align:justify\">Shop for quality oriented LCD projectors at most reasonable prices with Imperial Techsol Pvt Ltd.</p>\r\n</div>\r\n', '', '', '', 'LCD Projector Supplier, LCD Projector Dealers India - ImperialTechsol', 'LCD Projector supplier, LCD Projector, LCD Projector Dealers, LCD Projector Dealers India, sony lcd projector, hitachi projector supplier  ', 'LCD projector supplier - Imperial Techsol Pvt. Ltd offers the Hitachi, Sony, Epson, Viewsonic digital LCD, LED Projector dealers across India at affordable prices.', '2018-03-15 11:42:12', 0, 'Active', 0),
(35, 0, 0, 0, 'audio/video', '1997447072', 'Auditorium Projector - HD Projector', '', '', '', 'auditorium-projector', 'AERO4201521101678.jpg', '', '', '', '', '', '', 'Auditorium Projector Supplier, HD Projector Dealer India', 'Auditorium Projector, hd projector, HD Projector Dealer India, Auditorium Projector supplier, Auditorium Projector supplier india', 'Auditorium Projector Supplier India- Imperial Techsol offers the Auditorium hd projector supplier across India at best prices.', '2018-04-04 01:16:39', 0, 'Active', 0),
(36, 0, 0, 0, '', '1419116466', 'LG Display - 55 65 75 84 98 Inch', '', '', '', 'lg-display', 'AERO13061521282252.jpg', '', '', '<div>\r\n<h2 style=\"text-align:center\">LG Display Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Thanks to the excellent quality and democratic price of LED (Light Emitting Diode), LG TVs are very popular with consumers. A wide range of online store Imperial Techsol Pvt Ltd allows any buyer to choose the device that best suits personal preferences and financial opportunities.</p>\r\n\r\n<p style=\"text-align:justify\">Using our <strong>LG 98 inch display supplier</strong>, you can buy a small led LG TV with a diagonal of 98 inches, and a panel with a 75-inch diagonal, which will become the center of your home theater.</p>\r\n\r\n<p style=\"text-align:justify\">The necessary set of interfaces allows you to connect to the majority of models various digital devices: a digital camera, a Blu-ray disc player, a game console. Some models provide the ability to access Internet resources. Rely on the <strong>LG 84 inch display supplier</strong> and buy your favorite TV screen.</p>\r\n\r\n<p style=\"text-align:justify\">By giving preference to brand TVs, you will undoubtedly appreciate the high definition clarity and the excellent sound quality that these TV sets demonstrate.</p>\r\n\r\n<p style=\"text-align:justify\">With <strong>LG 75 inch display supplier</strong> at Imperial Techsol, you&#39;ll come across the latest technologies and features designed to make the most of the time you spend on the internet playing, watching movies or develop presentations.</p>\r\n\r\n<p style=\"text-align:justify\">Learn about some of the features that distinguish LG screens. <strong>LG 65 inch display supplier </strong>suggests keeping these features in mind while purchasing TV screen:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Full HD 1080p resolution: With a resolution twice as advanced, monitors with full HD technology provide better image quality than conventional resolution monitors.</li>\r\n	<li style=\"text-align:justify\">3D technology: Some LG computer screens have an innovative 3D technology that allows you to view web content, games and clips in 3D reality.</li>\r\n	<li style=\"text-align:justify\">Shape and function: Slim, elegant, and equipped with a lot of functions: Our flat monitors are designed to occupy less space than other models. They are as beautiful extinct as they are lighted.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">The most popular among consumers are TVs with the use of LED and OLED technologies, which provides high detail images with improved brightness, contrast and color saturation. Many modern models with <strong>LG 55 inch display supplier</strong> support Smart TV technology and are able to display realistic video in 3D format. Devices are installed on a horizontal surface or hung on a wall.</p>\r\n\r\n<p style=\"text-align:justify\">The Imperial Techsol Pvt. Ltd. online store offers inexpensive LCD TVs of any modifications, as well as devices with ultra-high definition resolution of 3840 &times; 2160 pixels (4K UHD).</p>\r\n\r\n<p style=\"text-align:justify\">Choose a functional and inexpensive option is easy, if you adhere to certain criteria.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Criteria of choice </strong></p>\r\n\r\n<p style=\"text-align:justify\">When choosing which TV to buy, pay attention to the following points:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Screen. The diagonal of the screen should correspond to the area of â€‹â€‹the room. At the same time, keep in mind that the higher it is, the higher the price of the model.</li>\r\n	<li style=\"text-align:justify\">HD-format. Choose the format according to whether you are going to watch movies in HD, Full HD or 4K quality.</li>\r\n	<li style=\"text-align:justify\">Functionality. If you plan to use a TV receiver to access the Internet, choose SmartTV. Also you can choose an inexpensive version with 3D support, digital TV standards and other options.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">In the online store &quot;Imperial Techsol Pvt Ltd&quot; <strong>LG LCD Video Wall supplier, </strong>and <strong>LG LED Video Wall supplier</strong>, you can also buy all kinds of Video Walls.</p>\r\n</div>\r\n', '', '', '', 'LG LCD LED Video Wall supplier, LG 55 65 75 84 98 inch display supplier', 'LG 98 inch display supplier, LG 84 inch display supplier, LG 75 inch display supplier, LG 65 inch display supplier, LG 55 inch display supplier, LG LCD Video Wall supplier, LG LED Video Wall supplier', 'Imperial Techsol Pvt. Ltd we are supplier of LG 98 inch display, LG 84 inch, LG 75 inch display, LG 65 inch, LG 55 inch, LG LCD Video Wall, LG LED Video Wall', '2018-03-17 03:54:12', 0, 'Active', 0),
(37, 0, 0, 0, '', '9775568042', 'Philips Display', '', '', '', 'philips-display', 'AERO29491521097087.jpg', '', '', '<div>\r\n<h2 style=\"text-align:center\">Philips Display Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">LED (Light Emitting Diode) Philips TVs demonstrate the perfect quality of picture and sound reproduction, and the elegant design of these TV sets allows them to fit into any interior. They perfectly reflect the movement, and thanks to unique backlighting, the visual perception expands, and the movie&#39;s viewing becomes more exciting and not tiring for the eyes.</p>\r\n\r\n<p style=\"text-align:justify\">All models from <strong>Philips 98 inch display supplier </strong>provide for the possibility of connecting to the device additional media of multimedia files: external hard drives, digital cameras, flash drives, etc. In order to make it more convenient for you to choose and buy the best option from the range of our online store, use the detailed descriptions and photos.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Philips 84 inch display supplier</strong> will help you compare prices and determine your preferences. Numerous reviews of our customers can also be useful for you. If you are at a loss with an independent choice, you can use the advice of experienced consultants of the company.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Philips 75 inch display supplier </strong>are a great choice for anyone!</p>\r\n\r\n<p style=\"text-align:justify\">TVs Philips (Philips) is offered in a wide range of models. Most of the products have LCD and LED screens.</p>\r\n\r\n<p style=\"text-align:justify\">The main advantages of Philips TVs are a wide range of prices, a large choice of diagonals, a long product life, additional functions (such as the connection of the Internet Philips Net TV, 3D image, etc.).</p>\r\n\r\n<p style=\"text-align:justify\">Key characteristics of Philips TVs:</p>\r\n\r\n<p style=\"text-align:justify\">Type of screen: LCD or LED, its characteristics: resolution, backlight, viewing angle, format - usually, 16: 9, and diagonal: 19, 32, 42 inches or other (models with a large diagonal are not recommended for installation in small rooms). Other important moments: the size of the TV, the presence of inputs / outputs for connecting additional equipment such as players or a computer, the functionality of the product: stereo sound, Full HD support, Philips TV, as well as the viewing angle, parental control and the presence of Wi-Fi.</p>\r\n\r\n<p style=\"text-align:justify\">Philips TVs are divided into:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">with a direct backlight with the possibility of full blackout - Direct LED;</li>\r\n	<li style=\"text-align:justify\">with edge illumination and full dimming - Edge LED;</li>\r\n	<li style=\"text-align:justify\">with direct illumination and local dimming - Pro LED.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">The <strong>Philips 65 inch display supplier</strong> pricing range will depend directly on the type of screen (LCD costs less than LED), the diagonal and its functionality.</p>\r\n\r\n<p style=\"text-align:justify\">Buying one of the models of Phillips TVs in 2017, you get not just a TV set, but multifunctional electronics that can be used as an additional screen, a means to access the Internet, a 3D cinema device or other purposes.</p>\r\n\r\n<p style=\"text-align:justify\">On the website of the online <strong>Philips 55 inch display supplier </strong>presents a huge number of models of TVs that you can buy yourself or for a gift. You can also buy with us Video walls from Philips. We are a <strong>reliable Philips LCD Video Wall supplier and Philips LED Video&nbsp;Wall</strong> supplier for our customers.</p>\r\n</div>\r\n', '', '', '', 'Philips 55, 65 75 84 98 inch display supplier | LED LCD Video Wall', 'Philips 98 inch display supplier, Philips 84 inch display supplier, Philips 75 inch display supplier, Philips 65 inch display supplier, Philips 55 inch display supplier, Philips LCD Video Wall supplier,  Philips LED Video Wall supplier', 'Imperial Techsol Pvt. Ltd we are supplier of Philips 98 inch display, Philips 84 inch 75 inch display, Philips 65 inch and 55 inch display, LCD LED Video Wall', '2018-03-15 12:28:07', 0, 'Active', 0),
(38, 0, 0, 0, '', '6514176514', 'Display Supplier | LED Display Supplier', '', '', '', 'display-supplier', 'AERO73031521280276.jpg', '', '', '<h2 style=\"text-align:justify\">Display Supplier</h2>\r\n\r\n<p style=\"text-align:justify\">Electronic LED displays are the best way for companies to promote their products and services. An electronic display consists of cabinets and modules, and to set up an electronic display LED in full color tailored as required by the customer. <strong>Imperial Techsol Pvt. Ltd</strong> provides following types of screens at affordable prices:</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Indoor Electronic LED Screens</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; Outdoor LED Screens</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; LED Screens for Indoor and Outdoor</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; LED Electronic Screens for Mobile Use</p>\r\n\r\n<p style=\"text-align:justify\">&bull;&nbsp;&nbsp;&nbsp; LED Electronic Perimeter Screens for Football Courts</p>\r\n\r\n<h3 style=\"text-align:justify\">Advertising Screens, Video Screens for Advertising and Giant Screens</h3>\r\n\r\n<p style=\"text-align:justify\">Most customers want to use electronic LED displays as screens to display their own company&#39;s advertising or sell on-screen advertising as a service to other companies. If there are enough customers who want to advertise on the screen, it&#39;s a high-performance investment. Also, the return on investment (ROI) is always concise term. <strong>98&rdquo; display supplier</strong> provides a vast range of advertising screens or video screens for different purposes.</p>\r\n\r\n<h3 style=\"text-align:justify\">Signs and Road Signs</h3>\r\n\r\n<p style=\"text-align:justify\">There are also electronic displays that are used as electronic indicator boards, for example, clocks to indicate the time or markers as we have seen in the electronic screens in the soccer stadiums. Or this same type of electronic displays for road signaling which can be in full color or also in some colors. <strong>Imperial Techsol Pvt. Ltd</strong> is <strong>84-inch display supplier</strong> that works for client wishes.</p>\r\n\r\n<h3 style=\"text-align:justify\">LED Electronic Screens Perimeter Cabinets for Football Courts</h3>\r\n\r\n<p style=\"text-align:justify\">Types of Cabinets of LED Screens for Interior and Exterior:</p>\r\n\r\n<p style=\"text-align:justify\">Find different types of cabinets of the electronic displays that <strong>75&rdquo; display supplier</strong>provides with various types of LED and different resolutions for the exterior and interior. The electronic LED screens (or the cabinets you find below) are for any kind of environment that meet any external or internal factor. For any kind of structure and dimension, <strong>65 <a name=\"_GoBack\"></a>inch display supplier</strong> have the solution.</p>\r\n', '', '', '', '84â€ Display, 98 inch Display supplier, 75 65 55 inch Display supplier', '84â€ display supplier, 84 inch display supplier, 98â€ display supplier, 98 inch display supplier, 75â€ display supplier, 75 inch display supplier, 65â€ display supplier, 65 inch display supplier, 55â€ display supplier, 55 inch display supplier', 'Welcome to Imperial Techsol Pvt. Ltd we are 84 inch display supplier, 98â€ display supplier, 75 inch display supplier, 65 inch display supplier, 55â€ display', '2018-03-17 03:21:16', 0, 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_content` varchar(255) NOT NULL,
  `fld_image` varchar(50) NOT NULL,
  `fld_button_title` varchar(50) NOT NULL,
  `fld_url` varchar(255) NOT NULL,
  `fld_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`fld_id`, `fld_title`, `fld_content`, `fld_image`, `fld_button_title`, `fld_url`, `fld_status`) VALUES
(1, 'LG Video Wall', 'LG Video Wall', 'AERO20681505954165.jpg', '', '', 'Active'),
(2, 'Commercial  Server Provider in India', 'Commercial  Server Provider in India', 'AERO44601505954197.jpg', '', '', 'Active'),
(8, 'CCTV Camera - Security/Surveillance Provider in India', 'CCTV Camera - Security/Surveillance Provider in India', 'AERO7941505954216.jpg', '', '', 'Active'),
(9, 'Printer - Laptop - Desktop Provider in India', 'Printer - Laptop - Desktop Provider in India', 'AERO73891505954234.jpg', '', '', 'Active'),
(10, 'Video Wall Provider Dealer in India', 'Video Wall Provider Dealer in India', 'AERO10041505954252.jpg', '', '', 'Active'),
(11, 'Fingerprint Time Attendance System Supplier in India', 'Fingerprint Time Attendance System Supplier in India', 'AERO28561505954327.jpg', '', '', 'Active'),
(12, 'slider7', 'slider7', 'AERO57351505954342.jpg', '', '', 'Active'),
(13, 'slider8', 'slider8', 'AERO73681505954362.jpg', '', '', 'Active'),
(14, 'slider9', 'slider9', 'AERO92221505954385.jpg', '', '', 'Active'),
(15, 'slider10', 'slider10', 'AERO44061505954404.jpg', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `time_stamp`) VALUES
(1, 'admin', 'password', '2018-04-16 10:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_audiovideo`
--
ALTER TABLE `my_audiovideo`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_catagory_id` (`my_catagory_id`);

--
-- Indexes for table `my_catagory`
--
ALTER TABLE `my_catagory`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `my_classroom`
--
ALTER TABLE `my_classroom`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_catagory_id` (`my_catagory_id`);

--
-- Indexes for table `my_classroom_product`
--
ALTER TABLE `my_classroom_product`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_classroom_id` (`my_classroom_id`);

--
-- Indexes for table `my_format_display`
--
ALTER TABLE `my_format_display`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_subcatagory_id` (`my_subcatagory_id`);

--
-- Indexes for table `my_projector`
--
ALTER TABLE `my_projector`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `my_subcatagory`
--
ALTER TABLE `my_subcatagory`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_catagory_id` (`my_catagory_id`);

--
-- Indexes for table `my_videoconferencing`
--
ALTER TABLE `my_videoconferencing`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `my_videowall`
--
ALTER TABLE `my_videowall`
  ADD PRIMARY KEY (`my_id`),
  ADD KEY `my_catagory_id` (`my_catagory_id`);

--
-- Indexes for table `products_lists`
--
ALTER TABLE `products_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_addonimages`
--
ALTER TABLE `tbl_addonimages`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_appliedfor`
--
ALTER TABLE `tbl_appliedfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_backup`
--
ALTER TABLE `tbl_backup`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_buyoffer`
--
ALTER TABLE `tbl_buyoffer`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_contactpage`
--
ALTER TABLE `tbl_contactpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`contId`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_ecomm`
--
ALTER TABLE `tbl_ecomm`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_exp_section`
--
ALTER TABLE `tbl_exp_section`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_selloffer`
--
ALTER TABLE `tbl_selloffer`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_audiovideo`
--
ALTER TABLE `my_audiovideo`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `my_catagory`
--
ALTER TABLE `my_catagory`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `my_classroom`
--
ALTER TABLE `my_classroom`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `my_classroom_product`
--
ALTER TABLE `my_classroom_product`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `my_format_display`
--
ALTER TABLE `my_format_display`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `my_projector`
--
ALTER TABLE `my_projector`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `my_subcatagory`
--
ALTER TABLE `my_subcatagory`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `my_videoconferencing`
--
ALTER TABLE `my_videoconferencing`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `my_videowall`
--
ALTER TABLE `my_videowall`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_lists`
--
ALTER TABLE `products_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_addonimages`
--
ALTER TABLE `tbl_addonimages`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_appliedfor`
--
ALTER TABLE `tbl_appliedfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_backup`
--
ALTER TABLE `tbl_backup`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_buyoffer`
--
ALTER TABLE `tbl_buyoffer`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contactpage`
--
ALTER TABLE `tbl_contactpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  MODIFY `contId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_ecomm`
--
ALTER TABLE `tbl_ecomm`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_exp_section`
--
ALTER TABLE `tbl_exp_section`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `fld_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_province`
--
ALTER TABLE `tbl_province`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_selloffer`
--
ALTER TABLE `tbl_selloffer`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
