const express = require('express');
const bodyParser = require('body-parser');
const soap = require('soap');
const cors = require('cors');
const medicineService = require('./services/medicineService');
const wsdl = require('./services/medicineWsdl');

const app = express();
const port = 3019;

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Medicine SOAP Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

// Exponer el servicio SOAP
app.listen(port, () => {
  console.log(`Medicine SOAP Microservice listening at http://localhost:${port}`);
  const wsdlPath = '/wsdl';
  soap.listen(app, wsdlPath, medicineService, wsdl);
  console.log(`WSDL available at http://localhost:${port}${wsdlPath}?wsdl`);
});
