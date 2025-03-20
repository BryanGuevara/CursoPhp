<?php
//Arreglo, Vector, Array
$dias = array('Lunes<br>','Martes<br>', 'Miercoles<br>','Jueves<br>', 'Viernes<br>', 'Sabado<br>', 'Domingo<br>');

print_r($dias);

$estudiante = array('Nombre'=>'Bryan<br>','Apellido'=>'Guevara<br>', 'Edad'=> 19);

print_r($estudiante);

echo "<br>Mi Nombre es: ".$estudiante['Nombre'],"Mi edad es: ".$estudiante['Edad'];
?>