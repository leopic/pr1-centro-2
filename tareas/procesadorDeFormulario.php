<?php

/**
 * procesadorDeFormulario.php
 */


class Controlador {
    public function crearTarea() {
        $metodo = $_SERVER['REQUEST_METHOD'];
        $titulo = null;
        $descripcion = null;

        // Si lo parametros vienen en el URL
        if ($metodo == "GET") {
            $listaDeParametrosDelURL = $_GET;
            $titulo = $this->popularYRevisarVariable("titulo", $listaDeParametrosDelURL);
            $descripcion = $this->popularYRevisarVariable("descripcion", $listaDeParametrosDelURL);
        } else {
            // Si no
            $listaDeParametrosEnElCuerpo = file_get_contents('php://input');;
            $listaPreparada = json_decode($listaDeParametrosEnElCuerpo, true);
            $titulo = $this->popularYRevisarVariable("titulo", $listaPreparada);
            $descripcion = $this->popularYRevisarVariable("descripcion", $listaPreparada);
        }

        $servicio = new Servicio();
        $servicio->crearTarea($titulo, $descripcion);
    }

    private function popularYRevisarVariable($nombreDelParametro, $elArray) {
        if (array_key_exists($nombreDelParametro, $elArray)) {
            return $elArray[$nombreDelParametro];
        } else {
            return null;
        }
    }
}

class Servicio {
    public function crearTarea($titulo, $descripcion) {
        $tarea = [
            "titulo" => null,
            "descripcion" => null
        ];

        // Si no existe el valor, salimos
        if (!isset($titulo)) {
            echo "titulo no existe";
            return;
        }

        if (!isset($descripcion)) {
            echo "descripcion no existe";
            return;
        }

        $tarea[":titulo"] = $titulo;
        $tarea[":descripcion"] = $descripcion;

        $query = "INSERT INTO tareas (titulo, descripcion) VALUES (:titulo, :descripcion)";
        $parametros = $tarea;

        $persistencia = new Persistencia();
        $persistencia->query($query, $parametros);
    }
}

class Persistencia {
    public function query($query, $parametros) {
        
    }
}


// Enrutador
$miControlador = new Controlador();
$miControlador->crearTarea();
