<?php 
include_once "conexion.php";
function obtenerActores($conexion){
    
    $query = "SELECT * FROM actor";
    return $query;

}
function obtenerActoresporNombre($conexion, $nombre){
    
    $query = "SELECT * FROM actor where LIKE '%$nombre%'";
    return mysqli_query($conexion,$query);

}
function insertarActor($conexion,$data){
    
    $query = "INSERT INTO actor(first_name,last_name) VALUES('{$data['nom']}','{$data['apellido']}')";
    return mysqli_query($conexion,$query);
    
}
function borrarActor($conexion, $nombre){
    //codigo
}
function actualizarActor($conexion, $nombre){
    //codigo
}
include_once "../vistas/actores.html.php";