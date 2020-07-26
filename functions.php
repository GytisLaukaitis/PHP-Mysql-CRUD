<?php include "db.php";?>
<?php

function createRows() {
if (isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashformat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashformat . $salt;
    $password = crypt($password, $hash_and_salt);
 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'firsapp');
    if (!$connection) {
     die("Database connection failed");
    }
 $query = "INSERT INTO users(username,password) ";
 $query  .= "VALUES ('$username', '$password')";
 
 $result = mysqli_query($connection, $query);
 
 if (!$result) {
     die('Query FAILED' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
  }
}

function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error("init"));
    }
     while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function showAllDAta() {
   global $connection;
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'firsapp');
   if (!$connection) {
    die("Database connection failed");
   }
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED' . mysqli_error("init"));
}
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
   echo "<option value='$id'>$id</option>" ;
  }
}

function updateTable() {
if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];

   $query = "UPDATE users SET ";
   $query .= "username = '$username', ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id ";
   global $connection;
   $result = mysqli_query($connection, $query);
   if (!$result) {
    die('Query FAILED' . mysqli_error("init"));
   } else {
     echo "Record updated";
   }
  }
}

function deleteRows() {
    if (isset($_POST['submit'])) {
       global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];
    
       $query = "DELETE FROM users ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if (!$result) {
        die('Query FAILED' . mysqli_error("init"));
       } else {
        echo "Record deleted";
       }
      }
    }
?>