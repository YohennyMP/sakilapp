<?php 
$host = '127.0.0.1';
$user = 'root';
$pass = '12345678';
$bdd = 'sakila';
$conexion = mysqli_connect($host,$user,$pass,$bdd);
if(!$conexion){
    echo "<br>hubo un error al conectarse";
}