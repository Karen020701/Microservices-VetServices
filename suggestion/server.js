const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors'); // Importar el paquete cors
const connectDB = require('./config/dbConfig');
const suggestionRoutes = require('./routes/suggestionRoutes');
const swaggerUi = require('swagger-ui-express');
const swaggerJSDoc = require('swagger-jsdoc');

const app = express();
const port = 3022;

connectDB();

// Middleware
app.use(bodyParser.json());

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));

// Configuración de Swagger
const swaggerOptions = {
  swaggerDefinition: {
    openapi: '3.0.0',
    info: {
      title: 'Veterinay Suggestion API',
      version: '1.0.0',
      description: 'API to manage general suggestion'
    },
    servers: [
      {
        url: `http://localhost:${port}/api`
      }
    ]
  },
  apis: ['./src/routes/*.js'],
};

const swaggerDocs = swaggerJSDoc(swaggerOptions);
app.use('/api-docs', swaggerUi.serve, swaggerUi.setup(swaggerDocs));

// Rutas
app.use('/api', suggestionRoutes);

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
