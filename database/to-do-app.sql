-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 28. Dez 2020 um 17:41
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `To-Do-App`
--
CREATE DATABASE IF NOT EXISTS `To-Do-App` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `To-Do-App`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Aufgabenliste`
--

CREATE TABLE `Aufgabenliste` (
  `id` int(11) NOT NULL,
  `aufgabe` text NOT NULL,
  `status` text NOT NULL,
  `tag` text NOT NULL,
  `priorität` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Aufgabenliste`
--

INSERT INTO `Aufgabenliste` (`id`, `aufgabe`, `status`, `tag`, `priorität`) VALUES
(1, 'Geschirr aufräumen', 'erledigt', 'haushalt', 'mittel'),
(2, 'Papier-Müll rausbringen', 'offen', 'haushalt', 'gering'),
(3, 'Softwareprojekt weiter programmieren', 'erledigt', 'studium', 'mittel'),
(5, 'Für Klausur lernen', 'offen', 'studium', 'hoch'),
(6, 'Sport machen', 'offen', 'freizeit', 'hoch'),
(7, 'Buch lesen ', 'offen', 'freizeit', 'mittel'),
(8, 'Blumen gießen', 'erledigt', 'haushalt', 'gering');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Aufgabenliste`
--
ALTER TABLE `Aufgabenliste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Aufgabenliste`
--
ALTER TABLE `Aufgabenliste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
