<?php
// Constantes para conexão do banco de dados
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBBASE', 'loja');

// Conectar com o MYSQL
$conexao = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE);


?>