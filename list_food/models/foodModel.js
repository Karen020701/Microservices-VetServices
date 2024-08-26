const db = require('./db');

const Food = {
  findAll: async () => {
    const query = 'SELECT * FROM food';
    return db.query(query);
  }
};

module.exports = Food;
