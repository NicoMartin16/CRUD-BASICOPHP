<?php

include('persona.php');//Llamamos al archivo.
$persona = new Persona();//Creamos una nueva iinstancia de persona.
//Validamos si ya se envió algun dato desde el formulario.
if(isset($_POST) && !empty($_POST)){
    $insert = $persona->crearPersona($_POST); //Enviamos los parametros del post a la funcion de crearPersona
    if($insert){
        echo "Registro exitoso";
    } else {
        echo "Falló el registro";
    }
}

$todasLasPersonas = $persona->obtenerPersonas();
?>

<form method="POST">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellido" id="apellido">
    <br>
    <label for="profesion">Profesion</label>
    <input type="text" name="profesion" id="profesion">
    <br>
    <br>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
    <br>
    <button>Enviar</button>
</form>
<table>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Profesion</th>
    <th>Descripcion</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    <?php
    while($pers = mysqli_fetch_object($todasLasPersonas)){
        echo "<tr>";
        echo "<td>$pers->nombre</td>";
        echo "<td>$pers->apellido</td>";
        echo "<td>$pers->profesion</td>";
        echo "<td>$pers->descripcion</td>";
        echo "<td><a href='modificar.php?id=$pers->id'>Modificar</a></td>";
        echo "<td><a href='eliminar.php?id=$pers->id'>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>

</table>