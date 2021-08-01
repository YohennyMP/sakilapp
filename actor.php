<?php
require_once "modelos/modelo_actor.php";

$pagina = "Actores";
$nombre = $_GET['nombre'] ?? "";
$query = "SELECT * FROM actor WHERE first_name LIKE '%$nombre%'";
$resultado = mysqli_query($conexion, $query);

$actor = obtenerActores($conexion);

if(isset($_GET['buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $actores = obtenerActoresporNombre($conexion,$nombre);
}
if(isset($_POST['insertar'])){
    $codigoActor = $_GET['actor_id'] ?? "";
    $nom = $_GET['nom'] ?? "";
    $apellido = $_GET['apellido'] ?? "";
    $ultEdicion = $_GET['ult_edicion'] ?? "";
    $data = $conexion.','.$codigoActor.','.$nom.','.$apellido.','.$ultEdicion;
    echo $data;
    $act = insertarActor($conexion,$data);
}
require_once "vistas/actores.html.php";