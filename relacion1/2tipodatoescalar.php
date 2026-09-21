<?php 

// Doy valor a las variables y las muestro 
//con la funcion var_dump()
$a = true;
var_dump($a);

$b = 25;
var_dump($b); 

$c = 3.1;
var_dump($c); 

$d = "David";
var_dump($d);

//Muestro los valores con printf
printf("<br>Tipo boolean: %b", $a);
printf("<br>Tipo entero: %d", $b);
printf("<br>Tipo decimal: %.1f", $c);
printf("<br>Tipo string: %s", $d);

?>