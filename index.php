<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My phonebook</title>
    <!-- bootstrap styling taken from web -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Clients list</h2>
        <a class="btn btn-primary" href="/phphone/create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "phonebook";

                // database connection
                $connection = new mysqli($servername, $username, $password, $database);

                // check db connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                // read and display all clients from db

                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                // read data of every single row
                while ($row = $result->fetch_assoc()) {
                    echo "
                            <tr>                           
                            <td>$row[name]</td>
                            <td>$row[surname]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                               <a class='btn btn-primary btn-sm' href='/phonebook/edit.php?id=$row[id]'>Edit Client</a>
                               <a class='btn btn-danger btn-sm' href='/phonebook/delete.php?id=$row[id]'>Remove Client</a>                       
                            </td>
                        </tr>
                            ";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>