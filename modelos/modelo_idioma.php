<?php 
include_once "conexion.php";
function obtenerIdiomas($conexion){

    $sql = "SELECT * FROM language";
    return mysqli_query($conexion,$sql);

}
function obtenerIdiomasPornombre($conexion,$nombre){

    $sql = "SELECT * FROM language WHERE name LIKE '%$nombre%'";
    return  mysqli_query($conexion,$sql);

}
function insertarIdioma($conexion,$data){

    $sql = "INSERT INTO language(name) VALUES('{$data}')";
    echo $sql;
    return mysqli_query($conexion,$sql);

}

function eliminarIdioma($conexion, $id){

    $query = "DELETE FROM language WHERE language_id = $id";
    $resultado = mysqli_query($conexion,$query);

    return $resultado;
}