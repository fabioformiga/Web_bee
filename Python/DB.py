import mysql.connector

mydb = mysql.connector.connect(
	host="127.0.0.1"
	user="root"
	passwd = "pt123PT#"
	database="beeproject_db"
)
mycursor = mydb.cursor()
sql = "INSERT INTO tmp_measure () VALUES (%s, %s)"
val = ("John", "Highway 21")
mycursor.execute(sql, val)
mydb.commit()
print(mycursor.rowcount, "record inserted.")
