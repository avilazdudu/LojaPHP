# Projeto E-commerce Simples 

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

## 🏛️ Estrutura do Projeto e Fluxo de Nave
