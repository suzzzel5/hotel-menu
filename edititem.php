<?php
include("menu.php");
$id=$_GET['id'];
$q="select * from item where id=id";
include "dbconnect.php";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>

    <div class="main-content">
        <div class="title">Item details entry form</div>
        <div class="content">
    
    <form action="updateitem.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <label>itemname</label>
        <input type="text" name="itemname">

        <label>Price</label>
        <input type="text" name="price">
        
        <label>Stock</label>
        <input type="text" name="stock">

        <label>photo</label>
        <input type="file" name="photo">

        <label>Remakrs</label>
        <input name="remarks" >
        
        <input type="submit" name="">
    </form>
    </div>
    </div>
</body>
</html>
