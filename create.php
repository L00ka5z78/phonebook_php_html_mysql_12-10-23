<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <!-- bootstrap styling taken from web -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">First Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="surname" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">E-mail</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="">
                </div>
            </div>



            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/phphone/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>