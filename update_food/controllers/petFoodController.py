from models.petFoodModel import petFood
from config.dbconfig import DatabaseConnector

def update_petFood(id, data):
    descrip = data.get('descrip', None)
    type = data.get('type', None)
    price = data['price']
    quantity = data.get('quantity', 0)
    db = DatabaseConnector()
    conn = db.connect()
    cursor = conn.cursor()
    try:
        petFood.update_petFood(id, descrip, type, price, quantity, cursor)
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