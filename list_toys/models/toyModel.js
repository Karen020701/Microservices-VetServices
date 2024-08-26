const db = require('./db');

const Toy = {
  findAll: async () => {
    const query = 'SELECT * FROM toys';
    return db.query(query);
  }
};

module.exports = Toy;
