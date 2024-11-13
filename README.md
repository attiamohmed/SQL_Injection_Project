# SQL Injection Demonstration Project

This project demonstrates the differences between a **vulnerable** and a **solid** version of an application regarding SQL injection security. Follow the instructions below to set up, run, and test both versions.

---

## Prerequisites

1. Install [XAMPP](https://www.apachefriends.org/index.html).
2. Start both **Apache Server** and **MySQL** services in XAMPP.

---

## Project Directory Structure

Place the project files in the following directory: `C:\xampp\htdocs`.

This setup ensures that the application will be accessible via `http://localhost`.

---

## Running the Project

### Accessing the Solid (Secured) Version

To access the solid (secured) version of the application, open your browser and enter the following URL: `http://localhost/SQL_inject/Solid_app/index.html`


### Accessing the Vulnerable Version

To access the vulnerable version of the application, open your browser and enter the following URL: `http://localhost/SQL_inject/vulnerable_app/index.html`


---

## Testing SQL Injection Vulnerability

In the **vulnerable version**, you can test SQL injection by using the `OR 1=1` operator in the username field. For example:

Username: `Hanna' OR '1'='1`

Using this input in the **vulnerable version** will grant you access by exploiting the SQL injection vulnerability.

However, if you input the same operator in the **solid version**, it will **not grant access**. The solid version is designed to prevent SQL injection attacks, providing an additional layer of security to protect user data.

---

## Important Notes

- Ensure that the Apache server and MySQL database are running in XAMPP before accessing the URLs.
- This project is intended for **educational purposes only** and demonstrates the importance of securing applications against SQL injection attacks.






