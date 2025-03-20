<?php
$amigos = array('Hector<br>', 'Belén<br>', 'Nathalia<br>','Cesia<br>', 'Isai<br>', 'Otoniel<br>', 'Leonidas<br>', 'Alison<br>');

$amigos[8] = 'Paola<br>';

$posicion = count($amigos) - 2;

echo "El penultimo amigo es el numero $posicion y es : $amigos[$posicion]<br>";

asort($amigos);
print "<br>";
print_r($amigos); 

rsort($amigos);
print "<br>";
print_r($amigos); 


?>