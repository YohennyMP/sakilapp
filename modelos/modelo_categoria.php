<?php 
include_once "conexion.php";

function obtenerCategorias($conexion){

    $query = "SELECT * FROM category";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}
function obtenerCategoriasporNombre($conexion, $nombre){

    $query = "SELECT * FROM category where name LIKE '%$nombre%'";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}

function obtenerCategoriasporid($conexion, $id){

    $query = "SELECT * FROM category WHERE category_id = '{$id}'";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}


function insertarCategorias($conexion,$datos){

    $query = "INSERT INTO category(name) 
    VALUES('{$datos['categoria']}')";
    $resultado = mysqli_query($conexion,$query);
    return $resultado;

}
function borrarCategoria($conexion, $id){

    $query = "DELETE FROM category WHERE category_id = $id";
    $resultado = mysqli_query($conexion,$query);

    return $resultado;

}
function actualizarCategorias($conexion, $nombre,$id){

    $query = "UPDATE category
            SET name= '{$nombre}'
            WHERE category_id = '{$id}'";

    $resultado = mysqli_query($conexion,$query);

    return $resultado;
}