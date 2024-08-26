const Accessory = require('../models/accessoryModel');

const service = {
  AccessoryService: {
    AccessoryServiceSoapPort: {
      listAccessory: async (args, callback) => {
        try {
          const result = await Accessory.findAll();
          const accessories = result.rows.map(accessory => ({
            id: accessory.id,
            name: accessory.name,
            type: accessory.type,
            price: accessory.price,
            quantity: accessory.quantity,
          }));
          callback(null, { accessoryList: accessories });
        } catch (err) {
          callback({ faultstring: err.message });
        }
      }          
    }
  }
};

module.exports = service;
