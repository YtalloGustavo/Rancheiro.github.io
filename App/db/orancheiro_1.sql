-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 21:37
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
-- Banco de dados: `orancheiro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `nomeCardapio` varchar(100) NOT NULL,
  `cafeDaManha` varchar(255) NOT NULL,
  `almoco` varchar(100) NOT NULL,
  `jantar` varchar(100) NOT NULL,
  `ceia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `nomeCardapio`, `cafeDaManha`, `almoco`, `jantar`, `ceia`) VALUES
(1, 'Cardápio - 28/05/2024', 'Café, Pão, Ovo, Queijo', 'Feijão, Arroz, Carne assada e suco', 'Macarronada e suco', 'Joelho'),
(2, 'Cardápio - 28/05/2024', 'Café, Pão, Ovo, Queijo', 'Feijão, Arroz, Carne assada e suco', 'Macarronada e suco', 'Joelho'),
(3, 'Cardápio - 28/05/2024', 'Café, Pão, Ovo, Queijo', 'Feijão, Arroz, Carne assada e suco', 'Macarronada e suco', 'Joelho'),
(4, 'teste', 'aa', 'aa', 'aa', 'aa'),
(5, 'teste', 'aa', 'aa', 'aa', 'aa'),
(6, 'teste', 'aa', 'aa', 'aa', 'aa'),
(7, 'teste', 'aa', 'aa', 'aa', 'aa'),
(8, 'teste voltando pro inserir cardapio', 'Café, Pão, Ovo, Queijo', 'Feijão, Arroz, Carne assada e suco', 'Macarronada e suco', 'Joelho'),
(9, 'Teste de cardapio', 'aaaaaa', 'aaasdasd', 'asdasdfa', 'asdadasd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `companhia`
--

CREATE TABLE `companhia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `qtdMilitares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `nomeDeGuerra` varchar(100) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `postoGraduacao` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `telefone` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `statusUsuario` decimal(10,0) NOT NULL,
  `arranchado` decimal(10,0) NOT NULL,
  `idCompanhia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuariorancho`
--

CREATE TABLE `usuariorancho` (
  `id` int(11) NOT NULL,
  `nomeDeGuerra` varchar(100) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `telefone` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `postoGraduacao` varchar(100) NOT NULL,
  `companhia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuariorancho`
--

INSERT INTO `usuariorancho` (`id`, `nomeDeGuerra`, `nome`, `cpf`, `telefone`, `postoGraduacao`, `companhia`) VALUES
(1, 'Gustavo', 'Gustavo da Silva', 01234567899, 81995604932, '6', '3'),
(2, 'Ytallo', 'Ytallo da silva', 12345678933, 81995604932, '6', '4');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `companhia`
--
ALTER TABLE `companhia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCompanhia` (`idCompanhia`);

--
-- Índices de tabela `usuariorancho`
--
ALTER TABLE `usuariorancho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `companhia`
--
ALTER TABLE `companhia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuariorancho`
--
ALTER TABLE `usuariorancho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `relatorio`
--
ALTER TABLE `relatorio`
  ADD CONSTRAINT `relatorio_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCompanhia`) REFERENCES `companhia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
