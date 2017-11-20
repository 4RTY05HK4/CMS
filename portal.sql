-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Wrz 2017, 13:44
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mail`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `e12`
--

CREATE TABLE IF NOT EXISTS `e12` (
  `IDwpis` int(11) NOT NULL,
  `Wpis` text COLLATE utf8_polish_ci NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `e12`
--

INSERT INTO `e12` (`IDwpis`, `Wpis`, `Data`) VALUES
(1, ' Płyta główna (ang. Motherboard) stanowi kręgosłup komputera klasy PC i jest jednym z najważniejszych jego komponentów. Fizycznie jest to wielowarstwowa płyta drukowana z odpowiednio przygotowanymi miedzianymi ścieżkami. Na jej powierzchni ulokowane są gniazda i porty umożliwiające montaż mikroprocesora, modułów pamięci, kart rozszerzeń i urządzeń peryferyjnych.', '2017-05-23 10:45:11');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `e13`
--

CREATE TABLE IF NOT EXISTS `e13` (
  `IDwpis` int(11) NOT NULL,
  `Wpis` text COLLATE utf8_polish_ci NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `e13`
--

INSERT INTO `e13` (`IDwpis`, `Wpis`, `Data`) VALUES
(1, ' Głównym przeznaczeniem sieci komputerowej – ideą dla której została stworzona i wciąż jest ulepszana i rozwijana – to ułatwienie komunikacji pomiędzy ludźmi, będącymi faktycznymi użytkownikami sieci. Sieć umożliwia łatwy i szybki dostęp do publikowanych danych, jak również otwiera techniczną możliwość tworzenia i korzystania ze wspólnych zasobów informacji i zasobów danych. W sensie prawnym, i w pewnym przybliżeniu, użytkownicy sieci komputerowej są również jej beneficjentami.', '2017-05-23 10:51:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `e14`
--

CREATE TABLE IF NOT EXISTS `e14` (
  `IDwpis` int(11) NOT NULL,
  `Wpis` text COLLATE utf8_polish_ci NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `e14`
--

INSERT INTO `e14` (`IDwpis`, `Wpis`, `Data`) VALUES
(4, ' Do języków back-endowych zaliczamy: PHP i SQL. Kod tych języków jest ukryty, to znaczy że użytkownik nie może zobaczyć naszego kodu w przeglądarce internetowej. Polecenia języka PHP czy SQL są wykonywane po stronie serwera, a w środowisku przeglądarki internetowej użytkownik widzi tylko wynik działania skryptu. ', '2017-05-23 10:16:28'),
(5, ' Z kolei SQL jest strukturalnym językiem zapytań do baz danych. Jest on wykorzystywany w technologii webowej, jako umieszczone sekwencje języka wewnętrz struktury kodu PHP. Dzięki tej kooperacji SQL i PHP nasze strony internetowe mogą komunikować się z określoną bazą danych. A to pozwala nam na tworzenie całych systemów zarządzania treścią tzw. CMS-ów, jak np. Wordpress czy Joomla.', '2017-05-23 10:21:40');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `Imie`, `Nazwisko`, `login`, `haslo`) VALUES
(1, 'Eugeniusz', 'Piechula', 'admin', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `e12`
--
ALTER TABLE `e12`
  ADD PRIMARY KEY (`IDwpis`);

--
-- Indexes for table `e13`
--
ALTER TABLE `e13`
  ADD PRIMARY KEY (`IDwpis`);

--
-- Indexes for table `e14`
--
ALTER TABLE `e14`
  ADD PRIMARY KEY (`IDwpis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `e12`
--
ALTER TABLE `e12`
  MODIFY `IDwpis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `e13`
--
ALTER TABLE `e13`
  MODIFY `IDwpis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `e14`
--
ALTER TABLE `e14`
  MODIFY `IDwpis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
