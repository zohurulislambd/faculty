-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 02:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `head_title` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `main_cont` varchar(1000) DEFAULT NULL,
  `skill_title` varchar(150) NOT NULL,
  `skill_tag` varchar(50) NOT NULL,
  `my_feature` varchar(100) DEFAULT NULL,
  `fig_title` varchar(100) DEFAULT NULL,
  `fig_subtitle` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `head_title`, `title`, `main_cont`, `skill_title`, `skill_tag`, `my_feature`, `fig_title`, `fig_subtitle`) VALUES
(1, 'Bio', 'What I know1', 'A social psychologist and marketer, <strong><i>Jennifer Doe</i></strong> is the General Atlantic Professor of Marketing and Ormond Family Faculty at Stanford University’s Graduate School of Business. Her research spans time, money and happiness. She focuses on questions such as: What actually makes people happy, as opposed to what they think makes them happy? <br><br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'Programming language', 'HTML5, CSS3, Javascript, jQuery, Any Css Framework', '25f496687f81a2c073c4fd53227ac596.jpg', 'Jenifer Deo', 'Lecturer of Stanfort University');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `aw_short_name` varchar(100) DEFAULT NULL,
  `aw_full_name` varchar(200) DEFAULT NULL,
  `aw_image` varchar(100) DEFAULT NULL,
  `aw_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `aw_short_name`, `aw_full_name`, `aw_image`, `aw_description`) VALUES
(1, 'SE 2016', 'Science Education', 'Nobel_Prize.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper'),
(3, 'bbs 2016', 'asdgasg', '28a552f411a0ec28a97b17a7de265140.png', 'asdgaaaaaaaadddddddddddddddddddddddddddddddddd'),
(26, 'CMS 2015 2', 'Awards Full name', 'eff3233525c2e6e7db27b050d0a6bba4.png', 'sdfdsf 22');

-- --------------------------------------------------------

--
-- Table structure for table `banner_cont`
--

CREATE TABLE `banner_cont` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `sub_title` varchar(250) DEFAULT NULL,
  `body` varchar(2000) DEFAULT NULL,
  `social` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_cont`
--

INSERT INTO `banner_cont` (`id`, `title`, `sub_title`, `body`, `social`) VALUES
(1, 'I\'m Zohurul Islam', 'Freelancer, Web Designer and Developer. ', ' Hi, I am Zohurul Islam. I\'m a Front End web Development Expert & have a good experience Back End Development. I have over 3 years of web design & development experience. I will submit the work on time and customer satisfaction is my priority. ', 'this is social media section');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'Zohurul', 'zohurul@gmail.com', '54564564564', 'Need webs ite', 'I have a company so need a website'),
(3, 'Md. Zohurul Islam', 'zohurul.tkh@gmail.com', '01739382243', 'Testing', ' This is web site test'),
(4, 'Md. Zohurul Islam', 'admin@gmail.com', '01739382243', 'Testing', 'sadgasgasg'),
(5, 'farhan', 'zohurul@gmail.com', '345654', 'Testing', 'dfghfdghfdg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE `contact_address` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `main_cont` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `title`, `main_cont`) VALUES
(2, 'Address', 'sharif mansion 56-57, motijheel c/a dhaka 1000'),
(3, 'Mail ', 'zohurulislambd1@gmail.com'),
(4, 'Phone', '+88 01871 074984, +88 01739 382243');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `edu_title` varchar(100) NOT NULL,
  `institute_name` varchar(200) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `field_of_study` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `edu_title`, `institute_name`, `year`, `details`, `field_of_study`) VALUES
(1, 'BSC Engineer', 'Bangladesh University', '2016-Runing', 'My study is runing Depertment of  Computer science Engineer  at Bangladesh University', 'Computer Science Engineering '),
(3, 'S.S.C', 'CHMTSC', '2009-2010', ' I was completed S.S.C from CHMTSC.', NULL),
(7, 'PHD', 'Oxford University', '2018 ', 'sdfhgjk hsdfgdjk', 'CSE '),
(8, 'sdfgdfg', 'sdfgdsfg', '2014-2018', 'dsgsagsagsdg', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `job_start_year` varchar(100) DEFAULT NULL,
  `responsibility` varchar(200) DEFAULT NULL,
  `job_end_year` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `designation`, `company`, `job_start_year`, `responsibility`, `job_end_year`) VALUES
(1, 'Lecturer', 'Daffodil International University', '2010', 'Web site design and help to Website development.', '2012'),
(2, 'Lecturer', 'Techknow heaven LTD', '2012 ', 'Web site design and Website development.', '2016'),
(3, 'Lecturer', 'Daffodil International University', '2016', 'Web site design and Website development.', '2018'),
(4, 'Lecturer', 'Dhaka University', '2010', 'Teaching and l;dsafjklgashjklghklhgkldfhsklgdfg', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`id`, `name`) VALUES
(6, 'Swiming, singing watching movie '),
(7, 'Programming, Teaching 3');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_title` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `slogan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_title`, `image`, `slogan`) VALUES
(4, 'Jennifer Doe', 'jennifer-doe1.jpg', 'Stanford University');

-- --------------------------------------------------------

--
-- Table structure for table `mzi_user`
--

CREATE TABLE `mzi_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mzi_user`
--

INSERT INTO `mzi_user` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123123'),
(2, 'zohurul@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `personal_skill`
--

CREATE TABLE `personal_skill` (
  `id` int(11) NOT NULL,
  `skill_progress_title` varchar(100) NOT NULL,
  `skill_progress_limit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_skill`
--

INSERT INTO `personal_skill` (`id`, `skill_progress_title`, `skill_progress_limit`) VALUES
(1, 'web design', '98%'),
(2, 'Web Development', '90%'),
(3, 'Graphics Design ', '70%');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `project_link` varchar(200) DEFAULT NULL,
  `short_desc` varchar(200) DEFAULT NULL,
  `project_feature` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_link`, `short_desc`, `project_feature`) VALUES
