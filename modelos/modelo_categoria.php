<?php 
include_once "conexion.php";
function obtenerCategorias($conexion){
    $query = "SELECT * FROM category";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function obtenerCategoriasporNombre($conexion, $nombre){
    $query = "SELECT * FROM category where LIKE '%$nombre%'";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}
function insertarCategorias($conexion,$datos){
    $query = "INSERT INTO category(name) 
    VALUES('{$datos['categoria']}')";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;
}
function borrarCategoria($conexion, $nombre){
    //codigo
}
function actualizarCategorias($conexion, $nombre){
    //codigo
}
