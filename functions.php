<?php include "db.php";?>
<?php

function createRows() {
if (isset($_POST['submit'])) {
    global $connection;
    $date = $_POST['date'];
    $number = $_POST['number'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];
     $date = mysqli_real_escape_string($connection, $date);
     $number = mysqli_real_escape_string($connection, $number);
     $distance = mysqli_real_escape_string($connection, $distance);
     $time = mysqli_real_escape_string($connection, $time);
     

    //password encryption
    // $hashformat = "$2y$10$";
    // $salt = "iusesomecrazystrings22";
    // $hash_and_salt = $hashformat . $salt;
    // $password = crypt($password, $hash_and_salt);
 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'auto');
    if (!$connection) {
     die("Database connection failed ");
    }
 $query = "INSERT INTO radars(date,number,distance,time) ";
 $query  .= "VALUES ('$date', '$number', '$distance', '$time')";
 
 $result = mysqli_query($connection, $query);
 
 if (!$result) {
     die('Query FAILED ' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
  }
}

function readRows() {
    global $connection;
    $query = "SELECT * FROM radars";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
     while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function showAllDAta() {
   global $connection;
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'auto');
   if (!$connection) {
    die("Database connection failed");
   }
$query = "SELECT * FROM radars";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
   echo "<option value='$id'>$id</option>" ;
  }
}

function updateTable() {
if (isset($_POST['submit'])) {
  global $connection;
  $date = $_POST['date'];
  $number = $_POST['number'];
  $distance = $_POST['distance'];
  $time = $_POST['time'];
  $id = $_POST['id'];

   $query = "UPDATE radars SET ";
   $query .= "date = '$date', ";
   $query .= "number = '$number', ";
   $query .= "distance = '$distance', ";
   $query .= "time = '$time' ";
   $query .= "WHERE id = $id ";
   
   $result = mysqli_query($connection, $query);
   if (!$result) {
    die('Query FAILED ' . mysqli_error($connection));
   } else {
     echo "Record updated";
   }
  }
}

function deleteRows() {
    if (isset($_POST['submit'])) {
       global $connection;
       $date = $_POST['date'];
       $number = $_POST['number'];
       $distance = $_POST['distance'];
       $time = $_POST['time'];
       $id = $_POST['id'];
    
       $query = "DELETE FROM radars ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
       } else {
        echo "Record deleted";
       }
      }
    }
?>