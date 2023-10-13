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


![2023-10-13 (8)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/bafaba70-fb51-4d5b-8d6a-1c76bf9a082c)
![2023-10-13 (7)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/502e0796-b911-423e-9186-a2f8aafc1fb4)
![2023-10-13 (6)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/0ea51804-fd96-433f-bb90-86d22586bbf4)
![2023-10-13 (5)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/85802ebe-ba75-4c55-b437-641babbbcc6f)
![2023-10-13 (4)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/a97ccb65-58f6-4ffa-be56-030f4a4e606c)
![2023-10-13 (3)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/f83cf53d-0c99-4e1d-a8b0-24ce9e6e89b6)
![2023-10-13 (2)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/56d1596d-edd1-4579-a196-5fd4f093cfc4)
![2023-10-13 (1)](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/f65be6d0-9fa8-4e98-bfa4-329f4765f43d)
![2023-10-13](https://github.com/L00ka5z78/phonebook_php_html_mysql_12-10-23/assets/110019733/b4c051ab-2864-400c-b935-41248ffd09d6)

