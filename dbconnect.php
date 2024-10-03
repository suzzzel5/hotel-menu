<?php

$server = 'localhost';
    $username = 'root';
    $password = "";
    
    // Establishing database connection
    $con = new mysqli($server, $username, $password);
    mysqli_select_db($con,"inventory");

?>