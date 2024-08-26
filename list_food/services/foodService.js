const Food = require('../models/foodModel');

const service = {
  FoodService: {
    FoodServiceSoapPort: {
      listFood: async (args, callback) => {
        try {
          const result = await Food.findAll();
          const foods = result.rows.map(food => ({
            id: food.id,
            descrip: food.descrip,
            type: food.type,
            price: food.price,
            quantity: food.quantity,
          }));
          callback(null, { foodList: foods });
        } catch (err) {
          callback({ faultstring: err.message });
        }
      }          
    }
  }
};

module.exports = service;
