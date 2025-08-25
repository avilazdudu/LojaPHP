<?php
include_once 'conexaodb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="container-fluid vh-100 m-0 p-0 d-flex flex-column">

  <header class="d-flex bg-primary justify-content-around align-items-center">
    <i class="fa-solid fa-cart-shopping fa-2xl"></i>
    <h1 class="display-3">Zaffari dus Guri</h1>
    <i class="fa-solid fa-cart-shopping fa-2xl"></i>
  </header>

  <main class="d-flex flex-column align-items-center py-3">
    <div class="d-flex justify-content-center align-items-center py-4">
      <h2 class="display-4">Produtos</h2>
    </div>
    <div class="row w-100 d-flex justify-content-around align-items-center">
      <?php
      //Comando SQl para trazer tudo dos produtos
      $sql = 'SELECT * FROM produtos;';

      // Executar comando no banco
      $resultado = mysqli_query($conexao, $sql);

      if (mysqli_num_rows($resultado) > 0) {
        while($linha = mysqli_fetch_assoc($resultado)) {
        echo '<a href="#" class="col-3 text-dark h-100 d-flex justify-content-center align-items-center flex-column p-3 bg-primary product-card" style="border: 0.15rem solid black; border-radius: 1rem;"> 
                <div class="d-flex h-100 justify-content-center align-items-center flex-column bg-white p-3" style="border-radius: 1rem; border: 0.1rem solid black;">
                  <img class="img w-50" src="'. $linha['ImagemURL'].'" alt="'. $linha['Nome']. '">
                  <span class="h6 text-center mt-2">'. $linha['Nome'].'</span>
                </div>
              </a>';
      }
      } else {
        echo "Nenhum produto encontrado.<br>";
      }
      ?>
    </div> 
  </main>

  <footer class="bg-primary p-4 mt-auto"></footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/a0cfbec9a7.js" crossorigin="anonymous"></script>
</body>
</html>