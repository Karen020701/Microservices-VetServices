from flask import Blueprint, request, jsonify
from controllers.toysController import update_toys

toys_bp = Blueprint('toys_bp', __name__)

@toys_bp.route('/toys/<int:id>', methods=['PUT'])
def handle_update_toys(id):
    data = request.json
    success = update_toys(id, data)  
    if success:
        return jsonify({'id': id, 'message': 'Toys updated successfully'}), 200
    else:
        return jsonify({'message': 'Failed to update toys'}), 404