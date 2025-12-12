import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
import sys

def send_email(name, email, message):
    smtp_server = "smtp.gmail.com"
    smtp_port = 587
    smtp_user = ""  # Replace with your Gmail address
    smtp_password = ""  # Replace with your Gmail App Password

    to_email = ""
    subject = "Contact Form Submission"
    
    msg = MIMEMultipart()
    msg['From'] = smtp_user
    msg['To'] = to_email
    msg['Subject'] = subject
    body = f"Name: {name}\nEmail: {email}\nMessage: {message}"
    msg.attach(MIMEText(body, 'plain'))

    try:
        # Connect to the Gmail SMTP server
        server = smtplib.SMTP(smtp_server, smtp_port)
        server.starttls()  # Upgrade connection to secure
        server.login(smtp_user, smtp_password)
        text = msg.as_string()
        server.sendmail(smtp_user, to_email, text)
        server.quit()
        print("Success")
    except Exception as e:
        print(f"Failed: {e}")

if __name__ == "__main__":
    name = sys.argv[1]
    email = sys.argv[2]
    message = sys.argv[3]
    send_email(name, email, message)
