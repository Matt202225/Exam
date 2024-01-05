-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 05:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songs`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song_lyrics` longtext NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `song_lyrics`, `date_created`) VALUES
(2, 'Hello\'s', 'Adele', 'Hello, it\'s me\r\nI was wondering if after all these years you\'d like to meet\r\nTo go over everything\r\nThey say that time\'s supposed to heal ya, but I ain\'t done much healing\r\nHello, can you hear me?\r\nI\'m in California dreaming about who we used to be\r\nWhen we were younger and free\r\nI\'ve forgotten how it felt before the world fell at our feet\r\nThere\'s such a difference between us\r\nAnd a million miles\r\nHello from the other side\r\nI must\'ve called a thousand times\r\nTo tell you I\'m sorry for everything that I\'ve done\r\nBut when I call, you never seem to be home\r\nHello from the outside\r\nAt least I can say that I\'ve tried\r\nTo tell you I\'m sorry for breaking your heart\r\nBut it don\'t matter, it clearly doesn\'t tear you apart anymore\r\nHello, how are you?\r\nIt\'s so typical of me to talk about myself, I\'m sorry\r\nI hope that you\'re well\r\nDid you ever make it out of that town where nothing ever happened?\r\nIt\'s no secret that the both of us\r\nAre running out of time\r\nSo hello from the other side (other side)\r\nI must\'ve called a thousand times (thousand times)\r\nTo tell you I\'m sorry for everything that I\'ve done\r\nBut when I call, you never seem to be home\r\nHello from the outside (outside)\r\nAt least I can say that I\'ve tried (I\'ve tried)\r\nTo tell you I\'m sorry for breaking your heart\r\nBut it don\'t matter, it clearly doesn\'t tear you apart anymore\r\nOoh (lows, lows, lows, lows), anymore\r\n(Highs, highs, highs, highs)\r\nOoh (lows, lows, lows, lows), anymore\r\n(Highs, highs, highs, highs)\r\nOoh (lows, lows, lows, lows), anymore\r\n(Highs, highs, highs, highs)\r\nAnymore (lows, lows, lows, lows)\r\nHello from the other side (other side)\r\nI must\'ve called a thousand times (thousand times)\r\nTo tell you I\'m sorry for everything that I\'ve done\r\nBut when I call, you never seem to be home\r\nHello from the outside (outside)\r\nAt least I can say that I\'ve tried (I\'ve tried)\r\nTo tell you I\'m sorry for breaking your heart\r\nBut it don\'t matter, it clearly doesn\'t tear you apart anymore', '2024-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
