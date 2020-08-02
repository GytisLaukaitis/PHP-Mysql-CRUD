<?php include "db.php";?>
<?php
// create project logic
function createProjectRows() {
  if (isset($_POST['submit'])) {
    global $connection;
    $Project_name = $_POST['Project_name'];
    $Deadline = $_POST['Deadline'];
    $Names = $_POST['Names'];
     $Project_name = mysqli_real_escape_string($connection, $Project_name);
     $Deadline = mysqli_real_escape_string($connection, $Deadline);
     $Names = mysqli_real_escape_string($connection, $Names);
     header("Location: http://127.0.0.1/SQL_CRUD/projects.php");

 
    $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
    if (!$connection) {
     die("Database connection failed ");
    }
 $query = "INSERT INTO projects(Project_name, Deadline, Names) ";
 $query  .= "VALUES ('$Project_name', '$Deadline', '$Names')";
 
 $result = mysqli_query($connection, $query);
 
 if (!$result) {
     die('Query FAILED ' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
  }
}
// read project from sql logic
function readProjectRows() {
    global $connection;
    $query = "SELECT id,Project_name,Deadline,Names FROM projects";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
     while ($row = mysqli_fetch_assoc($result)) {
      echo '<br>';
      echo 'Id: ' . $row['id'] .'</br>';
      echo 'Project name : ' . $row['Project_name'] .'</br>';
      echo 'Deadline : ' . $row['Deadline'] .'</br>';
      echo 'Names : ' . $row['Names'] .'</br>';
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
// update project logic
function updateProjectTable() {
if (isset($_POST['submit'])) {
  global $connection;
  $Project_name = $_POST['Project_name'];
  $Deadline = $_POST['Deadline'];
  $Names = $_POST['Names'];
  $id = $_POST['id'];

   $query = "UPDATE projects SET ";
   $query .= "Project_name = '$Project_name', ";
   $query .= "Deadline = '$Deadline', ";
   $query .= "Names = '$Names' ";
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
// delete project logic
function deleteProjectRows() {
  if (isset($_POST['submit'])) {
     global $connection;
     $id = $_POST['id'];
  
     $query = "DELETE FROM `projects` ";
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