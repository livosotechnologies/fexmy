-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavela_technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `tags`, `date`, `created_at`, `updated_at`) VALUES
(5, 'Simplify Streamline Succeed IT Solutions', '<p>In today’s fast-paced digital landscape, businesses need to stay agile and efficient to thrive. At <strong>IcontentT Solutions</strong>, we focus on three core principles: <strong>Simplify, Streamline, and Succeed.</strong> Our innovative IT solutions empower businesses to navigate challenges effortlessly while achieving remarkable results.</p><p>Complex systems can bog down productivity. Our user-friendly IT solutions are designed to simplify workflows, making technology accessible to everyone in your organization. By focusing on intuitive design, we help your team embrace change without the stress.</p>', 'blogs/6725c3bf0632f_04.jpg', '[\"ITSolutions\",\"TechInnovation\"]', '2024-11-02', '2024-11-02 00:46:31', '2024-11-02 00:46:31'),
(6, 'Unlocking Potential Through Technology', '<p>In an age where technology evolves at an unprecedented pace, businesses must adapt to unlock their full potential. At <strong>IcontentT Solutions</strong>, we understand that harnessing the right technology can transform challenges into opportunities, driving growth and innovation.</p><p>&nbsp;Innovation is the heart of any successful business. Our approach encourages creative thinking and problem-solving through technology. Whether it’s implementing AI-driven solutions or developing custom software, we provide the resources that fuel innovation and keep your business ahead of the curve.</p>', 'blogs/6725c426cdf4d_07.jpg', '[\"UnlockPotential\",\"TechInnovation\"]', '2024-10-31', '2024-11-02 00:48:14', '2024-11-02 00:48:14'),
(7, 'Supervisor Disapproved of Latest Work', '<p>Receiving disapproval from a supervisor can be a challenging experience, but it can also serve as a vital turning point in one’s professional journey. At <strong>IcontentT Solutions</strong>, we believe that feedback, even when it’s tough to hear, is an essential tool for growth and improvement.</p><p>&nbsp;When a supervisor disapproves of your work, it’s important to take a step back and analyze the feedback provided. Ask yourself: What specific aspects were not up to standard? Were there missed objectives or areas needing more clarity? Understanding the reasoning behind the disapproval can provide valuable insights and help you align your efforts with your supervisor\'s expectations.</p>', 'blogs/6725c478983cb_08.jpg', '[\"PerformanceReview\",\"ConstructiveCriticism\"]', '2024-10-29', '2024-11-02 00:49:36', '2024-11-02 00:49:36'),
(8, 'Supervisor Disapproved of Latest Work.', '<p>Disapproval is not the end of the road; it’s an opportunity for growth. Embracing a growth mindset means viewing challenges as chances to improve rather than as failures. Reflect on the feedback and use it as a stepping stone to enhance your skills, refine your work processes, and develop resilience.</p><p>Experiencing disapproval from a supervisor can be disheartening, but it is also an opportunity to demonstrate your commitment to growth and excellence. At <strong>IcontentT Solutions</strong>, we encourage embracing feedback as a powerful catalyst for personal and professional development.</p>', 'blogs/6725c4c4f17c7_07.jpg', '[\"GrowthMindset\",\"Leadership\"]', '2024-11-03', '2024-11-02 00:50:53', '2024-11-02 00:50:53'),
(9, 'Unlocking Potential Through Technology', '<p>&nbsp;To unlock potential, organizations must be prepared for the future. We equip businesses with scalable technology solutions that adapt to evolving needs. By embracing digital transformation, you can position your organization for sustained growth and resilience in an ever-changing market.</p><p>Unlocking potential through technology is about more than just adopting the latest tools; it’s about fostering a culture of innovation and empowerment. At <strong>IcontentT Solutions</strong>, we are dedicated to helping businesses realize their full potential by integrating smart technology solutions that drive success.</p>', 'blogs/6725c507ab90c_04.jpg', '[\"FutureReady\",\"TechForGrowth\"]', '2024-10-28', '2024-11-02 00:51:59', '2024-11-02 00:51:59'),
(10, 'Simplify Streamline Succeed IT Solutions', '<p>&nbsp;At <strong>IcontentT Solutions</strong>, we believe that technology should empower, not overwhelm. By simplifying your IT landscape, streamlining operations, and setting you up for success, we help you navigate the digital world with confidence. Let’s embark on this transformative journey together.</p><p>Success isn’t just about meeting targets; it’s about exceeding them. With our tailored IT strategies, we guide your business towards sustainable growth. Our commitment to your success means we’re with you every step of the way, ensuring that you achieve your business objectives and beyond.</p>', 'blogs/6725c54314bd4_08.jpg', '[\"BusinessSolutions\",\"SmartTech\"]', '2024-10-29', '2024-11-02 00:52:59', '2024-11-02 00:52:59'),
(11, 'Unlocking Potential Through Technology', '<p>&nbsp;Innovation is the heart of any successful business. Our approach encourages creative thinking and problem-solving through technology. Whether it’s implementing AI-driven solutions or developing custom software, we provide the resources that fuel innovation and keep your business ahead of the curve.</p><p>&nbsp;To unlock potential, organizations must be prepared for the future. We equip businesses with scalable technology solutions that adapt to evolving needs. By embracing digital transformation, you can position your organization for sustained growth and resilience in an ever-changing market.</p>', 'blogs/6725c58fd7e0f_04.jpg', '[\"Innovation\",\"BusinessSuccess\"]', '2024-10-31', '2024-11-02 00:54:15', '2024-11-02 00:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `sub_service_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `service_name`, `sub_service_name`, `image`, `service_description`, `created_at`, `updated_at`) VALUES
(11, 'Database Security', 'Data Encryption', 'sub_services/6725fc954ce96_08.jpg', '<p>Encryption ensures that sensitive data is protected both at rest and in transit. This service includes configuring encryption for databases, setting up secure key management practices, and implementing advanced encryption algorithms to prevent unauthorized data access.</p>', '2024-11-02 04:49:01', '2024-11-02 04:49:01'),
(12, 'Database Security', 'Backup and Recovery Management', 'sub_services/6725fdccd9662_04.jpg', '<p>Protecting data from accidental loss or malicious attacks involves creating and managing secure backup solutions. This includes implementing automated backup schedules, ensuring backups are encrypted, and regularly testing recovery processes.</p><p>Sensitive data fields are masked to protect information in non-production environments, such as development and testing. This service ensures data privacy by substituting sensitive data with non-sensitive, realistic data that doesn’t expose actual information.</p>', '2024-11-02 04:54:12', '2024-11-02 04:54:12'),
(13, 'Database Security', 'Compliance Management', 'sub_services/6725fde8616a2_08.jpg', '<p>Compliance management services help organizations meet regulatory requirements, such as GDPR, HIPAA, and PCI-DSS. This includes configuring database settings to meet standards and conducting regular compliance checks to ensure ongoing adherence.</p>', '2024-11-02 04:54:40', '2024-11-02 04:54:40'),
(14, 'App Development', 'UI/UX Design', 'sub_services/6725fea3bae35_08.jpg', '<p>This service focuses on creating intuitive, user-centered design interfaces and enhancing user experiences. It includes wireframing, prototyping, user journey mapping, and visual design to ensure the app is engaging, easy to use, and visually appealing.</p>', '2024-11-02 04:57:47', '2024-11-02 04:57:47'),
(15, 'App Development', 'Web App Development', 'sub_services/6725febe44c6b_07.jpg', '<p>Web app development involves building responsive applications accessible via web browsers. This service includes frontend and backend development using frameworks like Angular, React, or Vue.js for the frontend and Node.js, Django, or Ruby on Rails for the backend.</p>', '2024-11-02 04:58:14', '2024-11-02 04:58:14'),
(16, 'App Development', 'Cloud Integration', 'sub_services/6725fed5ede9c_04.jpg', '<p>Cloud integration services help scale and manage app infrastructure, ensuring data storage, processing, and analytics on the cloud. This can include using platforms like AWS, Google Cloud, or Azure to improve app performance, scalability, and security.</p>', '2024-11-02 04:58:38', '2024-11-02 04:58:38'),
(17, 'IT Consultancy', 'IT Strategy and Planning', 'sub_services/6725ff11bc5a1_04.jpg', '<p>This service helps organizations align their IT goals with business objectives. Consultants work on creating a comprehensive roadmap for IT investments, technology upgrades, and operational improvements to drive growth and efficiency.</p>', '2024-11-02 04:59:37', '2024-11-02 04:59:37'),
(18, 'IT Consultancy', 'Digital Transformation Consulting', 'sub_services/6725ff29b6447_07.jpg', '<p>Digital transformation focuses on leveraging technology to enhance business operations, improve customer experiences, and innovate products and services. This includes analyzing current processes and recommending new digital tools and strategies to remain competitive.</p>', '2024-11-02 05:00:01', '2024-11-02 05:00:01'),
(19, 'IT Consultancy', 'Cybersecurity Consulting', 'sub_services/6725ff40ebeb3_08.jpg', '<p>This service addresses security needs by assessing risks, implementing cybersecurity policies, and creating strategies to protect systems and data. Consultants help with threat detection, incident response planning, vulnerability assessments, and regulatory compliance (GDPR, HIPAA).</p>', '2024-11-02 05:00:25', '2024-11-02 05:00:25'),
(20, 'Database Securites', 'Access Control and Identity Management', 'sub_services/6725ffb7b3b63_08.jpg', '<p>Access control ensures that only authorized users have access to sensitive data. This includes implementing role-based access control (RBAC), multi-factor authentication (MFA), and managing user privileges to prevent unauthorized access.</p>', '2024-11-02 05:02:23', '2024-11-02 05:02:23'),
(21, 'Database Securites', 'Database Activity Monitoring', 'sub_services/6725ffd8d1f4c_07.jpg', '<p>DAM provides continuous monitoring of database activities to detect suspicious behavior. It includes real-time monitoring, logging, and alerting on unauthorized access, abnormal queries, and other potential security incidents.</p>', '2024-11-02 05:02:56', '2024-11-02 05:02:56'),
(22, 'Database Securites', 'Database Auditing and Logging', 'sub_services/6725fff198bf9_04.jpg', '<p>Database auditing tracks user activities and changes within the database. This service includes setting up logs and audit trails to capture critical events, helping to identify and investigate suspicious behavior or unauthorized changes.</p>', '2024-11-02 05:03:21', '2024-11-02 05:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'subas', 'subas@gmail.com', '+919332065125', 'hi', '2024-11-02 04:38:53', '2024-11-02 04:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Get Our Business This It Solution', 'Consectetur adipiscing elit aenean scelerisque at augue vitae consequat quisque eget congue velit in cursus leo sed sodales est eget turpis.', 'banners/6724926a47584_hero-1.jpg', '2024-11-01 03:03:47', '2024-11-01 03:03:47'),
(6, 'Get Our Business  This It Solution', 'Consectetur adipiscing elit aenean scelerisque at augue vitae consequat quisque eget congue velit in cursus leo sed sodales est eget turpis.', 'banners/672492b09634c_hero-2.jpg', '2024-11-01 03:04:56', '2024-11-01 03:04:56'),
(8, 'Get Our Business This It Solution', 'Consectetur adipiscing elit aenean scelerisque at augue vitae consequat quisque eget congue velit in cursus leo sed sodales est eget turpis.', 'banners/672493160e459_hero-3.jpg', '2024-11-01 03:06:38', '2024-11-01 03:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_26_070436_create_frontends_table', 1),
(5, '2024_10_26_070446_create_blogs_table', 1),
(6, '2024_10_26_070545_create_contacts_table', 1),
(7, '2024_10_26_070556_create_testimonials_table', 1),
(8, '2024_10_26_070618_create_services_table', 1),
(9, '2024_10_26_070645_create_categories_table', 1),
(10, '2024_10_26_070706_create_pricings_table', 1),
(11, '2024_10_29_120416_create_portfolios_table', 2),
(12, '2024_10_29_120427_create_teams_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `sub_title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Our Market Size', 'We are trying the best service', '<p>Our organization operates within the <strong>[specific industry, e.g., technology, healthcare, finance, etc.]</strong> sector, which is experiencing significant growth due to various factors, including technological advancements, changing consumer preferences, and an increasing demand for innovative solutions. According to <strong>[insert relevant market research or reports]</strong>, the <strong>[specific industry]</strong> market is projected to reach <strong>[insert estimated market size, e.g., $X billion]</strong> by <strong>[insert future year, e.g., 2025]</strong>, reflecting a compound annual growth rate (CAGR) of <strong>[insert percentage]</strong>.</p><p>By strategically leveraging our strengths and focusing on our target market segments, <strong>[Your Organization Name]</strong> is well-positioned to capitalize on the growth potential within the <strong>[specific industry]</strong> market. Our commitment to innovation and excellence will enable us to meet the evolving needs of our customers and drive sustainable growth in the years to come.</p>', 'portfolios/6725e9b2d4539_01.jpg', '2024-11-02 03:28:26', '2024-11-02 03:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `sub_service_name` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `points` varchar(1000) NOT NULL,
  `quotation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `service_name`, `sub_service_name`, `service_type`, `price`, `description`, `points`, `quotation`, `created_at`, `updated_at`) VALUES
(6, 'Database Security', 'Data Encryption', 'Static', '5000', '<p>Data encryption is a process used to protect digital information by converting it into a code that can only be accessed or read by individuals who have the decryption key</p>', '[\"Data Confidentiality\",\"Data Integrity\",\"Data-in-Transit Protection\",\"Data-at-Rest Protection\",\"End-to-End Encryption (E2EE)\"]', 'quotations/672747771b5e5_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:20:48', '2024-11-03 04:22:47'),
(7, 'Database Security', 'Data Encryption', 'Dynamic', '10000', '<p>This is a core technology in cybersecurity, ensuring that sensitive data remains secure even if it\'s intercepted by unauthorized parties.</p>', '[\"Encryption Granularity\",\"Interoperability\",\"Low Latency\",\"Interoperability.\",\"Encryption Granularites\"]', 'quotations/6727488ad025a_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:25:22', '2024-11-03 04:25:22'),
(8, 'Database Security', 'Data Encryption', 'Application', '50000', '<p>This is a core technology in cybersecurity, ensuring that sensitive data remains secure even if it\'s intercepted by unauthorized parties.</p>', '[\"Data-at-Rest Protection\",\"End-to-End Encryption (E2EE)\",\"Key Management\",\"Public Key Infrastructure (PKI)\",\"Encryption Granularity\"]', 'quotations/672749fccc8c9_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:31:32', '2024-11-03 04:31:32'),
(9, 'IT Consultancy', 'Digital Transformation Consulting', 'Static', '50000', '<p>Digital transformation consulting is a service that helps organizations leverage digital technologies</p>', '[\"Comprehensive Digital Strategy Development\",\"Technology Selection and Roadmap\",\"Data and Analytics Optimization\",\"Process Redesign and Automation\",\"Customer Experience Enhancement\"]', 'quotations/67274b94a6ae8_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:38:20', '2024-11-03 04:38:20'),
(10, 'IT Consultancy', 'Digital Transformation Consulting', 'Dynamic', '70000', '<p>This type of consulting assists businesses in developing strategies and implementing technologies to enhance efficiency.</p>', '[\"Digital Strategy Development\",\"Technology Assessment and Selection\",\"Process Reengineering\",\"Customer Experience Enhancement\",\"Data and Analytics Strategy\"]', 'quotations/67274c84e0cdb_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:42:20', '2024-11-03 04:42:20'),
(11, 'IT Consultancy', 'Digital Transformation Consulting', 'Application', '100000', '<p>his type of consulting assists businesses in developing strategies and implementing technologies to enhance efficiency, improve customer experience, and stay competitive in an increasingly digital landscape.</p>', '[\"Cybersecurity and Risk Management\",\"Change Management and Workforce Enablement\",\"Agile and DevOps Implementation\",\"Innovation and Digital Culture Building\",\"Enhanced Customer Experience\"]', 'quotations/67274da19d112_624090892-Aviator-Strategy-and-Tips-UPDATED.pdf', '2024-11-03 04:47:05', '2024-11-03 04:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `servce_detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `servce_detail`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Database Securites', '<p>Database security is a crucial aspect of safeguarding sensitive information and ensuring the integrity, confidentiality, and availability of data.</p>', 'services/6724c53e2c648_05.jpg', '2024-11-01 06:40:38', '2024-11-02 04:55:19'),
(8, 'IT Consultancy', '<p><strong>IT Consultancy</strong> provides organizations with expert advice, customized strategies, and actionable insights to harness the full potential of technology, align IT with business goals, and achieve sustainable growth.</p>', 'services/6724c580503e9_04.jpg', '2024-11-01 06:41:44', '2024-11-01 06:41:44'),
(9, 'App Development', '<p>In the age of digital transformation, <strong>App Development</strong> is essential for businesses looking to engage their customers, streamline operations, and create new revenue streams. Whether developing a mobile app, a web application, or a custom enterprise solution, app development brings ideas to life, enabling businesses to connect with users in innovative, impactful ways.</p>', 'services/6724c5fcc5d94_02.jpg', '2024-11-01 06:43:48', '2024-11-01 06:43:48'),
(10, 'Database Security', '<p>In today’s data-driven world, <strong>Database Security</strong> is more crucial than ever. Databases hold sensitive information, from personal customer details to proprietary business data, making them prime targets for cyberattacks.</p>', 'services/6724c62e728d4_03.jpg', '2024-11-01 06:44:38', '2024-11-01 06:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2Pl637eXGO5bJ9VNZGn2LEX4T3METffgpHfPEHLS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY3FPUmZ2UTM5NHdCR2Rvb3QxcXY3S3FLWGpEVjQxNERNbTdjZnVCUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzA2MjY2NDA7fX0=', 1730632246);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `facebook`, `instagram`, `twiter`, `linkedin`, `created_at`, `updated_at`) VALUES
(3, 'Aarav Mehta', 'Web Designer', 'teams/6725b42a0f62d_user.jpg', NULL, NULL, NULL, NULL, '2024-11-01 23:40:02', '2024-11-01 23:55:37'),
(4, 'Priya Kapoor', 'Cyber Expert', 'teams/6725b459b78c0_user.jpg', NULL, NULL, NULL, NULL, '2024-11-01 23:40:49', '2024-11-01 23:55:30'),
(5, 'Rohan Sharma', 'Web Expert', 'teams/6725b478eee2a_user.jpg', NULL, NULL, NULL, NULL, '2024-11-01 23:41:21', '2024-11-01 23:55:23'),
(6, 'Anika Rao', 'Data Analyst', 'teams/6725b497064b9_user.jpg', NULL, NULL, NULL, NULL, '2024-11-01 23:41:51', '2024-11-01 23:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'subas', 'subas@gmail.com', 'It is a good company in the bhubaneswar', '2024-11-01 23:23:11', '2024-11-01 23:23:11'),
(2, 'subas pradhan', 'user@gmail.com', 'it is the best It company in the BBSR', '2024-11-02 00:14:43', '2024-11-02 00:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'subas', 'admin@gmail.com', NULL, '$2y$12$aOU.Ui8jRw8Nse14XYfMlukC3bntWdHfC3vTwbNdXHlboRX/.btRO', NULL, '2024-10-26 02:45:03', '2024-10-26 02:45:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
