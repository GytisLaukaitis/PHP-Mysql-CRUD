<?php

if (isset($_POST['submit'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   $connection = mysqli_connect('localhost', 'root', 'mysql', 'firsapp');

   if ($connection) {

    echo "We are connected";
   } else {

    die("Database connection failed");
   }


$query = "INSERT INTO users(username,password) ";
$query  .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query FAILED' . mysqli_error("init"));
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>