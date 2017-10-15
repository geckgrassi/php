<?php

include ("Rubrica.php");

$rubrica = new Rubrica("./info.txt");

$contatto = new Contatto($_POST['0'],($_POST['1'],($_POST['2'],($_POST['3']);




$rubrica->aggiungi($contatto);

include("view.php");

?>
