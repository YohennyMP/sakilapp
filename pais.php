<?php
require_once 'modelos/modelo_pais.php';

$pagina = 'Pais';

$resultado = obtenerpais($conexion);

try{
    if (isset($_POST['insetar'])) {
        $nombre = $_POST['nom'] ?? "";
        $id = $_POST['id'] ?? "";

        $datos = compact('nom');


        
        $datos = compact('nom');
        #si el id esta vacio, se va a insertar
        if(empty($id)){
            $inser = insertarPais($conexion, $datos);
            
            if ($inser){
            $_SESSION['mensaje'] = 'Datos guardados correctamente';
            }
        } else{
            # de lo contrario, se actualizara
            $datos['id'] = $id;

            $actualizado = editarPaisPorID($conexion, $datos);

            if($actualizado){
                $_SESSION['mensaje'] = "Datos actualizado correctamente";
            }
        }
                
       
        refrezcar("pais.php");
    }

    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar']; 
               
        $eliminar = eliminarPais($conexion, $id);

        // if ($eliminado){
        //     $_SESSION['mensaje'] = "Eliminado Correctamente";
        // }
        // else {
        //     $_SESSION['mensaje'] = "No se puede eliminado";
        // }
        refrezcar("pais.php");
    }
    if (isset($_GET['editar'])){
        $id = $_GET['editar'];

        $result = obtenerPaisPorID($conexion, $id);

        $info = mysqli_fetch_assoc($result);

        // if($editar){
        //     $_SESSION['mensaje'] = "Editado correctamente";
        // } else{
        //     $_SESSION['mensaje'] = "No se puede editar";
        // }
    }
    
}catch(Exception $ex){
    $_SESSION['mensaje'] = $ex->getMessage();
}
require_once 'vistas/pais.html.php';