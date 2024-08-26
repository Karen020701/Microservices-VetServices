const express = require('express');
const bodyParser = require('body-parser');
const soap = require('soap');
const cors = require('cors');
const foodService = require('./services/foodService');
const wsdl = require('./services/foodWsdl');

const app = express();
const port = 3018;

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Food SOAP Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

// Exponer el servicio SOAP
app.listen(port, () => {
  console.log(`Food SOAP Microservice listening at http://localhost:${port}`);
  const wsdlPath = '/wsdl';
  soap.listen(app, wsdlPath, foodService, wsdl);
  console.log(`WSDL available at http://localhost:${port}${wsdlPath}?wsdl`);
});
