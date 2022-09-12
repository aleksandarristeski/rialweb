-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jun 2022 um 12:43
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `wbsprojekt_risteski`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkts`
--

CREATE TABLE `produkts` (
  `produkt_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `produkt_name` varchar(255) NOT NULL,
  `product_besch` varchar(255) NOT NULL,
  `produkt_price` varchar(255) NOT NULL,
  `cms_inc` varchar(255) DEFAULT NULL,
  `cms_besch` varchar(255) DEFAULT NULL,
  `site_inc` varchar(255) DEFAULT NULL,
  `site_besch` varchar(255) DEFAULT NULL,
  `speicher_inc` varchar(255) DEFAULT NULL,
  `speicher_besch` varchar(255) DEFAULT NULL,
  `dom_inc` varchar(255) DEFAULT NULL,
  `dom_besch` varchar(255) DEFAULT NULL,
  `ssl_inc` varchar(255) DEFAULT NULL,
  `ssl_besch` varchar(255) DEFAULT NULL,
  `seo_inc` varchar(255) DEFAULT NULL,
  `seo_besch` varchar(255) DEFAULT NULL,
  `responsiv_inc` varchar(255) DEFAULT NULL,
  `responsiv_besch` varchar(255) DEFAULT NULL,
  `email_inc` varchar(255) DEFAULT NULL,
  `email_besch` varchar(255) DEFAULT NULL,
  `bild_inc` varchar(255) DEFAULT NULL,
  `bild_besch` varchar(255) DEFAULT NULL,
  `formular_inc` varchar(255) DEFAULT NULL,
  `formular_besch` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `produkts`
--

