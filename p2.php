<?php
//Ejercicio 2
function multiplicar2($inicio, $fin){
    for($i = $inicio; $i <= $fin; $i++) 
    {
        echo "<p>La tabla de multiplicar del $i:</p>";
        multiplicar($i);
    }
}
