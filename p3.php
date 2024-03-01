<?php
//Ejercicio 3
function calcular_media($a = array (2, 4, 6, 8))
{
    $sumaelementos = array_sum($a);
    $elementos = count($a);
    $resultado = $sumaelementos/$elementos;
    
    echo "La media calculada de los elementos es: $resultado";  
}