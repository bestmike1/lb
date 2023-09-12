-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 12. zář 2023, 12:05
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `lb`
--
CREATE DATABASE IF NOT EXISTS `lb` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `lb`;

-- --------------------------------------------------------

--
-- Struktura tabulky `zakaznik`
--

DROP TABLE IF EXISTS `zakaznik`;
CREATE TABLE `zakaznik` (
  `zakaznik_id` int(11) NOT NULL,
  `jmeno` varchar(50) NOT NULL,
  `prijmeni` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vyprázdnit tabulku před vkládáním `zakaznik`
--

TRUNCATE TABLE `zakaznik`;
--
-- Vypisuji data pro tabulku `zakaznik`
--

INSERT DELAYED INTO `zakaznik` (`zakaznik_id`, `jmeno`, `prijmeni`, `email`, `telefon`) VALUES
(1, 'Kamila', 'Nováková', 'kam@seznam.cz', '+420605123456'),
(2, 'Anna', 'Vodníková', 'vodnikova.a@gmail.com', '603123456'),
(3, 'Aneta', 'Pluhařová', 'anetap@centrum.cz', '602987654'),
(4, 'Jana', 'Zárubová', 'zarubova@outlook.com', '604456123'),
(5, 'Blažena', 'Houdková', 'blaza@seznam.cz', '603852147'),
(6, 'Radka', 'Petru', 'petrur@gmail.com', '6056295184'),
(7, 'Lenka', 'Kohoutová', 'l.k@seznam.cz', '6015486248'),
(8, 'Eliška', 'Nádeníčková', 'naden.el@seznam.cz', '603258369'),
(9, 'Dana', 'Roubalová', 'd.roubalova@centrum.cz', '603321478'),
(10, 'Ida', 'Mazníková', 'ida.m@gmail.com', '601236547'),
(11, 'Žaneta', 'Udržálková', 'zudrzalkova@seznam.cz', '603269874'),
(12, 'Pavlína', 'Koutková', 'koutkova@email.cz', '601852852'),
(13, 'Elena', 'Nováková', 'Novakova@seznam.cz', '603269875');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `zakaznik`
--
ALTER TABLE `zakaznik`
  ADD PRIMARY KEY (`zakaznik_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `zakaznik`
--
ALTER TABLE `zakaznik`
  MODIFY `zakaznik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
