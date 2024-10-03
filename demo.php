<?php
include("menu.php");

echo '<div class="main-content">
    <div class="title">message</div>
    <div class="content">';

try {
    $itemname = $_POST['itemname'];
    $price = $_POST['price']; // Fixed typo: 'pirce' to 'price'
    $photo =$_FILES['photo']['name'];                // $_FILES['photo']['name']; // Placeholder for photo, as no file upload handling is shown
    // move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$photo);

    move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$photo);



    $remarks = $_POST['remarks'];
include("dbconnect.php");
    // $server = 'localhost';
    // $username = 'root';
    // $password = "";
    
    // // Establishing database connection
    // $con = new mysqli($server, $username, $password, "prime_bim");

    $q="INSERT INTO `item`(`itemname`, `price`, `stock`, `photo`, `remarks`) VALUES ('$itemname','$price',0,'$photo','$remarks')";

    $r=mysqli_query($con,$q);
    echo "<div clas='msg sucess'>Data inserted successfully</div>";
}
catch (Exception $ex) {
    http_response_code(400);
    echo $ex->getMessage();
}
?>
