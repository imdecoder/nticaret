-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2021, 17:38:58
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `groups`
--

CREATE TABLE `groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `groups`
--

INSERT INTO `groups` (`id`, `slug`, `title`, `permissions`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test_slug', '{\"tr\":\"T\\u00fcrk\\u00e7e Ba\\u015fl\\u0131k\",\"en\":\"English Title\"}', '[\"user_login\",\"user_listing\"]', '2021-03-29 18:05:01', '2021-03-29 18:05:01', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-03-25-100848', 'App\\Database\\Migrations\\Users', 'default', 'App', 1616668436, 1),
(2, '2021-03-29-142836', 'App\\Database\\Migrations\\Groups', 'default', 'App', 1617028635, 2),
(3, '2021-03-29-100848', 'App\\Database\\Migrations\\Users', 'default', 'App', 1617028712, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `verify_code` int(6) NOT NULL,
  `bio` text DEFAULT NULL,
  `status` enum('ACTIVE','PASSIVE','PENDING') NOT NULL DEFAULT 'PENDING',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `group_id`, `firstname`, `lastname`, `email`, `password`, `verify_key`, `verify_code`, `bio`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Emin Arif', 'Pirinç', 'eminarifpirinc@gmail.com', '$2y$10$K7DLWjFSyoZ6/jPKrBF35.v391Lz6K/0DwWyHG1h2rVP1XU/hd0l6', 'xJtkakSfewEnIfIFhRDLNYxPorgWApRuQZAdXlUMmqBDzHKwVKPTJFpsGcjbCevz', 259926, NULL, 'ACTIVE', '2021-03-29 17:39:03', '2021-03-29 18:38:13', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
