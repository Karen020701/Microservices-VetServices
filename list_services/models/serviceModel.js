const db = require('../config/dbConfig');

const Service = {
  findAll: async () => {
    const query = 'SELECT * FROM services';
    return db.query(query);
  }
};

module.exports = Service;
