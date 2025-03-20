<?php
$cursos = array('Python<br>', 'Java<br>', 'php<br>', 'HTML<br>', 'CSS<br>');

$cursos[5] = 'JavaScript';

print_r($cursos);

echo "<br>La opcion numero 3 es: $cursos[3]";

echo '<br>'.count($cursos);
?>