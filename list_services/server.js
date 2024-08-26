const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const { Server } = require('ws');
const serviceController = require('./controllers/serviceController');
require('dotenv').config();

const app = express();

// Middlewares
app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

const port = process.env.PORT || 3000;
// Crear el servidor y escuchar en el puerto definido
const server = app.listen(port, () => {
  console.log(`Service WebSocket Microservice listening at ws://localhost:${port}`);
});

// Configuración del WebSocket Server
const wss = new Server({ server });

// Manejo de conexiones WebSocket
wss.on('connection', (ws) => {
  console.log('New client connected');

  // Enviar lista de servicios al cliente
  serviceController.getServices(ws);

  // Manejo de mensajes recibidos desde el cliente (opcional)
  ws.on('message', (message) => {
    console.log(`Received message: ${message}`);
  });

  // Manejo de la desconexión del cliente
  ws.on('close', () => {
    console.log('Client disconnected');
  });
});

module.exports = server;
