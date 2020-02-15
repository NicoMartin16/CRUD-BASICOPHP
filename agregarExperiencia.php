<?php
include('exp.php');
$experiencia = new Experiencia();
if(isset($_POST) && !empty($_POST)){
    $crear = $experiencia->crearexperiencia($_GET['id'],$_POST);
    if($crear){
        echo "Se registro la experiencia correctamente";
    } else {
        echo "Hubo un error en el registro";
    }
}

$experiencias = $experiencia->obtenerExperiencias();
?>
<form method="POST">
    <label for="empresa">Empresa</label>
    <input type="text" name="empresa" id="empresa">
    <br>
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad">
    <br>
    <label for="duracion">Duracion</label>
    <input type="text" name="duracion" id="duracion">
    <br>
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" id="cargo">
    <!-- <input type="hidden" name="idPersona" value="<?=$_GET['id']?>"/> -->
    <br>
    <br>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
    <br>
    <button>Guardar experiencia</button>


    <table>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Duracion</th>
        <th>Cargo</th>
        <th>Persona</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        <?php
        while ($exps = mysqli_fetch_object($experiencias)){
            echo "<tr>";
            echo "<td>$exps->empresa</td>";
            echo "<td>$exps->ciudad</td>";
            echo "<td>$exps->duracion</td>";
            echo "<td>$exps->cargo</td>";
            echo "<td>$exps->nombre</td>";
            echo "<td><a href='modificarExp.php?id=$exps->id'>Modificar experiencia</a></td>";
            echo "<td><a href='eliminarExp.php?id=$exps->id'>Eliminar experiencia</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>