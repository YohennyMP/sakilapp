<?php
require_once "modelos/modelo_idioma.php";

$pagina = "idiomas";
$nombre = $_GET['nombre'] ?? "";
$query = "SELECT * FROM language WHERE name LIKE '%$nombre%'";
$resultado = mysqli_query($conexion, $query);

$idioma = obtenerIdiomas($conexion);

if(isset($_POST['guardar'])){

    $nombre = $_POST['idioma'] ?? "";

    $insertado = insertarIdioma($conexion,$nombre);

    if($insertado){
        $_SESSION['mensaje'] = 'Insercion correcta';
    }
}
if(isset($_GET['buscar'])){

    $nombre = $_GET['nombre'];

    $resultado = obtenerIdiomas($conexion,$nombre);

    return $resultado;
}

require_once "vistas/idioma.html.php";