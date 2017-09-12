-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 07:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benhvienmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, '1505138911.jpeg', NULL, '2017-09-10 17:00:00', '2017-09-11 07:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `banner_child`
--

CREATE TABLE `banner_child` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_child`
--

INSERT INTO `banner_child` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, '1505139907.png', NULL, '2017-09-10 17:00:00', '2017-09-11 07:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, '1505140640.jpeg', NULL, '2017-09-10 17:00:00', '2017-09-11 07:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1505136861.png', '2017-09-09 17:00:00', '2017-09-11 06:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(2, 'Bệnh lý', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(5, 'Menu', 'menu.html', '2017-09-11 05:44:46', '2017-09-11 05:58:34'),
(6, 'Test', 'test.html', '2017-09-11 05:53:39', '2017-09-11 06:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `menu_child`
--

CREATE TABLE `menu_child` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_child`
--

INSERT INTO `menu_child` (`id`, `menu_id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menu 1', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(2, 1, 'Menu 2', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(3, 1, 'Menu 3', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(4, 1, 'Menu 4', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(5, 1, 'Menu 5', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(6, 1, 'Menu 6', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(7, 2, 'Menu 1', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(8, 2, 'Menu 2', NULL, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(30, 5, 'Menu 1', 'menu1.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(31, 5, 'Menu 2', 'menu2.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(32, 5, 'Menu 3', 'menu3.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(33, 5, 'Menu 4', 'menu4.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(34, 5, 'Menu 5', 'menu5.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(35, 5, 'Menu 6', 'menu6.html', '2017-09-11 05:58:34', '2017-09-11 05:58:34'),
(38, 6, 'Test 1', 'test1.html', '2017-09-11 06:02:10', '2017-09-11 06:02:10'),
(39, 6, 'Test 2', 'test2.html', '2017-09-11 06:02:10', '2017-09-11 06:02:10'),
(40, 6, 'Test 3', 'test3.html', '2017-09-11 06:02:10', '2017-09-11 06:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_10_164347_create_table_logo', 2),
(4, '2017_09_11_121415_create_table_menu', 3),
(5, '2017_09_11_121436_create_table_menu_child', 3),
(6, '2017_09_11_134911_create_table_banner', 4),
(7, '2017_09_11_135021_create_table_banner_child', 5),
(8, '2017_09_11_142543_create_table_intro', 6),
(11, '2017_09_11_144740_create_table_post_category', 7),
(12, '2017_09_11_144750_create_table_post', 7),
(13, '2017_09_12_145629_create_table_review', 8),
(14, '2017_09_12_160800_create_table_question', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `image`, `name`, `content`, `created_at`, `updated_at`) VALUES
(3, 1, '', '1231312', '<p>123123123</p>\r\n<p><img src="data:image/jpeg;base64,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" /></p>', '2017-09-12 07:44:31', '2017-09-12 07:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `image`, `name`, `name_slug`, `created_at`, `updated_at`) VALUES
(1, '1505221093.jpeg', 'Tiêu đề về mắt nè', 'tieu-de-ve-mat-ne', '2017-09-10 17:00:00', '2017-09-12 05:58:13'),
(2, 'hinh-noi-bat-2.jpg', 'Tiêu đề mắt', 'tieu-de-mat', '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(3, 'hinh-noi-bat-3.jpg', 'Tiêu đề bệnh mắt', 'tieu-de-benh-mat', '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(4, 'hinh-noi-bat-4.jpg', 'Bệnh mắt', 'benh-mat', '2017-09-10 17:00:00', '2017-09-10 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Phẫu thuật thẩm mỹ như thế nào để an toàn?', 'Lựa chọn cơ sở y tế uy tín, bác sĩ tay nghề cao\r\n\r\nGặp Bác sĩ để được tư vấn trực tiếp, xác định những biến chứng có thể xảy ra, mức độ an toàn, yếu tố nguy cơ trong quá trình phẫu thuật.\r\n\r\nTuân thủ tuyệt đối chỉ dẫn của Bác sĩ. Chăm sóc kĩ sau phẫu thuật', 0, '2017-09-11 17:00:00', '2017-09-11 17:00:00'),
(2, 'Nâng mũi được bao lâu?', 'Với các ưu điểm, ưu việt của các phương pháp hiện đại ngày nay, bạn có thể hoàn toàn yên tâm về kết quả sau này, duy trì lâu dài, vĩnh viễn, hoàn toàn không để lại sẹo.', 0, '2017-09-11 17:00:00', '2017-09-11 17:00:00'),
(3, 'Làm sao để ngực đẹp và quyến rũ nhất?', 'Thực phẩm dinh dưỡng: Tăng cường nhóm thực phẩm giàu protein và chất béo để kích thích mô ngực phát triển.\r\n\r\nTập thể dục liên quan đến ngực: Nên chọn các bài tập dành riêng cho cơ ngực để thúc đẩy ngực phát triển tự nhiên.\r\n\r\nTrang phục áo ngực phù hợp: Áo ngực quá chật không chỉ khiến ngực không phát triển. Mặt khác còn có thế gây ra các bệnh về da như nổi mẩn đỏ thậm chí gây tắc tuyến sữa.', 0, '2017-09-11 17:00:00', '2017-09-11 17:00:00'),
(4, 'Phẫu thuật thẩm mỹ như thế nào để an toàn?', 'Lựa chọn cơ sở y tế uy tín, bác sĩ tay nghề cao\r\n\r\nGặp Bác sĩ để được tư vấn trực tiếp, xác định những biến chứng có thể xảy ra, mức độ an toàn, yếu tố nguy cơ trong quá trình phẫu thuật.\r\n\r\nTuân thủ tuyệt đối chỉ dẫn của Bác sĩ. Chăm sóc kĩ sau phẫu thuật', 0, '2017-09-11 17:00:00', '2017-09-11 17:00:00'),
(5, 'Nâng mũi được bao lâu?', 'Với các ưu điểm, ưu việt của các phương pháp hiện đại ngày nay, bạn có thể hoàn toàn yên tâm về kết quả sau này, duy trì lâu dài, vĩnh viễn, hoàn toàn không để lại sẹo.', 0, '2017-09-11 17:00:00', '2017-09-12 09:57:48'),
(6, 'Question 123', 'Answer 123', 0, '2017-09-12 10:01:25', '2017-09-12 10:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `image`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'y-kien-1-bk.jpg', 'Trần Kim Ngọc', 'Đây là Bệnh Viện chuyên khoa về mắt Hiện Đại nhất. Tất cả mọi người Đều An Tâm để đặt niềm tin ở đội ngũ Bác sĩ Chuyên Nghiệp.', '2017-09-11 17:00:00', '2017-09-12 08:45:09'),
(2, 'y-kien-2-bk.jpg', 'Tran Ngoc', 'Các Bác Sỹ rất giỏi. Nhân viên Tận Tình và Chu Đáo.', '2017-09-11 17:00:00', '2017-09-12 08:46:26'),
(3, 'y-kien-3-bk.jpg', 'Lâm Võ Tuấn', 'Ý kiến của khách hàng.', '2017-09-11 17:00:00', '2017-09-12 08:46:54'),
(5, '1505231966.jpeg', 'Nguyễn Lý Hửu Phúc', 'Đây là nội dụng', '2017-09-12 08:59:26', '2017-09-12 08:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_child`
--
ALTER TABLE `banner_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_child`
--
ALTER TABLE `menu_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_child_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner_child`
--
ALTER TABLE `banner_child`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu_child`
--
ALTER TABLE `menu_child`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_child`
--
ALTER TABLE `menu_child`
  ADD CONSTRAINT `menu_child_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
