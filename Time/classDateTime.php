<?php 

// Class DateTime --> permite calcular periodos de tempo dw uma maneira muito facil 

$dt = new DateTime();

$periodo = new dateInterval("P15D");

// P --> Periodos 
// D --> Dias 
echo "Hoje<br><br>";
echo $dt -> format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "<br><br><br> Mais 15 dias<br><br><br>";

echo $dt -> format("d/m/Y H:i:s");

echo "<br><br>";






 ?>