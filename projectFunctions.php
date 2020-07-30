<?php include "db.php";?>
<?php
// create logic
function createProjectRows() {
if (isset($_POST['submit'])) {
    global $connection;
    $Project_name = $_POST['Project_name'];
    $Deadline = $_POST['Deadline'];
     $Project_name = mysqli_real_escape_string($connection, $Project_name);
     $Deadline = mysqli_real_escape_string($connection, $Deadline);
     header("Location: http://127.0.0.1/SQL_CRUD/projects.php");

 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
    if (!$connection) {
     die("Database connection failed ");
    }
 $query = "INSERT INTO projects(Project_name, Deadline) ";
 $query  .= "VALUES ('$Project_name ', '$Deadline') ";
 
 $result = mysqli_query($connection, $query);
 
 if (!$result) {
     die('Query FAILED ' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
  }
}
// read from sql logic
function readProjectRows() {
    global $connection;
    $query = "SELECT id,Project_name,Deadline FROM projects";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
     while ($row = mysqli_fetch_assoc($result)) {
      echo '<br>';
      echo 'Id: ' . $row['id'] .'</br>';
      echo 'Project name : ' . $row['Project_name'] .'</br>';
      echo 'Deadline : ' . $row['Deadline'] .'</br>';
     }
}

function showAllProjectDAta() {
   global $connection;
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
   if (!$connection) {
    die("Database connection failed");
   }
$query = "SELECT * FROM projects";
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
function updateProjectTable() {
if (isset($_POST['submit'])) {
  global $connection;
  $Project_name = $_POST['Project_name'];
  $Deadline = $_POST['Deadline'];
  $id = $_POST['id'];

   $query = "UPDATE projects SET ";
   $query .= "Project_name = '$Project_name', ";
   $query .= "Deadline = '$Deadline' ";
   $query .= "WHERE id = $id ";
   
   $result = mysqli_query($connection, $query);
   if (!$result) {
    die('Query FAILED ' . mysqli_error($connection));
   } else {
     echo "Record updated";
     header("Location: http://127.0.0.1/SQL_CRUD/projects.php");
   }
  }
}
// delete logic
function deleteProjectRows() {
    if (isset($_POST['submit'])) {
       global $connection;
       $Project_name = $_POST['Project_name'];
       $Deadline = $_POST['Deadline'];
       $id = $_POST['id'];
    
       $query = "DELETE FROM projects ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
       } else {
        echo "Record deleted";
        header("Location: http://127.0.0.1/SQL_CRUD/projects.php");
       }
      }
    }
?>