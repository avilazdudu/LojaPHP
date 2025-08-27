<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conexaodb.php';

$page_title = 'Produtos';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Produtos - Zaffari dus Guri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" xintegrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0cfbec9a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="container-fluid vh-100 m-0 p-0 d-flex flex-column">

  <header class="d-flex bg-primary justify-content-around align-items-center p-3">
    <?php
      echo '<i style="cursor: pointer;" onclick="history.back()" class="fa-solid fa-backward fa-2xl text-white"></i>';
    ?>
    <h1 class="display-3 text-white">Zaffari dus Guri</h1>
    <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
  </header>

  <main class="d-flex flex-column align-items-center py-3">
    <div class="d-flex justify-content-center align-items-center py-4">
      <?php
        if (isset($_GET['cat']) && !empty($_GET['cat'])) {
            $categoria_id = $_GET['cat'];

            $sql = 'SELECT Nome FROM categorias WHERE CategoriaID = ?';
            $stmt_cat = mysqli_prepare($conexao, $sql);
            if ($stmt_cat) {
                mysqli_stmt_bind_param($stmt_cat, 'i', $categoria_id);
                mysqli_stmt_execute($stmt_cat);
                $resultado_cat = mysqli_stmt_get_result($stmt_cat);
                if ($linha_cat = mysqli_fetch_assoc($resultado_cat)) {
                    $page_title = htmlspecialchars($linha_cat['Nome']);
                } else {
                    $page_title = "Categoria não encontrada";
                }
                mysqli_stmt_close($stmt_cat);
            }
        } else {
            $page_title = "Nenhuma Categoria Selecionada";
        }
      ?>
      <h2 class="display-4"><?php echo $page_title; ?></h2>
    </div>
    <div class="row w-100 d-flex justify-content-center align-items-stretch">
      <?php
      // Continua somente se a categoria foi encontrada
      if (isset($categoria_id)) {
          // 2. Prepara a declaração SQL para buscar os produtos.
          $sql = 'SELECT ProdutoID, Nome, ImagemURL FROM produtos WHERE CategoriaID = ?';
          
          // Prepara a declaração
          $stmt = mysqli_prepare($conexao, $sql);

          if ($stmt) {
              // 3. Vincula a variável ao placeholder. 
              mysqli_stmt_bind_param($stmt, 'i', $categoria_id);

              // 4. Executa a declaração preparada.
              mysqli_stmt_execute($stmt);

              // 5. Obtém o resultado da declaração executada.
              $resultado = mysqli_stmt_get_result($stmt);

              if (mysqli_num_rows($resultado) > 0) {
                  // Loop através dos resultados
                  while($linha = mysqli_fetch_assoc($resultado)) {
                      // Usa htmlspecialchars para prevenir ataques XSS ao exibir dados
                      $produto_nome = htmlspecialchars($linha['Nome']);
                      $produto_imgURL = htmlspecialchars($linha['ImagemURL']);
                      $produto_id = $linha['ProdutoID'];

                      // Exibe o HTML para o card do produto
                      echo '
                      <div class="col-12 col-md-4 col-lg-3 mb-4 d-flex">
                          <div class="card h-100 shadow-sm product-card w-100">
                              <img src="'. $produto_imgURL .'" class="card-img-top p-3" alt="'. $produto_nome .'">
                              <div class="card-body d-flex flex-column justify-content-end">
                                  <h5 class="card-title text-center">'. $produto_nome .'</h5>
                                  <a href="detalhes_produto.php?id='.$produto_id.'" class="btn btn-primary mt-auto">Ver detalhes</a>
                              </div>
                          </div>
                      </div>';
                  }
              } else {
                  echo '<div class="col-12"><p class="text-center">Nenhum produto encontrado nesta categoria.</p></div>';
              }
              // 6. Fecha a declaração
              mysqli_stmt_close($stmt);
          } else {
              // Tratamento de erro se a preparação da declaração falhar
              echo '<div class="col-12"><p class="text-center text-danger">Erro ao preparar a consulta ao banco de dados: ' . mysqli_error($conexao) . '</p></div>';
          }
      } else {
          // Mensagem exibida se a página for acessada sem o parâmetro ?cat=...
          echo '<div class="col-12"><p class="text-center">Por favor, selecione uma categoria para ver os produtos.</p></div>';
      }
      // --- FIM: CÓDIGO PHP CORRIGIDO E SEGURO ---
      ?>
    </div> 
  </main>

  <footer class="bg-primary p-4 mt-auto"></footer>

  <!-- JS do Bootstrap e jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" xintegrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
