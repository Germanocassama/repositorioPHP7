<?php 

$qualSuaIdade = 9;

$criaca = 12;
$maiorIdade = 18;
$adulto = 60;


if($qualSuaIdade <= $criaca){
	echo "Criaça";

}elseif ($qualSuaIdade <= $maiorIdade) {
	echo "Maior de idade";

}elseif ($qualSuaIdade <= $adulto) {
	
	echo "adulto";

}
else{
	echo "Idoso";
}


 ?>