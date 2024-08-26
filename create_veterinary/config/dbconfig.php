<?php
class DatabaseConnector {
    private $dsn = "pgsql:host=postgresql-karen.alwaysdata.net;port=5432;dbname=karen_dbveterinary;user=karen_programacion;password=KPCA0207-";

    public function connect() {
        $conn = null;  
        try {
            $conn = new PDO($this->dsn);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión establecida.";
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
        return $conn;
    }
}
?>

