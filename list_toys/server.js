const express = require('express');
const bodyParser = require('body-parser');
const soap = require('soap');
const cors = require('cors');
const toyService = require('./services/toyService');
const wsdl = require('./services/toyWsdl');

const app = express();
const port = 3031;

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Toy SOAP Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

// Exponer el servicio SOAP
app.listen(port, () => {
  console.log(`Toy SOAP Microservice listening at http://localhost:${port}`);
  const wsdlPath = '/wsdl';
  soap.listen(app, wsdlPath, toyService, wsdl);
  console.log(`WSDL available at http://localhost:${port}${wsdlPath}?wsdl`);
});
