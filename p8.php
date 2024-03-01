<?php
//Ejercicio 8 Lanza un dado
function lanzar_dado() {
    $valorAleatorio = mt_rand(1, 6);

    switch ($valorAleatorio) {
        case 1:
            echo "<img src='/dado/dado 1.jpg' alt='Dado 1' />";
            break;
        case 2:
            echo "<img src='/dado/dado 2.jpg' alt='Dado 2' />";
            break;
        case 3:
            echo "<img src='/dado/dado 3.jpg' alt='Dado 3' />";
            break;
        case 4:
            echo "<img src='/dado/dado 4.jpg' alt='Dado 4' />";
            break;
        case 5:
            echo "<img src='/dado/dado 5.jpg' alt='Dado 5' />";
            break;
        case 6:
            echo "<img src='/dado/dado 6.jpg' alt='Dado 6' />";
            break;
        default:
            echo "Error: El valor del dado no está en el rango esperado.";
            break;
    }
}