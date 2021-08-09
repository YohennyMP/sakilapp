<?php
require_once "modelos/modelo_actor.php";

$pagina = "Actores";

$actores = obtenerActores($conexion);

try{
    if(isset($_POST['insertar'])){
        $nom = $_POST['nom'] ?? "";
        $apellido = $_POST['apellido'] ?? "";

        if(empty($nom)){
            throw new Exception("el nombre no puede estar vacio");
        }
        if(empty($apellido)){
            throw new Exception("el apelido no puede estar vacio");
        }
        $data = compact('nom', 'apellido');
        $insertado = insertarActor($conexion,$data);

        if($insertado){
            $_SESSION['mensaje'] = 'Insercion correcta';
        }else{
            $_SESSION['mensaje'] = 'insercion invalida';
        }
    }
}catch(Exception $e){
    $_SESSION['mensaje'] = $e->getMessage();
}

/*if(isset($_GET['eliminar'])){
    echo $_GET;

    $id = $_GET['actor_id'];

    $eliminar = eliminarActor($conexion, $id);

    if($eliminar){
        $_SESSION['mensaje'] = 'Eliminado exitosamente';
    }else{
        $_SESSION['mensaje'] = 'No se pudo eliminar';
    }

}*/

if(isset($_GET['buscar'])){

    $nombre = $_GET['nombre'] ?? "";
    $actores = obtenerActoresporNombre($conexion,$nombre);

}
require_once "vistas/actores.html.php";