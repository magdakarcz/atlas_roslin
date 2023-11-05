-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lip 2023, 12:34
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `roslinydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nawodnienie`
--

CREATE TABLE `nawodnienie` (
  `id_nawodnienie` int(11) NOT NULL,
  `nawodnienie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `nawodnienie`
--

INSERT INTO `nawodnienie` (`id_nawodnienie`, `nawodnienie`) VALUES
(1, 'male'),
(2, 'male_srednie'),
(3, 'srednie'),
(4, 'srednie_duze'),
(5, 'duze');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozwolenie`
--

CREATE TABLE `pozwolenie` (
  `id` int(11) NOT NULL,
  `rola_id` int(11) NOT NULL,
  `uzytkownik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pozwolenie`
--

INSERT INTO `pozwolenie` (`id`, `rola_id`, `uzytkownik_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 3, 8),
(5, 2, 9),
(6, 3, 10),
(7, 2, 11),
(8, 2, 12),
(9, 2, 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj`
--

CREATE TABLE `rodzaj` (
  `id_rodzaj` int(11) NOT NULL,
  `nazwa_rodzaj` varchar(30) NOT NULL,
  `rodzina_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rodzaj`
--

INSERT INTO `rodzaj` (`id_rodzaj`, `nazwa_rodzaj`, `rodzina_id`) VALUES
(1, 'Monstera', 1),
(2, 'Zielistka', 2),
(3, 'Trójskrzyn', 3),
(4, 'Difenbachia', 1),
(5, 'Dracena', 2),
(6, 'Epipremnum', 1),
(7, 'Figowiec', 4),
(8, 'Hoja', 5),
(9, 'Peperomia', 6),
(10, 'Pilea', 7),
(11, 'Sansewieria', 2),
(12, 'Zamiokulkas', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzina`
--

CREATE TABLE `rodzina` (
  `id_rodzina` int(11) NOT NULL,
  `nazwa_rodzina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rodzina`
--

INSERT INTO `rodzina` (`id_rodzina`, `nazwa_rodzina`) VALUES
(1, 'Obrazkowate'),
(2, 'Szparagowate'),
(3, 'Wilczomleczowate'),
(4, 'Morwowate'),
(5, 'Toinowate'),
(6, 'Pieprzowate'),
(7, 'Pokrzywowate');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id_rola` int(11) NOT NULL,
  `nazwa_rola` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`id_rola`, `nazwa_rola`) VALUES
(1, 'admin'),
(2, 'gosc'),
(3, 'moderator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roslina`
--

CREATE TABLE `roslina` (
  `id_roslina` int(11) NOT NULL,
  `nazwa_naukowa` varchar(40) NOT NULL,
  `nazwa_potoczna` varchar(30) NOT NULL,
  `toksycznosc` tinyint(1) NOT NULL,
  `min_temperatura` int(11) NOT NULL,
  `max_temperatura` int(11) NOT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `swiatlo_id` int(1) NOT NULL,
  `nawodnienie_id` int(1) DEFAULT NULL,
  `rodzaj_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `roslina`
--

INSERT INTO `roslina` (`id_roslina`, `nazwa_naukowa`, `nazwa_potoczna`, `toksycznosc`, `min_temperatura`, `max_temperatura`, `zdjecie`, `swiatlo_id`, `nawodnienie_id`, `rodzaj_id`) VALUES
(1, 'Monstera deliciosa', 'Monstera dziurawa', 1, 18, 30, 'monstera.jpg', 3, 3, 1),
(2, 'Pilea Peperomioides', 'Pieniążek', 0, 15, 26, 'pilea.jpg', 5, 1, 10),
(15, 'Zamioculcas zamiifolia', 'ZZ Plant', 1, 12, 29, 'zamioculcas.jpg', 3, 1, 12),
(16, 'Chlorophytum comosum', 'Zielistka Sternberga', 0, 15, 26, 'zielistka.jpg', 1, 1, 1),
(17, 'Sansevieria cylindrica', 'Afrykańska włócznia', 1, 15, 29, 'wlocznia.jpg', 3, 1, 11),
(18, 'Sansevieria liberica', 'Język teściowej', 1, 15, 29, 'jezyktesciowej.jpg', 3, 1, 11),
(19, 'Sansevieria trifasciata', 'Szable', 1, 15, 29, 'szable.jpg', 3, 1, 11),
(21, 'Epipremnum aureum', 'Epipremnum złociste', 1, 18, 26, 'pothos.jpg', 3, 3, 6),
(22, 'Peperomia cubensis', 'Peperomia gładka', 0, 15, 26, 'cubensis.jpg', 3, 1, 9),
(23, 'Hoya carnosa', 'Porcelanowy kwiat', 0, 18, 29, 'hoja.jpg', 5, 2, 8),
(24, 'Ficus elastica', 'Fikus', 1, 15, 29, 'fikus.jpg', 5, 3, 7),
(25, 'Ficus lyrata', 'Figowiec dębolistny', 1, 15, 29, 'debolistny.jpg', 5, 3, 7),
(26, 'Dracaena marginata', 'Dracena obrzeżona', 1, 18, 29, 'dracaena.jpg', 4, 1, 5),
(27, 'Dieffenbachia leopoldii', 'Difenbachia', 1, 15, 29, 'difenbachia.jpg', 2, 3, 4),
(28, 'Codiaeum variegatum', 'Kroton', 1, 15, 26, 'kroton.jpg', 5, 4, 3),
(29, 'Monstera Adansonii', 'Monkey Mask', 1, 18, 30, 'monkeymask.jpg', 3, 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `swiatlo`
--

CREATE TABLE `swiatlo` (
  `id_swiatlo` int(11) NOT NULL,
  `swiatlo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `swiatlo`
--

INSERT INTO `swiatlo` (`id_swiatlo`, `swiatlo`) VALUES
(1, 'malo'),
(2, 'malo_przecietnie'),
(3, 'przecietnie'),
(4, 'przecietnie_duzo'),
(5, 'duzo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `login`, `haslo`) VALUES
(1, 'admin', 'admin'),
(2, 'gosc', 'gosc'),
(3, 'moderator', 'moderator'),
(4, 'uzytkownik', 'uzytkownik1'),
(5, 'uzytkownik2', 'uzytkownik2'),
(6, 'uzytkownik3', 'uzytkownik3'),
(7, 'ktos', 'ktos1'),
(8, 'ktos2', 'ktos2'),
(9, 'ktos3', 'ktos3'),
(10, 'koles', 'koles1'),
(11, 'ktos10', 'ktos10'),
(12, 'koles2', 'koles2'),
(13, 'koles5', 'koles5');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nawodnienie`
--
ALTER TABLE `nawodnienie`
  ADD PRIMARY KEY (`id_nawodnienie`);

--
-- Indeksy dla tabeli `pozwolenie`
--
ALTER TABLE `pozwolenie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rola_id` (`rola_id`),
  ADD KEY `uzytkownik_id` (`uzytkownik_id`);

--
-- Indeksy dla tabeli `rodzaj`
--
ALTER TABLE `rodzaj`
  ADD PRIMARY KEY (`id_rodzaj`),
  ADD KEY `rodzina_id` (`rodzina_id`);

--
-- Indeksy dla tabeli `rodzina`
--
ALTER TABLE `rodzina`
  ADD PRIMARY KEY (`id_rodzina`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id_rola`);

--
-- Indeksy dla tabeli `roslina`
--
ALTER TABLE `roslina`
  ADD PRIMARY KEY (`id_roslina`),
  ADD KEY `nawodnienie_id` (`nawodnienie_id`),
  ADD KEY `swiatlo_id` (`swiatlo_id`),
  ADD KEY `rodzaj_id` (`rodzaj_id`);

--
-- Indeksy dla tabeli `swiatlo`
--
ALTER TABLE `swiatlo`
  ADD PRIMARY KEY (`id_swiatlo`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `nawodnienie`
--
ALTER TABLE `nawodnienie`
  MODIFY `id_nawodnienie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `pozwolenie`
--
ALTER TABLE `pozwolenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `rodzaj`
--
ALTER TABLE `rodzaj`
  MODIFY `id_rodzaj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `rodzina`
--
ALTER TABLE `rodzina`
  MODIFY `id_rodzina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `rola`
--
ALTER TABLE `rola`
  MODIFY `id_rola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `roslina`
--
ALTER TABLE `roslina`
  MODIFY `id_roslina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT dla tabeli `swiatlo`
--
ALTER TABLE `swiatlo`
  MODIFY `id_swiatlo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pozwolenie`
--
ALTER TABLE `pozwolenie`
  ADD CONSTRAINT `pozwolenie_ibfk_1` FOREIGN KEY (`uzytkownik_id`) REFERENCES `uzytkownik` (`id_uzytkownik`),
  ADD CONSTRAINT `pozwolenie_ibfk_2` FOREIGN KEY (`rola_id`) REFERENCES `rola` (`id_rola`);

--
-- Ograniczenia dla tabeli `rodzaj`
--
ALTER TABLE `rodzaj`
  ADD CONSTRAINT `rodzina_id` FOREIGN KEY (`rodzina_id`) REFERENCES `rodzina` (`id_rodzina`);

--
-- Ograniczenia dla tabeli `roslina`
--
ALTER TABLE `roslina`
  ADD CONSTRAINT `nawodnienie_id` FOREIGN KEY (`nawodnienie_id`) REFERENCES `nawodnienie` (`id_nawodnienie`),
  ADD CONSTRAINT `rodzaj_id` FOREIGN KEY (`rodzaj_id`) REFERENCES `rodzaj` (`id_rodzaj`),
  ADD CONSTRAINT `swiatlo_id` FOREIGN KEY (`swiatlo_id`) REFERENCES `swiatlo` (`id_swiatlo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
