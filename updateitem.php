<?php
include("menu.php");

echo '<div class="main-content">
    <div class="title">message</div>
    <div class="content">';

    try {
        id=$_GET['id'];
        $itemname = $_POST['itemname'];
        $price = $_POST['price']; // Fixed typo: 'pirce' to 'price'
        $photo =$_FILES['photo']['name'];                // $_FILES['photo']['name']; // Placeholder for photo, as no file upload handling is shown
        // move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$photo);
    
        // move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$photo);
        
        $remarks = $_POST['remarks'];
    include("dbconnect.php");
    
    if(
        $_FILES['photo']['name']=='')
        {
        $q="UPDATE `prime` SET `itemname`='$itemname',`Price`='$price',`Remarks`='$remarks' WHERE id=$id";

    }else{
        $p="UPDATE `prime` SET `itemname`='$itemname',`Price`='$price',`Remarks`='$remarks' WHERE id=$id";
        move_uploaded_file($_FILES['photo']['tmp_name'], "photos/".$photo);
    }
mysqli_query($con,$q);
echo "<div class ='message success'>Data has been upteded succesfuuly</div>";
}
catch (Exception $ex) {
    http_response_code(400);
    echo $ex->getMessage();
}
?>

    