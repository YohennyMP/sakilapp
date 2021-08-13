<?php 
$host = '127.0.0.1';
$user = 'root';
$pass = '12345678';
$bdd = 'sakila';

// Valores de la base de datos 000webhost
if ( $_SERVER['SERVER_NAME'] == 'boleanx.000webhostapp.com' ) {
    $host = "localhost";
    $user = "id17320107_root";
    $pass = '5Ojx/{$+~\7A\teg';
    $bdd = "id17320107_sakila";
}

$conexion = mysqli_connect($host,$user,$pass,$bdd);

if(!$conexion){
    echo "<br>hubo un error al conectarse";
}

function refrezcar($nombrePagina){
    header("Location: $nombrePagina", true, 303);
}
