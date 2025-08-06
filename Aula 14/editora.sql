-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/08/2025 às 17:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `editora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `idlivro` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `paginas` int(11) NOT NULL,
  `preco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`idlivro`, `titulo`, `ano`, `autor`, `genero`, `paginas`, `preco`) VALUES
(1, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(2, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(3, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(4, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(5, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(6, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(7, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(8, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(9, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(10, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(11, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(12, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(13, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(14, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(15, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(16, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(17, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(18, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(19, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(20, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35),
(21, 'As Aventuras de Poliana', 2000, 'Jéssica Riba', 'Aventura', 236, 35);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idlivro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
