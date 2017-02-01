-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 11/01/2017 às 17:42
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `alapa359_drqualidade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aso`
--

CREATE TABLE IF NOT EXISTS `aso` (
  `id` int(11) NOT NULL,
  `dataRealizado` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataValidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeMedico` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `crmMedico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resutlado` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `funcionario` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `nomeCategoria` varchar(100) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nomeCategoria`, `idEmpresa`) VALUES
(1, 'teste', 3),
(2, 'teste', 3),
(3, 'teste 2', 3),
(4, 'Padaria', 5),
(5, 'Padaria', 0),
(6, 'Padaria', 3),
(7, 'Limpeza', 6),
(8, 'Padaria', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cnpj` varchar(100) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefone` varchar(80) DEFAULT NULL,
  `responsavel` varchar(60) DEFAULT NULL,
  `dataHoraCadastro` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cnpj`, `endereco`, `email`, `telefone`, `responsavel`, `dataHoraCadastro`) VALUES
(5, 'Superatacado Nova Era - Torquatro ', '000011111110911', 'Torquatro Tapajos', 'NE@MMVA.com.br', '99999-99999', 'Marcelo', NULL),
(6, 'Atack Cosme Ferreira', '03488542000143', 'Av. Cosme Ferreira, 3700, Coroado', 'atack@sememailXX', '(92) 3644-2020', 'Bruno', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `questao`
--

CREATE TABLE IF NOT EXISTS `questao` (
  `id` int(11) NOT NULL,
  `nomeQuestao` varchar(250) DEFAULT NULL,
  `idSubcategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `questao`
--

INSERT INTO `questao` (`id`, `nomeQuestao`, `idSubcategoria`) VALUES
(1, 'ad', 1),
(2, 'ad', 1),
(3, 'asdasd', 1),
(4, 'Verificar o recebimento dos produtos secos destinados a padaria e confeitaria na Doca de recebimentos de secos: transporte, conservação e validade.', 10),
(5, ' Verificar o recebimento dos produtos secos destinados à Padaria e Confeitaria na Doca de Recebimento de Secos: transporte, conservação, validade;', 10),
(6, ' Verificar o recebimento dos produtos perecíveis destinados à Padaria e Confeitaria na Doca de Recebimento de Perecíveis: transporte, conservação, validade, temperatura;', 10),
(7, ' Verificar a organização e higiene do Depósito de Secos;', 11),
(8, ' Verificar os produtos alimentares no Depósito de Secos: Validade, Armazenamento e Conservação;', 11),
(9, ' Verificar a presença de pragas e/ ou vetores no Depósito de Secos;', 11),
(10, ' Verificar a organização, higiene e temperatura da Câmara;', 11),
(11, ' Verificar produtos alimentares e manipulados na Câmara do setor: Validade, Armazenamento, Identificação, Temperatura;', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `rh`
--

CREATE TABLE IF NOT EXISTS `rh` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `empresa` varchar(80) DEFAULT NULL,
  `dataHoraCadastro` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `rh`
--

INSERT INTO `rh` (`id`, `nome`, `cpf`, `email`, `celular`, `endereco`, `setor`, `empresa`, `dataHoraCadastro`) VALUES
(1, 'Teste de nome', '00000000001', 'mmva@mmva.com.br', '(92)0000-2222', 'rua capitao braule pinto 651 bairro cidade nova conjunto manoa', 'Nada', '5', '26-12-2016 (19:37)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id` int(11) NOT NULL,
  `nomeSubcategoria` varchar(100) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nomeSubcategoria`, `idCategoria`) VALUES
(1, 'asd', 1),
(2, 'qw', 1),
(3, 'asdasda', 1),
(4, 'asdas', 1),
(5, 'asdas', 1),
(6, 'CAIO', 2),
(7, 'Produção', 4),
(8, 'Padaria recepção', 6),
(9, 'Materias disponíveis', 7),
(10, 'Recepção de mercadoria', 8),
(11, 'Armazenamento', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `login` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `tipoUsuario` varchar(10) DEFAULT NULL,
  `dataHoraCadastro` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `telefone`, `email`, `login`, `senha`, `endereco`, `empresa`, `tipoUsuario`, `dataHoraCadastro`) VALUES
(1, 'MMVA', '09597265000193', '(92) 4141-4021', 'mmva@mmva.com.br', 'adm', '2b60154a9f01d66eaafb6f72430be6e9', 'Rua Nikita Khruschev Nº 28 Quadra B Shangrila IV - Parque 10 Manaus', 'Minas Marketing Veterinária e Agronegócios Ltda', '0', '28-11-2016 09:23'),
(2, 'Caio César', '932.725.612-34', NULL, 'caiovega7@gmail.com', '932.725.612-34', '202cb962ac59075b964b07152d234b70', NULL, NULL, '3', '22-12-2016 10:51'),
(3, 'Zuleika Tavares de Almeida', '87611422391', '(92)981854707', 'zuleika.tavares@mmva.com.br', '87611422391', 'e10adc3949ba59abbe56e057f20f883e', 'rua capitao braule pinto 651 bairro cidade nova conjunto manoa', 'MMVA', '1', '22-12-2016 18:51'),
(4, 'Jeferson Mangueira', '444.311.098-46', NULL, 'jeferlydijusse@hotmail.com', '444.311.098-46', '4b3f1569c8a142e78ab1c904eb651f20', NULL, NULL, '3', '24-12-2016 12:39'),
(5, 'Sabrina ', '00899309240', NULL, 'sabrina.f.medeiros12@gmail.com', '00899309240', 'c762941521871eba2677f3ca8efa672e', NULL, NULL, '3', '26-12-2016 21:25'),
(6, 'Thiago Serrão Braule Pinto', '00108516237', NULL, 'thiago.pinto@mmva.com.br', '00108516237', 'd1dfa3bebb52a851ad3a458a37e75730', NULL, NULL, '3', '26-12-2016 21:32'),
(7, 'Carlos Eduardo Brasil de Castro', '013.926.252-03', NULL, 'carlos.eduardo@mmva.com.br', '013.926.252-03', '1508109f42814cdf360f76d2437e9476', NULL, NULL, '3', '27-12-2016 11:32'),
(8, 'cristiellen', '002.977.182-07', NULL, 'cristiellen@mmva.com.br', '002.977.182-07', '18e313c75981dd8740101a64a8b5017d', NULL, NULL, '3', '27-12-2016 17:44'),
(9, 'cristiellen dos santos marques', '002.977.182-07', '92981181446', 'cristiellen@mmva.com.br', '002.977.182-07', '18e313c75981dd8740101a64a8b5017d', 'Rua misushiro nº 176 Av. das torres', 'MMVA', '1', '28-12-2016 15:41');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aso`
--
ALTER TABLE `aso`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aso`
--
ALTER TABLE `aso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `questao`
--
ALTER TABLE `questao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `rh`
--
ALTER TABLE `rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
