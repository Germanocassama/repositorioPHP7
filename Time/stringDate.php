<?php 

// converter string para datas muito importente para programação de sistemas 
// Ela aceita também expressoes em ingles como: now, day, week etc

$ts = strtotime("+1 week ");

echo date("l, d/m/Y", $ts);



 ?>