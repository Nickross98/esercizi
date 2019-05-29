import psycopg2
try:
    connection = psycopg2.connect(user="postgres",
                                    password="asdasd123",
                                    host="localhost",
                                    port="5432",
                                    database="automobili")
    cursor = connection.cursor()
    postgreSQL_select_Query = "select * from fiat"
    cursor.execute(postgreSQL_select_Query)
    print("Uso della funzione cursor.fetchall() per ottenere i mobile_records")
    mobile_records = cursor.fetchall()

    for row in mobile_records:
        print("Id = ", row[0], )
        print("Name = ", row[1])
except (Exception, psycopg2.Error) as error :
    print ("Errore durante l'acquisizione di dati dal database: ", error)
finally:
    if(connection):
        cursor.close()
        connection.close()
        print("Connessione a PostgreSQL chiusa")
