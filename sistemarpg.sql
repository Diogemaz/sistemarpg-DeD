-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2020 às 20:24
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemarpg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armadura`
--

CREATE TABLE `armadura` (
  `nome` varchar(50) NOT NULL,
  `preco` int(4) NOT NULL,
  `class` int(3) NOT NULL,
  `forca` int(2) DEFAULT NULL,
  `furtividade` int(1) NOT NULL,
  `peso` double(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `armadura`
--

INSERT INTO `armadura` (`nome`, `preco`, `class`, `forca`, `furtividade`, `peso`) VALUES
('Acolchoada', 5, 11, NULL, 1, 4.0),
('Brunea', 50, 14, NULL, 1, 22.5),
('Camisão de Malha', 30, 13, NULL, 0, 10.0),
('Cota de anéis', 30, 15, NULL, 1, 20.0),
('Cota de malha', 75, 16, 13, 1, 27.5),
('Cota de talas', 200, 17, 15, 1, 30.0),
('Couro', 10, 11, NULL, 0, 5.0),
('Couro Batido', 45, 12, NULL, 0, 6.5),
('Gibão de Peles', 10, 12, NULL, 0, 6.0),
('Meia-Armadura', 750, 15, NULL, 1, 20.0),
('Peitoral', 400, 14, NULL, 0, 10.0),
('Placas', 1500, 18, 15, 1, 32.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `armas`
--

CREATE TABLE `armas` (
  `nome_arma` varchar(50) NOT NULL,
  `preco` int(4) NOT NULL,
  `dano` varchar(50) NOT NULL,
  `peso` double(2,1) NOT NULL,
  `propriedades` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `armas`
--

INSERT INTO `armas` (`nome_arma`, `preco`, `dano`, `peso`, `propriedades`) VALUES
('Adaga', 2, '1d4 perfurante', 0.5, 'Acuidade, leve, arremesso (distância 6/18)'),
('Alabarda', 20, '1d10 cortante', 3.0, 'Pesada, alcance, duas mãos'),
('Arco Curto', 25, '1d6 perfurante', 1.0, 'Munição (distância 24/96), duas mãos'),
('Arco Longo', 50, '1d8 perfurante', 1.0, 'Munição (distância 45/180), pesada, duas mãos'),
('Azagaia', 5, '1d6 perfurante', 1.0, 'Arremesso (distância 9/36)'),
('Besta de Mão', 75, '1d6 perfurante', 1.5, 'Munição (distância 9/36), leve, recarga'),
('Besta Pesada', 50, '1d10 perfurante', 4.5, 'Munição (distância 30/120), pesada, recarga, duas mãos'),
('Beste Leve', 25, '1d8 perfurante', 2.5, 'Munição (distância 24/96), recarga, duas mãos'),
('Bordão', 2, '1d6 concussão', 2.0, 'Versátil (1d8)'),
('Chicote ', 2, '1d4 cortante', 1.5, 'Acuidade, alcance'),
('Cimitarra', 25, '1d6 cortante', 1.5, 'Acuidade, leve'),
('Clava Grande', 2, '1d8 concussão', 5.0, 'Pesada, duas mãos'),
('Dardo', 5, '1d4 perfurante', 0.1, 'Acuidade, arremesso (distância 6/18)'),
('Espada curta', 10, '1d6 perfurante', 1.0, 'Acuidade, leve'),
('Espada Grande', 50, '2d6 cortante', 3.0, 'Pesada, duas mãos'),
('Espada Longa', 15, '1d8 cortante', 1.5, 'Versátil (1d10)'),
('Foice Curta', 1, '1d4 cortante', 1.0, 'Leve'),
('Funda', 1, '1d4 concussão', 0.0, 'Munição (distância 9/36)'),
('Glaive', 20, '1d10 cortante', 3.0, 'Pesada, alcance, duas mãos'),
('Lança', 1, '1d6 perfurante', 1.5, 'Arremesso (distância 6/18), versátil (1d8)'),
('Lança de Montaria', 10, '1d12 perfurante', 3.0, 'Alcance, especial'),
('Lança Longa', 5, '1d10 perfurante', 4.0, 'Pesada, alcance, duas mãos'),
('Maça', 5, '1d6 concussão', 2.0, '-'),
('Maça Estrela', 15, '1d8 perfurante', 2.0, '-'),
('Machadinha', 5, '1d6 cortante', 1.0, 'Leve, arremesso (distância 6/18)'),
('Machado de Batalha', 10, '1d8 cortante', 2.0, 'Versátil (1d10)'),
('Machado Grande', 30, '1d12 cortante', 3.5, 'Pesada, duas mãos'),
('Malho', 10, '2d6 concussão', 5.0, 'Pesada, duas mãos'),
('Mangual', 10, '1d8 concussão', 1.0, '-'),
('Martelo de Guerra', 15, '1d8 concussão', 1.0, 'Versátil (1d10)'),
('Martelo Leve', 2, '1d4 concussão', 1.0, 'Leve, arremesso (distância 6/18)'),
('Picareta de Guerra', 5, '1d8 perfurante', 1.0, '-'),
('Porrete', 1, '1d4 concussão', 1.0, 'Leve'),
('Rapieira', 25, '1d8 perfurante', 1.0, 'Acuidade'),
('Rede', 1, '-', 1.5, 'Especial, arremesso (distância 1,5/4,5)'),
('Tridente', 5, '1d6 perfurante', 2.0, 'Arremesso (6/18), versátil (1d8)'),
('Zarabatana', 10, '1 perfurante', 0.5, 'Munição (distância 7,5/30), recarga');

-- --------------------------------------------------------

--
-- Estrutura da tabela `armaspersonagem`
--

CREATE TABLE `armaspersonagem` (
  `id_personagem` int(10) NOT NULL,
  `armadura_atual` varchar(30) DEFAULT NULL,
  `arma` varchar(30) DEFAULT NULL,
  `arma2` varchar(30) DEFAULT NULL,
  `arma3` varchar(30) DEFAULT NULL,
  `arma4` varchar(30) DEFAULT NULL,
  `itens` text DEFAULT NULL,
  `escudo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `armaspersonagem`
