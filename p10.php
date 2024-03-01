<?php
// Ejercicio 10
function verificar_tres_digitos($numero) {
    if (strlen($numero) == 3 && is_numeric($numero)) {
        echo "<p>El número $numero tiene 3 dígitos: Sí</p>";
    } else {
        echo "<p>El número $numero tiene 3 dígitos: No</p>";
    }
}