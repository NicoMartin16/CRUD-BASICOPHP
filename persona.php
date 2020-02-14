<?php
include('Database.php');
class Persona {
    public $id;
    public $nombre;
    public $apellido;
    public $profesion;
    public $descripcion;
    public $conn;
    /**
    * Método por donde empieza nuestra clase
    */
    function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    function crearPersona($data){
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $profesion = $data['profesion'];
        $descripcion = $data['descripcion'];

        $sql = "INSERT INTO personas (nombre,apellido,profesion,descripcion)
                VALUES ('$nombre', '$apellido', '$profesion', '$descripcion')";
        $res = mysqli_query($this->conn, $sql);
        if($res){
            return true;
        } else {
            return false;
        }
    }

    function obtenerPersonas(){
        $sql = "SELECT * FROM personas";
        return mysqli_query($this->conn, $sql);
    }

    function obtenerPersona($id){
        $sql = "SELECT * FROM personas WHERE id = $id";
        return mysqli_fetch_object(mysqli_query($this->conn, $sql));
    }

    function modificarUsuario($id,$data){
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $profesion = $data['profesion'];
        $descripcion = $data['descripcion'];

        $sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', profesion = '$profesion', descripcion = '$descripcion' WHERE id = $id";
        $update = mysqli_query($this->conn, $sql);
        if($update){
            return true;
        } else {
            return false;
        }
    }

    function eliminarUsuario($id){
        $sql = "DELETE FROM personas WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
