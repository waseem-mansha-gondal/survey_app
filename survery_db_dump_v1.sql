-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2017 at 03:00 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1-log
-- PHP Version: 5.6.20-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` int(11) NOT NULL,
  `survey_question_id` int(11) NOT NULL,
  `value` varchar(45) NOT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `survey_question_id`, `value`, `order`) VALUES
(1, 1, 'asdf', NULL),
(2, 1, 'asdf', NULL),
(3, 1, 'sdf', 4),
(4, 2, 'asdf', NULL),
(5, 2, 'two', 2),
(6, 3, 'Lahore', NULL),
(7, 3, 'Karachi', NULL),
(8, 3, 'Islamabad', NULL),
(9, 4, '', NULL),
(10, 5, '', NULL),
(11, 6, 'A', NULL),
(12, 6, 'B', NULL),
(13, 6, 'C', NULL),
(14, 6, 'D', NULL),
(15, 7, 'Good', NULL),
(16, 7, 'Very Good', NULL),
(17, 7, 'Best', NULL),
(18, 8, '', NULL),
(19, 9, 'A', NULL),
(20, 9, 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_types`
--

CREATE TABLE `question_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_types`
--

INSERT INTO `question_types` (`id`, `name`, `description`, `created`, `updated`) VALUES
(1, 'Text field', 'option can be selected more than once', '1487923624', '1488112221'),
(2, 'Radio button', 'some text', '1487923645', '1488112230'),
(3, 'Text Area', 'only one selection', '1487923668', '1488112240'),
(4, 'Dropdown', 'select from drop down', '1488112267', '1488112267'),
(5, 'Checkbox', 'select multiple from checkboxes', '1488112289', '1488112289');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `creater_id` int(11) DEFAULT NULL,
  `status` enum('In Progress','Complete') NOT NULL DEFAULT 'In Progress',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `description`, `creater_id`, `status`, `created`, `updated`) VALUES
(1, 'Polution in pakistan', 'check polution in pakistan', NULL, 'Complete', '2017-03-01 22:12:10', '2017-03-01 22:14:04'),
(2, 'Service is satisfactory', 'Please fill this', NULL, 'Complete', '2017-03-02 02:09:14', '2017-03-02 02:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`id`, `title`, `question_type_id`, `order`, `survey_id`, `required`, `created`, `updated`) VALUES
(1, 'Most polluted city', 2, 1, 1, 1, 1488388393, 1488388393),
(2, 'ONe', 2, 2, 1, 1, 1488388666, 1488388666),
(3, 'Minimum population city', 5, 2, 1, 1, 1488394283, 1488394283),
(4, 'Text Field Question', 1, 3, 1, 1, 1488396840, 1488396840),
(5, 'Text Area question', 3, 1, 1, 0, 1488396894, 1488396894),
(6, 'Drop down qustions', 4, 4, 1, 1, 1488397093, 1488397093),
(7, 'How is our IT department', 4, 1, 2, 1, 1488402607, 1488402607),
(8, 'how to improve communications plese write', 1, 3, 2, 0, 1488402641, 1488402641),
(9, 'Who is best (A/B)', 2, 3, 2, 0, 1488402803, 1488402803);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `updated`, `user_role_id`, `role`) VALUES
(1, 'Admin', 'admin@survey.com', 'ee28fc8668caf9b1667fa7bbcba58cf88fa3fc54', '2017-03-01 20:10:35', '2017-03-01 20:10:35', 1, 'Admin'),
(2, 'Waseem', 'waaseem.mansh@gmail.comasdf', 'c85ad063d8c958598a8d5963c2034d0451c0a925', '2017-03-01 20:51:10', '2017-03-01 22:08:40', 2, ''),
(3, 'Waseem Mansha', 'waaseem.mansha@live.com', '0371663f5e31301933ba0967d1aab741ab3a845b', '2017-03-01 20:56:16', '2017-03-01 20:56:16', 2, NULL),
(4, 'Waseem', 'waaseem123@gmail.com', 'ee28fc8668caf9b1667fa7bbcba58cf88fa3fc54', '2017-03-01 21:04:33', '2017-03-01 21:04:33', 2, NULL),
(5, 'Waseem', 'waseem@google.com', 'ee28fc8668caf9b1667fa7bbcba58cf88fa3fc54', '2017-03-02 02:39:20', '2017-03-02 02:39:20', 2, NULL),
(6, 'adf', 'asdf@gmail.com', 'ee28fc8668caf9b1667fa7bbcba58cf88fa3fc54', '2017-03-02 02:56:39', '2017-03-02 02:56:39', 2, NULL),
(7, '2adf', 'asdf@gmail.comm', '256ab7974534427b3ea76f3f791a044bdd5c8cc8', '2017-03-02 02:57:10', '2017-03-02 02:57:10', 2, NULL),
(8, 'Waseem', 'waaseem.mansh11@gmail.com', '0371663f5e31301933ba0967d1aab741ab3a845b', '2017-03-02 03:00:07', '2017-03-02 03:00:07', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_filled_survey`
--

CREATE TABLE `user_filled_survey` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `survey_question_id` int(11) DEFAULT NULL,
  `option_selected_id` int(11) DEFAULT NULL,
  `option_text` text,
  `completed` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_filled_survey`
--

INSERT INTO `user_filled_survey` (`id`, `user_id`, `survey_id`, `survey_question_id`, `option_selected_id`, `option_text`, `completed`) VALUES
(24, 4, 2, 7, 15, NULL, NULL),
(25, 4, 2, 8, NULL, 'sdfasdf', NULL),
(26, 4, 2, 9, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `created`, `updated`) VALUES
(1, 'Admin', '2017-02-24 11:56:58', '2017-02-24 11:56:58'),
(2, 'Public', '2017-02-24 11:57:06', '2017-02-24 11:57:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_types`
--
ALTER TABLE `question_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_filled_survey`
--
ALTER TABLE `user_filled_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `question_types`
--
ALTER TABLE `question_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_filled_survey`
--
ALTER TABLE `user_filled_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
