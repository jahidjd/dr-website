-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 06:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordis`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section_two`
--

CREATE TABLE `about_section_two` (
  `id` bigint(20) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_q` text NOT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_title_one` varchar(100) NOT NULL,
  `p_title_two` varchar(100) NOT NULL,
  `p_title_three` varchar(100) NOT NULL,
  `p_title_four` varchar(100) NOT NULL,
  `p_value_one` varchar(30) NOT NULL,
  `p_value_two` varchar(30) NOT NULL,
  `p_value_three` varchar(30) NOT NULL,
  `p_value_four` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section_two`
--

INSERT INTO `about_section_two` (`id`, `section_title`, `section_q`, `details`, `image`, `p_title_one`, `p_title_two`, `p_title_three`, `p_title_four`, `p_value_one`, `p_value_two`, `p_value_three`, `p_value_four`, `created_at`, `updated_at`) VALUES
(1, 'What to do if your head or neck hurts too often?', '\"Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative\"', 'If a headache has become a fairly common occurrence in your life, you feel discomfort in the occipital or temporal region, then you can undergo a preventive examination under the “If your head hurts often” program, which will help determine the source of the headache and choose an individual treatment that will eliminate the problem and restore your good health.', 'about-section-two1683711278.jpg', 'IT Development', 'Companies', 'Private Clients', 'Medicine', '35', '40', '25', '65', '2023-05-10 07:50:26', '2023-05-10 03:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) NOT NULL,
  `online_booking` text NOT NULL,
  `medical_protection` text NOT NULL,
  `own_laboratory` text NOT NULL,
  `top_image` varchar(50) NOT NULL,
  `video_image` varchar(50) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `online_booking`, `medical_protection`, `own_laboratory`, `top_image`, `video_image`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'We offer a wide range of paid medical services and consultations, as well as high quality service. Order a specialist or services. Teamwork is a hallmark of our medical centers, it is an advantage.', 'During the COVID-19 pandemic, we do our best to ensure your safety when visiting Nordis medical center. We combine experience and knowledge in different fields of medicine to find the right.', 'We invite everyone who takes care of their health to undergo a comprehensive examination of the body at affordable prices. More than 100 doctors work in our center for the benefit of patients.', 'top_image1683388488.jpg', 'video-image1683388489.jpg', 'https://vimeo.com/173876226', NULL, '2023-05-06 09:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Diagnostics', 'active', '2023-05-05 12:06:44', '2023-05-05 12:06:44'),
(2, 'Immunology', 'active', '2023-05-05 12:06:54', '2023-05-05 12:06:54'),
(3, 'Pediatrics', 'active', '2023-05-05 12:07:03', '2023-05-05 12:07:03'),
(4, 'Surgery', 'active', '2023-05-05 12:07:09', '2023-05-05 12:07:09'),
(6, 'Vaccination', 'active', '2023-05-05 12:07:32', '2023-05-05 12:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `short_details` text NOT NULL,
  `image_one` varchar(50) NOT NULL,
  `image_two` varchar(50) NOT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tags`)),
  `quotation` text NOT NULL,
  `quoted_by` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `more_details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `blog_id`, `short_details`, `image_one`, `image_two`, `tags`, `quotation`, `quoted_by`, `post`, `more_details`, `created_at`, `updated_at`) VALUES
(1, 5, 'Researchers from the American Heart Association Committee on Electrocardiography and Arrhythmia of the Clinical Cardiology Council and the Stroke Council studied the effect of sleep respiratory disorders on the development of heart pathology. Respiratory failure during sleep causes heart rhythm disorders, hypoxia and changes in acid-base balance, according to researchers of the American Heart Association (AHA). The scientific statement was published in the journal Circulation.', 'image-one-1683904260.jpg', 'image-two-1683904260.jpg', '[\"madical\",\"helth\"]', '\"Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels.\"', 'Joana Lee', 'Cardiologist', 'Scientists note the importance of optimizing screening of respiratory disorders in sleep, identifying the characteristics of predictive indicators and underlying pathophysiology. Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels, violation of sleep architecture and a concomitant increase in negative intrathoracic pressure, directly affecting heart function.', '2023-05-12 09:05:36', '2023-05-12 09:11:01'),
(2, 3, 'Researchers from the American Heart Association Committee on Electrocardiography and Arrhythmia of the Clinical Cardiology Council and the Stroke Council studied the effect of sleep respiratory disorders on the development of heart pathology. Respiratory failure during sleep causes heart rhythm disorders, hypoxia and changes in acid-base balance, according to researchers of the American Heart Association (AHA). The scientific statement was published in the journal Circulation.', 'image-one-1683911501.jpg', 'image-two-1683911501.jpg', '[\"madical\",\"vitamins\",\"covid-19\"]', '\"Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels.\"', 'Jahid Hasan', 'Developer', 'Scientists note the importance of optimizing screening of respiratory disorders in sleep, identifying the characteristics of predictive indicators and underlying pathophysiology. Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels, violation of sleep architecture and a concomitant increase in negative intrathoracic pressure, directly affecting heart function.', '2023-05-12 11:11:41', '2023-05-12 11:11:41'),
(3, 4, 'Researchers from the American Heart Association Committee on Electrocardiography and Arrhythmia of the Clinical Cardiology Council and the Stroke Council studied the effect of sleep respiratory disorders on the development of heart pathology. Respiratory failure during sleep causes heart rhythm disorders, hypoxia and changes in acid-base balance, according to researchers of the American Heart Association (AHA). The scientific statement was published in the journal Circulation.', 'image-one-1683911720.jpg', 'image-two-1683911720.jpg', '[\"helth\",\"vitamins\"]', '\"Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels.\"', 'Jahid Hasan', 'developer', 'Scientists note the importance of optimizing screening of respiratory disorders in sleep, identifying the characteristics of predictive indicators and underlying pathophysiology. Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels, violation of sleep architecture and a concomitant increase in negative intrathoracic pressure, directly affecting heart function.', '2023-05-12 11:15:20', '2023-05-12 11:15:20'),
(4, 2, 'Researchers from the American Heart Association Committee on Electrocardiography and Arrhythmia of the Clinical Cardiology Council and the Stroke Council studied the effect of sleep respiratory disorders on the development of heart pathology. Respiratory failure during sleep causes heart rhythm disorders, hypoxia and changes in acid-base balance, according to researchers of the American Heart Association (AHA). The scientific statement was published in the journal Circulation.', 'image-one-1683911940.jpg', 'image-two-1683911940.jpg', '[\"madical\",\"helth\"]', '\"Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels.\"', 'Jahid Hasan', 'developer', 'Scientists note the importance of optimizing screening of respiratory disorders in sleep, identifying the characteristics of predictive indicators and underlying pathophysiology. Sleep breathing disorders, characterized by specific physiological mechanisms, include obstructive and central pathophysiology, it affects about 1 billion people in the world. In the absence of treatment, disorders in the autonomic nervous system develop, repeated hypoxia, changes in carbon dioxide levels, violation of sleep architecture and a concomitant increase in negative intrathoracic pressure, directly affecting heart function.', '2023-05-12 11:19:00', '2023-05-12 11:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_shorts`
--

