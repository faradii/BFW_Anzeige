-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Nov 2024 um 21:39
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bfw_datenbank`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kleinanzeigen`
--

CREATE TABLE `kleinanzeigen` (
  `id` int(11) NOT NULL,
  `kategorie` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `preis` int(11) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `bild` varchar(50) DEFAULT NULL,
  `beschreibung` varchar(100) DEFAULT NULL,
  `bestätigung` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kleinanzeigen`
--

INSERT INTO `kleinanzeigen` (`id`, `kategorie`, `name`, `preis`, `datum`, `bild`, `beschreibung`, `bestätigung`) VALUES
(2, 'Technik', 'Apple Computer', 25, '2024-11-11', '/images/rechner.jpg', 'Verkaufe meinen alten PC.', 1),
(3, 'Dienstleistung', 'IT-Nachilfe', 2500, '2024-01-11', '/images/nachhilfe.jpg', 'Biete It-Nachhilfe und nebenbei auch Französisch an.', 1),
(4, 'Möbel', 'Höhenverstellbarer Tisch', 12500, '2020-01-17', '/images/tisch.jpg', 'Verkaufe einen begehrten höhenverstellbaren Tisch im BFW', 1),
(5, 'Dienstleistung', 'Suche eine Seele', 0, '1900-11-17', '/images/seele.jpg', 'Gesucht: Suche jemanden der seine Seele verkauft, meld dich bei mir! ', 1),
(6, 'Lebensmittel', 'Gemüse', 0, '2022-05-27', '/images/kartoffel.jpg', 'Kenn mich mit Gemüse nicht so aus, darum verkaufe ich das lieber! ', 1),
(7, 'Bücher', 'Harry Potter', 35, '1900-12-12', '/images/nophoto.jpg', 'Nettes Buch aber ich mag keine Bücher!', 1),
(8, 'Möbel', 'Couch', 234, '1900-12-12', '/images/nophoto.jpg', 'keine ahnung', 1),
(9, 'Bücher', 'Herr der Ringe', 34, '1900-12-12', '/images/nophoto.jpg', 'Buch halt', 1),
(14, 'Bücher', 'Harry Potter ', 45, '2024-11-04', '/images/harrypotter.jpg', 'Ich mag gar keine Bücher, daher steht es zum Verkauf!', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kleinanzeigen`
--
ALTER TABLE `kleinanzeigen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kleinanzeigen`
--
ALTER TABLE `kleinanzeigen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
