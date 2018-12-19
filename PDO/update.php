<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "musquebalassana94");

$stmt = $conn ->prepare("UPDATE usuarios SET email = :email, senha = :senha WHERE id = :id");

$email = "bissau@gb.com";
$senha = "B34GA";
$id = 4;

$stmt ->bindParam(":email", $email);
$stmt ->bindParam(":senha", $senha);
$stmt ->bindParam(":id", $id);

$stmt -> execute();

echo "Dados atualizadoscom sucesso";

 ?>