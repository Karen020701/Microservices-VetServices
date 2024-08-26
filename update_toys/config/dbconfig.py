# config/dbconfig.py
import os
from dotenv import load_dotenv
import psycopg2

# Cargar las variables del archivo .env
load_dotenv()

# Obtener las variables de entorno
DB_USER = os.getenv('DB_USER')
DB_HOST = os.getenv('DB_HOST')
DB_DATABASE = os.getenv('DB_DATABASE')
DB_PASSWORD = os.getenv('DB_PASSWORD')
DB_PORT = os.getenv('DB_PORT')

class DatabaseConnector:
    def __init__(self):
        try:
            self.connection = psycopg2.connect(
                dbname=DB_DATABASE,
                user=DB_USER,
                password=DB_PASSWORD,
                host=DB_HOST,
                port=DB_PORT
            )
            self.cursor = self.connection.cursor()
            print("Conexión exitosa a la base de datos.")
        except Exception as e:
            print(f"Error al conectar a la base de datos: {e}")
            self.connection = None
            self.cursor = None

    def close(self):
        if self.cursor:
            self.cursor.close()
        if self.connection:
            self.connection.close()
