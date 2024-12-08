-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 04/12/2024 às 01:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_booktrack`
--
CREATE DATABASE IF NOT EXISTS `crud_booktrack` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crud_booktrack`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `p_year` int(4) NOT NULL,
  `pages` int(11) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `title`, `author`, `category`, `publisher`, `p_year`, `pages`, `language`) VALUES
(16, 'Dom Casmurro', 'Machado de Assis', 'Ficção', 'Garnier', 1899, 368, 'Português'),
(17, 'Grande Sertão: Veredas', 'João Guimarães Rosa', 'Literatura Brasileira', 'José Olympio', 1956, 612, 'Português'),
(18, 'O Primo Basílio', 'José de Alencar', 'Romance', 'Livraria José Olympio', 1852, 352, 'Português'),
(19, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 'Ficção', 'Nacional', 1881, 320, 'Português'),
(20, 'A Moreninha', 'Joaquim Manuel de Macedo', 'Romance', 'Lemann Editores', 1844, 208, 'Português'),
(21, 'O Cortiço', 'Aluisio Azevedo', 'Realismo', 'Francisco Alves', 1890, 400, 'Português');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
