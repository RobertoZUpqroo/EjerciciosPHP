<?php
//Ejercicio 7 Lanzar moneda
function lanzar_monedas($cantidad, $tipo) {
    $monedas = array("Dólar Estadounidense", "Euro", "Yen japonés", "Libra esterlina", "Franco suizo");
    $resultados = array();

    for ($i = 0; $i < $cantidad; $i++) {
        $monedaSeleccionada = $monedas[$tipo];
        $resultadoLanzamiento = mt_rand(0, 1); // 0 para cara, 1 para cruz
        $resultados[] = array("Moneda" => $monedaSeleccionada, "Resultado" => $resultadoLanzamiento);
    }

    return $resultados;
}