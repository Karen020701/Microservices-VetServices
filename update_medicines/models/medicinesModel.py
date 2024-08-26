class Medicines:
    @staticmethod
    def update_medicines(id, name, usage, price, quantity, cursor):
        query = """
        UPDATE medicines
        SET name = %s, usage = %s, price = %s, quantity = %s
        WHERE id = %s;
        """
        cursor.execute(query, (name, usage, price, quantity, id))
        return id if cursor.rowcount > 0 else None