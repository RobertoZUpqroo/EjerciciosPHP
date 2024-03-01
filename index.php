<?php include 'p1.php';?>
<?php include 'p2.php';?>
<?php include 'p3.php';?>
<?php include 'p4.php';?>
<?php include 'p6.php';?>
<?php include 'p7.php';?>
<?php include 'p8.php';?>
<?php include 'p9.php';?>
<?php include 'p10.php';?>
<?php include 'p11.php';?>
<?php include 'p12.php';?>
<?php gestionar_nombre_usuario();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 20px;
    background-color: #ddd;
    }

    h1 {
        text-align: center;
        color: #3498db;
    }

    h2 {
        color: #3498db;
    }

    .menu {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .menu a {
        text-decoration: none;
        padding: 10px 20px;
        margin: 0 10px;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .menu a:hover {
        background-color: #2980b9;
    }

    @media screen and (max-width: 600px) {
        .menu {
            flex-direction: column;
            align-items: center;
        }

        .menu a {
            display: block;
            margin: 5px 0;
            width: 100%;
            text-align: center;
        }
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    .container p {
        font-size: 16px;
        line-height: 1.6;
        color: #555; 
    }

    #formulario {
        background-color: #fff; 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
    } 

    #formulario label {
        display: block;
        margin-bottom: 5px;
        color: #555; 
    }

    #formulario input[type="text"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .submit-button, .reset-button {
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-button {
        background-color: #3498db;
        color: #fff;
        transition: background-color 0.3s;
    }

    .submit-button:hover {
        background-color: #2980b9;
    }

    .reset-button {
        background-color: #e74c3c;
        color: #fff;
        transition: background-color 0.3s;
    }

    .reset-button:hover {
        background-color: #c0392b;
    }

    #restart-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #restart-button:hover {
        background-color: #2980b9;
    }

    </style>
