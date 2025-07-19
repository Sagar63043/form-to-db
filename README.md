# Form to DB Project

This project is a simple contact form using HTML, CSS, PHP, and MySQL.

## Features:
- HTML form with validation
- PHP backend to insert into MySQL
- Simple styling
- Ready for deployment

## MySQL Table:

```sql
CREATE DATABASE formtodb;

USE formtodb;

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);
# form-to-db
