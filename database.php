<?php

class Database  
{
    /*
    *Atributos
    */
    private $server = 'localhost';
    private $user = 'root';
    private $db = 'prueba4';
    private $pass = '';
    private $conn;

    /**
    * Funcion para conectar a nuestra base de datos,
    * return conn.
    */
    function conectar(){
        // $conec = new PDO("mysql:host=$server;dbname=$db", $user, $pass); Conexion con PDO
        $this->conn = mysqli_connect($this->server,$this->user,$this->pass, $this->db);
        if(mysqli_connect_error()){
            echo "Error:" . mysqli_connect();
        }
         else {
            echo "Si nos conectamos a la base de datos";
        }
        return $this->conn;
    }
}
?>