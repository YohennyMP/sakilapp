<?php 
include_once "conexion.php";
function obtenerPaises($conexion){
    $query = "SELECT * FROM country";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function obtenerPaisesporNombre($conexion, $nombre){
    $query = "SELECT * FROM country where LIKE '%$nombre%'";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}
function insertarPais($conexion,$datos){
    $query = "INSERT INTO country(country) A
    VALUES('{$datos['pais']}')";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function borrarPais($conexion, $nombre){
    //codigo
}
function actualizarPais($conexion, $nombre){
    //codigo
}
