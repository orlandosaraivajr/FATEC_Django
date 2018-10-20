-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 01:10
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `COD` int(5) NOT NULL,
  `nome` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sobrenome` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `turma` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL,
  `CPF` varchar(11) COLLATE utf8_bin NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `rg` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `turma` varchar(30) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(50) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` varchar(30) COLLATE utf8_bin NOT NULL,
  `numero` int(5) NOT NULL,
  `acesso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `CPF`, `PASSWORD`, `nome`, `rg`, `email`, `turma`, `endereco`, `cidade`, `estado`, `numero`, `acesso`) VALUES
(4, '0991714385', '123', 'Maria', 0, 'mariana@qwe', '', '', '', '', 0, 0),
(7, '09917143858', '1234', 'Maria', 0, 'mariana@qwe', '', 'RADAS', 'ARARAS', 'SP', 12, 0),
(3, '4027740181', '123', 'MARIANA', 0, 'mariana@qwe', '', '', '', '', 0, 0),
(9, '40277401810', '123', 'alex', 0, 'mariana@qwe', 'Eng. da ComputaÃ§Ã£o', 'RADAS', 'ARARAS', 'SP', 1231, 0),
(1, '41571889850', '123', 'Junio Horniche', 450701633, 'juniohorniche@gmail.com', 'Eng. da Computacao', 'Sitio', 'Leme', 'sp', 1, 1),
(11, '43533774856', '123', 'Alex ', 23432532, 'all.alex1300@gmail.com', 'Eng. da Computacao', 'RADAS', 'ARARAS', 'SP', 123, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`COD`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CPF`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `COD` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
