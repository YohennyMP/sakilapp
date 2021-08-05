<?php
require_once "modelos/modelo_pais.php";

$pagina = "Paises";

$paises = obtenerPaises($conexion);

if(isset($_GET['buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $paises = obtenerPaisesporNombre($conexion,$nombre);

    var_dump($paises);
}

if(isset($_POST['insertar'])){
    
    $pais = $_POST['pais'] ?? "";
    
    $datos = compact('pais');

    $insertado = insertarPais($conexion,$datos);

    if ($insertado) {
        $_SESSION['mensaje'] = 'Datos insertados correctamente';
    } else {
        $_SESSION['mensaje'] = 'Datos no insertados';

    }
}
require_once "vistas/pais.html.php";