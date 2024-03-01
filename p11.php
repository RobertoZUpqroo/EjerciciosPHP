<?php
// Ejercicio 11
function gestionar_nombre_usuario() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombreUsuario"])) {
        $nombreUsuario = $_POST["nombreUsuario"];
        setcookie("nombreUsuario", $nombreUsuario, 0, "/");
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    }

    if (isset($_COOKIE["nombreUsuario"])) {
        $nombreUsuario = $_COOKIE["nombreUsuario"];
        echo "<p>Hola $nombreUsuario</p>";
    }
}