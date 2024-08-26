from models.toysModel import Toys
from config.dbconfig import DatabaseConnector

def update_toys(id, data):
    name = data['name']
    type = data.get('type', None)
    price = data['price']
    quantity = data.get('quantity', 0)
    db = DatabaseConnector()
    conn = db.connect()
    cursor = conn.cursor()
    try:
        Toys.update_toys(id, name, type, price, quantity, cursor)
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