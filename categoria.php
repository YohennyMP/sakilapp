<?php
require_once "modelos/modelo_categoria.php";

$pagina = "Categoria";

$categorias = obtenerCategorias($conexion);

if(isset($_POST['buscar'])){
    $nombre = $_POST['nombre'] ?? "";
    $actores = obtenerCategoriasporNombre($conexion,$nombre);
}
if(isset($_POST['insertar'])){
    
    $categoria = $_POST['categoria'] ?? "";
    
    $datos = compact('categoria');

    $insertado = insertarCategorias($conexion,$datos);

    if ($insertado) {
        $_SESSION['mensaje'] = 'Datos insertados correctamente';
    } else {
        $_SESSION['mensaje'] = 'Datos no insertados';
    }
}
require_once "vistas/categoria.html.php";