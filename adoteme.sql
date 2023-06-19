-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Maio-2023 às 11:27
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adota`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `idade` int NOT NULL,
  `raca` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `cpf_usuario` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cpf_usuario` (`cpf_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `especie`, `idade`, `raca`, `descricao`, `foto`, `cpf_usuario`) VALUES
(1, 'lukito', 'Cobra', 12, 'coral', 'não sabe o que e uma variável', 'uploads/lukito.jpeg', '12'),
(2, 'kevin', 'Outra', 22, 'ruim', 'não da fila', 'uploads/kevin.jpeg', '12'),
(3, 'bibika', 'Gato', 2, 'coral', 'castrado', 'uploads/cachorro5.jpg', '12'),
(5, 'dodo', 'Cobra', 23, 'cascavel', 'não morde', 'uploads/ADOTE.ME.png', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `sobrenome`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `telefone`, `email`, `senha`) VALUES
('12', 'Alvaro', 'j', '55112', 'rua', 'b', 'a ', 'pe', '82', 'alvarojose125@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
('10854114432', 'milleide', 'eduarda', '53605605', 'rua minervino mota nunes', 'tabatinga', 'igarassu', 'pe', '81994252344', 'milleideeduarda16@hotmail.com', 'd3ce02146fd3b42904809a62fb2f8dcf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
