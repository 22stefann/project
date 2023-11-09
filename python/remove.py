import mysql.connector  # za mysql-connector

# Povezivanje sa bazom podataka
connection = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="project_1"
)


cursor = connection.cursor()


sql = "DELETE FROM navigacija WHERE naziv = 'o nama'"
cursor.execute(sql)
connection.commit()  # Potvrdite izmene


cursor.close()
connection.close()