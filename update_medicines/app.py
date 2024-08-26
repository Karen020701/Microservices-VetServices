from flask import Flask
from flask_cors import CORS  # Importa CORS 
from routes.medicinesRoutes import medicines_bp

app = Flask(__name__)  # Asegúrate de usar __name__

# Configura CORS
CORS(app, resources={r"/api/*": {"origins": "*"}})  # Permite solicitudes desde cualquier origen en la ruta /api/*

# Registra los blueprints
app.register_blueprint(medicines_bp, url_prefix='/api')


if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5001) 