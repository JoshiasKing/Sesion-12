<?php
class Database {
    private $host = "localhost";
    private $db_name = "bd_tienda"; 
    private $username = "root";
    private $password = "";
    public $conn;

    public function conectar(): PDO {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=bd_tienda", "root", "");
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    } 
}
?>
