<?php
//Switch
$curso = 'rubi';
switch ($curso) {
    case 'php':
        echo 'Lunes y Martes';
        break;

    case 'Java':
            echo 'Miercoles';
        break;

    case 'Python':
            echo 'Jueves';
        break;
            
    default:
        echo 'No existe ese curso';
        break;
}
?>