--

INSERT INTO `armaspersonagem` (`id_personagem`, `armadura_atual`, `arma`, `arma2`, `arma3`, `arma4`, `itens`, `escudo`) VALUES
(5, 'Gibão de Peles', 'Espada Grande', 'Clava Grande', 'Bordão', 'Funda', 'BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB', 1),
(6, 'nenhuma', 'Bordão', 'Espada curta', 'Azagaia', 'nenhuma', 'Roubas comum, algibeira, colar.', 0),
(7, 'Gibão de Peles', 'Funda', 'Bordão', 'Machado de Batalha', 'nenhuma', 'Pele de animais,colar dente de trigre.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pericias`
--

CREATE TABLE `pericias` (
  `id_pericias` int(100) NOT NULL,
  `id_personagem` int(100) NOT NULL,
  `acrobacia` int(1) DEFAULT NULL,
  `ade_animais` int(1) DEFAULT NULL,
  `arcanismo` int(1) DEFAULT NULL,
  `atletismo` int(1) DEFAULT NULL,
  `atuacao` int(1) DEFAULT NULL,
  `enganacao` int(1) DEFAULT NULL,
  `furtividade` int(1) DEFAULT NULL,
  `historia` int(1) DEFAULT NULL,
  `intimidacao` int(1) DEFAULT NULL,
  `intuicao` int(1) DEFAULT NULL,
  `investigacao` int(1) DEFAULT NULL,
  `medicina` int(1) DEFAULT NULL,
  `natureza` int(1) DEFAULT NULL,
  `percepcao` int(1) DEFAULT NULL,
  `persuasao` int(1) DEFAULT NULL,
  `prestidigitacao` int(1) DEFAULT NULL,
  `religiao` int(1) DEFAULT NULL,
  `sobrevivencia` int(1) DEFAULT NULL,
  `equipamento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pericias`
--

INSERT INTO `pericias` (`id_pericias`, `id_personagem`, `acrobacia`, `ade_animais`, `arcanismo`, `atletismo`, `atuacao`, `enganacao`, `furtividade`, `historia`, `intimidacao`, `intuicao`, `investigacao`, `medicina`, `natureza`, `percepcao`, `persuasao`, `prestidigitacao`, `religiao`, `sobrevivencia`, `equipamento`) VALUES
(9, 5, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 'BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB'),
(10, 6, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 'Idiomas: comum, elfico.\r\n\r\nferramenta de artezão.'),
(11, 7, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 'Idiomas: orc e comum\r\n\r\nferramentas de artesão, ferramentas de caça.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `nivel` int(2) NOT NULL,
  `armadura` int(2) NOT NULL,
  `iniciativa` int(2) NOT NULL,
  `deslocamento` int(2) NOT NULL,
  `bonus` int(2) NOT NULL,
  `forca` int(2) NOT NULL,
  `destreza` int(2) NOT NULL,
  `constituicao` int(2) NOT NULL,
  `inteligencia` int(2) NOT NULL,
  `sabedoria` int(2) NOT NULL,
  `carisma` int(2) NOT NULL,
  `vida` int(10) NOT NULL,
  `vida_atual` int(10) NOT NULL,
  `mana` int(10) NOT NULL,
  `mana_atual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`id_personagem`, `nome`, `class`, `nivel`, `armadura`, `iniciativa`, `deslocamento`, `bonus`, `forca`, `destreza`, `constituicao`, `inteligencia`, `sabedoria`, `carisma`, `vida`, `vida_atual`, `mana`, `mana_atual`) VALUES
(6, 'Diogenes', 'Monge', 10, 12, 2, 9, 4, 16, 15, 14, 13, 11, 9, 70, 70, 5, 5),
(7, 'Yuri', 'Bárbaro', 10, 13, 1, 9, 4, 17, 12, 15, 8, 10, 13, 85, 85, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `armadura`
--
ALTER TABLE `armadura`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `armas`
--
ALTER TABLE `armas`
  ADD PRIMARY KEY (`nome_arma`);

--
-- Índices para tabela `armaspersonagem`
--
ALTER TABLE `armaspersonagem`
  ADD PRIMARY KEY (`id_personagem`);

--
-- Índices para tabela `pericias`
--
ALTER TABLE `pericias`
  ADD PRIMARY KEY (`id_pericias`);

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pericias`
--
ALTER TABLE `pericias`
  MODIFY `id_pericias` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
