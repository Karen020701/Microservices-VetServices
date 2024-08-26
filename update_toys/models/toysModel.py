class Toys:
    @staticmethod
    def update_toys(id, name, type, price, quantity, cursor):
        query = """
        UPDATE toys
        SET name = %s, type = %s, price = %s, quantity = %s
        WHERE id = %s;
        """
        cursor.execute(query, (name, type, price, quantity, id))
        return id if cursor.rowcount > 0 else None