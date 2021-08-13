<?php
$pagina = "ciudades";
require_once "modelos/modelo_ciudad.php";

$ciudad = obtenerciudad($conexion);

try{
    if(isset($_POST['insertar'])){
        
        $ciudad = $_POST['ciudad'] ?? "";
        $pais_id = $_POST[pais_id];
        $id = $_POST['id'];
        if(empty($ciudad)){
            throw new Exception("la ciudad no puede estar vacia");
        }
        if (empty($id)) {
            $insertado = insertarCiudad($conexion,$ciudad,$pais_id);
            
            if ($insertado) {
                $_SESSION['mensaje'] = 'Datos insertados correctamente';
            } else {
                $_SESSION['mensaje'] = 'Datos no insertados';
            }
        }else{
            $actualizado = actualizarCiudad($conexion,$ciudad,$id,$pais_id);
            
            if ($actualizado) {
                $_SESSION['mensaje'] = 'Datos actualizados correctamente';
            }
        }
        //refrezcar("ciudad.php");

    }
} catch (Exception $e) {
    $_SESSION['mensaje'] = $e->getMessage();
}

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    echo $id;
    
    $eliminar = borrarCiudad($conexion, $id);
    
    if ($eliminar) {
        $_SESSION['mensaje'] = 'Eliminado exitosamente';
    } else {
        $_SESSION['mensaje'] = 'No se pudo eliminar';
    }

    //refrezcar("ciudad.php");
}

#editar
if (isset($_GET['editar'])) {

    $id = $_GET['editar'];

    $result = obtenerCiudadporid($conexion, $id);

    $info = mysqli_fetch_assoc($result);

}


#actualizar
if (isset($_GET['actualizar'])) {

    $id = $_GET['actualizar'];

    $result = obtenerCiudadporid($conexion, $id);
    
    $info = mysqli_fetch_assoc($result);
}


if (isset($_GET['buscar'])) {

    $nombre = $_GET['nombre'] ?? "";
    $ciudad = obtenerCiudadporNombre($conexion, $nombre);
    
    //refrezcar("ciudad.php");
}

require_once "vistas/ciudad.html.php";