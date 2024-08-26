const serviceService = require('../services/serviceService');

const serviceController = {
    getServices: async (ws) => {
        try {
            const services = await serviceService.getAllServices();
            ws.send(JSON.stringify(services));
        } catch (error) {
            ws.send(JSON.stringify({ error: 'Failed to fetch services' }));
        }
    }
};

module.exports = serviceController;
