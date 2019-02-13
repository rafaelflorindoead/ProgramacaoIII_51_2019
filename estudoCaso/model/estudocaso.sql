-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 03:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudocaso`
--
CREATE DATABASE IF NOT EXISTS `estudocaso` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `estudocaso`;

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `fone` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `nome`, `email`, `fone`) VALUES
(1, 'Rafael Alves Florindo', 'rafael.florindo@unicesumar.edu.br', '(xx) xxxxx-xxxx'),
(2, 'Janaina Freitas', 'janaina.freitas@unicesumar.edu.br', '(xx) xxxxx-xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` int(11) NOT NULL,
  `anoEdicao` year(4) NOT NULL,
  `edicao` int(11) NOT NULL,
  `editora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`id`, `isbn`, `titulo`, `autor`, `anoEdicao`, `edicao`, `editora`) VALUES
(1, '12-3456-00-3456', 'Fundamentos de Redes de Computadores', 1, 2016, 1, 'Cesumar'),
(2, '12-3455-5678', 'ProgramaÃ§Ã£o III', 1, 2019, 1, 'Cesumar'),
(3, '111-22222-2222222', 'Engenharia', 2, 2017, 1, 'Cesumar'),
(4, '3456565645645645', 'Engenharia de requisitos', 2, 2018, 1, 'Cesumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
