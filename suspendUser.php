<?php
include("menu.php");

echo '<div class="main-content">
<div class="title">Message</div>
<div class="content">';
try{
    $id=$_GET['id'];
    include 'dbconnect.php';
    $q="UPDATE `user` SET `status`='suspend' WHERE id=$id";
    mysqli_query($con,$q);
    echo "<div class='message success'>User status updated successfully</div>";
}
catch (Exception $ex) {
    http_response_code(400);
    echo $ex->getMessage();
}
?>