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
}
