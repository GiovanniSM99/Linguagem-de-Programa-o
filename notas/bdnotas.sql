-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/06/2024 às 20:53
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
-- Banco de dados: `bdnotas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `RAAluno` int(11) NOT NULL,
  `nomeAluno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbaluno`
--

INSERT INTO `tbaluno` (`RAAluno`, `nomeAluno`) VALUES
(1, 'Giovanni'),
(2, 'Gabriel Tiggi'),
(3, 'Nayara');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdisciplina`
--

CREATE TABLE `tbdisciplina` (
  `codDisciplina` int(11) NOT NULL,
  `disciplina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdisciplina`
--

INSERT INTO `tbdisciplina` (`codDisciplina`, `disciplina`) VALUES
(1, 'GSO'),
(2, 'LP'),
(3, 'MF');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnota`
--

CREATE TABLE `tbnota` (
  `codNota` int(11) NOT NULL,
  `RAAluno` int(11) DEFAULT NULL,
  `codProfessor` int(11) DEFAULT NULL,
  `codDisciplina` int(11) DEFAULT NULL,
  `nota` varchar(255) NOT NULL,
  `faltas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnota`
--

INSERT INTO `tbnota` (`codNota`, `RAAluno`, `codProfessor`, `codDisciplina`, `nota`, `faltas`) VALUES
(1, 1, 1, 2, '10', '8'),
(2, 1, 2, 1, '8', '4'),
(3, 1, 3, 3, '9', '2'),
(4, 2, 1, 2, '9', '6'),
(5, 1, 2, 1, '10', '0'),
(6, 2, 3, 3, '7', '10'),
(7, 3, 1, 2, '8', '6'),
(8, 3, 2, 1, '6', '12'),
(9, 3, 3, 3, '10', '4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbprofessor`
--

CREATE TABLE `tbprofessor` (
  `codProfessor` int(11) NOT NULL,
  `nomeProfessor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbprofessor`
--

INSERT INTO `tbprofessor` (`codProfessor`, `nomeProfessor`) VALUES
(1, 'Rovilson'),
(2, 'Raphael'),
(3, 'James');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`RAAluno`);

--
-- Índices de tabela `tbdisciplina`
--
ALTER TABLE `tbdisciplina`
  ADD PRIMARY KEY (`codDisciplina`);

--
-- Índices de tabela `tbnota`
--
ALTER TABLE `tbnota`
  ADD PRIMARY KEY (`codNota`),
  ADD KEY `RAAluno` (`RAAluno`),
  ADD KEY `codProfessor` (`codProfessor`),
  ADD KEY `codDisciplina` (`codDisciplina`);

--
-- Índices de tabela `tbprofessor`
--
ALTER TABLE `tbprofessor`
  ADD PRIMARY KEY (`codProfessor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `RAAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbdisciplina`
--
ALTER TABLE `tbdisciplina`
  MODIFY `codDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbnota`
--
ALTER TABLE `tbnota`
  MODIFY `codNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbprofessor`
--
ALTER TABLE `tbprofessor`
  MODIFY `codProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbnota`
--
ALTER TABLE `tbnota`
  ADD CONSTRAINT `tbnota_ibfk_1` FOREIGN KEY (`RAAluno`) REFERENCES `tbaluno` (`RAAluno`),
  ADD CONSTRAINT `tbnota_ibfk_2` FOREIGN KEY (`codProfessor`) REFERENCES `tbprofessor` (`codProfessor`),
  ADD CONSTRAINT `tbnota_ibfk_3` FOREIGN KEY (`codDisciplina`) REFERENCES `tbdisciplina` (`codDisciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
