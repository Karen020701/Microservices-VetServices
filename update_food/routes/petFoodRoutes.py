from flask import Blueprint, request, jsonify
from controllers.petFoodController import update_petFood

petFood_bp = Blueprint('petFood_bp', __name__)

@petFood_bp.route('/petFood/<int:id>', methods=['PUT'])
def handle_update_petFood(id):
    data = request.json
    success = update_petFood(id, data)  
    if success:
        return jsonify({'id': id, 'message': 'Pet Food updated successfully'}), 200
    else:
        return jsonify({'message': 'Failed to update pet food'}), 404