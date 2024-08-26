const Medicine = require('../models/medicineModel');

const service = {
  MedicineService: {
    MedicineServiceSoapPort: {
      listMedicine: async (args, callback) => {
        try {
          const result = await Medicine.findAll();
          const medicines = result.rows.map(medicine => ({
            id: medicine.id,
            name: medicine.name,
            usage: medicine.usage,
            price: medicine.price,
            quantity: medicine.quantity,
          }));
          callback(null, { medicineList: medicines });
        } catch (err) {
          callback({ faultstring: err.message });
        }
      }          
    }
  }
};

module.exports = service;
