<?php
//Ejercicio 1
function multiplicar($argumento) {
    echo    "<table>
            <tr><td>$argumento * 1 = ".$resultado = 1*$argumento."</td></tr>
            <tr><td>$argumento * 2 = ".$resultado = 2*$argumento."</td></tr>
            <tr><td>$argumento * 3 = ".$resultado = 3*$argumento."</td></tr>
            <tr><td>$argumento * 4 = ".$resultado = 4*$argumento."</td></tr>
            <tr><td>$argumento * 5 = ".$resultado = 5*$argumento."</td></tr>
            <tr><td>$argumento * 6 = ".$resultado = 6*$argumento."</td></tr>
            <tr><td>$argumento * 7 = ".$resultado = 7*$argumento."</td></tr>
            <tr><td>$argumento * 8 = ".$resultado = 8*$argumento."</td></tr>
            <tr><td>$argumento * 9 = ".$resultado = 9*$argumento."</td></tr>
        </table>";
}

//Ejercicio 2
function multiplicar2($inicio, $fin){
    for($i = $inicio; $i <= $fin; $i++) 
    {
        echo "<p>La tabla de multiplicar del $i:</p>";
        multiplicar($i);
    }
}

//Ejercicio 3
function calcular_media($a = array (2, 4, 6, 8))
{
    $sumaelementos = array_sum($a);
    $elementos = count($a);
    $resultado = $sumaelementos/$elementos;
    
    echo "La media calculada de los elementos es: $resultado";  
}

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

//Ejercicio 6 Formulario
function mostrar_formulario() {
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["dato"])) {
        // Si se envió el formulario, procesa los datos y muestra el resultado
        $dato = $_GET["dato"];
        echo "<div class='container'>";
        echo "<h2>Resultado del Formulario</h2>";
        echo "<p>Dato ingresado: $dato</p>";
        echo "<form action='index.php#formulario' method='GET'>";
        echo "<button type='submit' name='reset' class='reset-button'>Reiniciar</button>";
        echo "</form>";
        echo "</div>";
    } else {
        // Si no se envió el formulario, muestra el formulario
        echo "<div class='container' id='formulario'>";
        echo "<h2>Formulario</h2>";
        echo "<form action='index.php#formulario' method='GET'>";
        echo "<label for='dato'>Ingrese un dato:</label>";
        echo "<input type='text' name='dato' id='dato' required>";
        echo "<button type='submit' class='submit-button'>Enviar</button>";
        echo "</form>";
        echo "</div>";
    }
}

