import smtplib
import random
import string
import mysql.connector

# Función para generar una contraseña temporal
def generate_temp_password(length=8):
    characters = string.ascii_letters + string.digits
    return ''.join(random.choice(characters) for _ in range(length))

# Datos de la cuenta de correo electrónico que enviará el mensaje
sender_email = 'campihappy1@gmail.com'
sender_password = 'campihappy123'

# Datos del destinatario
recipient_email = 'dayxas5@outlook.com'

# Recupera el correo electrónico del usuario de la solicitud PHP
import sys
user_email = sys.argv[1]

# Genera una contraseña temporal
temp_password = generate_temp_password()

# Configura el servidor SMTP de Gmail
smtp_server = 'smtp.gmail.com'
smtp_port = 587

# Inicia una conexión segura con el servidor SMTP
server = smtplib.SMTP(smtp_server, smtp_port)
server.starttls()

# Inicia sesión en la cuenta de correo
server.login(sender_email, sender_password)

# Crea el mensaje de correo
subject = 'Recuperación de contraseña'
message = f'Tu nueva contraseña temporal es: {temp_password}'

# Envía el correo
server.sendmail(sender_email, recipient_email, f'Subject: {subject}\n\n{message}')

# Cierra la conexión con el servidor SMTP
server.quit()

# Conecta a la base de datos MySQL
db = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='campihappy'
)

# Crea un cursor
cursor = db.cursor()

# Actualiza la contraseña en la tabla de usuarios
update_query = "UPDATE user SET pass = %s WHERE correo = %s"
cursor.execute(update_query, (temp_password, user_email))

# Confirma los cambios en la base de datos
db.commit()

# Cierra la conexión con la base de datos
db.close()

print('Correo de recuperación de contraseña enviado y contraseña actualizada en la base de datos.')