INSERT INTO `produkts` (`produkt_id`, `user_id`, `produkt_name`, `product_besch`, `produkt_price`, `cms_inc`, `cms_besch`, `site_inc`, `site_besch`, `speicher_inc`, `speicher_besch`, `dom_inc`, `dom_besch`, `ssl_inc`, `ssl_besch`, `seo_inc`, `seo_besch`, `responsiv_inc`, `responsiv_besch`, `email_inc`, `email_besch`, `bild_inc`, `bild_besch`, `formular_inc`, `formular_besch`, `created_at`, `updated_at`) VALUES
(1, 1, 'Website M', '<script>alert(\'You are hacked\')</script>', 'ab 1111€', 'nein', 'CMS1', 'ja', '1 Sitepage', 'nein', '1GB Speicher', 'nein', 'Domain', 'nein', 'Free SSL', 'nein', 'SEO Optimierung', 'nein', 'Responsive Desing', 'nein', '1 Email Adresse', 'nein', 'Bilder', 'nein', 'Kontakt Formular', '2022-06-20 10:43:12', '2022-06-27 12:17:30'),
(3, 1, 'Website L', '111with all your customers via all conversation channels in one central dashboard.asd', 'ab 1222€', 'ja', 'CMS', 'ja', 'bis 12 Sitepage1', 'ja', '2GB Speicher', 'ja', '1 Domain', 'ja', 'Free SSL', 'ja', 'SEO Optimierung', 'ja', 'Responsive Desing', 'ja', 'bis 3 Email Adresse', 'ja', 'bis 5 Bilder', 'ja', 'Kontakt Formular', '2022-06-20 10:43:12', '2022-06-27 12:18:05'),
(5, 1, 'Website XL', '111with all your customers via all conversation channels in one central dashboard.', 'ab 2333€', 'ja', 'CMS', 'ja', '24 Sitepage', 'ja', '5GB Speicher', 'ja', '1 Domain', 'ja', 'Free SSL', 'ja', 'SEO Optimierung', 'ja', 'Responsive Desing', 'ja', '5 Email Adresse', 'ja', '12 Bilder', 'ja', '3 Formular', '2022-06-20 10:43:12', '2022-06-27 12:18:17'),
(84, 21, 'Produkt Name', 'With all your customers via all conversation channels in one central dashboard.', 'ab >PRICE< €', 'ja', 'CMS', 'ja', 'bis 12 Sitepage', 'ja', '2GB Speicher', 'ja', '1 Domain', 'ja', 'Free SSL', 'ja', 'SEO Optimierung', 'ja', 'Responsive Desing', 'ja', 'bis 1 Email Adresse', 'ja', 'bis 5 Bilder', 'ja', 'Kontakt Formular', '2022-06-27 09:55:20', '2022-06-27 09:55:20'),
(86, 21, 'Produkt Name', 'With all your customers via all conversation channels in one central dashboard.', 'ab >PRICE< €', 'ja', 'CMS', 'ja', 'bis 12 Sitepage', 'ja', '2GB Speicher', 'ja', '1 Domain', 'ja', 'Free SSL', 'ja', 'SEO Optimierung', 'ja', 'Responsive Desing', 'ja', 'bis 1 Email Adresse', 'ja', 'bis 5 Bilder', 'ja', 'Kontakt Formular', '2022-06-27 09:55:32', '2022-06-27 09:55:32'),
(87, 1, 'Produkt Name', 'With all your customers via all conversation channels in one central dashboard.', 'ab >PRICE< €', 'ja', 'CMS', 'ja', 'bis 12 Sitepage', 'ja', '2GB Speicher', 'ja', '1 Domain', 'ja', 'Free SSL', 'ja', 'SEO Optimierung', 'ja', 'Responsive Desing', 'ja', 'bis 1 Email Adresse', 'ja', 'bis 5 Bilder', 'ja', 'Kontakt Formular', '2022-06-27 10:04:51', '2022-06-27 10:04:51');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `anrede` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `slfarbe` varchar(255) NOT NULL,
  `cbhtml` varchar(255) NOT NULL,
  `cbjs` varchar(255) NOT NULL,
  `cbphp` varchar(255) NOT NULL,
  `cbsql` varchar(255) NOT NULL,
  `cbtypo` varchar(255) NOT NULL,
  `cbwordpress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `anrede`, `name`, `vorname`, `email`, `slfarbe`, `cbhtml`, `cbjs`, `cbphp`, `cbsql`, `cbtypo`, `cbwordpress`, `password`, `created_at`, `update_at`) VALUES
(1, 'herr', 'alek', 'aleksandar', 'alek@home.de', 'blau', 'htmlcss', 'js', '', '', 'typo', 'worpress', '$2y$10$7jbVAN2DUM2EPpvz3vO4KemKv6zfLi43GJkeo1MTt4kFgxMfNC4B6', '2022-06-17 11:15:34', '2022-06-22 09:30:09'),
(2, 'herr', 'Risteski', 'Aleksandar', 'alek1@home.de', 'blau', 'htmlcss', 'js', 'php', '', '', '', '$2y$10$cER/sBi0EZHVh.KQHx9gYu6/ITrjl7RYLK1RLqsS1M3OgV.qrFyIq', '2022-06-21 09:46:39', '2022-06-21 09:56:29'),
(3, 'frau', 'risteska', 'aleksandra', 'aleksandra@home.de', 'silber', '', '', '', 'sql', 'typo', 'wordpress', '$2y$10$cER/sBi0EZHVh.KQHx9gYu6/ITrjl7RYLK1RLqsS1M3OgV.qrFyIq', '2022-06-21 09:52:59', '2022-06-21 09:56:21'),
(4, 'herr', 'name', 'vorname', 'e@e.de', 'blau', 'htmlcss', 'js', 'php', 'sql', 'typo', 'wordpress', '$2y$10$cER/sBi0EZHVh.KQHx9gYu6/ITrjl7RYLK1RLqsS1M3OgV.qrFyIq', '2022-06-21 09:55:53', '2022-06-21 09:55:53'),
(5, 'frau', 'asd', 'asd', 'a@home.de', 'schwarz', 'htmlcss', '', '', 'sql', '', '', '$2y$10$9Abucu6JvB0U2IGWSF37GO/1uSz6gTqYL2MVVlvEKPyPdv/nMfAAO', '2022-06-21 11:22:11', '2022-06-21 11:22:11'),
(6, 'herr', '123', '123', 'dasdasd12@12312', 'grau', '', '', '', '', '', '', '$2y$10$Tm6vqa81YBdQAA5L.yC7DexSs4RdbEYBKFspzkQKLZdb8xk32aLNy', '2022-06-21 11:25:44', '2022-06-21 11:25:44'),
(7, 'herr', 'asd', 'asd', 'alek11@alek.de', 'schwarz', 'htmlcss', '', '', 'sql', '', '', '$2y$10$SveX0N2kKkE9OvBZv86kgO8A/lQCfGF9RcJkZ9j/A23wa84G8qLb.', '2022-06-21 11:31:28', '2022-06-21 11:31:28'),
(8, 'frau', 'a', 'a', 'a@de', 'silber', '', '', '', '', '', '', '$2y$10$7x2RsfehMuimHvehXvW7J.MbEcv9di7nmzPjzLHMw.nxDeE2ldB.K', '2022-06-21 11:32:17', '2022-06-21 11:32:17'),
(9, 'herr', 'risteski', 'marco', 'marco@home.de', 'silber', 'htmlcss', 'js', 'php', 'sql', 'typo', 'wordpress', '$2y$10$LNGbxJHsWoGEKWazH4C4YuaBcttzUjjOjjfje8GGyKwVTt229yF9G', '2022-06-21 17:54:10', '2022-06-21 17:54:10'),
(10, 'herr', 'risteski', 'martin', 'martin@home.de', 'schwarz', 'htmlcss', 'js', 'php', 'sql', 'typo', 'wordpress', '$2y$10$aG2diR1SH1IZn/Zqfw95s.l3ARrbbc50wzo15j6sz1tuTgZugmYry', '2022-06-21 18:02:35', '2022-06-21 18:02:35'),
(11, 'frau', 'ace', 'ace', 'asad@asd', 'grau', 'htmlcss', '', '', 'sql', '', '', '$2y$10$ODqywPHMc89tV/FuE8n/8.qbUWMErkqdNXKezP0iZeLH0bpkAWcgu', '2022-06-24 11:50:14', '2022-06-24 11:50:14'),
(12, 'frau', 'Mime', 'Vormime', 'm@home.de', 'braun', 'htmlcss', '', '', 'sql', '', 'wordpress', '$2y$10$hyezcvWIxYbaV1W.xmrk3.QCpvMnkrB.GyzAzywl1JSvebZItSfRu', '2022-06-24 15:33:49', '2022-06-24 15:33:49'),
(13, 'herr', 'Berlin', 'Vorberlin', 'b@home.de', 'grau', 'htmlcss', '', 'php', 'sql', '', 'wordpress', '$2y$10$m22jJ07R3WDGmKCzFYBGAuL.Igor6ArfWQNJVJGYj5jNL6E7GByAy', '2022-06-24 15:36:54', '2022-06-24 15:36:54'),
(14, 'herr', 's<script>alert(\'test\');</script>', 'asdasd', 's@s.de', 'silber', '', '', '', 'sql', '', '', '$2y$10$4I4KZFdNgl.cFo1xPOULiuzvUeatT7rdtfVR0KDFMhtaIeYJ5zwkm', '2022-06-24 15:53:13', '2022-06-24 15:54:25'),
(15, 'herr', 'Nazaryar', 'Bashir', 'bashir@home.de', 'braun', '', 'js', '', '', '', '', '$2y$10$7jbVAN2DUM2EPpvz3vO4KemKv6zfLi43GJkeo1MTt4kFgxMfNC4B6', '2022-06-25 10:06:07', '2022-06-25 10:57:57'),
(16, 'keine', 'Keine', 'Keine', 'k@home.de', 'gelb', 'htmlcss', '', 'php', '', '', 'wordpress', '$2y$10$NkpXe7BkOC1Hi9I8H/CTEOnb6NTikpqsQKUe5ofJRZLamMjkm4Zg2', '2022-06-25 11:36:05', '2022-06-25 11:36:05'),
(17, 'frau', 'bla', 'bla', 'bla@home.de', 'silber', 'htmlcss', 'js', 'php', 'sql', '', '', '$2y$10$V3AciHuCqqNkdzn7m4flDOvdeMRuO0WOmayUEYg55tzZs12bQEQ16', '2022-06-25 13:03:46', '2022-06-25 13:03:46'),
(18, 'frau', 'bla1', 'bla', 'bla1@home.de', 'silber', 'htmlcss', 'js', 'php', '', '', '', '$2y$10$O/NH39jmdy2o09XfQ9dWkeUpf9v4wBJUw54TlbDbHYzudY9v7cWiK', '2022-06-25 13:14:48', '2022-06-25 13:14:48'),
(19, 'herr', 'new', 'new', 'n@n.de', 'grau', '', 'js', '', '', 'typo', 'wordpress', '$2y$10$DGBA9JScliwsDssGT6KvKu29KHmfhFgIMZD2Z/X2FDPnkRQ64w1Jm', '2022-06-25 13:48:52', '2022-06-25 13:48:52'),
(20, 'herr', 'Mname', 'Mvorname', 'mm@home.de', 'braun', '', '', 'php', 'sql', '', '', '$2y$10$1fYq8l9fLS/PKLbXUAkG7eL3OLz6RxyXhTaWJXK6eWqIecdZnkzVK', '2022-06-25 14:30:18', '2022-06-25 14:30:18'),
(21, 'herr', 'Mon', 'Vormon', 'mon@home.de', 'weiss', 'htmlcss', 'js', 'php', '', '', '', '$2y$10$a0lj3qRul2bNset.t1kmFejSqvlu7bRjh5AduRP7Sp7TQt6YtHZcK', '2022-06-27 09:54:37', '2022-06-27 09:54:37'),
(22, 'herr', 'uname', 'uvorname', 'u@home.de', 'schwarz', 'htmlcss', 'js', 'php', 'sql', 'typo', '', '$2y$10$KOw0J3UuDuKJmuFBFzMnougc/8qbaG/fkFbJ39JzFWJ1bJgkk5x8K', '2022-06-27 09:58:37', '2022-06-27 09:58:37');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkts`
--
ALTER TABLE `produkts`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkts`
--
ALTER TABLE `produkts`
  MODIFY `produkt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `produkts`
--
ALTER TABLE `produkts`
  ADD CONSTRAINT `produkts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
