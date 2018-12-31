-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 05:13 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginposs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admfin@adimn.com', '123'),
(2, 'omkogm@cpmco.com', '123123'),
(3, 'omkogm@cpmco.com', '$2y$10$7GsBjqW4LuGzu1UGhk7xK.pGXRWaAoWWqtrxhlVcgtQU9XTCwVH4q'),
(4, 'omkgggom@cpmco.com', '$2y$10$xdTb0w7fp/de9U.iD0d7j.2WQdN4sws7PnhsUDlTHkSDYKbZOHZlm'),
(5, 'omkgggom@cpmco.com', '$2y$10$GRourppo1XvR/3NEnEwlR.anMhzXbRu9z3wEHFvdRrkKAn6s6I/p6'),
(6, 'korisnikide@mail.com', '$2y$10$xwoeZCSUNbOm5FHNJES65.rY0RMx88LmKk7O8wOYhZOmXfNii4lE.'),
(7, 'korisnikdgun@mail.com', '$2y$10$0U5Hev8AOex11bZQGI2xOeYFXtrqyB9QwEslzzWJ6AnWxHY9Au4.u'),
(8, 'email@c.com', '$2y$10$kKrjLl7yYsSm5pZ.JROKyObBbFn1NiaNckjWvL3vADiLMDsenAlOG'),
(9, 'email@c.com', '$2y$10$MUIuJlc4aTh0rEZX.qggYedsdnXMR/zS6jGb6T582hz.Irb74ufK2'),
(10, 'vo@m.com', '$2y$10$IF3e/p7QaNDZ1ExqkZwS9uQIaUvTEuhPegz0RrSiOfMCmRgmAf/f2'),
(11, 'omkofgm@cpmco.com', '$2y$10$YD38wEjop9Q6G5E/c55Em.bSBr93e7G8qcipSemgc6rblw2x/U6JG'),
(12, 'im@gg.com', '$2y$10$QMNHhKAm2AKUg4cELgY7pewJFJkPbjUpMHollI3DjG0I1ag5weGKi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
