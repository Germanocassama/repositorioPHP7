<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "musquebalassana94");

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");

# Receber parâmetro
$id = 1;

# Ligar parâmetro 
$stmt ->bindParam(":id", $id);

# Executar parâmetro 
$stmt -> execute();

echo "Dados do usuario apagado com sucesso";

 ?>