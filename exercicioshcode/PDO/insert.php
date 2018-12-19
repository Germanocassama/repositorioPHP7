
<?php 

$conn = new PDO("mysql:dbname=exercicio; host=localhost", "root", "musquebalassana94");

// passar parametros em PDO --> :email, :senha
$stmt = $conn->prepare("INSERT INTO carr(nome, marca, preco, pais, fabrico, combustivel, chassi, recebido) VALUES (:nome, :marca, :preco, :pais, :fabrico, :combustivel, :chassi, :recebido)");

// receber parabros 
$nome = "F8";
$marca = "Mazerate";
$preco = 1000;
$pais = "America";
$fabrico = "2018";
$combustivel = "Disiel";
$chassi = 1239009;
$recebido = "20/06/2018";




# Ligar parâmetro
$stmt ->bindParam(":nome", $nome);
$stmt ->bindParam(":marca", $marca);
$stmt->bindParam(":preco", $preco);
$stmt->bindParam(":pais", $pais);
$stmt->bindParam(":fabrico", $fabrico);
$stmt->bindParam(":combustivel", $combustivel);
$stmt->bindParam(":chassi", $chassi);
$stmt->bindParam(":recebido", $recebido);
# Executar código 

$stmt -> execute();

// Mensagem 
echo "Inserido com sucesso"; 


 ?>