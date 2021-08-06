<?php
require_once "modelos/modelo_actor.php";

$pagina = "Actores";

$actores = obtenerActores($conexion);

try {
    if (isset($_POST['insertar'])) {
        $nom = $_POST['nom'] ?? "";
        $apellido = $_POST['apellido'] ?? "";
        $id = $_POST['id'] ?? "";

        if (empty($nom)) {
            throw new Exception("el nombre no puede estar vacio");
        }
        if (empty($apellido)) {
            throw new Exception("el apelido no puede estar vacio");
        }
        $data = compact('nom', 'apellido');

        #si el id esta vacio, se va a insertar
        if (empty($id)) {
            $insertado = insertarActor($conexion, $data);

            if ($insertado) {
                $_SESSION['mensaje'] = 'Insercion correcta';
            } 
        } 
        else {
            #de lo contrario se va a actualizar
            $data['id'] = $id;

            $actualizado = actualizarActor($conexion, $data);

            if ($actualizado) {
                $_SESSION['mensaje'] = 'Datos actualizados correctamente';
            }
        }

        #prevenir el reenvio del formulario
        refrezcar("actor.php");
    }
} catch (Exception $e) {
    $_SESSION['mensaje'] = $e->getMessage();
}

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    /*echo $id;*/

    $eliminar = eliminarActor($conexion, $id);

    if ($eliminar) {
        $_SESSION['mensaje'] = 'Eliminado exitosamente';
    } else {
        $_SESSION['mensaje'] = 'No se pudo eliminar';
    }

    #prevenir el reenvio del formulario
    refrezcar("actor.php");
}

#editar
if (isset($_GET['editar'])) {

    $id = $_GET['editar'];

    #conseguir la informacion de la base de datos
    $result = obtenerActoresporId($conexion, $id);

    $info = mysqli_fetch_assoc($result);

    // print_r($info);

}


#actualizar
if (isset($_GET['actualizar'])) {

    $id = $_GET['actualizar'];

    $result = obtenerActoresPorId($conexion, $id);

    $info = mysqli_fetch_assoc($result);
}


if (isset($_GET['buscar'])) {

    $nombre = $_GET['nombre'] ?? "";
    $actores = obtenerActoresporNombre($conexion, $nombre);
}








require_once "vistas/actores.html.php";
