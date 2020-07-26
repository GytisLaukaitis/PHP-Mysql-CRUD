<?php include "db.php";?>
<?php
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
   }
}

function deleteRows() {
       global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];
    
       $query = "DELETE FROM users ";
       $query .= "WHERE id = $id ";
       
       $result = mysqli_query($connection, $query);
       if (!$result) {
        die('Query FAILED' . mysqli_error("init"));
       }
    }
?>