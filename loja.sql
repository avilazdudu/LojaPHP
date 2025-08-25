-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/08/2025 às 01:11
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
  `Preco` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `ImagemURL`, `Preco`) VALUES
(1, 'iPhone 11 Apple (128GB) Branco tela 6,1\" Câmera 12MP iOS', 'Grave vídeos 4K, faça belos retratos e capture paisagens inteiras com o novo sistema de câmera dupla. Tire fotos incríveis com pouca luz usando o modo Noite. Veja cores fiéis em fotos, vídeos e jogos na tela.', 'https://americanas.vtexassets.com/arquivos/ids/30034533/1611324805_2SZ.jpg?v=638792858193770000', 1249.90),
(2, 'Smartphone Motorola Moto G34 5G 128GB Tela 6.5\" 4GB RAM Câmera 50MP + 2MP Selfie 16MP - Azul', 'Eleve o seu nível de conexão com o Smartphone Motorola Moto G34 5G 128GB Tela 6.5\" 4GB RAM Câmera 50MP + 2MP Selfie 16MP Azul. Versátil, ele oferece excelente desempenho e um design incomparável.', 'https://americanas.vtexassets.com/arquivos/ids/481893/7481509560_1SZ.jpg?v=638750827587800000\r\n', 990.49),
(3, 'Smartphone Nokia 5.4 128GB 4GB ram NK025 - Azul', 'Smartphone Nokia 5.4 azul com 128GB de memória e 4GB RAM. Destaque para a câmera quádrupla de 48MP com gravação cinematográfica e a bateria que dura até 2 dias. Possui tela de 6,39\" HD+, processador Snapdragon 662 e vem pronto para o Android 11+. Inclui capa e película.', 'https://americanas.vtexassets.com/arquivos/ids/30039236/4879842611_1_xlarge.jpg?v=638792871474200000', 779.90);

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
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