</head>
<body>

    <h1>Zetina Izquierdo Roberto Alejandro</h1>


    <div class="menu">
        <a href="#ejercicio1">Multiplicar</a>
        <a href="#ejercicio2">Multiplicar2</a>
        <a href="#ejercicio3">Calcular Media</a>
        <a href="#ejercicio4">Imprimir Array</a>
        <a href="#ejercicio6">Formulario</a>
        <a href="#ejercicio7">Lanzar Monedas</a>
        <a href="#ejercicio8">Lanzar Dado</a>
        <a href="#ejercicio9">Numero Al Cuadrado</a>
        <a href="#ejercicio10">Tres Digitos</a>
        <a href="#ejercicio11">Hola Nombre</a>
        <a href="#ejercicio12">Vocales</a>
    </div>

    <div class="container" id="ejercicio1">
        <h2>Ejercicio 1</h2>
        <p>Imprime la tabla de multiplicar de un numero</p>
        <?php multiplicar(7); ?>
    </div>

    <div class="container" id="ejercicio2">
        <h2>Ejercicio 2</h2>
        <p>Imprime las tablas de multiplicar de un rango de numeros</p>
        <?php multiplicar2(1, 4); ?>
    </div>

    <div class="container" id="ejercicio3">
        <h2>Ejercicio 3</h2>
        <p>Imprime la media de un arreglo de numeros</p>
        <?php calcular_media(); ?>
    </div>

    <div class="container" id="ejercicio4">
        <h2>Ejercicio 4</h2>
        <p>Imprime en una tabla la posición y el valor de los elementos de un arreglo</p>
        <?php
        $arrayEjemplo = array('cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco');
        imprimir_array($arrayEjemplo);
        ?>
    </div>
    <div class="container" id="ejercicio6">
        <h2>Ejercicio 6</h2>
        <p>Recibe datos en un formulario tipo GET y los imprime</p>
        <?php
        // Llama a la función mostrar_formulario
        mostrar_formulario();
        ?>  
    </div>

    <div class="container" id="ejercicio7">
    <h2>Ejercicio 7</h2>
    <form action="index.php#lanzarMonedas" method="POST">
        <label for="cantidadMonedas">Cantidad de Monedas (1-20):</label>
        <input type="number" name="cantidadMonedas" id="cantidadMonedas" min="1" max="20" required>

        <label for="tipoMoneda">Tipo de Moneda:</label>
        <select name="tipoMoneda" id="tipoMoneda" required>
            <option value="0">Dólar Estadounidense</option>
            <option value="1">Euro</option>
            <option value="2">Yen japonés</option>
            <option value="3">Libra esterlina</option>
            <option value="4">Franco suizo</option>
        </select>

        <button type="submit" class="submit-button">Lanzar Monedas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cantidadMonedas"]) && isset($_POST["tipoMoneda"])) {
        $cantidadMonedas = $_POST["cantidadMonedas"];
        $tipoMoneda = $_POST["tipoMoneda"];
        $resultadosMonedas = lanzar_monedas($cantidadMonedas, $tipoMoneda);

        // Puedes mostrar los resultados como desees, aquí un ejemplo básico:
        echo "<h3>Resultados del lanzamiento de monedas:</h3>";
        foreach ($resultadosMonedas as $resultado) {
            echo "<p>{$resultado['Moneda']}: ";
            echo $resultado['Resultado'] == 0 ? 'Cara' : 'Cruz';
            echo "</p>";
        }
    }
    ?>
    </div>
        
    <div class="container" id="ejercicio8">
    <h2>Ejercicio 8</h2>
    <form action="index.php#lanzarDado" method="POST">
        <button type="submit" name="accion" value="lanzarDado" class="submit-button">Lanzar Dado</button>
        <div id="resultadoDado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"])) {
                echo "<h3>Resultado del lanzamiento del dado:</h3>";
                lanzar_dado();
            }
            ?>
        </div>
        </form>
    </div>
    
    <div class="container" id="ejercicio9">
    <h2>Ejercicio 9</h2>
    <p>Calcula el cuadrado de un número</p>
    
    <form action="index.php#ejercicio9" method="POST">
        <label for="numeroCuadrado">Ingrese un número:</label>
        <input type="number" name="numeroCuadrado" id="numeroCuadrado" required>
        <button type="submit" name="accion" value="calcularCuadrado" class="submit-button">Calcular Cuadrado</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"]) && $_POST["accion"] == "calcularCuadrado") {
        $numeroCuadrado = $_POST["numeroCuadrado"];
        elevar_al_cuadrado($numeroCuadrado);
    }
    ?>
    </div>

    <div class="container" id="ejercicio10">
    <h2>Ejercicio 10</h2>
    <p>Verificar si un número tiene 3 dígitos</p>
    
    <form action="index.php#ejercicio10" method="POST">
        <label for="numeroTresDigitos">Ingrese un número:</label>
        <input type="text" name="numeroTresDigitos" id="numeroTresDigitos" required>
        <button type="submit" name="accion" value="verificarTresDigitos" class="submit-button">Verificar 3 Dígitos</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"]) && $_POST["accion"] == "verificarTresDigitos") {
        $numeroTresDigitos = $_POST["numeroTresDigitos"];
        verificar_tres_digitos($numeroTresDigitos);
    }
    ?>
    </div>

    <div class="container" id="ejercicio11">
        <h2>Ejercicio 11</h2>
        <p>Gestión de Nombre de Usuario con Cookies</p>

        <!-- Formulario para ingresar el nombre de usuario -->
        <form action="index.php#ejercicio11" method="POST">
            <label for="nombreUsuario">Ingrese su nombre de usuario:</label>
            <input type="text" name="nombreUsuario" id="nombreUsuario" required>
            <button type="submit" class="submit-button">Enviar</button>
        </form>
    </div>

    <div class="container" id="ejercicio12">
    <h2>Ejercicio 12</h2>
    <p>Contar el número de veces que aparece cada vocal en una frase</p>

    <form action="index.php#ejercicio12" method="POST">
        <label for="fraseContarVocales">Ingrese una frase:</label>
        <input type="text" name="fraseContarVocales" id="fraseContarVocales" required>
        <button type="submit" name="accion" value="contarVocales" class="submit-button">Contar Vocales</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"]) && $_POST["accion"] == "contarVocales") {
        $fraseContarVocales = $_POST["fraseContarVocales"];
        contar_vocales($fraseContarVocales);
    }
    ?>
    </div>


    <?php
// Verifica si se hizo clic en el botón de reinicio
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["restart"])) {
    // Realiza cualquier acción de reinicio que necesites aquí
    // Por ejemplo, podrías restablecer variables de sesión, borrar cookies, etc.
    // ...

    // Redirige a la página principal sin el parámetro de reinicio
    header("Location: index.php");
    exit();
}
?>

<a href="index.php?restart=true" id="restart-button" class="restart-button">Reiniciar</a>

</body>
</html>