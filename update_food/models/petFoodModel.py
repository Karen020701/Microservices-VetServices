class petFood:
    @staticmethod
    def update_petFood(id, descrip, type, price, quantity, cursor):
        query = """
        UPDATE pet_food
        SET descrip = %s, type = %s, price = %s, quantity = %s
        WHERE id = %s;
        """
        cursor.execute(query, (descrip, type, price, quantity, id))
        return id if cursor.rowcount > 0 else None