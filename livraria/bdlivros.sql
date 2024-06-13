-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/06/2024 às 20:18
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlivros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbautor`
--

CREATE TABLE `tbautor` (
  `codAutor` int(11) NOT NULL,
  `nomeAutor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbautor`
--

INSERT INTO `tbautor` (`codAutor`, `nomeAutor`) VALUES
(1, 'Júlio Verne'),
(2, 'Machado de Assis'),
(3, 'Clarice Lispector'),
(4, 'Monteiro Lobato'),
(5, 'Jorge Amado'),
(6, 'Ariano Suassuna');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbeditora`
--

CREATE TABLE `tbeditora` (
  `codEditora` int(11) NOT NULL,
  `nomeEditora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbeditora`
--

INSERT INTO `tbeditora` (`codEditora`, `nomeEditora`) VALUES
(1, 'Nova Fronteira '),
(2, 'Grupo Companhia das Letras'),
(3, 'Ciranda Cultural'),
(4, 'Rocco'),
(5, 'Livraria Garnier ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbgenero`
--

CREATE TABLE `tbgenero` (
  `codGenero` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbgenero`
--

INSERT INTO `tbgenero` (`codGenero`, `genero`) VALUES
(1, 'Terror'),
(2, 'Romance'),
(3, 'Ficção Juvenil'),
(4, 'Ação'),
(5, 'Ficção Científica'),
(6, 'Ficção Literária'),
(7, 'Drama'),
(8, 'Ficção'),
(9, 'Infantil'),
(10, 'Humor'),
(11, 'Ficção de Aventura');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblivro`
--

CREATE TABLE `tblivro` (
  `codLivro` int(11) NOT NULL,
  `nomeLivro` varchar(255) NOT NULL,
  `edicao` varchar(255) DEFAULT NULL,
  `codGenero` int(11) DEFAULT NULL,
  `codAutor` int(11) DEFAULT NULL,
  `codEditora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblivro`
--

INSERT INTO `tblivro` (`codLivro`, `nomeLivro`, `edicao`, `codGenero`, `codAutor`, `codEditora`) VALUES
(1, 'A Pena e a Lei', '', 7, 6, 1),
(2, 'Capitães da Areia', '', 2, 5, 2),
(3, 'Memórias da Emília', 'Primeira', 9, 4, 3),
(4, 'A hora da estrela', 'Especial', 2, 3, 4),
(5, 'Dom Casmurro', 'Primeira', 2, 2, 5),
(6, ' A volta ao mundo em 80 dias', 'Primeira', 11, 1, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbautor`
--
ALTER TABLE `tbautor`
  ADD PRIMARY KEY (`codAutor`);

--
-- Índices de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  ADD PRIMARY KEY (`codEditora`);

--
-- Índices de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  ADD PRIMARY KEY (`codGenero`);

--
-- Índices de tabela `tblivro`
--
ALTER TABLE `tblivro`
  ADD PRIMARY KEY (`codLivro`),
  ADD KEY `codGenero` (`codGenero`),
  ADD KEY `codAutor` (`codAutor`),
  ADD KEY `codEditora` (`codEditora`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbautor`
--
ALTER TABLE `tbautor`
  MODIFY `codAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  MODIFY `codEditora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  MODIFY `codGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tblivro`
--
ALTER TABLE `tblivro`
  MODIFY `codLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblivro`
--
ALTER TABLE `tblivro`
  ADD CONSTRAINT `tblivro_ibfk_1` FOREIGN KEY (`codGenero`) REFERENCES `tbgenero` (`codGenero`),
  ADD CONSTRAINT `tblivro_ibfk_2` FOREIGN KEY (`codAutor`) REFERENCES `tbautor` (`codAutor`),
  ADD CONSTRAINT `tblivro_ibfk_3` FOREIGN KEY (`codEditora`) REFERENCES `tbeditora` (`codEditora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
