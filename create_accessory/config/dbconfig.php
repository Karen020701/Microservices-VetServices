<?php
class DatabaseConnector {
    private $host = "postgresql-karen.alwaysdata.net";
    private $port = "5432";
    private $dbname = "karen_dbaccesories";
    private $user = "karen_programacion";
    private $password = "KPCA0207-";

    private function getDsn() {
        return "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname};user={$this->user};password={$this->password}";
    }

    public function connect() {
        $conn = null;  
        try {
            $dsn = $this->getDsn(); 
            $conn = new PDO($dsn);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión establecida.";
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
        return $conn;
    }
}
?>
