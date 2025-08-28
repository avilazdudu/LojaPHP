<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conexaodb.php';

// Inicializa a variável do produto como nula
$produto = null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detalhes do Produto - Zaffari dus Guri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" xintegrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a0cfbec9a7.js" crossorigin="anonymous"></script>
    <!-- Seu stylesheet customizado -->
    <link rel="stylesheet" href="./style.css">
</head>
<body class="container-fluid vh-100 m-0 p-0 d-flex flex-column">

  <header class="d-flex bg-primary justify-content-around align-items-center p-3">
    <?php
      // Ícone para voltar para a página anterior
      echo '<i style="cursor: pointer;" onclick="history.back()" class="fa-solid fa-backward fa-2xl text-white"></i>';
    ?>
    <h1 class="display-3 text-white">Zaffari dus Guri</h1>
    <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
  </header>

  <main class="container py-5">
    <div class="row">
      <?php
      if (isset($_GET['id']) && !empty($_GET['id'])) {
          $produto_id = $_GET['id'];

          $sql = 'SELECT Nome, Descricao, ImagemURL, Preco FROM produtos WHERE ProdutoID = ?';
          
          $stmt = mysqli_prepare($conexao, $sql);

          if ($stmt) {
              mysqli_stmt_bind_param($stmt, 'i', $produto_id);

              mysqli_stmt_execute($stmt);

              $resultado = mysqli_stmt_get_result($stmt);

              if ($resultado && mysqli_num_rows($resultado) > 0) {
                  $produto = mysqli_fetch_assoc($resultado);
              }
              mysqli_stmt_close($stmt);
          }
      }

      if ($produto) {
          $product_name = htmlspecialchars($produto['Nome']);
          $product_desc = htmlspecialchars($produto['Descricao']);
          $product_image = htmlspecialchars($produto['ImagemURL']);
          $product_price = 'R$ ' . number_format($produto['Preco'], 2, ',', '.');
          
          echo '
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="'. $product_image .'" class="img-fluid shadow" alt="'. $product_name .'"  style="border-radius: 1rem;">
            </div>
            <div class="col-md-6">
                <h2>'. $product_name .'</h2>
                <p class="lead text-muted">'. $product_desc .'</p>
                <h3 class="font-weight-bold my-4">'. $product_price .'</h3>
                <button class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-cart-plus mr-2"></i> Adicionar ao Carrinho
                </button>
            </div>
          ';

      } else {
          echo '
            <div class="col-12 text-center">
                <h2 class="display-4">Produto não encontrado</h2>
                <p class="lead">O produto que você está tentando visualizar não existe ou foi removido.</p>
                <a href="index.php" class="btn btn-primary mt-3">Voltar para o início</a>
            </div>
          ';
      }
      ?>
    </div> 
  </main>

  <footer class="bg-primary p-4 mt-auto"></footer>

  <!-- JS do Bootstrap e jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" xintegrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>