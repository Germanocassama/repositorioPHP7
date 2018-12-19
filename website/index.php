<?php 

// O Slim Framework é um microframework PHP que facilita sua vida na hora de fazer pequenas APIs de rotas 

 require_once "vendor/autoload.php";

// A variavel app serve para configuração de cada uma das rotas 
 $app = new \Slim\Slim();
 $app->get('/', function(){

 	echo json_encode(array(
 		'date'=>date("d/m/Y H:i:s")
 	));
 });

 
 $app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
  $app->run();
?>
