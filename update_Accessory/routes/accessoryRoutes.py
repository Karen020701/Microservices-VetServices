from flask import Blueprint, request, jsonify
from controllers.accessoryController import update_accessory

accessories_bp = Blueprint('accessories_bp', __name__)

@accessories_bp.route('/accessories/<int:id>', methods=['PUT'])
def handle_update_accessory(id):
    data = request.json
    success = update_accessory(id, data)  # Asegúrate de pasar el ID y los datos
    if success:
        return jsonify({'id': id, 'message': 'Accessory updated successfully'}), 200
    else:
        return jsonify({'message': 'Failed to update accessory'}), 404