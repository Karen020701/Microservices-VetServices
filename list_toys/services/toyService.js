const Toy = require('../models/toyModel');

const service = {
  ToyService: {
    ToyServiceSoapPort: {
      listToy: async (args, callback) => {
        try {
          const result = await Toy.findAll();
          const toys = result.rows.map(toy => ({
            id: toy.id,
            name: toy.name,
            type: toy.type,
            price: toy.price,
            quantity: toy.quantity,
          }));
          callback(null, { toyList: toys });
        } catch (err) {
          callback({ faultstring: err.message });
        }
      }          
    }
  }
};

module.exports = service;
