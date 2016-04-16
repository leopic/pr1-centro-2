<?php

/**
 * procesadorDeFormulario.php
 */

//echo "Hola!\n";

function popularYRevisarVariable($nombreDelParametro, $elArray) {
    if (array_key_exists($nombreDelParametro, $elArray)) {
        return $elArray[$nombreDelParametro];
    } else {
        return null;
    }
}

$metodo = $_SERVER['REQUEST_METHOD'];
var_dump($metodo);

$titulo = null;
$descripcion = null;

// Si lo parametros vienen en el URL
if ($metodo == "GET") {
    $listaDeParametrosDelURL = $_GET;
    $titulo = popularYRevisarVariable("titulo", $listaDeParametrosDelURL);
    $descripcion = popularYRevisarVariable("descripcion", $listaDeParametrosDelURL);
} else {
// Si no
    $listaDeParametrosEnElCuerpo = file_get_contents('php://input');;
    $listaPreparada = json_decode($listaDeParametrosEnElCuerpo, true);
    $titulo = popularYRevisarVariable("titulo", $listaPreparada);
    $descripcion = popularYRevisarVariable("descripcion", $listaPreparada);
}

$tarea = [
    "titulo" => $titulo,
    "descripcion" => $descripcion
];

var_dump($tarea);
