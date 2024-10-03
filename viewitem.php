<?php
$id=$_GET['id'];
$q="select * from item where id=$id";
include "dbconnect.php";
$result= mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
    include ('menu.php');
    
?>
<div class="main-content">
    <div class="title">Profile view</div>
    <div class="content">
        <div class="itemDisplay">
            <img src="photos/<?php echo $row[4]?>">
            <h2>ID : <?php echo $row[0]  ?></h2>
            <h2>Item name : <?php echo $row[1]  ?></h2>
            <h2>price : <?php echo $row[2]  ?></h2>
            <h2>stock : <?php echo $row[3]  ?></h2>
            <h2>Remakrs : <?php echo $row[5]  ?></h2>
    </div>
    <a href="edititem.php?id=<?php echo $id;?>" class="btn success">edit</a>
    <a herf="edititem.php?id=$id" class="btn success">Edit </a>
</div>
