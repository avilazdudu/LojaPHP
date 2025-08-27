-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/08/2025 às 17:15
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
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`) VALUES
(1, 'Alimentos'),
(2, 'Celulares'),
(3, 'Móveis');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(300) NOT NULL,
  `ImagemURL` varchar(255) NOT NULL,
  `Preco` float(10,2) NOT NULL,
  `CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `ImagemURL`, `Preco`, `CategoriaID`) VALUES
(1, 'iPhone 11 Apple (128GB) Branco tela 6,1\" Câmera 12MP iOS', 'Grave vídeos 4K, faça belos retratos e capture paisagens inteiras com o novo sistema de câmera dupla. Tire fotos incríveis com pouca luz usando o modo Noite. Veja cores fiéis em fotos, vídeos e jogos na tela.', 'https://americanas.vtexassets.com/arquivos/ids/30034533/1611324805_2SZ.jpg?v=638792858193770000', 1249.90, 2),
(2, 'Smartphone Motorola Moto G34 5G 128GB Tela 6.5\" 4GB RAM Câmera 50MP + 2MP Selfie 16MP - Azul', 'Eleve o seu nível de conexão com o Smartphone Motorola Moto G34 5G 128GB Tela 6.5\" 4GB RAM Câmera 50MP + 2MP Selfie 16MP Azul. Versátil, ele oferece excelente desempenho e um design incomparável.', 'https://americanas.vtexassets.com/arquivos/ids/481893/7481509560_1SZ.jpg?v=638750827587800000\r\n', 990.49, 2),
(3, 'Smartphone Nokia 5.4 128GB 4GB ram NK025 - Azul', 'Smartphone Nokia 5.4 azul com 128GB de memória e 4GB RAM. Destaque para a câmera quádrupla de 48MP com gravação cinematográfica e a bateria que dura até 2 dias. Possui tela de 6,39\" HD+, processador Snapdragon 662 e vem pronto para o Android 11+. Inclui capa e película.', 'https://americanas.vtexassets.com/arquivos/ids/30039236/4879842611_1_xlarge.jpg?v=638792871474200000', 779.90, 2),
(4, 'KitKat Chocolate ao Leite Nestlé 41,5g', 'O melhor break de todos! Impossível não se deliciar com essa clássica combinação de chocolate ao leite com wafer.', 'https://americanas.vtexassets.com/arquivos/ids/475725/44414154_1SZ.jpg?v=638840430726800000', 3.49, 1),
(5, 'Salgadinho Cheetos Onda Requeijão Elma Chips 105g', 'Feito à base de milho o Salgadinho de Milho Cheetos Onda Requeijão Elma Chips com 105g é assado e sempre entrega uma explosão de sabor.', 'https://americanas.vtexassets.com/arquivos/ids/490755/7490812349_2SZ.jpg?v=638844841474270000', 9.99, 1),
(6, 'Salgadinho Doritos Queijo Nacho 75g', 'O Salgadinho Doritos Queijo Nacho 75g é a tortilha chips número 1 do mundo. ', 'https://americanas.vtexassets.com/arquivos/ids/438345/7490812460_2SZ.jpg?v=638844843821500000', 9.99, 1),
(7, 'Guarda-Roupa Solteiro Berlim 2 PT Preto', 'Indispensável para a boa organização da casa, o Guarda-Roupa Berlim vai encher sua rotina de funcionalidade e deixar seu dia a dia mais prático.', 'https://americanas.vtexassets.com/arquivos/ids/31535537/Guarda-Roupa-Solteiro-Berlim-2-PT-Preto.jpg?v=638838880005900000', 941.99, 3),
(8, 'Conjunto com 2 Mesas Laterais Slim Cinamomo', 'Aquele cantinho ao lado do sofá ou poltrona na sua sala de estar pode ser um ótimo aliado na hora de organizar e apoiar diversos itens.', 'https://americanas.vtexassets.com/arquivos/ids/35785828/Conjunto-com-2-Mesas-Laterais-Slim-Cinamomo.jpg?v=638899974771770000\r\n', 303.90, 3),
(9, 'Cama Box Conjugado Casal Ortobom Union Estrutura Ortopédica (138x188x43)', 'Conjunto Cama Box + Colchão Conjugado Ortobom Ortopédico Union Selado inmetro - Casal - 1,38x1,88', 'https://americanas.vtexassets.com/arquivos/ids/486358/120025481_1_xlarge.jpg?v=638750827980730000', 924.90, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
