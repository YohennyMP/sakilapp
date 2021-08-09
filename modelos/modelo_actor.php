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

function obtenerActoresPorId($conexion, $id){
    
    $query = "SELECT * FROM actor WHERE actor_id = $id";

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

function actualizarActor($conexion, $datos){

   $query = "UPDATE actor 
            SET first_name= '{$datos['nom']}', 
            last_name= '{$datos['apellido']}'
            WHERE actor_id = '{$datos['id']}'";

    $resultado = mysqli_query($conexion,$query);

    return $resultado;


}
