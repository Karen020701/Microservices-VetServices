const express = require('express');
const bodyParser = require('body-parser');
const soap = require('soap');
const cors = require('cors');
const branchService = require('./services/branchService');
const wsdl = require('./services/branchWsdl');

const app = express();
const port = 3023;

app.get('/', (req, res) => {
  res.status(200).json({ status: 'ok', message: 'Branch SOAP Microservice Running' });
});

app.use(cors({
  origin: 'http://localhost:3000'
}));
app.use(bodyParser.json());

// Exponer el servicio SOAP
app.listen(port, () => {
  console.log(`Branch SOAP Microservice listening at http://localhost:${port}`);
  const wsdlPath = '/wsdl';
  soap.listen(app, wsdlPath, branchService, wsdl);
  console.log(`WSDL available at http://localhost:${port}${wsdlPath}?wsdl`);
});
