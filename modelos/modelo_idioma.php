<?php 
include_once "conexion.php";
function obtenerIdiomas($conexion){

    $sql = "SELECT * FROM language";
    return mysqli_query($conexion,$sql);

}
function obtenerIdiomasPornombre($conexion,$nombre){

    $sql = "SELECT * FROM language LIKE '%$nombre%'";
    return  mysqli_query($conexion,$sql);

}
function insertarIdioma($conexion,$data){

    $sql = "INSERT INTO language(name) VALUES('{$data}')";
    echo $sql;
    return mysqli_query($conexion,$sql);

}
