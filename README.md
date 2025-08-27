# Projeto E-commerce Simples - Zaffari dus Guri

Este é um projeto de um sistema de e-commerce básico, desenvolvido em PHP com banco de dados MySQL. Ele demonstra a estrutura fundamental de uma loja virtual, permitindo a navegação por categorias de produtos e a visualização detalhada de cada item.

O projeto foi construído com foco em boas práticas de segurança, como o uso de **Prepared Statements** para prevenir injeção de SQL e a sanitização de dados para evitar ataques XSS.

## ✨ Funcionalidades

* **Página de Categorias**: A página inicial (`categorias.php`) exibe todas as categorias de produtos cadastradas no banco de dados.
* **Página de Produtos**: Ao clicar em uma categoria, o usuário é direcionado para a página `produtos.php`, que lista todos os produtos pertencentes àquela categoria específica.
* **Página de Detalhes**: Ao clicar em um produto, a página `detalhes_produto.php` exibe informações completas sobre ele, como nome, imagem, descrição detalhada e preço.
* **Design Responsivo**: Utiliza o framework Bootstrap 4 para garantir que o layout se adapte a diferentes tamanhos de tela (desktop, tablet e mobile).
* **Segurança**:
    * Uso de `mysqli_prepare`, `mysqli_stmt_bind_param` e `mysqli_stmt_execute` para todas as consultas que envolvem dados fornecidos pelo usuário (via URL), prevenindo ataques de **SQL Injection**.
    * Uso da função `htmlspecialchars()` para tratar os dados antes de exibi-los no HTML, prevenindo ataques de **Cross-Site Scripting (XSS)**.

---

## 🏛️ Estrutura do Projeto e Fluxo de Navegação

O sistema é composto por três páginas principais que se conectam para criar a experiência do usuário:

1.  **`categorias.php` (Página Inicial)**
    * **Objetivo**: Servir como a vitrine principal da loja, apresentando as categorias disponíveis.
    * **Funcionamento**: Realiza uma consulta `SELECT` na tabela `categorias` para buscar todos os registros. Em seguida, cria um link dinâmico para cada categoria, apontando para `produtos.php` e passando o `CategoriaID` como um parâmetro GET na URL (ex: `produtos.php?cat=1`).

2.  **`produtos.php` (Listagem de Produtos)**
    * **Objetivo**: Exibir os produtos de uma categoria específica.
    * **Funcionamento**:
        * Recebe o `CategoriaID` através do parâmetro `$_GET['cat']`.
        * Primeiro, busca o nome da categoria para exibi-lo como título da página.
        * Depois, realiza uma consulta `SELECT` na tabela `produtos`, filtrando os resultados pelo `CategoriaID` recebido.
        * Renderiza um card para cada produto, contendo sua imagem, nome e um link para a página de detalhes, passando o `ProdutoID` (ex: `detalhes_produto.php?id=101`).

3.  **`detalhes_produto.php` (Detalhes do Produto)**
    * **Objetivo**: Mostrar todas as informações de um único produto.
    * **Funcionamento**:
        * Recebe o `ProdutoID` através do parâmetro `$_GET['id']`.
        * Executa uma consulta `SELECT` na tabela `produtos` para obter todos os dados do item correspondente àquele ID.
        * Exibe a imagem, nome, descrição completa e o preço formatado em Reais (R$).
        * Inclui um botão "Adicionar ao Carrinho" (atualmente sem funcionalidade implementada).

Além desses, existem dois arquivos de apoio inferidos pelo código:

* **`conexaodb.php`**: Arquivo responsável por estabelecer a conexão com o banco de dados MySQL. **Este arquivo deve ser criado manualmente.**
* **`style.css`**: Arquivo para estilos CSS customizados.

---

## 🚀 Como Configurar e Executar o Projeto

Siga os passos abaixo para rodar o projeto em um ambiente de desenvolvimento local (usando XAMPP, WAMP, etc.).

### 1. Banco de Dados

Primeiro, você precisa criar o banco de dados e as tabelas. Execute o script SQL abaixo no seu gerenciador de banco de dados (como o phpMyAdmin).

```sql
-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS `loja_zaffari` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Usar o banco de dados criado
USE `loja_zaffari`;

-- Tabela de Categorias
CREATE TABLE `categorias` (
  `CategoriaID` INT(11) NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`CategoriaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de Produtos
CREATE TABLE `produtos` (
  `ProdutoID` INT(11) NOT NULL AUTO_INCREMENT,
  `CategoriaID` INT(11) NOT NULL,
  `Nome` VARCHAR(150) NOT NULL,
  `Descricao` TEXT NOT NULL,
  `Preco` DECIMAL(10, 2) NOT NULL,
  `ImagemURL` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`ProdutoID`),
  FOREIGN KEY (`CategoriaID`) REFERENCES `categorias`(`CategoriaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir dados de exemplo
INSERT INTO `categorias` (`CategoriaID`, `Nome`) VALUES
(1, 'Bebidas'),
(2, 'Hortifrúti'),
(3, 'Padaria'),
(4, 'Carnes');

INSERT INTO `produtos` (`ProdutoID`, `CategoriaID`, `Nome`, `Descricao`, `Preco`, `ImagemURL`) VALUES
(101, 1, 'Refrigerante Coca-Cola 2L', 'O clássico refrigerante de cola para todas as ocasiões. Servir gelado.', 8.50, '[https://via.placeholder.com/300x300.png?text=Coca-Cola](https://via.placeholder.com/300x300.png?text=Coca-Cola)'),
(102, 1, 'Suco de Laranja Natural 1L', 'Suco feito com laranjas frescas e selecionadas, sem adição de açúcar.', 12.90, '[https://via.placeholder.com/300x300.png?text=Suco](https://via.placeholder.com/300x300.png?text=Suco)'),
(201, 2, 'Maçã Fuji (Kg)', 'Maçã de sabor doce e textura crocante. Ideal para consumo in natura ou em receitas.', 9.99, '[https://via.placeholder.com/300x300.png?text=Maçã](https://via.placeholder.com/300x300.png?text=Maçã)'),
(202, 2, 'Banana Caturra (Dúzia)', 'Dúzia de bananas caturra maduras, fonte de potássio e energia.', 7.49, '[https://via.placeholder.com/300x300.png?text=Banana](https://via.placeholder.com/300x300.png?text=Banana)'),
(301, 3, 'Pão Francês (Unidade)', 'Pão fresco, crocante por fora e macio por dentro. Produção própria.', 0.80, '[https://via.placeholder.com/300x300.png?text=Pão](https://via.placeholder.com/300x300.png?text=Pão)'),
(401, 4, 'Picanha Bovina (Kg)', 'Corte nobre de carne bovina, perfeito para churrascos. Peças selecionadas.', 79.90, '[https://via.placeholder.com/300x300.png?text=Picanha](https://via.placeholder.com/300x300.png?text=Picanha)');
