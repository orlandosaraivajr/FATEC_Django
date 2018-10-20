-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2018 às 04:40
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
(50, '123123', '123', 'PROFESSOR', 123123, '123@sd.com', '', '1231', '123', 'PB', 123, 3),
(53, '123131213', '123', 'FUNCIONARIO', 12313, 'asd@sda.com', 'Secretaria', 'asdasd', 'qewqeq', 'PI', 23132, 0),
(59, '12313123', '123', 'ALUNO', 1313, 'ma@ma.com', 'Eng. da Computacao', '1231', '12', 'PE', 12, 1),
(62, '40277401810', '123', 'ALUNO2', 450701633, 'marianacardfutsal@live.com', 'Eng. da Computacao', 'asdad', 'araras', 'SP', 242, 1),
(1, '41571889850', '123', 'Junio Horniche', 450701633, 'juniohorniche@gmail.com', 'Eng. da Computacao', 'Sitio', 'Leme', 'sp', 1, 1);

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
