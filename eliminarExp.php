<?php
if(isset($_GET['id'])){
    require('exp.php');
    $experiencia = new Experiencia();
    $eliminar = $experiencia->eliminarExperiencia($_GET['id']);
    if($eliminar){
        header('location: agregarExperiencia.php');
    } else {
        echo "Error al eliminar";
    }
}