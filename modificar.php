<?php
include('persona.php');
$persona = new Persona();
$datosPersona = $persona->obtenerPersona($_GET['id']);
if(isset($_POST) && !empty($_POST)){
    $update = $persona->modificarUsuario($_GET['id'],$_POST);
    if($update){
        echo "Actualización exitosa";
    } else {
        echo "Fallo la actualización";
    }
}
?>


<form method="POST">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombre" id="nombre" value="<?= $datosPersona->nombre ?>">
    <br>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellido" id="apellido" value="<?= $datosPersona->apellido ?>">
    <br>
    <label for="profesion">Profesion</label>
    <input type="text" name="profesion" id="profesion" value="<?= $datosPersona->profesion ?>">
    <br>
    <br>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" cols="30" rows="10">
      <?= $datosPersona->descripcion ?>
    </textarea>
    <br>
    <button>Modificar</button>
</form>
