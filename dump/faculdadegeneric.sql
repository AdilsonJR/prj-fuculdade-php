-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql762.umbler.com
-- Generation Time: 10-Dez-2017 às 14:06
-- Versão do servidor: 5.6.38-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculdadegeneric`
--
CREATE DATABASE IF NOT EXISTS `faculdadegeneric` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faculdadegeneric`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(100) DEFAULT NULL,
  `turno` varchar(100) DEFAULT NULL,
  `semestre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`, `turno`, `semestre`) VALUES
(2, 'Direito', 'Noturno', '8'),
(8, 'Fotografia', 'Diurno', '6'),
(12, 'AdministraÃ§Ã£o', 'Noturno', '6'),
(14, 'Enfermagem', 'Diurno', '10'),
(15, 'Medicina', 'Diurno', '10'),
(16, 'Filosofia', 'Noturno', '6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id_matricula` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `id_usuario`, `id_curso`) VALUES
(2, 1, 2),
(16, 1, 2),
(7, 20, 16),
(8, 21, 8),
(6, 22, 14),
(10, 25, 12),
(12, 32, 8),
(13, 33, 15),
(17, 40, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `rg` varchar(100) DEFAULT NULL,
  `ra` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `cpf`, `rg`, `ra`, `senha`, `role`) VALUES
(1, 'edivaldo      ', '278.449.614-73      ', '39.758.656-5', '159951', 'bf2082077950051c94deb58f6e2f8ed447b5e9f7', 'estudante'),
(6, 'adilson alves', '251.227.238-93', '31.694.765-9', '456', '5139fcb743565a93ba49568086a3376794cbc101', 'admin'),
(19, 'admin', '738.269.453-44', '16.494.909-4', '1', '61c239e5c7203949a78ff72615256c8db5dc04c4', 'professor'),
(20, 'jair', '834.515.048-98', '43.108.348-4', '2', 'df2cd7104536553afde9f7d66133d578eccb4606', 'estudante'),
(21, 'arnaldo', '604.481.611-76', '49.924.326-2', '3', 'b6a9bd1071d37d92d43c22131e0b16c8781d8b82', 'professor'),
(22, 'gersuh', '837.882.032-77', '37.594.913-6', '4', 'd3b049426bfa6b3891d3c2b7c78d3d68f5f0137d', 'estudante'),
(25, 'Matheus MÃ£ozinha', '223.667.257-87', '32.085.960-5', '1456', 'efdc4323d0d543ce613b23c0a33031269c72bc24', 'admin'),
(31, 'julios', '562.235.836-13', '13.740.360-4', '9', 'a472f29e029301730e3c19e0aabe92fde271205a', 'professor'),
(32, 'ederson', '461.490.725-33', '47.523.673-7', '12', '531c154c293dfa54ca8eb77046c68c1aad5eb1f8', 'professor'),
(33, 'Cleber', '128.574.764-00', '21.731.576-8', '1478', '907a60754e26f8303855c82acce11b354a9c7850', 'admin'),
(35, 'jubileu', '034.296.722-36', '17.697.746-6', '1234', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'gerente'),
(40, 'aluno', '4554', '54654', '4654', 'da537d7fb1ea87c4a52e453770227d120c033f10', 'estudante'),
(41, 'adimin', '123456', '123456', '123456', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`,`id_usuario`,`id_curso`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_curso_idx` (`id_curso`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `id_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
