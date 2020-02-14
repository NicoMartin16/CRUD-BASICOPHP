<?php
if(isset($_GET['id'])){
    require('Persona.php');
    $persona = new Persona();
    $eliminar = $persona->eliminarUsuario($_GET['id']);
    if($eliminar){
        header('location: index.php');
    } else {
        echo "Error al eliminar";
    }
}