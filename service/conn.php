<?php
    $conn = new mysqli('localhost','root','','belajarphp');
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>