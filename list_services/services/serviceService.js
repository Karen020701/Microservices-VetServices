const Service = require('../models/serviceModel');

const serviceService = {
  getAllServices: async () => {
    try {
      const result = await Service.findAll();
      return result.rows.map(service => ({
        id: service.id,
        name: service.name,
        description: service.description,
      }));
    } catch (error) {
      throw new Error('Error fetching services');
    }
  }
};

module.exports = serviceService;
