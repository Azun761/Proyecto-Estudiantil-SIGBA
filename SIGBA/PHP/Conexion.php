<?php
// Conexion.php
class Conexion {
    private $host = "localhost";
    private $dbname = "SIGBADB";
    private $username = "postgres";
    private $password = "1234"; // Coloca aquí tu contraseña de PostgreSQL
    private $conn;

    public function conectar() {
        try {
            $dsn = "pgsql:host=" . $this->host . ";dbname=" . $this->dbname;
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function desconectar() {
        $this->conn = null;
    }
}
?>