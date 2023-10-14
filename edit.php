<?php
require_once "utils/db.inc.php";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "phonebook";

// // connect database 
// $connection = new mysqli($servername, $username, $password, $database);

// // check db connection
// if ($connection->connect_error) {
//     die("Connection failed" . $connection->connect_error);
// }

$name = '';
$surname = '';
$email = '';
$phone = '';
$address = '';
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // check if we hav clients data (id)
    if (!isset($_GET["id"])) {
        header("location: /phphone/index.php");
        exit;
    }
    $id = $_GET["id"];

    //read the required row in db table

    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /phphone/index.php");
        exit;
    }

    // form will be prefilled with this data
    $name = $row["name"];
    $surname = $row["surname"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
} else {
    // post method: update clients data
    //read clients data
    $id = $_POST["id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($id) || empty($name) || empty($surname) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "Please fill out required fields";
            break;
        }
        $sql = "UPDATE clients " .
            "SET name = '$name', surname = '$surname', email = '$email', phone = '$phone', address = '$address'" .
            "WHERE id=$id";

        $result = $connection->query($sql);

        //check if query is correctly executed
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Client updated successfully";
        header("location: /phphone/index.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <!-- bootstrap styling taken from web -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- js bootstrap added from bootstrap cdn links to solve the issue with closing X mark -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">

        <?php
        include("templates/nav.php");
        ?>
        <h2>Edit Client Details</h2>



        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div> 
            ";
        }
        ?>

        <form method="post">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">First Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="surname" value="<?php echo $surname; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">E-mail</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>                
                        <div class='offset-sm-3 col-sm-6'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/phphone/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

        <?php
        include("templates/footer.php");
        ?>
    </div>
</body>

</html>