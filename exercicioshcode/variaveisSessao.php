<?php 

require_once('config.php');

echo $_SESSION['nome'] = "Aberto";

echo "<br>";

session_unset($_SESSION['nome']); // session_unset() --> serve para apagar seção
echo $_SESSION['nome'];

session_destroy();



 ?>