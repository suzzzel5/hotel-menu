
<?php
include("menu.php");
?>

    <div class="main-content">
        <div class="title">Item details entry form</div>
        <div class="content">
    
    <form action="demo.php" method="post" enctype="multipart/form-data">
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