-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2021, 16:50:01
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
  `slug` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `permissions` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `groups`
--

INSERT INTO `groups` (`id`, `slug`, `title`, `permissions`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '{\"tr\":\"Yönetici\",\"en\":\"Administrator\"}', '[]', '2021-03-30 11:02:18', '2021-04-01 17:49:44', NULL),
(2, 'user', '{\"tr\":\"Kullanıcı\",\"en\":\"User\"}', '[]', '2021-03-30 11:02:18', '2021-04-01 16:01:42', NULL),
(3, 'moderator', '{\"tr\":\"Moderatör\",\"en\":\"Moderator\"}', '[\"admin_login\",\"groups_list\",\"users_list\"]', '2021-03-30 17:06:55', '2021-03-31 16:48:07', NULL),
(6, 'editor', '{\"tr\":\"Editör\",\"en\":\"Editor\"}', '[\"admin_login\"]', '2021-03-31 14:26:30', '2021-04-01 15:39:48', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `name`, `slug`, `url`, `type`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Desert.jpg', 'Desert', 'public/uploads/Desert.jpg', 'jpg', 845941, '2021-04-29 12:02:23', '2021-04-29 12:02:23'),
(2, 'Jellyfish.jpg', 'Jellyfish', 'public/uploads/Jellyfish.jpg', 'jpg', 775702, '2021-04-29 12:02:25', '2021-04-29 12:02:25'),
(3, 'Lighthouse.jpg', 'Lighthouse', 'public/uploads/Lighthouse.jpg', 'jpg', 561276, '2021-04-29 12:02:26', '2021-04-29 12:02:26'),
(4, 'Koala.jpg', 'Koala', 'public/uploads/Koala.jpg', 'jpg', 780831, '2021-04-29 12:02:26', '2021-04-29 12:02:26'),
(5, 'Chrysanthemum.jpg', 'Chrysanthemum', 'public/uploads/Chrysanthemum.jpg', 'jpg', 879394, '2021-04-29 12:02:27', '2021-04-29 12:02:27'),
(6, 'Tulips.jpg', 'Tulips', 'public/uploads/Tulips.jpg', 'jpg', 620888, '2021-04-29 12:02:27', '2021-04-29 12:02:27'),
(7, 'Hydrangeas.jpg', 'Hydrangeas', 'public/uploads/Hydrangeas.jpg', 'jpg', 595284, '2021-04-29 12:02:28', '2021-04-29 12:02:28'),
(8, 'Penguins.jpg', 'Penguins', 'public/uploads/Penguins.jpg', 'jpg', 777835, '2021-04-29 12:02:28', '2021-04-29 12:02:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(4) NOT NULL,
  `flag` varchar(4) NOT NULL,
  `title` text NOT NULL,
  `status` enum('ACTIVE','PASSIVE') NOT NULL DEFAULT 'PASSIVE',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`id`, `code`, `flag`, `title`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tr', 'tr', '{\"tr\":\"Türkçe\",\"en\":\"Turkish\"}', 'ACTIVE', '2021-03-30 11:02:19', '2021-03-30 11:02:19', NULL),
(2, 'en', 'us', '{\"tr\":\"İngilizce\",\"en\":\"English\"}', 'ACTIVE', '2021-03-30 11:02:19', '2021-03-30 11:02:19', NULL);

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
(1, '2021-03-29-100848', 'App\\Database\\Migrations\\Users', 'default', 'App', 1617090256, 1),
(2, '2021-03-29-142836', 'App\\Database\\Migrations\\Groups', 'default', 'App', 1617090256, 1),
(3, '2021-03-30-073757', 'App\\Database\\Migrations\\Languages', 'default', 'App', 1617090257, 1),
(5, '2021-04-05-064141', 'App\\Database\\Migrations\\Images', 'default', 'App', 1619607106, 2);

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
(1, 1, 'Emin Arif', 'Pirinç', 'eminarifpirinc@gmail.com', '$2y$10$8QtsiSugSXFQ/iJNozdhrOx78vgZRhEvRWNMKRvBZpzXJfCE9FFg2', 'MYtCfTdArrIJNpnwlquhyUBqojXFsOwOZgARGdxovzbzaRTUpibZlecLNYDVExSe', 165947, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-30 11:02:19', '2021-04-02 17:40:12', NULL),
(2, 3, 'Hasan', 'Pirinç', 'hasanpirinc@gmail.com', '$2y$10$8QtsiSugSXFQ/iJNozdhrOx78vgZRhEvRWNMKRvBZpzXJfCE9FFg2', 'MYtCfTdArrIJNpnwlquhyUBqojXFsOwOZgARGdxovzbzaRTUpibZlecLNYDVExSe', 165947, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-30 11:02:19', '2021-04-02 16:20:37', NULL),
(3, 2, 'Sinem', 'Arslanoğlu', 'doruk.kahveci@akar.com.tr', '$2y$10$j3sVQL/3t35cB4jlmo8Gdet0xmAD4O1VIwmtDAkyaDr56fvHFLY5a', 'xLxmqefdfsAMojIBXdtFAYusCYikbNrPWHnbtUmSVrJeuGEHLgoBzcDXaqZnjwlW', 135461, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'PASSIVE', '2021-03-31 16:45:36', '2021-04-02 15:55:36', NULL),
(4, 2, 'Kağan', 'Adıvar', 'barlas.yalcin@akay.edu.tr', '$2y$10$OnADbAzCiNBKhoFCTxm/K.0npry8BfLLREHDSg4uN9vI0isaa.u8e', 'zrHmyNCXFRHZfAWCrGnSIckPpVPucqwWQvLmZgUBhDyKgziVkJYfEYqGhKibALBu', 625248, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'PASSIVE', '2021-03-31 16:45:36', '2021-04-02 15:55:36', NULL),
(6, 2, 'Sinem', 'Gönültaş', 'ece23@hotmail.com', '$2y$10$UuTF8RcXjfACj4WJHKuq5.T5WgKz6fbzec1pA/Mz8j9nXCPsUwePG', 'JWNMFkzhNRMljOHXhwTqBXJijuPLExGgYCcSKVmKvIciyaUUfnoraGppEQZetdsC', 859028, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'PENDING', '2021-03-31 16:45:37', '2021-04-02 15:30:20', NULL),
(7, 2, 'Sinem', 'Kumcuoğlu', 'ryazici@ozbir.com', '$2y$10$N2JEuc8opXlSzJwulJMsB.UZhcgM3kVSnrqDzWG7SxWT08Acbx0XK', 'FrKltPHYzQOhCHLeKtxPksoSyIpOnaEVJfAdMQDuXvVrTwUbmNBjRAjuWTwaxXLl', 149027, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'PENDING', '2021-03-31 16:45:37', '2021-04-02 16:10:53', NULL),
(9, 2, 'Bartu', 'Tazegül', 'berke28@yahoo.com', '$2y$10$zZCLvU35I7MEUFSE64aZ0O7GQt0315hR01/YyY5.6NoQRg8ixODwW', 'JMfLvqlDwOdBVuBLJYUxWkOebFzPcVAKmTsgmulgrtxWdcvipKjhENkoeRpnSHZs', 322082, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:37', '2021-04-02 15:29:55', '2021-04-01 15:17:22'),
(10, 2, 'Burcu', 'Küçükler', 'xbabacan@kocoglu.edu', '$2y$10$uR9dkIs1Te3rhw6fVaqG5eliblh/JO9X2IMoQ7Ef.KmKbZCzge/ty', 'RMWUtbpgQeDajKPOeADMxImyAqGkkUltzruuyCbONjwRdwpmBHsNFhEIZLcqSZXQ', 543092, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:37', '2021-04-02 15:29:55', '2021-04-01 15:17:22'),
(11, 2, 'Ebru', 'Ertürk', 'menemencioglu.ada@superposta.com', '$2y$10$TI/aEsUjBgtb6ofa9Jtame3k7EmuSKGaUrztYy68tCTu1zYU4eI8W', 'WapeqpZiXGMCkBbNzVczxofQPiqfnECLJowhSvBWDadJgSmexrPTrutRVbXmwvAY', 765778, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:37', '2021-04-02 15:29:55', '2021-04-01 15:17:22'),
(12, 2, 'Ferid', 'Oraloğlu', 'umran.basoglu@gmail.com', '$2y$10$TgchjrWlr5m7hZ9AsMxcnOd4Vi63bkTkxSyBRyPCkVyP8PoDbvJwu', 'emoGXpWLjhNvKCzZcEhMdnHdOSfTeutiRqaDgrTPBYIIOSkAWBYsjzmbLFobXHpQ', 636078, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:37', '2021-04-02 15:29:55', '2021-04-01 15:17:22'),
(13, 2, 'Ada', 'Duygulu', 'okur.esma@gmail.com', '$2y$10$5P1gicjvHkH4vtLqnjILuemnLap8Y0WeXH09V8gQm54F3QbJ9.gym', 'keujLvREWJgOWxcNbGnPoCkIAHnvaNbXOQVrhAptSpCPrcFshSdzlyRyeMMogaDw', 760153, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:37', '2021-04-02 15:29:55', NULL),
(14, 2, 'İrem', 'Ozansoy', 'skocoglu@daglaroglu.com', '$2y$10$pb0ygDViIjb0..QCNJkkOOcMoLzfHebiiiFh8bzDJ/c/8m4P5.mNK', 'qlshUoFvAmzLZUxpIAHhyBoYeyVHJTiRudVIgkOnraNPqjwgselrcmbjPMONTKxE', 889605, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(15, 2, 'Ada', 'Bademci', 'jpaksut@abaci.edu.tr', '$2y$10$L18yvXme/iPbV7op1goUUuqwj.3pCN9JQi1LqaB9x3/zRAEhAvqoC', 'VfuGoxAsaBuPRHMGkliZYpzDqLkvHTribhEvPodKRVmMDFOzWcIbjKtxUQlefJXr', 883984, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(16, 2, 'Onur', 'Çağıran', 'yesilkaya.ruya@turk.net', '$2y$10$2b.ZqAbhoRGdGYi3dPnzWu5XEp404D.b77UwHOgrk.QkXQMNefJc.', 'wTYkCnWfHKXvKEihlTZrBNDJguxGyytgXeFVvOkMPaYUUjcdQbRALHtIzWwPoqZS', 339031, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(17, 2, 'Aşkın', 'Gümüşpala', 'umran.agaoglu@erkekli.edu', '$2y$10$FhlWleAo3xlhJabOzANBI.q2FfDxwm9jkN5NyKKBhfSlzyinZGVsm', 'AoNYRtslgEOxajVsCWrXcfbNBuoFTzihJKxeMdZuVPXIQHRJqTpbweLmaEglyGAj', 916187, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(18, 2, 'Kerem', 'Yeşilkaya', 'ece95@kunter.com', '$2y$10$O0xvA3Rku1RoN6IwHPde4.pI/KrQkKVmjVjAUVozNmVefgJkyVkQS', 'fbDcQGVtYrwljUuJRYsFkdHyNfTLbxqEcHdqyiojOUKmseCMSPaivvoBNKazFgTL', 953626, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(19, 2, 'Ada', 'Taşçı', 'ttoraman@yahoo.com', '$2y$10$r.SY/zgOoH58z04QpMEZpOKnHmiSgkS/2yThbTEA/zbL6/NY29Ie6', 'DZiaWuILohTvOxiAKQNvERrnmlBpdHaPOcUsmQGyCGBMPtlnhfZrfYtjjoIkebDV', 771124, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(20, 2, 'Emre', 'Yeşilkaya', 'akaydin.umran@superposta.com', '$2y$10$TvvfoYdLbNonwOuCWdnLBODiooPWoMkd8lUc/2Au22BuHy3/Qt4ZO', 'wyVEaqkXfiUccDAweMbzqDdFPTltMGGWlRLojVHtrUkfpFxdvuiYQsSHRmNZNZKB', 894598, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(21, 2, 'Rüya', 'Tokatlıoğlu', 'solmaz.cem@mynet.com', '$2y$10$4M80Z3qGGFeN9ePKkRDzEOAhOoDL2g77FAKjhBca2LEo12H4PAt6u', 'VqzPgQalwFitGzXqAnMsbCCBJOlyxDaZBKfpAENoOeTEyhbRSXTdWejDuHKYIdPY', 642583, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(22, 2, 'Ebru', 'Velioğlu', 'bkoybasi@kuday.com', '$2y$10$k7LOlfa3TONDOcxjRBTO9eyRZTjyqoZ6W34geN59lICrYkz8gxbbW', 'fLHiDAoljNRcXWCHrMGDzqtEgpeEdaUyvgzolNIbrqcuvYIyKOnBwBSmdJWbLntA', 188018, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:38', '2021-04-02 15:29:55', NULL),
(23, 2, 'İrem', 'Arslanoğlu', 'xyorulmaz@turk.net', '$2y$10$HaUE1iIcFadYBQ02oMLG0ufjCOWw9EMJSSdEGSJEiWMt5OjEc9xaS', 'aLGrfpkRqSCFmDifNWAzIgSItxXYebbGwUBeYQAVpWvqZTnNmJcEnyQiZXyHKVFh', 109196, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(24, 2, 'Berk', 'Özbey', 'irem18@kocyigit.com', '$2y$10$rIQRi11icS5Zg8MuClUZ5ub6fAlAGWoak2Abhr4/kdA/uF//H/RO.', 'ISjJkorvDGzNlnBnhFCOiMXKeHQmpwJvyVYsZPFeRLOIMrbRsUkBZtGdqxgTdyfl', 728571, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(25, 2, 'Cem', 'Önür', 'celciboga@hotmail.com', '$2y$10$4o89iusQ8Mkf/Z0EwLA0o.HLk5AIQQL83zIqYaw14ik1q3I/11hUO', 'DuEXnipNBjZjBCtVWLafqQUmiuyhpIFGMaDqVcRzStJrzMIgcsCKxWgShfekHTEK', 379321, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(26, 2, 'Emel', 'Balcı', 'polat.ozkok@gmail.com', '$2y$10$gqcGDOZqULD1jS01J9fPcOnE9ijSEKHSA25.lm/eX9FgDRy/YBUVm', 'HpucbQMBoCAaoWTryyFhkBqNrcjIvKgiDePeJnTIPRaOzLYYZGEVkWHAStLQUstO', 330739, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(27, 2, 'Şahnur', 'Kumcuoğlu', 'terginsoy@tuzun.com.tr', '$2y$10$6H5ShjUrrSYchUPm9u9M.edyQx9ghJRpI0PuCzEpadhwGOBujPmey', 'isEcIhvCmoOaJhIALVurwHYlWCQSdDgAOkVeXefyFJquaZXnlNwBgWzjNGormqRf', 639151, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(28, 2, 'Burcu', 'Aydan', 'ada33@yahoo.com', '$2y$10$Y.bBtqHGsItBUpj8rXb/dOsWPoJCFuzpas9i2uRzw9W/k36R2rEqu', 'UXyxdEmeGULLqWthcbVYnZjXcwrWFbivtZInKNArlszxjJPMYFdyoekOlCifPQTO', 481313, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(29, 2, 'Ali', 'Taşçı', 'utku.ekici@sandalci.com', '$2y$10$gH04fnfenJZtwaDMToEmv.gP6LR2zZtprV7XngbUmEvsXpApFTr3y', 'AagTxyhMMVICZAzPJfawgtKdSmOPYmEHWxjfNlXkIOFGRijJkTELhCNpKvleuStp', 451710, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(30, 2, 'Ece', 'Yılmazer', 'onur82@tunaboylu.edu.tr', '$2y$10$yrkIhnct5kXdzivEAWapku7jo/gGu.M9Zr3hvuhMGbGSUe9FFuMMW', 'mPTlxhtYfakbVcKzXuBngiZJqXWnZlreOMFWwzQSwsLJLaUBHRevgoNIbKVdHyCA', 530789, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(31, 2, 'Burcu', 'Aydan', 'dagdas.kagan@ilicali.com', '$2y$10$aljAKQzhnbtRzWmmOEnJXO4Dg.Lmd5xyJM4eqQb1LCmZUig4Vu4jG', 'vPyMSAtEsiaWNXceuPVgnGOYVhrdHpumghsrCYLlRyKBXFZQcAbzeafJQjjSxqpo', 826024, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(32, 2, 'Utku', 'Tunaboylu', 'rakar@sarioglu.com', '$2y$10$asOSNABO4mk9kbhhEA0g1Ono43/QNqz4EUeMikcYSF/9arKbLG7Wa', 'WDdPyDwaAjINMfCBmnqwuYFQkRedsWFmbCPAHllcKocSiJiOEyUORUTVhbXTxZrV', 718900, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:39', '2021-04-02 15:29:55', NULL),
(33, 2, 'Sinem', 'Yıldızoğlu', 'nkoybasi@gmail.com', '$2y$10$eC/uQBalHZtXp9TKSiCop.jzLyYcD4tHHam7hNDE./6URtgp4FWNC', 'hhBHJeOuWVWtzjrotKngqwYRPGssfJcvBHXTSywqPIFOmzkxYEESpCcLGVDfilnu', 671775, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(34, 2, 'Rüya', 'Öztuna', 'oyetkiner@gmail.com', '$2y$10$e3vMbK7ha4DRONDHEkzU9e6w0rJM73k47I5R7myMAZBunjnw5kuMe', 'hPqYkomknbAeJTbVRGFZXyzrSzKlDMwVrCQBGRUMctjiSAaWqfJmcYUygtogesId', 587387, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(35, 2, 'Yağız', 'Tuğluk', 'esma.aclan@karabocek.net', '$2y$10$ZhkiOhAC85JIyGdmtF6fr.HhrVxi2KiRAA76p1E8URV1U0o1vTLJK', 'xVenYJPiwcOBlHjgMKXkolSAvPaCItFmbsTvAfnIdYazSoBxuEuJLqWfVWCDghGr', 746304, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(36, 2, 'Emel', 'Tüzün', 'aaykac@akay.com.tr', '$2y$10$mr5xtIY3rA2zWMQAYnz9eeD3EYCrxHri.jqrqFghiEXLlKrs8VikW', 'lMCYfjwSOpjIayZdbUYImQBivlhvAoLgAyKaHXNDrdsPDUrGcRtBWJtHJcGgZkfQ', 802296, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(37, 2, 'Cihan', 'Akyüz', 'ruya90@camdali.edu.tr', '$2y$10$xbktdr7YziFvzKvY.i6U1OCt/loTMsJtyH4bkxJ0eYSkqhrZZt3FK', 'hTECiWBsyjZCuzmvoESjSbQKAuIlqPdXYUcRmDUrPfqHgtYIDNvFMankfzeAMNwL', 620319, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(38, 2, 'Ümran', 'Adal', 'meric84@kulaksizoglu.edu', '$2y$10$s8g1w3NipEWJJn4YiTejeu3ohki/PLchfIJKyry6Fjh1QJoZAQ24G', 'JSwGpKyNBCZyUjFmMzQPeohYjZGaVAkcWCnbJgsOIPtWpwfRDmUObHXEEMiRIlxH', 768563, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(39, 2, 'Şahnur', 'Sarıoğlu', 'jatakol@turk.net', '$2y$10$xn30QRCUGQkSF98RINbJR.qc9rsWSg7w9zvehXVbXzJNSq3mFsS6K', 'SAhbqQZFTFKBRJxQidGGuaPErzOtfmCUUPXsitWoLIMwZYWfghncocSCjqHlDMHu', 624576, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(40, 2, 'Polat', 'Küçükler', 'ruzgar.tuglu@abaci.com', '$2y$10$vYHQDQphcDhYWSImGHtfI.MtG34m2jZjrgrwFTSzEFxCnnYkNsvDe', 'GlpLKTjcuHWVowMkWlsFJvcUJrIfDkbOgvFqSdUhzXGIVQNmmEgaSnQXuLptdqrn', 358938, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:40', '2021-04-02 15:29:55', NULL),
(41, 2, 'Burcu', 'Atan', 'kagan31@akisik.com', '$2y$10$rxEJeQ.tDEGKvSI7BFKXgOAvlQfOl2RsMqpMcqeUisJb3Rul4WaKW', 'zSJTLoXlsRMGhYPonrdpxReZzIwygMefacOalkDqyDxjdFfbmSYwBbnHCZkBNgvJ', 852562, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(42, 2, 'Ümran', 'Fahri', 'esma00@daglaroglu.edu.tr', '$2y$10$.nxoXsSFjjSD35tv/IG0U.E9TrvP5fbmuIgSv9H9FPbcpLI2GfKDu', 'yXJDEgThxTMsFMHuskbCXcIZOCUyRKFeVSbLmWKgAaNIUnHrhffQwpqvSxdPYjzc', 333260, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(43, 2, 'Ece', 'Akal', 'evliyaoglu.sarp@akisik.com.tr', '$2y$10$OXQSaOOR5XZXrcFpmKb6NuuzcbJnqs784KxhEBSRPtGD00sENZv4a', 'uBYCpoMZeAfuWknlIbRUsqLJLhsKzKQSmAyyarwONWFxobrgnVfalGjdHhNTPGEM', 587139, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(44, 2, 'Emel', 'Tuğluk', 'merkekli@yandex.com.tr', '$2y$10$M0mtspHCEEq3/MhYRYHyZuXQk7T9JExA/377DxR/NWybbhHVVee7u', 'kiSysmpAqKUNRjDbQLWThnMFlfXCwBeLXdcHbvYrsmaCegQYJWPTyzNpaVOtrBng', 152139, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(45, 2, 'Sarp', 'Özbir', 'bora42@tuglu.com.tr', '$2y$10$C/2Q9He28Y3zDnKfhQ9a4uvr78j8.FWEzd4.7RKqtoWC9k22SbQ6m', 'zRqWZQHLNhZupIBzGFjqFPKkXpYVVtnWSTSmQwwBktJsgcnIodyeLRMifhOgxHdM', 989596, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(46, 2, 'Sinem', 'Erberk', 'besok.efe@nalbantoglu.com', '$2y$10$PhsJu0NtQjG3TX6mnyqoq.4gdcrMBaGAtdWYS1IjafihjaAlePnai', 'qStHeEWURNMpYnTFwmNjGxrjoxkbhSeVRJFCrftAdwXLKOCEBykbhZUQoPDAZPJd', 604739, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(47, 2, 'Atakan', 'Kunt', 'elicin.atakan@dagdas.info', '$2y$10$74oMydM4sQ2XmgbOA17gUO71k/iRxfiqxGRxyU4IJAuibu9PxWrgq', 'ZMPXWfKvRCHIsUjEtLucDFVkwMaAzmXozQrgSrJUiOovnGpbxmkdGaWneFTSObql', 432030, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(48, 2, 'İrem', 'Barbarosoğlu', 'caybar@tunceri.com', '$2y$10$9jaSrLrZs0JT7am8d2mnJ.M3mbNoHYaEL9t9WxRmCXVrSGAmbTuXS', 'ZohsCgcuzNiMSjMoGFGRrvwepUHVlDiWJdOYRQywqPTxHAQnUsbrTKjJatZLOeDK', 875883, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(49, 2, 'Burak', 'Toraman', 'aykac.daghan@gmail.com', '$2y$10$8Zpxc69.sAOI5tmCoXGjkOqQ5MmsGpjSKL4cYplsjDGIfvTaIc1N2', 'FVGDMNwkZUHHJqsQmqmeWpbEtNjThxrRiiOTfBQODYupCgAfxaAawkXzCuVUEYvo', 682767, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(50, 2, 'Güney', 'Kuzucu', 'yigit.kutlay@tasli.edu', '$2y$10$orqvUa0yVNQcLJVWuZlNa.lTahz262zijseV.MroEL22LKn3OsVkq', 'CdYythCmAyQToPgZpdFafxBUeBzRpngjzskJccNZvGwYMEPQqfFVSiXArXjGOhND', 255263, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:41', '2021-04-02 15:29:55', NULL),
(51, 2, 'Ebru', 'Çetiner', 'kerem.paksut@atakol.net', '$2y$10$AdVEYhjnoqVOWVCkaOOb8.A9TC7zucRsq0kqsR4UBf62/6j2FqV9W', 'efXYGWxvVNlWuScnzQInqNVsUFibkcuaiECIJvsxZoPBpyDSyTLqpBUdMeQwgbgL', 220893, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(52, 2, 'Ümran', 'Baykam', 'daghan.kunter@mynet.com', '$2y$10$JGEA5OM2CI9D5NumCq0gJudC.yj/dyPxYxanAU96jwCQaw9PzqulS', 'DIwktWfugTAYSOzMhjbOAmsaBxeGzHiKVDYcvgyCamEyejdSrwFUoNqcbqRLsRQL', 260937, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(53, 2, 'Polat', 'Akışık', 'doruk.evliyaoglu@turk.net', '$2y$10$.JnRnBCL5fKFRIJQVGeHn.sIFNNEDfGCpYD6e5qGKl2RaqT.ZsmJq', 'svmiQRlAyBsvUKLjLcIydDYGbMcaYUHQnqEfhjOhxrxVTgMFFwzEKXNdRonPHeCz', 694154, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(54, 2, 'Ümran', 'Toraman', 'rabaci@yahoo.com', '$2y$10$hvraCueqYGczwFmdHco79.obxliFk9Yh1WOoXGk3tagjM5D6ZS9Y6', 'BEPKOBtbTrPYaHLlIfMOiepIRdKnwdZsaJWyJlmzzMNTUhFymiRUjvuScQsjZEoX', 735059, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(55, 2, 'Kağan', 'Erbulak', 'yildizoglu.ruzgar@atan.com.tr', '$2y$10$ULkPuPQSXuc/ZDMb0zJQvOqJMyxRJX247hNZDhTZj50zcKeOAeFji', 'VjRekYUTqXxldtBaaVHMogKmFzjDxPYEmBUQJNSXcMZLyKHEuhenRprOwwpivlsz', 620257, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(56, 2, 'Sinem', 'Yorulmaz', 'mkececi@yandex.com.tr', '$2y$10$kWpo4q6OOaznRSMLaCLcxuwom1MpwP6ZxOwqlQ7TBNGkNtD4hKnAO', 'OZYRgshqHLWFQjSLwvghRNmGzyAePyiMUInNfaTojQdfTYwiXlmWaIFCxDpVvxoK', 762782, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(57, 2, 'Alp', 'Özdenak', 'ozgorkey.burcu@akan.org', '$2y$10$S7yL68qI.1qQKjGST6mbBOi6HRW/UyuBotI7xh/qKuN5ukCBGVMPi', 'nOYbCXGTborwqywcIpvaPpYeGDikAtxsOmFdRgXzQjBdmoKzAKQPquyuLSDVUhfe', 310225, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(58, 2, 'Emel', 'Erbay', 'cagan.abaci@kuday.edu.tr', '$2y$10$x5JGn52QZavSaRV8NRC5buixQNMVL5H26BMY4JkHzIVUddePfK7rm', 'TCgOEygFQcuIaXXsiMKVfLRdSRMNozUDkTGPZbfKJHFzamlWeZkHnUlIYxpGJOwn', 112294, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:42', '2021-04-02 15:29:55', NULL),
(59, 2, 'Emel', 'Okumuş', 'ece.ozansoy@cetin.com.tr', '$2y$10$eB00QCYiI7EN5asQZ1/N6uQw25/C9kzF7eI9us5f8Brsc6subSqfe', 'ERGWwKDusWjGFPZemVRDdhnjJmwNnOHUApuQAOhfKqFSTQgTHXYBoeZIvpkxSiav', 408802, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(60, 2, 'Esma', 'Eronat', 'kcagiran@bademci.com.tr', '$2y$10$o4v8e3ElJBOlMacvO9BJt.NFhHsMDM/o1wsOgg8DKzEVk1Pujny9u', 'IrmEWIqldoqJsVDyHYZJbnaUMmkCwLZYeMASBXtlafRfUdgPNSkQTFzhOtHixLQn', 447761, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(61, 2, 'Emel', 'Yılmazer', 'esma.uca@karaduman.info', '$2y$10$vHa7wEfdepyIQuKERmM.w.fQhYDYD1oAiNl.D2qw7brQAs7X4yFMe', 'JQowRNOYfvCxlaFWtcvTLDjFiAybHaeMsCUZrKEPHndWgJedfmiNDYrbIBSBzqpu', 394788, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(62, 2, 'Burcu', 'Özkök', 'ogun.kuzucu@yahoo.com', '$2y$10$cuUWh6zpAUBNg02rtpd78O7rGoDB8ZeM6cS/h3ui.ST4FTLqyZICW', 'WCyxhmgOgpyaHAMQjENKbVLonTmvBVRkYcldiOqZXSwLffArYCdwunbBMIPFiNzr', 984876, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(63, 2, 'Emel', 'Sandalcı', 'sandalci.ada@superposta.com', '$2y$10$ODXKmyi9CLOhTM.39EN6CORaOtqrS8.9IOo2/HrDF/Kqo407c1xYi', 'JAObXpXodzDEOBtTpGZScrawFPbqmFirRvMhCzuRfTMZxQBqdGCcUuyKoPaxQKlA', 350947, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(64, 2, 'Kağan', 'Öztuna', 'gokturk.tugluk@gmail.com', '$2y$10$Ewoggob5D3fQsi.ghbgdceHTvVjBh8VHEAZi3gHO.1z.66t8MXFgS', 'UZWcXtywATjnEvfRmQIgCelhoPmSoaBLhDVJZliXvwQxcGgIkOkbsibNBuMKtOrW', 211196, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(65, 2, 'Cihan', 'Özkök', 'emir.yildizoglu@hotmail.com', '$2y$10$6ZG0iKrVxAXPSj3F9D8sk.oiNP4zgyeWjKxTUCmgsy3HUnPGw1GnK', 'OkLhbyRapqyCFvjlEjGCVoNaHPVWhuPsBSwbUMfUerYkWdZiMeNgRdKJDLrInAgn', 889705, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(66, 2, 'Rüya', 'Çörekçi', 'burak12@mynet.com', '$2y$10$jj7szW4QV2MEvXLAX49lE.m4pPp4ZovTje8oRHWbEiErW6GDjwemC', 'EdGJNTtfUhLBGLwqPQOJmjsZBbazKvIyiMshtYfHHFZdRNVrwPAQqCFxDnXSKSau', 245057, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(67, 2, 'Canberk', 'Karaer', 'emel84@mynet.com', '$2y$10$.FLytIaezjH/tWt0Yj5JOeE1PZLGGrKh9GD8lsd2gR6sWLZK.S4Za', 'aYcvJVgcpPRFMDfAirHuJnKQWvqibuLERdymBZlCNzyXhDGAsjwTokZIxQXdIHqS', 820360, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(68, 2, 'Cem', 'Kuzucu', 'etekand@topcuoglu.com', '$2y$10$auSDZ0UJLvpGO1o0oj4x..a2J.ikyU4Ql55Gsbl.gbx/V9hF1m6IW', 'wEpFjcGmjnMoQZByRGufuDxYhLqwFlrBzaXSNJCPOJgHdvWiKiTNUWtXbDVcIUbr', 298565, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:43', '2021-04-02 15:29:55', NULL),
(69, 2, 'Sinem', 'Küçükler', 'oaybar@numanoglu.com.tr', '$2y$10$4c5y.ybhC.1vTx4FQ4ppH.c93Qg4LbG7IRnSRnnYV4hUNJNOZTkSq', 'OysTazbDOVEFhfLSjcrRUdWMLKlIpmbGXPlHiatKjXqRSpAVZzynkvskZAtBxBqF', 326397, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(70, 2, 'Ege', 'Akışık', 'meric52@karaer.org', '$2y$10$xLi1ediyaRLICeZfj1s5juKdlYYls38f3JHD8Rs2B6rtapX8hl/hS', 'nifCOlrIcfXDMaVgPKZiEOYNkRoBIGwhoRsurSHqneymYUPUkbTTALjKhFJWGDWc', 154498, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(71, 2, 'Ege', 'Kılıççı', 'tanrikulu.polat@durmaz.com', '$2y$10$z2sGq4KDp.R.9MxtFALnZ.2Aqdh/kU4GybhXZ6ujSKY73KU2ksQWO', 'LaqMRGXugcpfxDNLFhmpBqHiFNrzJiSICyYEKwfWGWIovslOjTUwETaJbvoVcrmP', 671356, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(72, 2, 'Ece', 'Okumuş', 'kulaksizoglu.emel@yandex.com.tr', '$2y$10$.gSIKy3dY1dvxBw8S6Npi.VwE4gvQ9QzRhcPItvXAlZfY8FBRML56', 'ymnjWXIrlmQkfDiYtcigtTsoWGqMxAjUspeHDABexNhpuGbCdZgoarSXYFJwKfvC', 694589, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(73, 2, 'Doruk', 'Yıldırım', 'agaoglu.guney@sarioglu.edu', '$2y$10$osECugPoQIwOnigXgGMfze9iCxDME1ul3eGnEt.dlnDzIuSG8v7Li', 'pTOSIoLAztfkHqUBmvzWjOQFfTcNsketJiPKQYjyhmqiDvCdcdMbRuGaBVeWrEZA', 827199, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(74, 2, 'Ege', 'Küçükler', 'ferid26@dagdas.com', '$2y$10$dZKofw6iAUrzqcmIJWzV7uu5vTSuKYmXzXUzhHrHyCW09nS2Hm7C2', 'VlAXrgziwPSYqjQxFrKqbHmBJjClIeOAcpFcfiKGfNMdaPkWHanUeEWJoTohxYZt', 959655, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(75, 2, 'Ümran', 'Taşçı', 'jakar@topcuoglu.net', '$2y$10$UitIHUVBfxbH7yqxg7VwVePZ.u.8Qos4n3bMmmUJVYY4oI55jmuzS', 'aBjOsoZIEfuqRMUgaRnMJzGCWOhBHDcmXdzUwIATymvSsiycKWdukSqrgCbFEoQF', 395195, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(76, 2, 'Ümran', 'Topaloğlu', 'sinem99@samanci.net', '$2y$10$.IYambyWEzG12JXx2tctp..Bye6l2obNTtZJ/cYGuZXRhxgnHTboK', 'HguShHeIYbqJygACeVXpEGcFRlIwvXfODZatPsNvrRfihDpmUdQcCBKSFkYTMxNW', 540131, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(77, 2, 'Rüya', 'Duygulu', 'cinar.nebioglu@gmail.com', '$2y$10$JzZxUqexzUaC6vh0Zn3yseIuCJOiHfCFUwX.xnVuY4XPAV6IAOgsW', 'RvNIKcdVXaBjZZKsetHlmFdqkkMLSbjyChDEUrNyUOoPFAxGImMwHupGfOPEDCtc', 117063, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:44', '2021-04-02 15:29:55', NULL),
(78, 2, 'Aşkın', 'Özdenak', 'emel.ertepinar@tokatlioglu.edu', '$2y$10$VzjPkQAhKzsrYAJVqF2.o.LbU6nAGMycF6QfHksA0VZIl1Js.Yrg2', 'TkslepgUtGWFrHniLetICvoEudrCKvRVqpaGMXVWAZSZjUcxodszBmxYBaOOPzJg', 414971, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(79, 2, 'Sarp', 'Erginsoy', 'irem95@karaduman.edu', '$2y$10$xOsHqRnNk08Bw740CLvtv.Gs.Glp6E1ppAakW8ojRCOkv7WN1ouFC', 'oRjnoCHlEIPhFmffAxOtLDKejlgzsUTrHcXpGCkFybVQdwYSyvwdcqhiIbPGzBut', 847239, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(80, 2, 'Ege', 'Atakol', 'erkekli.gorkem@gmail.com', '$2y$10$XzleHeaXnYY8O4dg6zXB4.rw2JnwC3Fj6DqWmM74mvNhHs15wu5WO', 'wMfCbVUXLQtrxxoyOMinjKTRqUgDvZlGiKLBZNzHAFjQFzofPrdTSwYBpJaskmJh', 298762, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(81, 2, 'Ece', 'Sadıklar', 'mert35@turkyilmaz.org', '$2y$10$LZr4L4VsahXCNfk.QVsskuyeHK3.LL/rWUKf8ECZUnH9ISSXCQ8Xm', 'nmfopGnMCRWsXboXVDBZbKTWfVwYJQHLkArUlvelsOIzKaqENEuROrxUcNMjkgQL', 254842, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(82, 2, 'Emel', 'Ertürk', 'gokturk.babaoglu@kilicci.com', '$2y$10$lw7kT042hHYfB.w300RCz.90tLZa4.IGWzGoeLlx8QVaLAoVxJIq.', 'lplwdQrZtTGwjkcKyuYZCXtSLIqFPxVLuHEbNeAYdCxnRfPDXfgoEzJgihjNGVsK', 653218, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(83, 2, 'Emirhan', 'Kaplangı', 'fkorol@hotmail.com', '$2y$10$dn.Tak6nA7Kevuf1pWX8Fei96nP1IKBgwrl.n8I5w.kgk1jJRCnoS', 'WkQFrBXERICjRYHasDuwmfhlsbZDektiHbdJlrBNKJCPFPofedVUxZhcUVOYEwyz', 446104, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(84, 2, 'Meriç', 'Tüzün', 'ece71@oymen.com', '$2y$10$PkGxviGxyiVWyP52emOX..XWLvdMXlMcjGG2cld2RsceQBmsnUITu', 'OJvwaUxrGCHrimslMBHpEfgtnTeRxbYoAWCVjZKSZFAjIQNfMXEmyokdgVDsYbuu', 815032, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(85, 2, 'Efe', 'Adıvar', 'sinem74@gmail.com', '$2y$10$MsKfpNKo9tsFUUiEd/RgreIqVAoyO7W81kUe3fmJBWTK0PDW530cG', 'ZkWheUaMRcDJqTymtBNPdgEiwuNFMKgrTQFpVZjbyiAksKLpISjGDYXaqBCAnCHl', 597815, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(86, 2, 'Emel', 'Tahincioğlu', 'ruya43@superposta.com', '$2y$10$N8VTdOTlGONtCEvraedJFuka/bf6bSJFzgOt3hlBs6GySl8ZnzXL2', 'JfoBJAjiLNnyhmUaOcQUdiuFPMaXqzvDZfswWmpdsRoGctTlYxlHrHIBPpkFYKhb', 582384, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(87, 2, 'Burcu', 'Polat', 'nalbantoglu.sarp@turkdogan.com', '$2y$10$EEGbr/ypR1HfrqsvZyAFHeHLmoa229fOTEx61B4gfT2A6CEeKK3Fi', 'WthVAyOLSlucaANjXBhwzpdToItamUpngHiJYZTOrYCXBoquUskVmMgGnbEDsZMq', 408671, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:45', '2021-04-02 15:29:55', NULL),
(88, 2, 'Berkay', 'Yıldızoğlu', 'ruya.orge@kunt.org', '$2y$10$3MQv9xN3xs8wp9q8FD6LjuLvKCjVw1cvYFCLTK1..zw.FtR701qFK', 'StoZSwmKtnclrqyTVWRvMrsDdMUBDGaOexLiQNJvlXyYgeIFkzRHafzFsPUwmfEk', 234375, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(89, 2, 'Alp', 'Durak', 'fpaksut@yandex.com.tr', '$2y$10$Dgdg54C.gDACQM3aug/hRevshsYn4ti67X92RBtnBzz52nlvZTUli', 'ZxBipmkbsWPaZCAYyvqQpCGnVvOrWFSMdSflGtuIjXuEQxYtiXNwzITJhBrqchEU', 162453, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(90, 2, 'Esma', 'Duygulu', 'ece42@gmail.com', '$2y$10$fWcm24MNVLL/1iX6I7MbNeUi.rSGn4YvB4zhXWSC3iCa9piT3l2YG', 'rBGZpXzREhAAknHFUOKTjxVOgunbtLTvsWFIvoNKsSPXaJCmLJmVqIUlCflQxcyD', 825387, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(91, 2, 'Şahnur', 'Keseroğlu', 'kutay35@mynet.com', '$2y$10$znaOO3ma0p0jhTKgZuTgFOIk278K/pXjm9VsUCD//uDWGOC221PWq', 'pbWlgaexJXVtFHZbwBqamiyDCHjijvSqLhGyfoYrQsLudwAxhPCcUGWYuRvecTNU', 805353, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(92, 2, 'Güney', 'Süleymanoğlu', 'sezek.emel@turk.net', '$2y$10$/sBQN/TAgSxxATS15sQ8AOPFaqt12.qK9GqR7jJtT1ArnBzrGRayi', 'zjCxEIwMgvhSkuyHscYZaIJYADxJhErXoTUjfNZqHnVsaegklFPMLWpABKROyzbS', 320212, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(93, 2, 'Efe', 'Erdoğan', 'ruya45@yetkiner.net', '$2y$10$E2UlFwCX43tblcVhi2YPCeZe4wkVEBlRAZ1HlsVQ0gTeRe.YpIIYi', 'ZFlwasharBAnHFMwQizbVkReCPAmTRSEKYGUjSXXOfLtuUGIednTmyHxgxWZQtpJ', 342302, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(94, 2, 'Onur', 'Topçuoğlu', 'ahmet51@alniacik.com', '$2y$10$pJOCxCP2HHau3p7GfHKrsugTsc4FY3eMtyzQAYK5Y44HkS1Jxslq6', 'cCuRWFdGUhXoVfDoJZyPfHQvnQEzOYuOTqmPBrgTmlzsBKqlwDseCydSbpNZARkr', 256894, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(95, 2, 'Burcu', 'Adıvar', 'koray.karadas@turk.net', '$2y$10$4DRHZ7X6J7rILg07yCmsZ.SI5Tipgpty7zWIcbexfkNzx9l.1Bmei', 'QmxMOGUcVXWiRRYOuGslBIsayvUKnKaXBjAJebdwpxIroMCLCyTkFzZQFNhfkpbH', 100713, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(96, 2, 'İrem', 'Balcı', 'kerbulak@hotmail.com', '$2y$10$fvWbf9H.tfUZf4gTS8rB/uA6jHXhsU9/7.pCSPa6qVCu4i7gAhUf.', 'PekCNixLDUgHjpDMtuYVdEhgtGcXVaEnTWUlQwoxTkmrLOaJHuzCfKjShczvFilI', 468104, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:46', '2021-04-02 15:29:55', NULL),
(97, 2, 'Atakan', 'Abadan', 'zertepinar@solmaz.net', '$2y$10$3.zAS8nix57GsZDx6d9mbOkXhSGAXwnS.1HId1crOPc17EajpMERS', 'hdhbeHUtzUiHINaSufyoXsgqgOSwrFfyYCdBmWZsDbGxiQOwTBEMxVmWuJpJnKKZ', 305702, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(98, 2, 'Ferid', 'Atakol', 'ece.durak@hotmail.com', '$2y$10$ckoLiRwzX28Ljs2Tt02SoeJUsamRvGgVB0u/e3PK0dtQaToHfi81K', 'WglMvPaKZrBdWFasJGeQZzEqKYYxOETyHpfXMoLRJiDbhISxAQNTLOcCqVulCzcr', 179133, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(99, 2, 'Güney', 'Aykaç', 'berk.tasci@hotmail.com', '$2y$10$G7/HW4Y16GsgPq.tryZE3u7mekRSa03pBCKJGWBXnUGCByngx5OKe', 'gQNcseSBiuYvhVCZPhTYdrlFBaxNIpWkHzRLTocoyzfqDlGbSEMKunmdxRHtQqjw', 336007, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(100, 2, 'Emirhan', 'Erkekli', 'burcu54@mynet.com', '$2y$10$7kjpBnuoVV2pJwLy7Kl1WevZRAuRH5Q7l1xrAWdIiBEn.7ov/czQa', 'AyHeNwXJQJnmQSYehPvitpqFktMyLKdfXgWlTxsZbjnvrIMPpVwLsBRGRSoEOAWr', 150670, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(101, 2, 'Mert', 'Berberoğlu', 'ahmet64@kaplangi.info', '$2y$10$BWAzAfqtUfe562sfx5yntuuipq1uNxpnwsJhVId3JK.A0vvrw77Wq', 'QglUrDPpMJIhkHqfIVjbmUnlOXaTBzmCJaCiFELyAeWXKukdPYSZovYNpsonVTSE', 327302, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(102, 2, 'Görkem', 'Düşenkalkar', 'legeli@baykam.com.tr', '$2y$10$8gCK7//rNIli6BAHh2PPwecLuJr67wMX5JBrWcqGyGA4XDKU5SUyO', 'eAQMLPdLtHyZBAWtOlncJgKQKEYrFugNDUhIkbRzCwvwlPIvShjXusVETUZRzGom', 614192, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-31 16:45:47', '2021-04-02 15:29:55', NULL),
(103, 3, 'Behlül Said', 'Pirinç', 'bsaid@gmail.com', '$2y$10$8RD2XphsOSQOkHyIER.6HurboYvRLJM9mH/Uba/9393yEfkvow3A.', 'YVEMuTfrJfENFKHXIqWhsjrDgeKxAjlYncgGCatUlOPQovVHXzkOCGPBixTBwSdQ', 945730, 'Diş hekimi', 'ACTIVE', '2021-04-01 18:10:29', '2021-04-02 15:29:55', NULL);

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
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
