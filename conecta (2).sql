-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/10/2025 às 20:54
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
-- Banco de dados: `conecta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `moreta`
--

CREATE TABLE `moreta` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `moreta`
--

INSERT INTO `moreta` (`id`, `nome`, `celular`, `cpf`) VALUES
(1, 'enzo', '3232', '1222343'),
(2, 'qwqw', '1121', '3w333'),
(3, 'wqrr', '111', '333'),
(4, 'mateus', '22122432321', '1224255533');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `esportes` text NOT NULL,
  `musicas` text NOT NULL,
  `cursos` text NOT NULL,
  `palestras` text NOT NULL,
  `workshops` text NOT NULL,
  `teatro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quest`
--

INSERT INTO `quest` (`id`, `nome`, `esportes`, `musicas`, `cursos`, `palestras`, `workshops`, `teatro`) VALUES
(1, 'enzo', 'Futebol', 'Música Clássica', 'Bacharelados', 'Transformação Digital e Inovação.', 'Presencial', 'Teatro Musical'),
(2, 'mateus', 'Vôlei', 'Pop', 'Tecnólogos', 'Sustentabilidade e Responsabilidade Social.', 'Outro', 'Teatro de Fantoches/Marionetes'),
(3, 'antony', 'Basquete', 'Hip-Hop/Rap', 'Tecnólogos', 'Novas Profissões.', 'Presencial', 'Teatro de Vanguarda'),
(4, 'cauã', 'Futebol', 'Reggae', 'Tecnólogos', 'Inteligência Emocional.', 'Online', 'Teatro Monólogo'),
(5, 'arthur', 'Tênis', 'Reggae', 'Bacharelados', 'Novas Tecnologias e a IA.', 'Online', 'Teatro de Sombras'),
(6, 'gabriel', 'Natação', 'Música Eletrônica', 'Licenciaturas', 'Novas Profissões.', 'Híbrido', 'Teatro Monólogo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(1, 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_novos`
--

CREATE TABLE `usuarios_novos` (
  `Login` int(11) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `CEP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `moreta`
--
ALTER TABLE `moreta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `moreta`
--
ALTER TABLE `moreta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
