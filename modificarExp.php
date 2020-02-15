<?php
include ('exp.php');
$experiencia = new Experiencia();
$datosExperiencia = $experiencia->obtenerExperiencia($_GET['id']);
if(isset($_POST) && !empty($_POST)){
    $update = $experiencia->modificarExperiencia($_GET['id'], $_POST);
    if($update){
        echo "Actualizacion de experiencia exitosa";
    } else {
        echo "Fallo la actualización";
    }
}
?>

<form method="POST">
    <label for="empresa">Empresa</label>
    <input type="text" name="empresa" id="empresa" value="<?=$datosExperiencia->empresa?>">
    <br>
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="<?=$datosExperiencia->ciudad?>">
    <br>
    <label for="duracion">Duracion</label>
    <input type="text" name="duracion" id="duracion" value="<?=$datosExperiencia->duracion?>">
    <br>
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" id="cargo" value="<?=$datosExperiencia->cargo?>">
    <br>
    <button>Modificar experiencia</button>
</form>