<?php
include("menu.php");

echo '<div class="main-content">
<div class="title">Message</div>
<div class="content">';
try{
    include 'dbconnect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $q="INSERT INTO `user`(`username`, `password`, `status`) VALUES ('$username','$password','pending')";
    mysqli_query($con,$q);
    echo "<div class='message success'>Data inserted succesfully</div>";
}
catch (Exception $ex) {
    http_response_code(400);
    echo $ex->getMessage();
}
?>