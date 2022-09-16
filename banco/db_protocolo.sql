-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2022 às 20:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_protocolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `numero` int(11) NOT NULL,
  `solicitante` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `ano` year(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `dataCadastro` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `protocolo`
--

INSERT INTO `protocolo` (`numero`, `solicitante`, `descricao`, `email`, `ano`, `status`, `dataCadastro`) VALUES
(45, 'Rosana Mascena', 'dghdhfdhfdjhfdhfdjfdfh', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 11:00:27'),
(46, 'Rosana Mascena', 'hgdashjgfdjhsgkafhjhj', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:05:19'),
(47, 'Rosana Mascena', 'hgdashjgfdjhsgkafhjhj', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:07:20'),
(48, 'Rosana Mascena', 'hgdashjgfdjhsgkafhjhj', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:07:59'),
(49, 'Rosana Mascena', 'hhhhhhhhhhhhhhhhhh', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:19:48'),
(50, 'Rosana Mascena', 'kkkkkkkkkkkkkkkkkkkkk', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:29:54'),
(51, 'Rosana Mascena', 'kkkkkkkkkkkkkkkkkkkkk', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:30:47'),
(52, 'Rosana Mascena', 'kkkkkkkkkkkkkkkkkkkkk', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:31:27'),
(53, 'Rosana Mascena', 'kkkkkkkkkkkkkkkkkkkkk', 'rosana.mascena@gmail.com', 2022, 1, '2022-09-16 13:32:05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
