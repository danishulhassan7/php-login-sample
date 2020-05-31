<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/97acf97beb.js"></script>
    <title>Login</title>
    <style>
    .cc {
        text-align:center;
    }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="ml-4">Login Form</h2>
        <form action="check.php" method="POST">
            <div class="form-group col-md-9">
            <label for="username" class="form-label col-md-3"><strong>Username:</strong></label>
            <div class="col-md-6">
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
            </div>
            </div>

            <div class="form-group col-md-9">
            <label for="password" class="form-label col-md-3"><strong>Password:</strong></label>
            <div class="col-md-6">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            </div>

            <div class="form-group cc col-md-8">
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
