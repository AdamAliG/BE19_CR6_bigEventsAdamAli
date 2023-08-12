-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Aug 2023 um 17:29
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be19_cr6_bigeventsadamali`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230811081414', '2023-08-11 10:14:24', 45),
('DoctrineMigrations\\Version20230811115414', '2023-08-11 13:54:31', 54);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_link` varchar(1000) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `ZIP_code` varchar(10) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `event_url` varchar(1000) DEFAULT NULL,
  `event_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `start_time`, `description`, `image_link`, `capacity`, `contact_email`, `contact_phone`, `address`, `ZIP_code`, `city_name`, `event_url`, `event_type`) VALUES
(4, 'Jazz Night with The Blue Notes', '2023-09-15', '19:30:00', 'Join us for an evening of classic jazz tunes with The Blue Notes. Experience a night filled with harmony and soulful melodies', 'https://static01.nyt.com/images/2020/03/13/arts/13listings-jazz/13listings-jazz-mediumSquareAt3X.jpg', 150, 'jazznight@example.com', '+1 123-456-7890', '123 Music Ave, Harmony Building', '12345', 'Jazzville', 'https://www.nytimes.com/2020/03/12/arts/music/concerts-new-york.html', 'music'),
(12, 'Rock Revolution Concert', '2023-10-05', '20:00:00', 'Prepare for a night of electrifying rock music. Featuring live performances by top rock bands of the decade!', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/jazz-concert-ads-design-template-6748f30ded09189c6e5507d7608e8de5_screen.jpg?ts=1662541539', 500, 'rockrev.com', '+1 987-654-3210', '456 Rock Street, Electric Arena', '54321', 'Rockland', 'https://www.postermywall.com/index.php/art/template/6748f30ded09189c6e5507d7608e8de5/jazz-concert-ads-design-template', 'music'),
(13, 'Classical Evening with Orchestra Supreme', '2023-11-20', '18:00:00', 'Dive into a world of symphonies and classical wonders with Orchestra Supreme. A night of timeless classics awaits!', 'https://events.temple.edu/sites/events/files/styles/event_thumbnail/public/events/tul00820/images/thumbnail/Josh%20Lee.jpeg?itok=3TV2BjpU&c=b74aaddff5ae76b7b1af39f56d78cdaf', 250, 'classicalnight.com', '+1 111-222-3333', '789 Melody Lane, Symphony Hall', '78901', 'Classicstown', 'https://events.temple.edu/department/boyer-college-of-music-and-dance', 'music'),
(14, 'Marathon City Challenge', '2023-09-10', '06:00:00', 'Join the biggest marathon challenge of the year and race against the best to claim the title in the heart of the city.', 'https://cdn.outsideonline.com/wp-content/uploads/2023/06/marathon-collection-run-sq.jpg?crop=1:1&width=500&enable=upscale&quality=100', 2000, 'marathonchallenge@.com', '+1 111-234-5678', '1 Runner Road, Stadium Central', '11122', 'Runnertown', 'https://www.outsideonline.com/collection/marathon-central/', 'sport'),
(15, 'City Basketball Championship', '2023-10-20', '18:00:00', 'Experience the thrill of basketball as top city teams compete in the championship to win the coveted trophy!', 'https://www.drlamcoaching.com/images/19144-about-marathon-running-inst-1.jpg', 800, 'basketballchamp@.com', '+1 222-345-6789', '2 Hoop Street, Dunk Arena', '22233', 'Ballersville', 'https://www.drlamcoaching.com/images/19144-about-marathon-running-inst-1.jpg', 'sport'),
(16, 'Film Festival Premiere Night', '2023-11-15', '19:30:00', 'Be the first to watch the critically acclaimed films of the year at our annual film festival.', 'https://bgmsquad.net/wp-content/uploads/2022/11/Valimai-2022-BGM-Ringtones-500x500-Masstamilan.webp', 500, 'filmfest@.com', '+1 123-456-7890', '1 Cinema Avenue, Movie Central', '33344', 'FilmCity', 'https://bgmsquad.net/valimai-bgm-ringtones-download-mp3-best-2022/', 'movie'),
(17, 'Retro Movie Night', '2023-12-05', '20:00:00', 'Travel back in time and relive the classics. A night dedicated to the golden era of cinema.', 'https://c.saavncdn.com/415/Sooryavanshi-Hindi-2021-20211111121001-500x500.jpg', 300, 'retromovie@.com', '+1 234-567-8901', '2 Vintage Lane, Old Film Theater', '44455', 'ClassicTown', 'https://www.jiosaavn.com/song/tip-tip/GkUbQUdKRgc', 'movie'),
(18, 'Shakespeare Revival: Macbeth', '2023-09-10', '19:00:00', 'Experience the timeless classic, Macbeth, in a new light with our contemporary adaptation. Directed by renowned theater artist John Smith.', 'https://www.pabsttheatergroup.com/assets/img/500x500-Web-Thumbnail___Broadway-Rave_2023.01.20-bf162429ec.png', 450, 'shakespeare@d.com', '+1 123-456-7890', '1 Theater Lane, Art Center', '55566', 'DramaCity', 'https://www.pabsttheatergroup.com/events/detail/broadway-rave-2023', 'theater');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indizes für die Tabelle `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT für Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
