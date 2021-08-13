<?php
require_once "modelos/modelo_categoria.php";

$pagina = "Categorias";

$categorias = obtenerCategorias($conexion);

try{
    if(isset($_POST['insertar'])){
        
        $categoria = $_POST['categoria'] ?? "";
        $id = $_POST['id'];
        if(empty($categoria)){
            throw new Exception("la categoria no puede estar vacia");
        }
        if (empty($id)) {
            $insertado = insertarCategorias($conexion,$categoria);

            if ($insertado) {
                $_SESSION['mensaje'] = 'Datos insertados correctamente';
            } else {
                $_SESSION['mensaje'] = 'Datos no insertados';
            }
        }else{
            $actualizado = actualizarCategorias($conexion,$categoria,$id);
            if ($actualizado) {
                $_SESSION['mensaje'] = 'Datos actualizados correctamente';
            }
        }
        refrezcar("categoria.php");

    }
} catch (Exception $e) {
    $_SESSION['mensaje'] = $e->getMessage();
}

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    /*echo $id;*/

    $eliminar = borrarCategoria($conexion, $id);

    if ($eliminar) {
        $_SESSION['mensaje'] = 'Eliminado exitosamente';
    } else {
        $_SESSION['mensaje'] = 'No se pudo eliminar';
    }

    #prevenir el reenvio del formulario
    refrezcar("categoria.php");
}

#editar
if (isset($_GET['editar'])) {

    $id = $_GET['editar'];

    $result = obtenerCategoriasporid($conexion, $id);

    $info = mysqli_fetch_assoc($result);

}


#actualizar
if (isset($_GET['actualizar'])) {

    $id = $_GET['actualizar'];

    $result = obtenerCategoriasporid($conexion, $id);

    $info = mysqli_fetch_assoc($result);
}


if (isset($_GET['buscar'])) {

    $nombre = $_GET['nombre'] ?? "";
    $categorias = obtenerCategoriasporNombre($conexion, $nombre);
}

require_once "vistas/categoria.html.php";