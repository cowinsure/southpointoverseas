-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2025 at 09:54 PM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasvir_southpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

-- CREATE TABLE `abouts` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `image` varchar(255) DEFAULT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Company Introduction', 'images/hq5n7d8B2BtgOoWPmYs3cLl2TY1wQEuiRKZvjVF9.jpg', 'Bangladesh with a teeming population of approximately 180 million people is mostly dependent on her inbound Remittances, now boasting of a whopping 25 Billion Dollars per annum.\r\n\r\nThe chief commodities of export include Jute, Tea, Ceramics, Leather Products, Garments and profoundly the export of Manpower and this valiant sector injects or contributes a healthy ratio of 9% of our total GDP directly, the core of our National Exchequer.\r\n\r\nThis rapidly growing Manpower sector of Bangladesh comprises 2,000 (Two Thousand) Government Licenced Recruiting Agencies and South Point Overseas Limited (RL-622) with a through professional outfit and a technically advanced Training Centre along with a Joint Venture Partnership with Singapore Piling and Civil Engineering Pte. Ltd. which is presently known as Singapore Engineering & Construction Pte. Ltd. and close association with BCA of the Government of Singapore provide constructive impetus to organize the complete chain of training and test under the instructional curriculum of the Government of Singapore.\r\n\r\nSouth Point Overseas Ltd. established an Overseas Training Centre (OTC) under the name of ‘Singapore Engineering & Construction - South Point Skills Centre’ located at Ashulia, 12 km North-West of Hazrat Shahjalal Intl. Airport stretching over a landscape of more than 9 acres with a covered space exceeding 2,00,000 sft. Singapore Engineering & Construction - South Point Skills Centre is currently the largest Training & Test Centre in Bangladesh. \r\n\r\nWithin two decades of operations, South Point Overseas Ltd. has successfully despatched exactly 20,379 workers to Singapore alone as on the last date of December, 2021. Details are as under:', '2021-08-04 00:18:30', '2022-01-30 11:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

