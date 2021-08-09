<?php
$pagina = "peliculas";
require_once "modelos/modelo_pelicula.php";

$pagina = "pelicula";

$peliculas = obtenerPeliculas($conexion);

/*if(isset($_GET['buscar'])){

    $nombre = $_GET['nombre'] ?? "";
    $peliculas = obtenerPeliculaspornombre($conexion,$nombre);

}*/
require_once "vistas/pelicula.html.php";