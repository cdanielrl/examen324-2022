#!c:\users\cdani\anaconda3\python.exe
import sys
sys.path.append("c:\\users\\cdani\\anaconda3\\lib\\site-packages")
import mysql.connector

print("Content-Type: text/html\n\n")
print("<!DOCTYPE html>")
print("<html lang=\"es-bo\">")
print("<html>")
print("<head>")
print("<title>Promedios</title>")
print("<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />")
print("<script src=\"js/login.js\"></script>")
print("</head>")
print("<body>")

cnx = mysql.connector.connect(user='academico', password='123456',
                              host='localhost',
                              database='academicodanielramirez')
cursor = cnx.cursor()
query = ("SELECT "
"'Promedio',"
"AVG(CASE WHEN persona.departamento='01' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Chuquisaca',"
"AVG(CASE WHEN persona.departamento='02' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'La Paz',"
"AVG(CASE WHEN persona.departamento='03' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Cochabamba',"
"AVG(CASE WHEN persona.departamento='04' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Oruro',"
"AVG(CASE WHEN persona.departamento='05' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Potosí',"
"AVG(CASE WHEN persona.departamento='06' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Tarija',"
"AVG(CASE WHEN persona.departamento='07' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Santa Cruz',"
"AVG(CASE WHEN persona.departamento='08' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Beni',"
"AVG(CASE WHEN persona.departamento='09' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Pando' "
"FROM inscripcion,persona WHERE inscripcion.ci_estudiante=persona.ci "
"GROUP BY departamento "
"UNION "
"SELECT "
"'Num. Inscritos',"
"AVG(CASE WHEN persona.departamento='01' THEN 1 ELSE 0 END) AS 'Chuquisaca',"
"AVG(CASE WHEN persona.departamento='02' THEN 1 ELSE 0 END) AS 'La Paz',"
"AVG(CASE WHEN persona.departamento='03' THEN 1 ELSE 0 END) AS 'Cochabamba',"
"AVG(CASE WHEN persona.departamento='04' THEN 1 ELSE 0 END) AS 'Oruro',"
"AVG(CASE WHEN persona.departamento='05' THEN 1 ELSE 0 END) AS 'Potosí',"
"AVG(CASE WHEN persona.departamento='06' THEN 1 ELSE 0 END) AS 'Tarija',"
"AVG(CASE WHEN persona.departamento='07' THEN 1 ELSE 0 END) AS 'Santa Cruz',"
"AVG(CASE WHEN persona.departamento='08' THEN 1 ELSE 0 END) AS 'Beni',"
"AVG(CASE WHEN persona.departamento='09' THEN 1 ELSE 0 END) AS 'Pando' "
"FROM inscripcion,persona WHERE inscripcion.ci_estudiante=persona.ci "
"GROUP BY departamento ")

cursor.execute(query)
columns = cursor.description 
resultados = [{columns[index][0]:column for index, column in enumerate(value)} for value in cursor.fetchall()]
print("<table>")
print("<thead>")
print("<tr>")
c=0;
for value in resultados:
    for (index,column) in enumerate(value):
        if(c<10):
            print("<th scope=\"col\">"+columns[index][0]+"</th>")
            c=c+1
print("</tr>")
print("</thead>")
print("<tdata>")
cursor.execute(query)
for row in cursor:
    print("<tr>")
    for data in row:
        print("<td>"+str(data)+"</td>")
    print("</tr>")
print("</tdata>")
print("</table>")
