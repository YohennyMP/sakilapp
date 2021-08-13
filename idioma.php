<?php
require_once "modelos/modelo_idioma.php";

$pagina = "idiomas";
$nombre = $_GET['nombre'] ?? "";
$query = "SELECT * FROM language WHERE name LIKE '%$nombre%'";
$resultado = mysqli_query($conexion, $query);

$idioma = obtenerIdiomas($conexion);

try{
    if(isset($_POST['insertar'])){
        $pais = $_POST['pais'] ?? "";

        if(empty($nom)){
            throw new Exception("el pais no puede estar vacio");
        }
        $data = compact('pais');
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

if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    
    $eliminar = eliminarActor($conexion, $id);

    if($eliminar){
        $_SESSION['mensaje'] = 'Eliminado exitosamente';
    }else{
        $_SESSION['mensaje'] = 'No se pudo eliminar';
    }
}

if(isset($_GET['buscar'])){

    $nombre = $_GET['nombre'];

    $resultado = 'obtenerPaises'($conexion,$nombre);

    return $resultado;
}

require_once "vistas/idioma.html.php";