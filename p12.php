<?php
//Ejercicio 12
function contar_vocales($frase) {
    // Convertir la frase a minúsculas para hacer el conteo de las vocales sin distinguir entre mayúsculas y minúsculas
    $frase = strtolower($frase);

    // Inicializar un arreglo para contar el número de veces que aparece cada vocal
    $conteo_vocales = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);

    // Recorrer la frase y contar el número de veces que aparece cada vocal
    for ($i = 0; $i < strlen($frase); $i++) {
        $caracter = $frase[$i];
        if (in_array($caracter, array_keys($conteo_vocales))) {
            $conteo_vocales[$caracter]++;
        }
    }

    // Imprimir el resultado
    echo "<h3>Conteo de vocales en la frase:</h3>";
    echo "<p>Frase: '$frase'</p>";
    echo "<ul>";
    foreach ($conteo_vocales as $vocal => $conteo) {
        echo "<li>$vocal: $conteo</li>";
    }
    echo "</ul>";
}