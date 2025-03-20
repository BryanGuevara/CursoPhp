<?php
$amigos = array('Hector<br>', 'Belén<br>', 'Nathalia<br>','Cesia<br>', 'Isai<br>', 'Otoniel<br>', 'Leonidas<br>', 'Alison<br>','Paola<br>');
$familia = array('Dayana<br>', 'Berenice<br>', 'Odir<br>', 'Diana<br>');

//Dividir en secciones
$function1 = array_chunk($amigos, 3);

print_r($function1);

//Eliminr elementos desde el que elija
print '<br><br>';
$function2 = array_slice($amigos, 4);

print_r($function2);

//unir Arrays
print '<br><br>';
$function3 = array_merge($amigos, $familia);

print_r($function3);

//Eliminar un valor
print '<br><br>';
array_pop($amigos);

print_r($amigos);

//Buscar
print '<br><br>';
$function5 = array_search('Belén<br>', $amigos);

print_r($function5);

//Invertir
print '<br><br>';
$function6 = array_reverse($amigos);

print_r($function6);

?>