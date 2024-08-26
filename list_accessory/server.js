const express = require('express');
const bodyParser = require('body-parser');
const soap = require('soap');
const cors = require('cors');
const accessoryService = require('./services/accessoryService');
const wsdl = require('./services/accessoryWsdl');

const app = express();
const port = 3016;

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Accessory SOAP Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

// Exponer el servicio SOAP
app.listen(port, () => {
  console.log(`Accessory SOAP Microservice listening at http://localhost:${port}`);
  const wsdlPath = '/wsdl';
  soap.listen(app, wsdlPath, accessoryService, wsdl);
  console.log(`WSDL available at http://localhost:${port}${wsdlPath}?wsdl`);
});
