-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 sep 2025 om 09:54
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `video` int(11) NOT NULL,
  `text1` longtext NOT NULL,
  `image2` varchar(250) NOT NULL,
  `text2` longtext NOT NULL,
  `image3` varchar(250) NOT NULL,
  `text3` longtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `linkgit` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `text`, `image`, `image1`, `video`, `text1`, `image2`, `text2`, `image3`, `text3`, `link`, `linkgit`, `category`) VALUES
(1, 'Webshop', 'De opdracht van dit project was om een webshop te maken op basis van de gegeven layout en stijl. Ik heb de webshop gebaseerd op Bol.com en voorzien van drie features die we moesten maken.', 'Voor deze opdracht moesten we een webshop maken op basis van een layout die we kregen en daar 3 extra features aan toevoegen, zoals bijvoorbeeld responsive design, filter, search, dark mode of een modal.\r\nIk koos ervoor om de layout van bol.com te gebruiken en de features die ik heb toegevoegd zijn filter, search en responsive.\r\nIk heb mijn eigen versie van de webshop gemaakt, waarin ik kleding verkoop. De filters werken ook echt in de zoekbalk, wat het makkelijk maakt om snel te vinden wat je zoekt. Daarnaast heb ik de webshop redelijk goed responsive gemaakt. Dit was ook de eerste keer dat ik deze features had gebruikt en ik ben er heel trots op.', 'img/webshop.png', 'img/kumo_search.png', 0, 'Hier zie je een voorbeeld van de searchbar, waarin je “suit” kunt opzoeken. Zoals je ziet verschijnt alleen “suit” ook al staat het als laatste woord in de naam van het kledingstuk.', 'img/bekijk_product_webshop.png', 'Hier zie je dat als je op “Bekijk product” klikt je naar een andere pagina gaat. Daar kun je het product in het mandje doen (add to cart) en rechtsboven verschijnt een +1 in het mandje (je kunt onbeperkt klikken en het blijft omhoog gaan). Als je eerst wilt lezen wat voor product het is voordat je het koopt, kun je ook de product informatie bekijken. Het mandje werkt verder niet nadat je erop hebt geklikt, omdat ik het nog best lastig vond om uit te zoeken hoe ik het verder kon laten werken.', '', 'Als je meer wilt weten kan je op de Live link klikken en de Github link.', 'https://36725.hosts2.ma-cloud.nl/webshop_BO/', 'https://github.com/giorgina18/webshop_BO', 'Webshop'),
(2, 'Input Output', 'De opdracht van dit project was om een input-output toepassing te maken. Mijn idee was een autootje te bouwen dat bestuurd wordt met een joystick, de joystick dient als input en het autootje als output.', '', 'img/input_output.png', '', 0, 'Ik heb het autootje helemaal zelf gebouwd en de joystick met een klein beetje hulp van mijn leraar. Het coderen heb ik gedaan met behulp van verschillende tutorials en af en toe wat hulp van de leraar. \r\nHet was echt een leuke uitdaging en ik vond het super leuk om te doen. Het eindresultaat vond ik heel gaaf want het is me toch gelukt om zelf iets te maken voor de eerste keer dat meer is dan alleen een website.', '', 'Als je meer wilt weten kan je op de youtube link klikken wat verwijst naar de input output video en de Github link..\r\n', '', '', 'https://youtube.com/shorts/w3QoR7Gesjk?feature=share', 'https://github.com/giorgina18/M6_techspeeltuin', 'Input Output'),
(3, 'SV-Unity', 'De opdracht van dit project was om tijdens een gesprek met de klant zijn ideeën te verzamelen en deze vervolgens zelfstandig uit te werken tot een passend eindproduct.', 'Tijdens het gesprek met de klant heb ik goed geluisterd naar hun ideeën en wensen, zoals de stijl, kleuren en functionaliteit die ze belangrijk vonden, en door gerichte vragen te stellen heb ik alles duidelijk gekregen zodat ik precies wist wat voor eindproduct ze wouden.', 'img/SV-unity.png', 'img/middel_sv.png', 0, 'Hier zie je in het kort informatie wat de SV-Unity is en waar het voor staat. Voor als je meer informatie wilt kan je op de \"klik hier voor meer informatie\" knop drukken en word je naar de volgende pagina gewezen met nog meer informatie.', 'img/evenementen_sv.png', 'De klant woud ook graag een evenementen page erin hebben waar ik random voorbeelden in kon zetten. Als je op \"bekijk evenementen\" klikt word je naar de evenement page gestuurd met meer informatie over wat de evenement is.', '', 'Als je meer wilt weten kan je op de Live link klikken en de Github link..\r\n\r\n', 'https://giorginacali.nl/sv_unity/', 'https://github.com/giorgina18/SV-Unity_BO', 'SV-Unity'),
(4, 'Back end', 'De opdracht van dit project was om de back-end security te versterken, zodat gebruikers niet te maken krijgen met broken access control tijdens het registreren.', 'Op deze foto zie je het registratieformulier zoals de gebruiker het te zien krijgt. Hier kan de gebruiker zijn gegevens invoeren, zoals gebruikersnaam, e-mail en wachtwoord.', 'img/registratie.png', 'img/registreren_back_end.png', 0, 'Hier vult de gebruiker zijn gegevens in en klikt op Registreren. De backend kijkt of de gebruikersnaam nog vrij is en of het wachtwoord sterk genoeg is. Ook wordt gecontroleerd dat er geen broken acces control is.', 'img/registreren_gelukt.png', 'Deze foto laat zien dat de registratie gelukt is en dat de gegevens veilig in de database zijn opgeslagen.', 'img/backendsvunity.png', 'Op de laatste foto zie je dat de geregistreerde gegevens veilig in de database staan. De wachtwoorden zijn gehashed en andere belangrijke informatie wordt goed beschermd. Dit laat zien dat de registratie goed werkt en dat niemand zonder toestemming bij de gegevens kan.\r\n\r\n\r\n\r\nAls je meer wilt weten kan je op de Live link klikken en de Github link..', 'https://giorginacali.nl/sv_unity/registratie/registratie.php', 'https://github.com/giorgina18/SV-Unity_BO/tree/Bo_svunity_back_end', 'Back end'),
(5, 'NXT museum', 'De opdracht van dit project was om een professionele, tweetalige museumwebsite te maken met informatie, afbeeldingen en bezoekersreviews.', 'Op de homepagina kan je wisselen van Nederlands naar Engels en andersom. Ook staat er informatie over eerdere events en een aantal reviews (niet echte reviews). Dit was mijn eerste designproject in het eerste jaar en dit is mijn echte live website.', 'img/nxtmuseum.png', 'img/nxt_museum_design.png', 0, 'Hier kan je via de link doorklikken naar de echte NXT Museum website voor meer informatie. Op mijn website kan je ook de geschiedenis bekijken en zien welke events er eerder zijn geweest.', '', 'Als je meer wilt weten kan je op de Live link klikken en de Github link..', '', '', 'https://36725.hosts2.ma-cloud.nl/nxtmuseum/', 'https://github.com/giorgina18/nxt.museum', 'Museum');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
