-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 03, 2024 at 10:59 PM
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
  `idProperty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`idUser`, `idProperty`) VALUES
(1, 51);

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
  `datePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`idProperty`, `ownerId`, `address`, `description`, `price`, `type`, `datePosted`, `lastModifiedBy`, `lastModifiedDate`) VALUES
(50, 59, 'Katowice Plac Wolności', 'Piękne mieszkanie w dobrej okolicy. Bardzo dobra komunikacja. Blisko do stacji pociągów czy przystan', 500000.00, 'Sprzedaż', '2024-06-02 23:09:04', 59, '2024-06-02 23:09:30'),
(51, 59, 'Sosnowiec Osiedle Strzeżone', 'Osiedle strzeżone 24/7. Blisko sklepy i dobra komunikacja. Sąsiedzi spokojni mało imprezujący.', 425000.00, 'Sprzedaż', '2024-06-02 23:10:51', 1, '2024-06-02 23:20:42'),
(52, 58, 'Radzionków Mieszkanie Blisko Centrum', 'Duże mieszkanie. Blisko sklepy, słabi sąsiedzi głośni stąd niska cena. Pozdrawiam.', 250000.00, 'Sprzedaż', '2024-06-02 23:13:17', 58, '2024-06-02 23:22:19'),
(53, 58, 'Warszawa Łomianki', 'Bardzo duże mieszkanie, projekt w budowie. Samemu można urządzić mieszkanie. Zdjęcia poglądowe.', 750000.00, 'Sprzedaż', '2024-06-02 23:15:03', NULL, NULL),
(54, 58, 'Bytom Centrum', 'Bardzo zniszczone mieszkanie w Bytomiu. Zaniedbane do remontu generalnego. &#13;&#10;&#13;&#10;Nie r', 90000.00, 'Sprzedaż', '2024-06-02 23:17:34', 59, '2024-06-02 23:21:53'),
(55, 58, 'Chorzów Tysiąclecia', 'Duże mieszkanie udekorowane, blisko do parku rozrywki, świetna komunikacja.', 425000.00, 'Sprzedaż', '2024-06-02 23:19:42', NULL, NULL),
(58, 1, 'dsfhgh dfgdfs', 'xddddddddddddddddddddddddddd', 12435.00, 'Sprzedaż', '2024-06-03 17:04:49', 1, '2024-06-03 17:15:29'),
(59, 60, 'testdodania', 'dfgssdgffgdsgfsdsdgf', 2352345.00, 'Sprzedaż', '2024-06-03 18:17:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `property_images`
--

CREATE TABLE `property_images` (
  `idImage` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`idImage`, `property_id`, `imagePath`) VALUES
(95, 50, 'uploads/property_665cfb9130d7d8.48927106.jfif'),
(96, 50, 'uploads/property_665cfb9187f741.14947271.jpg'),
(97, 50, 'uploads/property_665cfb924437d2.12495744.jpg'),
(98, 50, 'uploads/property_665cfb925a94e7.04446321.jpg'),
(99, 50, 'uploads/property_665cfb92710e70.80081687.jpg'),
(104, 51, 'uploads/property_665cfc09d24a81.49659813.jfif'),
(105, 51, 'uploads/property_665cfc15b9c102.45656897.jpg'),
(106, 51, 'uploads/property_665cfc166e5291.82783923.jpeg'),
(107, 51, 'uploads/property_665cfc178a8e53.90516555.jpg'),
(108, 51, 'uploads/property_665cfc188a3947.72260681.jpg'),
(112, 53, 'uploads/property_665cfcf7f41566.91160204.jpg'),
(113, 53, 'uploads/property_665cfcf937c607.54836145.jpg'),
(114, 53, 'uploads/property_665cfcf93bc813.09075299.jpeg'),
(115, 53, 'uploads/property_665cfcf9404761.86588873.jpg'),
(116, 54, 'uploads/property_665cfd8ea78432.04215273.jpg'),
(117, 54, 'uploads/property_665cfd8f13f424.31133258.jpg'),
(118, 54, 'uploads/property_665cfd8f7530c0.19464093.jpg'),
(119, 55, 'uploads/property_665cfe0e6182a1.02101569.jfif'),
(120, 55, 'uploads/property_665cfe0ebc5b98.32616290.jpg'),
(121, 55, 'uploads/property_665cfe0f9e7d90.75905898.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `isActive` varchar(100) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`, `isActive`, `dateCreated`) VALUES
(1, 'user', 'yes', '2024-05-30 17:29:22'),
(2, 'moderator', 'yes', '2024-05-30 17:29:48');

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
(1, 1, '2024-06-03 18:20:00'),
(1, 2, '2024-05-30 18:36:43'),
(58, 1, '2024-06-02 23:03:04'),
(59, 2, '2024-06-02 23:03:37'),
(60, 1, '2024-06-03 17:53:12');

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
  `lastLogin` timestamp NULL DEFAULT NULL,
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `email`, `firstName`, `lastName`, `dateCreated`, `lastLogin`, `lastModifiedBy`, `lastModifiedDate`) VALUES
(1, '2741be847eacddcb3f8c835f0379fed574cb010185aee672e2aa99ecbb5c7715', '$2y$10$ZuEujzLt5Iv4Vzvzxq30a.EzYYDEoh8sox3ujzFEOp2qjNkeKnSka', 'kmaz@homehub.com', 'Kewin', 'M', '2024-05-30 18:36:43', '2024-06-03 18:20:16', 1, '2024-06-02 23:02:32'),
(58, '04f8996da763b7a969b1028ee3007569eaf3a635486ddab211d512c85b9df8fb', '$2y$10$uqkAz2nDWyFD.sXFQdVqiee/T1FOtKC6t5vl56eoo5bYWS9EuaoMa', 'user@edit.pl', 'User', 'user', '2024-06-02 23:03:03', '2024-06-02 23:22:06', 58, '2024-06-02 23:23:32'),
(59, 'cfde2ca5188afb7bdd0691c7bef887baba78b709aadde8e8c535329d5751e6fe', '$2y$10$ZfVynv7LCD/qsh9L9GzyMuoPkVveoA5zpugraObgm9OdETyrjk0N6', 'moderator@moderator.pl', 'Moderator', 'moderator', '2024-06-02 23:03:37', '2024-06-03 18:21:46', NULL, NULL),
(60, '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '$2y$10$BrtuYOJpJySgppsNXIvjv.BfEYTEyyfid9duO2Ja1tBspMlX1Zd/u', 'test@test.eu', '12345', '54321', '2024-06-03 17:53:12', '2024-06-03 18:17:08', 60, '2024-06-03 18:00:23');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`idUser`,`idProperty`);

--
-- Indeksy dla tabeli `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`idProperty`),
  ADD KEY `Properties_Users_FK` (`ownerId`),
  ADD KEY `Properties_Users_FKv1` (`lastModifiedBy`);

--
-- Indeksy dla tabeli `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `property_id` (`property_id`);

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
  ADD PRIMARY KEY (`idUser`,`idRole`);

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
  MODIFY `idProperty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `Properties_Users_FK` FOREIGN KEY (`ownerId`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Properties_Users_FKv1` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`idProperty`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Users_FK` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
