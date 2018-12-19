<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "musquebalassana94");

// passar parametros em PDO --> :email, :senha
$stmt = $conn->prepare("INSERT INTO usuarios(email, senha) VALUES (:email, :senha)");

// receber parabros 
$email = "germano@guine.com";
$senha = "4f00111G9";

# Ligar parâmetro
$stmt -> bindParam(":email", $email);
$stmt ->bindParam(":senha", $senha);

# Executar código 

$stmt -> execute();

// Mensagem 
echo "Inserido com sucesso"; 


 ?>