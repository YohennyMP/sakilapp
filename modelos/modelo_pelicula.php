<?php 
include_once "conexion.php";

function obtenerPeliculas($conexion){

    $sql = "SELECT * FROM film WHERE film_id < 51";
    return mysqli_query($conexion,$sql);

}

function obtenerPeliculaspornombre($conexion,$nombre){

    $sql = "SELECT * FROM film WHERE LIKE %$nombre%";
    echo $sql;/*
    $resultado = mysqli_query($conexion, $sql);
    return $resultado;*/

}