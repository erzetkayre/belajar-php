<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "belajarphp";

    $conn = new mysqli($server, $username, $password, $db);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    } 
?>