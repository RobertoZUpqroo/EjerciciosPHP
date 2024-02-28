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
            color: #555; /* Color de texto gris oscuro */
        }

        #formulario {
        background-color: #ecf0f1; /* Color de fondo gris claro */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
        }

        #formulario h2 {
            color: #3498db; /* Color del título azul */
        }

        #formulario label {
            display: block;
            margin-bottom: 5px;
            color: #555; /* Color de texto gris oscuro */
        }

        #formulario input[type="text"] {
            width: 100%;
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
    </style>
</head>
<body>

    <h1>Zetina Izquierdo Roberto Alejandro</h1>

    <?php include 'funciones.php';?>

    <div class="menu">
        <a href="#ejercicio1">Ejercicio 1</a>
        <a href="#ejercicio2">Ejercicio 2</a>
        <a href="#ejercicio3">Ejercicio 3</a>
        <a href="#ejercicio4">Ejercicio 4</a>
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

    <?php

    // Llama a la función mostrar_formulario
    mostrar_formulario();
    ?>

</body>
</html>
