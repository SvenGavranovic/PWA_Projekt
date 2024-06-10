-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 10, 2024 at 11:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `password`) VALUES
(1, 'administrator', '$2a$12$eDDANAGfPVND6tZ5UsK3DOjUsxkF6p.GmIoEA9U5MK.B5n...WBK2'),
(2, 'admin1', '$2a$12$qjEPNp28SzOgcyGaqPAtzuiuOZ1/f3KvOq7XyWtgIfjL.70VR0FBW');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `naslov` varchar(200) NOT NULL,
  `sazetak` varchar(70) NOT NULL,
  `glavniTekst` varchar(700) NOT NULL,
  `category` varchar(40) NOT NULL,
  `image` varchar(500) NOT NULL,
  `showOnPage` tinyint(1) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `naslov`, `sazetak`, `glavniTekst`, `category`, `image`, `showOnPage`, `createdAt`) VALUES
(1, ' Luka Modrić gewinnt erneut', 'Luka Modrić gewinnt seinen sechsten Champions-Leag', 'Luka Modrić gewinnt seinen sechsten Champions-League-Titel und ist damit der größte Spieler von Real Madrid und erfolgreichster Mittelfeldspieler. Wir werden sehen, was in Deutschland mit dem Euro passiert\r\n', 'sport', 'uploads/luka.jpg', 1, '2024-06-04 19:44:14'),
(12, 'Europawahlen', 'U nedjelju 9.6. europa bira', 'Am Sonntag, den 6. September, wählen wir die Mitglieder des Europäischen Parlaments. Werden diese Wahlen ein weiteres Fiasko sein oder werden wir endlich ein funktionierendes Europäisches Parlament bekommen, das bereit ist, sich allen Problemen der Moderne zu stellen?', 'kultur', 'uploads/european-union-flag-std_1.jpg', 1, '2024-06-06 18:29:25'),
(13, 'Neues Gesetz in Peru', 'Peru stuft Transgender-Identitäten in neuem Gesetz', 'LGBTQ-Befürworter in Peru protestierten letzte Woche in der Hauptstadt Lima, nachdem das Gesundheitsministerium ein neues Gesetz erlassen hatte, das Transgender als Menschen mit „psychischen Gesundheitsproblemen“ einstufte.\r\n\r\nMit dem obersten Erlass, der von der peruanischen Präsidentin Dina Boluarte unterzeichnet und am 10. Mai veröffentlicht wurde, wurde die Liste der versicherbaren psychischen Erkrankungen des Ministeriums um „Transsexualismus“, „Störungen der Geschlechtsidentität“ und „Cros', 'kultur', 'uploads/cover4.jpg', 1, '2024-06-06 18:32:17'),
(14, 'Eurovision wird untersucht', 'Eurovision wird nach einer Reihe von Skandalen unt', 'Der Eurovision Song Contest wird nach einer Reihe von Skandalen untersucht, zu denen die Disqualifikation des niederländischen Teilnehmers Joost Klein, Pro-Palästina-Proteste und Manipulationen beim Televoting gehören', 'kultur', 'uploads/63d8fd0b-8427-4016-9ad6-5838271dee31.jpeg', 1, '2024-06-06 18:36:43'),
(15, 'Kroatische Fußballmannschaft', 'Kroatische Fußballmannschaft besucht Papst Franzis', '\r\nDie kroatische Fußballmannschaft besucht Papst Franziskus vor ihrem ersten wichtigen Spiel in der Fußball-Europameisterschaft. Spieler und der Manager brachten ihm das offizielle Trikot mit der Nummer 1 und dem Namen Francis sowie eine Nachbildung des Balls, mit dem der Fußball in Kroatien begann', 'sport', 'uploads/359f517b586daf2e9048.jpeg', 1, '2024-06-06 18:45:24'),
(16, 'Toni Kros geht in den Ruhestand', 'Toni Kroos geht nach einer langen und erfolgreiche', 'Toni Kroos geht nach einer langen und erfolgreichen Karriere in den Ruhestand. Nach dem Gewinn eines Ballon d\'Or, sechs Champions League-Titeln und der Weltmeisterschaft in Brasilien geht der erfolgreiche deutsche Fußballer in den Ruhestand', 'sport', 'uploads/kroos.jpg', 1, '2024-06-08 19:48:16'),
(17, 'Euro 2024, hosted by Germany', 'Euro 2024, hosted by Germany, promises to be an exciting', 'Euro 2024, hosted by Germany, promises to be an unforgettable tournament, bringing together Europe\'s elite national football teams from June 14 to July 14. State-of-the-art stadiums and passionate supporters will create an electrifying atmosphere, enhancing the overall experience. Beyond the competition, Euro 2024 will emphasize innovation, with host cities implementing green initiatives and modern infrastructure.', 'sport', 'uploads/euro_2024_logo_uefa.jpg', 1, '2024-06-10 09:22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
