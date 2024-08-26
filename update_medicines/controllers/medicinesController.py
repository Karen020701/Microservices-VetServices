from models.medicinesModel import Medicines
from config.dbconfig import DatabaseConnector

def update_medicines(id, data):
    name = data['name']
    usage = data.get('usage', None)
    price = data['price']
    quantity = data.get('quantity', 0)
    db = DatabaseConnector()
    conn = db.connect()
    cursor = conn.cursor()
    try:
        Medicines.update_medicines(id, name, usage, price, quantity, cursor)
        conn.commit()
    except Exception as e:
        print(e)
        conn.rollback()
        cursor.close()
        conn.close()
        return False
    cursor.close()
    conn.close()
    return True