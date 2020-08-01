<?php include "db.php";?>
<?php
// create logic
function createRows() {
if (isset($_POST['submit'])) {
    global $connection;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $Project_id = $_POST['Project_id'];
     $name = mysqli_real_escape_string($connection, $name);
     $surname = mysqli_real_escape_string($connection, $surname);
     $age = mysqli_real_escape_string($connection, $age);
     $Project_id = mysqli_real_escape_string($connection, $Project_id);
     header("Location: http://127.0.0.1/SQL_CRUD/Crud.php");

    //password encryption logic demo

    // $hashformat = "$2y$10$";
    // $salt = "iusesomecrazystrings22";
    // $hash_and_salt = $hashformat . $salt;
    // $password = crypt($password, $hash_and_salt);
 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
    if (!$connection) {
     die("Database connection failed ");
    }
 $query = "INSERT INTO users(name, surname, age, Project_id) ";
 $query  .= "VALUES ('$name', '$surname', '$age', '$Project_id')";
 
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
    $query = "SELECT id,name,surname,age,Project_id FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
     while ($row = mysqli_fetch_assoc($result)) {
      echo '<br>';
      echo 'Id: ' . $row['id'] .'</br>';
      echo 'Name: ' . $row['name'] .'</br>';
      echo 'Surname: ' . $row['surname'] .'</br>';
      echo 'Age: ' . $row['age'] .'</br>';
      echo 'Project: ' . $row['Project_id'] .'</br>';
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
  $Project_id = $_POST['Project_id'];
  $id = $_POST['id'];


   $query = "UPDATE users SET ";
   $query .= "name = '$name', ";
   $query .= "surname = '$surname', ";
   $query .= "age = '$age', ";
   $query .= "Project_id = '$Project_id' ";
   $query .= "WHERE id = $id ";
   
   $result = mysqli_query($connection, $query);
   if (!$result) {
    die('Query FAILED ' . mysqli_error($connection));
   } else {
     echo "Record updated";
     header("Location: http://127.0.0.1/SQL_CRUD/Crud.php");
   }
  }
}
// Asign project logic
function asign() {
  if (isset($_POST['submit'])) {
    global $connection;
      $query = "UPDATE users
      JOIN projects 
      ON  users.Project_id = projects.id
      SET users.Project_id = projects.Project_name";
      
     $result = mysqli_query($connection, $query);
     if (!$result) {
      die('Query FAILED ' . mysqli_error($connection));
     } else {
       echo "Record updated";
       header("Location: http://127.0.0.1/SQL_CRUD/Crud.php");
     }
    }
 }
 // Asign name to project logic
function asignNames() {
  if (isset($_POST['submit'])) {
    global $connection;
      $query = "UPDATE projects
      JOIN users 
      ON  projects.Project_name = users.Project_id
      SET projects.Names = users.Name";
      
     $result = mysqli_query($connection, $query);
     if (!$result) {
      die('Query FAILED ' . mysqli_error($connection));
     } else {
       echo "Record updated";
       header("Location: http://127.0.0.1/SQL_CRUD/Crud.php");
     }
    }
 }

// delete logic
function deleteRows() {
    if (isset($_POST['submit'])) {
       global $connection;
       $id = $_POST['id'];
    
       $query = "DELETE FROM users ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
       } else {
        echo "Record deleted";
        header("Location: http://127.0.0.1/SQL_CRUD/Crud.php");
       }
      }
    }
?>