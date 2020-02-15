<?php
include('database.php');
class Experiencia  
{
    public $id;
    public $empresa;
    public $ciudad;
    public $duracion;
    public $cargo;
    public $idPersona;
    public $conn;

    function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    function crearexperiencia($id,$data) {
        $empresa = $data['empresa'];
        $ciudad = $data['ciudad'];
        $duracion = $data['duracion'];
        $cargo = $data['cargo'];
        // $idPersona = $data['idPersona'];

        $sql = "INSERT INTO experiencias (empresa,ciudad,duracion,cargo,idPersona) VALUES ('$empresa', '$ciudad', '$duracion', '$cargo', $id)";
        $crear = mysqli_query($this->conn, $sql);
        if($crear){
            return true;
        } else {
            return false;
        }
    }

    function obtenerExperiencias(){
        $sql = "SELECT experiencias.*,nombre FROM experiencias 
                INNER JOIN personas on idPersona = personas.id";
        return mysqli_query($this->conn, $sql);
    }

    function obtenerExperiencia($id){
        $sql = "SELECT * FROM experiencias WHERE id = $id";
        return mysqli_fetch_object(mysqli_query($this->conn, $sql));
    }

    function modificarExperiencia($id, $data){
        $empresa = $data['empresa'];
        $ciudad = $data['ciudad'];
        $duracion = $data['duracion'];
        $cargo = $data['cargo'];

        $sql = "UPDATE experiencias SET empresa = '$empresa', ciudad = '$ciudad', duracion = '$duracion', cargo = '$cargo' WHERE id = $id";
        $update = mysqli_query($this->conn, $sql);
        if($update){
            return true;
        } else {
            return false;
        }
    }

    function eliminarExperiencia($id){
        $sql = "DELETE FROM experiencias WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