CREATE TABLE `blog_shorts` (
  `id` bigint(20) NOT NULL,
  `categories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`categories`)),
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image_short` varchar(50) NOT NULL,
  `image_big` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `month` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_shorts`
--

INSERT INTO `blog_shorts` (`id`, `categories`, `title`, `details`, `image_short`, `image_big`, `date`, `month`, `status`, `created_at`, `updated_at`) VALUES
(2, '[\"Diagnostics\"]', 'The authors report that breathing disorders in sleep cause atrial and ventricular changes', 'Treatment of respiratory disorders in sleep reduces the frequency of atrial fibrillation recurrences after rhythm control interventions. The authors report that breathing disorders in sleep cause atrial and ventricular changes in the heart rhythm.', 'blog-short-1683312805.jpg', 'blog-big-1683312805.jpg', '05', 'May', 'active', '2023-05-05 12:53:25', '2023-05-05 12:53:25'),
(3, '[\"Diagnostics\",\"Vaccination\"]', 'Revaccination against coronavirus will help to stay healthy', 'The document presents data on respiratory failure during sleep and its effect on the development of atrial fibrillation, ventricular sudden cardiac death and bradiarhythmia.', 'blog-short-1683312838.jpg', 'blog-big-1683312838.jpg', '05', 'May', 'active', '2023-05-05 12:53:58', '2023-05-05 12:53:58'),
(4, '[\"Immunology\",\"Pediatrics\"]', 'Prevention of colds with vitamins from natural products', 'Particular attention is paid to the synthesis of data related to clinical practice. Extensive surgical interventions are carried out annually by 300 million people around the world, the manual notes.', 'blog-short-1683312894.jpg', 'blog-big-1683312894.jpg', '05', 'May', 'active', '2023-05-05 12:54:54', '2023-05-05 12:54:54'),
(5, '[\"Diagnostics\",\"Immunology\"]', 'Breathing disorders in sleep led to the development of heart arrhythmias', 'Pathophysiological consequences of sleep breathing disorders caused by day-night mode and circadian biorhythm collectively affect the electrophysiology of the heart, creating an ideal environment for arrhythmogenic predisposition.', 'blog-short-1683313007.jpg', 'blog-big-1683313008.jpg', '05', 'May', 'active', '2023-05-05 12:56:48', '2023-05-05 13:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_image`
--

CREATE TABLE `consultation_image` (
  `id` bigint(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation_image`
--

INSERT INTO `consultation_image` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image-1683351745.jpg', '2023-05-06 05:31:40', '2023-05-05 23:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_popup`
--

CREATE TABLE `consultation_popup` (
  `id` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation_popup`
--

INSERT INTO `consultation_popup` (`id`, `message`, `created_at`, `updated_at`) VALUES
(2, 'During the COVID-19 pandemic, we do our best to ensure  your safety when visiting Nordis medical center.', '2023-05-05 23:56:19', '2023-05-05 23:56:19'),
(3, 'Dentistry provides a full range of services, from therapy, orthopedics, orthodontics to implantation.', '2023-05-05 23:58:00', '2023-05-05 23:58:00'),
(4, 'High-class specialists perform plastic surgery of the  face, neck, mammary glands, abdomen, buttocks, intimate plastic surgery.', '2023-05-05 23:58:14', '2023-05-05 23:58:14'),
(5, 'Thanks to the latest high-tech equipment and the   experience of specialists, the medical center performs  minimally invasive interventions.', '2023-05-05 23:58:26', '2023-05-05 23:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `workday_from` varchar(50) DEFAULT NULL,
  `workday_end` varchar(50) DEFAULT NULL,
  `time_from` varchar(30) DEFAULT NULL,
  `time_end` varchar(30) DEFAULT NULL,
  `work_day_single` varchar(50) DEFAULT NULL,
  `work_time_single_start` varchar(30) DEFAULT NULL,
  `work_time_single_end` varchar(30) DEFAULT NULL,
  `map` text NOT NULL,
  `off_day` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `mobile`, `email`, `workday_from`, `workday_end`, `time_from`, `time_end`, `work_day_single`, `work_time_single_start`, `work_time_single_end`, `map`, `off_day`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka, Bangladesh', '01627809808', 'jahidjd18@gmail.com', 'Sat', 'Wed', NULL, '18:00', 'Thursday', '11:00', '22:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.070144685104!2d90.34944885440177!3d23.76457825714484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1682999097165!5m2!1sen!2sbd', 'Friday', 'logo1684084284.png', '2022-10-25 10:21:51', '2023-05-14 11:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `details_section`
--

CREATE TABLE `details_section` (
  `id` bigint(20) NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_section`
--

INSERT INTO `details_section` (`id`, `blog_id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 5, 'Treatment and prevention', 'The authors report that breathing disorders in sleep cause atrial and ventricular changes in the heart rhythm. Treatment of respiratory disorders in sleep reduces the frequency of atrial fibrillation recurrences after rhythm control interventions.', '2023-05-12 10:05:15', '2023-05-12 10:06:09'),
(2, 5, 'Caused complications', 'Pathophysiological consequences of sleep breathing disorders caused by day-night mode and circadian biorhythm collectively affect the electrophysiology of the heart, creating an ideal environment for arrhythmogenic predisposition.', '2023-05-12 10:05:35', '2023-05-12 10:05:35'),
(3, 5, 'The main causes of the disease', 'The document presents data on respiratory failure during sleep and its effect on the development of atrial fibrillation, ventricular tachyarrhythmias, sudden cardiac death and bradiarhythmia. Particular attention is paid to the synthesis of data related to clinical practice. Extensive surgical interventions are carried out annually by 300 million people around the world, the manual notes. Of these, about 85% are non-heart surgeries.', '2023-05-12 10:05:50', '2023-05-12 10:05:50'),
(4, 3, 'The main causes of the disease', 'The document presents data on respiratory failure during sleep and its effect on the development of atrial fibrillation, ventricular tachyarrhythmias, sudden cardiac death and bradiarhythmia. Particular attention is paid to the synthesis of data related to clinical practice. Extensive surgical interventions are carried out annually by 300 million people around the world, the manual notes. Of these, about 85% are non-heart surgeries.', '2023-05-12 11:13:15', '2023-05-12 11:13:15'),
(5, 3, 'Treatment and prevention', 'The authors report that breathing disorders in sleep cause atrial and ventricular changes in the heart rhythm. Treatment of respiratory disorders in sleep reduces the frequency of atrial fibrillation recurrences after rhythm control interventions.', '2023-05-12 11:13:33', '2023-05-12 11:13:33'),
(6, 3, 'Caused complications', 'Pathophysiological consequences of sleep breathing disorders caused by day-night mode and circadian biorhythm collectively affect the electrophysiology of the heart, creating an ideal environment for arrhythmogenic predisposition.', '2023-05-12 11:13:46', '2023-05-12 11:13:46'),
(7, 4, 'Treatment and prevention', 'The authors report that breathing disorders in sleep cause atrial and ventricular changes in the heart rhythm. Treatment of respiratory disorders in sleep reduces the frequency of atrial fibrillation recurrences after rhythm control interventions.', '2023-05-12 11:15:48', '2023-05-12 11:15:48'),
(8, 4, 'Caused complications', 'Pathophysiological consequences of sleep breathing disorders caused by day-night mode and circadian biorhythm collectively affect the electrophysiology of the heart, creating an ideal environment for arrhythmogenic predisposition.', '2023-05-12 11:15:59', '2023-05-12 11:15:59'),
(9, 4, 'The main causes of the disease', 'The document presents data on respiratory failure during sleep and its effect on the development of atrial fibrillation, ventricular tachyarrhythmias, sudden cardiac death and bradiarhythmia. Particular attention is paid to the synthesis of data related to clinical practice. Extensive surgical interventions are carried out annually by 300 million people around the world, the manual notes. Of these, about 85% are non-heart surgeries.', '2023-05-12 11:16:10', '2023-05-12 11:16:10'),
(10, 2, 'Treatment and prevention', 'The authors report that breathing disorders in sleep cause atrial and ventricular changes in the heart rhythm. Treatment of respiratory disorders in sleep reduces the frequency of atrial fibrillation recurrences after rhythm control interventions', '2023-05-12 11:20:16', '2023-05-12 11:20:16'),
(11, 2, 'Caused complications', 'Pathophysiological consequences of sleep breathing disorders caused by day-night mode and circadian biorhythm collectively affect the electrophysiology of the heart, creating an ideal environment for arrhythmogenic predisposition.', '2023-05-12 11:23:19', '2023-05-12 11:23:19'),
(12, 2, 'The main causes of the disease', 'The document presents data on respiratory failure during sleep and its effect on the development of atrial fibrillation, ventricular tachyarrhythmias, sudden cardiac death and bradiarhythmia. Particular attention is paid to the synthesis of data related to clinical practice. Extensive surgical interventions are carried out annually by 300 million people around the world, the manual notes. Of these, about 85% are non-heart surgeries.', '2023-05-12 11:23:32', '2023-05-12 11:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `details_spacific_list`
--

CREATE TABLE `details_spacific_list` (
  `id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_spacific_list`
--

INSERT INTO `details_spacific_list` (`id`, `project_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 6, 'More than 10 medical centers throughout the country', '2023-05-10 05:53:39', '2023-05-10 05:53:39'),
(2, 6, 'We work with all popular insurance companies', '2023-05-10 05:54:09', '2023-05-10 05:54:09'),
(3, 6, 'We can help with delivery to our center or take home', '2023-05-10 05:54:36', '2023-05-10 05:54:36'),
(4, 6, 'The most professional doctors and medical staff', '2023-05-10 05:54:44', '2023-05-10 06:04:35'),
(6, 5, 'More than 10 medical centers throughout the country', '2023-05-10 06:08:36', '2023-05-10 06:08:36'),
(7, 5, 'We work with all popular insurance companies', '2023-05-10 06:08:47', '2023-05-10 06:08:47'),
(8, 5, 'We can help with delivery to our center or take home', '2023-05-10 06:08:56', '2023-05-10 06:08:56'),
(9, 5, 'The most professional doctors and medical staff', '2023-05-10 06:09:04', '2023-05-10 06:09:04'),
(10, 4, 'More than 10 medical centers throughout the country', '2023-05-10 06:10:16', '2023-05-10 06:10:16'),
(11, 4, 'We work with all popular insurance companies', '2023-05-10 06:10:24', '2023-05-10 06:10:24'),
(12, 4, 'We can help with delivery to our center or take home', '2023-05-10 06:10:31', '2023-05-10 06:10:31'),
(13, 4, 'The most professional doctors and medical staff', '2023-05-10 06:10:41', '2023-05-10 06:10:41'),
(14, 3, 'More than 10 medical centers throughout the country', '2023-05-10 06:11:25', '2023-05-10 06:11:25'),
(15, 3, 'We work with all popular insurance companies', '2023-05-10 06:11:34', '2023-05-10 06:11:34'),
(16, 3, 'We can help with delivery to our center or take home', '2023-05-10 06:11:42', '2023-05-10 06:11:42'),
(17, 3, 'The most professional doctors and medical staff', '2023-05-10 06:11:48', '2023-05-10 06:11:48'),
(18, 2, 'We can help with delivery to our center or take home', '2023-05-10 06:13:16', '2023-05-10 06:13:16'),
(19, 2, 'We work with all popular insurance companies', '2023-05-10 06:13:18', '2023-05-10 06:13:18'),
(20, 2, 'The most professional doctors and medical staff', '2023-05-10 06:13:28', '2023-05-10 06:13:28'),
(21, 2, 'More than 10 medical centers throughout the country', '2023-05-10 06:13:34', '2023-05-10 06:13:34'),
(22, 1, 'We work with all popular insurance companies', '2023-05-10 06:14:15', '2023-05-10 06:14:15'),
(23, 1, 'More than 10 medical centers throughout the country', '2023-05-10 06:14:18', '2023-05-10 06:14:18'),
(24, 1, 'The most professional doctors and medical staff', '2023-05-10 06:14:30', '2023-05-10 06:14:30'),
(25, 1, 'We can help with delivery to our center or take home', '2023-05-10 06:14:33', '2023-05-10 06:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'asa', 'image1684089411.jpg', 'active', '2023-05-14 12:36:51', '2023-05-14 12:36:51'),
(3, 'dxg', 'image1684089481.jpg', 'active', '2023-05-14 12:38:01', '2023-05-14 12:38:01'),
(4, 'sdggd', 'image1684089490.jpg', 'active', '2023-05-14 12:38:10', '2023-05-14 12:38:10'),
(6, 'sdg', 'image1684089510.jpg', 'active', '2023-05-14 12:38:30', '2023-05-14 12:38:30'),
(7, 'aaaaaa', 'image1684089896.jpg', 'active', '2023-05-14 12:44:57', '2023-05-14 12:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_02_165444_create_sliders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `online_consultation`
--

CREATE TABLE `online_consultation` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_consultation`
--

INSERT INTO `online_consultation` (`id`, `title`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Are surgeries performed at your medical center?', 'All surgical interventions that are listed in the “Services” section, in the Aesthetic Surgery section, are performed on the basis of our medical center. We have all the necessary and modern equipment and tools for surgical interventions, and we also have the best plastic and laser surgeons!', 'active', '2023-05-05 23:18:40', '2023-05-05 23:18:40'),
(2, 'What type of anesthesia is used in your medical center?', 'Surgery in our medical center takes place both under local anesthesia and under general anesthesia. The choice of type of anesthesia depends on the indications, contraindications and wishes of the patient.', 'active', '2023-05-05 23:19:58', '2023-05-05 23:19:58'),
(3, 'How to prepare for an appointment with a cardiologist?', 'Special preparation is not required, but for maximum informativeness of the consultation, it is advisable to have an archive of all available medical documents (outpatient medical record or an extract from it), an ECG less than 2 weeks old, and information about home blood pressure figures.', 'active', '2023-05-05 23:20:16', '2023-05-05 23:20:16'),
(4, 'What to do if it hurts in the chest or pricks the heart?', 'To minimize the likelihood of developing cardiovascular diseases, it is enough to undergo a preventive examination once a year. The program allows for a short period of time to conduct an extensive analysis of the main parameters of the cardiovascular system, to detect asymptomatic and hidden forms of heart disease, to identify predisposition to atherosclerosis, to assess the risk of developing coronary heart disease, as well as angina pectoris and myocardial infarction, to give an objective assessment of the effectiveness of the treatment.', 'active', '2023-05-05 23:20:32', '2023-05-05 23:20:32'),
(5, 'What to do if your head or neck hurts too often?', 'If a headache has become a fairly common occurrence in your life, you feel discomfort in the occipital or temporal region, then you can undergo a preventive examination under the “If your head hurts often” program, which will help determine the source of the headache and choose an individual treatment that will eliminate the problem and restore your good health.', 'active', '2023-05-05 23:21:31', '2023-05-05 23:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pediatrics', 'The\r\n                                                                                    treatment and diagnostic department\r\n                                                                                    is not only consultations of narrow\r\n                                                                                    specialists in more than 50 areas\r\n                                                                                    for adults and...The\r\n                                                                                    treatment and diagnostic department\r\n                                                                                    is not only consultations of narrow\r\n                                                                                    specialists in more than 50 areas\r\n                                                                                    for adults and...', 'projects-1683218084.jpg', 'active', '2023-05-04 10:34:44', '2023-05-04 10:34:44'),
(2, 'Coronavirus Vaccine', 'The\r\n                                                                                    treatment and diagnostic department\r\n                                                                                    is not only consultations of narrow\r\n                                                                                    specialists in more than 50 areas\r\n                                                                                    for adults and...', 'projects-1683218323.jpg', 'active', '2023-05-04 10:38:43', '2023-05-04 10:38:43'),
(3, 'Throat         Swab', 'Diagnostic rooms are equipped with\r\n                                                                                    expert-class equipment, which\r\n                                                                                    ensures high accuracy of the\r\n                                                                                    examinations....', 'projects-1683218368.jpg', 'active', '2023-05-04 10:39:28', '2023-05-04 10:39:28'),
(4, 'Laboratory Research', 'Diagnostic rooms are equipped with\r\n                                                                                    expert-class equipment, which\r\n                                                                                    ensures high accuracy of the\r\n                                                                                    examinations....', 'projects-1683218395.jpg', 'active', '2023-05-04 10:39:55', '2023-05-04 10:39:55'),
(5, 'Operative Interventions', 'The\r\n                                                                                    treatment and diagnostic department\r\n                                                                                    is not only consultations of narrow\r\n                                                                                    specialists in more than 50 areas\r\n                                                                                    for adults and...', 'projects-1683218427.jpg', 'active', '2023-05-04 10:40:27', '2023-05-04 10:40:27'),
(6, 'Rehabilitation', 'The\r\n                                                                                    clinical and diagnostic laboratory\r\n                                                                                    provides a wide range of studies -\r\n                                                                                    from a general blood test to a\r\n                                                                                    blood...', 'projects-1683218458.jpg', 'active', '2023-05-04 10:40:58', '2023-05-04 10:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_id`, `title`, `details`, `video_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 6, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683718338.jpg', '2023-05-10 05:32:19', '2023-05-10 05:32:19'),
(2, 5, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683720500.jpg', '2023-05-10 06:06:48', '2023-05-10 06:08:20'),
(3, 4, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683720601.jpg', '2023-05-10 06:10:01', '2023-05-10 08:17:06'),
(4, 3, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683720677.jpg', '2023-05-10 06:11:17', '2023-05-10 06:11:17'),
(5, 2, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683720787.jpg', '2023-05-10 06:13:07', '2023-05-10 06:13:07'),
(6, 1, 'Our doctors will take care of your health', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients.', 'https://www.youtube.com/watch?v=SjqXXouLNPE', 'projects-details-1683720842.jpg', '2023-05-10 06:14:03', '2023-05-10 06:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `id` bigint(20) NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`id`, `blog_id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 5, 'How to choose a company?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', '2023-05-12 09:31:19', '2023-05-12 09:31:19'),
(2, 5, 'How to choose the right one?', 'At the end of the day, going forward, a new normal that has evolved from generation. Bring to the table win-win survival strategies to ensure proactive domination.', '2023-05-12 09:32:42', '2023-05-12 09:32:42'),
(3, 5, 'What documents show the doctor?', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 09:33:22', '2023-05-12 09:33:22'),
(4, 5, 'General recommendations', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 09:33:39', '2023-05-12 09:43:37'),
(5, 3, 'How to choose a company?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', '2023-05-12 11:12:04', '2023-05-12 11:12:04'),
(6, 3, 'How to choose the right one?', 'At the end of the day, going forward, a new normal that has evolved from generation. Bring to the table win-win survival strategies to ensure proactive domination.', '2023-05-12 11:12:21', '2023-05-12 11:12:21'),
(7, 3, 'What documents show the doctor?', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:12:39', '2023-05-12 11:12:39'),
(8, 3, 'General recommendations', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:12:53', '2023-05-12 11:12:53'),
(9, 4, 'How to choose a company?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', '2023-05-12 11:16:32', '2023-05-12 11:16:32'),
(10, 4, 'How to choose the right one?', 'How to choose the right one?', '2023-05-12 11:16:48', '2023-05-12 11:16:48'),
(11, 4, 'How to choose the right one?', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:17:16', '2023-05-12 11:17:16'),
(12, 4, 'General recommendations', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:17:29', '2023-05-12 11:17:29'),
(13, 2, 'How to choose a company?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', '2023-05-12 11:19:20', '2023-05-12 11:19:20'),
(14, 2, 'How to choose the right one?', 'At the end of the day, going forward, a new normal that has evolved from generation. Bring to the table win-win survival strategies to ensure proactive domination.', '2023-05-12 11:19:31', '2023-05-12 11:19:31'),
(15, 2, 'What documents show the doctor?', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:19:46', '2023-05-12 11:19:46'),
(16, 2, 'General recommendations', 'Adult patients have enough passports, children need a birth certificate and a passport of one of the parents. Ideally – if you have a medical record or discharges from doctors where you were observed before.', '2023-05-12 11:20:00', '2023-05-12 11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `big_text` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_text` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `big_text`, `small_text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Jahid Hasan', 'We give all clients of our center a 30 percent discount on the vaccine against covid 19.', 'slider1683109106.png', NULL, '2023-05-26 22:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `skypee` varchar(100) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `insta` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `degree`, `details`, `skypee`, `fb`, `twitter`, `insta`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Will    Smith', 'Neurologist', 'team-1683291995.jpg', 'Professor', 'Duis aute  irure dolor in reprehenderit in voluptate velit esse cillum dolore eu     fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:06:35', '2023-05-05 07:06:35'),
(2, 'Will   Smith', 'Neurologist', 'team-1683292098.jpg', 'Professor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:08:18', '2023-05-05 07:08:18'),
(3, 'Will  Smith', 'Neurologist', 'team-1683292124.jpg', 'Professor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:08:44', '2023-05-05 07:08:44'),
(4, 'Will Smith', 'Neurologist', 'team-1683292153.jpg', 'Professor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:09:13', '2023-05-05 07:09:13'),
(5, 'Will Smith', 'Neurologist', 'team-1683292184.jpg', 'Professor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:09:44', '2023-05-05 07:09:44'),
(6, 'Will  Smith', 'Neurologist', 'team-1683292233.jpg', 'Professor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident consectetur adipiscing elit.', NULL, NULL, NULL, NULL, 'active', '2023-05-05 07:10:33', '2023-05-05 07:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `trt_link` varchar(255) DEFAULT NULL,
  `lnkd_link` varchar(255) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `post`, `details`, `image`, `insta_link`, `fb_link`, `trt_link`, `lnkd_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jina  Tailor', 'Economist', 'Many thanks to neurologist\r\n                                                                                            James Miller for his highly\r\n                                                                                            qualified medical care,\r\n                                                                                            competent and accessible\r\n                                                                                            explanation of the problem,\r\n                                                                                            sensitive humane attitude,\r\n                                                                                            hope for recovery.', 'testimonial-1683220892.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'active', '2023-05-04 11:21:32', '2023-05-04 11:34:22'),
(2, 'Kristina     Sanders', 'Designer', 'Linda Cross is a very good\r\n                                                                                            specialist, helped to\r\n                                                                                            \"put everything on the\r\n                                                                                            shelves\" and solve all\r\n                                                                                            the disturbing problems.\r\n                                                                                            Anxiety also went away\r\n                                                                                            during therapy. Thank you so\r\n                                                                                            much!', 'testimonial-1683220982.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'active', '2023-05-04 11:23:02', '2023-05-04 11:34:11'),
(3, 'Kristina  Allen', 'CEO   Director', 'It\'s not the first time\r\n                                                                                            Nordis comes to us! I think\r\n                                                                                            all her patients know what a\r\n                                                                                            competent, attentive,\r\n                                                                                            sensitive and professional\r\n                                                                                            doctor he is. And she is a\r\n                                                                                            very bright, charming\r\n                                                                                            person.', 'testimonial-1683221084.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'active', '2023-05-04 11:24:44', '2023-05-04 11:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `top_section`
--

CREATE TABLE `top_section` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_section`
--

INSERT INTO `top_section` (`id`, `title`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Own Laboratory', 'We invite everyone who takes care of their health to undergo a comprehensive examination of the body at affordable prices.', 'active', NULL, '2023-05-04 09:24:43', '2023-05-04 09:43:17'),
(2, 'Сovid 19 Protection', 'During the COVID-19 pandemic, we do our best to ensure your safety when visiting Nordis medical center.', 'active', NULL, '2023-05-04 09:25:00', '2023-05-04 09:25:00'),
(3, 'Online Booking', 'We offer a wide range of paid medical services and consultations, as well as high quality service. Order a specialist or services.', 'active', NULL, '2023-05-04 09:25:13', '2023-05-04 09:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `top_section_two`
--

CREATE TABLE `top_section_two` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `video_link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_section_two`
--

INSERT INTO `top_section_two` (`id`, `title`, `details`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'We have assembled a team of professionals and medical experts', 'More than 100 doctors work in our center for the benefit of patients. Caring nurses also provide attention and comfort. Teamwork is a hallmark of our medical centers, it is an advantage that helps us achieve excellent results in treatment. We combine experience and knowledge in different fields of medicine to find the right solutions and help patients even in the most difficult cases.', 'https://youtu.be/SjqXXouLNPE', '2023-05-04 15:55:08', '2023-05-04 10:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Oi4.K4yTOaUva6xnSvPofeMdUxXl9scZNWLchUpWqX4QUwicwQlme', NULL, '2023-04-29 04:46:21', '2023-04-29 04:46:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section_two`
--
ALTER TABLE `about_section_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `blog_shorts`
--
ALTER TABLE `blog_shorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation_image`
--
ALTER TABLE `consultation_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation_popup`
--
ALTER TABLE `consultation_popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_section`
--
ALTER TABLE `details_section`
  ADD PRIMARY KEY (`id`,`blog_id`);

--
-- Indexes for table `details_spacific_list`
--
ALTER TABLE `details_spacific_list`
  ADD PRIMARY KEY (`id`,`project_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_consultation`
--
ALTER TABLE `online_consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`,`project_id`);

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_section`
--
ALTER TABLE `top_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_section_two`
--
ALTER TABLE `top_section_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section_two`
--
ALTER TABLE `about_section_two`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_shorts`
--
ALTER TABLE `blog_shorts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `consultation_image`
--
ALTER TABLE `consultation_image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultation_popup`
--
ALTER TABLE `consultation_popup`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details_section`
--
ALTER TABLE `details_section`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details_spacific_list`
--
ALTER TABLE `details_spacific_list`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `online_consultation`
--
ALTER TABLE `online_consultation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `top_section`
--
ALTER TABLE `top_section`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_section_two`
--
ALTER TABLE `top_section_two`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
