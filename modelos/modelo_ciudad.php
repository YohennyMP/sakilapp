<?php 
include_once "conexion.php";

function obtenerciudad($conexion){
    $query = "SELECT * FROM city";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}


function insertarCiudad($conexion, $ciudad, $id_country){
    $query = "INSERT INTO city(city,country_id)VALUES('{$ciudad}','{$id_country}')";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}

function actualizarCiudad($conexion,$ciudad,$id,$idciu){
    $query = "UPDATE city SET city = '{$ciudad}', country_id = '{$id}' WHERE city_id='{$idciu}'";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}

function borrarCiudad($conexion, $id){
    $query = "DELETE FROM city WHERE city_id = '{$id}'";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}

function obtenerCiudadporid($conexion, $id){
    $query = "SELECT * FROM city WHERE city_id = '{$id}'";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}

function obtenerCiudadporNombre($conexion, $nombre){
    
    $query = "SELECT * FROM city WHERE city LIKE '%$nombre%'";
    $resultado = mysqli_query($conexion, $query);
    return $resultado;
}
