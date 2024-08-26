const db = require('./db');

const Accessory = {
  findAll: async () => {
    const query = 'SELECT * FROM accessories';
    return db.query(query);
  }
};

module.exports = Accessory;
