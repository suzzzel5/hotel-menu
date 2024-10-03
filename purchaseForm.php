<?php

include("menu.php");
include "dbconnect.php";
$q="select id, itemname,price from item";
$result=mysqli_query($con,$q);
?>
<div class="main-content">
    <div class="title">Item insert form</div>
    <div class="content">
        <form action="insertItem.php" method="post" enctype="multipart/from-data">
            <label>ItemName</label>
            <select name='itemname'>
                <?php
                while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                        echo "<option myid=".$row[0]." price=".$row[2].">";
                        echo $row[1];
                        echo "</option>";
                }?>
            </select>
            <label>Quantity</label>
            <input type="text" name="quantity">
            <br>
            <input type="submit" value="Add to cart" onclick="addtocart()" name="" class="btn success">
            <br>
            <br>
            <hr>
            <br>
            <div class="cart"></div>
        </form>
        
    </div>
</div>
<script type="text/javascript" src="myscript.js"></script>
