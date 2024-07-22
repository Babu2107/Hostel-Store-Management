<?php
   $servername = "localhost";
   $username = "root";
    $password = "";
    $db="mitstores";
    $conn=mysqli_connect($servername,$username,$password,$db)or   die("Connection failed: " . $conn->connect_error);
?>