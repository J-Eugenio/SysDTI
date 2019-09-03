-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Jul-2019 às 16:12
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `cnpj` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `campus`
--

INSERT INTO `campus` (`id`, `nome`, `cnpj`, `endereco`, `rua`, `numero`) VALUES
(1, 'Teste', 'Rua Raimunda Pereira de Melo', '1516516456', '630', '251'),
(2, 'Teste123', 'Rua Raimunda Pereira de Melo12', '1516516456123', '63012', '25122'),
(3, 'Teste123', 'Rua Raimunda Pereira de Melo12', '1516516456123', '63012', '25122'),
(4, 'Teste123123', 'Rua Raimunda Pereira de Melo12123', '1516516456123123', '63012123', '25122123'),
(5, 'Teste', '1516516456', 'Rua Raimunda Pereira de Melo', '630', '251');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
CREATE TABLE IF NOT EXISTS `equipamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(300) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `quantidade` int(255) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `vidaUtil` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FK_campus_equip FOREIGN KEY (`campus`)
  REFERENCES campus(`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamento`
--
--
-- Estrutura da tabela `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE IF NOT EXISTS `salas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `idCampus` int(11) NOT NULL,
  `idEquipamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FK_Campus FOREIGN KEY (`idCampus`)
  REFERENCES campus(`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `equipamento` (`id`, `identificador`, `Nome`, `quantidade`, `tipo`, `descricao`, `vidaUtil`, `campus`) VALUES
(1, 'dasda', 'asdasd', 12, 'asdad', 'asdasda', '1', ''),
(2, 'dasda', 'asdasd', 12, 'asdad', 'asdasda', '1', ''),
(3, 'dasda', 'Teste', 12, 'asdad', 'asdads', 'Restaurado', ''),
(4, 'asda', 'asda', 12, 'asda', 'asdasd', 'Manutenção', 'asdas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `email`, `cpf`, `nivel`) VALUES
(1, 'Teste12', 'Thiago', 'admin', 'admin@admin.com', '88998888877', '1'),
(5, 'Teste12', 'Thiago Alencar', 'admin2', 'admin2@admin.com', '888.777.999-88', '1'),
(6, '', '', '', '', '', 'Professor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
