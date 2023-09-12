<?php
$semana[0]='Lunes';
$semana[1]='Martes';
$semana[2]='Miercoles';
$semana[3]='Jueves';
$semana[4]='Viernes';
$semana[5]='Sabado';
$semana[6]='Domingo';

for ($i=0; $i < count($semana) ; $i++) 
{ 
    echo "$semana[$i]<br>";
    
    if ($semana[$i]== 'Jueves') {
        echo '<br>Curso de php<br><br>';
    }
}

?>