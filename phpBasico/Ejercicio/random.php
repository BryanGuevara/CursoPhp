<?php

// Inicializar la suma total
$suma_total = 0;

// Generar 100 números aleatorios y calcular la suma total
for ($i = 0; $i < 200; $i++) {
    // Generar un número aleatorio entre 0 y 6
    $puntaje_torneo = rand(0, 3);

    // Imprimir el puntaje del torneo actual (opcional)
    echo "Puntaje Torneo " . ($i + 1) . ": " . $puntaje_torneo . "<br>";

    // Sumar al total
    $suma_total += $puntaje_torneo;
}

// Imprimir la suma total
echo "Suma Total: " . $suma_total;

?>
