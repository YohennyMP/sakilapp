<?php
require_once "modelos/modelo_actor.php";

$pagina = "Actores";
$nombre = $_GET['nombre'] ?? "";
$query = "SELECT * FROM actor WHERE first_name LIKE '%$nombre%'";
$resultado = mysqli_query($conexion, $query);

$actor = obtenerActores($conexion);

if(isset($_POST['insertar'])){

    $nom = $_POST['nom'] ?? "";
    $apellido = $_POST['apellido'] ?? "";

    $data = compact('nom', 'apellido');

    $insertado = insertarActor($conexion,$data);

    if($insertado){
        $_SESSION['mensaje'] = 'Insercion correcta';
    }
}
if(isset($_GET['buscar'])){

    $nombre = $_GET['nombre'] ?? "";
    
    $actores = obtenerActoresporNombre($conexion,$nombre);

}
require_once "vistas/actores.html.php";