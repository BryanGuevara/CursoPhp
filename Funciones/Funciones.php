<?php

function estudiante($nombre, $apellido, $edad=19)
{
   echo"el estudiante con el nombre $nombre $apellido tiene la edad de $edad<br>";
}

estudiante('Bryan', 'Guevara');
estudiante('Belén', 'Canizales', 20);
estudiante('Fabricio', 'Romero');

function suma($a, $b)
{
    return $a + $b;
}

$resultado = suma(4,6);
echo "<br>El resultado es $resultado";
?>