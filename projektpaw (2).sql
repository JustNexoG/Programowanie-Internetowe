-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 21, 2024 at 01:15 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektpaw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `favorites`
--

CREATE TABLE `favorites` (
  `idUser` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `likes`
--

CREATE TABLE `likes` (
  `idUser` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `dateLiked` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `properties`
--

CREATE TABLE `properties` (
  `idProperty` int(11) NOT NULL,
  `ownerId` int(11) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `datePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `isActive` varchar(100) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateRetired` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`, `isActive`, `dateCreated`, `dateRetired`) VALUES
(1, 'unregistered', 'yes', '2024-05-14 16:14:10', '0000-00-00 00:00:00'),
(2, 'registered', 'yes', '2024-05-14 16:14:10', '0000-00-00 00:00:00'),
(3, 'moderator', 'yes', '2024-05-14 16:14:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userrole`
--

CREATE TABLE `userrole` (
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `assignedDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`idUser`, `idRole`, `assignedDate`) VALUES
(1, 3, '2024-05-18 15:07:21'),
(31, 2, '2024-05-20 22:09:57'),
(32, 2, '2024-05-20 22:17:23'),
(33, 2, '2024-05-20 22:47:45'),
(34, 2, '2024-05-20 22:56:59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastLogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `email`, `firstName`, `lastName`, `dateCreated`, `lastLogin`, `lastModifiedBy`, `lastModifiedDate`) VALUES
(1, '2741be847eacddcb3f8c835f0379fed574cb010185aee672e2aa99ecbb5c7715', '$2y$10$eYlNPiOa5tdyIDWyrfJRT.oL/XOw7G81rZukXCj/ZQ7pzlFD2YajO', 'nexo@nexo.nexo', 'Kewin', 'Mazur', '2024-05-18 14:59:00', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(31, '3583e2784d4accd7b12ddebc153b0dacb41db7e947a5736a58230a3f03935eb1', '$2y$10$l0JpPFdMVpZ4yVg5bWJoM.DqtIqh/rlAbBNu9Hj4yn.dZI9dQIbtm', 'sdfg@adfhgsd.pl', 'Janusz', 'Kowalski', '2024-05-20 22:09:57', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(32, '538341bdc409a75b750ca77cec965999e07d2ebe9663a8652f9007017d6eba76', '$2y$10$1G6ZKHqZ2WR27iYdzkoyf.l3dP7IFFFDw7d1s7l1NGcgIIt54PkOa', 'sdfg@adfsafhgsd.pl', 'Janusz', 'Kowalski', '2024-05-20 22:17:22', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(33, '09cc1b93ceee06fd6a91e9cfb15dce3aaa4bab266766ecab59b99bf92ade8094', '$2y$10$LHbJ.nb.evx7jmwqmoRsyuNM9347pgLYXiPOx2Qb9v1H2Y39Hvnja', 'lolita@pl.onet', 'Janusz', 'Kowalski', '2024-05-20 22:47:45', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(34, 'f1d24c3462b0ce27c85c16c387ed331b8651a0885da8f1b96b153ffae5f466ae', '$2y$10$LRpf5fOJh7.tmK5GbausKupY5e8LdijSgO376wwZOX7w4sTNWKFlK', 'lolita@pl.onetd', 'Białko', 'Kreatyna', '2024-05-20 22:56:59', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`idUser`,`idProperty`),
  ADD KEY `Favorites_Properties_FK` (`idProperty`);

--
-- Indeksy dla tabeli `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`idUser`,`idProperty`),
  ADD KEY `Likes_Properties_FK` (`idProperty`);

--
-- Indeksy dla tabeli `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`idProperty`),
  ADD KEY `Properties_Users_FK` (`ownerId`),
  ADD KEY `Properties_Users_FKv1` (`lastModifiedBy`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indeksy dla tabeli `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`idUser`,`idRole`),
  ADD KEY `UserRole_Roles_FK` (`idRole`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `Users_Users_FK` (`lastModifiedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `idProperty` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `Favorites_Properties_FK` FOREIGN KEY (`idProperty`) REFERENCES `properties` (`idProperty`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Favorites_Users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `Likes_Properties_FK` FOREIGN KEY (`idProperty`) REFERENCES `properties` (`idProperty`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Likes_Users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `Properties_Users_FK` FOREIGN KEY (`ownerId`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Properties_Users_FKv1` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `UserRole_Roles_FK` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserRole_Users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Users_FK` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
