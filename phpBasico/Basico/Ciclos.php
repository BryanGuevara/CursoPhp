<?php
//Ciclos
$numero = 1;

while ($numero <= 10) 
{
    echo "$numero ";
    $numero++;
}

do {
    echo "$numero ";
    $numero--;
} while ($numero >= 0);

for ($numero = 1; $numero <= 10; $numero++) { 
    echo "$numero ";
}
?>