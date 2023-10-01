<?php
$n1 = 20;
$n2 = 19;
function sumar()
{
    $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
}
sumar();
echo "$s</br></br>";

echo "</br></br>Ruta de el archivo: ";
echo $_SERVER['PHP_SELF'];

echo "</br></br>El Nombre de el Servidor: ";
echo $_SERVER['SERVER_NAME'];

$numero = $_GET['numero'];
echo "El numero es:".$numero;
?>