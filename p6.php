<?php
//Ejercicio 6 Formulario
function mostrar_formulario() {
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["dato"])) {
        // Si se envió el formulario, procesa los datos y muestra el resultado
        $dato = $_GET["dato"];
        echo "<h2>Resultado del Formulario</h2>";
        echo "<p>Dato ingresado: $dato</p>";
        echo "<form action='index.php#formulario' method='GET'>";
        echo "<button type='submit' name='reset' class='reset-button'>Reiniciar</button>";
        echo "</form>";
        echo "</div>";
    } else {
        // Si no se envió el formulario, muestra el formulario
        echo "<form action='index.php#formulario' method='GET'>";
        echo "<label for='dato'>Ingrese un dato:</label>";
        echo "<input type='text' name='dato' id='dato' required>";
        echo "<button type='submit' class='submit-button'>Enviar</button>";
        echo "</form>";
        echo "</div>";
    }
}