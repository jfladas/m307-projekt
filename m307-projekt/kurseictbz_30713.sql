-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 12. Mrz 2020 um 13:25
-- Server-Version: 10.1.44-MariaDB-0+deb9u1
-- PHP-Version: 7.0.33-25+0~20200225.32+debian9~1.gbpa11893

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kurseictbz_30713`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, '0-5 kg'),
(2, '5-10 kg'),
(3, '10-15kg'),
(4, '15-20 kg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fruits`
--

CREATE TABLE IF NOT EXISTS `fruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `fruits`
--

INSERT INTO `fruits` (`id`, `name`) VALUES
(1, 'Ananas'),
(2, 'Äpfel'),
(3, 'Aprikosen'),
(4, 'Avocado'),
(5, 'Bananen'),
(6, 'Birnen'),
(7, 'Blondorangen'),
(8, 'Blutorangen'),
(9, 'Brombeeren'),
(10, 'Clementinen'),
(11, 'Erdbeeren'),
(12, 'Feigen frisch'),
(13, 'Grapefruits'),
(14, 'Heidelbeeren'),
(15, 'Himbeeren'),
(16, 'Johannisbeeren'),
(17, 'Kaki'),
(18, 'Kirschen'),
(19, 'Kiwi'),
(20, 'Kiwi Bio Schweiz'),
(21, 'Limetten'),
(22, 'Litschis'),
(23, 'Mango'),
(24, 'Melonen'),
(25, 'Mirabellen'),
(26, 'Nektarinen'),
(27, 'Papaya'),
(28, 'Pfirsiche'),
(29, 'Pflaumen'),
(30, 'Preiselbeeren'),
(31, 'Quitten'),
(32, 'Stachelbeeren'),
(33, 'Trauben'),
(34, 'Kirschen'),
(35, 'Zwetschgen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fk_category` int(11) NOT NULL,
  `fk_fruit` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  `frist` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `phone`, `fk_category`, `fk_fruit`, `status`, `frist`) VALUES
(57, 'Luan Gashi', 'lion123hd@hotmail.com', '0789032251', 1, 1, b'0', '12.03.2020'),
(59, 'Gudrun', 'urbi@orbi.it', '0797979797', 4, 17, b'0', '30.03.2020'),
(60, 'Lukas Bucher', 'lukas.bucherr@gmail.com', '0799516328', 4, 20, b'0', '30.03.2020');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`fk_category`),
  ADD KEY `fk_fruit` (`fk_fruit`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT für Tabelle `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`fk_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`fk_fruit`) REFERENCES `fruits` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
