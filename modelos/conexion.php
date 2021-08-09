<?php 
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$bdd = 'sakila';

// Valores de la base de datos 000webhost
if ( $_SERVER['SERVER_NAME'] == 'xxxxxx.000webhostapp.com' ) {
    $host = "localhost";
    $user = "xxx";
    $pass = "xxx";
    $bdd = "xxx";
}

$conexion = mysqli_connect($host,$user,$pass,$bdd);

if(!$conexion){
    echo "<br>hubo un error al conectarse";
}

function refrezcar($nombrePagina){
    header("Location: $nombrePagina", true, 303);
}
