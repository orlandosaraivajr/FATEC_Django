-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jun-2018 às 01:19
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

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`COD`, `nome`, `sobrenome`, `email`, `data`, `turma`, `descricao`) VALUES
(1, 'PROFESSOR', '2', 'ma@ma.com', '2018-05-30', 'Eng. da ComputaÃ§Ã£o', 'asd');

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
(69, '09876', '123', 'Junio Horniche', 123, 'juniohorniche@gmail.com', 'Secretaria', '', '', 'Selecionar...', 0, 0),
(74, '112312', '123', 'marrrrrrrrrrrrrrrrrrrrrrr', 123123, 'ma@ma.com', 'Secretaria', '', 'ara', 'Selecionar...', 123, 0),
(84, '12', '123', 'aluno', 12, 'asd@sda.com', 'Secretaria', '', '', 'Selecionar...', 12, 0),
(81, '123', '123', 'asda', 123, 'marianacardfutsal@live.com', 'Eng. da Computacao', '123', '123', 'Selecionar...', 123, 1),
(73, '1231', '123', 'marrrrrrrrrrrrrrrrrrrrrrr', 123, 'ma@ma.com', '', '', '', 'Selecionar...', 0, 2),
(63, '12312312345', '123', 'r', 123123, '', '', '', '', '', 0, 0),
(66, '12312365', '123', 'Junio Horniche', 123, 'juniohorniche@gmail.com', '', '', '', 'Selecionar...', 0, 2),
(91, '12319283193', '123', 'ALUNO', 1231, 'ma@ma.com', 'Eng. da Computacao', '13', '', 'Selecionar...', 0, 1),
(70, '1234', '1234', '1234', 12324, 'ma@ma.com', '', '1234', '', 'Selecionar...', 0, 2),
(64, '12345678900', '123', 'ro', 123123, '', '', '', '', '', 0, 0),
(88, '12395858', '123', 'FUNCIONARIO', 123, '111@2222', 'Secretaria', '', '', 'Selecionar...', 0, 0),
(89, '64586945867', '123', 'PROFESSOR', 1231, 'juniohorniche@gmail.com', 'Computacao', '', '', 'Selecionar...', 0, 2),
(65, '987654321', '123', 'ma', 123123, '', '', '', '', '', 0, 0);

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
  MODIFY `COD` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
