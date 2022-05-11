-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 12:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idea_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id`, `data`, `email`, `cep`, `rua`, `bairro`, `nome`, `cpf`, `cidade`, `estado`, `situacao`) VALUES
(5, '2022-05-05 23:10:49', 'asd@gmail.com', '44054-45', 'Rua Barão de Macaúbas', 'Parque Ipê', 'asd@gmail.com', '860.692.655', 'Feira de Santana', 'BA', 'ATIVO'),
(6, '2022-05-05 23:13:03', 'asd@gmail.com', '44054-45', 'Rua Barão de Macaúbas', 'Parque Ipê', 'teste', '860.692.655', 'Feira de Santana', 'BA', 'ATIVO'),
(7, '2022-05-06 21:43:53', 'nascimento200408@gmail.com', '44054-45', 'Rua Barão de Macaúbas', 'Parque Ipê', 'teste', '860.692.655', 'Feira de Santana', 'BA', 'ATIVO'),
(8, '2022-05-06 21:45:28', 'nascimento200408@gmail.com', '44054-45', 'Rua Barão de Macaúbas', 'Parque Ipê', 'teste', '860.692.655', 'Feira de Santana', 'BA', 'ATIVO'),
(9, '2022-05-06 21:45:38', 'nascimento200408@gmail.com', '44054-45', 'Rua Barão de Macaúbas', 'Parque Ipê', 'teste', '860.692.655', 'Feira de Santana', 'BA', 'ATIVO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
