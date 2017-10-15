<?php

include ("Rubrica.php");


$rubrica = new Rubrica("./info.txt");
$contatto = new Contatto("a","a","a","aaa");

$rubrica->aggiungi($contatto);

print_r($rubrica);
?>


