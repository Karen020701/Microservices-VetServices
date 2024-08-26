const Branch = require('../models/branchModel');

const service = {
  BranchService: {
    BranchServiceSoapPort: {
      listBranch: async (args, callback) => {
        try {
          const result = await Branch.findAll();
          const branches = result.rows.map(branch => ({
            id: branch.id,
            name: branch.name,
            address: branch.address,
            phone_number: branch.phone_number,
          }));
          callback(null, { branchList: branches });
        } catch (err) {
          callback({ faultstring: err.message });
        }
      }          
    }
  }
};

module.exports = service;