(3, 'This is project', 'http://techknowheaven.com/', 'TKH  is a IT firm of Bangladesh', 'c15d0298513e8b87f5afe4ad2585b6f4.jpg'),
(5, 'Team Critix', 'http://teamcritix.com/', 'Team Critix is the official Gaming Clan Team', 'de0c59539b778cdbcd96815a03beccda.jpg'),
(6, 'Professor Dr. Raqibul Anwar', 'http://professorraqibulanwar.com/', 'Medical Service website of Professor Dr. Raqibul Anwar', '2c1ef7d41d21218bbd471a5cdc53dcec.jpg'),
(7, 'World Communication Internet Service', 'http://worldbd.net/', 'World Communication Internet Service Provider (ISP) Company.', 'e009f5190512490c80b96a07ed83ea10.jpg'),
(8, 'Junipreneur|', 'http://junipreneur.com/', 'Junipreneur is a platform through which we will take care of every student through personal training,....', 'df51a624ea2f9be373f73f7cab128d6d.jpg'),
(9, 'Dolphin Digital', 'https://dolphindigital.net/', 'Dolphin Digital is a time demand initiative of Dolphin Computers Limited which......', '353d0fd2e2bdd2b5eb154426c6163e03.jpg'),
(10, ' Monwarul Islam Rebel', 'http://rebelmonwar.com/', 'Positive Life With Monwarul Islam Rebel', '3e33a07a872fcfa0041bfecb4bb75113.png'),
(11, 'Belal Khan Personal website', 'http://belalkhan.net/', 'Belal Khan\r\nMusic only makes me stronger. Music speaks to the heart in ways words cannot express.', '261119461f188de27fed066e8c944924.png'),
(12, 'Sector of web triangle', 'http://sectorofwebtriangle.com/', 'ector of Web Triangle is a complete IT solution company. We are the ideal Graphic Design, Online marketing (SEO, SMM), software development....', '22620b04b2a956185cb9339e1277cd62.png');

-- --------------------------------------------------------

--
-- Table structure for table `research_project`
--

CREATE TABLE `research_project` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(200) DEFAULT NULL,
  `project_image` varchar(100) DEFAULT NULL,
  `project_full_descrip` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_project`
--

INSERT INTO `research_project` (`id`, `title`, `sub_title`, `project_image`, `project_full_descrip`) VALUES
(1, 'Title of Preject', 'Very short description of the project.', 'p5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(2, 'Title of Preject', 'Very short description of the project.', 'e4e7a6cb208564841852d516cb2368c8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `service_details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `title`, `subtitle`, `service_details`) VALUES
(2, 'fa fa-cloud-upload', 'Branding your company', 'Unique features', 'If you want branding your business or company here you get full support.'),
(3, 'fa fa-code', 'Web development', 'Published your business world wide.', 'Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).You can published your business using website.'),
(4, 'fa fa-code', 'Web design ', 'Published your business world wide static.', ' Web designis the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).You can published your business using website.'),
(5, 'fa fa-palette', 'Graphics Design', 'Grow up your business use visual communication.', 'Graphic design is the process of visual communication and problem-solving through the use of typography, photography and illustration. ');

-- --------------------------------------------------------

--
-- Table structure for table `socail_media`
--

CREATE TABLE `socail_media` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socail_media`
--

INSERT INTO `socail_media` (`id`, `class_name`, `link`) VALUES
(1, 'fa fa-facebook', 'https://www.facebook.com/zohurulislambd'),
(2, 'fa fa-twitter', 'https://twitter.com/Zohurul43'),
(3, 'fa fa-linkedin', 'https://www.linkedin.com/in/zohurul-islam-49a541115/');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start_year` varchar(100) DEFAULT NULL,
  `end_year` varchar(100) DEFAULT NULL,
  `short_descrip` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_cont`
--
ALTER TABLE `banner_cont`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_cont_id_uindex` (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interested`
--
ALTER TABLE `interested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mzi_user`
--
ALTER TABLE `mzi_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_skill`
--
ALTER TABLE `personal_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_project`
--
ALTER TABLE `research_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socail_media`
--
ALTER TABLE `socail_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teaching_id_uindex` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `banner_cont`
--
ALTER TABLE `banner_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interested`
--
ALTER TABLE `interested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mzi_user`
--
ALTER TABLE `mzi_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_skill`
--
ALTER TABLE `personal_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `research_project`
--
ALTER TABLE `research_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socail_media`
--
ALTER TABLE `socail_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
