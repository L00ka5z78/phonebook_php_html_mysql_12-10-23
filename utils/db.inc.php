<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phonebook";

// connect database 
$connection = new mysqli($servername, $username, $password, $database);

// check db connection
if ($connection->connect_error) {
    die("Connection failed" . $connection->connect_error);
}
