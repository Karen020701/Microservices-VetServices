const fs = require('fs');
const path = require('path');

const wsdl = fs.readFileSync(path.resolve(__dirname, 'accessory.wsdl'), 'utf8');

module.exports = wsdl;
