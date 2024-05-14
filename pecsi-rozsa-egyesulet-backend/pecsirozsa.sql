-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Máj 13. 23:14
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `pecsirozsa`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `registration`
--

INSERT INTO `registration` (`id`, `surname`, `name`, `email`, `phone`, `username`, `password`, `gender`) VALUES
(2, 'seymen', 'nurgül', 'nurgul2020nurgul@gmail.com', '06705137482', 'nuri', 'nuri79', 1),
(3, 'Szabó', 'Ervin', 'szabo.ervin.erik@simonyiszki.org', '36705137481', 'ervin', 'fgfgf', 0),
(5, 'Bertalan', 'Berci', 'bercicica@gmail.com', '36705137484', 'bercsi', 'berci23', 0),
(8, 'Sheldon', 'Shelly', 'shellycica@gmail.com', '36705137485', 'shellyke', 'shelly23', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `permission` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
