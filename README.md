# phonebook_php_html_mysql_12-10-23
## Project IN PROGRESS

### Simple application with basic CRUD operations.
There is nothing special with this project. One can add clients, edit choosen client details and remove clients.

### Tech stack used:
- HTML
- Bootstrap
- PHP
- MySql

### Sources I used:

https://getbootstrap.com/docs/5.3/getting-started/introduction/
https://www.php.net/manual/en/index.php
https://www.php.net/manual/en/ref.array.php
https://www.php.net/manual/en/indexes.functions.php

### Database table and example data:

SQL Queries:

CREATE TABLE clients (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    surname VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL UNIQUE,
    phone VARCHAR(20) NULL,
    address VARCHAR(200) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO clients (name, surname, email, phone, address)
VALUES
('Billy, 'The kid', 'bill@wwest.com', '+123456789', 'Death valley, USA'),
('Eric', 'Cartman', 'big@bone.com', '+111222333', 'South Park, USA'),
('Johhny', 'Bravo', 'bravo@gmail.com', '+111333555', 'Aron City, USA'),
('Harry', 'Marley', 'harry@hogwart.com', '+111555999', 'hogwart, UK'),
('Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', '+32447788993', 'Manchester, England'),

To run this project, please clone the repository. Remember to have XAMPP running in the background.

### In the browser go to: localhost/projectDirectoryName/index.php
Then you should be able to play around with the app.

Right now 13.10.23 the app is workin, but there are features which I want to improove in nearest future.
WINS & LOOSES

Wins:
1. Works well.
2. Pretty scalable and responsive
3. Simple but readable outlook
4. I think code is pretty clear.

Looses:
1. At the moment, prone to sql injections
2. One issue with displaying success message.
3. Big code chunks in one file. It should be splitted into separate files and imported.
4. Delete client feature should have a confirmaton window or something like that.

## SCREENS

![2023-10-13 (9)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/26bb80dd-c480-4162-b78d-3bd8ed8e4f81)
![2023-10-13 (11)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/f1bc768e-02a0-4160-8603-51a771e788a7)
![2023-10-13 (10)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/6eef118f-3f8a-43cf-84fb-128541633e13)
