from flask import Blueprint, request, jsonify
from controllers.medicinesController import update_medicines

medicines_bp = Blueprint('medicines_bp', __name__)

@medicines_bp.route('/medicines/<int:id>', methods=['PUT'])
def handle_update_medicines(id):
    data = request.json
    success = update_medicines(id, data)  
    if success:
        return jsonify({'id': id, 'message': 'Medicines updated successfully'}), 200
    else:
        return jsonify({'message': 'Failed to update medicines'}), 404