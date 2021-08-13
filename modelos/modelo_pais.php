<?php

require_once "modelos/conexion.php";

function obtenerpais($conexion) {
    $query = "SELECT * FROM country";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function insertarPais($conexion, $datos){
    $query = "INSERT INTO country(country) 
              VALUES ('{$datos['nom']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}

function eliminarPais($conexion, $id){
    $query = "DELETE FROM country WHERE country_id = $id";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}


function obtenerPaisPorID($conexion, $id){
    $query = "SELECT * FROM country WHERE country_id = $id";
    
    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}


function editarPaisPorID($conexion, $datos){
    $query = "UPDATE country
    SET country = '{$datos['nom']}'
    WHERE country_id = '{$datos['id']}'";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}