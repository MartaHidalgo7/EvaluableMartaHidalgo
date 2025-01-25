<?php
require_once 'web\config\database.php';

class Imagen {
    private $conn;
    private $table = 'imagenes';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function obtenerImagenes() {
        $query = "SELECT nombre FROM " . $this->table . " WHERE id = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>