<?php
include_once 'conexaodb.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Categorias - Zaffari dus Guri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" xintegrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0cfbec9a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="container-fluid vh-100 m-0 p-0 d-flex flex-column">

  <header class="d-flex bg-primary justify-content-around align-items-center p-3">
    <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
    <h1 class="display-3 text-white">Zaffari dus Guri</h1>
    <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
  </header>

  <main class="d-flex flex-column align-items-center py-5">
    <div class="d-flex justify-content-center align-items-center py-5">
      <h2 class="display-4">Categorias</h2>
    </div>
    <div class="row w-100 d-flex justify-content-center align-items-center">
      <?php
      // Comando SQL para trazer todas as categorias
      $sql = 'SELECT CategoriaID, Nome FROM categorias';

      // Executar comando no banco
      $resultado = mysqli_query($conexao, $sql);

      if ($resultado && mysqli_num_rows($resultado) > 0) {
        while($linha = mysqli_fetch_assoc($resultado)) {
            $categoria_nome = htmlspecialchars($linha['Nome']);
            $categoria = $linha['CategoriaID'];

            echo '
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <a href="produtos.php?cat='.$categoria.'" class="text-dark text-decoration-none product-card">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h5 class="card-title text-center m-0">'. $categoria_nome .'</h5>
                        </div>
                    </div>
                </a>
            </div>';
        }
      } else {
        echo '<div class="col-12"><p class="text-center">Nenhuma categoria encontrada.</p></div>';
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