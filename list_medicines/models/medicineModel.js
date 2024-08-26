const db = require('./db');

const Medicines = {
  findAll: async () => {
    const query = 'SELECT * FROM medicines';
    return db.query(query);
  }
};

module.exports = Medicines;
