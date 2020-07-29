
<!-- connection to DB logic -->
<?php 
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'people');
   if (!$connection) {
    die("Database connection failed");
   }
?>