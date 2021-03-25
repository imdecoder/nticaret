-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2021, 17:47:53
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
(1, '2021-03-25-100848', 'App\\Database\\Migrations\\Users', 'default', 'App', 1616668436, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) DEFAULT NULL,
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
(30, NULL, 'Emel', 'Babacan', 'aakay@akgul.edu', '$2y$10$Eo.Dbg5N7IFJ9gLJK1TYLOiPFMu8Bmv6dUvQdjU5777P2ElQyQAsq', 'cOHwMbSYGSfRNCzssEbcfkzwBYLgBkTTeJMPvgVjZlpUpNRQJyWmDvAEUmetnxra', 966345, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(2, NULL, 'Cem', 'Alyanak', 'ada.tokgoz@yahoo.com', '$2y$10$Jn5MjyXY9HKu5qwmP4IKiu7TS0ggss0QKghzeK1mnFm0l8GN2QOFW', 'YagKOgEFVqsfhZpPexbXzKmuisJYCXmkRwHaoQpOWvbNITuAErjkhiIMlcDLGdVf', 988608, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:43', '2021-03-25 14:05:43', NULL),
(48, NULL, 'Burcu', 'Süleymanoğlu', 'ada41@turk.net', '$2y$10$n0h009PxuDve1tW8VVkOQ.QQBVrFFa7e7wXqayQ7KVorusBuDfDCS', 'iIMnjcxUKlyJaoAeSNwmzBhRWdrkQdsYsyZixSutpKPHVLvqFEZFOkDcWJjgTuGV', 485391, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(52, NULL, 'Ahmet', 'Köybaşı', 'ada46@okur.net', '$2y$10$lmuIM7x/VLi6WeqCBDR6Huxj/QaB6jrXKGCcZ3sMcgI4Op0qW81sW', 'hKvmULtwpWSFmrbOWOBAjrbMlCxTIQVizReRuLtPYycscGKpEniyEFHfawAuheBS', 301331, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(64, NULL, 'Ece', 'Okumuş', 'ahmet22@kormukcu.com.tr', '$2y$10$ANRic.kNfolTHIk4HSYghe9G7sOK4FpAdI6J81rj7LJ8ITV0T7Cs.', 'YxFpgAjRuMscOrtkwrnJfSqxyicYVhDQSjZvXolHibInlUWdKhdNQqaRsMuHIfBT', 580787, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(93, NULL, 'Ada', 'Önür', 'ahmet51@hotmail.com', '$2y$10$BcbS5i5dG14iSxGgeBHT9uHicn3x59BLXcT0wxwBPAOJNf2NCQPI2', 'dOCrPPWvyxKoqatFEhdwYWXpTlUnvwKAbMtojRaQqjJLuzIJNegYrhsufZOHBCLs', 628907, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(33, NULL, 'Ümran', 'Ayverdi', 'akan.burcu@akay.com.tr', '$2y$10$x.qziEoQzdNM/a3E2RegVuqmz5fu0fG9OcZYGxGMccwaTJR6dIcve', 'mfXLzGCyBDFVTPGoukRxnuEeghvbdACgrJlXIdyTmjAFpPpZRMsZSNakBJWtoDil', 408349, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(4, NULL, 'Emel', 'Tuğlu', 'akyurek.berkay@duygulu.com', '$2y$10$kHfLLa/BjMzdYa6C529OgeT3U/SZjatYNPFHCwklVhV.ibvBy/cKe', 'lPQHGBPLhiMOCvLzHSKcfdobbgUVsjuzTWmMTjYewcthrkfKZVDIpNUWERanXZgn', 431110, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:43', '2021-03-25 14:05:43', NULL),
(24, NULL, 'Rüya', 'Başoğlu', 'ali.demirbas@yahoo.com', '$2y$10$ZqqmWn3BLi/rHP2iHZ4XT.w7TUmPygi1bb/5j3CYrSrIZ3bMvQzeC', 'ppzBGfwNckIYilhGxNMdtOAevdwZkmFTBSITuXanjqfUSWhHEReAKYqrCFjRoKZy', 399938, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(29, NULL, 'Utku', 'Özkök', 'ali.evliyaoglu@yahoo.com', '$2y$10$jmaZmQUTW/v0g8DyFK6sR.UM.IWuBsf5/gD7Rvtf3Rlt0F7ozXO0i', 'olBYubeynZfkTxUNgYlGBRAoUpHKOCQFimXWjdnhytTDzSQkPIDHWdLgKLaGzpOq', 437336, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(37, NULL, 'Burcu', 'Çörekçi', 'ali.toraman@hotmail.com', '$2y$10$N5ryJNvOLYxq8wVAkz1vCO9pd3pEaRPAbrYvGXD9MAl7JGdkS3iBG', 'CeykWBRcQZeUoxVhNKwKtDnATmZcEAdfHlglJbEbzWxmVdHDSpGvuNIgfsvkrqSM', 153318, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(47, NULL, 'Aşkın', 'Orbay', 'armagan81@hotmail.com', '$2y$10$w3pl.LifvFT11HzmazHDauwQ8ZGvnL55ADXSNPPQOHQdpT8c3f0Ma', 'zFYUjmfXWNcDeJXlezyaGYbpVUCmRIvVkZBuftALMRLEoqjbndSHurQpgWoskGvi', 207325, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(44, NULL, 'Ahmet', 'Balcı', 'asikoglu.burcu@yandex.com.tr', '$2y$10$7Pzx/iOuPP6dnbpDyM1StOsMulSUaOPZLDylH3AOFaZyo5GWq7yMe', 'cdkUjCCSHftzymnGIVaqhVAxnTzurNqOLJPHMGSlwEstXAXkbPbQITFUemsQpiJg', 541489, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(74, NULL, 'Rüya', 'Uca', 'atakol.ada@corekci.com', '$2y$10$fxBw.Nl4QrR6S6ZBwQH15.xFFlxCg/d59jiFXsi2HRovE47UYcy36', 'YqgHvdfYkABpHdBxnFhrKjtQWeAauGOroxlUpsUTIwXoDVzlPeZnhSqaEuTRyXvj', 368349, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(18, NULL, 'Ebru', 'Biçer', 'aydan.guney@ozkara.com', '$2y$10$Fn0IiJLxXUpMhoobjYnHnOLTxKFZKWQ/a1oArP1RYXC8gOraRsZGC', 'eDcJIdTKQofBbFpOuaCmnHxlBWNljyAPJFuvQkTLUkpWqDbaXwYsoPZdjvLhGSMK', 712703, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(88, NULL, 'Rüya', 'Erdoğan', 'ayverdi.irem@kuday.com', '$2y$10$qoc53Hl5US/3AqyKrtrjM.mip6lHD0/4SbOoq.czmRTUNhchp34WW', 'JifPuVERdZrZDSNJyEcSvYHCUqHKAlkegyFlMhinghsnobQpLrIxOmsRjwIjVztw', 645698, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(16, NULL, 'Sinem', 'Dağlaroğlu', 'bademci.ege@gmail.com', '$2y$10$j8KSpkSzfLKewHDm16sWQ.D320Ea83kIJwpH9LuK4nw8nTm1ZSACG', 'ImMuwDSoRgTGjfLBzqHvQRZHmWMgPlPoOyKfnUNQZLykahJDajruehszJkCBsxUn', 423122, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(100, NULL, 'Mert', 'Özkara', 'baran56@aydan.com', '$2y$10$hZ3myFoyi/GfC.D6DE/FI.GHDvaVj80LIwQWGTQ3enbb/FgEugd.i', 'XMpJINhzOyFcZGqJmPDgLKTvuDorOpAPehSHeLrYiuTECfxtbqVdZbUSydkEmMQv', 902712, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(10, NULL, 'Cihan', 'Tekand', 'bora17@hotmail.com', '$2y$10$j5Ux76uZsd4BqlYX/LzJkuaRBD6ZC7VkIgvZ734E4CCFdy11jrYv2', 'eSXfUoWQSEOrZJYDvDGsaPTdpPXwAlJMgoHBTmnuYuGFEtKeRBhHscKONgdFnhyy', 187459, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(84, NULL, 'Ece', 'Akar', 'burcu50@erdogan.org', '$2y$10$uklenNgb3eiQl6lceMEQKefymhDwc19IlkkOYNpT3pSYDC0v/1Yie', 'XMvHNhUyeMFkVmcJEPLwIQbNQBjxaDLYSVBnWtoKulzqfPfFHipGUsAWkadgEeSr', 693833, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(51, NULL, 'Ümran', 'Çevik', 'canberk74@superposta.com', '$2y$10$QGavL9MY/KYQzL3VZS4P3urWOKySQWLMVxkJxOAKnj.EqTdognyle', 'jJnmICavtWZsBRTUVrJugVwbFPqHhFKDEGdmIeryLAPDffkNNAkpZxdSeEQzhsic', 838710, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(89, NULL, 'Sinem', 'Sadıklar', 'cem05@corekci.edu.tr', '$2y$10$9Q/X7e6.HBecW2TzrtMHnuq24HcC7tPSaVkHSJmiynzBRAdkbAh86', 'tviuOlQnPcmBiosMfPNEIyIRKjlycJeHGSUSxYAJHTTONkZpzVCvGrpabhubKLdQ', 725275, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(25, NULL, 'Çınar', 'Durmaz', 'cetiner.ali@hotmail.com', '$2y$10$IpyxgOGB.ixWP5nkoqnrVeYnUZ8c7qG5cTviNxM/./j1IaB4MGpo6', 'tGgMCJaOLdxiOjcrZuIhqSsYGcxRuEUgmLzphnyXrBXbDtPzVIkWAYTfCkbdyoZv', 724293, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(58, NULL, 'Serhan', 'Akay', 'cihan74@oztuna.com.tr', '$2y$10$daHdRgMRnoi2xS/jrHiP/.AVof78EqQk7C5mz0thy.e2EVd/vBDdG', 'gQUrbsMgfphBeZZkoVjVyiqNSXlndvCQJGzIKNcxkbavYXeyHFTcmEOwWmEqioGt', 550583, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(76, NULL, 'Çınar', 'Gümüşpala', 'deniz.durak@karadas.com', '$2y$10$yIow2ZaUUuVzplBQ93fDHeRT213r6VGilHKxGNfhSrA8ksdS9Hcpe', 'rIbWGSBBofLMuxjIMVYwwJkZEvTkXjFpczdsTCHHDnleRKqCVfhWqEOSmQoGbRUX', 493378, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(21, NULL, 'Emel', 'Eliçin', 'deniz.kuday@gmail.com', '$2y$10$KuROE/zG2nSSVoov2Jp1I.pauUXXvHGxYLQYp7QtPJfQLZmkhtkMq', 'MapicOYkllBjtHgRZHTkBSUJGzVwyKavIMNEwvILhJDWXdnCACQUyGpsXOVFSdms', 742186, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(9, NULL, 'Esma', 'Evliyaoğlu', 'derin.gonultas@berberoglu.com', '$2y$10$i4UKfpi5QgKySf2cAjzk9OpWwYR7zdz5gM5j8ZOJL2Uwsw0OmDBVq', 'hNGvoghaHylWDMLDfmdCZTfwwSKPQtAXXGHFIeBKTNdcjmeRkUJJibVrkoynEqvp', 261862, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(91, NULL, 'Güney', 'Topçuoğlu', 'dusenkalkar.sahnur@karabulut.edu.tr', '$2y$10$Mc7Q2yw6NKxZj5c7OuC4F.dldRiFPmZe1lH7ENVTNhu5ADPoDQOdu', 'NCDczTSGixLqhmpYWjVFnvvGLZKFrglwOojuwSTMuIYmiakAgObZAUBefeJPbyoy', 105893, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(96, NULL, 'Esma', 'Yılmazer', 'ebru14@kunt.net', '$2y$10$naG2pRXMQR5WayExHvUiguoEnyTOkfJ7e0kfqeREdOvPUBLuhwWB2', 'FqGFcVNcBdaqOTUgXEyyaEPAmulHeCiGnbTVRwCnWShjDUvlkoZYigBtZprJOszv', 742623, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(63, NULL, 'Ada', 'Yıldırım', 'ebru83@ilicali.edu.tr', '$2y$10$VLDJMlFr7D15wAXP5lrJz.ZjVkE/dF0SQqGqC/QPJnGs5RvybaYMu', 'LHJAobNIvsFpBgVAeurTijcCKSgdGNpqQnmBEOXZhESQwrCsmDIZlRbWzPMTHdoK', 464194, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(14, NULL, 'Cem', 'Erkekli', 'ece.aybar@hotmail.com', '$2y$10$udJUOOFpipJxF9rbkLkbC.7PvVZnbTxkbmww57LIHMiRDsw.6v7P6', 'LMVYqwKTCvBDxpPUZaydQpoIjVAEDJRlYfzzfvPcNBqneuhsjMkaelTZXkhrIRxd', 425048, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(8, NULL, 'Baran', 'Aşıkoğlu', 'ece52@gmail.com', '$2y$10$NPqU5NNbXp.3I.D2Woq5yeEX0bziRrFI0jYqhrubLFcjRQFOCF4Ty', 'uMXRYUBJEkBbNaKLDbgLdGurOjfySrIDPtChFzoSaNvimlycgWpvAVjsnwifTYXT', 286399, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(95, NULL, 'Emel', 'Alyanak', 'ege78@ozbey.com.tr', '$2y$10$tI/kfDwljV2cGZi4nsXB2uzFA2XZFdQKcNUFDfl.YRK0.u./G5VGa', 'FOoXRVEzubACxKimDUrmMcjAJTPopaSZRZGNITeYfrdOYvwDiPLSWKklsglXakHf', 283678, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(59, NULL, 'Rüya', 'Beşerler', 'elmastasoglu.esma@alniacik.com', '$2y$10$1uSfF6d8PHs1/fG3NxYk.O3aaWOKIyy5s2sIWDftcl2VrbxuyK7kS', 'aEgTDXAVIQtJTKWRHPsNNjhXabxoikDCBmpGZymwByvjJusiqrehYlOtdozSAYLS', 549262, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(46, NULL, 'Burcu', 'Samancı', 'emel.barbarosoglu@hotmail.com', '$2y$10$zmJQcQIDRZV5wuFirhy1UeTRkrUZ3Gx5t242dqkM7yqrc21HxFoGu', 'ZPORUhUBGVczmrbFmsuAcHupVoCosDqJNyjvXOpSQCqEtPLXRSbfaxWNrABxTEWn', 854813, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(101, NULL, 'Burak', 'Alpuğan', 'emel90@erbay.org', '$2y$10$Po7xixVMqPA88QAc7bEfu.N3/iZ4J15lGCfaBAtm5YFdd42ZnSfty', 'JVYPplQakNBXmxaKGRseESZQrbTnlUjFdcptDxYOoqqLvzOiXChwmntVcFMAyBLD', 306510, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(1, NULL, 'Emin Arif', 'Pirinç', 'eminarifpirinc@gmail.com', '$2y$10$p21ZbNAqO6VBgWDgKslTdOSVGfdFhP0gPUFVsIpbnqubu.8OaaFAC', 'KYofeQZXJdGzmcDAcqDPujFlGpyTMUiwIrLsHaHRVvNSZfkpugXWoBrtnjzSdmCk', 277180, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:40', '2021-03-25 14:05:40', NULL),
(40, NULL, 'Burcu', 'Günday', 'emre.abadan@basoglu.com', '$2y$10$02GLgu7odLSRhUlWZCcEteE4iGvVBp6IbpOVyFhjhlHG2TjlFlCSC', 'kiDtlQcqgLxabaEURBodEbtKRsJVXvKXpYNjuVhupziPYmAZIMSfgndMwyhlZGCT', 133199, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(65, NULL, 'Emel', 'Ayaydın', 'erdogan.ogun@mynet.com', '$2y$10$tVpMyFcfehNYxzfoBUSY..J.OmWxZTOuF/55TyFRwoPdKWjuxMS3m', 'opnDHKdOyeWkKXMwRTPFjONXYNYqAfVlBrQxSVvBWaCldrEEQoeRFbPihIqycCLG', 634846, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(32, NULL, 'Çağan', 'Alnıaçık', 'erturk.baran@kaplangi.edu.tr', '$2y$10$rSlGgnNw/qb3ciaJDduj6e4sDrHFWiidVXj.v.ubS0i7ThtZwyfC.', 'vKZVeMzydhFqbMbusTrHorOsPOSKBoBJWaeIyucGnUXQxpEHYdLCAwztpZhkigIL', 411893, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(73, NULL, 'Ege', 'Erdoğan', 'esma.kocyigit@solmaz.com.tr', '$2y$10$3QDPNzbJtcUZ.2PSSzJDDOIa3nJvuEOUscgBDREih9xsPANQMSIEG', 'zIpbXxEZtelurcMKZeEWHnuQSYGsvmjfRbUoWhSFMjqUaVTfdNwNPRTOtCnwAPzO', 139191, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(27, NULL, 'Esma', 'Taşlı', 'esma34@gmail.com', '$2y$10$kkOHGTMalrwCmcdL7J.eguGrKEOmXEWZo18.dXKik8VwXmFheGS9y', 'eLczZjBttjXqyWTpvneIBhaGQpmEzicCsioQFHgafZwsLkvldgkrFhbDEYUwuuMd', 254349, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(55, NULL, 'Ece', 'Durmaz', 'gokturk65@turk.net', '$2y$10$7SBFHBGpw2VmGIvZk/n9FOlB7L/eZ6R7eBHtr6OtPFa0YxMSikaXK', 'OjHaVmSVzEsfJLkBgDErTwCxiNIbFzhtuZAZUtMKIonrpyUqpjvPiKBCRscvYkcd', 973149, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(61, NULL, 'Rüzgar', 'Akman', 'gorkem.oraloglu@menemencioglu.org', '$2y$10$.N496biYzPETWKRmAqwjsO3rx2GYIRtnQjYkOYWDaMRm3K1IRxzT2', 'CrLahevkRYfrtLpwzlUiZAWHBFukwjFoVcYJmdPAXTaIbniEzIpNyKqGlNMMbgKs', 391426, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(56, NULL, 'Rüya', 'Dağdaş', 'gorkem76@orge.com.tr', '$2y$10$Tis9iM7my./dTQvd8bZjWOlKF.vlj1hzLcpRDyQf34cRnteTK3rm.', 'ADYPJUieijNlRqMTyyIQvbVsonHdjkLfJWCFUaclgsXKGHdxLmXncxbEokrODtBA', 552086, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(42, NULL, 'Çınar', 'Abadan', 'gozdenak@mynet.com', '$2y$10$wa.4.g6OU4n4DKhFiMQNKelTCjJnBZUESpI/NVn4J02c1xL/YLnYu', 'xxbpWagemtGZNwFJnBDAXCQzUIYoHKjZDqcwbosaksuELudRfYjRLdzghJQyhBKm', 510634, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(79, NULL, 'Emirhan', 'Başoğlu', 'gunday.ebru@balci.net', '$2y$10$sN85ede7Lh76w5gl4XPi3OfD.Ai4gCouUWxBsfcg09TJMeTBctroC', 'mxJqwyvkyVMXaoOlUKsYSpCKucIVNDgdfSzZhWGtulTBYqEGTdReLEWojFcihImQ', 243699, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(43, NULL, 'Barlas', 'Sezek', 'gurmen.ferid@ayverdi.com', '$2y$10$1cUL6qkYZTfoZegl.0PFluubnUjBH5rAdHqkbIIsLEcsJNynIeP06', 'QwBtskhyvBIOGEgnUWmWcKgQSoezpdZnNphJPqZmMKwYixTLroDSlaXXFjOCtcRH', 568422, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(102, NULL, 'Hasan', 'Pirinç', 'hasanpirinc@gmail.com', '$2y$10$MmsLXeuIUGU5.o0dEH8ZuOR/xdvwS2k8FhmxcwOi6x49MoNmJ/n2O', 'FfTlPkzypaVsZJiogAMrGOUnvnFtLqUVtzRGpbbOYLDYiEKjwHuEeKWTgcsQfHRm', 111793, NULL, 'PENDING', '2021-03-25 18:47:19', '2021-03-25 18:47:19', NULL),
(78, NULL, 'Şahnur', 'Köybaşı', 'icapanoglu@adivar.com.tr', '$2y$10$CUdmVDRoTv1HOSglb1vb8.1g1Sq.y3p1h1Y1ncebwwT812XqmtHuq', 'wHYTJDAsARKeYBbiqZLyIIFBHlmoagCWVcuKyOEGdPaSxkMNreJNOCttSUZGjpvf', 299663, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(66, NULL, 'Esma', 'Menemencioğlu', 'irem84@turk.net', '$2y$10$QOMHs5KEen.KCLJi65Df/.Ggj5QXDx3Bsh6PqEHabS8XFWhEjQlca', 'NYLhQIkPcVfFvxZRTGBcrjgtWMspECxSlTqgXeVWhNJvnAaDfsUOyJqGzObtDmma', 410245, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(39, NULL, 'Çağan', 'Babaoğlu', 'kagan.koyluoglu@mynet.com', '$2y$10$fq/HI8TcWAKzaIWXaZonLelDsZac9vb/iOnnPkVOuv97Km/tRuOQS', 'SixNpLKyWdRTlgfmJNHPOaktYUzwvTpHGfCBrMcxJFenZOFUKegIuqDAlCkmoYDb', 860449, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(50, NULL, 'Ada', 'Çağıran', 'kececi.ruya@hotmail.com', '$2y$10$Fs5P3wObU/uklgez5IYgre0H7RQs1pLSMVC16b8NnBfRFASPiA7tG', 'taxDdGcXAWlbhBYFfCjEEQZyCXtkVxADBKbaUIpvgZPwicGeHMTTyRmkrdJNMzOV', 233672, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(62, NULL, 'Sinem', 'Dalkıran', 'kerem.erbay@beserler.com.tr', '$2y$10$QW32rLJKdi9SAGx0q4FjGe6CJfyjpj.LXGyLevstn6cZWipjkMxNO', 'INrabfGMEgSqxOourzvIjWNwBGJYQTHcDRqegpSiuKmaiTCklnBAZkFepAHPKCJE', 215930, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(15, NULL, 'Berkay', 'Alpuğan', 'kilicci.ruya@basoglu.com.tr', '$2y$10$6pKK0MlYrq4.po9bL20SJev5vG0U0RipgHCZ8/NqDpkUWSuNusdBq', 'yyHeGohmaGxbSpDnYrQYPWuNNiEdViMzOjZDelZqcKBkMUuwTwsaAmQflLvIqnCj', 835834, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(11, NULL, 'Görkem', 'Nalbantoğlu', 'koray85@gmail.com', '$2y$10$VxXU.bpVzjiHlpxw0PNa/eZj291Sqc9gHcq.SBuEzsBEV23vl6TH6', 'NvaQUeCcurnMhsEVypyJABtHfKeldzgfQOkTohMpZTbPdVwsRLxugziXFDDEInxO', 182042, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(26, NULL, 'İrem', 'Kocabıyık', 'kpektemek@gmail.com', '$2y$10$pbvcv.UN/S/5Yu02GJNnou8MMhrrpjkE/KvCdIakstYId1oydDlse', 'eIShLhtLOobxKpyYKkRinJmjYNfWJlQmEGFBvpiDeZrTzVPgXcxslrAZBWOHcodD', 325007, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(71, NULL, 'Ebru', 'Sepetçi', 'kuday.burcu@yilmazer.com', '$2y$10$SNK5tQt/GZDkTdC5Ak1mPeW90zldZPQS79pU4Za9iHrNXOYxh4QpK', 'aTtMdVmOlTZzDDRlNBhoLuNQbyCnOapqKnHfrivFexmypjeoscJGqWVMhUgxYfFW', 348080, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(90, NULL, 'Esma', 'Çevik', 'kunter.ada@yandex.com.tr', '$2y$10$VA3f9ZHDOgI7R1//ZQ0fDex2nP/RzOUghKrCuwu9LvaXPc7gAHTra', 'naMvNYwBShYadEkFTAXQdWpGUVCfplxnrRbzPMeSQobFrmNiomIDJeLKLytsJVWR', 767024, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(97, NULL, 'Ebru', 'Aydan', 'kutay34@turk.net', '$2y$10$GIeOZ1ShrLY7ruEWhDRfNuaEDmBFPAptVnxM8mg2zaA.5nYDR6wL2', 'ZsRghjpgNBabHkCuArfFDprmKJxcQEPLoQqCGdOVRzouGZUlckyjsfNdLeHtSqym', 326745, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(23, NULL, 'Ada', 'Türkyılmaz', 'lekici@hotmail.com', '$2y$10$.fzMvSyZaKFgtNftjhjZBeA9Lud254Q0yfoL29HuHhj69QpbkW3T2', 'gzmFeMXVcZINRwKjNPpQsyPGOJVYjEGJHpduLeDboxuiUabiBwhdAzgIStrnlynO', 804748, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(6, NULL, 'Esma', 'Atan', 'melicin@mynet.com', '$2y$10$djPY1DQJaNEgjZ0CU91LJO8WIFwwM5HslazYSccdu6nG9KeoXeztS', 'iKRuMjcZmfoYYDsIxFXceavjLkWVqyBPwlHDaLoVbCZqRiezMlygUTNATOztHpwJ', 508592, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(82, NULL, 'Rüya', 'Akgül', 'meric75@gonultas.org.tr', '$2y$10$uq4pmJlY.T6SuCHaUy4cUeXZiZersaGgLuWq74WpdFn8GPtfY0sOS', 'JDlZykkxTLKUPmnMiEWcngDKQzyfCOGvJRIXVugWioMzLHEaeOSqdpChHresBIlb', 963389, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(31, NULL, 'İrem', 'Adıvar', 'nakaydin@yahoo.com', '$2y$10$unIwsK6Ttl6HoEV0cqHl6uZFbr0apa8rw4OisNve0KLgs0J9k2wau', 'JUcYVIhYouRZXswfxutimpiBPTljLbgFHSjfUrmcCJRyHLAKzaCdoESAyeNOBbIv', 955304, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(13, NULL, 'Rüya', 'Dalkıran', 'nayaydin@hotmail.com', '$2y$10$gGVosNVuo1Ra9sPQSoZC/uTNBMRs3MLGwdCt.srNqfPtAX70LsjJm', 'hHxGLRGQjUZAmVZDsAlfFXLUVvOqaoFjKMmPaRCcyoTgTpxWptdvIWiNntkrznSH', 295381, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(17, NULL, 'Sinem', 'Özbir', 'nbesok@elciboga.org.tr', '$2y$10$hO0C9jdL0i4vjsMC5WOlZOBwWpPplNyAcHbCDSNiZRO9AmxU5BYQa', 'niIzWRprNSCbSzyTBfejObcwZFNKMChGgYsOmkldHoBAErswKAcfxPMPEVmnRYjl', 623179, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(85, NULL, 'Ece', 'Bademci', 'numanoglu.emir@hotmail.com', '$2y$10$LuDjXT/AcakflzM/YkKagefZTAfYqwKSZxwZUCSsepYATyq/O1VZ6', 'hkphyJQAmVTXNwWcQveZPHkYzouSIUXiaUfSGsvLrgxMCORFubDYwxmKqMpejrKs', 701760, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(99, NULL, 'Esma', 'Özbir', 'onumanoglu@turk.net', '$2y$10$U85pBhP/m6eSCXIIkr92tu83N2A7E/BXaUupx3Xvb4yZVsM7nQ0KW', 'eLHrPrvTkECSklzpHVaQAOiFIsfXYXvwgmbRuGMBdFyDigjEGZwjRtAnZnsSPYJx', 765807, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(67, NULL, 'Çınar', 'Gümüşpala', 'ozbey.utku@pocan.info', '$2y$10$CzYBw2ZL2MJMVXDOmtZag.eL3Zrf7ll4J2TUrp6l.RClbkDD5BLTu', 'JggjFcSEWuYdMkBKIJvvmTetyOhzEuXwNslQHymCeiqVZphoXftPWSFTabZRcHrl', 448351, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(83, NULL, 'İrem', 'Çatalbaş', 'ozkok.burcu@adivar.edu.tr', '$2y$10$hpR5FZCOr8UCJS9r8IfLwOi0TdZQmuAM7kbxc9.OyaxQE9EiWDM2y', 'VzmcvDfITEFslrPwtxKZTuLlGWdzNHqCQLkDdvfBXZRSVonEbmJeisSeyUqFMAuP', 121806, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(20, NULL, 'Berke', 'Tuğluk', 'pektemek.umran@alniacik.edu', '$2y$10$klxpiBlylQSCX6K.xCYO0OyiGJrsDeYMMZnnIZv/ucdW.HCVrXzX2', 'hsdgiCjpWYpIVtuwgKNsPaUqObTBZHjBdXFfJMEbOGwfLylivoRSzQWcIMDAaYJD', 791399, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(72, NULL, 'Ümran', 'Poyrazoğlu', 'poztuna@mynet.com', '$2y$10$cmpx5n5geVT59BMYa9TieeC..RooXMb4B.nc6fm5WUrseCLSL0Cry', 'OcHhfgkxQVEAppQDNImdZNZGwPRySuSLEeghOocXnjoztCUlykqXviJiHPWnuKTr', 536815, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(69, NULL, 'Ege', 'Numanoğlu', 'pvelioglu@turkdogan.com', '$2y$10$Vij0k0T8OYJ.r0sHQi7LgOctIC/d1Q6z.5BfH3.oy/Gw35K0mesOy', 'mWyiZXUvONGuwvSZbTnbHfhxVgEYKGKeNlDleccFJutPICVJzQpBaLAyrxdqfPjE', 223786, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(7, NULL, 'Dağhan', 'Köylüoğlu', 'qbaykam@asikoglu.edu', '$2y$10$2RqZvmmyF74dmeVhqbuyf.AqD57jHpsx.ITLtgYwIYKIWneWUYEXu', 'UhRDMfItiVRWEJpZwsDHAnSylkKVbcBQFuiapJCscojmaoxTldYHmtjgLBeECLQk', 939642, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(49, NULL, 'Alp', 'Akşit', 'qkunter@mynet.com', '$2y$10$l7XhTB4kRlDw2qDyLC8iguh8VvIlRYVS7rYnitaksBfI1Cj8z7uFS', 'abTdbcluHKuFSImrAgKinMJqqLwnDkhEYGmBolkhGHTFfzpsVPjdxYZrVEZRPNwj', 438666, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(36, NULL, 'Rüzgar', 'Küçükler', 'qtasci@egeli.org', '$2y$10$WKu4fyRREn0FQtp9PTYEAOHgaEe6feWs8RwSzgzuVR5z5gWU3za8a', 'mMqPgOiOjckaGDIQfpFJuuKksrBtapwCVDdvIXfdXTBRmEHhWcxKnFPzeebnNhJx', 601080, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(92, NULL, 'Ebru', 'Egeli', 'ragaoglu@hotmail.com', '$2y$10$hURPZ8zdPUvuZ7k9NnL.BeGETnEjjv7z.KKGptVTUZFuxU4IdVTS6', 'KNJIQeThFYkmwwWZJbWpLconFRYTlXlgPpCPtCurIfBVDoySSBOcGXGAvMxkibNm', 666484, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(94, NULL, 'Şahnur', 'Tazegül', 'ruzgar.toraman@hotmail.com', '$2y$10$w2xGIjmcARdH2k9jUHmw5eI/vwx37RPfIbQTTRRdZWdZgWdflHpYe', 'cCYUilVdwNBrxbGJvNZgfpWDsLHOPnkMajAaPezSMyjouplhotwCArRvVtTIqWSK', 660086, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(5, NULL, 'Ümran', 'Duygulu', 'sahnur.yilmazer@turkyilmaz.com.tr', '$2y$10$cP0T/D554D6cBlpVvqfy8.k2aojacQkkaLlAgVOUhyN/p262vUuxK', 'DdeQMhWoqUmBbNTJlsgKkzcXaOcBgCRqljjEFICFZvQPrtkmuIUNrYnfvnVtaLdx', 798640, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(68, NULL, 'Rüya', 'Akşit', 'sarp.besok@yetkiner.com', '$2y$10$t4fiJs6ciYhhVNcUzPQvFuomr7d81GYxAowDwIiYh0PzKbx05sgeO', 'VnJXSftPzOAhgIaUQYBtCrWrfsuRNiFZENceSxmLwBpDlxwMCTMviyIGRYLsnOzu', 785575, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(81, NULL, 'Aşkın', 'Kahveci', 'sarp26@gmail.com', '$2y$10$2hyqsOLxUnptRqwqFukwZOUom89OsWQaAWxvx/f/qwH95uYq.0hj6', 'mPGaPFARIjwuxbcNrLSavyQNhsdMqxHckWpYYTDZjqBXDtlMbtrHQIfVgOfZnUne', 232029, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(19, NULL, 'Ece', 'Kahveci', 'sezek.berk@turk.net', '$2y$10$7..wphlInKpmiEtRx1O6sORLD6oOQ/W2e7ToDHy67pzSZUca/VxD2', 'TcGJTyVZHkLQNodiBRnHDvAJIdhswWrhUUCYjakyfoMxODlgIqeXKtFunvMREzBp', 272997, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:45', '2021-03-25 14:05:45', NULL),
(41, NULL, 'Kerem', 'Adıvar', 'sinem.erberk@sozeri.com', '$2y$10$Z1J6mFazJ6iqPbyCmmLxyOLO00iuaoGWOLYsIRbLEfd0kbc7oqS4K', 'nroHlOvHzNIZYAKRJaFcfBNFqgyBzeQURLwfESWXCLxCiqDoVTyjWgGppDkZavQr', 647979, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(22, NULL, 'Burcu', 'Tokgöz', 'sinem.tanrikulu@kaya.org.tr', '$2y$10$3RiUTiBsxTf2XAerOeh/VuDiHBclWXjbMHcHStR2yN6h8p.Lw1zv6', 'ZZYfnbDxIXBtKrlhUSajPCUaMvnDixmdeEpkcJihowvoAFHebGuQFBOdRLfsPzqL', 538950, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(70, NULL, 'Sinem', 'Erberk', 'sinem30@keseroglu.com', '$2y$10$ZZV4eqUo4VawVr3oV0nQDeGndos3liRJMZiQPxWAQM2WJOC6FWEom', 'oIpHQUeBHXlmrVGqStxKnRdZcAhVImTNpsKlvROzuyMQDFgWCJCMLghjwyEOZrEA', 404669, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(45, NULL, 'Ege', 'Gönültaş', 'sinem32@turk.net', '$2y$10$XhiMSFdIZpxhL0C.fDjZCeK/34s.xzkBeXAWbnApnPQSS7qeV3nJu', 'YWUHiqEkozQwisctKolGLeKxRXbmDBSpHAvyXPaZnZSnhLCTufBerTPDIjMQJEuh', 387615, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:48', '2021-03-25 14:05:48', NULL),
(86, NULL, 'Sinem', 'Akyüz', 'solmaz.yigit@sarioglu.org.tr', '$2y$10$0CNhwq0j4kDkKZNL16PO.OFsAlL9/GSGAlawzMPEOkRbgnF8dWC72', 'BYnAHPJRTVffZyEvhpMalgqnsYtvOHBCbQMzSOTKcNrLmeWGjuFlsKiXtzxEkhXg', 423032, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(98, NULL, 'Burcu', 'Kahveci', 'stuzun@baturalp.edu.tr', '$2y$10$.eoLQUOMpPPApkP9TkfeTuNjuavlbZH.8Xw5aMAuIyn0yofpxMOSG', 'zfJHrMQZsFPhtKxKbiuOvxtCWoDCdTygUbaWNYEjjYHIMwDekpodXluSOcszIERr', 352047, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:54', '2021-03-25 14:05:54', NULL),
(54, NULL, 'Esma', 'Yalçın', 'tanrikulu.berke@atan.com', '$2y$10$5YAqEg5NN.uUhUKt29E88.fuC2Orxb9B/XD9wCakZ3zL112VwA2WK', 'KWxCxqGmSdaNEFQbQdOVWcgcCfRXvsuPJHMDZuwXKzLnePoDtTNAbkrjoTiIArMf', 176726, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(12, NULL, 'İrem', 'Balcı', 'toprak43@gmail.com', '$2y$10$RT2HFiFjbLYgaD33IlUs3.F5yAGlCqbIL0sUEOI/kl9WHQXmA2Bwq', 'sUPQTgZIpfioBTHWzZAKYgcaayvlBqVFoRhhLMmvudriPdXqRsbInuOkGLjAFzwx', 442556, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:44', '2021-03-25 14:05:44', NULL),
(57, NULL, 'Sinem', 'Yazıcı', 'toprak67@durmaz.com', '$2y$10$zV0pIhOYlhzE8QeWoGWJ..u.jwDH/8Nv214AXBfG6g8rVx5tpCS6C', 'ShlBLxUlVJJhObUktGeWQuspFHioqKdRwewqZXYPcESTIBtmzXjOnHggpoNNiZYA', 116107, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL),
(77, NULL, 'İrem', 'Akan', 'ttunceri@cevik.edu.tr', '$2y$10$O86PxMYbnMD6zAn7/0YEe.wP/8Yo.8EcyJ0sDx/tpSxifRNOaO6/q', 'ygpaQUdArdOKsCaBXRIpJcGGtQFFNmPVfiwzjooJxvkmChkzWYcXPLjsDSqwlrSH', 246153, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(60, NULL, 'Ali', 'Akar', 'tuna07@sandalci.info', '$2y$10$zmVUeMYeipbu4xKwBFjBd.uXMksZAkr.TUGKb9SBGB8LjmuAFl8GO', 'fCrZJWpkRWtLfPlFdSMQEHuMYzgawKHnyPByvGVFxsAVjDRqEpbwXqovbKoukndN', 742543, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:50', '2021-03-25 14:05:50', NULL),
(80, NULL, 'Aşkın', 'Solmaz', 'turker27@kunt.net', '$2y$10$2pn4iSDqxnbSGyi9deZTwO99yIfc8MguDe1fBr0QGegbM/LLkHFfK', 'VYrakTfguyBWoQveARnWQdLNdSfTYwnMkrPOShcZEHDaKpJjzmebPlGVNhxijxgw', 186812, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:52', '2021-03-25 14:05:52', NULL),
(35, NULL, 'Emel', 'Sarıoğlu', 'uarslanoglu@onur.edu.tr', '$2y$10$PO0dor3cRkJ8fPNdYE/LJOzm.PpjYRqUq64f01Lj.W3MVgiKVQp76', 'mndkOAIpvrMYlGwrNhIBugakCZyPBqDGjMbVVwYilyUXQsNLTHSEthinFCRdFmPJ', 865377, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(3, NULL, 'Burcu', 'Özkök', 'umran.karabulut@superposta.com', '$2y$10$NRuruugh.VwARocrrHkeBObVHoENY3VSqJg6h.ujsEBJlv.Xl9Ai.', 'iiLXrGqykMTPZhbEdsASCgQMAlBVnXhmYTzpmoHqDwIvLOUazFJaWrGuKPxNbskt', 939328, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:43', '2021-03-25 14:05:43', NULL),
(75, NULL, 'Ada', 'Topaloğlu', 'uozberk@erez.info', '$2y$10$X5txgRxO9.CQhtQ38Y2h/.mbBrIWgvjP9QdnsbCPyfmAb9Oe4qT1W', 'CLduFkuqJgYbndSUcXYTNfTylEHQSmRWwBNlBotmcAXqEoMzDjVLvsGnMxOOpjaD', 506342, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:51', '2021-03-25 14:05:51', NULL),
(28, NULL, 'Barlas', 'Avan', 'vaksit@yahoo.com', '$2y$10$7pnJBoVJihgZGe2Ng8IS9eYgc4HRT71WmB.fBxa/OB24LrjVPPVGW', 'WbgKxuJhZiyoKXuUIVDLbRdkfERAaqgtQjcUNlzxCrPMykFOHsepYnCrvPGSXmQw', 621014, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:46', '2021-03-25 14:05:46', NULL),
(87, NULL, 'Deniz', 'Dağdaş', 'xozdogan@kocabiyik.edu.tr', '$2y$10$TUWhakatSKHwGBKuqFV/Se7wJj/h3Bc7vxkhDO7f4N.edW.fPnCFy', 'CnRfHZfwgIykXXhPrMVqprvTsIEqxwlbvMudNunNmKjChBVOQxOKkSZTFaoEAtQi', 229834, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:53', '2021-03-25 14:05:53', NULL),
(38, NULL, 'Sinem', 'Topçuoğlu', 'yagiz05@babaoglu.com.tr', '$2y$10$drfS64pe3TwS461SbOIOWORwuKg3c.WjhXuQKJkxpmygueBCC7VrG', 'HVaylNDXFRsKkrOdjjvdlhWycAVUtuCNcaTrqEHWvIJGbufBxCoFEQpLAXSUnGIZ', 874400, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(34, NULL, 'Esma', 'Berberoğlu', 'yorulmaz.ebru@hotmail.com', '$2y$10$AUAP1DLHOoh2vIE3HNdEyO/7PuAWGST1JmYVB1LPLzKSRt0vUD8/a', 'QMiVXFcoyvzSatiyNeZdjmSjGOACQRgIhpYfbhgCKwLNwnJfeBzEFuPHvUqopYMD', 581597, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:47', '2021-03-25 14:05:47', NULL),
(53, NULL, 'Yağız', 'Dizdar', 'yyilmazer@superposta.com', '$2y$10$rSh.E4/ueC6EFkswALeM1.MM02fhvI9dfH5pUHXcBpl0iulASNCMi', 'znHsVMvUptxYHjLmqSTwJGfeOoaTUIAlKWkoERslqitYhRfeAVrXvOdChBiLDJwZ', 340338, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ACTIVE', '2021-03-25 14:05:49', '2021-03-25 14:05:49', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
