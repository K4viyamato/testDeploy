<?php

    $server = 'localhost';
    $username = 'root';
    $password = '1234';
    $database = 'earth_galle';

    $conn = new mysqli($server, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
?>