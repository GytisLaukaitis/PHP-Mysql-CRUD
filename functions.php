<?php include "db.php";?>
<?php
// create logic
function createRows() {
if (isset($_POST['submit'])) {
    global $connection;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $project = $_POST['project'];
     $name = mysqli_real_escape_string($connection, $name);
     $surname = mysqli_real_escape_string($connection, $surname);
     $age = mysqli_real_escape_string($connection, $age);
     $project = mysqli_real_escape_string($connection, $project);
     

    //password encryption logic demo

    // $hashformat = "$2y$10$";
    // $salt = "iusesomecrazystrings22";
    // $hash_and_salt = $hashformat . $salt;
    // $password = crypt($password, $hash_and_salt);
 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
    if (!$connection) {
     die("Database connection failed ");
    }
 $query = "INSERT INTO users(name, surname, age, project) ";
 $query  .= "VALUES ('$name', '$surname', '$age', '$project')";
 
 $result = mysqli_query($connection, $query);
 
 if (!$result) {
     die('Query FAILED ' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
  }
}
// read from sql logic
function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
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
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
   if (!$connection) {
    die("Database connection failed");
   }
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
   echo "<option value='$id'>$id</option>" ;
  }
}
// update logic
function updateTable() {
if (isset($_POST['submit'])) {
  global $connection;
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $age = $_POST['age'];
  $project = $_POST['project'];
  $id = $_POST['id'];

   $query = "UPDATE users SET ";
   $query .= "name = '$name', ";
   $query .= "surname = '$surname', ";
   $query .= "age = '$age', ";
   $query .= "project = '$project' ";
   $query .= "WHERE id = $id ";
   
   $result = mysqli_query($connection, $query);
   if (!$result) {
    die('Query FAILED ' . mysqli_error($connection));
   } else {
     echo "Record updated";
   }
  }
}
// delete logic
function deleteRows() {
    if (isset($_POST['submit'])) {
       global $connection;
       $name = $_POST['name'];
       $surname = $_POST['surname'];
       $age = $_POST['age'];
       $project = $_POST['project'];
       $id = $_POST['id'];
    
       $query = "DELETE FROM users ";
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