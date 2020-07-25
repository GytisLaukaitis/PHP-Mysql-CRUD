<?php 
   $connection = mysqli_connect('localhost', 'root', 'mysql', 'firsapp');
   if (!$connection) {
    die("Database connection failed");
   }
?>