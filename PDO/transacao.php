<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "musquebalassana94");

# iniciar uma Transaçoes 
$conn -> beginTransaction();

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
# Receber parâmetro
$id = 6;

# Ligar parâmetro 
$stmt ->execute(array($id));

//$conn -> rollback(); // Cancelar uma transição se der errado 

$conn ->commit();  // confirmar transição se der certo 

echo "Transação efetuado com sucesso";

 ?>