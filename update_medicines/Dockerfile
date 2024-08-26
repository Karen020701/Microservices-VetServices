# Usar una imagen base oficial de Python
# Using an official Python base image
FROM python:3.13.4-slim

# Configurar el directorio de trabajo en el contenedor
# Configure the working directory in the container
WORKDIR /app

# Copiar el archivo de dependencias primero para aprovechar la caché de capas de Docker
#Copy the dependency file first to take advantage of Docker's layer cache.
COPY requirements.txt .

# Instalar las dependencias del proyecto
# Install project dependencies
RUN pip install --no-cache-dir -r requirements.txt

# Copiar el resto del código de la aplicación al directorio de trabajo
# Copy the rest of the application code to the working directory
COPY . .

# Exponer el puerto en el que se ejecutará la aplicación
# Expose the port on which the application will run
EXPOSE 5000

# Comando para ejecutar la aplicación
# Command to run the application
CMD ["python", "app.py"]