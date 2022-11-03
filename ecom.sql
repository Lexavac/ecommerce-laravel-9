-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2022 pada 02.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(10, 'App\\Models\\Tb_productcate', 19, '542bd098-97e7-4eb0-9e44-47a72090a153', 'photo', '635d652c6afb5_WhatsApp Image 2022-06-05 at 10.27.27', '635d652c6afb5_WhatsApp-Image-2022-06-05-at-10.27.27.jpeg', 'image/jpeg', 'public', 'public', 60851, '[]', '[]', '[]', '[]', 1, '2022-10-29 10:38:55', '2022-10-29 10:38:55'),
(13, 'App\\Models\\Product', 2, '37a68e33-31fb-4218-a1e4-bad68c298673', 'gallery', '6361a6c3baf68_peakpx (2)', '6361a6c3baf68_peakpx-(2).jpg', 'image/jpeg', 'public', 'public', 1048463, '[]', '[]', '[]', '[]', 1, '2022-11-01 16:07:51', '2022-11-01 16:07:51'),
(14, 'App\\Models\\Product', 3, '72bbbb06-869d-4d12-beac-797eb32f42ba', 'gallery', '6361d28d344ee_wallpaperflare.com_wallpaper(3)', '6361d28d344ee_wallpaperflare.com_wallpaper(3).jpg', 'image/jpeg', 'public', 'public', 874646, '[]', '[]', '[]', '[]', 1, '2022-11-01 19:14:39', '2022-11-01 19:14:39'),
(15, 'App\\Models\\Product', 2, 'f41be1ce-09bf-443e-86ee-a2c060a5cf64', 'gallery', '6361d5d32f9c3_wallpaperflare.com_wallpaper(3)', '6361d5d32f9c3_wallpaperflare.com_wallpaper(3).jpg', 'image/jpeg', 'public', 'public', 874646, '[]', '[]', '[]', '[]', 2, '2022-11-01 19:28:36', '2022-11-01 19:28:36'),
(16, 'App\\Models\\Product', 2, '2e1d6141-f188-4cf2-9477-a97b91cdb3b7', 'gallery', '6361d5d36acf7_wallpaperflare.com_wallpaper(2)', '6361d5d36acf7_wallpaperflare.com_wallpaper(2).jpg', 'image/jpeg', 'public', 'public', 561520, '[]', '[]', '[]', '[]', 3, '2022-11-01 19:28:37', '2022-11-01 19:28:37'),
(18, 'App\\Models\\Tb_productcate', 23, 'fcb0cce7-5651-4dd2-91b6-61f7797651c8', 'photo', '6361ec0938593_peakpx (2)', '6361ec0938593_peakpx-(2).jpg', 'image/jpeg', 'public', 'public', 1048463, '[]', '[]', '[]', '[]', 1, '2022-11-01 21:03:23', '2022-11-01 21:03:23'),
(19, 'App\\Models\\Tb_productcate', 24, '2b76f7c1-7ff5-4278-9967-f2a4c8937e74', 'photo', '6361ec23e3689_peakpx (2)', '6361ec23e3689_peakpx-(2).jpg', 'image/jpeg', 'public', 'public', 1048463, '[]', '[]', '[]', '[]', 1, '2022-11-01 21:03:50', '2022-11-01 21:03:50'),
(20, 'App\\Models\\Tb_productcate', 25, '8996667f-4a25-41c4-a67d-af8328369512', 'photo', '6361ec3b0b4d9_peakpx (2)', '6361ec3b0b4d9_peakpx-(2).jpg', 'image/jpeg', 'public', 'public', 1048463, '[]', '[]', '[]', '[]', 1, '2022-11-01 21:04:12', '2022-11-01 21:04:12'),
(25, 'App\\Models\\Product', 5, 'd06456c3-eb3e-4ce8-841a-f29bf6a7a7ed', 'gallery', '6361fc26ec05b_image_processing20220908-2089-1v5rl0b', '6361fc26ec05b_image_processing20220908-2089-1v5rl0b.png', 'image/png', 'public', 'public', 880029, '[]', '[]', '[]', '[]', 1, '2022-11-01 22:12:15', '2022-11-01 22:12:15'),
(27, 'App\\Models\\Product', 6, '07d62b95-ce29-43c1-9b60-235e35dbd0fc', 'gallery', '6362489668864_image_processing20210503-18471-d8mza3', '6362489668864_image_processing20210503-18471-d8mza3.jpg', 'image/jpeg', 'public', 'public', 711733, '[]', '[]', '[]', '[]', 1, '2022-11-02 03:38:16', '2022-11-02 03:38:16'),
(28, 'App\\Models\\Product', 7, 'cf40c41d-073f-4e1e-aa8e-f3b6ffc02e84', 'gallery', '636248bdafb97_image_processing20210628-29268-1i8cjkq', '636248bdafb97_image_processing20210628-29268-1i8cjkq.jpg', 'image/jpeg', 'public', 'public', 644485, '[]', '[]', '[]', '[]', 1, '2022-11-02 03:39:01', '2022-11-02 03:39:01'),
(29, 'App\\Models\\Product', 7, '4aacc5fd-ef0b-40a9-b9f6-25a930c0e68e', 'gallery', '63624fa475bb0_image_processing20210503-18471-d8mza3', '63624fa475bb0_image_processing20210503-18471-d8mza3.jpg', 'image/jpeg', 'public', 'public', 711733, '[]', '[]', '[]', '[]', 2, '2022-11-02 04:08:35', '2022-11-02 04:08:35'),
(30, 'App\\Models\\Product', 7, '10857248-2864-41a2-95c5-66617be7d0ae', 'gallery', '63624fa682f03_image_processing20210628-29268-1i8cjkq', '63624fa682f03_image_processing20210628-29268-1i8cjkq.jpg', 'image/jpeg', 'public', 'public', 644485, '[]', '[]', '[]', '[]', 3, '2022-11-02 04:08:35', '2022-11-02 04:08:35'),
(31, 'App\\Models\\Product', 7, 'e068c260-bbd3-4e79-84db-8ad212e462b3', 'gallery', '63624fac79e23_image_processing20210628-31283-1bn6a5d', '63624fac79e23_image_processing20210628-31283-1bn6a5d.jpg', 'image/jpeg', 'public', 'public', 991454, '[]', '[]', '[]', '[]', 4, '2022-11-02 04:08:35', '2022-11-02 04:08:35'),
(33, 'App\\Models\\Tb_productcate', 26, '5a598263-2883-4cc4-a0c0-c707acbe1900', 'photo', '636295015c9da_109513', '636295015c9da_109513.jpg', 'image/jpeg', 'public', 'public', 1372421, '[]', '[]', '[]', '[]', 1, '2022-11-02 09:04:18', '2022-11-02 09:04:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_25_153941_create_categories_table', 1),
(11, '2022_10_26_233131_add_is_admin_colum_to_tb_customers_table', 2),
(12, '2022_10_26_234308_add_remember_token_to_tb_customers_table', 2),
(13, '2022_10_27_000711_create_categories_table', 3),
(14, '2022_10_27_001312_create_categories_table', 4),
(15, '2022_10_27_150828_create_categories_table', 5),
(16, '2022_10_28_184309_create_media_table', 6),
(17, '2022_10_31_095226_add_google_id_column', 7),
(18, '2022_10_31_101216_add_google_id_column', 8),
(19, '2022_10_31_142402_create_social_accounts_table', 9),
(20, '2022_10_31_150217_create_google_user_table', 10),
(21, '2022_10_31_153513_create_tb_googles_table', 11),
(22, '2022_11_01_214036_create_products_table', 12),
(23, '2022_11_02_024525_create_tags_table', 13),
(24, '2022_11_02_050052_create_product_tag_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `seller_id`, `desc`, `price`, `quantity`, `category_id`, `inventory_id`, `created_at`, `updated_at`) VALUES
(5, 'Project UI React Native', 'project-ui-react-native', NULL, 'this is a ui project using native react js , made by king native in the universe', 300000, 1, 25, NULL, '2022-11-01 22:12:14', '2022-11-02 04:04:21'),
(6, 'Project UI Using Flutter', 'project-ui-using-flutter', NULL, 'Project UI Using Flutter', 100000, 1, 25, NULL, '2022-11-02 03:38:15', '2022-11-02 03:38:15'),
(7, 'Project UI Using Flutter 2', 'project-ui-using-flutter-2', NULL, 'Project Using Flutter 2', 1500000, 1, 25, NULL, '2022-11-02 03:39:01', '2022-11-02 03:39:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, NULL),
(2, 5, 3, NULL, NULL),
(3, 6, 2, NULL, NULL),
(4, 7, 3, NULL, NULL),
(5, 7, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Figma', 'figma', '2022-11-01 20:26:48', '2022-11-01 20:26:48'),
(2, 'Ui', 'ui', '2022-11-01 20:26:56', '2022-11-01 20:26:56'),
(3, 'Landing Page', 'landing-page', '2022-11-01 20:27:08', '2022-11-01 20:27:08'),
(4, 'Footer', 'footer', '2022-11-01 20:27:26', '2022-11-01 20:27:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_checkout`
--

CREATE TABLE `tb_checkout` (
  `id` varchar(255) NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customers`
--

CREATE TABLE `tb_customers` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `google_id` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customers`
--

INSERT INTO `tb_customers` (`id`, `username`, `password`, `is_admin`, `firstname`, `lastname`, `email`, `phoneNumber`, `adress`, `created_at`, `updated_at`, `remember_token`, `google_id`) VALUES
(1, 'Tomura', '$2y$10$RKM85ef39bgtEtHVJPr2U.TgaQLUA0H3961uircHdTWvIjMpyePiu', 1, 'Tomura', 'Shigaraki', 'lexalord0@gmail.com', '0895351066695', 'tokyo', '2022-10-27 00:05:15', '2022-10-27 00:05:15', NULL, NULL),
(2, 'lexavac', '$2y$10$A8XAEK//mJ4eDM/Gnyiad.ykAxCIxT69/335W1y1m.EMLG6B5Ejmy', 1, 'admin', 'admin', 'lexavac27@gmail.com', '7777777', 'sky', '2022-10-27 00:00:00', '2022-10-27 00:00:00', 'n4JsyHdMfNKbwYceJUOrXn96DvPkxKAR4LLrFoVjvu20Wm02pCukurTmy45x', NULL),
(3, 'Sulthan', '$2y$10$YbHk9xFnwycHgR0lZNexjujyqqDOlV/xOOujUuyROZS3Lbs5zzJTy', 0, 'Sulthan', 'wahyu', 'sulthansukapria@gmail.com', '0895351066695', 'bogor', '2022-10-27 04:40:12', '2022-10-27 04:40:12', NULL, NULL),
(4, 'lexavac', '$2y$10$He.9zOoBKrfNqiRTQGWaPuyj06rPb5q4AbSbeoeny629xNBAe4n6W', 0, 'admin', 'admin', 'lexavac27@gmail.com', '7777777', 'sky', '2022-10-27 15:06:08', '2022-10-27 15:06:08', NULL, NULL),
(5, 'lexavac', '$2y$10$q8kcCwdU8BDvr7AwNXIL9.ujY4Med9F1HX6yG9TYIiLo0Dt2A7w7m', 0, 'admin', 'admin', 'lexavac27@gmail.com', '7777777', 'sky', '2022-10-27 15:09:30', '2022-10-27 15:09:30', NULL, NULL),
(8, 'Lex4', '$2y$10$Hs0nLymamHRV5jX3B7A6C.dZHJbhOBRniizWjx9hMBAAbe3C0ZlV6', 0, 'Lex4', 'Lex4', 'fachry2710@gmail.com', 'Lex4', 'Lex4', '2022-10-31 15:52:03', '2022-10-31 15:52:03', '1iRmbDq9FLHpsdnTDPDvko0nB2AAR1mNs0LQJX3EnOceWfWwDZ8xOP5AMEry', NULL),
(10, 'Lexavac wa zeta ga suki', '$2y$10$ouFVW3txjmY3UbIaRmmHFO7HM7Yn.5cR8vkIRHM3jNblETUmPbNea', 1, 'Lexavac wa zeta ga suki', 'Lexavac wa zeta ga suki', 'fachrylord0@gmail.com', 'Lexavac wa zeta ga suki', 'Lexavac wa zeta ga suki', '2022-11-01 01:44:19', '2022-11-01 01:44:19', 'yDWN2otljOlg0oP1WjT9JCVAAuTjC94jZCmz3EVKt2oZBaLNCgTUrr7BwLxi', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_googles`
--

CREATE TABLE `tb_googles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_googles`
--

INSERT INTO `tb_googles` (`id`, `username`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Lex4', 'fachry2710@gmail.com', 'Y23o0N5OQfdP9SpVo1fHqP3GgN6Erwffp4OJu7TCUGVem4GqRbaLYkLDES2B', '2022-10-31 08:44:09', '2022-10-31 08:44:09'),
(3, 'Lexavac wa zeta ga suki', 'fachrylord0@gmail.com', '6N9d24Z7WxKrNjeAF6lsprq9fhEsoEsFF8UW8qFUtvpGN2kgAz7kXcENKNFm', '2022-10-31 08:44:25', '2022-10-31 08:44:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orderdetails`
--

CREATE TABLE `tb_orderdetails` (
  `id` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `paymentId` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `productId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paymentdetails`
--

CREATE TABLE `tb_paymentdetails` (
  `paymentId` varchar(255) NOT NULL,
  `paymentDate` date NOT NULL,
  `paymentAmount` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `paymentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `productId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `sellerId` varchar(255) NOT NULL,
  `productDesc` text NOT NULL,
  `productCate` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `inventoryId` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_productcates`
--

CREATE TABLE `tb_productcates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_productcates`
--

INSERT INTO `tb_productcates` (`id`, `name`, `slug`, `desc`, `cover`, `category_id`, `created_at`, `updated_at`) VALUES
(25, 'React JS', 'react-js', 'React Js Project', NULL, NULL, '2022-11-01 21:04:12', '2022-11-01 21:04:12'),
(26, 'React Native', 'react-native', 'Landing Page React Native', NULL, 25, '2022-11-01 21:05:03', '2022-11-02 09:00:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_productinven`
--

CREATE TABLE `tb_productinven` (
  `id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_seller`
--

CREATE TABLE `tb_seller` (
  `sellerId` varchar(255) NOT NULL,
  `sellerName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sellermethod`
--

CREATE TABLE `tb_sellermethod` (
  `id` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `sellerId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_shoppingsession`
--

CREATE TABLE `tb_shoppingsession` (
  `id` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indeks untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indeks untuk tabel `tb_checkout`
--
ALTER TABLE `tb_checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessionId` (`sessionId`),
  ADD KEY `productId` (`productId`);

--
-- Indeks untuk tabel `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_googles`
--
ALTER TABLE `tb_googles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_googles_email_unique` (`email`);

--
-- Indeks untuk tabel `tb_orderdetails`
--
ALTER TABLE `tb_orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `paymentId` (`paymentId`);

--
-- Indeks untuk tabel `tb_paymentdetails`
--
ALTER TABLE `tb_paymentdetails`
  ADD PRIMARY KEY (`paymentId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `productCate` (`productCate`),
  ADD KEY `inventoryId` (`inventoryId`),
  ADD KEY `sellerId` (`sellerId`);

--
-- Indeks untuk tabel `tb_productcates`
--
ALTER TABLE `tb_productcates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `tb_productinven`
--
ALTER TABLE `tb_productinven`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_seller`
--
ALTER TABLE `tb_seller`
  ADD PRIMARY KEY (`sellerId`);

--
-- Indeks untuk tabel `tb_sellermethod`
--
ALTER TABLE `tb_sellermethod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellerId` (`sellerId`);

--
-- Indeks untuk tabel `tb_shoppingsession`
--
ALTER TABLE `tb_shoppingsession`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_googles`
--
ALTER TABLE `tb_googles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_productcates`
--
ALTER TABLE `tb_productcates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tb_productcates` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_checkout`
--
ALTER TABLE `tb_checkout`
  ADD CONSTRAINT `tb_checkout_ibfk_1` FOREIGN KEY (`sessionId`) REFERENCES `tb_shoppingsession` (`id`),
  ADD CONSTRAINT `tb_checkout_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tb_product` (`productId`),
  ADD CONSTRAINT `tb_checkout_ibfk_3` FOREIGN KEY (`sessionId`) REFERENCES `tb_shoppingsession` (`id`),
  ADD CONSTRAINT `tb_checkout_ibfk_4` FOREIGN KEY (`productId`) REFERENCES `tb_product` (`productId`);

--
-- Ketidakleluasaan untuk tabel `tb_orderdetails`
--
ALTER TABLE `tb_orderdetails`
  ADD CONSTRAINT `tb_orderdetails_ibfk_5` FOREIGN KEY (`productId`) REFERENCES `tb_product` (`productId`),
  ADD CONSTRAINT `tb_orderdetails_ibfk_6` FOREIGN KEY (`paymentId`) REFERENCES `tb_paymentdetails` (`paymentId`);

--
-- Ketidakleluasaan untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_2` FOREIGN KEY (`inventoryId`) REFERENCES `tb_productinven` (`id`),
  ADD CONSTRAINT `tb_product_ibfk_3` FOREIGN KEY (`sellerId`) REFERENCES `tb_seller` (`sellerId`);

--
-- Ketidakleluasaan untuk tabel `tb_productcates`
--
ALTER TABLE `tb_productcates`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tb_productcates` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sellermethod`
--
ALTER TABLE `tb_sellermethod`
  ADD CONSTRAINT `tb_sellermethod_ibfk_1` FOREIGN KEY (`sellerId`) REFERENCES `tb_seller` (`sellerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
