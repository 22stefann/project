import mysql.connector  # za mysql-connector

# Povezivanje sa bazom podataka
connection = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="project_1"
)


cursor = connection.cursor()


sql = "INSERT INTO proizvodi (name, description, price) VALUES (%s, %s, %s)"
val = ("vrednost1", "vrednost2", "130")
cursor.execute(sql, val)
connection.commit()  # Potvrdite izmene


cursor.close()
connection.close()


