<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stlyle.css">
    <title>Calculadora</title>
</head>
<body>
    <form class="caja" action="calculadora.php" method="get">
        <h1>CALCULADORA PHP</h1>
        <input type="text" name="numero1" value="" placeholder="Ingrese un numero">
        <input type="text" name="numero2" value="" placeholder="Ingrese otro numero">
        <input type="submit" name="" value="RESPUESTA">
        <output type= "number" name="">
    </form>
</body>
</html>

<?php
if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']))
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "$numero1 + $numero2 = " . ($numero1 + $numero2);
}
?>