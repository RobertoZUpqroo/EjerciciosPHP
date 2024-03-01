<?php
//Ejercicio 4
function imprimir_array($array) {
    if (!is_array($array)) {
        echo "El parámetro proporcionado no es un array.";
        return;
    }
    echo "<table border='1'>";
    echo "<tr><th>Posición</th><th>Valor</th></tr>";

    foreach ($array as $posicion => $valor) {
        echo "<tr><td>$posicion</td><td>$valor</td></tr>";
    }
    echo "</table>";
}