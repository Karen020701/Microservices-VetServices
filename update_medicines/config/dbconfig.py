import psycopg2

class DatabaseConnector:
    def connect(self):
        """Intenta establecer una conexión con la base de datos PostgreSQL."""
        try:
            conn = psycopg2.connect(
                dbname='karenchicaiza_dbmedicines',
                user='karenchicaiza_programacion',
                password='karenpat0209-',
                host='postgresql-karenchicaiza.alwaysdata.net',
                port='5432'
            )
            print("Conexión establecida.")
            return conn
        except Exception as e:
            print("Error al conectar:", e)
            return None
            
        