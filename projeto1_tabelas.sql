-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2025 às 00:23
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
-- Banco de dados: `projeto1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `albuns`
--

CREATE TABLE `albuns` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `artista` varchar(150) NOT NULL,
  `ano` year(4) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `imagem_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `albuns`
--

INSERT INTO `albuns` (`id`, `titulo`, `artista`, `ano`, `genero`, `imagem_url`) VALUES
(2, 'sla', 'numsei', '2027', 'jazz', 'https://rollingstone.com.br/wp-content/uploads/2025/08/limp-bizkit-anuncia-show-unico-no-brasil-confira-data-ingressos-e-mais_uv134220896.jpg'),
(4, 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', '2021', 'aaaaaaaaaaaa', 'https://timelinecovers.pro/facebook-cover/download/linkin-park-facebook-cover.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `cidade`, `estado`) VALUES
(1, 'arthur', 'JP', 'PB'),
(2, 'teste', 'teste2', 'teste22222'),
(3, 'daniel brandão', 'JP', 'PB');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'arthur', 'aaaaaaaaaaa@gmail.com', 'mensagem de teste'),
(2, 'aaaaaaaa', 'aaaaaaaaaaa@aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa'),
(3, 'numero2', 'numero2@gmnail.com', 'teste2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `pagina_titulo` varchar(100) NOT NULL,
  `pagina_descricao` varchar(255) DEFAULT NULL,
  `pagina_url` varchar(50) NOT NULL,
  `pagina_conteudo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paginas`
--

INSERT INTO `paginas` (`id`, `pagina_titulo`, `pagina_descricao`, `pagina_url`, `pagina_conteudo`) VALUES
(1, 'Quem Somos', 'Dados sobre a empresa que serão exibidos na página.', 'quemsomos', 'Aqui vai o texto inicial sobre a empresa...testetestetestando12345678910'),
(2, 'teste', 'pequeno teste', 'teste.com', 'apenas testando a pagina');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `albuns`
--
ALTER TABLE `albuns`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagina_url` (`pagina_url`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `albuns`
--
ALTER TABLE `albuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
