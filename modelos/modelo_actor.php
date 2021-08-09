<?php 
include_once "conexion.php";

function obtenerActores($conexion){

    $query = "SELECT * FROM actor";
    return mysqli_query($conexion,$query);

}
function obtenerActoresporNombre($conexion, $nombre){
    
    $query = "SELECT * FROM actor where first_name LIKE '%$nombre%'";
    return mysqli_query($conexion,$query);

}
function insertarActor($conexion,$data){
    
    $query = "INSERT INTO actor(first_name,last_name) VALUES('{$data['nom']}','{$data['apellido']}')";
    return mysqli_query($conexion,$query);
    
}
function eliminarActor($conexion, $id){

    $query = "DELETE FROM film_actor WHERE actor_id = $id";
    $resultado = mysqli_query($conexion,$query);

    $query = "DELETE FROM actor WHERE actor_id = $id";
    $resultado = mysqli_query($conexion,$query);

    return $resultado;

}
function actualizarActor($conexion, $data){
    $query = "UPDATE actor SET first_name = '{$data[nom]}', last_name = '{$data[apellido]}' WHERE actor_id = '{$data[actor_id]}'";
    $resultado = mysqli_query($conexion, $query);
}