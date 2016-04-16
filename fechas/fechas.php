<?php
/**
 * fechas.php
 * Ejemplos de manejo de fechas en PHP
 */

// Creamos una nueva fecha, que represente la horafecha actual
$hoy = new DateTime();

// Pero no podemos imprimirla directamente, ocupamos darle un formato
//echo $hoy;

// Sin embargo podemos ver sus contenidos
//print_r($hoy);

$fechaEnEl95 = new DateTime('1995-06-29 14:14:14');
//print_r($fechaEnEl95);

$fechaEnEl2005 = new DateTime('2005-06-29 14:14');
//print_r($fechaEnEl2005);

// Inconsistente con MySQL =/
//$fechaEnEl2015 = new DateTime('2015-06-29 14');
$fechaEnEl2025 = new DateTime('2005-06-29');
//print_r($fechaEnEl2025);

$fechas = [$fechaEnEl95, $fechaEnEl2005, $fechaEnEl2025];

foreach ($fechas as $fecha) {
    //    print_r($fecha);
//    echo $fecha->format('YYYY-MM-DD HH:MM:SS') . "\n";
    echo $fecha->format('Y-m-d H:m:s') . "\n";
}
