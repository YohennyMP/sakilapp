<?php 
include_once "conexion.php";
function obtenerActores($conexion){
    $query = "SELECT * FROM actor";
    return $resultado;
}
function obtenerActoresporNombre($conexion, $nombre){
    $query = "SELECT * FROM actor where LIKE '%$nombre%'";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function insertarActor($conexion,$data){
    $query = "INSERT INTO actor(actor_id,first_name,last_name,last_update) VALUES($data)";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function borrarActor($conexion, $nombre){
    //codigo
}
function actualizarActor($conexion, $nombre){
    //codigo
}
include "vistas/partes/menu.php";
include_once "../vistas/actores.html.php";