-- CREATE TABLE `areas` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `area` varchar(255) NOT NULL,
--   `client_id` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 'Singapore Piling & Civil Engineering Pte. Ltd.', '1', '2021-08-15 04:06:43', '2021-08-15 04:28:52'),
(3, 'Li Hua Construction Pte Ltd.', '1', '2021-08-15 04:42:28', '2021-08-15 04:42:28'),
(4, 'Kenzo Construction Pte Ltd.', '1', '2021-08-15 04:43:39', '2021-08-15 04:43:39'),
(5, 'Lim Sin Kook Construction Pte Ltd.', '1', '2021-08-15 04:43:49', '2021-08-15 04:43:49'),
(6, 'Costoba Design and Build Pte Ltd.', '1', '2021-08-15 04:43:57', '2021-08-15 04:43:57'),
(7, 'Zim Sia Construction Pte Ltd.', '1', '2021-08-15 04:44:11', '2021-08-15 04:44:11'),
(8, 'W&P Construction Pte Ltd.', '1', '2021-08-15 04:44:19', '2021-08-15 04:44:19'),
(9, 'Transasia Builders', '1', '2021-08-15 04:44:29', '2021-08-15 04:44:29'),
(10, 'Boon Tian Construction Pte Ltd.', '1', '2021-08-15 04:44:45', '2021-08-15 04:44:45'),
(11, 'Zed Speed Engineering and Construction Pte Ltd. SINGAPORE', '1', '2021-08-15 04:44:57', '2021-08-15 04:44:57'),
(12, 'A.S.B. Pte Ltd. – Chan Chook Farm Pte Ltd.', '1', '2021-08-15 04:45:06', '2021-08-15 04:45:06'),
(13, 'Camelian Building Construction Pte Ltd.', '1', '2021-08-15 04:45:19', '2021-08-15 04:45:19'),
(14, 'Accolade Construction Pte Ltd.', '1', '2021-08-15 04:45:28', '2021-08-15 04:45:28'),
(15, 'Rowang Builder Singapore Pte Ltd.', '1', '2021-08-15 04:45:35', '2021-08-15 04:45:35'),
(16, 'Thong Hang Construction and Trading Singapore Pte Ltd.', '1', '2021-08-15 04:45:43', '2021-08-15 04:45:43'),
(17, 'Asiafirst Construction Pte Ltd.', '1', '2021-08-15 04:45:53', '2021-08-15 04:45:53'),
(18, 'Tengs Construction Pte Ltd.', '1', '2021-08-15 04:46:03', '2021-08-15 04:46:03'),
(19, 'Growth Land Pte Ltd.', '1', '2021-08-15 04:46:10', '2021-08-15 04:46:10'),
(20, 'View Hoock Building and Civil Construction Pte Ltd', '1', '2021-08-15 04:46:20', '2021-08-15 04:46:20'),
(21, 'Kasem Industries SDN.BHD.', '4', '2021-08-15 10:06:04', '2021-08-15 10:06:04'),
(23, 'Davex Engineering (M) SDN.BHD.', '4', '2021-08-15 10:09:25', '2021-08-15 10:09:25'),
(24, 'Win Wood Work SDN.BHD.', '4', '2021-08-15 10:09:39', '2021-08-15 10:09:39'),
(25, 'Noble Carpets SDN.BHD.', '4', '2021-08-15 10:09:49', '2021-08-15 10:09:49'),
(26, 'Southern Furniture SDN.BHD', '4', '2021-08-15 10:09:56', '2021-08-15 10:09:56'),
(27, 'B.T. Industries.', '4', '2021-08-15 10:10:04', '2021-08-15 10:10:04'),
(28, 'Gento Precision Engineering SDN.BHD.', '4', '2021-08-15 10:10:12', '2021-08-15 10:10:12'),
(29, 'Kasem Industries SDN.BHD.', '4', '2021-08-15 10:10:20', '2021-08-15 10:10:20'),
(30, 'Davex Engineering (M) SDN.BHD.', '4', '2021-08-15 10:10:27', '2021-08-15 10:10:27'),
(31, 'Win Wood Work SDN.BHD.', '4', '2021-08-15 10:10:34', '2021-08-15 10:10:34'),
(32, 'Noble Carpets SDN.BHD.', '4', '2021-08-15 10:10:48', '2021-08-15 10:10:48'),
(33, 'Southern Furniture SDN.BHD.', '4', '2021-08-15 10:10:55', '2021-08-15 10:10:55'),
(34, 'B.T. Industries.', '4', '2021-08-15 10:11:05', '2021-08-15 10:11:05'),
(35, 'Arabian Gulf Co.', '5', '2021-08-15 10:11:15', '2021-08-15 10:11:15'),
(36, 'Twaik Est.', '5', '2021-08-15 10:11:21', '2021-08-15 10:11:21'),
(37, 'Zahran Oper. & Main . Co. Ltd.', '5', '2021-08-15 10:11:29', '2021-08-15 10:11:29'),
(38, 'Khaled Bin Ibrahim Al Babtain', '5', '2021-08-15 10:11:34', '2021-08-15 10:11:34'),
(39, 'Arabian Maintenance & Technical Services Co. Ltd.', '5', '2021-08-15 10:11:42', '2021-08-15 10:11:42'),
(40, 'Waleed Alhakami Est.', '5', '2021-08-15 10:11:48', '2021-08-15 10:11:48'),
(41, 'National Cleaning Company', '6', '2021-08-15 10:11:58', '2021-08-15 10:11:58'),
(42, 'Wael Al-Nusif Trading & Co. W.L.L.', '6', '2021-08-15 10:12:05', '2021-08-15 10:12:05'),
(43, 'Ghanem Hamd Al-Dabbous', '6', '2021-08-15 10:12:11', '2021-08-15 10:12:11'),
(44, 'Care Services Kuwait', '6', '2021-08-15 10:12:18', '2021-08-15 10:12:18'),
(45, 'Damac Draigh general Trading Co.', '6', '2021-08-15 10:12:25', '2021-08-15 10:12:25'),
(46, 'Damac Al Otaibai', '7', '2021-08-15 10:12:32', '2021-08-15 10:12:32'),
(47, 'Bel hasa Projects LLC.', '7', '2021-08-15 10:12:38', '2021-08-15 10:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

-- CREATE TABLE `clients` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `status` varchar(255) NOT NULL,
--   `top` varchar(255) NOT NULL,
--   `left` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `status`, `top`, `left`, `created_at`, `updated_at`) VALUES
(1, 'Singapore', 'active', '57', '74', '2021-08-14 11:51:53', '2021-09-08 13:46:42'),
(4, 'Malaysia', 'active', '60', '74', '2021-08-14 12:07:31', '2021-08-20 22:26:59'),
(5, 'Saudi Arabia', 'active', '48', '58', '2021-08-14 12:08:06', '2021-08-20 22:23:12'),
(6, 'Kuwait', 'active', '46', '59', '2021-08-14 12:08:33', '2021-08-20 22:26:37'),
(7, 'UAE', 'active', '48', '61', '2021-08-14 12:08:47', '2021-09-10 15:42:35'),
(8, 'Serbia', 'hold', '40', '52', '2021-09-10 17:59:28', '2021-09-10 18:02:37'),
(9, 'Korea', 'hold', '43', '80', '2021-09-10 18:03:35', '2021-09-10 18:05:01'),
(10, 'Japan', 'hold', '43', '84', '2021-09-10 18:06:01', '2021-09-10 18:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

-- CREATE TABLE `contacts` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `map` varchar(255) NOT NULL,
--   `place` varchar(255) NOT NULL,
--   `address` varchar(255) NOT NULL,
--   `tel` varchar(255) NOT NULL,
--   `email` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `map`, `place`, `address`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Head Office', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29209.13785097664!2d90.415244!3d23.777949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b87fe1c61dae7f4!2sSouth%20Point!5e0!3m2!1sen!2sbd!4v1628406672340!5m2!1sen!2sbd', 'South Point Head Office', 'Star Center (Level 3), House # 2, Road # 138, Gulshan-1, Dhaka-1212, Bangladesh
', 'Hotline: +880 1903 999 666,
', 'corpoff@southpointbd.com', '2021-08-08 00:54:36', '2021-09-16 10:21:08'),
(3, 'Training Center',
 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d466843.6740928163!2d90.312933!3d23.917397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed97ee300b4dd6b3!2sSingapore%20Piling%20South%20Point%20Test%20Centre!5e0!3m2!1sen!2sbd!4v1628408048976!5m2!1sen!2sbd',
  'Singapore Engineering and Construction-South Point Skills Centre',
   'Ghoshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh', 
   null, 
   null, 
   '2021-08-08 01:38:17',
    '2021-09-16 10:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

-- CREATE TABLE `documents` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `created_at`, `updated_at`) VALUES
(4, 'Recruiting License', '2021-08-12 05:05:27', '2021-08-12 05:05:27'),
(5, 'Documents for Singapore', '2021-08-12 05:06:32', '2021-08-12 05:06:32'),
(6, 'Documents for Saudi Arabia', '2021-08-12 05:08:34', '2021-08-12 05:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

-- CREATE TABLE `failed_jobs` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `connection` text NOT NULL,
--   `queue` text NOT NULL,
--   `payload` longtext NOT NULL,
--   `exception` longtext NOT NULL,
--   `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

-- CREATE TABLE `footers` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) DEFAULT NULL,
--   `address` varchar(255) DEFAULT NULL,
--   `tel` varchar(255) DEFAULT NULL,
--   `email` varchar(255) DEFAULT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `address`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(1, 'SOUTH POINT OVERSEAS LIMITED', 'Star Center (Level 3), House # 2, Road # 138, Gutshan-1, Dkaka-1212,
       Bangladesh', '+880 1903 999 666','corpoff@southpointbd.com', '2021-08-02 05:14:31', '2021-09-16 14:41:05'),
(2, 'TRAINING CENTRE', 'Ghoshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh', null,null, '2021-08-03 04:10:25', '2021-09-11 12:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `home_contets`
--

-- CREATE TABLE `home_contets` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contets`
--

INSERT INTO `home_contets` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Company Highlights', 'Largest Training & Test Centre facility in Bangladesh.\r\nLocated on the Highway over an area of 9 Acres’ land.\r\nState of Art facilities of training, accommodation, and dining.\r\nFour storied accommodation facilities for over 3000 students.\r\nDining and cooking facilities where over 1000 students can dine at a time.\r\nTwo separate PE-approved steel-structured Sheds of over 50,000 ft each for Training & Testing.\r\nInfra-structural facilities to train on 22 Construction Trades.\r\nThe excellent passing rate of over 85% per monthly Test conducted by BCA, Singapore.\r\nAtomic Energy certified own X-ray Room for Welding Trade.\r\n7000 sft separate Training and Test Shed for Welding Trade.\r\nOwn Power Supply Generation for the whole campus besides Govt. Power Supply provisions.', '2021-08-20 01:37:05', '2021-08-20 01:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructures`
--

-- CREATE TABLE `infrastructures` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastructures`
--

INSERT INTO `infrastructures` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'South Point Training And Selection Centre', 'Professional approach in selecting manpower is the specialty of South Point in order to ensure development of human resources in the best form. Keeping in view of the same, South Point Training and Selection Centre has been established. This is a full-fledged training institute. It provides various training to develop the skills and language proficiency. The institute also caters training according to specific requirement of employer. The institute is also used as a selection centre because of its inbuilt facilities. Success story of ‘South Point Overseas Limited” is the result of its state of the art facilities and well-knit team work comprising of qualified & resourceful instructors from different discipline.', '2021-08-05 01:36:58', '2021-08-05 01:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_images`
--

-- CREATE TABLE `infrastructure_images` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastructure_images`
--

INSERT INTO `infrastructure_images` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(20, 'All over view of the Training Centre', 'images/WsxoxNARW6tkGEPoa2iRZKholxZruVwilovMfzHm.jpg', 'A complete Training Centre includes modern amenities & facilities as specified by the Building and Construction Authority of Singapore stretching over a landscape of 270,000 sft.', '2022-01-29 11:21:16', '2022-01-29 14:08:38'),
(21, '3 storied Office Building', 'images/ztgJK7x6ca5ioAHCeLe42gpIZmRXQWDtpZPWqQZM.jpg', 'Approximate 6,000 sft. 3 storied Office Building ensures various facilities including the Rooms for Managing Director, Foreign Delegators, CEO, Centre-in-Charge, Manager Operation, Liaison Officer, Recruiting Manager, IT Specialist, Server & Heavy duty Online UPS, Finance & Accounts, Conference, Refreshment, Mini Store, Pantry, Reception & Waiting Lounge.', '2022-01-29 11:26:25', '2022-01-29 14:09:10'),
(22, 'Training & Testing Shed', 'images/g9cVz03S9e4OgB9jn5522qMuygpjAmT1rsXf6Mhe.jpg', 'The Training & Testing Shed is fully equipped with the state of the art Training & Testing facilities including Surveillance System, having capacity to train a maximum of 2,000 trainees on 22 approved trades of the Construction Industry.', '2022-01-29 11:27:37', '2022-01-29 14:12:10'),
(23, 'Classroom', 'images/WHBSr0aNjYj5SHNf9veVp5O4ldfmDVb84w2UB1Rn.jpg', 'The Classroom having 500 capacity to ensure conducting Theory Test and Seminar at a time. It also ensures modern amenities & facilities along with the Surveillance System. Fully equipped MI Room also ensures the Medicare Services round the clock under close supervision and monitoring by the Certified Doctor & Medical Assistants. A complete Conference Room and Waiting Lounge for Instructors with individual locker are also available there.', '2022-01-29 11:28:05', '2022-01-29 14:12:26'),
(24, 'Dormitory-1', 'images/d7jFpd3Gq7YDMoDlKLf4AUsddt2gk4fKEmqoIpYL.jpg', 'Modern Dormitory with its eye catching front scenic view.', '2022-01-29 11:28:22', '2022-01-29 14:12:42'),
(25, 'Dormitory-1 & 2', 'images/N9UzrrIKg5OHXT5R0bnP8xtdVk5swUwcBeIlS3QG.jpg', '2 standard Dormitories are available at the Training Centre with modern amenities & facilities to ensure hygiene environment and comfort of the Trainees. These 2 Dormitories are able to accommodate a minimum of 1,000 Trainees at a time.', '2022-01-29 11:28:49', '2022-01-29 14:13:01'),
(26, 'Toilet Zone', 'images/3iCXzPUatmtyItBZLNwho505wr8ON9nLBya69UXl.jpg', 'A complete Toilet Zone with standard fittings and required utensils is ready to provide necessary services to a minimum of 200 Trainees at time. It also ensures neat & clean and hygiene environment.', '2022-01-29 11:30:16', '2022-01-29 14:13:21'),
(27, 'Shower Zone', 'images/bIOmfK6gnWkV5SJEvZGAZL3eRhqEbcogPilnnl22.jpg', 'A minimum of 300 Trainees at a time can take shower at the Shower Zone.', '2022-01-29 11:30:37', '2022-01-29 14:13:37'),
(28, 'Standby Generator & PFI Room', 'images/2SULZpurRF15xnfZONGeyOcxVF95lUP8ca4GIDVA.jpg', 'Training Centre has high voltage electric connection for fulfilling the demand with its own Sub-Station & Transformer. It also ensures the availability of electricity for 24 hrs. by 2 heavy duty Standby Generators (225 KVA & 150 KVA each).', '2022-01-29 11:35:06', '2022-01-29 14:14:31'),
(29, 'Cafe', 'images/2xh4kJTCmPEQacotqLSKeQCTDJCrmE314td7w7TP.jpg', 'Cafe', '2022-01-29 11:35:49', '2022-01-29 14:14:57'),
(30, 'Dining & Kitchen', 'images/ltVVd6EK8c1OOTz0GDrhDmYCW0HruSyrs6Qh9mPb.jpg', 'Dining & Kitchen', '2022-01-29 11:36:25', '2022-01-29 14:15:16'),
(31, '3 storied Admin Block, Classroom & Auditorium', 'images/4o3kc7Aa6RsiUeork6kWNwEAiDdXSmto0ggqSOVG.jpg', '3 storied Admin Block, Classroom & Auditorium', '2022-01-29 11:37:17', '2022-01-29 14:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

-- CREATE TABLE `messages` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `name` varchar(255) NOT NULL,
--   `position` varchar(255) NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `message` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `position`, `image`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Manzur Kader', 'Managing Director', 'images/4tJAtsuWeMCAgXMwqZmBTePLXSdTkQ9JiyFQ5Peg.jpg', 'Way back in 1998, South Point Traders Limited stepped into Training Business alongside our sister concern, South Point Overseas Limited (RL-622), which has made a deep impact on the vibrating Export Sector of Bangladesh, that is the export of manpower to our valued overseas clients.\r\n\r\nOver a span of two decades of operations in the turbulent arena of manpower, the training house has now bloomed fully and has matured up as a specialized broad-based business house with the corporate slogan “Challenging the new frontiers’’.\r\n\r\nIn fact, my innate desire was to enter the World of International Trading and Commerce during the successful handling of the Human Resources deployment to various parts of the world.\r\n\r\nI would like to put my hands together in appreciation of our Professional Staff Members who are highly dedicated and innovative to meet our challenges.\r\n\r\nI owe much for today’s South Point Traders Limited claim to be a top notcher business house, including the grand success in the arena of recruitment services, where commitments stand on its value-based morals and I strongly believe that with your valued patronage South Point Traders Limited can touch the zenith of professionalism and hold the spectrum of overall success. \r\n\r\nI thank you sincerely and welcome you all to the South Point Family.', '2021-08-04 00:14:24', '2021-09-07 17:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

-- CREATE TABLE `migrations` (
--   `id` int(10) UNSIGNED NOT NULL,
--   `migration` varchar(255) NOT NULL,
--   `batch` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

-- INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
-- (1, '2014_10_12_000000_create_users_table', 1),
-- (2, '2014_10_12_100000_create_password_resets_table', 1),
-- (3, '2019_08_19_000000_create_failed_jobs_table', 1),
-- (4, '2021_07_27_110700_create_trades_table', 1),
-- (5, '2021_07_28_082543_create_trainings_table', 2),
-- (7, '2021_07_29_034334_create_abouts_table', 3),
-- (9, '2021_07_29_055654_create_messages_table', 4),
-- (10, '2021_07_29_102123_create_profiles_table', 5),
-- (13, '2021_08_01_071937_create_infrastructure_images_table', 8),
-- (14, '2021_08_02_045146_create_contacts_table', 9),
-- (15, '2021_08_02_073425_create_sliders_table', 10),
-- (17, '2021_08_02_104839_create_footers_table', 12),
-- (18, '2021_08_01_053951_create_infrastructures_table', 13),
-- (26, '2021_08_10_061805_create_recruitments_table', 14),
-- (27, '2021_08_10_061851_create_documents_table', 14),
-- (28, '2021_08_10_061910_create_papers_table', 14),
-- (29, '2021_08_10_100854_create_services_table', 14),
-- (32, '2021_08_01_033033_create_clients_table', 15),
-- (33, '2021_08_15_093141_create_areas_table', 16),
-- (34, '2021_08_02_100029_create_home_contets_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

-- CREATE TABLE `papers` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `content` varchar(255) NOT NULL,
--   `document_id` int(11) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `image`, `content`, `document_id`, `created_at`, `updated_at`) VALUES
(4, 'images/sntJPoetPcXjnUeqbJN9i8gqog0iNp9jRcZYcc4m.jpg', 'Recruiting License', 4, '2021-08-12 05:06:08', '2021-10-04 13:25:06'),
(5, 'images/8CarZCY3f0TknWhTpJ82jgxqSaWfRkWLN4T59pjr.jpg', 'Notarial Certificate', 5, '2021-08-12 05:07:05', '2021-08-12 05:07:05'),
(6, 'images/1MzVqH0idRMBTQKjFgGKnlDyKydbzmk3NiTXjyFS.jpg', 'Power of Attorney', 5, '2021-08-12 05:07:29', '2021-08-12 05:07:29'),
(7, 'images/lmJ8Jn1oDWSa3VmF4k7ZZBFC8OO3DL7BOHQhSG5I.jpg', 'Demand Letter', 5, '2021-08-12 05:07:52', '2021-08-12 05:07:52'),
(8, 'images/gwBb7HgyiOS3tNRtI2tBCP2vMfPALF5M58dUJBBM.jpg', 'Work Agreement', 5, '2021-08-12 05:08:11', '2021-08-12 05:08:11'),
(9, 'images/uodyAMxybtB4Y2ouEzyauxIOrCutE1HlxKpreHlW.jpg', 'Authorization Letter', 6, '2021-08-12 05:09:02', '2021-09-20 09:24:44'),
(10, 'images/Zreh35EfICIbPsxeotjf01U50z57O6fBnoVZjL2G.jpg', 'Power of Attorney', 6, '2021-08-12 05:09:27', '2021-09-20 09:27:33'),
(11, 'images/73GhnjQQ5mamK7oM5ENfwJZ0ix5cfe4gbcaCuRvQ.jpg', 'Demand Letter', 6, '2021-08-12 05:09:47', '2021-09-20 09:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

-- CREATE TABLE `password_resets` (
--   `email` varchar(255) NOT NULL,
--   `token` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--




--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Name of the Company', 'South Point Overseas Limited.', '2021-08-04 00:21:45', '2021-08-04 00:21:45'),
(4, 'Date of Registration', '20th December, 1998.', '2021-08-04 00:22:04', '2021-08-04 00:22:04'),
(5, 'License Number', 'RL-622 Issued by the Government of Bangladesh', '2021-08-04 00:24:31', '2021-09-16 14:32:31'),
(6, 'Address & contacts of Corporate Office', 'Star Center (Level 3), House # 2, Road # 138, Gulshan-1 Dhaka-1212, Bangladesh\nHotline: +8801903999666,\nEmail: corpoff@southpointbd.com\nWebsite: www.southpointbd.com', '2021-08-04 00:24:47', '2021-09-16 09:31:58'),
(7, 'Training & Testing Centre', 'Singapore Engineering & Construction - South Point Skills Centre', '2021-08-04 00:25:01', '2021-09-11 09:39:27'),
(8, 'Address of Training & Test Centre', 'Goshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh.', '2021-08-04 00:25:17', '2021-09-16 09:32:39'),
(9, 'Ticketing & Travelling Agency', 'Victory Travels Ltd. Dhaka, /n Bangladesh Anowar Tours & Travels Limited, Dhaka, Bangladesh', '2021-08-04 00:25:44', '2021-09-11 09:51:03'),
(10, 'Medical Centre', 'Gulshan Clinic Ltd, Shahjadpur, Gulshan, Dhaka-1212, /n Bangladesh Labaid Medical Centre Gulshan, Gulshan-2, Dhaka-1212, Bangladesh', '2021-08-04 00:25:59', '2021-09-11 09:44:56'),

(11, 'Bankers', 'The City Bank PLC, /n United Commercial Bank PLC, /n BRAC Bank PLC', '2021-08-04 00:26:33', '2021-09-16 14:30:14'),
(12, 'Number of employees', 'Corporate Office- 47 & Training Centre- 54', '2021-08-04 00:26:48', '2021-09-16 14:31:44'),
(13, 'Membership', 'Bangladesh Association of International Recruiting Agents (BAIRA). Dhaka\nChamber of Commerce and Industries (DCCI)', '2021-08-04 00:27:04', '2021-08-04 00:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `recruitments`
--

-- CREATE TABLE `recruitments` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruitments`
--

INSERT INTO `recruitments` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment', 'Recruitment of workers is done at the corporate office and the center’s recruitment cell. A thorough security background of every individual, minimum educational level, physical appearance & endurance, fitness level, and previous experiences are the prerequisites considered when selecting a trainee. After recruitment, each trainee has to go through a thorough medical test at our approved Medical Centre. Trainees requiring additional training are then mobilized at the center as per mobilization schedules. Trainees are issued with working dress, safety boots, hand gloves, sun caps, and helmets as standard issues.', '2021-08-11 21:29:04', '2021-08-12 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

-- CREATE TABLE `services` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Selection and recruitment of workers in the appropriate category.', '2021-08-12 05:01:48', '2021-08-12 05:01:48'),
(2, 'Provide Skills Development Training in the construction industry trades.', '2021-08-12 05:01:59', '2021-08-12 05:01:59'),
(3, 'Conduct Skills Tests.', '2021-08-12 05:02:09', '2021-08-12 05:02:09'),
(4, 'Undertake medical fitness tests.', '2021-08-12 05:02:16', '2021-08-12 05:02:16'),
(5, 'Visa Processing.', '2021-08-12 05:02:23', '2021-08-12 05:02:23'),
(6, 'Undertake completion of Ministry of Manpower formalities.', '2021-08-12 05:02:30', '2021-08-12 05:02:30'),
(7, 'Make traveling arrangement.', '2021-08-12 05:02:36', '2021-08-12 05:02:36'),
(8, 'Maintain database of worker profiles.', '2021-08-12 05:02:45', '2021-08-12 05:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

-- CREATE TABLE `sliders` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `content` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(13, 'images/8FdkInhRcsGSFvKOVrmBv4egea8KPv8K0DJLZpF5.png', 'Welcome to South Point Overseas Limited', '2021-09-10 16:26:18', '2021-10-03 16:07:18'),
(17, 'images/txVMoAiU7zBdDukprbesORZjgtxgpldlo6UK8HiZ.jpg', 'Historic Mural created by Zainul Abedin aptly named \"The Struggle\" expressing the hardworking ethics of the Bangladeshi People', '2021-09-15 18:45:48', '2021-09-19 20:51:54'),
(19, 'images/Iy9JEU8YUyy7ggGCkR5NONAChsBCTDPpEygWxd5f.gif', 'Historical surrender by Lt. Gen Niazi (in charge of Pakistan Army) and a nation was born on 16th December 1971.', '2021-09-15 18:58:45', '2021-09-19 20:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

-- CREATE TABLE `trades` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `content` varchar(255) NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'images/cCGkQAEzvOKABxsiUW4KQ2fMaDI7OlWhpnBjzQgJ.jpg', 'Steel Reinforcement', '2021-08-03 02:01:29', '2021-08-03 02:01:29'),
(4, 'images/qVh7R37bpxNF24zZpxWuupzbGNtfJGlR7FriROdc.jpg', 'Timber Formwork', '2021-08-03 03:39:32', '2021-09-11 11:42:32'),
(5, 'images/kmzICkgvmJ3VvLogZtiH74ikTIhSaGXINsoHHc6z.jpg', 'Plumbing & Pipefitting', '2021-08-03 04:32:05', '2021-09-11 11:42:12'),
(6, 'images/HYaPNDcFCi63nIK34ItHkZORb5AQ5u8cfNBGPsvy.jpg', 'Electrical Wiring Installation', '2021-08-03 04:32:31', '2021-09-11 11:42:53'),
(7, 'images/dryCQKlI8pvxhygipf00t6rH7nT9nWwvIVKHUi49.jpg', 'Waterproofing', '2021-08-03 04:35:54', '2021-09-11 11:43:20'),
(8, 'images/zUB4I7XkesH7vcUrsuwvgDMXliiX71YHPQH8Nc37.jpg', 'Suspended Ceiling Installation (Acoustical)', '2021-08-03 04:36:15', '2021-09-11 11:44:26'),
(10, 'images/fQykY5XDZzPExsIatnDfreBgiNVFMmjDEVvlGzBG.jpg', 'Suspended Ceiling Installation (Fibrous Plaster) Ceiling (FPC)', '2021-08-03 04:37:01', '2021-09-11 11:46:28'),
(11, 'images/uLXGrYqi4NevTIuSr21jjZXChxbOWCVzYhhUqZbu.jpg', 'Doors & Windows Installation (Timber)', '2021-08-03 04:37:20', '2021-09-11 11:47:09'),
(12, 'images/XZeStbVRqKsl8ru7qFl6Db2cnB1PhgvgY5stwfV6.jpg', 'Cladding Installation', '2021-08-03 04:37:38', '2021-09-11 11:47:48'),
(13, 'images/QHI7HjJeniAy2wrRPSpn7dKJMZfei2FrKalWNpVT.jpg', 'Joinery', '2021-08-03 04:38:17', '2021-09-11 11:52:19'),
(14, 'images/zq9PxI627TYdT24p32Ryn9cmQSZMx4X1EKO2uwSt.jpg', 'Ducting Installation for Air-con & Ventilation', '2021-08-03 04:38:36', '2021-09-11 11:53:56'),
(15, 'images/YQMTydld8EA7TA01O3IOBzge746Cg3gsbi4ChICb.jpg', 'Thermal Insulation', '2021-08-03 04:39:03', '2021-09-11 11:54:32'),
(16, 'images/sktHHnuPmLyrYdQxsLEWcufwP0FVRQRioe6xvVnj.jpg', 'Enhanced Aluminium Formwork', '2021-08-03 04:39:18', '2021-09-11 11:55:31'),
(17, 'images/3ToZibDDhI9TsrCafjqSpVkeVE7NUOOmsFSYcgtn.jpg', 'Fire Sprinkler Installation', '2021-08-03 04:39:37', '2021-09-11 11:56:37'),
(18, 'images/iCFuXAJAmUdCe0dE6vzyFj73LYPXKZP05fy51PC7.jpg', 'PIPE FITTING', '2021-08-03 04:39:56', '2021-09-11 11:57:25'),
(19, 'images/UyqMNvp71x57WebfijId6YRuFD7CKLV5rC2NIhOg.jpg', 'STRUCTURAL STEEL FITTING', '2021-08-03 04:40:13', '2021-09-11 11:57:50'),
(20, 'images/z0vsLUtv7wGqgimoFpY4SYH2yHrWhVCE92dO0aDB.jpg', 'PLASTERING', '2021-08-03 04:40:33', '2021-09-11 11:58:06'),
(21, 'images/pT7xGfO5aNIICkxI1nQOOLAvxj6UPvHfD2W0Yu87.png', 'TILING', '2021-08-03 04:40:52', '2021-09-11 11:58:23'),
(22, 'images/3tA6KWYTpEnUzTuWo76bpdxwfG2e3huxtTOHeSMQ.jpg', 'CURTAINWALL Installation', '2021-08-03 04:41:12', '2021-09-11 11:58:54'),
(23, 'images/W4TRrGoqH6JeSPt9lGHs4kHwPMj8GRJ7ubLMXvWU.jpg', 'glazing', '2021-08-03 04:43:45', '2021-08-03 04:43:45'),
(24, 'images/d9p9XFrmITdE2xIiyysq34meeDiLWRovtYVmmRbU.jpg', 'welding', '2021-08-03 04:44:07', '2021-08-03 04:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

-- CREATE TABLE `trainings` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `content` text NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Training Activities', 'Training is the heart of all activities. With that view in mind, South Point Overseas Ltd. has catered for an elaborate training facility through its Training Centre.\r\n\r\nAt Singapore Piling South Point Test Centre, the training never ceases to work. Training strategy is translated into well-rehearsed weekly programs developed to suit the training needs of different groups. The training curriculums are conducted by highly qualified and time tested trainers closely monitored by the Group Supervisors and Training Managers.', '2021-07-28 04:35:05', '2021-07-28 05:38:19'),
(5, 'Final test/ selection', 'On average 60% to 70% trainees from the Final Group qualifies through the simulation test to go for the final test. The test is held every month. Trainees tested for employment in Singapore are tested by the Testers from BUILDING AND CONSTRUCTION AUTHORITY (BCA) of Singapore. The results are declared and published by BCA in about 10 day’s time. Final test for Employers from other countries are done by the center Management in presence of the Employer’s representatives / delegates. At SINGAPORE PILING SOUTH POINT TEST CENTRES some 1200 plus trainees from all trades participate in the final test every month. Successful trainees join employment with their overseas employers in about 8 to 10 weeks time (provided all other administrative arrangements and preparations are settled by the worker) from date of passing the test.', '2021-08-03 03:48:58', '2021-08-03 03:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

-- CREATE TABLE `users` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `name` varchar(255) NOT NULL,
--   `email` varchar(255) NOT NULL,
--   `email_verified_at` timestamp NULL DEFAULT NULL,
--   `password` varchar(255) NOT NULL,
--   `remember_token` varchar(100) DEFAULT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

-- INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
-- (1, 'Tahmid', 'spoint@agni.com', '2021-08-20 04:00:13', '$2y$10$NqGIb1.ybhoxPG9z0ZOp6eaXERNEFQxZY6xRal2Jsk8qVGaloCfzi', 'xwW7i7EtfP0DNQ7ztzjZeG1XNfW3jFQX5JvYANnPsHcIhfRCUJmKatp868lA', '2021-08-20 04:00:13', '2021-08-20 04:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
-- ALTER TABLE `abouts`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `areas`
-- --
-- ALTER TABLE `areas`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `clients`
-- --
-- ALTER TABLE `clients`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `contacts`
-- --
-- ALTER TABLE `contacts`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `documents`
-- --
-- ALTER TABLE `documents`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `footers`
-- --
-- ALTER TABLE `footers`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `home_contets`
-- --
-- ALTER TABLE `home_contets`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `infrastructures`
-- --
-- ALTER TABLE `infrastructures`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `infrastructure_images`
-- --
-- ALTER TABLE `infrastructure_images`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `messages`
-- --
-- ALTER TABLE `messages`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `papers`
-- --
-- ALTER TABLE `papers`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `profiles`
-- --
-- ALTER TABLE `profiles`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `recruitments`
-- --
-- ALTER TABLE `recruitments`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `services`
-- --
-- ALTER TABLE `services`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `sliders`
-- --
-- ALTER TABLE `sliders`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `trades`
-- --
-- ALTER TABLE `trades`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `trainings`
-- --
-- ALTER TABLE `trainings`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `abouts`
-- --
-- ALTER TABLE `abouts`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- AUTO_INCREMENT for table `areas`
-- --
-- ALTER TABLE `areas`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

-- --
-- -- AUTO_INCREMENT for table `clients`
-- --
-- ALTER TABLE `clients`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-- --
-- -- AUTO_INCREMENT for table `contacts`
-- --
-- ALTER TABLE `contacts`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- AUTO_INCREMENT for table `documents`
-- --
-- ALTER TABLE `documents`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

-- --
-- -- AUTO_INCREMENT for table `footers`
-- --
-- ALTER TABLE `footers`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- --
-- -- AUTO_INCREMENT for table `home_contets`
-- --
-- ALTER TABLE `home_contets`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table `infrastructures`
-- --
-- ALTER TABLE `infrastructures`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table `infrastructure_images`
-- --
-- ALTER TABLE `infrastructure_images`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

-- --
-- -- AUTO_INCREMENT for table `messages`
-- --
-- ALTER TABLE `messages`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- AUTO_INCREMENT for table `papers`
-- --
-- ALTER TABLE `papers`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- --
-- -- AUTO_INCREMENT for table `profiles`
-- --
-- ALTER TABLE `profiles`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

-- --
-- -- AUTO_INCREMENT for table `recruitments`
-- --
-- ALTER TABLE `recruitments`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table `services`
-- --
-- ALTER TABLE `services`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

-- --
-- -- AUTO_INCREMENT for table `sliders`
-- --
-- ALTER TABLE `sliders`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

-- --
-- -- AUTO_INCREMENT for table `trades`
-- --
-- ALTER TABLE `trades`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

-- --
-- -- AUTO_INCREMENT for table `trainings`
-- --
-- ALTER TABLE `trainings`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
