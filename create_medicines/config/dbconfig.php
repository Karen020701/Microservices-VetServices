<?php
class DatabaseConnector {
    private $dsn = "pgsql:host=postgresql-karen.alwaysdata.net;port=5432;dbname=karen_dbmedicines;user=karen_programacion;password=KPCA0207-";

    public function connect() {
        try {
            $conn = new PDO($this->dsn);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
            return null;
        }
    }
}
?>
